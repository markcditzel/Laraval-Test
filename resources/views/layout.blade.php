<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>@yield('title', 'DEFAULT')</title>

</head>
<body>
<h1>VinylAnal</h1>


<ul>
    <li><a href="/">Home</a></li>
    <li><a href="/artists">View Artists</a></li>
    <li><a href="/songs">View Songs</a></li>
    <li><a href="/labels">View Labels</a></li>

</ul>

@yield('content')

</body>
</html>
