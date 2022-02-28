<?php
/* Template Name: mastering Page */

get_header(); ?>

<main id="primary" class="site-main">
    <?php include 'components/navigation.php'; ?>
    <?php include get_template_directory() . '/components/mobileNavigation.php'; ?>
    <div class="hero2">
        <video autoplay muted loop playsinline width="100%" height="100vh" poster="<?= get_template_directory_uri() ?>/assets/images/heightbg.jpg' ?>">

            <source src="<?= get_template_directory_uri() . '/assets/videos/heightmasteringVid-c.mp4' ?>" type="video/mp4">
            <source src="<?= get_template_directory_uri() . '/assets/videos/heightmasteringVid-c.webm' ?>" type="video/webm">

            Sorry, your browser doesn't support embedded videos.
        </video>
        <div class="hero2__cont">
            <div data-aos="fade-up" data-aos-duration="1000" class="hero2__cont__logo">
                <img src="<?= get_template_directory_uri() ?>/assets/images/heightlogowhite.png" alt="Height Mastering logo">
            </div>
        </div>
        <div class="hero2__arrow bounce">
            <a href="#about"><img src="<?= get_template_directory_uri() ?>/assets/images/arrowdown.png" alt=""></a>
        </div>
    </div>

    <div class="mastering">
        <div class="mastering__about" id="about">
            <div class="mastering__about__left">
                <div id="particles-js-mastering-about" class="particles-js"></div>
            </div>
            <div class="mastering__about__right">
                <div id="particles-js" class="particles-js"></div>
            </div>
            <div class="mastering__container" style="display:flex; align-items: center;">
                <div class="mastering__about__content">
                    <img data-aos="zoom-in" data-aos-duration="1000" class="mastering__about__content__image" src="<?= get_template_directory_uri() ?>/assets/images/portImage.png" alt="">
                    <div class="mastering__about__content__text" data-aos="fade-up" data-aos-duration="1000">
                        <h1>Height Mastering</h1>
                        <p>
                            Height Mastering was formed in 2019 by music producer Haden White. Height was launched with the purpose of providing exceptional audio mastering with a ‘no nonsense’, personable experience for artists and record labels, big or small. 
                        </p>
                        <p>
                            At it’s core, Height Mastering’s main goal is to enhance the relationship between the audio engineer and the artist. This focus, paired with a modern day technical approach, has been the preferred working method of Height since its conception. 
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="mastering__container">
            <div id="testimonials" class="mastering__testi">
                <h1 data-aos="fade-up" data-aos-duration="1000">
                    Testimonials
                </h1>
                <div class=" mastering__testi__items" id="multiple-items" data-aos="fade-up" data-aos-duration="1000">

                    <div class="mastering__testi__items__item">
                        <h3>Rebel Music</h3>
                        <p>
                            'What the process should be like from top to bottom. Professional service with a friendly edge. Amazing masters, quality service and always in a timely fashion. The artists at Rebel Music are always very happy with their masters and the feedback they also receive. 10/10 each and every time.'
                        </p>
                    </div>

                    <div class="mastering__testi__items__item">
                        <h3>
                            Molecular
                        </h3>
                        <p>
                            'Highly recommended - whenever I'm asked about a good mastering service I instantly think of Haden at Height Mastering. Clean, loud and clear, and a fast service. I've had many tracks mastered by Haden already and can't complain of any, and I'm picky when it comes to masters.''
                        </p>
                    </div>

                    <div class="mastering__testi__items__item">
                        <h3>
                            Overview Music
                        </h3>
                        <p>
                            'Height mastering delivers a great mastering service! Easy to work with, phenomenal feedback given and always delivers on time. We won’t be going anywhere else.'
                        </p>
                    </div>

                    <div class="mastering__testi__items__item">
                        <h3>
                            Ekou Recordings
                        </h3>
                        <p>
                            'We have been repeatedly using Height Mastering for 2 years now as the service is amazing! Top quality masters, great communication, amazing flexibility, availability and the final product never ceases to amaze us. Haden goes above and beyond when it comes to ensuring the best quality products are delivered. This is and will be our mastering company for many years, and I couldn't ask for a better working partner.'
                        </p>
                    </div>
                    <div class="mastering__testi__items__item">
                        <h3>
                            Transparent Audio
                        </h3>
                        <p>
                            'Although our relationship with Height Mastering has only been a year in the making, it’s been remarkable so far. Not only is the service professional and friendly, but also personal: giving his own thoughts and contribution towards creating a better master. Offering feedback for the artists to adjust slight changes considering a cleaner pre-master. We are always extremely impressed with the quality of masters and turnover time, crafting a perfect mixture of warmth, body, and clarity with the confidence of not losing volume and loudness. From the day we first contacted Height Mastering, we knew we were in good hands.'
                        </p>
                    </div>
                    <div class="mastering__testi__items__item">
                        <h3>
                            Midas Touch Recordings
                        </h3>
                        <p>
                            'Working with Height Mastering is like working with a friend. The professionalism and care taken, combined with his ear for detail and the love for music and the craft gives us as a label the possibility to get our music to that next level. He’s always there with advice where needed to get the maximum out of every release. We would definitely recommend his services.'
                        </p>
                    </div>
                    <div class="mastering__testi__items__item">
                        <h3>
                            Ant TC1 (Dispatch Recordings)
                        </h3>
                        <p>
                            'Been really impressed with Height Mastering work for the label, real crisp rounded work on each track and across releases. The skill level and attention to detail is very much apparent, I’ve had little in the way of any amendments requested post mastering too, so a great first time strike rate results wise.'
                        </p>
                    </div>
                    
                </div>
            </div>
            <div id="particles-js2" class="particles-js"></div>
        </div>
        <div id="work" class="mastering__featured-work">
            <div class="mastering__container">
                <h1 data-aos="fade-up" data-aos-duration="1000">
                    Featured Clients
                </h1>
                <div class="mastering__featured-work__cont" data-aos="fade-up" data-aos-duration="1000">
                    <div class="mastering__featured-work__cont__item">
                        <img src="<?= get_template_directory_uri() . '/assets/images/midasLogo.jpg' ?>">
                    </div>
                    <div class="mastering__featured-work__cont__item" style="background-color: #fff;">
                        <img src="<?= get_template_directory_uri() . '/assets/images/dispatchLogo.png' ?>">
                    </div>
                    <div class="mastering__featured-work__cont__item">
                        <img src="<?= get_template_directory_uri() . '/assets/images/amossLogo.png' ?>">
                    </div>
                    <div class="mastering__featured-work__cont__item">
                        <img src="<?= get_template_directory_uri() . '/assets/images/rebelLogo.png' ?>">
                    </div>
                </div>
            </div>
            <div id="particles-js4" class="particles-js"></div>
        </div>
        <div class="mastering__contact">
            <div id="particles-js3" class="particles-js"></div>
            <div class="mastering__container" id="contact">
                <h1 data-aos="fade-up" data-aos-duration="1000">Get In Contact</h1>
                <div class="mastering__contact__formCont">
                    <form action="" class="mastering__contact__form">
                        <div class="mastering__contact__form__input">
                            <label for="name">Name</label>
                            <input name="name" type="text" placeholder="Name" required />
                        </div>
                        <div class="mastering__contact__form__input">
                            <label for="email">Email</label>
                            <input name="email" type="text" placeholder="Email" required />
                        </div>
                        <div class="mastering__contact__form__input">
                            <label for="message">Message</label>
                            <textarea name="message" id="" cols="30" rows="7" placeholder="Message,,," required></textarea>
                        </div>
                        <input type="submit" value="SUBMIT" class="btn">
                    </form>
                    
                </div>
                <div class="mastering__contact__pageButtons" data-aos="fade-up" data-aos-duration="1000">
                    <a href="shop/">
                        <div class="mastering__contact__pageButtons__bg" style="background-image: url(<?= get_template_directory_uri() ?>/assets/images/heightbgcol.jpg)"></div>
                        <img class="mastering__contact__pageButtons__logo" src="<?= get_template_directory_uri() ?>/assets/images/heightsampleslogo.png" alt="Height Mastering logo">
                    </a>
                    <a href="/">
                        <div class="mastering__contact__pageButtons__bg" style="background-color: #000;"></div>
                        <img class="mastering__contact__pageButtons__logoHome" src="<?= get_template_directory_uri() ?>/assets/images/heightsonicslogo.png" alt="Height Sonics logo">
                    </a>
                    <a href="mastering/" style="background-image: url(<?= get_template_directory_uri() ?>/assets/images/heightbg.jpg)">
                        <div class="mastering__contact__pageButtons__bg" style="background-image: url(<?= get_template_directory_uri() ?>/assets/images/heightbg.jpg)"></div>
                        <img class="mastering__contact__pageButtons__logo" src="<?= get_template_directory_uri() ?>/assets/images/heightlogowhite.png" alt="Height Mastering logo">
                    </a>
                </div>
            </div>
        </div>

    </div>
    <?php include 'components/footer.php'; ?>
</main><!-- #main -->

<?php get_footer();
