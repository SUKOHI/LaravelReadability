# LaravelReadability
A Laravel package to extract readable text from HTML.  
This package is actually a wrapper class of [feelinglucky/php-readability](https://github.com/feelinglucky/php-readability).

# Installation

Execute composer command.

    composer require sukohi/laravel-readability:2.*

Set the service provider in app.php

    'providers' => [
        Sukohi\LaravelReadability\LaravelReadabilityServiceProvider::class
    ]  

and alias.

    'aliases' => [
    		'LaravelReadability' => Sukohi\LaravelReadability\Facades\LaravelReadability::class
    ]


# Basic Usage

    $readability = \LaravelReadability::make($html);
    
    try {

        $data = $readability->getContent();
        dd($data)

    } catch (\Exception $e) {

        // Content not found

    }
    
# with Encoding

    $readability = \LaravelReadability::make($html, 'Shift_JIS');
    
    
# License
    
This package is licensed under the MIT License.  
Copyright 2016 Sukohi Kuhoh


