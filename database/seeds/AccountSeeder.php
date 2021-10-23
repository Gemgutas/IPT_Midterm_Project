<?php

use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $accounts = [
            [
                'id' => 1,
                'user_id' =>1,
                'acct_name' => 'Garfield Account',
                'init_invest' => 12345.21,
                'start_date' => '2020-09-01'
            ],
            [
                'id' => 2,
                'user_id' =>2,
                'acct_name' => 'Munchkin Account',
                'init_invest' => 54321.21,
                'start_date' => '2021-08-22'
            ],
            [
                'id' => 3,
                'user_id' =>3,
                'acct_name' => 'Rhymn Account',
                'init_invest' => 22333.21,
                'start_date' => '2021-05-23'
            ]
        ];
        foreach($accounts as $acc){
            \App\Account::create($acc);
        }
    }
}
