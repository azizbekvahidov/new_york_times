<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <script src="https://kit.fontawesome.com/c362ea9f56.js"></script>
    <link href="{{ asset("css/style.css") }}" rel="stylesheet">
    <title>
        The New York Times - Breaking News, US News, World News and Videos
    </title>
    <link rel="shortcut icon"
          href="https://nytimes.com/vi-assets/static-assets/favicon-dark-c0de2ee21c5d303cad570e8565f03f1d.ico"
          type="image/x-icon">
</head>
<body>
<div class="container">
    <header>
        <section class="top">
            <div class="sections">
                <div class="burger">
                    <button>
                        <svg class="css-1fe7a5q" viewBox="0 0 16 16">
                            <rect x="1" y="3" fill="#333" width="14" height="2" data-darkreader-inline-fill=""
                                  style="--darkreader-inline-fill:#c8c3bc;"></rect>
                            <rect x="1" y="7" fill="#333" width="14" height="2" data-darkreader-inline-fill=""
                                  style="--darkreader-inline-fill:#c8c3bc;"></rect>
                            <rect x="1" y="11" fill="#333" width="14" height="2" data-darkreader-inline-fill=""
                                  style="--darkreader-inline-fill:#c8c3bc;"></rect>
                        </svg>
                    </button>
                </div>
                <div class="search">
                    <button>
                        <svg class="css-1fe7a5q" viewBox="0 0 16 16">
                            <path fill="#333"
                                  d="M11.3,9.2C11.7,8.4,12,7.5,12,6.5C12,3.5,9.5,1,6.5,1S1,3.5,1,6.5S3.5,12,6.5,12c1,0,1.9-0.3,2.7-0.7l3.3,3.3c0.3,0.3,0.7,0.4,1.1,0.4s0.8-0.1,1.1-0.4c0.6-0.6,0.6-1.5,0-2.1L11.3,9.2zM6.5,10.3c-2.1,0-3.8-1.7-3.8-3.8c0-2.1,1.7-3.8,3.8-3.8c2.1,0,3.8,1.7,3.8,3.8C10.3,8.6,8.6,10.3,6.5,10.3z"
                                  data-darkreader-inline-fill="" style="--darkreader-inline-fill:#c8c3bc;"></path>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="lang">
                <ul>
                    <li><a href="#"><b>U.S.</b></a></li>
                    <li><a href="#">INTERNATIONAL</a></li>
                    <li><a href="#">CANADA</a></li>
                    <li><a href="#">Español</a></li>
                    <li><a href="#">中文</a></li>
                </ul>
            </div>
            <div class="auth">
                <a href="#" class="subscribe"><span>Subscribe for $0.25/week</span></a>
                <a href="#" class="login"><span>Log in</span></a>
            </div>
        </section>
        <section class="middle">
            <a href="{{ route("home") }}" class="logo">
                <svg viewBox="0 0 184 25" fill="#000" data-darkreader-inline-fill=""
                     style="--darkreader-inline-fill:#000000;">
                    <path
                        d="M13.8 2.9c0-2-1.9-2.5-3.4-2.5v.3c.9 0 1.6.3 1.6 1 0 .4-.3 1-1.2 1-.7 0-2.2-.4-3.3-.8C6.2 1.4 5 1 4 1 2 1 .6 2.5.6 4.2c0 1.5 1.1 2 1.5 2.2l.1-.2c-.2-.2-.5-.4-.5-1 0-.4.4-1.1 1.4-1.1.9 0 2.1.4 3.7.9 1.4.4 2.9.7 3.7.8v3.1L9 10.2v.1l1.5 1.3v4.3c-.8.5-1.7.6-2.5.6-1.5 0-2.8-.4-3.9-1.6l4.1-2V6l-5 2.2C3.6 6.9 4.7 6 5.8 5.4l-.1-.3c-3 .8-5.7 3.6-5.7 7 0 4 3.3 7 7 7 4 0 6.6-3.2 6.6-6.5h-.2c-.6 1.3-1.5 2.5-2.6 3.1v-4.1l1.6-1.3v-.1l-1.6-1.3V5.8c1.5 0 3-1 3-2.9zm-8.7 11l-1.2.6c-.7-.9-1.1-2.1-1.1-3.8 0-.7 0-1.5.2-2.1l2.1-.9v6.2zm10.6 2.3l-1.3 1 .2.2.6-.5 2.2 2 3-2-.1-.2-.8.5-1-1V9.4l.8-.6 1.7 1.4v6.1c0 3.8-.8 4.4-2.5 5v.3c2.8.1 5.4-.8 5.4-5.7V9.3l.9-.7-.2-.2-.8.6-2.5-2.1L18.5 9V.8h-.2l-3.5 2.4v.2c.4.2 1 .4 1 1.5l-.1 11.3zM34 15.1L31.5 17 29 15v-1.2l4.7-3.2v-.1l-2.4-3.6-5.2 2.8v6.6l-1 .8.2.2.9-.7 3.4 2.5 4.5-3.6-.1-.4zm-5-1.7V8.5l.2-.1 2.2 3.5-2.4 1.5zM53.1 2c0-.3-.1-.6-.2-.9h-.2c-.3.8-.7 1.2-1.7 1.2-.9 0-1.5-.5-1.9-.9l-2.9 3.3.2.2 1-.9c.6.5 1.1.9 2.5 1v8.3L44 3.2c-.5-.8-1.2-1.9-2.6-1.9-1.6 0-3 1.4-2.8 3.6h.3c.1-.6.4-1.3 1.1-1.3.5 0 1 .5 1.3 1v3.3c-1.8 0-3 .8-3 2.3 0 .8.4 2 1.6 2.3v-.2c-.2-.2-.3-.4-.3-.7 0-.5.4-.9 1.1-.9h.5v4.2c-2.1 0-3.8 1.2-3.8 3.2 0 1.9 1.6 2.8 3.4 2.7v-.2c-1.1-.1-1.6-.6-1.6-1.3 0-.9.6-1.3 1.4-1.3.8 0 1.5.5 2 1.1l2.9-3.2-.2-.2-.7.8c-1.1-1-1.7-1.3-3-1.5V5l8 14h.6V5c1.5-.1 2.9-1.3 2.9-3zm7.3 13.1L57.9 17l-2.5-2v-1.2l4.7-3.2v-.1l-2.4-3.6-5.2 2.8v6.6l-1 .8.2.2.9-.7 3.4 2.5 4.5-3.6-.1-.4zm-5-1.7V8.5l.2-.1 2.2 3.5-2.4 1.5zM76.7 8l-.7.5-1.9-1.6-2.2 2 .9.9v7.5l-2.4-1.5V9.6l.8-.5-2.3-2.2-2.2 2 .9.9V17l-.3.2-2.1-1.5v-6c0-1.4-.7-1.8-1.5-2.3-.7-.5-1.1-.8-1.1-1.5 0-.6.6-.9.9-1.1v-.2c-.8 0-2.9.8-2.9 2.7 0 1 .5 1.4 1 1.9s1 .9 1 1.8v5.8l-1.1.8.2.2 1-.8 2.3 2 2.5-1.7 2.8 1.7 5.3-3.1V9.2l1.3-1-.2-.2zm18.6-5.5l-1 .9-2.2-2-3.3 2.4V1.6h-.3l.1 16.2c-.3 0-1.2-.2-1.9-.4l-.2-13.5c0-1-.7-2.4-2.5-2.4s-3 1.4-3 2.8h.3c.1-.6.4-1.1 1-1.1s1.1.4 1.1 1.7v3.9c-1.8.1-2.9 1.1-2.9 2.4 0 .8.4 2 1.6 2V13c-.4-.2-.5-.5-.5-.7 0-.6.5-.8 1.3-.8h.4v6.2c-1.5.5-2.1 1.6-2.1 2.8 0 1.7 1.3 2.9 3.3 2.9 1.4 0 2.6-.2 3.8-.5 1-.2 2.3-.5 2.9-.5.8 0 1.1.4 1.1.9 0 .7-.3 1-.7 1.1v.2c1.6-.3 2.6-1.3 2.6-2.8s-1.5-2.4-3.1-2.4c-.8 0-2.5.3-3.7.5-1.4.3-2.8.5-3.2.5-.7 0-1.5-.3-1.5-1.3 0-.8.7-1.5 2.4-1.5.9 0 2 .1 3.1.4 1.2.3 2.3.6 3.3.6 1.5 0 2.8-.5 2.8-2.6V3.7l1.2-1-.2-.2zm-4.1 6.1c-.3.3-.7.6-1.2.6s-1-.3-1.2-.6V4.2l1-.7 1.4 1.3v3.8zm0 3c-.2-.2-.7-.5-1.2-.5s-1 .3-1.2.5V9c.2.2.7.5 1.2.5s1-.3 1.2-.5v2.6zm0 4.7c0 .8-.5 1.6-1.6 1.6h-.8V12c.2-.2.7-.5 1.2-.5s.9.3 1.2.5v4.3zm13.7-7.1l-3.2-2.3-4.9 2.8v6.5l-1 .8.1.2.8-.6 3.2 2.4 5-3V9.2zm-5.4 6.3V8.3l2.5 1.8v7.1l-2.5-1.7zm14.9-8.4h-.2c-.3.2-.6.4-.9.4-.4 0-.9-.2-1.1-.5h-.2l-1.7 1.9-1.7-1.9-3 2 .1.2.8-.5 1 1.1v6.3l-1.3 1 .2.2.6-.5 2.4 2 3.1-2.1-.1-.2-.9.5-1.2-1V9c.5.5 1.1 1 1.8 1 1.4.1 2.2-1.3 2.3-2.9zm12 9.6L123 19l-4.6-7 3.3-5.1h.2c.4.4 1 .8 1.7.8s1.2-.4 1.5-.8h.2c-.1 2-1.5 3.2-2.5 3.2s-1.5-.5-2.1-.8l-.3.5 5 7.4 1-.6v.1zm-11-.5l-1.3 1 .2.2.6-.5 2.2 2 3-2-.2-.2-.8.5-1-1V.8h-.1l-3.6 2.4v.2c.4.2 1 .3 1 1.5v11.3zM143 2.9c0-2-1.9-2.5-3.4-2.5v.3c.9 0 1.6.3 1.6 1 0 .4-.3 1-1.2 1-.7 0-2.2-.4-3.3-.8-1.3-.4-2.5-.8-3.5-.8-2 0-3.4 1.5-3.4 3.2 0 1.5 1.1 2 1.5 2.2l.1-.2c-.3-.2-.6-.4-.6-1 0-.4.4-1.1 1.4-1.1.9 0 2.1.4 3.7.9 1.4.4 2.9.7 3.7.8V9l-1.5 1.3v.1l1.5 1.3V16c-.8.5-1.7.6-2.5.6-1.5 0-2.8-.4-3.9-1.6l4.1-2V6l-5 2.2c.5-1.3 1.6-2.2 2.6-2.9l-.1-.2c-3 .8-5.7 3.5-5.7 6.9 0 4 3.3 7 7 7 4 0 6.6-3.2 6.6-6.5h-.2c-.6 1.3-1.5 2.5-2.6 3.1v-4.1l1.6-1.3v-.1L140 8.8v-3c1.5 0 3-1 3-2.9zm-8.7 11l-1.2.6c-.7-.9-1.1-2.1-1.1-3.8 0-.7.1-1.5.3-2.1l2.1-.9-.1 6.2zm12.2-12h-.1l-2 1.7v.1l1.7 1.9h.2l2-1.7v-.1l-1.8-1.9zm3 14.8l-.8.5-1-1V9.3l1-.7-.2-.2-.7.6-1.8-2.1-2.9 2 .2.3.7-.5.9 1.1v6.5l-1.3 1 .1.2.7-.5 2.2 2 3-2-.1-.3zm16.7-.1l-.7.5-1.1-1V9.3l1-.8-.2-.2-.8.7-2.3-2.1-3 2.1-2.3-2.1L154 9l-1.8-2.1-2.9 2 .1.3.7-.5 1 1.1v6.5l-.8.8 2.3 1.9 2.2-2-.9-.9V9.3l.9-.6 1.5 1.4v6l-.8.8 2.3 1.9 2.2-2-.9-.9V9.3l.8-.5 1.6 1.4v6l-.7.7 2.3 2.1 3.1-2.1v-.3zm8.7-1.5l-2.5 1.9-2.5-2v-1.2l4.7-3.2v-.1l-2.4-3.6-5.2 2.8v6.8l3.5 2.5 4.5-3.6-.1-.3zm-5-1.7V8.5l.2-.1 2.2 3.5-2.4 1.5zm14.1-.9l-1.9-1.5c1.3-1.1 1.8-2.6 1.8-3.6v-.6h-.2c-.2.5-.6 1-1.4 1-.8 0-1.3-.4-1.8-1L176 9.3v3.6l1.7 1.3c-1.7 1.5-2 2.5-2 3.3 0 1 .5 1.7 1.3 2l.1-.2c-.2-.2-.4-.3-.4-.8 0-.3.4-.8 1.2-.8 1 0 1.6.7 1.9 1l4.3-2.6v-3.6h-.1zm-1.1-3c-.7 1.2-2.2 2.4-3.1 3l-1.1-.9V8.1c.4 1 1.5 1.8 2.6 1.8.7 0 1.1-.1 1.6-.4zm-1.7 8c-.5-1.1-1.7-1.9-2.9-1.9-.3 0-1.1 0-1.9.5.5-.8 1.8-2.2 3.5-3.2l1.2 1 .1 3.6z">
                    </path>
                </svg>
            </a>
        </section>
        <section class="bottom">
            <ul>
                <li><a href="#">World</a></li>
                <li><a href="#">U.S.</a></li>
                <li><a href="#">Politics</a></li>
                <li><a href="#">N.Y.</a></li>
                <li><a href="#">Business</a></li>
                <li><a href="#">Opinion</a></li>
                <li><a href="#">Tech</a></li>
                <li><a href="#">Science</a></li>
                <li><a href="#">Health</a></li>
                <li><a href="#">Sports</a></li>
                <li><a href="#">Arts</a></li>
                <li><a href="#">Books</a></li>
                <li><a href="#">Style</a></li>
                <li><a href="#">Food</a></li>
                <li><a href="#">Travel</a></li>
                <li><a href="#">Magazine</a></li>
                <li><a href="#">T Magazine</a></li>
                <li><a href="#">Real Estate</a></li>
                <li><a href="#">Video</a></li>
            </ul>
        </section>
    </header>
    <div class="container-fluid">
        @yield("content")
    </div>

    <footer class="primary-footer">
        <h1 class="logo">
            The New York Times<span id="goToHome">Go to homepage >></span>
        </h1>
        <div class="listings">
            <ul>
                <li class="has-sub">
                    News
                    <ul>
                        <li>Home Page</li>
                        <li>World</li>
                        <li>U.S.</li>
                        <li>Politics</li>
                        <li>Election 2020</li>
                        <li>New York</li>
                        <li>Business</li>
                        <li>Tech</li>
                        <li>Science</li>
                        <li>Sports</li>
                        <li>Obituaries</li>
                        <li>Today's Paper</li>
                        <li>Corrections</li>
                    </ul>
                </li>
            </ul>
            <ul>
                <li class="has-sub">
                    Opinion
                    <ul>
                        <li>Today's Opinion</li>
                        <li>Op-Ed Columnists</li>
                        <li>Editorials</li>
                        <li>Op-Ed Contiributors</li>
                        <li>Letters</li>
                        <li>Sunday Review</li>
                        <li>Video: Opinion</li>
                    </ul>
                </li>
            </ul>
            <ul>
                <li class="has-sub">
                    Arts
                    <ul>
                        <li>Today's Arts</li>
                        <li>Art & Design</li>
                        <li>Books</li>
                        <li>Dance</li>
                        <li>Movies</li>
                        <li>Music</li>
                        <li>Pop Culture</li>
                        <li>Television</li>
                        <li>Theater</li>
                        <li>Video Arts</li>
                    </ul>
                </li>
            </ul>
            <ul>
                <li class="has-sub">
                    Living
                    <ul>
                        <li>Automobiles</li>
                        <li>Cooking</li>
                        <li>Crossword</li>
                        <li>Education</li>
                        <li>Food</li>
                        <li>Health</li>
                        <li>Jobs</li>
                        <li>Magazine</li>
                        <li>Parenting</li>
                        <li>Real Estate</li>
                        <li>Style</li>
                        <li>T Magazine</li>
                        <li>Travel</li>
                        <li>Love</li>
                    </ul>
                </li>
            </ul>
            <ul>
                <li class="has-sub">
                    Listings & More
                    <ul>
                        <li>Reader Center</li>
                        <li>Wirecutter</li>
                        <li>Live Events</li>
                        <li>The Learning Network</li>
                        <li>Tools & Services</li>
                        <li>N.Y.C. Events Guide</li>
                        <li>Multimedia</li>
                        <li>Photography</li>
                        <li>Video</li>
                        <li>Newsletters</li>
                        <li>NYT Store</li>
                        <li>Times Journeys</li>
                        <li>Manage My Account</li>
                    </ul>
                </li>
            </ul>
            <ul class="subscribe">
                <li class="has-sub">
                    Subscribe
                    <ul>
                        <li>
                            <svg class="css-r5ic95" viewBox="0 0 14 13" fill="#000">
                                <path
                                    d="M13.1,11.7H3.5V1.2h9.6V11.7zM13.1,0.4H3.5C3,0.4,2.6,0.8,2.6,1.2v2.2H0.9C0.4,3.4,0,3.8,0,4.3v5.2v1.5c0,0.8,0.8,1.5,1.8,1.5h1.7h0h7.4h2.2c0.5,0,0.9-0.4,0.9-0.9V1.2C14,0.8,13.6,0.4,13.1,0.4">
                                </path>
                                <polygon points="10.9,3 5.2,3 5.2,3.9 11.4,3.9 11.4,3"></polygon>
                                <rect x="5.2" y="4.7" width="6.1" height="0.9"></rect>
                                <rect x="5.2" y="6.5" width="6.1" height="0.9"></rect>
                            </svg>
                            Home Delivery
                        </li>
                        <li>
                            <svg class="css-r5ic95" viewBox="0 0 10 13">
                                <path fill="#000"
                                      d="M9.9,8c-0.4,1.1-1.2,1.9-2.3,2.4V8l1.3-1.2L7.6,5.7V4c1.2-0.1,2-1,2-2c0-1.4-1.3-1.9-2.1-1.9c-0.2,0-0.3,0-0.6,0.1v0.1c0.1,0,0.2,0,0.3,0c0.5,0,0.9,0.2,0.9,0.7c0,0.4-0.3,0.7-0.8,0.7C6,1.7,4.5,0.6,2.8,0.6c-1.5,0-2.5,1.1-2.5,2.2C0.3,4,1,4.3,1.6,4.6l0-0.1C1.4,4.4,1.3,4.1,1.3,3.8c0-0.5,0.5-0.9,1-0.9C3.7,2.9,6,4,7.4,4h0.1v1.7L6.2,6.8L7.5,8v2.4c-0.5,0.2-1.1,0.3-1.7,0.3c-2.2,0-3.6-1.3-3.6-3.5c0-0.5,0.1-1,0.2-1.5l1.1-0.5V10l2.2-1v-5L2.5,5.5c0.3-1,1-1.7,1.8-2l0,0C2.2,3.9,0.1,5.6,0.1,8c0,2.9,2.4,4.8,5.2,4.8C8.2,12.9,9.9,10.9,9.9,8L9.9,8z">
                                </path>
                            </svg>
                            Digital Subscriptions
                        </li>
                        <li>
                            <svg class="css-r5ic95" viewBox="0 0 13 13" fill="#000">
                                <polygon points="0,-93.6 0,-86.9 6.6,-93.6"></polygon>
                                <polygon points="0.9,-86 7.5,-86 7.5,-92.6"></polygon>
                                <polygon points="0,-98 0,-94.8 8.8,-94.8 8.8,-86 12,-86 12,-98"></polygon>
                                <path
                                    d="M11.9-40c-0.4,1.1-1.2,1.9-2.3,2.4V-40l1.3-1.2l-1.3-1.2V-44c1.2-0.1,2-1,2-2c0-1.4-1.3-1.9-2.1-1.9c-0.2,0-0.3,0-0.6,0.1v0.1c0.1,0,0.2,0,0.3,0c0.5,0,0.9,0.2,0.9,0.7c0,0.4-0.3,0.7-0.8,0.7c-1.3,0-2.8-1.1-4.5-1.1c-1.5,0-2.5,1.1-2.5,2.2c0,1.1,0.6,1.5,1.3,1.7l0-0.1c-0.2-0.1-0.4-0.4-0.4-0.7c0-0.5,0.5-0.9,1-0.9C5.7-45.1,8-44,9.4-44h0.1v1.7l-1.3,1.1L9.5-40v2.4c-0.5,0.2-1.1,0.3-1.7,0.3c-2.2,0-3.6-1.3-3.6-3.5c0-0.5,0.1-1,0.2-1.5l1.1-0.5v4.9l2.2-1v-5l-3.3,1.5c0.3-1,1-1.7,1.8-2l0,0c-2.2,0.5-4.3,2.1-4.3,4.6c0,2.9,2.4,4.8,5.2,4.8C10.2-35.1,11.9-37.1,11.9-40L11.9-40z">
                                </path>
                                <path
                                    d="M12.2-23.7c-0.2,0-0.4,0.2-0.4,0.4v0.4L0.4-19.1v2.3l3,1l-0.2,0.6c-0.3,0.8,0.1,1.8,0.9,2.1l1.7,0.7c0.2,0.1,0.4,0.1,0.6,0.1c0.6,0,1.3-0.4,1.5-1l0.4-0.9l3.5,1.2v0.4c0,0.2,0.2,0.4,0.4,0.4c0.2,0,0.4-0.2,0.4-0.4v-10.7C12.6-23.5,12.4-23.7,12.2-23.7M7.1-13.6c-0.2,0.4-0.6,0.6-1,0.4l-1.7-0.7c-0.4-0.2-0.6-0.6-0.4-1l0.3-0.7l3.3,1.1L7.1-13.6z">
                                </path>
                                <path
                                    d="M13.1-60.3H3.5v-10.5h9.6V-60.3zM13.1-71.6H3.5c-0.5,0-0.9,0.4-0.9,0.9v2.2H0.9c-0.5,0-0.9,0.4-0.9,0.9v5.2v1.5c0,0.8,0.8,1.5,1.8,1.5h1.7h0h7.4h2.2c0.5,0,0.9-0.4,0.9-0.9v-10.5C14-71.2,13.6-71.6,13.1-71.6">
                                </path>
                                <polygon points="10.9,-69 5.2,-69 5.2,-68.1 11.4,-68.1 11.4,-69"></polygon>
                                <rect x="5.2" y="-67.3" width="6.1" height="0.9"></rect>
                                <rect x="5.2" y="-65.5" width="6.1" height="0.9"></rect>
                                <path
                                    d="M12,6.5H6.5V12H1V6.5h5.5V1H12V6.5zM12,0H1C0.4,0,0,0.5,0,1v11c0,0.6,0.4,1,1,1h11c0.5,0,1-0.4,1-1V1C13,0.5,12.5,0,12,0">
                                </path>
                            </svg>
                            Crossword
                        </li>
                        <li>
                            <svg class="css-r5ic95" viewBox="0 0 13 13" fill="#000">
                                <path
                                    d="M12,2.9L9.6,5.2c-0.1,0.1-0.3,0.1-0.4,0C9.1,5.2,9.1,5,9.3,4.9l2.4-2.4c-0.2-0.2-0.3-0.3-0.5-0.5L8.7,4.3c-0.1,0.1-0.3,0.1-0.4,0C8.2,4.3,8.2,4.1,8.4,4l2.4-2.4c-0.3-0.3-0.5-0.5-0.5-0.5L7.6,3.4C7.1,4,6.8,5.1,7.1,5.8c-1.4,1-4.6,3.5-5.1,4c-0.8,0.8-0.4,1.8-0.3,1.9c0,0,0,0,0,0c0,0,0,0,0,0c0.1,0.1,1.1,0.5,1.9-0.3c0.4-0.4,2.9-3.6,3.9-5C8.4,6.9,9.6,6.6,10.2,6l2.3-2.6C12.5,3.4,12.3,3.2,12,2.9z">
                                </path>
                                <path
                                    d="M0.8,1.9l0.3-0.3c0.9-0.9,3.2,1.1,3.8,1.7s0.9,1.8,0.4,2.6c1.4,1.1,4.6,3.5,5,3.9c0.8,0.8,0.4,1.8,0.3,1.9c0,0,0,0,0,0c0,0,0,0,0,0c-0.1,0.1-1.1,0.5-1.9-0.3c-0.4-0.4-2.9-3.7-4-5.1C3.9,6.7,2.9,6.4,2.3,5.8S-0.2,2.9,0.8,1.9z">
                                </path>
                            </svg>
                            Cooking
                        </li>
                        <li>Email Newsletters</li>
                        <li>Corporate Subscriptions</li>
                        <li>Education Rate</li>
                        <li>Mobile Applications</li>
                        <li>Replica Edition</li>
                        <li>Español</li>
                        <li>中文网</li>
                    </ul>
                </li>
            </ul>
        </div>
    </footer>

    <footer class="secondary-footer">
        <ul>
            <li>© The New York Time Company</li>
            <li>Contact Us</li>
            <li>Work with us</li>
            <li>Advertise</li>
            <li>T Brand Studio</li>
            <li>Your Ad Choices</li>
            <li>Privacy</li>
            <li>Terms of Service</li>
            <li>Terms of Sale</li>
            <li>Site Map</li>
            <li>Help</li>
            <li>Subscriptions</li>
        </ul>
    </footer>
</div>
@yield('script')

</body>
</html>
