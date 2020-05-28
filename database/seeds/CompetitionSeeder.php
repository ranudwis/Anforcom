<?php

use Illuminate\Database\Seeder;
use App\Competition;

class CompetitionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $softdev = new Competition([
            'name' => 'Software development',
            'description' => 'Software development'
        ]);
        $softdev->save();

        $dataMining = new Competition([
            'name' => 'Data Mining',
            'description' => 'Data Mining'
        ]);
        $dataMining->save();
    }
}
