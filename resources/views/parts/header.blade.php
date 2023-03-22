<!DOCTYPE html>
    <html dir="ltr" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta
        name="keywords"
        content="kahoot, kahoot answers"
        />
        <meta
        name="description"
        content="Get answers for Kahoot games!"
        />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'KahootYoinker') }}</title>
        <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
        <link
        rel="icon"
        sizes="16x16"
        href="{{ URL::to('/') }}/images/favicon.ico"
        />
        @vite('resources/js/app.js')
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>