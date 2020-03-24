<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport" />

    <link rel="shortcut icon" href="/favicons/favicon.ico" />
    <link rel="icon" type="image/png" href="/favicons/favicon-32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="/favicons/favicon-16.png" sizes="16x16" />

    <link href="https://rsms.me/inter/inter.css" rel="stylesheet" />
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @stack('additional_css')
    <title>#madewithtwill</title>
</head>

<body>
<!-- HEADER -->    
<header class="container mx-auto py-8 px-10">
    <div class="flex justify-between items-center">
        <h3 class="header__logo logo">
            <a href="http://{!! env('APP_URL') !!}" data-behavior="backTop">
                <svg id="icon--logo" width="93" height="38" viewBox="0 0 93 38">
                    <path fill="currentColor" d="M72 1h9v37h-9zM84 1h9v37h-9z"></path>
                    <circle fill="currentColor" cx="64.5" cy="5.5" r="5.1"></circle>
                    <path fill="currentColor" d="M45.924 26.548L39.686 13H34.13l-6.237 13.158L21.898 13H12V6H3v7H0v7h3v18h9V20h3.527l9.344 18h5.994l5.946-13.694L43.049 38h5.896l9.516-18H60v18h9V13H52.21z"></path>
                </svg>
            </a>
        </h3>

        <div>
            <a href="https://twill.io" class="text-base text-twill-purple">#madewithtwill</a>
        </div>
    </div>
</header>

@yield('content')

<!-- FOOTER -->
<footer class="my-10 px-10">
    <p>
        <a class="hover:underline" href="https://twill.io">Twill</a> is an open-source CMS toolkit for Laravel, crafted by
        <a class="hover:underline" href="https://area17.com">AREA 17</a>
    </p>

    <div class="flex flex-col lg:flex-row justify-between mt-5">
        <ul class="flex flex-col md:flex-row">
            <li class="text-twill-purple"><a href="https://twill.io" class="hover:underline">twill.io</a></li>
            <li class="md:ml-10 text-twill-purple"><a href="https://github.com/area17/twill" class="hover:underline">Github</a></li>
            <li class="md:ml-10 text-twill-purple"><a href="https://spectrum.chat/twill" class="hover:underline">Chat</a></li>
            <li class="md:ml-10 text-twill-purple"><a href="https://demo.twill.io/" class="hover:underline">Demo</a></li>
            <li class="md:ml-10 text-twill-purple"><a href="https://twill.io/docs" class="hover:underline">Docs</a></li>
        </ul>

        <ul class="flex flex-col md:flex-row mt-5 lg:mt-0">
            <li class="text-twill-purple"><a href="https://twitter.com/twillcms" class="hover:underline">Twitter</a></li>
            <li class="md:ml-10 text-twill-purple"><a href="https://www.instagram.com/twillcms/" class="hover:underline">Instagram</a></li>
            <li class="md:ml-10 text-twill-purple"><a href="https://facebook.com/twillcms" class="hover:underline">Facebook</a></li>
        </ul>
    </div>
</footer>
</body>
</html>
