<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>@yield('title')</title>
		{{HTML::style('css/bootstrap-theme.min.css')}}
		{{HTML::style('css/style.css')}}
		{{HTML::style('css/bootstrap.min.css')}}
		{{HTML::script('js/bootstrap.min.js')}}
        {{HTML::script('js/jquery-1.11.1.min.js')}}
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">   
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div id="header">
        	Header
        </div>	
		@yield('content')

        
    </body>
</html>
