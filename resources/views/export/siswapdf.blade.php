<table class="table" style="border:1px solid #ddd">
    <thead>
        <tr>
            <th width="13%">NAMA LENGKAP</th>
            <th width="12%">JENIS KELAMIN</th>
            <th width="12%">TANGGAL LAHIR</th>
            <th width="13%">ALAMAT</th>
            <th width="13%">INSTANSI</th>
            <th width="12%">EMAIL</th>
            <th width="12%">INSTAGRAM</th>
            <th width="13%">NO HANDPHONE</th>
        </tr>
    </thead>
    <tbody>
        @foreach($siswa as $s)
        <tr>
            <td>{{$s->nama_lengkap()}}</td>
            <td>{{$s->jenis_kelamin}}</td>
            <td>{{$s->tanggalLahir}}</td>
            <td>{{$s->alamat}}</td>
            <td>{{$s->instansi}}</td>
            <td>{{$s->email}}</td>
            <td>{{$s->instagram}}</td>
            <td>{{$s->noHandphone}}</td>
        </tr>
        @endforeach
    </tbody>


</table>