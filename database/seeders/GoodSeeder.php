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
                    'picture' => 'pylesos.jpg',
                ],
                [
                    'title' => 'Мультиварка',
                    'price' => 6000,
                    'description' => 'Скатерть самобранка 21 века',
                    'picture' => 'multi.jpg',
                ],
                [
                    'title' => 'Чайник',
                    'price' => 3000,
                    'description' => 'Для любителей чая',
                    'picture' => 'chainik.jpg',
                ],
                [
                    'title' => 'Холодильник',
                    'price' => 20000,
                    'description' => 'Сохранит вашу еду на века',
                    'picture' => 'holodilnik.jpg',
                ],
                [
                    'title' => 'Тостер',
                    'price' => 4000,
                    'description' => 'Когда обычные булочки надоели',
                    'picture' => 'toster.jpg',
                ],
                [
                    'title' => 'Принтер',
                    'price' => 7000,
                    'description' => 'Для курсовых и лабораторных',
                    'picture' => 'printer.jpg',
                ]
            ]);
    }
}
