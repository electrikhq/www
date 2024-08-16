<?php

use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;

function generateSidebar($project, $version) {
    $docsPath = resource_path("content/docs/{$project}/{$version}");

    return buildSidebarTree($docsPath, $project);
}

function buildSidebarTree($directory, $project, $baseUrl = '') {

    $items = [];

    $filesAndDirs = File::directories($directory);
    $files = File::files($directory);

    foreach ($filesAndDirs as $dir) {
        $folderName = basename($dir);
        $relativeUrl = $baseUrl . '/' . $folderName;
        $indexPath = $dir . '/index.md';

        $order = null;

        if (File::exists($indexPath)) {
            $document = YamlFrontMatter::parse(File::get($indexPath));
            $order = $document->matter('sidebar_order') ?? null;
        }

        $items[] = [
            'type' => 'folder',
            'title' => ucfirst(str_replace('-', ' ', $folderName)),
            'link' => File::exists($indexPath) ? route('docs.show', ['project' => $project, 'version' => request()->version, 'slug' => ltrim($relativeUrl, '/')]) : null,
            'children' => buildSidebarTree($dir, $project, $relativeUrl),
            'order' => $order,
        ];
    }

    foreach ($files as $file) {
        $fileName = pathinfo($file, PATHINFO_FILENAME);

        if ($fileName === 'index') {
            continue;
        }

        $document = YamlFrontMatter::parse(File::get($file));
        $order = $document->matter('sidebar_order') ?? null;

        $relativeUrl = $baseUrl . '/' . $fileName;
        $items[] = [
            'type' => 'file',
            'title' => ucfirst(str_replace('-', ' ', $fileName)),
            'link' => route('docs.show', ['project' => $project, 'version' => request()->version, 'slug' => ltrim($relativeUrl, '/')]),
            'order' => $order,
        ];
    }

    // Sort items by 'order' value, or by title if no order is defined
    usort($items, function ($a, $b) {
        if ($a['order'] === $b['order']) {
            return strcmp($a['title'], $b['title']);
        }
        return $a['order'] <=> $b['order'];
    });

    return $items;
}
