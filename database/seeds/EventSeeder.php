<?php

use Illuminate\Database\Seeder;
use App\Event;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $softdev = new Event([
            'type' => 'competition',
            'name' => 'Software development',
            'slug' => 'softdev',
            'template_name' => 'softdev'
        ]);
        $softdev->save();

        $dataMining = new Event([
            'type' => 'competition',
            'name' => 'Data Mining',
            'slug' => 'datmin',
            'template_name' => 'datmin',
        ]);
        $dataMining->save();
    }
}
