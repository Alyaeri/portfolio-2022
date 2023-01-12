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

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <!-- FONT IMPORTS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;800;900&family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">

    <title>Rachelle Patman | Senior UX / UI Designer</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
            $("#header").load("_header.html");
            $("#footer").load("_footer.html");
        });
    </script>

</head>

<body>

    <div id="header"></div>

    <main>
        <article id="home" class="home feature">
            <div class="article-inner narrow" style="margin:auto;">
                <h1>Hi, I'm Rachelle!</h1>
                <h2>
                    A Senior User Experience and User Interface Designer
                </h2>
                <hr class="line-header">

                <p>
                    Working remotely from Melbourne, Australia, I have been helping shape the future of globally recognised products throughout my career.
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
                        <div class="picture img1">
                            <div class="chip">OCT 2021</div>
                        </div>


                        <div class="wrap">
                            <h4>Care to compare</h4>
                            <p class="small">Enhancing the process of comparing benefits across insurance policies</p>
                            <a class="btn btn-alt btn-animation" href="care-to-compare.html">Read more </a>
                        </div>
                    </div>

                    <div class="case-study">
                        <div class="picture img3">
                            <div class="chip">FEB 2022</div>
                        </div>

                        <div class="wrap">
                            <h4>The ultimate design system</h4>
                            <p class="small">Creating a reusable and extensible design system to facilitate rapid
                                project
                                delivery</p>
                            <a class="btn btn-alt btn-animation" href="the-ultimate-design-system.html">Read more <span class="arrow-right"></span></a>
                        </div>
                    </div>

                    <div class="case-study">
                        <div class="picture img2">
                            <div class="chip">APR 2019</div>
                        </div>

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

                <h2>Hi, i'm Rachelle </h2>

                <p>
                    After a lifetime in Queensland I've just relocated to Melbourne to start the next chapter of my life. 
                </p>
                <p>
                I have over over 10 years' experience in the industry, and I'm currently on the lookout for my next project in a company I can see myself being a part of for the longterm.
                </p>
                <p>
                    I've worked with start-ups right through to global industry leaders on their journey to improve the user experience across their products and platforms. With a passion for reusable and accessible design, you'll find me championing inclusive design across the business.
                </p>
                <p>
                    I guide junior and mid-level designers on thoughtful design with an emphasis on the human centered design process, and have a passion for building design systems with a human touch.
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
                        <h4>Bachelor of Multimedia Design (Interaction Design)</h4>
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