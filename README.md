Yo PHP SDK
================

*Yo PHP SDK* is the official SDK wrapper for the [Yo API service](https://local.yopify.com)

## Requirements

- PHP Version 5.3.0+

## Installation

Install the latest version with

```bash
$ composer require yopify/yo-dev-php-sdk
```

## Manual User Installation

Download [src/Yo/Client.php](src/Yo/Client.php) and include the file in your PHP project.

Check out our examples in [example/example.php](example/example.php), quick usage examples:

## Basic Usage

Initialize Yo client via:

```php
<?php
use Yopify\Yo\Client;
$client = new Client();

$yoClient->authToken = 'YOUR-TOKEN-HERE'; // auth token can be found here: https://local.yopify.com/settings#/api

// OR

$yoClient->setBasicAuth('me@mysite.com', 'secret'); // You can use basic auth also
```

#####To check authentication:
```php
$isAuthenticated = $yoClient->ping(); // false if not authenticated, current timestamp if success

```

#####Get a single Event

```php
$event = $yoClient->getEvent(EVENT_ID);
```

#####Get list of events

```php
$events = $client->getEvents(10, 1);

// Check for success
if (isset($events->meta)) {
    echo 'Current page: ', $events->meta->pagination->current_page, "\n";
    echo 'Total pages: ', $events->meta->pagination->total_pages, "\n";
    echo 'Page page: ', $events->meta->pagination->per_page, "\n";
    echo 'Total count: ', $events->meta->pagination->total, "\n";
}
```

#####Create new event

```php
$event = new Yopify\Yo\YoEvent();
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
```

#####Update an event

```php
$YoEvent = $yoClient->getEvent(EVENT_ID);

if (isset($YoEvent->data)) {
    $YoEvent = $YoEvent->data;
    $YoEvent->province = "AAAA";

    $updatedEvent = $yoClient->updateEvent($YoEvent);
}
```

#####Delete an event:

```php
$deletedEvent = $yoClient->deleteEvent(20);
```

## Support

If you have questions, email us at [yo@yopify.com](mailto:yo@yopify.com).