<?php
//associative array.
$arr = [
    'name'=>'Dravinanshu Mishra',
    'age'=> 25,
    'Company'=>'Ucertify',
    'Post'=> 'uCertify'
];

print_r($arr);
echo "<br/>";

//how to add key with value in an array.
$arr['Location'] = 'Prayagraj';
print_r($arr);
echo "<br/>";


//add alo this way.
$language = 'Go-Lang';
$arr[$language] = '1.2-Version';
print_r($arr);

?>