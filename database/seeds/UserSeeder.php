<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $list = [
            [
                'id'=>'1',
                'lname'=>'Gutas',
                'fname'=>'Gemmarie',
                'address'=>'Pinayagan Norte,Tubigon,Bohol',
                'phone'=>'09121234',
                'email'=>'gemmarie20@email.com',
                'password'=>bcrypt('pass_123')
            ],
            [
                'id'=>'2',
                'lname'=>'Gentry',
                'fname'=>'Louis',
                'address'=>'Oregon, USA',
                'phone'=>'09123145',
                'email'=>'Louis@email.com',
                'password'=>bcrypt('pass_123')
            ],
            [
                'id'=>'3',
                'lname'=>'Dominguez',
                'fname'=>'Christian',
                'address'=>'El Salvador',
                'phone'=>'09123214',
                'email'=>'Christ@email.com',
                'password'=>bcrypt('pass_123')
            ],
        ];
        foreach($list as $user){
            \App\User::create($user);
        }

    }
}
