<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'google' => [
    'client_id' => '466634856488-1hqrbvkftqhstj3j46fb6ik1q72fkruh.apps.googleusercontent.com', // configure with your app id
    'client_secret' => 'iUGwM4RLFMcGWnEtoTY0euKh', // your app secret
    'redirect' => 'http://localhost:8000/auth/google/callback', // leave blank for now
    ],

    'twitter' => [ //change it to any provider
            'client_id' => 'Fg82iWAjUzcTist4pcOSRmSfH',
            'client_secret' => 'sNn3539eXwhywczoamHgyYPNSgOzFyB34ZRcROyHZX8Ty3TLjy',
            'redirect' => 'http://localhost:8000/auth/twitter/callback',
        ],

    'facebook' => [ //change it to any provider
        'client_id' => '1366671970131531',
        'client_secret' => '3f8e5fb922a79b63705a37ce846aca50',
        'redirect' => 'http://localhost:8000/auth/facebook/callback',
    ],


    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

];
