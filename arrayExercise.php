<?php

$numbers = [
    1,
    2,
    3,
    '3'=>4,
    5
    ];

var_dump($numbers);

print_r($numbers);

echo " my number:  {$numbers['3']} \n";

$info = [
    'first_name'=> 'Francisco',
    'last_name'=> 'Escobedo',
    'email'=> 'francisco@gmail.com',
    'phone'=> '210-216-2025'

];

$test = [
    'person1'=>[
        'first_name'=> 'Francisco',
        'last_name'=> 'Escobedo',
        'email'=> 'francisco@gmail.com',
        'phone'=> '210-216-2025'
    ],
    'person2'=>[
        'first_name'=> 'Caleb',
        'last_name'=> 'Escobedo',
        'email'=> 'caleb@gmail.com',
        'phone'=> '210-218-6612'
    ],
    'person3'=>[
        'first_name'=> 'Diego',
        'last_name'=> 'Escobedo',
        'email'=> 'diego@gmail.com',
        'phone'=> '210-342-3558'
    ]
];

print_r($test);
echo $test['person1']['first_name'] . PHP_EOL;