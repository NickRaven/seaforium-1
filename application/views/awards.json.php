<?php header('Content-Type: application/json');


$current_awards['title'] = "Yayhooray Top Awards!";

$current_awards['awards'] = Array(
	Array(
		'title' => "Most Titlebar Edits",
		'rankings' => $most_titlebar_edits
	),
	Array(
		'title' => "Most Posts",
		'rankings' => $most_posts
	),
	Array(
		'title'=>"Most Buddies",
		'rankings'=>$most_buddies
	),
	Array(
		'title'=>"Most Enemies",
		'rankings'=>$most_enemies
	),
	Array(
		'title'=>"Most Threads",
		'rankings'=>$most_threads
	),
	Array(
		'title'=>"Most Popular Threads",
		'rankings'=> $most_popular_threads
	),
	Array(
		'title'=>"Most Hidden Threads",
		'rankings'=> $most_hidden_threads
	),
	Array(
		'title'=>"Most Cunts!",
		'rankings'=>$most_cunts
	)

);

echo json_encode($current_awards);