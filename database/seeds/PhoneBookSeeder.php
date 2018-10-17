<?php

use Illuminate\Database\Seeder;
//use App\PhoneBook;

class PhoneBookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('phone_book_users')->insert([
            [
                'name'=>"Name1",
                'phone'=>"0971234567"
            ],
            [
                'name'=>"Name2",
                'phone'=>"0971234568"
            ],
            [
                'name'=>"Name3",
                'phone'=>"0971234569"
            ],
            [
                'name'=>"Name4",
                'phone'=>"0971111111"
            ],
            [
                'name'=>"Name5",
                'phone'=>"0972222222"
            ],
            [
                'name'=>"Name6",
                'phone'=>"0973333333"
            ]
        ]);
    }
}
