<?php

  /* Edit or Replace this try/catch statement to work for your site. */
include '../includes/db.inc.html.php';

    /* Modify the If statement so the try only runs if the First Name field was submitted by form.html.php */
  if (isset($_POST['myName']))
    {
      $myName = $_POST['myName'];
      $myAge = $_POST['myAge'];
      $myEmail = $_POST['myEmail'];
      $myECP = $_POST['myECP'];
      $myECN = $_POST['myECN'];
      $myGender = $_POST['myGender'];
      $myEvent1 = $_POST['myEvent1'];
      $myEvent2 = $_POST['myEvent2'];
      $myASC = $_POST['myASC'];

      /* If the if statement is true, save each form field value as a variable. These variable values can be used
      later in this page or in the success page. */

      /* And run the try/catch to attempt to insert data in the database. Modify the INSERT statement to write all the
      form filed values to the database. */
      try {

        $sql = 'INSERT INTO registration SET
            name = :name,
            age = :age,
            email = :email,
            ecp = :ecp,
            ecn = :ecn,
            gender = :gender,
            event1 = :event1,
            event2 = :event2,
            anysc = :anysc';
        $s = $pdo->prepare($sql);
        $s->bindValue(':name', $myName);
        $s->bindValue(':age', $myAge);
        $s->bindValue(':email',$myEmail);
        $s->bindValue(':ecp',$myECP);
        $s->bindValue(':ecn',$myECN);
        $s->bindValue(':gender',$myGender);
        $s->bindValue(':event1',$myEvent1);
        $s->bindValue(':event2',$myEvent2);
        $s->bindValue(':anysc',$myASC);
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
      include 'registration.html.php'; /* Modify this to include the initial file for this folder */
    }
  /* Close the else statement */

?>