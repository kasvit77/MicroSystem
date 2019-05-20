<?php

namespace App\Providers;

use App\Elastic\ServiceElacticeSearch;
use Cviebrock\EloquentSluggable\Tests\Models\Post;
use Elasticsearch\Client;
use Elasticsearch\ClientBuilder;
use Illuminate\Support\ServiceProvider;


class ElasticCustomServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(Client::class, function () {
            return ClientBuilder::create()->build();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $elastic = $this->app->make(ServiceElacticeSearch::class);

       Post::saved(function ($post) use ($elastic) {
            $elastic->index([
                'index' => 'blog',
                'type' => 'post',
                'id' => $post->id,
                'body' => $post->toArray(),
            ]);
        });

        Post::deleted(function ($post) use ($elastic) {
            $elastic->delete([
                'index' => 'blog',
                'type' => 'post',
                'id' => $post->id,
            ]);
        });
    }
}
