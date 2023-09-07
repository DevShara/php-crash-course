<?php

   if(isset($_POST['submit'])){
    echo $_POST['name'];
    echo $_POST['age'];
   }

?>


<form  method="POST">
    <div>
        <label for="name">Name:</label>
        <input type="text" name="name">
    </div>
    <div>
        <label for="age">Age:</label>
        <input type="text" name="age">
    </div>
    <input type="submit" value="submit" />
</form>

<p>Name: <?php echo $_POST['name'];?></p>
<p>Age: <?php echo $_POST['age'];?></p>