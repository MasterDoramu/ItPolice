<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GoodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('goods')->insert(
            [
                [
                    'title' => 'Пылесос',
                    'price' => 10000,
                    'description' => 'Пылесос copleomax 3000',
                    'picture' => 'ss',
                ],
                [
                    'title' => 'Мультиварка',
                    'price' => 6000,
                    'description' => 'скатерть самобранка 21 века',
                    'picture' => 'ss',
                ],
                [
                    'title' => 'Чайник',
                    'price' => 3000,
                    'description' => 'Для любителей чая',
                    'picture' => 'ss',
                ],
                [
                    'title' => 'Холодильник',
                    'price' => 20000,
                    'description' => 'Сохранит вашу еду на века',
                    'picture' => 'ss',
                ],
                [
                    'title' => 'Тостер',
                    'price' => 4000,
                    'description' => 'Когда обычные булочки надоели',
                    'picture' => 'ss',
                ],
                [
                    'title' => 'Принтер',
                    'price' => 7000,
                    'description' => 'Для курсовых и лабораторных',
                    'picture' => 'ss',
                ]
            ]);
    }
}
