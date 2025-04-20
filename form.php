
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data</title>
</head>
<body>
    <div>
        <p>Name: <?php echo $_POST['username']?></p>
        <p>Email: <?php echo $_POST['email']?></p>
    </div>
</body>
</html>

<?php

echo "<pre>";
print_r($_FILES);
echo "</pre>";

$image_name = rand(1,100) . $_FILES["image"]["name"];

$image_tmp_name = $_FILES["image"]["tmp_name"];

move_uploaded_file($image_tmp_name,"./myimage/$image_name");

?>