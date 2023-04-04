<?php

function convertGenre($novel) {
    $template = '';
    foreach($novel->genres as $genre) {
        $template .= $genre->name . ', ';
    }
    $genre = rtrim($template, ', ');
    return $genre;
}