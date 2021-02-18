<!DOCTYPE html>
<html lang="fr">
    <head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Mon joli site</title>
		{!! Html::style('https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css') !!}
		{!! Html::style('https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css') !!}
		<!--[if lt IE 9]>
			{{ Html::style('https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js') }}
			{{ Html::style('https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js') }}
		<![endif]-->
		<style> 
       textarea { 
         resize: none; 
       } 
      .navbar{
         height:60px;
      }
      .navbar-header{
        margin-top:5px;
        font-size:25px;
        color:white;
      }
      .navbar-header a{
        color:white;
        font-size:25px;
      }
      .nav a{
        color:white;
        float:left;
      }
      .nav li a:hover{
        background:transparent;
      }
      .nav{
        margin-top:5px;
        font-size:20px;
      }
      img{
        width:60px;
      }
    </style>
	</head>

<body>
    <nav class="navbar navbar-expand-sm bg-primary">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="">Gestionnaire de tâche</a>
      </div>
    <ul class="nav navbar-nav">
      <li class=""><a href="/">Accueil</a></li>
      <li><a href="apropos">À propos</a></li>
      <li><a href="contact"> Contact </a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="home"><span class="glyphicon glyphicon-user"></span> Connexion</a></li>
      <li><a href="/register"><span class="glyphicon glyphicon-log-in"></span> Inscription</a></li>
    </ul>
  </div>
</nav>
  
    </body>

</html>