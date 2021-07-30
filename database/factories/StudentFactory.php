<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Student;
use Faker\Generator as Faker;

$factory->define(Student::class, function (Faker $faker) {
    return [
        'nik' => $faker->randomNumber,
        'nama' => $faker->userName(),
        'jenis_kelamin' => 'male',
        'tempat_lahir' => $faker->city(),
        'tanggal_lahir' => $faker->dateTimeBetween(),
        'alamat' => $faker->address(),
    ];
});
