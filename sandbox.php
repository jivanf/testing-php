<?php
$book = [
    'title' => "The Hitchhiker's Guide to the Galaxy",
    'author' => 'Douglas Adams',
    'description' => 'a comedy sci-fi adventure originally based on a BBC radio series'
];


$characters = [
    'Arthur Dent',
    'Ford Prefect',
    'Zaphod Beeblebrox',
    'Marvin, the paranoid android',
    'Slartibartfast'
];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="styles.css"/>  
    <meta charset="UTF-8">
    <title>Embedding PHP in HTML</title>
</head>
<body>
<h1><?= $book['title']; ?> by <?=$book['author']?></h1>
<p><?= $book['title']; ?> is <?= $book['description']?></p>
<p></p>

<h2>Main Characters</h2>
<ul>
    <?php
    for ($i = 0; $i < sizeof($characters); $i++) {
        echo "<li>";
        echo $characters[$i];
        echo "</li>";

    }
    ?>
</ul>


</body>
</html>