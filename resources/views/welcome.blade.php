<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Henry the Potter</title>

        <!-- tailwindcss -->
        <link rel="stylesheet" href="/css/app.css">

        

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>
        <div id="app">

            <header>
                <nav>
                    <router-link to="/">Home</router-link>
                    <router-link :to="{ name: 'about' }">About</router-link>
                </nav>
            </header>
            
            <router-view></router-view>

        </div>

        <!-- vuejs -->
        <script src="/js/app.js"></script>
    </body>
</html>
