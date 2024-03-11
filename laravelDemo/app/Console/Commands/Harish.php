<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Harish extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'harish';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This is my command ';

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
     * @return int
     */
    public function handle()
    {
       $this->info("Hi I am harish");
    }
}
