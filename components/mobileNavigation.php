<?php
$root = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';
global $woocommerce;
?>
<div class="mobileNav">
    <div class="mobileNav__bg" style="background-image: url('<?= get_template_directory_uri() ?>/assets/images/navbg.png')"></div>
    <div class="mobileNav__content">
        <a href="<?= $root ?>saladelf/shop/" class="mobileNav__content__logo" style="background-image: url('<?= get_template_directory_uri() ?>/assets/images/logo-white.png')"></a>

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
                    <div class="mobileNav__content__buttons__menu__submenu__header"><img src='<?= get_template_directory_uri() ?>/assets/images/header-bg.png' alt=""></div>
                    <div class="mobileNav__content__buttons__menu__submenu__links">
                        <a href="<?= $root ?>shop/">
                            SHOP
                        </a>
                        <a href="<?= $root ?>about/" >
                            ABOUT
                        </a>
                        <a href="<?= $root ?>contact/" >
                            CONTACT
                        </a>
                        <a class="mobileNav__content__buttons__menu__submenu__links__social" href="https://www.instagram.com/saladelf/"  style="background-image: url('<?= get_template_directory_uri() ?> /assets/images/instagramMob.png')"></a>
                    </div>
                    <div class="mobileNav__content__buttons__menu__submenu__footer"><img src='<?= get_template_directory_uri() ?>/assets/images/footer-bg.png' alt=""></div>
                </div>
            </div>
            <div class="mobileNav__content__buttons__menu__submenu__footer"><img src='<?= get_template_directory_uri() ?> /assets/images/footer-bg.png' alt=""></div>
        </div>
    </div>
</div>
</div>

</div>
</div>