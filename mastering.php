<?php
/* Template Name: mastering Page */

get_header(); ?>

<main id="primary" class="site-main">
    <?php include 'components/navigation.php'; ?>
  <?php include get_template_directory() . '/components/mobileNavigation.php'; ?>
    <div class="hero" style="background-image: url('<?= get_template_directory_uri() ?>/assets/images/heightbg.png')">
        <div class="hero__cont">
        <div class="hero__cont__logo">
            <img src="<?=get_template_directory_uri()?>/assets/images/heightlogowhite.png" alt="Height Mastering logo">
        </div>
        </div>
    </div>
    
    <div class="mastering">
        <div class="mastering__about" id="about">
            <div class="mastering__about__left">
                <div class="mastering__about__left__content">
                    <h1>Production Made Simple</h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    </p>
                </div>
            </div>
            <div class="mastering__about__right">
                <img class="mastering__about__right__image" src="<?=get_template_directory_uri()?>/assets/images/portImage.png" alt="">
                <div id="particles-js" class="particles-js"></div>
            </div>
        </div>

        <div class="mastering__testi">
                <div class="mastering__container">
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
        <div class="mastering__contact">
        <div id="particles-js3" class="particles-js"></div>
        <div class="mastering__container">
            <div class="mastering__contact__formCont" id="contact">
                <h1>Get In Contact</h1>
                <form action="" class="mastering__contact__form">
                    <div class="mastering__contact__form__input">
                        <label for="name">Name</label>
                        <input  name="name"   type="text"  placeholder="Your name" required />
                    </div>
                    <div class="mastering__contact__form__input">
                        <label for="email">Email</label>
                        <input  name="email"   type="text"  placeholder="Email address" required />
                    </div>
                    <div class="mastering__contact__form__input">
                        <label for="number">Phone number</label>
                        <input  name="number"   type="text"  placeholder="Optional" required />
                    </div>
                    <div class="mastering__contact__form__input">
                        <label for="message">Message</label>
                        <textarea name="message"  id=""  cols="30"  rows="10" placeholder="Message here..."  required></textarea>
                    </div>
                    <input type="submit" value="Send" class="btn">
                </form>
            </div>
</div>
</div>
    </div>
    <?php include 'components/footer.php'; ?>
</main><!-- #main -->

<?php get_footer();
