<meta charset="utf-8" />
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>{{config('app.name','Laravel')}}</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Use Minified Plugins Version For Fast Page Load -->
<link rel="stylesheet" type="text/css" media="screen" href="{{asset('front/')}}/assets/styles/plugins.css" />
<link rel="stylesheet" type="text/css" media="screen" href="{{asset('front/')}}/assets/styles/main.css" />
<link rel="shortcut icon" type="assets/image/x-icon" href="{{asset('front/')}}/assets/assets/image/favicon.ico">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

@yield('css')
