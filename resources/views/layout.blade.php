<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <title>Home</title>
</head>
<body>
 
    <header>

    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
            </div>
    
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">

                            <li>
                            <a href="/">Home</a>
                            </li>
                            <li>
                            @if( auth()->check())
                            <a href="/cursos">cursos</a>
                           
                            @endif
                            </li>
                           
                    
                </ul>
                
                <ul class="nav navbar-nav navbar-right">
                     <li>
                            @if(auth()->guest())
                            <a href="/login">login</a>
                            @else
                            <li> <a href="/logout">Cerrar sesion de: {{ auth()->user()->name }}</a></li>
                            @endif
                            </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>
    </nav>
        
    </header>

<div class="container">
    @yield('contenido')
    
   
<br/>
    <footer>Copyrith 2017</footer>
</div>

<script src="/js/all.js" ></script>
</body>
</html>