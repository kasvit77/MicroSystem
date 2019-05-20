<?php


namespace App\Elastic;

use App\Providers\ElasticCustomServiceProvider;
use Elasticsearch\Client;
use Elasticsearch\ClientBuilder;

class ServiceElacticeSearch
{

    protected $client;

    public function __construct()
    {
        $this->client =ClientBuilder::create()->setHosts(['144.76.220.7:9200'])->build();;
    }

    /**
     * Index a single item
     *
     * @param  array  $parameters [index, type, id, body]
     */
    public function index(array $parameters)
    {
        return $this->client->index($parameters);
    }

    /**
     * Index a single item
     *
     * @param  array  $parameters [index, type, id, body]
     */
    public function CreateIndex(array $parameters)
    {

        return $this->client->indices()->create($parameters);
    }

    /**
     * Delete a single item
     *
     * @param  array  $parameters
     */
    public function delete(array $parameters)
    {
        return $this->client->delete($parameters);
    }

    public function search(array $parameters)
    {
        return $this->client->search($parameters);
    }


}