<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href="{{asset('css/homeStyle.css')}}" rel="stylesheet">
    <title>Jacob's Portfolio</title>
</head>

<body>
    <header>
        <div class="navbar">
            <a href="{{url('/')}}">Home</a>
            <a href="{{asset('/reflections')}}">Reflections</a>
            <a href="{{asset('/agile')}}">Agile Principles</a>
            <div class="dropdown">
                <button class="dropbtn">Links</button>
                <div class="dropdown-content">
                    <a href="{{url('http://mariadb.ict.op.ac.nz/~nyholw1/project-python/public/')}}">Project</a>
                    <a href="{{url('https://github.com/otago-polytechnic-bit-courses/in602-project-team-python')}}">Github</a>
                </div>
            </div>
        </div>
    </header>
    @yield('nav')

    <footer>
        <div class="footerbar">
            <a href="{{url('/')}}">Home</a>
            <a href="{{asset('/reflections')}}">Reflections</a>
            <a href="{{asset('/agile')}}">Agile Principles</a>
        </div>
    </footer>
    @yield('footer')
</body>
</html>