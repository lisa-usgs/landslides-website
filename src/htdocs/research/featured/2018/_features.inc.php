<?php

include_once $_SERVER['DOCUMENT_ROOT'] . '/../lib/Features.class.php';

date_default_timezone_set('UTC');

$LS_FEATURES = new Features();
$LS_FEATURES->id = 'usgs_landslides_home';
$LS_FEATURES->title = 'USGS Landslide Hazards Program Featured Items';
$LS_FEATURES->author = 'U.S. Geological Survey';
$LS_FEATURES->siteUrl = 'https://landslides.usgs.gov/';
$LS_FEATURES->baseUrl = '';


 $LS_FEATURES->items[] = array(
    'id' => '2018-01-29',
    'title' => 'USGS Geologists Study Debris-Flow Aftermath in Montecito',
    'content' => 'Days after fatal debris flows devastated Southern California’s Montecito community,  a team of U.S. Geological Survey geologists joined county, state, and federal partners to survey and  evaluate the aftermath.' ,
    'link' => 'https://www.usgs.gov/news/usgs-geologists-join-efforts-montecito-assess-debris-flow-aftermath',
    'modified' => strtotime('2018-01-29'),
    'thumbnail' => 'https://landslides.usgs.gov/images-featured/ScientistsUnite_Montecito.jpg',
    'image' => 'https://landslides.usgs.gov/images-featured/ScientistsUnite_Montecito.jpg'
  );

 $LS_FEATURES->items[] = array(
    'id' => '2018-01-18',
    'title' => 'Rattlesnake Hills Landslide Information',
    'content' => 'What is known and what is being done, from the Washington Department of Natural Resources.' ,
    'link' => 'https://www.dnr.wa.gov/rattlesnake-hills-landslide',
    'modified' => strtotime('2018-01-18'),
    'thumbnail' => 'https://landslides.usgs.gov/images-featured/RattlesnakeHills.png',
    'image' => 'https://landslides.usgs.gov/images-featured/RattlesnakeHills.png'
  );