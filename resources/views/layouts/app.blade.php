<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- additional script -->
    <script  src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>Home</title>
    @livewireStyles
    @vite('resources/css/app.css')
    <script src="./alpine/alpine.js"></script>
</head>
<body>

    <livewire:navbar />


    {{$slot}}

    @livewireScripts
</body>
</html>
