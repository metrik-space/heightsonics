<?php
/* Template Name: mastering Page */

get_header(); ?>

<main id="primary" class="site-main">
    <?php include 'components/navigation.php'; ?>
    <?php include get_template_directory() . '/components/mobileNavigation.php'; ?>
    <div class="hero" >
    <video autoplay muted loop playsinline width="100%" height="100vh" poster="<?= get_template_directory_uri() ?>/assets/images/heightbg.jpg' ?>">

        <source src="<?= get_template_directory_uri() . '/assets/videos/heightmasteringVid.mp4' ?>" type="video/mp4">
        <source src="<?= get_template_directory_uri() . '/assets/videos/heightmasteringVid.webm' ?>" type="video/webm">

        Sorry, your browser doesn't support embedded videos.
        </video>
        <div class="hero__cont">
            <div class="hero__cont__logo">
                <img src="<?= get_template_directory_uri() ?>/assets/images/heightlogowhite.png" alt="Height Mastering logo">
            </div>
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
					<img class="mastering__about__content__image" src="<?= get_template_directory_uri() ?>/assets/images/portImage.png" alt="">
					<div class="mastering__about__content__text">
						<h1>Production Made Simple</h1>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
						</p>
					</div>
				</div>
			</div>
        </div>

        <div class="mastering__container">
        <div id="testimonials" class="mastering__testi">
                <h1>
                    Testimonials
                </h1>
                <div class="mastering__testi__items" id="multiple-items">

                    <div class="mastering__testi__items__item">
                        <p>
                            'This is the content of the review about how amazing you are amazing services and all that'

                        </p>
                        <b>- Kaylem | Developer</b>
                    </div>

                    <div class="mastering__testi__items__item">
                        <p>
                            This is the content of the review about how amazing you are amazing services and all that

                        </p>
                        <b>- Timmy | Producer </b>
                    </div>

                    <div class="mastering__testi__items__item">
                        <p>
                            This is the content of the review about how amazing you are amazing services and all that

                        </p>
                        <b>- Timmy | Producer </b>
                    </div>

                    <div class="mastering__testi__items__item">
                        <p>
                            This is the content of the review about how amazing you are amazing services and all that

                        </p>
                        <b>- Timmy | Producer </b>
                    </div>

                </div>
            </div>
            <div id="particles-js2" class="particles-js"></div>
        </div>
        <div id="work" class="mastering__featured-work">
            <div class="mastering__container">
                <h1>
                    Featured Work
                </h1>
                <div class="mastering__featured-work__cont">
                    <div class="mastering__featured-work__cont__item">
                        <img src="<?= get_template_directory_uri() . '/assets/images/illtruth1.jpeg' ?>">
                    </div>
                    <div class="mastering__featured-work__cont__item">
                        <img src="<?= get_template_directory_uri() . '/assets/images/illtruth1.jpeg' ?>">
                    </div>
                    <div class="mastering__featured-work__cont__item">
                        <img src="<?= get_template_directory_uri() . '/assets/images/illtruth1.jpeg' ?>">
                    </div>
                    <div class="mastering__featured-work__cont__item">
                        <img src="<?= get_template_directory_uri() . '/assets/images/illtruth1.jpeg' ?>">
                    </div>
                </div>
            </div>
            <div id="particles-js4" class="particles-js"></div>
        </div>
        <div class="mastering__contact">
            <div id="particles-js3" class="particles-js"></div>
            <div class="mastering__container" id="contact">
                <h1>Get In Contact</h1>
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
                            <textarea name="message" id="" cols="30" rows="7" placeholder="Message" required></textarea>
                        </div>
                        <input type="submit" value="Submit" class="btn">
                    </form>
                    <div class="mastering__contact__maps">
                        <img src="<?= get_template_directory_uri() ?>/assets/images/capture.png" alt="">
                    </div>
                </div>
            <div class="mastering__contact__pageButtons">
                <a href="/">
                    <div class="mastering__contact__pageButtons__bg" style="background-color: #000;"></div>
                    <img class="mastering__contact__pageButtons__logoHome" src="<?=get_template_directory_uri()?>/assets/images/heightsonicslogo.png" alt="Height Sonics logo">
                </a>
                <a href="shop/">
                    <div class="mastering__contact__pageButtons__bg" style="background-image: url(<?=get_template_directory_uri()?>/assets/images/heightbgcol.jpg)"></div>
                    <img class="mastering__contact__pageButtons__logo" src="<?=get_template_directory_uri()?>/assets/images/heightsampleslogo.png" alt="Height Mastering logo">
                </a>
                <a href="mastering/" style="background-image: url(<?=get_template_directory_uri()?>/assets/images/heightbg.jpg)">
                    <div class="mastering__contact__pageButtons__bg" style="background-image: url(<?=get_template_directory_uri()?>/assets/images/heightbg.jpg)"></div>
                    <img class="mastering__contact__pageButtons__logo" src="<?=get_template_directory_uri()?>/assets/images/heightlogowhite.png" alt="Height Mastering logo">
                </a>
            </div>
            </div>
        </div>

    </div>
    <?php include 'components/footer.php'; ?>
</main><!-- #main -->

<?php get_footer();
