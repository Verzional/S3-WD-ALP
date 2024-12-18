<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\School;

class SchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $schools = [
            ['name' => 'SD CITRA BERKAT', 'city' => 'TANGERANG', 'level' => 'SD'],
            ['name' => 'SD CITRA KASIH', 'city' => 'JAKARTA', 'level' => 'SD'],
            ['name' => 'SD INTAN PERTAMA HATI', 'city' => 'SURABAYA', 'level' => 'SD'],
            ['name' => 'SD KRISTEN IMMANUEL BILINGUAL CLASS', 'city' => 'PONTIANAK', 'level' => 'SD'],
            ['name' => 'SD KRISTEN LOGOS', 'city' => 'SURABAYA', 'level' => 'SD'],
            ['name' => 'SD KRISTEN PETRA 7', 'city' => 'SURABAYA', 'level' => 'SD'],
            ['name' => 'SD MAITREYAWIRA', 'city' => 'JAKARTA', 'level' => 'SD'],
            ['name' => 'SEKOLAH CIPUTRA', 'city' => 'SURABAYA', 'level' => 'SD'],
            ['name' => 'SMP CITRA BERKAT', 'city' => 'TANGERANG', 'level' => 'SMP'],
            ['name' => 'SMP KRISTEN LOGOS', 'city' => 'SURABAYA', 'level' => 'SMP'],
            ['name' => 'SMP CITRA KASIH', 'city' => 'DKI JAKARTA', 'level' => 'SMP'],
            ['name' => 'SMP ELYON CHRISTIAN SCHOOL', 'city' => 'SURABAYA', 'level' => 'SMP'],
            ['name' => 'SMA ELYON CHRISTIAN SCHOOL', 'city' => 'SURABAYA', 'level' => 'SMA'],
            ['name' => 'SMA CITRA BERKAT', 'city' => 'TANGERANG', 'level' => 'SMA'],
            ['name' => 'SMA CITRA KASIH', 'city' => 'JAKARTA', 'level' => 'SMA'],
            ['name' => 'SEKOLAH CIPUTRA', 'city' => 'SURABAYA', 'level' => 'SMA'],
            ['name' => 'SMA CITRA KASIH', 'city' => 'JAKARTA', 'level' => 'SMA'],
        ];

        foreach ($schools as $school) {
            School::create($school);
        }
    }
}
