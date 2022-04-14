<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Ardu-Store</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/bootstrap.min.css">

    <!-- Styles -->
    <style>

        body {
            font-family: 'Nunito', sans-serif;
            color: #333e48;
            margin: 0;
            width: 100%;
        }
        html,
        body {
            height: 100%;
        }

        .navbar {
            background: white;
            margin: 0;
            width: 100%;
            box-shadow: 0 8px 18px 5px rgb(0 0 0 / 7%);
        }

        .nav {
            margin: auto;
            padding: 0.5%;
            align-items: center;
            display: flex;
        }

        .logo-container {
            width: 27%;
            float: left;
            text-align: center
        }

        .brand-logo {
            width: 40%;
        }

        .nav-items {
            display: flex;
            align-items: center;
        }

        .search {
            width: 50%;
            float: left;
            text-align: center;

        }

        .search-box {
            float: right;
            width: 70%;
            padding: 2%;
            border-top-left-radius: 10px;
            border-bottom-left-radius: 10px;
            border: 2px solid #ea1b25;
            text-transform: capitalize;
            font-size: 1.1vw;
        }

        .search-btn {
            float: right;
            width: 20%;
            padding: 2%;
            cursor: pointer;
            background: #ea1b25;
            color: white;
            font-size: 1.1vw;
            text-transform: capitalize;
            border-top-right-radius: 10px;
            border-bottom-right-radius: 10px;
            border: 2px solid #ea1b25;

        }

        .search-box::placeholder {
            color: #a9a9a9;
        }

        .icons-container {
            width: 20%;
            float: left;
            padding-left: 3%;
        }

        .header-cart {
            width: 15%;
            margin-right: 7%;
        }

        .header-profile {
            width: 15%;
            margin-right: 7%;
        }

        div.container-footer.w-container {
            box-sizing: border-box;
            margin-left: auto;
            margin-right: auto;
            max-width: 940px;
            padding-bottom: 40px;
            padding-top: 70px;
        }

        div.container-footer.w-container:after {
            clear: both;
            content: " ";
            display: table;
            grid-column-end: 2;
            grid-column-start: 1;
            grid-row-end: 2;
            grid-row-start: 1;
        }

        div.container-footer.w-container:before {
            content: " ";
            display: table;
            grid-column-end: 2;
            grid-column-start: 1;
            grid-row-end: 2;
            grid-row-start: 1;
        }

        div.w-row {
            box-sizing: border-box;
            margin-left: -10px;
            margin-right: -10px;
        }

        div.w-row:after {
            clear: both;
            content: " ";
            display: table;
            grid-column-end: 2;
            grid-column-start: 1;
            grid-row-end: 2;
            grid-row-start: 1;
        }

        div.w-row:before {
            content: " ";
            display: table;
            grid-column-end: 2;
            grid-column-start: 1;
            grid-row-end: 2;
            grid-row-start: 1;
        }

        div.footer-column.w-clearfix.w-col.w-col-4 {
            box-sizing: border-box;
            float: left;
            min-height: 1px;
            padding-left: 10px;
            padding-right: 10px;
            position: relative;
            width: 33.3333%;
        }

        div.footer-column.w-clearfix.w-col.w-col-4:after {
            clear: both;
            content: " ";
            display: table;
            grid-column-end: 2;
            grid-column-start: 1;
            grid-row-end: 2;
            grid-row-start: 1;
        }

        div.footer-column.w-clearfix.w-col.w-col-4:before {
            content: " ";
            display: table;
            grid-column-end: 2;
            grid-column-start: 1;
            grid-row-end: 2;
            grid-row-start: 1;
        }

        img.failory-logo-image {
            border-width: 0;
            box-sizing: border-box;
            display: inline-block;
            float: left;
            max-width: 100%;
            vertical-align: middle;
        }

        h3.footer-failory-name {
            box-sizing: border-box;
            color: #f8f8f8;
            display: block;
            font-family: Lato, sans-serif;
            font-size: 20px;
            font-weight: 900;
            line-height: 1.1em;
            margin-bottom: 10px;
            margin-left: 10px;
            margin-top: 24px;
        }

        p.footer-description-failory {
            box-sizing: border-box;
            color: rgba(255, 255, 255, 0.8);
            display: block;
            font-family: Lato, sans-serif;
            font-size: 17px;
            font-weight: 300;
            letter-spacing: 0.5px;
            line-height: 1.5em;
            margin-bottom: 16px;
            margin-top: 15px;
        }

        br {
            box-sizing: border-box;
        }

        div.footer-column.w-col.w-col-8 {
            box-sizing: border-box;
            float: left;
            min-height: 1px;
            padding-left: 10px;
            padding-right: 10px;
            position: relative;
            width: 66.6667%;
        }

        div.w-col.w-col-8 {
            box-sizing: border-box;
            float: left;
            min-height: 1px;
            padding-left: 0;
            padding-right: 0;
            position: relative;
            width: 66.6667%;
        }

        div.w-col.w-col-7.w-col-small-6.w-col-tiny-7 {
            box-sizing: border-box;
            float: left;
            min-height: 1px;
            padding-left: 0;
            padding-right: 0;
            position: relative;
            width: 58.3333%;
        }

        h3.footer-titles {
            box-sizing: border-box;
            color: #f8f8f8;
            display: block;
            font-family: Lato, sans-serif;
            font-size: 20px;
            font-weight: 900;
            line-height: 1.1em;
            margin-bottom: 0;
            margin-left: 0;
            margin-top: 24px;
        }

        p.footer-links {
            box-sizing: border-box;
            color: rgba(255, 255, 255, 0.8);
            display: block;
            font-family: Lato, sans-serif;
            font-size: 17px;
            font-weight: 300;
            letter-spacing: 0.5px;
            line-height: 1.8em;
            margin-bottom: 16px;
            margin-top: 2px;
        }

        a {
            background-color: transparent;
            box-sizing: border-box;
            color: #ffffff;
            font-family: Lato, sans-serif;
            font-size: 17px;
            font-weight: 400;
            line-height: 1.2em;
            text-decoration: none;
        }

        a:active {
            outline: 0;
        }

        a:hover {
            outline: 0;
        }

        span.footer-link {
            box-sizing: border-box;
            color: rgba(255, 255, 255, 0.8);
            font-weight: 300;
        }

        span.footer-link:hover {
            color: #ffffff;
            font-weight: 400;
        }

        span {
            box-sizing: border-box;
        }

        strong {
            box-sizing: border-box;
            font-weight: 700;
        }

        div.w-col.w-col-5.w-col-small-6.w-col-tiny-5 {
            box-sizing: border-box;
            float: left;
            min-height: 1px;
            padding-left: 0;
            padding-right: 0;
            position: relative;
            width: 41.6667%;
        }

        div.column-center-mobile.w-col.w-col-4 {
            box-sizing: border-box;
            float: left;
            min-height: 1px;
            padding-left: 0;
            padding-right: 0;
            position: relative;
            width: 33.3333%;
        }

        a.footer-social-network-icons.w-inline-block {
            background-color: transparent;
            box-sizing: border-box;
            color: #ffffff;
            display: inline-block;
            font-family: Lato, sans-serif;
            font-size: 17px;
            font-weight: 400;
            line-height: 1.2em;
            margin-right: 8px;
            margin-top: 10px;
            max-width: 100%;
            opacity: 0.8;
            text-decoration: none;
        }

        a.footer-social-network-icons.w-inline-block:active {
            outline: 0;
        }

        a.footer-social-network-icons.w-inline-block:hover {
            opacity: 1;
            outline: 0;
        }

        img {
            border-width: 0;
            box-sizing: border-box;
            display: inline-block;
            max-width: 100%;
            vertical-align: middle;
        }

        p.footer-description {
            box-sizing: border-box;
            color: rgba(255, 255, 255, 0.8);
            display: block;
            font-family: Lato, sans-serif;
            font-size: 17px;
            font-weight: 300;
            letter-spacing: 0.5px;
            line-height: 1.5em;
            margin-bottom: 16px;
            margin-top: 15px;
        }

        strong.link-email-footer {
            box-sizing: border-box;
            font-weight: 700;
        }

        .mt-100 {
            margin-top: 100px
        }

        .card {
            border-radius: 7px !important;
            border-color: #e1e7ec
        }

        .mb-30 {
            margin-bottom: 30px !important
        }

        .card-img-tiles {
            display: block;
            border-bottom: 1px solid #e1e7ec
        }

        a {
            color: #000000;
            text-decoration: none !important
        }
        a:hover{
            color: #ea1b25;
        }

        .card-img-tiles>.inner {
            display: table;
            width: 100%
        }

        .card-img-tiles .main-img,
        .card-img-tiles .thumblist {
            display: table-cell;
            width: 65%;
            padding: 15px;
            vertical-align: middle
        }

        .card-img-tiles .main-img>img:last-child,
        .card-img-tiles .thumblist>img:last-child {
            margin-bottom: 0
        }

        .card-img-tiles .main-img>img,
        .card-img-tiles .thumblist>img {
            display: block;
            width: 100%;
            margin-bottom: 6px
        }

        .thumblist {
            width: 35%;
            border-left: 1px solid #e1e7ec !important;
            display: table-cell;
            width: 65%;
            padding: 15px;
            vertical-align: middle
        }

        .card-img-tiles .thumblist>img {
            display: block;
            width: 100%;
            margin-bottom: 6px
        }

        .btn-group-sm>.btn,
        .btn-sm {
            padding: .45rem .5rem !important;
            font-size: .875rem;
            line-height: 1.5;
            border-radius: .2rem;
            color: #000000;
            border-color: #000000;
        }
        .btn-sm:hover{
            background: #ea1b25;
            border-color: white;
        }
    </style>
    <script>
        function search(){
            var search_box = document.getElementById('search-box').value;
            window.location='/?search='+search_box;
        }
    </script>
