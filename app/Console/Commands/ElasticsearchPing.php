<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Elasticsearch\Client;

class ElasticsearchPing extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'elasticsearch:ping';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Ping Elasticsearch';

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
     * @param Client $client
     *
     */
    public function handle(Client $client)
    {
        if ($client->ping()) {
            $this->info('pong');
            return;
        }

        $this->error('Could not connect to Elasticsearch.');
    }
}
