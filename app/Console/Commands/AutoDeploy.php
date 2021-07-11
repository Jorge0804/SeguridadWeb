<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

class AutoDeploy extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'git:deploy';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Auto git deploy';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        //$this->Ejecutar();
    }

    /*private function Ejecutar(){
        exec("cd /var/www/html/SeguridadWeb/");
        exec("git pull");
    }*/
    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        /*exec("cd /var/www/html/SeguridadWeb/");
	    exec("git pull");*/
        $comando = "git pull";
        $proceso = new Process($comando);
        $proceso->run();
    }
}
