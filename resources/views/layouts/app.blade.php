<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title> @yield('title')</title>

    <script src="{{URL::asset('cs/all.min.css')}}"></script>
    <script src="{{URL::asset('js/jquery-3.5.1.min.js')}}"></script>
    <script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('js/bootstrap.js')}}"></script>
    <script src="{{URL::asset('js/app.js')}}"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap core CSS -->

    <link href="{{URL::asset('css/all.min.css')}}" rel="stylesheet">
 <link href="{{URL::asset('css/bootstrap.css')}}" rel="stylesheet">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('style')

</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
              
                </div>
            </div>
        </nav>

        <main class="py-4">
          <div class="container">
           
             @yield('content')
         </div>
        </main>

    </div>


    <script src="{{asset('js/app.js')}}"></script>

    <script src="{{URL::asset('js/all.min.js')}}"></script>
   <script src="{{URL::asset('js/jquery-3.5.1.min.js')}}"></script>
<script>


$(function (){
    $('#section-alert').fadeTo(2000,500).slideUp(500,function (){
        $('#section-alert').slideUp(500);
    })
})

</script>

   <!-- <script src="{{URL::asset('js/jquery-3.5.1.min.js')}}"></script>
    <script src="{{URL::asset('js/bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('js/bootstrap.js')}}"></script>
    <script src="{{asset('validation/jquery.form.js')}}"></script>
    <script src="{{asset('validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('validation/additional-methods.min.js')}}"></script>
-->

    @yield('script')
</body>
</html>
