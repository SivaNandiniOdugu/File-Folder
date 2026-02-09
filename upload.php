<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Files</title>
</head>
<body>

<style>
    body{
        
        font-size: 22px;
        display: flex;
        flex-direction: column;
        align-items: center;
        font-family: Arial, sans-serif;

    }
    form {
        margin: 20px;
        display: flex;
        flex-direction: column;
        align-items: center;

    }
    input[type="file"] {
     
     
        margin-bottom: 10px;
         font-size: 22px;
        background-color: #f0f0f0;
        padding: 10px;
        font-family: Arial, sans-serif;
         border: 1px solid #ccc;
            border-radius: 5px;
            text-align: center;
        

    }
    button {
        padding: 10px 20px;
        background-color: #940cd3;
        color: white;
        border: none;
        cursor: pointer;
        font-size: 25px;
        font-weight:600;
        border-radius: 5px;
        
    }
</style>
    <form method="post" enctype="multipart/form-data" >
        <input class="file-input" type="file" name="fileToUpload" id="fileToUpload">
        <br>
        <button type="submit"  name="upload">UPLOAD</button>
    </form>
    <?php
    if(isset($_POST['upload'])){
        $target_dir="uploads/";
        $target_file=$target_dir.basename($_FILES["fileToUpload"]["name"]);
        if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$target_file)){
            echo "The file ".htmlspecialchars(basename($_FILES["fileToUpload"]["name"]))." has been uploaded.";
        }else{
            echo "Sorry, there was an error uploading your file.";
        }
    }
    ?>
</body>
</html>