<?php
session_set_cookie_params(0);
session_start();

if (!isset($_SESSION['is-user-logged'])) {
    header("Location: login.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/main.css">


    <!-- FONT IMPORTS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;800;900&family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">

    <title>Elle Patman | Senior UX / UI Designer</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
            $("#header").load("_header.html");
            $("#footer").load("_footer.html");

            setTimeout(
                function() {
                    $("#preloader").addClass("preloaded");
                }, 1500);

            setTimeout(
                function() {
                    $("#preloader").remove();
                }, 2500);
        });
    </script>

</head>

<body>

    <div id="preloader">
        <div class="loader_line"></div>
    </div>

    <div id="header"></div>

    <main>
        <article id="home" class="home feature">
            <div class="article-inner narrow">
                <h1>Hi, I'm Elle!</h1>
                <h2>
                    A senior User Experience and User Interface Designer
                </h2>
                <hr class="line-header">

                <p>
                    Working hybridly from Brisbane, Australia. I have a background in User Experience and User Interface
                    design, and
                    have been shaping the future of products throughout my career.
                </p>

            </div>

            <a class="scroll mouse" href="index.html#case-studies">
                <span class="wheel"></span>
            </a>
        </article>



        <article id="case-studies" class="regular regular-2">
            <div class="article-inner narrow">

                <div id="chart">

                </div>

                <h2>Case studies</h2>

                <div class="grid">
                    <div class="case-study">
                        <img src="images/hero.jpg" alt="Thumbnail of new price page design">
                        <div class="chip">OCT 2021</div>
                        <div class="wrap">
                            <h4>Care to compare</h4>
                            <p class="small">Enhancing the process of comparing benefits across insurance policies</p>
                            <a class="btn btn-alt btn-animation" href="care-to-compare.html">Read more </a>
                        </div>
                    </div>

                    <div class="case-study">
                        <img src="images/hero.jpg" alt="Thumbnail of design system menu">
                        <div class="chip">FEB 2022</div>
                        <div class="wrap">
                            <h4>The ultimate design system</h4>
                            <p class="small">Creating a reusable and extensible design system to facilitate rapid
                                project
                                delivery</p>
                            <a class="btn btn-alt btn-animation" href="the-ultimate-design-system.html">Read more <span class="arrow-right"></span></a>
                        </div>
                    </div>

                    <div class="case-study">
                        <img src="images/hero.jpg" alt="Thumbnail of sign in page design">
                        <div class="chip">APR 2019</div>
                        <div class="wrap">
                            <h4>A more convenient login</h4>
                            <p class="small">Improving the security of our online self service platform</p>
                            <a class="btn btn-alt btn-animation" href="a-more-convenient-login.html">Read more <span class="arrow-right"></span></a>
                        </div>
                    </div>
                </div>

            </div>

        </article>

        <article id="about" class="regular regular-1">
            <div class="article-inner narrow">

                <h2>Hi, i'm Elle </h2>

                <p>
                    I'm a Brisbane based senior User Experience and User Interface designer with a passion for building
                    design systems with a human touch.
                </p>
                <p>
                    I've bitten by the travel bug and discovered a passion for architecture and photography.
                </p>
                <p>
                    I find myself drawn to unique shapes and lines, looking for patterns in all things. You'll find me
                    snapping pics of the ceiling, often oblivious to the fact that i'm about to stumble into an innocent
                    passerby.
                </p>
                <p>
                    You can find me day dreaming about my next travel destination, or buried deep in a book.
                </p>
                <p>
                    Chao for now! 👋
                </p>

            </div>

        </article>

        <article id="experience" class="regular regular-2">
            <div class="article-inner narrow">

                <h2>Experience</h2>

                <div class="timeline">
                    <div class="timeline-section">

                        <div class="chip">Currently</div>

                        <h4>
                            Senior UX / UI Designer
                        </h4>
                        <p>
                            Auto & General
                        </p>
                    </div>
                    <div class="timeline-section">

                        <div class="chip">2018 - 2021</div>

                        <h4>
                            UX / UI Specialist
                        </h4>
                        <p>
                            Auto & General
                        </p>
                    </div>
                    <div class="timeline-section">
                        <div class="chip">2017 - 2018</div>
                        <h4>UX / UI Designer</h4>
                        <p>OrgCanvas</p>
                    </div>

                    <div class="timeline-section">
                        <div class="chip">2015 - 2017</div>
                        <h4>UX / UI Designer</h4>
                        <p>Tactiv</p>
                    </div>

                    <div class="timeline-section">
                        <div class="chip">2012 - 2015</div>
                        <h4>Bachelor of Multimedia Design</h4>
                        <p>The University of Queensland</p>
                    </div>

                    <div class="timeline-section">
                        <div class="chip">2010 - 2011</div>
                        <h4>Certificate II in Information Technology</h4>
                        <p>Tafe Queensland</p>
                    </div>
                </div>
            </div>

        </article>

        <div id="footer"></div>


    </main>
</body>

</html>