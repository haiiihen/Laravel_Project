<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Member::class, function (Faker $faker) {
    return [
        //
        'user_id' => 100,
        'nama_depan' => $faker->name,
        'nama_belakang' => $faker->name,
        'jenis_kelamin' => $faker->randomElement(['Perempuan','Laki-laki']),
        'tanggalLahir' => $faker->date,
        'alamat' => $faker->address,
        'instansi' => $faker->company,
        'email' => $faker->email,
        'instagram' => $faker->name,
        'noHandphone' => $faker->phoneNumber,
    ];
});
