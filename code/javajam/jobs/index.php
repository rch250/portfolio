<?php

  /* Edit or Replace this try/catch statement to work for your site. */
include '../includes/db.inc.html.php';

    /* Modify the If statement so the try only runs if the First Name field was submitted by form.html.php */
  if (isset($_POST['myName']))
    {
      $myName = $_POST['myName'];
      $myEmail = $_POST['myEmail'];
      $myExperience = $_POST['myExperience'];

      /* If the if statement is true, save each form field value as a variable. These variable values can be used
      later in this page or in the success page. */

      /* And run the try/catch to attempt to insert data in the database. Modify the INSERT statement to write all the
      form filed values to the database. */
      try {

        $sql = 'INSERT INTO jobs SET
            name = :name,
            email = :email,
            experience = :experience';
        $s = $pdo->prepare($sql);
        $s->bindValue(':name', $myName);
        $s->bindValue(':email', $myName);
        $s->bindValue(':experience',$myExperience);
        $s->execute();
      }
      catch (PDOException $e)
      {
        $error = 'Error fetching content: ' . $e->getMessage();
        include '..\includes\error.html.php'; /* edit the include file path that works for the current site folder and file
 structure */
        exit();
      }

      include 'success.html.php';
      /* load the thank you page after the INSERT runs */

    } /* Add an else to load the initial page if the initial (line 19) if statement is false */

    else {
      include 'jobs.html.php'; /* Modify this to include the initial file for this folder */
    }
  /* Close the else statement */

?>