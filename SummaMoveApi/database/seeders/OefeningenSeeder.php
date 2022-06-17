<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class OefeningenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('oefeningen')->insert([
            'naam' => 'sit up',
            'beschrijving' => 'training voor je buik door je eigen lichaamsgewicht te gebruiken',
            'img' => 'https://calisthenicsworld.nl/wp-content/uploads/2022/02/Sit-Up-oefening-uitleg-1024x1024.png',
            
        ]);
    }
}
