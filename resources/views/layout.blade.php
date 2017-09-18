<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
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

                            
                            @if( auth()->check())
                           <li> <a href="/cursos">cursos</a></li>
                           @if(auth()->user()->hasRoles(['admin','estudiante']))
                           <li><a href="/usuarios">usuarios</a></li> 
                           @endif
                            @endif
                            
                           
                    
                </ul>
                
                <ul class="nav navbar-nav navbar-right">
                     <li>
                            @if(auth()->guest())
                            <a href="/login">login</a>
                            @else
                            
                             <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ auth()->user()->name }}<b class="caret"></b></a>
                                     <ul class="dropdown-menu">
                            <li><a href="/logout">Cerrar session</a></li>
                             
                        </ul>
                    </li>
                            @endif
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
<script src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script >
$(document).ready(function(){
    $('#myTable').DataTable();
});
</script>
</body>
</html>