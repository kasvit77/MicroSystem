<?php

namespace App\Console\Commands;


use App\Console\Commands\Properties\BitrixPropertiesInterface;
use App\Console\Commands\Properties\ServiceProperties;
use Illuminate\Console\Command;


class CreatePropertiesGoods extends Command
{


    private $properties;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'CreatePropertiesGoods';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();

       $this->ServiceProperties= new ServiceProperties();

    }



    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $value=$this->ServiceProperties->getFieldPropertiesValue();
        var_dump($value);
           // $this->info();



    }


}
