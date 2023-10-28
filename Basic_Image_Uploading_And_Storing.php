<?php
//page will refresh after user clicks submit

if(isset($_FILES['image'])){
    //jese hi value $_FILES['image'] set ho jae, condition true ho jae
    echo "<pre>";
    print_r($_FILES);
    echo "</pre>";

    //How to save image on server
    $filename = $_FILES['image']['name'];
    $filesize = $_FILES['image']['size'];
    $filetmp = $_FILES['image']['tmp_name'];
    $filetype = $_FILES['image']['type'];

    //1st parameter is temp name, 2nd parameter is server me file ko upload kahn krna he
    if(move_uploaded_file($filetmp,"images/".$filename)){
        echo "successfully uploaded";
    }else{
        echo "Could not upload the image";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="image">
        <input type="submit">
    </form>

</body>
</html>