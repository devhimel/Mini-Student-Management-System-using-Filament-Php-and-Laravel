<?php

namespace Database\Seeders;

use App\Models\Section;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sections = [
            [
                "name" => "A",
                "class_id" => 1
            ],
            [
                "name" => "B",
                "class_id" => 1
            ],
            [
                "name" => "C",
                "class_id" => 1
            ],
            [
                "name" => "D",
                "class_id" => 1
            ],
            [
                "name" => "E",
                "class_id" => 1
            ],
            [
                "name" => "A",
                "class_id" => 2
            ],
            [
                "name" => "B",
                "class_id" => 2
            ],
            [
                "name" => "C",
                "class_id" => 2
            ],
            [
                "name" => "D",
                "class_id" => 2
            ],
            [
                "name" => "E",
                "class_id" => 2
            ],
            [
                "name" => "A",
                "class_id" => 3
            ],
            [
                "name" => "B",
                "class_id" => 3
            ],
            [
                "name" => "C",
                "class_id" => 3
            ],
            [
                "name" => "D",
                "class_id" => 3
            ],
            [
                "name" => "E",
                "class_id" => 3
            ],
            [
                "name" => "A",
                "class_id" => 4
            ],
            [
                "name" => "B",
                "class_id" => 4
            ],
            [
                "name" => "C",
                "class_id" => 4
            ],
            [
                "name" => "D",
                "class_id" => 4
            ],
            [
                "name" => "E",
                "class_id" => 4
            ],
            [
                "name" => "A",
                "class_id" => 5
            ],
            [
                "name" => "B",
                "class_id" => 5
            ],
            [
                "name" => "C",
                "class_id" => 5
            ],
            [
                "name" => "D",
                "class_id" => 5
            ],
            [
                "name" => "E",
                "class_id" => 5
            ],
            [
                "name" => "A",
                "class_id" => 6
            ],
            [
                "name" => "B",
                "class_id" => 6
            ],
            [
                "name" => "C",
                "class_id" => 6
            ],
            [
                "name" => "D",
                "class_id" => 6
            ],
            [
                "name" => "E",
                "class_id" => 6
            ],
            [
                "name" => "A",
                "class_id" => 7
            ],
            [
                "name" => "B",
                "class_id" => 7
            ],
            [
                "name" => "C",
                "class_id" => 7
            ],
            [
                "name" => "D",
                "class_id" => 7
            ],
            [
                "name" => "E",
                "class_id" => 7
            ],
            [
                "name" => "A",
                "class_id" => 8
            ],
            [
                "name" => "B",
                "class_id" => 8
            ],
            [
                "name" => "C",
                "class_id" => 8
            ],
            [
                "name" => "D",
                "class_id" => 8
            ],
            [
                "name" => "E",
                "class_id" => 8
            ],
            [
                "name" => "A",
                "class_id" => 9
            ],
            [
                "name" => "B",
                "class_id" => 9
            ],
            [
                "name" => "C",
                "class_id" => 9
            ],
            [
                "name" => "D",
                "class_id" => 9
            ],
            [
                "name" => "E",
                "class_id" => 9
            ],
            [
                "name" => "A",
                "class_id" => 10
            ],
            [
                "name" => "B",
                "class_id" => 10
            ],
            [
                "name" => "C",
                "class_id" => 10
            ],
            [
                "name" => "D",
                "class_id" => 10
            ],
            [
                "name" => "E",
                "class_id" => 10
            ],
        ];

        foreach ($sections as $section) {
            Section::create($section);
        }
    }
}
