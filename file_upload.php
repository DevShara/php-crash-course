<?php

    // $message = "Please select an image";
    if(isset($_POST['submit'])){
        $allowed_ext = ["jpg", "png", "jpeg", "gif"];
  
        if(!empty($_FILES['upload']['name'])){
            $filename = $_FILES['upload']['name'];
            $filesize = $_FILES['upload']['size'];
            $file_tmp = $_FILES['upload']['tmp_name'];
            $targetDir = "uploads/$filename";

             //Get file extension
            $file_ext = explode(".", $filename);
            $file_ext = strtolower(end($file_ext));
            
            // Validate file ext
            if(in_array($file_ext, $allowed_ext)){
                //validate the file size
                if($filesize <  1000000){
                    move_uploaded_file($file_tmp, $targetDir);
                    $messsage = "File uploaded succesfully";
                }else{
                    $message = "<p>The file size should be less than 1mb</p>";
                }

            }else{
                $message = "<p>Invalid file type</p>";
            }
        }else{  
            $message = "<p>Please select a file</p>";

        }  
    }

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>
    <?php echo $message ?? null ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
        Please select a file
        <input type="file" name="upload" />
        <input type="submit" value="Submit" name="submit" />
    </form>
</body>
</html>