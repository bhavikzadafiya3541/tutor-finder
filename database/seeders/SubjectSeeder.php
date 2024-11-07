<?php

namespace Database\Seeders;

use App\Models\Subject;
use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subjects = [
            "Subject One",
            "Subject Two",
            "Subject Three",
            "Subject Four",
            "Subject Five"
        ];

        foreach($subjects as $subject) {
            Subject::firstOrCreate([
                'name' => $subject
            ]);
        }
    }
}
