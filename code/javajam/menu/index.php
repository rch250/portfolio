<?php

include '../includes/db.inc.html.php';

try
{
    $sql = 'SELECT title, body, image FROM content WHERE id=2';
    $result = $pdo->query($sql);
}
catch (PDOException $e)
{
    $error = 'Error fetching jokes: ' . $e->getMessage();
    include '../includes/error.html.php';
    exit();
}

try
{
    $menu = 'SELECT title, description, price FROM menu';
    $menuResult = $pdo->query($menu);
}
catch (PDOException $e)
{
    $error = 'Error fetching jokes: ' . $e->getMessage();
    include '../includes/error.html.php';
    exit();
}

foreach ($result AS $row)
{
    $contents[]= array(
        'title' => $row['title'],
        'body'  => $row['body'],
        'image' => $row['image']
    );
}

foreach ($menuResult AS $row)
{
    $menuItems[]= array(
        'title' => $row['title'],
        'description'  => $row['description'],
        'price' => $row['price']
    );
}

include 'menu.html.php';

?>