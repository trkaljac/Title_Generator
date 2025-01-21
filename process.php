<?php

/*
 * Your comment header here
 */

/* 
 * This is a simple demo to demonstrate how you can access and process
 * information posted to the server. Alter this file according to the
 * instructions in the assignment. Note that you will NOT normally
 * do things this way, but this will serve as an introduction
 * to server side processing and then we will fix it in subsequent
 * assignments.
 *
 * The output of this page MUST be a complete and properly structured
 * mobile-friendly, mobile-first, responsive webpage. To do that you
 * will purposefully violate both division of concerns and some procedural
 * programming best practices so as to create a simple and easy to
 * understand solution. We will then use this example as a guide
 * for how to do things properly in subsequent assignments.
 */

// DELETE *ALL* INSTRUCTIONAL COMMENTS AND CODE WHEN YOU ARE READY TO SUBMIT
// *EXCEPT* FOR THE COMMENTS THAT SAY, "Do not delete this comment."
// LEAVE THOSE IN PLACE TO SHOW IN *YOUR* CODE WHERE YOU DID EACH STEP.
// YOU MAY BREAK UP STEP 3 AND 4 IF YOUR SOLUTION REQUIRES IT, BUT
// MAINTAIN THE ORDER of.. step 3: PROCESSING, step 4: OUTPUT

/*
 * This next line is simply to demonstrate the use of the var_dump()
 * and to show the contents of the system global variable $_POST.
 * Do not leave this in your final code. This is an
 * example of a debug statement.
 */
var_dump($_POST);

/* * *********************************************
 * STEP 1: INPUT: Do NOT process, just get the data.
 * Do not delete this comment,
 * ********************************************** */

if (!empty($_POST['text1']) && !empty($_POST['text2'])) {
    // extract the data from the global $_POST (if it exists) into local variables.
    // NEVER work with $_POST directly, get away from it as fast as possible.
    $text1 = $_POST['text1'];
    $text2 = $_POST['text2'];
} else {
    $text1 = "";
    $text2 = "";
}

/* * ******************************************************
 * STEP 2: VALIDATION: Always clean your input first!!!!
 * Do NOT process, only CLEAN and VALIDATE.
 * Do not delete this comment.
 * ****************************************************** */

// clean up the variables (a little) by removing leading and trailing white space
// follow the instructions in the assignment for further cleaning steps
$text1 = trim($text1);
$text2 = trim($text2);


if (!empty($text1) && !empty($text2)) {

    /*     * *************************************************************************
     * STEP 3 and 4: PROCESSING and OUTPUT: Notice this code only executes
     * if you have valid data from steps 1 and 2. Your code must always have
     * a saftey feature similar to this.
     * Do not delete this comment.
     * ************************************************************************ */

    // the following code shows how you can access parts of the $_POST array
    echo "you entered: \"" . $text1 . "\" for text box 1<br>";
    $length = strlen($text1);

    if ($length > 0) {
        echo "the length of your first input is: " . $length . "<br>";
    }
    echo "<br>";

    echo "you entered: \"" . $text2 . "\" for text box 1<br>";
    $length = strlen($text2);

    if ($length > 0) {
        echo "the length of your second input is: " . $length . "<br>";
    }
    echo "<br>";
    echo '<a href="index.html">try again</a><br>';
} else {
    echo "you did not enter anything one or both text boxes.<br>";
    echo '<a href="index.html">try again</a><br>';
}
