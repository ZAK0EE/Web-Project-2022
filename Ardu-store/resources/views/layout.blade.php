<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Ardu-Store</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- Styles -->
    <style>

        body {
            font-family: 'Nunito', sans-serif;
            color: #333e48;
            margin: 0;
            width: 100%;
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

        .boxes {
            margin: 2%;
            height: max-content;
            display: grid;
            grid-template-columns: repeat(auto-fill, 28%);
            grid-column-gap: 6%;
            grid-row-gap: 6%;
            grid-auto-flow: dense;
        }

        .boxes > div {
            color: white;
            font-weight: bold;
            padding: 1%;
        }

        .wrapper {
            position: relative;
            perspective: 40em;
            display: grid;
            transform-style: preserve-3d;
        }

        .card {
            grid-area: 1 / 1;
            height: 200px;
            width: 98%;
            transform: translateX(10px) rotateY(25deg) rotateX(10deg);
            background: #ea1b25;
            display: flex;
            justify-content: flex-start;
            align-items: center;
            padding: 1%;
            color: #000;
            text-transform: uppercase;
            font-size: 60px;
            font-weight: 900;
            backface-visibility: hidden;
            box-shadow: 0 10px 25px 5px rgba(0, 0, 0, .1);
        }

        .card .enclosed {
            background: #000;
            line-height: 1;
            color: whitesmoke;
            padding: 0 5px;
            display: inline-block;
            /*transform: translate(-1px, 1px) scale(0.75);*/
            transform-origin: right center;
        }

        .title {
            font-size: 1.9vw;
        }

        .price {
            font-size: 1.5vw;
        }

        .desc {
            font-size: 1vw;

        }

        .card-img {
            width: 65%;
            margin: 1%;
        }

        .cart-img {
            width: 35%;
            height: 25%;
            margin: auto;

        }

        .wrapper:before {
            --bw: 9px;
            grid-area: 1 / 1;
            content: '';
            backface-visibility: hidden;
            height: 100%;
            width: 100%;
            margin-top: calc(-1 * var(--bw));
            margin-left: calc(-1 * var(--bw));
            background: transparent;
            transform: /*translateX(-60px) rotateY(-30deg) rotateX(15deg)*/ scale(1.03);
            pointer-events: none;
            border: var(--bw) solid #000;
            box-sizing: content-box;
        }

        .wrapper:hover > div,
        .wrapper:hover:before {
            transform: none;
        }

        .wrapper > div,
        .wrapper:before {
            will-change: transform;
            transition: .3s transform cubic-bezier(.25, .46, .45, 1);
        }

        html,
        body {
            height: 100%;
        }
    </style>

</head>
<!-- header -->

<body class="antialiased">

<div>
    @yield('content')
</div>

</body>
<!-- footer -->

</html>
