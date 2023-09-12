<?php
$colors = array(
    "a" => "red",
    "b" => "green",
    "c" => "yellow",
    "d" => "black"
);

if (isset($_POST['text'])) {
    global $txt;
    $txt = $_POST['text'];
    $result = array_search($txt, $colors);
    echo "Your serach value -> $txt and key is -> $result";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Search</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="text" value="<?php global $txt; echo $txt;?>" placeholder="Enter your color name">
        <input type="submit" value="Submit">
    </form>
</body>
</html>