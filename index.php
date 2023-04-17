<?php 

require 'db-functions.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js" async></script>
    <title>Accueil</title>
</head>

<body>
    <div id="home_cover">
        <header>

            <h2>Kucra</h2>


            <div id="responsive_nav">

                <nav id="res_nav">

                    <div id="nav_links">

                        <ul>
                            <li><a href="index.html" class="nav_text">HOME</a></li>
                            <li><a href="#products_features" class="nav_text">FEATURES</a></li>
                            <li><a href="#clientsays" class="nav_text">CLIENT</a></li>
                            <li><a href="#pricing" class="nav_text">PRICING</a></li>
                            <li><a href="#howitworks" class="nav_text">FAQ</a></li>
                            <li><a href="#team" class="nav_text">ABOUT</a></li>
                            <li><a href="#blog" class="nav_text">BLOG</a></li>
                            <li><a href="#started_w_kucra" class="nav_text">CONTACT</a></li>
                            <ul>

                    </div>

                    <div id="nav_social">

                        <ul>
                            <li><a href="https://www.facebook.com" class="social_medias_text"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href="https://www.twitter.com" class="social_medias_text"><i class="fa-brands fa-twitter"></i></a></li>
                            <li><a href="https://www.instagram.com" class="social_medias_text"><i class="fa-brands fa-instagram"></i></a></li>
                        </ul>

                    </div>

                </nav>

            </div>

            <nav id="nav_default">
                <div id="nav_links">
                    <ul>
                        <li><a href="index.html" class="nav_text">HOME</a></li>
                        <li><a href="#products_features" class="nav_text">FEATURES</a></li>
                        <li><a href="#clientsays" class="nav_text">CLIENT</a></li>
                        <li><a href="#pricing" class="nav_text">PRICING</a></li>
                        <li><a href="#howitworks" class="nav_text">FAQ</a></li>
                        <li><a href="#team" class="nav_text">ABOUT</a></li>
                        <li><a href="#blog" class="nav_text">BLOG</a></li>
                        <li><a href="#started_w_kucra" class="nav_text">CONTACT</a></li>
                        <ul>
                </div>

                <div id="nav_social">
                    <ul>
                        <li><a href="https://www.facebook.com" class="social_medias_text"><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li><a href="https://www.twitter.com" class="social_medias_text"><i class="fa-brands fa-twitter"></i></a></li>
                        <li><a href="https://www.instagram.com" class="social_medias_text"><i class="fa-brands fa-instagram"></i></a></li>
                    </ul>
                </div>
            </nav>

        </header>

        <main>

            <div id="container_mainpage">

                <img src="assets/illustration.svg" alt="image_ordinateur_clique" id="home_cat">

                <div id="intro">

                    <h1>We are StartUp Creative Kucra Agency</h1>

                    <p>Carefully crafted after analysing the needs of different industries and the design achieves a great balance between purpose & presentation</p>

                    <div id="mail_sub">

                        <form action="submit">
                            <input type="text" id="mail" placeholder="Enter your email" autocomplete="off">
                        </form>

                        <button><a href="index.html">SUBSCRIBE</a></button>

                    </div>

                </div>

            </div>


    </div>

    <div id="products_features">

        <h2>Products Features</h2>

        <p>It is a long established fact that a reader will be of a page when established fact looking at its layout</p>

        <div id="article_container">

            <article class="products_features">
                <i class="fa-solid fa-globe"></i>
                <h3>Digital Design</h3>
                <p>Some quick example test to build on the card title and make up the bulk of the card the platform.</p>
            </article>

            <article class="products_features">
                <i class="fa-solid fa-brush"></i>
                <h3>Unlimited Colors</h3>
                <p>Credibily brand stanoods compliant user exteible services College Anibh Ocean euismod tincudunt laareet.</p>
            </article>

            <article class="products_features">
                <i class="fa-solid fa-chess"></i>
                <h3>Strategy Solutions</h3>
                <p>Separated they live in Bookmarks grove right at the coast of the Semantics, a large ocean regelialia.</p>
            </article>

        </div>


    </div>

    <div id="howitworks">
        <h2>How It Works ?</h2>
        <p>It is a long established fact that a reader will be of a page established fact looking at its layout.</p>
    </div>

    <div id="team">

        <h2>We're dynamic team of talented people of innovative & marketing expert</h2>
        <p>To achieve this, it would be necessary to have uniform grammar, pronunciation and more commun words,
            if several languages of the resulting language.</p>

        <div id="milestones">

            <article>
                <h4>1499+</h4>
                <p>Complete Projects</p>
            </article>

            <article>
                <h4>1080K</h4>
                <p>Satisfied Clients</p>
            </article>

            <article>
                <h4>608</h4>
                <p>Team Members</p>
            </article>

            <article>
                <h4>252</h4>
                <p>Employees</p>
            </article>

        </div>

        <div id="portraits">
            <div class="team_card">
                <div class="team_card_header">
                    <img src="assets/img/person1.png" alt="Anna G. Wilhite">
                    <div class="social_medias_logo_team">
                        <a href="https://facebook.com"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="https://twitter.com"><i class="fa-brands fa-twitter"></i></a>
                        <a href="https://google.com"><i class="fa-brands fa-skype"></i></a>
                    </div>
                </div>
                <div class="card-text">
                    <h5>Anna G. Wilhite</h5>
                    <p>CEO/Founder
                    <p>
                </div>
            </div>
            <div class="team_card">
                <div class="team_card_header">
                    <img src="assets/img/person2.png" alt="William S. Blay">
                    <div class="social_medias_logo_team">
                        <a href="https://facebook.com"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="https://twitter.com"><i class="fa-brands fa-twitter"></i></a>
                        <a href="https://google.com"><i class="fa-brands fa-skype"></i></a>
                    </div>
                </div>
                <div class="card-text">
                    <h5>William S. Blay</h5>
                    <p>CTO/Co-Founder
                    <p>
                </div>
            </div>
            <div class="team_card">
                <div class="team_card_header">
                    <img src="assets/img/person3.png" alt="Maria B. Morales">
                    <div class="social_medias_logo_team">
                        <a href="https://facebook.com"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="https://twitter.com"><i class="fa-brands fa-twitter"></i></a>
                        <a href="https://google.com"><i class="fa-brands fa-skype"></i></a>
                    </div>
                </div>
                <div class="card-text">
                    <h5>Maria B. Morales</h5>
                    <p>Web Designer
                    <p>
                </div>
            </div>
            <div class="team_card">
                <div class="team_card_header">
                    <img src="assets/img/person4.png" alt="Luke L. Johnston">
                    <div class="social_medias_logo_team">
                        <a href="https://facebook.com"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="https://twitter.com"><i class="fa-brands fa-twitter"></i></a>
                        <a href="https://google.com"><i class="fa-brands fa-skype"></i></a>
                    </div>
                </div>
                <div class="card-text">
                    <h5>Luke L. Johnston</h5>
                    <p>Web Developer
                    <p>
                </div>
            </div>
        </div>
    </div>

    <div id="started_w_kucra">

        <h3>Let's get started with Kucra</h3>
        <p>They are a good way to get you started if you want to build something similar or use from existing apps
            which will reduce the cost, efforts and time of the developers.
        </p>
        <button><a href="">Get Started</a></button>
        <!-- <a><input type='button'>Get Started</a> -->

    </div>

    <!-- <div id="parallax">
                </div>  -->

    <div id="clientsays">
        <h2>What your client says</h2>
        <p>The Big Oxmox Advised her not to do so, because there were thousnads of bad Commas, wild Question Marks and devious pulvinar
            metus molestie sed Semikoli.</p>

        <div class="swiper mySwiper">

            <div class="swiper-wrapper">

                <div class="swiper-slide">

                    <div class="client_card">

                        <div class="client_head">

                            <img src="assets/img/client1.png" alt="Charlize Theron">
                            <i class="fa-solid fa-quote-left"></i>
                            <h5>Charlize Theron</h5>
                            <p>Washington</p>

                        </div>
                        <div class="client_text">
                            <p>"All your client websites if you are an agency orfreelancer. It got all the tools needs to create
                                super fast responsive websites with amazing user experience. Our ever-growing library of components
                                and pre-designed layouts will make your life easier."
                            </p>
                        </div>

                    </div>

                </div>

                <div class="swiper-slide">

                    <div class="client_card">

                        <div class="client_head">

                            <img src="assets/img/client2.png" alt="Peter McCallauway">
                            <i class="fa-solid fa-quote-left"></i>
                            <h5>Peter McCallauway</h5>
                            <p>New York</p>

                        </div>
                        <div class="client_text">
                            <p>"It looks perfect on all major browsers, tablets, and mobile devices, All files are organized we believe
                                it will be easy o use and edit them. This template is well organized and very easy to customize.
                                We have added a Dark version with RTL supported."
                            </p>
                        </div>

                    </div>

                </div>

                <div class="swiper-slide">

                    <div class="client_card">

                        <div class="client_head">

                            <img src="assets/img/client3.png" alt="John Eston">
                            <i class="fa-solid fa-quote-left"></i>
                            <h5>John Eston</h5>
                            <p>Chicago</p>

                        </div>
                        <div class="client_text">
                            <p>"Very well thought out and articulate communication. Clear milestones, deadlines and fast work. Patience.
                                Infinite patience. No shortcuts. Even if the client is being careless. The best part...always solving
                                problems with great original ideas!."e-designed layouts will make your life easier."
                            </p>
                        </div>

                    </div>

                </div>

            </div>

            <div class="swiper-pagination"></div>

        </div>

        <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

        <script>
            var swiper = new Swiper(".mySwiper", {
                pagination: {
                    el: ".swiper-pagination",
                    dynamicBullets: true,
                    clickable: true,
                },
            });
        </script>

        <div id="client_logos">
            <img src="assets/img/01.png" alt="coffee_logo">
            <img src="assets/img/02.png" alt="fisherman_logo">
            <img src="assets/img/03.png" alt="coffee_moutainbike">
            <img src="assets/img/04.png" alt="coffee_mountain">
            <img src="assets/img/05.png" alt="coffee_market">
        </div>

    </div>

    <div id="pricing">

        <div id="pricing_header">

            <div id="pricing_header_text">
                <h3>We are digital creative Landing Page</h3>
                <p>The difference between a successful person and others is not a lack of strength, not a lack of knowledge, but rather a lack
                    of will. Composed in a pseudo-latin language which more or less pseudo-Latin language correponds.
                </p>

                <div id="container_pricing_header_text">
                    <article>

                        <h4>4957</h4>
                        <p>Happy Users</p>

                    </article>

                    <article>

                        <h4>1599</h4>
                        <p>Complete Projects</p>

                    </article>
                </div>

                <button><a href="">Learn More</a></button>
            </div>

            <img src="assets/img/creativity.png" alt="creativity">

        </div>


        <div id="forfaits">

            <h2>Our Pricing</h2>
            <p>It is a long established fact that a reader will be of a page when established fact looking at its layout.</p>

            <div id="forfait_cards">
                <?php
                foreach ($pricings as $pricing) {

                ?>
                    <div class="forfait_card">

                        <?php

                        if ($pricing['sale'] != 0) {
                            echo "<aside class='sale_box'><p>" . $pricing['sale'] . "% sale</p></aside>";
                        }

                        ?>

                        <h4><?= $pricing['name'] ?></h4>

                        <div class="price">
                            <p>$</p>
                            <h5><?= $pricing['price'] ?></h5>
                            <p>/month</p>
                        </div>

                        <div class="forfait_advantages">

                            <div class="bandwith">
                                <span class="advantage_name">
                                    <p><i class="fa-regular fa-circle-check"></i>Bandwith</p>
                                </span>
                                <span class="advantage_value">
                                    <p><?= $pricing['bandwidth'] ?></p>
                                </span>
                            </div>

                            <div class="onlinespace">
                                <span class="advantage_name">
                                    <p><i class="fa-regular fa-circle-check"></i>Onlinespace</p>
                                </span>
                                <span class="advantage_value">
                                    <p>
                                        <?php

                                        $pricing['onlineSpace'] < 100 ? $dataType = "GB" : $dataType = "MB";

                                        echo $pricing['onlineSpace'] . $dataType;

                                        ?>
                                    </p>
                                </span>
                            </div>

                            <div class="support">
                                <?php

                                if ($pricing['support'] == '1') {
                                    $result = "Yes";
                                    $icon = "<i class='fa-regular fa-circle-check'></i>";
                                } else {
                                    $result = "No";
                                    $icon = "<i class='fa-regular fa-circle-xmark'></i>";
                                }

                                ?>
                                <span class="advantage_name">
                                    <p><?= $icon ?>Support</p>
                                </span>
                                <span class="advantage_value">
                                    <p><?= $result ?></p>
                                </span>
                            </div>

                            <div class="domain">
                                <span class="advantage_name">
                                    <p><i class="fa-regular fa-circle-check"></i>Domain</p>
                                </span>
                                <span class="advantage_value">
                                    <p><?= $pricing['domain'] ?></p>
                                </span>
                            </div>

                            <div class="hiddenfees">
                                <?php

                                if ($pricing['hiddenFees'] == '1') {
                                    $result = "Yes";
                                    $icon = "<i class='fa-regular fa-circle-check'></i>";
                                } else {
                                    $result = "No";
                                    $icon = "<i class='fa-regular fa-circle-xmark'></i>";
                                }

                                ?>
                                <span class="advantage_name">
                                    <p><?= $icon ?>Hidden Fees</p>
                                </span>
                                <span class="advantage_value">
                                    <p><?= $result ?></p>
                                </span>
                            </div>

                        </div>

                        <button><a href=''>Join Now</a></button>

                    </div>

                <?php

                }

                ?>


            </div>

        </div>



    </div>

    <div id="blog">

        <h2>Our Blog</h2>
        <p>It is a long established fact that a reader will be of a page when established fact looking at its layout.</p>

        <div id="blog_articles">

            <div class="blog_card">

                <div class="blog_card_header">

                    <img src="assets/img/blog1.png" alt="">

                    <div class="article_infos">

                        <div class="author">
                            <i class="fa-regular fa-user"></i>
                            <p>Calvin Carlo</p>
                        </div>

                        <div class="date">
                            <i class="fa-regular fa-clock"></i>
                            <p>20th March 2021</p>
                        </div>

                    </div>

                </div>


                <h3>Doing a cross country road trip</h3>
                <p>We craft digital, graphic and dimensional thinking, to create category leading brand.</p>
                <a href="">Read more</a>

            </div>

            <div class="blog_card">

                <div class="blog_card_header">

                    <img src="assets/img/blog2.png" alt="">

                    <div class="article_infos">

                        <div class="author">
                            <i class="fa-regular fa-user"></i>
                            <p>Ruben Reed</p>
                        </div>

                        <div class="date">
                            <i class="fa-regular fa-clock"></i>
                            <p>01th July 2021</p>
                        </div>

                    </div>

                </div>

                <h3>New exhibition at our Museum</h3>
                <p>Even the all-powerful Pointing has no control about the blind almost unorthographic.</p>
                <a href="">Read more</a>



            </div>

            <div class="blog_card">

                <div class="blog_card_header">

                    <img src="assets/img/blog3.png" alt="">

                    <div class="article_infos">

                        <div class="author">
                            <i class="fa-regular fa-user"></i>
                            <p>Theresa Sinclair</p>
                        </div>

                        <div class="date">
                            <i class="fa-regular fa-clock"></i>
                            <p>20th March 2021</p>
                        </div>

                    </div>

                </div>

                <h3>Design your apps in your own way</h3>
                <p>Pityful a rethoric question ran over her cheek, then she continued her way.</p>
                <a href="">Read more</a>

            </div>


        </div>

    </div>

    <div id="scroll_container">
        <a href="#home_cover"><i class="fa-solid fa-arrow-up"></i></a>
    </div>

    </main>

    <footer>

        <div id="footer_logos">
            <a href="https://facebook.com"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="https://twitter.com"><i class="fa-brands fa-twitter"></i></a>
            <a href="https://linkedin.com"><i class="fa-brands fa-linkedin"></i></a>
            <a href="https://google.com"><i class="fa-brands fa-google-plus-g"></i></a>
        </div>

        <div id="footer_links">
            <a href="">
                <p>Terms & Condition</p>
            </a>
            <span>|</span>
            <a href="">
                <p>Privacy Policy</p>
            </a>
            <span>|</span>
            <a href="">
                <p>Contact Us</p>
            </a>
        </div>

        <p>2022 © Kucra - Landing Page Template by Pichforest</p>

    </footer>

</body>

</html>