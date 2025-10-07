<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        $users = [
            ['name' => 'ADMIN', 'email' => 'admin@gmail.com'],
            ['name' => 'ARISKA EFENDI', 'email' => 'ariska.efendi@gmail.com'],
            ['name' => 'DENNY SOFIAN WAHYUDI', 'email' => 'denny.sofian.wahyudi@gmail.com'],
            ['name' => 'ABDURROZAQ', 'email' => 'abdurrozaq@gmail.com'],
            ['name' => 'DHENI ULVA SUJATMIKO', 'email' => 'dheni.ulva.sujatmiko@gmail.com'],
            ['name' => 'FERRY DIAN MARTIN', 'email' => 'ferry.dian.martin@gmail.com'],
            ['name' => 'RIKA ARIF APRIANTO', 'email' => 'rika.arif.aprianto@gmail.com'],
            ['name' => 'TRI ASMO SUSANDI', 'email' => 'tri.asmo.susandi@gmail.com'],
            ['name' => 'YOSEPHINE SETYANA KUSUMAWARDHANI', 'email' => 'yosephine.setyana.kusumawardhani@gmail.com'],
            ['name' => 'AGUNG ADITYA WIRAWAN', 'email' => 'agung.aditya.wirawan@gmail.com'],
            ['name' => 'ARIF SAIFUDDIN', 'email' => 'arif.saifuddin@gmail.com'],
            ['name' => 'KHOMSUN MUBAROK', 'email' => 'khomsun.mubarok@gmail.com'],
            ['name' => 'MAULADY PERMANA', 'email' => 'maulady.permana@gmail.com'],
            ['name' => "RUHUDDIANA SRI WAHYU WA'ALIIYYUS SOLEHAH", 'email' => 'ruhuddiana.sri.wahyu.waaliiyyus.solehah@gmail.com'],
            ['name' => 'SRI OKYK WIDIAWATI', 'email' => 'sri.okyk.widiawati@gmail.com'],
            ['name' => 'VINSA MUSTOFA ANWAR', 'email' => 'vinsa.mustofa.anwar@gmail.com'],
            ['name' => 'HABIBI BAITULLAH', 'email' => 'habibi.baitullah@gmail.com'],
            ['name' => 'SUBAKTIYANTO', 'email' => 'subaktiyanto@gmail.com'],
        ];

        foreach ($users as $u) {
            User::updateOrCreate(
                ['email' => $u['email']],
                [
                    'name' => $u['name'],
                    'password' => Hash::make('password'), // password = "password"
                    'email_verified_at' => now(),
                ]
            );
        }
    }
}
