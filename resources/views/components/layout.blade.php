<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Presto.it</title>
    <script src="https://kit.fontawesome.com/cfb677e60e.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    @livewireStyles
    @vite(['resources/css/app.css'])
</head>
<body>

    <x-navbar />

    {{$slot}}

    <x-footer/>

    @livewireScripts
    @vite(['resources/js/app.js'])
</body>
</html>
