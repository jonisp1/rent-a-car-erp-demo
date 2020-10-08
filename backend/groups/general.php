<?php

function take_wherehouse($database)
{

    $datas = $database->select("wherehouse", "*");

    if ($datas)
        echo json_encode($datas);
    else
        echo '0';
}


function take_shop($post, $database)
{

    $datas = $database->select("shop", "*", ["wherehouse_id" => $post['wherehouse']]);

    if ($datas)
        echo json_encode($datas);
    else
        echo '0';
}

?>