<?php

use Illuminate\Database\Seeder;
use App\Mahasiswa;
use App\Dosen;
use App\AdminAkademik;
use App\Kelas;
use Illuminate\Support\Facades\Hash;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $mhsDede = Mahasiswa::create(array(
            'username' => "mahasiswa",
            'name' => "Mahasiswa Dummy",
            'password' => Hash::make('qwerty123'),
        ));

        Dosen::create([
            'username' => "dosen",
            'name' => "Dosen Dummy",
            'kode' => "DMY",
            'password' => Hash::make('qwerty123'),
        ]);

        Dosen::create([
            'username' => "bambang",
            'name' => "Bambang Ari Wahyudi",
            'kode' => "BBD",
            'password' => Hash::make('qwerty123'),
        ]);

        Dosen::create([
            'username' => "suyanto",
            'name' => "Suyanto",
            'kode' => "SUO",
            'password' => Hash::make('qwerty123'),
        ]);

        Dosen::create([
            'username' => "tisa",
            'name' => "Siti Saadah",
            'kode' => "SSD",
            'password' => Hash::make('qwerty123'),
        ]);


        AdminAkademik::create([
            'username' => "admin",
            'name' => "Mimin Sejati",
            'password' => Hash::make('qwerty123'),
        ]);

    }
}
