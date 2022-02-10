<?php

// Edit or Replace this try/catch statement to work with the current PHT configuration
include '../includes/db.inc.html.php';

// Modify the If statement so the try only runs if the First Name field has been submitted AND the honeypot field is empty ''
if ((isset($_POST['myfname']) &&  (empty ($_POST['honeypot'])))) {

    $tour = $_POST['tour'];
    $myFname = $_POST['myfname'];
    $myLname = $_POST['mylname'];
    $myEmail = $_POST['myemail'];
    $myPhone = $_POST['myphone'];
    $myDate = $_POST['mydate'];
    $myGroup = $_POST['mygroup'];
    $myComments = $_POST['mycomments'];

    // If the if statement is true, save each form field value as a variable. These variable values will be used in the thank you page.

    // And run the try/catch to attempt to insert data in the database. Modify the INSERT statement to write all the form filed values (except the honeypot) to the database.
    try {
      $sql = 'INSERT INTO reservations SET
          tour = :tour,
          fname = :fname,
          lname = :lname,
          email = :email,
          phone = :phone,
          date = :date,
          participants = :participants,
          allergies = :allergies;         
          ';
      $s = $pdo->prepare($sql);
        $s->bindValue(':tour', $tour);
        $s->bindValue(':fname', $myFname);
        $s->bindValue(':lname', $myLname);
        $s->bindValue(':email', $myEmail);
        $s->bindValue(':phone', $myPhone);
        $s->bindValue(':date', $myDate);
        $s->bindValue(':participants', $myGroup);
        $s->bindValue(':allergies', $myComments);
      $s->execute();
    }
    catch (PDOException $e)
    {
      $error = 'Error fetching content: ' . $e->getMessage();
      include '../includes/error.html.php';
      exit();
    }

    include 'success.html.php';
    // load the thank you page after the INSERT runs

    // Add an else to load the initial page if the initial (line 19) if statement is false
    
  }
else {
    include 'reservations.html.php';
} //Modify this to include the initial file for this folder
?>
