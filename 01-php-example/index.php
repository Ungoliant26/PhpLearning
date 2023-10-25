<?php
    $title = 'Main tab';
    require_once 'blocks/header.php';
?>
    <h1>Main tab</h1>
<?php
    echo date('j F o ** G:i:s'). '<br>';

    $lisTest = [343, 434, 2211, 454545, 33333, 11111, 32309];
    unset($lisTest[0]);
    $lisTest = array_values($lisTest);

    $arr = array_slice($lisTest, 2, 2);
    print_r($arr);
    echo '<br>';

    $arrUnionOne = [44, 34, 33];
    $arrUnionTwo = [343, 43434, 332222];
    $arrUnion = array_merge($arrUnionOne, $arrUnionTwo);
    print_r($arrUnion);
    echo '<br>';

  /*  if (in_array(2211, $lisTest) == '')
        echo 'Not Found';
    else
        echo 'Found';*/

    print_r($lisTest);
    echo '<br>';

    $words = 'Kirill and Alex and Fufel and Susana';
    $arrWords = explode('and', $words);
    print_r($arrWords);
    echo '<br>' . implode(' | ', $arrWords);

    require 'blocks/footer.php';
?>