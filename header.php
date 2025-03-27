

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app.css">
    <title>Nav</title>
 </head>
 <body>
 <?php

//page URLS
$pageUrls = [
    'Home Page' => './index.php',
    'variables' => './variables.php',
    'conditionals' => './conditionals.php',
    'foreach' => './for_loops.php',
];

//Function to generate navigation Links
function generateUrlLinks($url, $label)
{
    $isActive = basename($_SERVER['PHP_SELF']) == basename($url) ? 'class = "Active" ' : '';
    return "<a href=\"$url\" $isActive>$label</a>";
}
?>
<nav class="dashboard_nav">
 <?php
    echo generateUrlLinks($pageUrls['Home Page'], 'Home Page');
    echo generateUrlLinks($pageUrls['variables'], 'Variables');
    echo generateUrlLinks($pageUrls['foreach'], 'Loops');
    echo generateUrlLinks($pageUrls['conditionals'], 'conditionals');

    ?>
</nav>
 </body>
 </html>