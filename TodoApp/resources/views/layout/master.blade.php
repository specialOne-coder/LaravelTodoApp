<!DOCTYPE ​ html​ >
<html lang="fr">
    <head>
        <meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <title>​ Enginnova - gestionnaire de tache​ </title>
        {!! Html::style('https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css') !!}
		{!! Html::style('https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css') !!}
		<!--[if lt IE 9]>
			{{ Html::style('https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js') }}
			{{ Html::style('https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js') }}
		<![endif]-->
		<style> 
          .text-center{
              font-size:40px;
              margin-top:20px;
              color:white;
          }
          .text{
              font-size:12px;
              color:white;
          }

          img{
             width:60px;
          }

          body{
            background-image: url('img/fondq.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            font-family: 'Numans', sans-serif;
          }
         </style>
        <link rel="stylesheet" href="/css/app.css">
    </head>
   <body>
    <p class="text-center"><b> Gestionnaire de tâches </b></p> 
    <center>
       <img src="img/lara.png"   alt="">
    </center>
    <br>
       @include('layout.navbar')
       <div class="container">
           @yield('content')
       </div>
       @include('layout.footer')
       @yield('script')<script​ src="/js/app.js"​></script>
   </body>
</html>