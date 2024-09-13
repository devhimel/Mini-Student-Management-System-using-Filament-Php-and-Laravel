<?php

namespace Database\Seeders;

use App\Models\Classes;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClassesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $classes = [
            [
                "name" => "Class 1",
            ],
            [
                "name" => "Class 2",
            ],
            [
                "name" => "Class 3",
            ],
            [
                "name" => "Class 4",
            ],
            [
                "name" => "Class 5",
            ],
            [
                "name" => "Class 6",
            ],
            [
                "name" => "Class 7",
            ],
            [
                "name" => "Class 8",
            ],
            [
                "name" => "Class 9",
            ],
            [
                "name" => "Class 10",
            ]
        ];

        foreach ($classes as $class) {
            Classes::create($class);
        }
    }
}
