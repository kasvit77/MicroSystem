<?php

namespace App\Console\Commands;


use App\Console\Commands\Properties\BitrixPropertiesInterface;
use App\Console\Commands\Properties\ServiceProperties;
use App\Elastic\ServiceElacticeSearch;
use App\Providers\EventServiceProvider;
use Elasticsearch\ClientBuilder;
use Illuminate\Console\Command;


class CreatePropertiesGoods extends Command
{


    private $properties;
    private  $clientelastic;
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
        $this->clientelastic= new ServiceElacticeSearch();

    }



    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
//        $params = [
//            'index' => 'test',
//            'body' => [
//                'settings' => [
//                    'number_of_shards' => 2,
//                    'number_of_replicas' => 0
//                ]
//            ]
//        ];


      //  $value=$this->ServiceProperties->getFieldPropertiesValue();
      //  var_dump($value);
           // $this->info();

       // $elastic = app()->make(ServiceElacticeSearch::class);

//        $this->clientelastic->delete( [
//            'index' => 'my_index',
//            'type' => 'my_type',
//            'id' => 'my_id'
//        ]);
//        $response = $this->clientelastic->CreateIndex([
//            'index' => 'my_index1',
//            'body' => [
//                'settings' => [
//                    'number_of_shards' => 1,
//                    'number_of_replicas' => 0
//                ]
//            ]
//        ]);
        $response = $this->clientelastic->index([
        'index' => 'my_index1',
    'type' => 'my_type',
    'id' => 'my_id',
    'body' => ['testField' => 'abc', 'value'=>'test']]);
        print_r($response);
    }


}
