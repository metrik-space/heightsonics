<?php
$root = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';
global $woocommerce;


if (strpos($_SERVER['REQUEST_URI'], 'shop')) {
    $linkFacebook = "www.facebook.com/HeightMasteringUK";
    $linkInsta = "https://www.instagram.com/height_mastering/";

    $logo = "/assets/images/heightsampleslogo.png";
} else {
    $linkFacebook = "www.facebook.com/HeightMasteringUK";
    $linkInsta = "https://www.instagram.com/height_mastering/";

    $logo = "/assets/images/heightlogowhite.png";
}

?>
<div class="mobileNav" id="mobileNav__bg">
    <div  class="mobileNav__bg" style=""></div>
    <div class="mobileNav__content">
        <a href="<?= $root ?>saladelf/shop/" class="mobileNav__content__logo" style="background-image: url('<?= get_template_directory_uri() ?><?= $logo ?>')"></a>

        <div class="mobileNav__content__buttons">
            <a href="<?= $root ?>cart/" class="mobileNav__content__buttons__logo" style="background-image: url('<?= get_template_directory_uri() ?>/assets/images/mobileBasket.png')">
                <?php if ($woocommerce->cart->cart_contents_count > 0) { ?>
                    <span>
                        <?= $woocommerce->cart->cart_contents_count ?>
                    </span>
                <?php } ?>
            </a>
            <div class="mobileNav__content__buttons__menu">
                <input type="checkbox" class="mobileNav__content__buttons__menu__checkbox" id="navi-toggle" />
                <label for="navi-toggle" class="mobileNav__content__buttons__menu__button">
                    <span class="mobileNav__content__buttons__menu__button__icon">&nbsp;</span>
                </label>
                <div class="mobileNav__content__buttons__menu__submenu">
                    <div class="mobileNav__content__buttons__menu__submenu__links">
                        <?php if (strpos($_SERVER['REQUEST_URI'], 'shop')) { ?>

                            <a href="#shop" class="mobNavLink">
                                SHOP
                            </a>
                            <a href="#about" class="mobNavLink">
                                ABOUT
                            </a>
                            <a href="mastering/">
                                HEIGHT MASTERING
                            </a>
                        <?php } else if (strpos($_SERVER['REQUEST_URI'], 'mastering')) { ?>
                            <a href="#about" class="mobNavLink">
                                    ABOUT
                                </a>
                            <a href="#testimonials" class="mobNavLink">
                                    TESTIMONIALS
                                </a>
                            <a href="#work" class="mobNavLink">
                                    FEATURED WORK
                                </a>
                            <a href="#contact" class="mobNavLink">
                                    CONTACT
                                </a>
                                <a href="shop/">
                                    HEIGHT SAMPLES
                                </a>
                            
                            <?php } ?>
                            <div class="mobileNav__content__buttons__menu__submenu__links__socials">
                                <a href="<?= $linkFacebook ?>" style="background-image: url('<?= get_template_directory_uri() ?>/assets/images/fb_icon.svg')"></a>
                                <a href="<?= $linkInsta ?>" style="background-image: url('<?= get_template_directory_uri() ?>/assets/images/insta_icon.svg')"></a>
                            </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>

</div>
</div>