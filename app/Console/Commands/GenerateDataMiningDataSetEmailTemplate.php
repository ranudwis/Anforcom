<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Event;
use Storage;

class GenerateDataMiningDataSetEmailTemplate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate:dataminingdatasetemailtemplate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generating email template for datamining dataset';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $teams = Event::where('slug', 'datmin')
            ->with([
                'registrations' => function ($query) {
                    $query->where('status', 'active');
                },
                'registrations.teams.leader'
            ])
            ->first()
            ->registrations
            ->pluck('teams');

        $teamData = '';

        $template = Storage::get('emailtemplate.html');

        foreach ($teams as $team) {
            $teamData .= sprintf("%s: %s\r\n", $team->name, $team->leader->email);

            $email = str_replace('[tim]', $team->name, $template);
            $filename = sprintf("html/%s.html", $team->name);

            Storage::put($filename, $email);
        }

        Storage::put('team.txt', $teamData);
    }
}
