<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\gambarmodel;
use App\Models\PendataanModel;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //  \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'ibrahim',
            'email' => 'aihafiz@gmail.com',
            'password' => bcrypt('karen')
        ]);

        PendataanModel::create([
            'nama' => 'ibrahim',
            'no_hp' => '086458235',
            'umur' => '21',
            'email' => 'ibrahim04mei@gmail.com',
            'jenis_kelamin' => 'pria',
            'tanggal_lahir' => '2001-04-05',
            'alamat' => 'jl Soa Siu',
            'pend_akhir' => 'SMK',
            'sosmed' => 'ibrahim_s'
        ]);

        PendataanModel::create([
            'nama' => 'karen',
            'no_hp' => '0864534535',
            'umur' => '21',
            'email' => 'karen@gmail.com',
            'jenis_kelamin' => 'wanita',
            'tanggal_lahir' => '2001-07-05',
            'alamat' => 'jl Bhayangkara',
            'pend_akhir' => 'SMK',
            'sosmed' => 'karen_p'
        ]);
    }
}
