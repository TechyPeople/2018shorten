<?php
    $key = $_REQUEST['key'];
    $url = $_REQUEST['url'];
    
    $list = json_decode(file_get_contents('list.json'), true);

    $list[$key] = $url;

    file_put_contents(json_encode($list));
?>