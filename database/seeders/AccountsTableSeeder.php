<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\carbon;
use DB;

class AccountsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('accounts')->insert([

            [
             'amount' => 2500,
             'user_id'=> 1,
             'created_at' =>Carbon::now()->format('y-m-d H:i:s'),
             'updated_at' =>Carbon::now()->format('y-m-d H:i:s'),
            ],
        
            [
                'amount' => 3000,
                'user_id' => 2,
             'created_at' =>Carbon::now()->format('y-m-d H:i:s'),
             'updated_at' =>Carbon::now()->format('y-m-d H:i:s'),
            ],
            [
                'amount' => 25000,
                'user_id'=> 1,
                'created_at' =>Carbon::now()->format('y-m-d H:i:s'),
                'updated_at' =>Carbon::now()->format('y-m-d H:i:s'),
               ],
            ]);
    }
}
