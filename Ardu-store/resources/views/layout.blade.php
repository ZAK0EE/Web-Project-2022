<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Ardu-Store</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">


</head>
<!-- header -->
<header>
    <nav class="navbar">
        <div class="nav">
            <div class="nav-items">
                <div class="logo-container">
                    <a class="navbar-brand" href="{{ url('/') }}" style="color: #ea1b25;font-size: 1.75rem;">
                        {{ config('app.name', 'Ardu-store') }}
                    </a>
                </div>
                <div class="search">
                    <button class="search-btn" onclick='search()'>search</button>
                    <input type="text" id="search-box" class="search-box" placeholder="search product">
                </div>
                <div class="icons-container">
                    <a href="/cart">
                        <img class="header-profile" src="../../../../../../img/shopping-cart.png" alt="">
                    </a>
                    <a href="/login">
                        <img class="header-cart" src="../../../../../../img/profile.png" alt="">
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
                        <h3 class="footer-titles">Follow Us!</h3>
                        <a href="" target="_blank"class="footer-social-network-icons w-inline-block">
                            <img src="https://uploads-ssl.webflow.com/5966ea9a9217ca534caf139f/5c8dbf0a2f2b67e3b3ba079c_Twitter%20Icon.svg"
                                width="20" alt="Twitter icon">
                        </a>
                        <a href="" target="_blank" class="footer-social-network-icons w-inline-block">
                            <img
                                src="https://uploads-ssl.webflow.com/5966ea9a9217ca534caf139f/5c8dbfe70fcf5a0514c5b1da_Instagram%20Icon.svg"
                                width="20" alt="Instagram icon"></a><a href="" target="_blank" class="footer-social-network-icons w-inline-block">
                            <img
                                src="https://uploads-ssl.webflow.com/5966ea9a9217ca534caf139f/5c8dbe42e1e6034fdaba46f6_Facebook%20Icon.svg"
                                width="20" alt="Facebook Icon"></a><a href="" target="_blank" class="footer-social-network-icons w-inline-block">
                            <img
                                src="https://uploads-ssl.webflow.com/5966ea9a9217ca534caf139f/5c8dc0002f2b676eb4ba0869_LinkedIn%20Icon.svg"
                                width="20" alt="LinkedIn Icon"></a><a href="" target="_blank" class="footer-social-network-icons w-inline-block">
                            <img src="https://uploads-ssl.webflow.com/5966ea9a9217ca534caf139f/5c8dc0112f2b6739c9ba0871_Pinterest%20Icon.svg"
                                width="20" alt="Pinterest Icon" class=""></a>
                        <p class="footer-description">Email us: <a href="mailto:customer@ardustore"><strong
                                    class="link-email-footer">ArduStore</strong></a><br></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<script>
    function search(){
        var search_box = document.getElementById('search-box').value;
        window.location='/?search='+search_box;
    }
    document.querySelector('#search-box').addEventListener('keypress', function (e) {
        if (e.key === 'Enter') {
            search();
        }
    });
</script>
</html>
