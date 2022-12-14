<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdministratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $administrator = new \App\Models\User;
        $administrator->username = "administrator";
        $administrator->name = "Site Administrator";
        $administrator->email = "admin@gmail.com";
        $administrator->roles = json_encode(["ADMIN"]);
        $administrator->password = Hash::make("password");
        $administrator->avatar = "saat-ini-tidak-ada-file.png";
        $administrator->address = "Sarmili, Bintaro, Tangerang Selatan";

        $administrator->save();

        $this->command->info("User Admin berhasil diinsert");

        // $datas = [
        //     [
        //         'username' => 'administrator',
        //         'name' => 'Site Administrator',
        //         'email' => 'admin@gmail.com',
        //         'roles' => json_encode(["ADMIN"]),
        //         'password' => Hash::make("password"),
        //         'avatar' => 'saat-ini-tidak-ada-file.png',
        //         'address' => 'Sarmili, Bintaro, Tangerang Selatan',

        //     ]
        // ];

        // User::insert($datas);
    }
}