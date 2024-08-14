<?php

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use League\CommonMark\CommonMarkConverter;
use Spatie\LaravelMarkdown\MarkdownRenderer;

Route::get('/', function () {
    return view('welcome');
});


Route::get('docs/{slug}', function ($slug) {
    $markdown = File::get(resource_path("content/docs/{$slug}.md"));
    $bladeRenderedContent = Blade::render($markdown);
    $bladeRenderedContent = View::make('layouts.markdown', ['content' => $bladeRenderedContent])->render();

    $converter = new CommonMarkConverter(['html_input' => 'allow']);
    $html = $converter->convert($bladeRenderedContent);



    return view('docs.show', compact('html'));
});