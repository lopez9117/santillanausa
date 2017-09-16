<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
 
    <header>
        <nav>
            <a href="/">Home</a>
            <a href="/cursos">curos</a>

            @if( auth()->check())
            <a href="/logout">Cerrar sesion de: {{ auth()->user()->name }}</a>
            @endif

            @if(auth()->guest())
            <a href="/login">login</a>
            @endif
        </nav>
    </header>

    <section>
        
    <span>Aqui va el contenido de home</span>

    </section>
    

   

    <footer>Copyrith 2017</footer>
</body>
</html>
