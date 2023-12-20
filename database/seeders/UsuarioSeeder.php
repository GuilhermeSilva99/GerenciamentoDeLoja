<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if(!User::where('email','=','guiobmep@gmail.com')->count()){
            DB::table('users')->insert([
                'nome' => 'Guilherme Silva',
                'email' => 'guiobmep@gmail.com',
                'password' => Hash::make('4cp00303'),
                'cargo' => 'super',
                'loja' => 0
            ]);
        }

        if(!User::where('email','=','adm@email.com')->count()){
            DB::table('users')->insert([
                'nome' => 'Teste adm',
                'email' => 'adm@email.com',
                'password' => Hash::make('123456789'),
                'cargo' => 'administrador',
                'loja' => 0
            ]);
        }

        if(!User::where('email','=','atendente@email.com')->count()){
            DB::table('users')->insert([
                'nome' => 'Teste atendente',
                'email' => 'atendente@email.com',
                'password' => Hash::make('123456789'),
                'cargo' => 'atendente',
                'loja' => 0
            ]);
        }
    }
}
