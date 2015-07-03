<?php
    $newKey = $_REQUEST['key'];
    $newVal = $_REQUEST['url'];
    $error = "Error!  " . $newKey . " couldn't be added.  Make sure you've added a valid link (with the http:// or https:// prefix) and then try again.";
    
    if(strpos($newVal, 'http') !== false) {
        $list = json_decode(file_get_contents("list.json"), true);

        $list[$newKey] = $newVal;

        $newList = json_encode($list);
        file_put_contents("list.json", $newList);
        
        if(json_decode(file_get_contents("list.json"), true)[$key] == $value) {
            echo( $newKey . " has been added, with the corresponding URL being " . $newVal . ".  Thanks!");
        } else {
            echo($error);
        }
        
    } else {
        echo($error);
    }
?>