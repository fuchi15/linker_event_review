<?php

use Illuminate\Database\Seeder;

class EventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $json = file_get_contents(__DIR__ . '/../mock-data/mock-event.json');
        if ($json === false) {
            throw new \RuntimeException('file not found.');
        }
        $events = json_decode($json, true);
        foreach($events as $event){
            App\Event::create($event);
        }
    }
}
