<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    //
    protected $table = 'member';

    protected $fillable = [
        'nama_depan', 'nama_belakang', 'jenis_kelamin', 'tanggalLahir', 'alamat', 'instansi', 'email', 'instagram', 'noHandphone', 'avatar', 'user_id'
    ];

    public function getAvatar()
    {
        if(!$this->avatar){
            return asset('images/default.jpg');
        }

        return asset('images/' .$this->avatar);
    }

    public function nama_lengkap()
    {
        return $this->nama_depan. ' ' .$this->nama_belakang;
    }
}
