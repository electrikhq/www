<?php

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use League\CommonMark\CommonMarkConverter;

Route::get('docs/{slug}', function ($slug) {
    $markdown = File::get(resource_path("content/docs/{$slug}.md"));
    $bladeRenderedContent = Blade::render($markdown);
    $bladeRenderedContent = View::make('layouts.markdown', ['content' => $bladeRenderedContent])->render();

    $converter = new CommonMarkConverter(['html_input' => 'allow']);
    $html = $converter->convert($bladeRenderedContent);

    return view('docs.show', compact('html'));
});

Route::get('{slug?}', function ($slug = null) {
    if(!$slug) $slug = 'index';
    $markdown = File::get(resource_path("content/www/{$slug}.md"));
    $bladeRenderedContent = Blade::render($markdown);
    $bladeRenderedContent = View::make('layouts.html', ['content' => $bladeRenderedContent])->render();

    $converter = new CommonMarkConverter(['html_input' => 'allow']);
    $html = $converter->convert($bladeRenderedContent);

    return view('www.show', compact('html'));
});