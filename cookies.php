<?php 
    // cookies are a mechanism for storing data in the remote browser and thus tracking or identifying return users. You can set specific data to be stored in the browser, and the retrieve it again when the user visits the site again.

    setcookie('name', 'Sam', time() + 86500);

    if(isset($_COOKIE['name'])){
        echo $_COOKIE['name'];
    }

    setcookie('name', '', time() - 86400);

?>