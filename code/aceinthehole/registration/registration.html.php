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
        <h2>Registration for Ace in the Hole</h2>
        <p>Fill out the form below to register. Required fields are
            marked with an asterisk (*).</p>
        <form method="post" action=" ">
            <label for="myName">*Name: </label>
            <input type="text" id="myName" name="myName" required="required">
            <label for="myAge">*Age: </label>
            <input type="integer" id="myAge" name="myAge" required="required">
            <label for="myEmail">*E-mail: </label>
            <input type="email" id="myEmail" name="myEmail" required="required">
            <label for="myECP">*Emergency Contact Phone: </label>
            <input type="text" id="myECP" name="myECP" required="required">
            <br>
            <br>
            <label for="myECN">*Emergency Contact Name: </label>
            <input type="text" id="myECN" name="myECN" required="required">
            <br>
            <br>
            <label for="myGender">*Gender Identification: </label>
            <select name="myGender">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select>
            <br><br><br>
            <label for="myEvent1">*SA Event: </label>
            <select name="myEvent1">
                <option value="Long Course Triathlon">Long Course Triathlon</option>
                <option value="Olympic Triathlon">Olympic Triathlon</option>
                <option value="10K">10K</option>
                <option value="Half Marathon">Half Marathon</option>
                <option value="No Event">No Event</option>
            </select>
            <br><br>
            <label for="myEvent2">*SU Event: </label>
            <select name="myEvent2">
                <option value="Sprint Triathlon">Sprint Triathlon</option>
                <option value="Try-a-Tri">Try-a-Tri</option>
                <option value="Splash n Dash">Splash n Dash</option>
                <option value="No Event">No Event</option>
            </select>
            <br><br>
            <label for="myASC">*Any Special Conditions: </label>
            <textarea name="myASC" id="myASC" rows="2" cols="20" required="required"></textarea>
            <br>
            <input type="submit" value="Register">
        </form>
    </main>
    <?php include '../includes/footer.inc.html.php'; ?>
</div>
<?php include '../includes/scripts2.inc.html.php'; ?>
</body>
</html>
