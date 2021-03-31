<?php
function carTable(array $result):string
{
    $carTableString = '<div class = "container">';
    foreach ($result as $user){
        $carTableString .= '<div>'. 'Brand: '. $user['Brand'] . '<br>' .'Model: '. $user['Model'] . '<br>'. 'Year Released: '. $user['Year_released']. '</div>';
    }
    $carTableString .= '</div>';

    return $carTableString;
}

?>