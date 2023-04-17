<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>

    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Project Worlds || TEST YOUR SKILL </title>
    <link  rel="stylesheet" href="{{asset('style/css/bootstrap.min.css')}}"/>
    <link  rel="stylesheet" href="{{asset('style/css/bootstrap-theme.min.css')}}"/>    
    <link rel="stylesheet" href="{{asset('style/css/main.css')}}">
    <link  rel="stylesheet" href="{{asset('style/css/font.css')}}">
    <script src="{{asset('js/jquery.js')}}" type="text/javascript"></script>
    <script src="{{asset('style/js/bootstrap.min.js')}}"  type="text/javascript"></script>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>

  </head>

  <body>
    <div class="header">
      <div class="row">
        <div class="col-lg-6">
          <span class="logo">Test Your Skill</span>
        </div>
        <div class="col-md-4 col-md-offset-2">
          <span class="pull-right top title1" ><span class="log1"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;&nbsp;&nbsp;&nbsp;Hello,</span> <a href="" class="log log1">HÃ©ritier</a>&nbsp;|&nbsp;<a href="" class="log"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span>&nbsp;Signout</button></a></span>
        </div>
      </div>
    </div>

    <div class="bg">
   {{-- navbar --}}
        @include('user_layout.usernavbar')
     {{-- end navbar --}}
      {{-- start content --}}
        @yield('content')
      {{-- end content --}}

        {{-- start content --}}
            @include('user_layout.footeruser')
        {{-- end content --}}