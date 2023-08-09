
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">

<title>{{config('office.name')}}</title>

<meta name="description" content="{{config('office.name')}} created by {{env('AUTHOR_NAME')}}">
<meta name="author" content="{{env('AUTHOR_NAME')}}">
<meta name="robots" content="noindex, nofollow">

<!-- Open Graph Meta -->
<meta property="og:title" content="{{config('office.name')}}">
<meta property="og:site_name" content="{{config('office.name')}}">
<meta property="og:description" content="{{config('office.name')}} created by {{env('AUTHOR_NAME')}}">
<meta property="og:type" content="website">
<meta property="og:url" content="">
<meta property="og:image" content="">

<!-- Icons -->
<!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
<link rel="shortcut icon" href="{{asset('media/favicons/favicon.png')}}">
<link rel="icon" type="image/png" sizes="192x192" href="{{asset('media/favicons/favicon-192x192.png')}}">
<link rel="apple-touch-icon" sizes="180x180" href="{{asset('media/favicons/apple-touch-icon-180x180.png')}}">
<!-- END Icons -->

<!-- Stylesheets -->
<!-- Dashmix framework -->
@vite(['resources/sass/main.scss', 'resources/js/dashmix/app.js'])

<!-- You can include a specific file from css/themes/ folder to alter the default color theme of the template. eg: -->
<!-- <link rel="stylesheet" id="css-theme" href="css/themes/xwork.min.css"> -->
<!-- END Stylesheets -->
@yield('style')