<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css">
    @vite(['resources/css/app.css','resources/js/app.js'])

</head>
<body class="d-flex flex-column min-vh-100 container p-0">
    <x-navbar></x-navbar>
    <x-alerts></x-alerts>
    {{$slot}}
    <x-footer></x-footer>
</body>
</html>