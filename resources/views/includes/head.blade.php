   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- <meta http-equiv="refresh" content="5" /> -->

   <!-- CSRF Token -->
   <meta name="csrf-token" content="{{ csrf_token() }}">
   <title>{{ config('app.name', 'My Song') }}</title>
   
   <!-- Fonts -->
   <link rel="dns-prefetch" href="//fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

   <link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
   
   <!-- Date picker -->
   <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

   <!-- Styles -->
   <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
