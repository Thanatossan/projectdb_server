<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>login</title>
        <meta name="csrf-token" content="{{ csrf_token() }}" >
    </head>
    <body>
    <div class="content">
    <div id="app">
         <login></login>
    </div>
    </div>

    
    @if(config('app.env') == 'local')
    <script src="http://localhost:35729/livereload.js"></script>
    @endif
    </body>
 
 <script src="js/app.js" charset="utf-8"></script>
</html>
