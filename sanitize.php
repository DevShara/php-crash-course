<?php

   if(isset($_POST['submit'])){
    // $name = htmlspecialchars($_POST['name']);
    // $age = htmlspecialchars($_POST['age']);

    $name = filter_var($_POST['name'], FILTER_SANITIZE_SPECIAL_CHARS );

    echo $name;
   }

   echo ($_GET['param']);
?>


<form  method="POST" <?php echo $_SERVER['PHP_SELF'] ?> >
    <div>
        <label for="name">Name:</label>
        <input type="text" name="name">
    </div>
    <div>
        <label for="age">Age:</label>
        <input type="text" name="age">
    </div>
    <input type="submit" value="submit" name="submit" />
</form>
<!-- 
<p>Name: <?php echo $_POST['name'];?></p>
<p>Age: <?php echo $_POST['age'];?></p> -->

