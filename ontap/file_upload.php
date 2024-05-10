<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
</head>
<body>
    <?php
    if (! empty($_POST + $_FILES)) {
        $from = $_FILES['avatar']['tmp_name'];
        $to = './uploads' . time() . $_FILES['avatar']['name'];
        if(move_uploaded_file($from, $to)){
            echo 'Successfully';
        }else{
            echo 'Fail !';
        } 
        
        die;
    }
    ?>
    <form action="" method="post" enctype="multipart/form-data">

    <input type="file" name="avatar">
    <button type="submit">Upload</button>
    </form>
</body>
</html>