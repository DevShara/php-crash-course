<?php
    //Sessions are a way to store information (in variables) to be used across multiple pages. Unlinke cookies, sessions are stored on the server.

    session_start();

    if(isset($_SESSION["username"])){
        header('Location: /php-crash-course/extras/dashboard.php');
    }


    if(isset($_POST["login"])){
        $username = filter_var($_POST['username'], FILTER_SANITIZE_SPECIAL_CHARS);
        $password = $_POST['password'];

        if($username == "sam" && $password == "pass"){
            $_SESSION["username"] = $username;
            header('Location: /php-crash-course/extras/dashboard.php');
        }else{
            echo "Invalid username or password";
        }
    }

    
?>

<form  method="POST"  >
    <div>
        <label for="username">Username</label>
        <input type="text" name="username">
    </div>
    <div>
        <label for="password">Password</label>
        <input type="password" name="password">
    </div>
    <input type="submit" value="login" name="login" />
</form>