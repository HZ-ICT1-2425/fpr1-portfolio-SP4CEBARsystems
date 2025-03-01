<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>HZ HBO-ICT</title>

    {{-- Compiled assets --}}
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{--    {!! Html::style( asset('public/css/app.css')) !!}--}}
    <link rel="stylesheet" href="{{asset('styles/style.css')}}">
    <link rel="stylesheet" href="{{asset('styles/table.css')}}">
    {{--    <link rel="icon" type="image/x-icon" href="./assets/hz-logo.svg">--}}
</head>
<body>
    {{-- Navigation bar --}}
    <nav class="navbar is-primary  has-text-white" >
        <div class="container">
            <div class="navbar-brand">
                <a href="/" class="navbar-item">
                    <strong><i class="fas fa-graduation-cap"></i> HZ</strong>
                </a>
                <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navMenu">
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                    <span aria-hidden="true"></span>
                </a>
            </div>
            <div class="navbar-menu" id="navMenu">
                <div class="navbar-start">
                    <a href="{{ route('home') }}"
                       class="navbar-item {{ Request::route()->getName() === 'home' ? "is-active" : "" }}">
                        Home
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <header>
        <nav>
            <div class="navButtons">
                <a href="./">
                    <div class="homeButton">
                        <p>Home</p>
                    </div>
                </a>
                <a href="./blog">
                    <div class="rightNavButton">
                        <p>Blog</p>
                    </div>
                </a>
                <a href="./dashboard">
                    <div class="rightNavButton">
                        <p>Dashboard</p>
                    </div>
                </a>
                <a href="./faq">
                    <div class="rightNavButton">
                        <p>FAQ</p>
                    </div>
                </a>
                <a href="./profile">
                    <div class="rightNavButton">
                        <p>Profile</p>
                    </div>
                </a>
            </div>
        </nav>
        <img id="hzLogo" src="{{asset('assets/hz-logo.svg')}}" alt="hz logo"></img>
    </header>

    <main>
        {{ $slot }}
    </main>

    <footer>
        <aside>
            <ul>
                <li><a href="https://oer.hz.nl/a37f2fd2-8b35-44ce-800a-c5abe33735aa">HZ HBO-ICT Course and Examination
                        Regulations (CER)</a></li>
                <li><a
                        href="https://hz.nl/uploads/documents/1.4-Over-de-HZ/1.4.3.-Regelingen-en-documenten/OERS/2023-2024/Juli/TWE/IR-B-HBO-ICT-full-time-2023-2024-DEF.pdf">Last
                        year's Implementation Regulations (IR) of the HZ HBO-ICT program</a></li>
                <li><a href="https://learn.hz.nl">HZ Learn</a></li>
                <li><a href="https://hz.osiris-student.nl/">Study progress</a></li>
                <li><a href="https://portal.hz.nl/">HZ Portal</a></li>
                <li><a href="https://github.com/HZ-HBO-ICT">The GitHub environment of the study program</a></li>
            </ul>
        </aside>
    </footer>

    {{-- Footer --}}
    <footer class="footer">
        <div class="container">
            <div class="columns is-multiline">

                <div class="column has-text-centered">
                    <div>
                        <a href="/" class="link">Home</a>
                    </div>
                </div>

                <div class="column has-text-centered">
                    <div>
                        <a href="https://opensource.org/licenses/MIT" class="link">
                            <i class="fa fa-balance-scale" aria-hidden="true"></i> License: MIT
                        </a>
                    </div>
                </div>

            </div>

            <div class="content is-small has-text-centered">
                <p class="">Theme built by <a href="https://www.csrhymes.com">C.S. Rhymes</a> | adapted by <a href="https://github.com/dwaard">BugSlayer</a></p>
                <p>PROJECT FOOTER HERE</p>
            </div>
        </div>
    </footer>

</body>
</html>
