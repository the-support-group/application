# Application
[![Build Status](https://scrutinizer-ci.com/g/air-php/application/badges/build.png?b=master)](https://scrutinizer-ci.com/g/air-php/application/build-status/master) [![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/air-php/application/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/air-php/application/?branch=master)

The application library includes abstract classes representing a web application.

## Installation
Installation via [Composer](https://getcomposer.org/) is recommended.

    "require": {
        "air-php/application": "dev-master"
    }

## Application
The `Application` class is abstract, and as such, you must provide your own implementation.

    <?php

    use Air\Application\Application;

    class MyApp extends Application
    {
        // Custom implementation here…
    }

The application needs to be configured with a router, dispatcher and request:

    <?php

    $app = new MyApp;

    $app->setRouter($router);
    $app->setDispatcher($dispatcher);
    $app->setRequest($request);

Finally, you can run the app:

    $app->run();