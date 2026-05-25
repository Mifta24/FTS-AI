<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
<title>@yield('title', 'FTS AI')</title>
<meta name="description" content="@yield('description', 'FTS AI | Fujiyama Technology Solutions')">
<meta name="theme-color" content="#0F2A55">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;600;700;800&display=swap" rel="stylesheet">
@vite(['resources/css/app.css', 'resources/js/app.js'])
@stack('styles')
</head>
<body class="@yield('body_class')">

@include('partials.header')

<main id="main">
@yield('content')
</main>

@include('partials.footer')

@include('partials.chatbot')

</body>
</html>
