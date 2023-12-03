<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title', 'Assignment 1')</title>
    <!-- plugins:css -->
    @include('partials.styles')
    <!-- endinject -->
    <link rel="shortcut icon" href="./images/favicon.png" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
</head>

<body>
<div class="om5c__wrap">
    @yield('contents')
</div>
@include('partials.scripts')
</body>

</html>
