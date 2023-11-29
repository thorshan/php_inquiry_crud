<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Inquiries</title>
</head>

<body>

    @yield('header')

    <nav class="navbar bg-dark d-flex py-2 px-5" data-bs-theme="dark">
        <div class="p-2 bd-highlight">
            <div class="navbar-brand h1">Inquiry List</div>
        </div>
        <a href="{{route('inquiries.create')}}" class="ms-auto p-2 bd-highlight">
            <button class="btn btn-primary">Add New</button>
        </a>
        <div class="p-2 bd-highlight">
            <img width="40px" src="https://shiftart.com/wp-content/uploads/2017/04/RC-Profile-Square.jpg" alt="" class="rounded">
        </div>
    </nav>

    @yield('content')
