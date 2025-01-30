<?php

/*
 /*
 * File Name: process.php
 * Author: Semir Trkaljach
 * Created on: 2025-01-23
 * Description: This script processes form data submitted via POST and displays the information entered by the user.
 

 */
if (getenv('APP_ENV') === 'development') {
    var_dump($_POST);
}

/* * *********************************************
 * STEP 1: INPUT: Do NOT process, just get the data.
 * Do not delete this comment,
 * ********************************************** */

$title = isset($_POST['title']) ? $_POST['title'] : "";
$favoriteDrink = isset($_POST['favorite_drink']) ? $_POST['favorite_drink'] : "";
$petsName = isset($_POST['pets_name']) ? $_POST['pets_name'] : "";
$fictionalPlace = isset($_POST['fictional_place']) ? $_POST['fictional_place'] : "";
$realPlace = isset($_POST['real_place']) ? $_POST['real_place'] : "";

/* * ******************************************************
 * STEP 2: VALIDATION: Always clean your input first!!!!
 * Do NOT process, only CLEAN and VALIDATE.
 * Do not delete this comment.
 * ****************************************************** */


$title = substr(strip_tags(trim($title)), 0, 64);
$favoriteDrink = substr(strip_tags(trim($favoriteDrink)), 0, 64);
$petsName = substr(strip_tags(trim($petsName)), 0, 64);
$fictionalPlace = substr(strip_tags(trim($fictionalPlace)), 0, 64);
$realPlace = substr(strip_tags(trim($realPlace)), 0, 64);

/* * *********************************************
 * STEP 3 and 4: PROCESSING and OUTPUT: Notice this code only executes
 * if you have valid data from steps 1 and 2. Your code must always have
 * a safety feature similar to this.
 * Do not delete this comment.
 * ********************************************** */
echo '<?php echo "<!DOCTYPE html><html lang=\"en\"><head><meta charset=\"UTF-8\"><meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"><title>Generated Title</title><link rel=\"stylesheet\" href=\"main.css\"></head><body>"; ?>';

echo '<div class="container">';
echo '<header><h1>Your Generated Title</h1></header>';
echo '<main>';

if (!empty($title) && !empty($favoriteDrink) && !empty($petsName) && !empty($fictionalPlace) && !empty($realPlace)) {

     
    $fullTitle = $title . " " . $favoriteDrink . " " . $petsName . " " . $fictionalPlace . " " . $realPlace;

    
    echo "<h1>You are: " . htmlspecialchars($fullTitle) . "</h1><br>";

    echo "<h2>" . htmlspecialchars($title) . " is " . strlen($title) . " characters</h2>, ";
    echo "<h2>" . htmlspecialchars($favoriteDrink) . " is " . strlen($favoriteDrink) . " characters</h2>, ";
    echo "<h2>" . htmlspecialchars($petsName) . " is " . strlen($petsName) . " characters</h2>, ";
    echo "<h2>" . htmlspecialchars($fictionalPlace) . " is " . strlen($fictionalPlace) . " characters</h2>, ";
    echo "<h2>" . htmlspecialchars($realPlace) . " is " . strlen($realPlace) . " characters</h2><br>";
    
    $totalLength = strlen($fullTitle);
    echo "<h2>Your whole title is " . $totalLength . " characters</h2><br>";
    
    if ($totalLength >= 30) {
        echo "<h2>That's a heck of a title!</h2><br>";
    } else {
        echo "<h2>That's a cute little title.</h2><br>";
    }
    
    echo '<h1><a href="index.html">Try again</a></h1><br>';

} else {
    
    echo "<h2>I'm sorry, your input was not valid. Please make sure all fields are filled out.</h2><br>";
    echo '<a href="index.html">Try again</a><br>';
}

