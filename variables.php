
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./app.css">
    <title>Variables</title>
</head>
<body>
<?php  
include 'header.php';

echo "-------CALCULATING AREA --------"; 
echo "<br>";

$width = 23;
$length = 54;
$area = $length * $width;
echo "The area of the land is : " . $area . " Square meters";

?>
</body>
</html>