<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Sitemap\SitemapGenerator;
use Spatie\Sitemap\Tags\Url;

class GenerateSitemap extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $signature = 'sitemap:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate the sitemap with live URLs';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle() {
        
        // Generate the sitemap with localhost URLs and then modify them to point to the live site
        SitemapGenerator::create(config('app.url'))
            ->hasCrawled(function (Url $url) {
                // Replace the localhost URL with the live URL
                $url->setUrl(str_replace(config('app.url'), env('APP_PRODUCTION_URL'), $url->url));

                return $url;
            })
            ->writeToFile(base_path('dist/sitemap.xml'));


        $this->info('Sitemap generated successfully with live URLs!');
    }
}
