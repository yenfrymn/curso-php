<?php

require_once 'functions.php';
require_once 'classes/nextMovie.php';
//echo API_URL;
$next_movie = nextMovie::fetch_and_create_movie(API_URL);
//var_dump($next_movie->get_data());
$next_movie_data = $next_movie->get_data();
//echo $title;
render_template('head', ["title"=>$next_movie_data["title"]]);
render_template('main',array_merge(
    $next_movie_data,
    ["until_message"=>$next_movie->get_until_message()]
));
render_template('styles');
?>



