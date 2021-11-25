<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{env('APP_NAME')}}</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <nav>
        <div class="nav-container">
            <div class="logo-img">
                <a href="/">
                    <img src="./assets/logo.png" alt="logo">
                </a>
            </div>

            <button id="hamburger" class="hamburger">
                <i class="fas fa-bars"></i>
            </button>

            <div class="navlist" id="nav-ul">
                <ul>
                    <li>
                        <a href="/">
                            Website
                        </a>
                    </li>

                    <li>
                        <a href="/" class="current">
                            Blog
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <i class="fab fa fa-twitter"></i>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <i class="fab fa fa-linkedin-in"></i>
                        </a>
                    </li>

                    <a href="/" class="nav-btn">
                        Work with us
                    </a>
                </ul>
            </div>
        </div>
    </nav>


    @yield('content')

    <footer>
        <div class="footer-container">
            <div class="logo-footer">
                <img src="./assets/logo.png" alt="">
            </div>

            <ul class="footer-social">
                <li>
                    <a href="#">
                        Linkedin
                    </a>
                </li>

                <li>
                    <a href="#" class="current">
                        Twitter
                    </a>
                </li>

                <li>
                    <a href="#">
                        Instagram
                    </a>
                </li>

                <li>
                    <a href="{{route('contact')}}">
                        Contact Us
                    </a>
                </li>
            </ul>
        </div>
    </footer>

    <script src="./script.js">
    </script>

</body>

</html>