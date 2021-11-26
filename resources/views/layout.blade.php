<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{env('APP_NAME')}}</title>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('style.css')}}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="{{URL::asset('favicon.ico')}}" type="image/x-icon">
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