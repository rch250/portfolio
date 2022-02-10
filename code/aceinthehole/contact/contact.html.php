<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ace in the Hole Registration</title>
    <meta charset="utf-8">
    <?php include '../includes/styles2.inc.html.php'; ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js">
    </script>
    <![endif]-->
</head>
<body>
<div id="wrapper">
    <?php include '../includes/header.inc.html.php'; ?>
    <?php include '../includes/nav.inc.html.php'; ?>
    <main>
        <?php include '../includes/slideshow2.inc.html.php'; ?>
        <h2>Contact Form for Ace in the Hole</h2>
        <p>Fill out the form below to Contact. Required fields are
            marked with an asterisk (*).</p>
        <form method="post" action=" ">
            <label for="myName">*Name: </label>
            <input type="text" id="myName" name="myName" required="required">
            <br>
            <label for="myEmail">*E-mail: </label>
            <input type="email" id="myEmail" name="myEmail" required="required">
            <br>
            <label for="myAffiliation">*Affiliation: </label>
            <select name="myAffiliation">
                <option value="Athlete">Athlete</option>
                <option value="Volunteer">Volunteer</option>
                <option value="Interested Party">Interested Party</option>
            </select>
            <br><br>
            <label for="myQuestion">*Question or Comment: </label>
            <textarea name="myQuestion" id="myQuestion" rows="2" cols="20" required="required"></textarea>
            <br>
            <input type="submit" value="Contact Us!">
        </form>
    </main>
    <?php include '../includes/footer.inc.html.php'; ?>
</div>
<?php include '../includes/scripts2.inc.html.php'; ?>
</body>
</html>
