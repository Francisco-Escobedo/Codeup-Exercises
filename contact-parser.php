<?php

function parseContacts($filename)
{
    $contacts = array();

    $handle = fopen($filename, 'r');
    $contents = fread($handle, filesize($filename));
    $contents = trim($contents);
    $firstExplode = explode ("\n", $contents);
    foreach($firstExplode as $position => $contact){
        $arrayContact = explode("|", $contact);
        // $contacts[$position] = $arrayContact;
        $arrayContact[1] = substr($arrayContact[1], 0, 3). "-". substr($arrayContact[1], 3, 3) . "-".substr($arrayContact[1], 6);

        array_push($contacts, array('name' => $arrayContact[0], 'number' => $arrayContact[1]) );


        // var_dump($arrayContact);
        // $contacts = $arrayContact;
    }
    
    // $contacts = array_map(function($tag) {
    //     return array(
    //         'name' => $tag[0],
    //         'number' => $tag[1]
    //     );
    // }, $contacts);

    // print_r($contacts);

    fclose($handle);
    
    return $contacts;
}

var_dump(parseContacts('contacts.txt'));




//Notes from class (Cameron's Example)

// $filename = 'cities.txt'

// $handle = fopen($filename, 'r');

// $contents = freads($handle, filesize($filename));

// // be sure to CLOSE THE FILE AFTER YOU USE IT
// fclose($handle);

// var_dump($contenst);
