<?php
include_once '..' . DIRECTORY_SEPARATOR .
    'lib' . DIRECTORY_SEPARATOR .
    'Features.class.php';


date_default_timezone_set('UTC');

$LS_FEATURES = new Features();
$LS_FEATURES->id = 'usgs_landslides_home';
$LS_FEATURES->title = 'USGS Landslide Hazards Program Featured Items';
$LS_FEATURES->author = 'U.S. Geological Survey';
$LS_FEATURES->siteUrl = 'https://landslides.usgs.gov/';
$LS_FEATURES->baseUrl = '';

/**
 * Items at top of list are featured
 *
 * Each Item is an array with the following keys:
 *   id {String}
 *      unique identifier without spaces.
 *      for example:
 *         'induced'
 *
 *   title {String|HTML}
 *         item title.
 *
 *   content {String|HTML}
 *           item summary.
 *
 *   link {String}
 *        relative item link.
 *
 *   modified {Integer}
 *            unix epoch timestamp.
 *            for example:
 *                filemtime('induced/index.php')
 *                strtotime('2014-10-01')
 *
 *   thumbnail {String}
 *             relative path to thumbnail image.
 *             Used by items in atom format.
 *
 *   image {String}
 *         relative path to full size image.
 *         Only used by "featured" items in html format.
 *
 *   tags {Array<String>} optional.
 *        Array of categories for item.
 *        Only used by atom format.
 *
 *   publish {Integer} optional.
 *           a time when item should be "published".
 *           if no publish time is specified, or the time is in the past, the item will be shown.
 *           for example:
 *               strtotime('2014-10-31')
 *
 */

 $LS_FEATURES->items[] = array(
    'id' => '2017-06-30',
    'title' => 'Nuugaatsiaq Landslide&ndash;Preliminary Analysis',
    'content' => 'Preliminary analysis of the tsunami that hit the community of Nuugaatsiaq, Greenland around 10 pm local time on June 17th, 2017 that presumably killed four people and destroyed eleven homes.' ,
    'link' => 'https://landslides.usgs.gov/research/featured/2017-nuugaatsiaq/',
    'modified' => strtotime('2017-06-30'),
    'thumbnail' => 'images-featured/nuug-landslide.jpg',
    'image' => 'images-featured/nuug-landslide.jpg'
  );

$LS_FEATURES->items[] = array(
   'id' => '2017-04-17',
   'title' => 'Homeowner&apos;s Guide to Landslides',
   'content' => 'A new publication, <i>A Homeowner&apos;s Guide to Landslides for Washington and Oregon</i> (PDF) by the Washington Department of Natural Resources and the Oregon Department of Geology and Mineral Industries.' ,
   'link' => 'http://file.dnr.wa.gov/publications/ger_homeowners_guide_landslides.pdf',
   'modified' => strtotime('2017-04-17'),
   'thumbnail' => 'images-featured/homeowner-guide.gif',
   'image' => 'images-featured/homeowner-guide.gif'
 );

$LS_FEATURES->items[] = array(
   'id' => '2017-01-05',
   'title' => 'Predicting Postfire Debris Flows Saves Lives',
   'content' => 'How predicting postfire debris flows saves lives.' ,
   'link' => 'https://www.usgs.gov/center-news/predicting-postfire-debris-flows-saves-lives',
   'modified' => strtotime('2017-01-05'),
   'thumbnail' => 'images-featured/debrisflow-sm.jpg',
   'image' => 'images-featured/debrisflow-sm.jpg'
 );

$LS_FEATURES->items[] = array(
   'id' => '2017-01-01',
   'title' => 'Rainfall and Landslides in California',
   'content' => '
    <a href="research/ca-rainfall/ncal.php">Northern and Central California</a>
    <br/>
    <a href="research/ca-rainfall/scal.php">Southern California</a>
  ' ,
   'link' => '',
   'modified' => strtotime('2017-01-01'),
   'thumbnail' => 'images-featured/bluebirdcyn2005-sm.jpg',
   'image' => 'images-featured/bluebirdcyn2005-sm.jpg'
 );

 $LS_FEATURES->items[] = array(
    'id' => '2015-03-21',
    'title' => 'Down to Earth With: The USGS Landslide Response Team',
    'content' => 'Interview by EARTH magazine of members of the USGS Landslide Reponse Team' ,
    'link' => 'https://www.earthmagazine.org/article/down-earth-usgs-landslide-response-team',
    'modified' => strtotime('2015-03-21'),
    'thumbnail' => 'images-featured/responseteam-sm.jpg',
    'image' => 'images-featured/responseteam-sm.jpg'
  );

$LS_FEATURES->items[] = array(
  'id' => '2014-05-25',
  'title' => 'Reconstruction of an Avalanche',
  'content' => 'The West Salt Creek Rock Avalanche, Colorado, May 25, 2014.' ,
  'link' => 'https://earthquake.usgs.gov/research/featured/2015-westsaltcreek/',
  'modified' => strtotime('2014-05-25'),
  'thumbnail' => '/research/featured/images/westsaltcreek-sm.jpg',
  'image' => '/research/featured/images/westsaltcreek-sm.jpg'
);

?>
