<?php
//multidimensional array.
$languages = [
    'PHP'=> [
        'creator'=>'Resmus Redorf',
        'extension' =>'.php',
        'isOpenSource'=>true,
        'versions'=> ['varsion'=>1.1, 'Release'=>'1-jan-2022'],
    ],
    'Python'=> [
      'creator' => 'Guido Van Ressum',
      'Extension' => '.py',
      'isOpensource' => true,
      'versions' =>['version'=>3.9, 'release'=>'oct 5, 2020'],
    ],
    'JavaScript'=>'Dravinanshu Mishra'
];

echo "<pre>";
print_r($languages);
echo "</pre>";

?>