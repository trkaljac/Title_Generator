<?php

/*
 * File Name: process2.php
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

$fullTitle = $title . " " . $favoriteDrink . " " . $petsName . " " . $fictionalPlace . " " . $realPlace;
$totalLength = strlen($fullTitle);

include 'output.php';