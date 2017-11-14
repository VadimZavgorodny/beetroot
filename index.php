<?php

//$int = 1;
//$string = '23';
//
////$array = [1, 3, 5, 6, 'name' => 'Vadim', 'surname' => 'Petrov', 7, 8, 9,
////    'users' => ['Vadim', "Alex", "Ruslan"]];
//
//$arrayNames = ['Petrov', 'Ivanov', 'Sidorov'];
//
//for ($i = 0; $i < 15; $i++) {
//    echo "<pre>";
//    var_dump($array[$i]);
//    echo "</pre>";
//}
//
//
//foreach ($array as $key => $value) {
//    if (is_array($value)) {
//        foreach ($value as $key => $value) {
//            var_dump($value);
//        }
//    }
//    var_dump($key);
//}
//$count = 0;
//
//while ($currentName != "Ivanov") {
//
//    $currentName = $arrayNames[$count];
//    echo "<pre>";
//    var_dump($currentName);
//    var_dump($currentName);
//    echo "</pre>";
//    $count = $i++;
//}

//do {
//
//} while()


//var_dump($int);
//var_dump($string);
//var_dump($array);
$array = array(1,2,3,'name' => 'Vadim',4);

foreach($array as $key => $value) {
    if ($key === 'name') {
        var_dump($key);
        var_dump($value);
    }
} 

?>