</head>
<!-- header -->
<header>
    <nav class="navbar">
        <div class="nav">
            <div class="nav-items">
                <div class="logo-container">
                    <a class="brand-logo" href="/">
                        <img src="img/LOGO.png" class="brand-logo" alt="">
                    </a>
                </div>
                <div class="search">
                    <button class="search-btn" onclick='search()'>search</button>
                    <input type="text" id="search-box" class="search-box" placeholder="search product">
                </div>
                <div class="icons-container">
                    <a href="/cart">
                        <img class="header-profile" src="img/shopping-cart.png" alt="">
                    </a>
                    <a href="/profile">
                        <img class="header-cart" src="img/profile.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </nav>
</header>
<body>

<div>
    @yield('content')
</div>

</body>
<!-- footer -->
<footer style="background-color:#ea1b25;">
    <div class="container-footer w-container">
        <div class="w-row">
            <div class="footer-column w-clearfix w-col w-col-4">
                <h3 class="footer-failory-name">ArduStore</h3>
                <p class="footer-description-failory"><br></p>
            </div>
            <div class="footer-column w-col w-col-8">
                <div class="w-row">
                    <div class="w-col w-col-8">
                        <div class="w-row">
                            <div class="w-col w-col-7 w-col-small-6 w-col-tiny-7">
                                <h3 class="footer-titles">About</h3>
                                <p class="footer-links"><a href="" target="_blank"><span
                                            class="footer-link">Blog<br></span></a><a href=""><span class="footer-link">What's new?!<br></span></a>
                                </p>
                            </div>
                            <div class="w-col w-col-5 w-col-small-6 w-col-tiny-5">
                                <h3 class="footer-titles">Other</h3>
                                <p class="footer-links"><a href=""><span
                                            class="footer-link">Sponsor Us!<br></span></a><a href=""><span
                                            class="footer-link"></span></a><a href=""><span class="footer-link">Contribute<br></span></a><a
                                        href=""><span class="footer-link">FAQ</span></a><strong><br></strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="column-center-mobile w-col w-col-4">
                        <h3 class="footer-titles">Follow Us!</h3><a href="" target="_blank"
                                                                    class="footer-social-network-icons w-inline-block"><img
                                src="https://uploads-ssl.webflow.com/5966ea9a9217ca534caf139f/5c8dbf0a2f2b67e3b3ba079c_Twitter%20Icon.svg"
                                width="20" alt="Twitter icon"></a><a href="" target="_blank"
                                                                     class="footer-social-network-icons w-inline-block"><img
                                src="https://uploads-ssl.webflow.com/5966ea9a9217ca534caf139f/5c8dbfe70fcf5a0514c5b1da_Instagram%20Icon.svg"
                                width="20" alt="Instagram icon"></a><a href="" target="_blank"
                                                                       class="footer-social-network-icons w-inline-block"><img
                                src="https://uploads-ssl.webflow.com/5966ea9a9217ca534caf139f/5c8dbe42e1e6034fdaba46f6_Facebook%20Icon.svg"
                                width="20" alt="Facebook Icon"></a><a href="" target="_blank"
                                                                      class="footer-social-network-icons w-inline-block"><img
                                src="https://uploads-ssl.webflow.com/5966ea9a9217ca534caf139f/5c8dc0002f2b676eb4ba0869_LinkedIn%20Icon.svg"
                                width="20" alt="LinkedIn Icon"></a><a href="" target="_blank"
                                                                      class="footer-social-network-icons w-inline-block"><img
                                src="https://uploads-ssl.webflow.com/5966ea9a9217ca534caf139f/5c8dc0112f2b6739c9ba0871_Pinterest%20Icon.svg"
                                width="20" alt="Pinterest Icon" class=""></a>
                        <p class="footer-description">Email us: <a href="mailto:customer@ardustore"><strong
                                    class="link-email-footer">ArduStore</strong></a><br></p>
                    </div>
                </div>
            </div>
        </div>
</footer>
</html>
