<?php

namespace Database\Seeders;

use App\Models\UraanUrduClass;
use App\Models\UrduClassChapter;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UraanUrduSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $urduClasses = [
            [
                'name' => 'Class 1',
                'slug' => 'class-1',
            ],
            [
                'name' => 'Class 2',
                'slug' => 'class-2',
            ],
            [
                'name' => 'Class 3',
                'slug' => 'class-3',
            ],
            [
                'name' => 'Class 4',
                'slug' => 'class-4',
            ],
            [
                'name' => 'Class 5',
                'slug' => 'class-5',
            ],
        ];

        foreach ($urduClasses as $class) {
            UraanUrduClass::create($class);
        }

        $classChapters = [
            //class 1
            [
                'urdu_class_id' => 1,
                'name' => 'Chapter 1',
                'slug' => 'class-1-chapter-1',
                'worksheet' => 'assets/Uraan-Urdu-Series-Worksheets/Grade-1/Grade-1-Chapter-1-Worksheet.pdf',
            ],
            [
                'urdu_class_id' => 1,
                'name' => 'Chapter 2',
                'slug' => 'class-1-chapter-2',
                'worksheet' => 'assets/Uraan-Urdu-Series-Worksheets/Grade-1/Grade-1-Chapter-2-Worksheet.pdf',
            ],

            //class 2
            [
                'urdu_class_id' => 2,
                'name' => 'Chapter 1',
                'slug' => 'class-2-chapter-1',
                'worksheet' => 'assets/Uraan-Urdu-Series-Worksheets/Grade-2/Grade-2-Chapter-1-Worksheet.pdf',
            ],
            [
                'urdu_class_id' => 2,
                'name' => 'Chapter 2',
                'slug' => 'class-2-chapter-2',
                'worksheet' => 'assets/Uraan-Urdu-Series-Worksheets/Grade-2/Grade-2-Chapter-2-Worksheet.pdf',
            ],

            //class 3
            [
                'urdu_class_id' => 3,
                'name' => 'Chapter 1',
                'slug' => 'class-3-chapter-1',
                'worksheet' => 'assets/Uraan-Urdu-Series-Worksheets/Grade-3/Grade-3-Chapter-1-Worksheet.pdf',
            ],
            [
                'urdu_class_id' => 3,
                'name' => 'Chapter 2',
                'slug' => 'class-3-chapter-2',
                'worksheet' => 'assets/Uraan-Urdu-Series-Worksheets/Grade-3/Grade-3-Chapter-2-Worksheet.pdf',
            ],

            //class 4
            [
                'urdu_class_id' => 4,
                'name' => 'Chapter 1',
                'slug' => 'class-4-chapter-1',
                'worksheet' => 'assets/Uraan-Urdu-Series-Worksheets/Grade-4/Grade-4-Chapter-1-Worksheet.pdf',
            ],
            [
                'urdu_class_id' => 4,
                'name' => 'Chapter 2',
                'slug' => 'class-4-chapter-2',
                'worksheet' => 'assets/Uraan-Urdu-Series-Worksheets/Grade-4/Grade-4-Chapter-2-Worksheet.pdf',
            ],

            //class 5
            [
                'urdu_class_id' => 5,
                'name' => 'Chapter 1',
                'slug' => 'class-5-chapter-1',
                'worksheet' => 'assets/Uraan-Urdu-Series-Worksheets/Grade-5/Grade-5-Chapter-1-Worksheet.pdf',
            ],
            [
                'urdu_class_id' => 5,
                'name' => 'Chapter 2',
                'slug' => 'class-5-chapter-2',
                'worksheet' => 'assets/Uraan-Urdu-Series-Worksheets/Grade-5/Grade-5-Chapter-2-Worksheet.pdf',
            ],
        ];

        foreach ($classChapters as $chapter) {
            UrduClassChapter::create($chapter);
        }
    }
}
