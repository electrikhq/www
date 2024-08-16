<?php

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use League\CommonMark\CommonMarkConverter;

use Spatie\LaravelMarkdown\MarkdownRenderer;
use Spatie\YamlFrontMatter\YamlFrontMatter;

Route::get('docs/{project}/{version}/{slug?}', function ($project, $version, $slug = null) {
    
    if(!$slug) $slug = 'index';

    $availableVersions = collect(File::directories(resource_path("content/docs/{$project}")))
        ->map(function ($path) {
            return basename($path);
        });

    $sidebar = generateSidebar($project, $version);


    $file = File::get(resource_path("content/docs/{$project}/{$version}/{$slug}.md"));
    // Parse the Markdown file with front matter
    $document = YamlFrontMatter::parse($file);

    $title = $document->matter('title');
    $description = $document->matter('description');
    $markdown = $document->body();

    $bladeRenderedContent = Blade::render($markdown);
    $parsedContent = generateTableOfContents(app(MarkdownRenderer::class)->convertToHtml($bladeRenderedContent));
    $bladeRenderedContent = View::make('layouts.renderers.markdown', ['content' => $bladeRenderedContent])->render();
    $headings = $parsedContent['headings'];

    $converter = new CommonMarkConverter(['html_input' => 'allow']);
    $html = $converter->convert($bladeRenderedContent);

    // return view('layouts.documentation', compact('html', 'version', 'project', 'availableVersions', 'sidebar', 'headings'));
    return view('layouts.documentation', [
        'html' => $html,
        'headings' => $parsedContent['headings'],
        'version' => $version,
        'availableVersions' => $availableVersions,
        'project' => $project,
        'sidebar' => generateSidebar($project, $version),
        'title' => $title,
        'description' => $description,
    ]);

})->where('slug', '.*')->name('docs.show');


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('{slug?}', function ($slug = null) {

    if(!$slug) $slug = 'index';

    View::addLocation(resource_path('content/www'));
    
    return view($slug);

})->where('slug', '.*')->name('www.show');