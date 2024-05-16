<?php
if (isset($_FILES['image'])) {
    $errors = array();
    $file_name = $_FILES['image']['name'];
    $file_size = $_FILES['image']['size'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_type = $_FILES['image']['type'];
    $temp = explode('.', $_FILES['image']['name']);
    $file_ext = strtolower(end($temp));
    $extensions = array("jpeg", "jpg", "png");

    if ($file_size > 2097152) {
        $errors[] = 'File size should not exceed 2 MB';
    }

    if (!in_array($file_ext, $extensions)) {
        $errors[] = 'Extension not allowed: JPEG, JPG, PNG are allowed.';
    }

    if (empty($errors) == true) {
        move_uploaded_file($file_tmp, "images/" . $file_name);
        echo "Success";
    } else {
        print_r($errors);
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP Testing</title>
    </head>
    <body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="image">
        <input type="submit">
        <ul>
            <?php if(isset($_FILES['image'])): ?>
            <li>
                Sent file: <?php echo $_FILES['image']['name']; ?>
            </li>
            <li>
                File size: <?php echo $_FILES['image']['size']; ?>
            </li>
            <li>
                File type: <?php echo $_FILES['image']['type']; ?>
            </li>
            <?php endif; ?>
        </ul>
    </form>

                <p>Post</p>

    <form action="" method="post" enctype="multipart/form-data">
        <p>Your name: <input type="text" name="name"></p>
        <p>Your age: <input type="text" name="age"></p>
        <input type="submit">
        
    </form>
    Hello <?php echo htmlspecialchars($_POST['name']);   ?>
    <br>
    Your age:  <?php echo htmlspecialchars($_POST['age']);   ?>


    
                <p>Get</p>

                <form action="" method="get" enctype="multipart/form-data">
        <p>Your name: <input type="text" name="name"></p>
        <p>Your age: <input type="text" name="age"></p>
        <input type="submit">
        
    </form>
    Hello <?php echo htmlspecialchars($_GET['name']);   ?>
    <br>
    Your age:  <?php echo htmlspecialchars($_GET['age']);   ?>


    </body>
</html>
