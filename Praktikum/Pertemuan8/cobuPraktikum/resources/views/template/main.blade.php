<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <header> @yield('header') </header>
    <content class="flex flex-row justify-between">
    <div class="left w-80 mx-4"></div>
    @yield('content') 
    <div class="right w-80 mx-4"></div>
    </content>
</body>
</html>