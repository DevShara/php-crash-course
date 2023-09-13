<?php
    //PHP has an exception model similar to that of other programmig languages. An exception can be  thrown, and caught (catched) within PHP. Code may be sorrounded in a try block, to facilitate the catching of potential excepptions.Each try must have at least one corresponding catch or finally block.

    function inverse($x){
        if(!$x){
            throw new Exception('Division by zero');
        }

        return 1/$x;
    }


    try{
        echo inverse(6);
        echo inverse(0);
    }catch(Exception $err){
        echo 'Caught Exception', $err->getMessage(), ' '; 
    }

?>