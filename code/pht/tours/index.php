<?php

include '../includes/db.inc.html.php';

try
{
  $tours = 'SELECT * FROM tours';
  $toursResult = $pdo->query($tours);
}
catch (PDOException $e)
{
  $error = 'Error fetching jokes: ' . $e->getMessage();
  include '../includes/error.html.php';
  exit();
}

foreach ($toursResult AS $row)
{
    $tourItems[]= array(
        'title' => $row['title'],
        'description'  => $row['description'],
        'duration' => $row['duration'],
        'transportation' => $row['transportation'],
        'food' => $row['food'],
        'price' => $row['price'],
        'image' => $row['image'],
    );
}

include 'tours.html.php';
