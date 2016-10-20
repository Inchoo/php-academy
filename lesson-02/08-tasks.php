<?php

/**
 * a) Parse csv file 08-tasks/postanski-uredi.csv to array as shown below
 * b) Group postal offices by region (second array)
 * c) Create function getRegionName($area) that resolves region name for 
 * specific area
 * d) Sort region, city and areas alphabetically
 */

$postalOfficesByRegion = [
    'Osječko-baranjska' => [
        [
            'name' => 'Osijek', 
            'zip' => '31000', 
            'area' => [
                'Brijest',
                'Briješće',
                //..
            ]
        ],
        //..
    ],
    //..
];
