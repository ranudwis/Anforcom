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
            'name' => 'Apps Innovation',
            'slug' => 'apps-innovation',
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

        $workshop = new Event([
            'type' => 'event',
            'name' => 'Workshop',
            'slug' => 'workshop',
            'template_name' => 'workshop',
        ]);
        $workshop->save();
    }
}
