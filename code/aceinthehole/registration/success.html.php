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
        <h2>Success!</h2>
        <p>Thanks for Registering. Our records show you submitted the following:
            <br><br>
            Name:    <?php echo htmlspecialchars($myName , ENT_QUOTES, 'UTF-8'); ?> <br>
            Age:    <?php echo htmlspecialchars($myAge , ENT_QUOTES, 'UTF-8'); ?> <br>
            Email:    <?php echo htmlspecialchars($myEmail , ENT_QUOTES, 'UTF-8'); ?> <br>
            Emergency Contact Phone:    <?php echo htmlspecialchars($myECP , ENT_QUOTES, 'UTF-8'); ?> <br>
            Emergency Contact Name:    <?php echo htmlspecialchars($myECN , ENT_QUOTES, 'UTF-8'); ?> <br>
            Gender:    <?php echo htmlspecialchars($myGender , ENT_QUOTES, 'UTF-8'); ?> <br>
            SA Event:    <?php echo htmlspecialchars($myEvent1 , ENT_QUOTES, 'UTF-8'); ?> <br>
            SU Event:    <?php echo htmlspecialchars($myEvent2 , ENT_QUOTES, 'UTF-8'); ?> <br>
            Any Special Conditions:    <?php echo htmlspecialchars($myASC , ENT_QUOTES, 'UTF-8'); ?> <br>

        </p>
    </main>
    <?php include '../includes/footer.inc.html.php'; ?>
</div>
<?php include '../includes/scripts2.inc.html.php'; ?>
</body>
</html>
