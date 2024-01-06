<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My website - @yield('title', 'website')</title>
</head>
<body>
    <h1>Day 15 Assigment</h1>
    <nav>
        <a href="">HOME</a>
        <a href="/about">CONTACT</a>
        <a href="/post">ABOUT US</a>
        <a href="/post">SERVICES </a>
        <a href="/post">Post</a>
    </nav>
<article>
       
    @hasSection('content')
    @yield('content')

    @else

    <h2>No content found</h2>

    @endif
</article>


    <footer>
        this is the footer
    </footer>
</body>
</html>
