<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Pustok - @yield('title')</title>

<!-- Global stylesheets -->
<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
<link href="{{asset('admin')}}/global_assets\css\icons\icomoon\styles.css" rel="stylesheet" type="text/css">
<link href="{{asset('admin')}}/assets\css\bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="{{asset('admin')}}/assets\css\core.min.css" rel="stylesheet" type="text/css">
<link href="{{asset('admin')}}/assets\css\components.min.css" rel="stylesheet" type="text/css">
<link href="{{asset('admin')}}/assets\css\colors.min.css" rel="stylesheet" type="text/css">
@yield('theme_css')
<!-- /global stylesheets -->

<!-- Core JS files -->
<script src="{{asset('admin')}}/global_assets\js\plugins\loaders\pace.min.js"></script>
<script src="{{asset('admin')}}/global_assets\js\core\libraries\jquery.min.js"></script>
<script src="{{asset('admin')}}/global_assets\js\core\libraries\bootstrap.min.js"></script>
<script src="{{asset('admin')}}/global_assets\js\plugins\loaders\blockui.min.js"></script>
<!-- /core JS files -->

<!-- Theme JS files -->
@yield('theme_js')
<script src="{{asset('admin')}}/global_assets\js\plugins\visualization\d3\d3.min.js"></script>
<script src="{{asset('admin')}}/global_assets\js\plugins\visualization\d3\d3_tooltip.js"></script>
<script src="{{asset('admin')}}/global_assets\js\plugins\forms\styling\switchery.min.js"></script>
<script src="{{asset('admin')}}/global_assets\js\plugins\forms\selects\bootstrap_multiselect.js"></script>
<script src="{{asset('admin')}}/global_assets\js\plugins\ui\moment\moment.min.js"></script>
<script src="{{asset('admin')}}/global_assets\js\plugins\pickers\daterangepicker.js"></script>

<script src="{{asset('admin')}}/assets\js\app.js"></script>
<script src="{{asset('admin')}}/global_assets\js\demo_pages\dashboard.js"></script>
<!-- /theme JS files -->
