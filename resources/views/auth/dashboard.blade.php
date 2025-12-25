<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>
<body class="d-flex flex-column min-vh-100">
    <x-navbar>
    </x-navbar>
    <div class="row flex-grow-1 m-0 vw-100">
        <section class="col-2 bg-dark m-0 d-flex flex-column ps-4" style="--bs-bg-opacity: .1;">
            <div class="bg-light rounded p-3 mb-3 mt-3 shadow flex-grow-1 d-flex flex-column justify-content-end">
                <span class="fw-semibold">{{auth()->user()->name}}</span>
            </div>
        </section>
        <section class="col-10 bg-dark m-0 d-flex flex-column pe-4" style="--bs-bg-opacity: .1;">
            <div class="bg-light p-2 rounded p-3 mb-3 mt-3 shadow flex-grow-1 d-flex flex-column">
                <h1>I tuoi annunci attivi:</h1>
                <livewire-edit-properties></livewire-edit-properties>
                <livewire-dashboard-list></livewire-dashboard-list>
            </div>
        </section>
    </div>
</body>
</html>
