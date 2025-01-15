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
            ['name' => 'SD CITRA BERKAT', 'city' => 'TANGERANG', 'level' => 'SD', 'status' => 'accepted'],
            ['name' => 'SD CITRA KASIH', 'city' => 'JAKARTA', 'level' => 'SD', 'status' => 'accepted'],
            ['name' => 'SD INTAN PERTAMA HATI', 'city' => 'SURABAYA', 'level' => 'SD', 'status' => 'accepted'],
            ['name' => 'SD KRISTEN IMMANUEL BILINGUAL CLASS', 'city' => 'PONTIANAK', 'level' => 'SD', 'status' => 'accepted'],
            ['name' => 'SD KRISTEN LOGOS', 'city' => 'SURABAYA', 'level' => 'SD', 'status' => 'accepted'],
            ['name' => 'SD KRISTEN PETRA 7', 'city' => 'SURABAYA', 'level' => 'SD', 'status' => 'accepted'],
            ['name' => 'SD MAITREYAWIRA', 'city' => 'JAKARTA', 'level' => 'SD', 'status' => 'accepted'],
            ['name' => 'SEKOLAH CIPUTRA', 'city' => 'SURABAYA', 'level' => 'SD', 'status' => 'accepted'],
            ['name' => 'SMP CITRA BERKAT', 'city' => 'TANGERANG', 'level' => 'SMP', 'status' => 'accepted'],
            ['name' => 'SMP KRISTEN LOGOS', 'city' => 'SURABAYA', 'level' => 'SMP', 'status' => 'accepted'],
            ['name' => 'SMP CITRA KASIH', 'city' => 'DKI JAKARTA', 'level' => 'SMP', 'status' => 'accepted'],
            ['name' => 'SMP ELYON CHRISTIAN SCHOOL', 'city' => 'SURABAYA', 'level' => 'SMP', 'status' => 'accepted'],
            ['name' => 'SMA ELYON CHRISTIAN SCHOOL', 'city' => 'SURABAYA', 'level' => 'SMA', 'status' => 'accepted'],
            ['name' => 'SMA CITRA BERKAT', 'city' => 'TANGERANG', 'level' => 'SMA', 'status' => 'accepted']
        ];

        foreach ($schools as $school) {
            School::create($school);
        }
    }
}
