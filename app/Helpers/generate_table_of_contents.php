<?php


function generateTableOfContents($html) {

$dom = new DOMDocument;
@$dom->loadHTML('<?xml encoding="utf-8" ?>' . $html);

$headings = [];
foreach (['h2', 'h3'] as $tag) {
    foreach ($dom->getElementsByTagName($tag) as $node) {
        $id = \Str::slug($node->textContent);
        $headings[] = [
            'level' => $tag,
            'text' => $node->textContent,
            'id' => $id,
        ];
        // Add ID to the headings for anchor links
        $node->setAttribute('id', $id);
    }
}

// Return the modified HTML and the list of headings
return [
    'html' => $dom->saveHTML(),
    'headings' => $headings,
];
}
