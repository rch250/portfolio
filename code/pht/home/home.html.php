<!DOCTYPE html>
<html lang="en">
<head>
  <title>Portland Historical Tours</title>
  <meta name="description" content="Portland Historical Tours has offered three Portland Tour options for over 33 years: the Downtown Tour, the Landmarks Tour and the Growth Tour.">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href=project.css>
  <link href='https://fonts.googleapis.com/css?family=Cinzel' rel='stylesheet' type='text/css'>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
</head>
<body>
    <button id="testbutton">Click me to test</button>
  <div id="wrapper">
      <?php include 'includes/header.inc.html.php'; ?>
      <?php include 'includes/nav.inc.html.php'; ?>
    <main>
        <?php foreach ($contents as $content): ?>
            <a href="<?php echo BASE_URL; ?>tours"><img src="<?php echo BASE_URL . $content['image']?>" alt="Portland Historical Tours" width="850" height="389"></a>
            <h2><?php echo htmlspecialchars($content['title'], ENT_QUOTES, 'UTF-8'); ?></h2>
            <?php echo $content['description']; ?>
        <?php endforeach; ?>
      <!--
        <a href="tours.php"><img src="images/downtowntour.png" alt="Portland Historical Downtown Tour" width="850" height="481"></a>
        <div id="source"><p>(City of Portland Archives)</p></div>
      <a href="tours.php"><img src="images/growthtour.png" alt="Portland Historical Growth Tour" width="850" height="481"></a>
        <div id="source"><p>(City of Portland Archives)</p></div>
      <a href="tours.php"><img src="images/landmarkstour.png" alt="Portland Historical Landmarks Tour" width="850" height="481"></a>
        <div id="source"><p>(City of Portland Archives)</p></div>
        -->
    </main>
      <?php include 'includes/footer.inc.html.php'; ?>
  </div>
    <script>
$(document).ready(function(){
// add your jQuery code below
    
$("#testbutton").on("click", function () {
// add the code you want to run below
console.log("Hello, World!");
    gtag('event', 'click', {
  'event_category': 'buttons',
  'event_label': 'submit',
  'value': 'someone clicked the test button'
}); 
}
);
    
$("#testbutton").on("mouseover", function () {
// add the code you want to run below
console.log("Hello, World!");
    gtag('event', 'mouseover', {
  'event_category': 'buttons',
  'event_label': 'submit',
  'value': 'someone mouseovered the test button'
}); 
}
);

$("#testbutton").on("dblclick", function () {
// add the code you want to run below
console.log("Hello, World!");
    gtag('event', 'dblclick', {
  'event_category': 'buttons',
  'event_label': 'submit',
  'value': 'someone dblclick the test button'
}); 
}
);
    
    



// don't add more code past this line!
});
</script>
</body>
</html>