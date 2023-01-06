<?php
//multidimensional array.
$languages = [
    'PHP'=> [
        'creator'=>'Resmus Redorf',
        'extension' =>'.php',
        'isOpenSource'=>true,
        'versions'=> ['version'=>1.1, 'release'=>'oct 5, 2022'],
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

//how to get php key value.
echo $languages['PHP']['versions']['version']."<br/>";  //php key in, versions key in version key.
echo $languages['PHP']['versions']['release']."<br/>";
echo $languages['PHP']['extension']."<br/>";

?>