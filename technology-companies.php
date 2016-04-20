<?php

$companies = [
    'Sun Microsystems' => [
        'Vinod Khosla',
        'Bill Joy',
        'Andy Bechtolsheim',
        'Scott McNealy'
    ],
    'Silicon Graphics' => [
        'Jim Clark',
        'Ed McCracken'
    ],
    'Cray' => [
        'William Norris',
        'Seymour Cray'
    ],
    'NeXT' => [
        'Steve Jobs',
        'Avie Tevanian',
        'Joanna Hoffman',
        'Bud Tribble',
        'Susan Kare'
    ],
    'Acorn Computers' => [
        'Steve Furber',
        'Sophie Wilson',
        'Hermann Hauser',
        'Jim Mitchell'
    ],
    'MIPS Technologies' => [
        'Skip Stritter',
        'John L. Hennessy'
    ],
    'Commodore' => [
        'Yash Terakura',
        'Bob Russell',
        'Bob Yannes',
        'David A. Ziembicki',
        'Jay Miner'
    ],
    'Be Inc' => [
        'Steve Sakoman',
        'Jean-Louis Gassée'
    ]
];

// SORT BY NUMBER OF EMPLOYEES AT COMPANY.

// foreach($companies as $company => $employee){

//     $amount = count($employee);
//     sort($employee);
//     echo"$company\n";
//     echo "Number of Employees: $amount\n";
//     print_r($employee);
//     echo "====================\n";

// }

foreach($companies as $companyName => $employees){
    sort ($employees);
    sort(count($employees));
    $companies[$companyName] = $employees;
    echo "=====================\n";
}

print_r($companies);



