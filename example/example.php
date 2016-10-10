<?php

include_once '../src/Yo/Event.php';
include_once '../src/Yo/Client.php';
use Yopify\Yo\Client as Client;


$token = '';


function pr($data)
{
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}

/**
 * Create client object
 */
$yoClient = new Client();
//$yoClient->appId = 0; // Use this with your app id (only when you have more than 1 app)

if ($token) {
    $yoClient->authToken = $token;
}else {
    $yoClient->setBasicAuth('me@mysite.com', 'secret');
}


/**
 * Check authentication
 */
if ($yoClient->ping()) {
    echo 'Authenticated';
}else {
    echo 'Error in authentication';
}
die;


/**
 * Get a single event
 */
//pr($yoClient->getEvent(1));die;


/**
 * Get list of events
 */
/*$events = $client->getEvents(10, 1);

if (isset($events->meta)) {
    echo 'Current page: ', $events->meta->pagination->current_page, "\n";
    echo 'Total pages: ', $events->meta->pagination->total_pages, "\n";
    echo 'Page page: ', $events->meta->pagination->per_page, "\n";
    echo 'Total count: ', $events->meta->pagination->total, "\n";
}

pr($events);
die;*/


/**
 * Create new event
 */
/*$event = new Yopify\Yo\YoEvent();
$event->event_type_id = '1';
$event->unique_id1 = '10';
$event->unique_id2 = '1';
$event->title = 'This awesome product';
$event->first_name = 'Jon';
$event->last_name = 'snow';
$event->city = 'New York';
$event->province = 'XXXX';
$event->country = 'USA';
$event->url = 'https://example.com';
$event->message_template = '[FIRST-NAME] from [COUNTRY] just purchased [TITLE-WITH-LINK]';
$YoEvent = $yoClient->createEvent($event);
pr($YoEvent);
die;*/


/**
 * Update an event
 */
/*$YoEvent = $yoClient->getEvent(20);

if (isset($YoEvent->data)) {
    $YoEvent = $YoEvent->data;

    $YoEvent->province = "AAAA";

    $YoEventUpdated = $yoClient->updateEvent($YoEvent);

    pr($YoEventUpdated);
}
die;*/


/**
 * Delete an event
 */
/*pr($yoClient->deleteEvent(20));
die;*/