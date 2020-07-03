<?php

namespace App\Http\Controllers\Admin;

use App\Exports\SiswaExport;
use Maatwebsite\Excel\Facades\Excel;
// use Yajra\DataTables\Facades\DataTables;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PDF;
// use App\Member;

class AdminController extends Controller
{
    //
    public function index(Request $request)
    {
        // dd($request->all());

        if ($request->has('cari')) {
            $data_anggota = \App\Member::where('nama_depan', 'LIKE', '%' . $request->cari . '%')->paginate(25);
        } else {
            $data_anggota = \App\Member::all();
        }

        // dd($siswa);
        return view('admin.index', ['data_anggota' => $data_anggota]);
    }

    public function create(Request $request)
    {
        $this->validate($request,[
            'nama_depan' => 'required|min:3',
            'nama_belakang' => 'required',
            'jenis_kelamin' => 'required',
            'tanggalLahir' => 'required',
            'alamat' => 'required',
            'instansi' => 'required',
            'email' => 'required|email|unique:users',
            'instagram' => 'required',
            'noHandphone' => 'required',
            'avatar' => 'mimes:jpeg,png'
        ]);

        //static function
        $user = new \App\User;
        $user->role = 'member';
        $user->name = $request->nama_depan;
        $user->email = $request->email;
        $user->password = bcrypt('rahasia');
        $user->remember_token = str_random(60);
        $user->save();

        //insert ke table member
        $request->request->add(['user_id' => $user->id]);
        $member = \App\Member::create($request->all());

        // \App\Siswa::create($request->all());

        if ($request->hasFile('avatar')) {
            $request->file('avatar')->move('images/', $request->file('avatar')->getClientOriginalName());
            $member->avatar = $request->file('avatar')->getClientOriginalName();
            $member->save();
        }
        return redirect('/admin')->with('sukses', 'data berhasil diinput');

        //dicek datanya masuk ga
        // return $request->all();
    }

    public function edit($id)
    {
        $cekmember = \App\Member::find($id);
        // dd($siswa);
        return view('admin/edit', ['member' => $cekmember]);
    }

    public function update(Request $request, $id)
    {
        // dd($request->all());
        $memberupdate = \App\Member::find($id);
        $memberupdate->update($request->all());
        if ($request->hasFile('avatar')) {
            $request->file('avatar')->move('images/', $request->file('avatar')->getClientOriginalName());
            $memberupdate->avatar = $request->file('avatar')->getClientOriginalName();
            $memberupdate->save();
        }
        return redirect('/admin')->with('sukses', 'Data berhasil di update');
    }

    public function delete($id)
    {
        $siswa = \App\Member::find($id);
        $siswa->delete();

        return redirect('/admin')->with('sukses', 'Data berhasil dihapus');
    }

    public function profile($id)
    {
        $siswa = \App\Member::find($id);
        return view('admin.profile', ['siswa' => $siswa]);
        
    }

    public function exportExcel()
    {
        return Excel::download(new SiswaExport, 'anggota.xlsx');
    }

    public function exportPdf()
    {
        // $pdf = PDF::loadHTML('<h1>Data Anggota</h1>');
        $siswa = \App\Member::all();
        $pdf = PDF::loadView('export.siswapdf',['siswa' => $siswa])->setPaper('letter', 'landscape');
        return $pdf->download('anggota.pdf');
    }

    public function profileAdmin()
    {
        // echo 'gsgsgsg';
        return view('admin.profileAdmin');

    }

    public function getdatamember()
    {
        $member = \App\Member::select('member.*');
        // $member = \App\Member::all();

        return \Yajra\DataTables\Facades\DataTables::eloquent($member)
        ->addColumn('nama_lengkap',function($s){
            return $s->nama_depan.' '.$s->nama_belakang;
        })
        ->addColumn('aksi',function($row){
            $btn = '<a href="/admin/{{$member->id}}/edit" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Edit" class="show btn btn-warning btn-sm showProduct">Edit</a>';
            $btn = $btn.' <a href="/admin/{{$siswa-id}}/delete" data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-danger btn-sm deleteProduct">Delete</a>';

            return $btn;
        })
        
        ->rawColumns(['nama_lengkap','aksi'])
        ->toJson();
    }
}
