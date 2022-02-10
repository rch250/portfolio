<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ace in the Hole Contact</title>
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
        <p>Thanks for Contacting Us. Our records show you submitted the following:
            <br><br>
            Name:    <?php echo htmlspecialchars($myName , ENT_QUOTES, 'UTF-8'); ?> <br>
            Email:    <?php echo htmlspecialchars($myEmail , ENT_QUOTES, 'UTF-8'); ?> <br>
            Affiliation:    <?php echo htmlspecialchars($myAffiliation , ENT_QUOTES, 'UTF-8'); ?> <br>
            Question:    <?php echo htmlspecialchars($myQuestion , ENT_QUOTES, 'UTF-8'); ?> <br>

        </p>
    </main>
    <?php include '../includes/footer.inc.html.php'; ?>
</div>
<?php include '../includes/scripts2.inc.html.php'; ?>
</body>
</html>
