<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Title -->
        <title>Review Room</title>

        <!-- Fonts -->
     
        <!-- Styles / Scripts -->        
            @vite(['resources/css/app.css', 'resources/js/app.js'])
            @inertiaHead
        <!-- CSRF Token -->
      
    </head>
   <body>
        @routes
        @inertia
   </body>
</html>
