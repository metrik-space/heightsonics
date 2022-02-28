<?php
$root = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';
global $woocommerce;
?>
<div class="nav" id="navBg">
    <div class="nav__container">
        <div class="nav__items">
            <?php if (strpos($_SERVER['REQUEST_URI'], 'shop') || strpos($_SERVER['REQUEST_URI'], 'product')) { ?>
                <div class="nav__items__logo">
                    <a href="shop/">
                        <img class="nav__items__logo__image" src="<?= get_template_directory_uri() ?>/assets/images/heightsampleslogo.png" alt="height sonics logo" />
                    </a>
                    <div class="nav__items__logo__drop">
                        <div class="nav__items__logo__drop__link">
                            <a href="mastering/"><img class="nav__items__logo__drop__link__image" src="<?= get_template_directory_uri() ?>/assets/images/heightlogowhite.png" alt="height sonics logo" /></a>
                        </div>
                    </div>
                </div>

                <a href="#shop" class="nav__items__links nicescroll">
                    SHOP
                </a>
                <a href="#about" class="nav__items__links nicescroll">
                    ABOUT
                </a>
                <a href="#contact" class="nav__items__links nicescroll">
                    CONTACT
                </a>
            <?php } else { ?>
                <div class="nav__items__logo">
                    <a href="mastering/">
                        <img class="nav__items__logo__image" src="<?= get_template_directory_uri() ?>/assets/images/heightlogowhite.png" alt="height sonics logo" />
                    </a>
                    <div class="nav__items__logo__drop" style="padding-top: 43.5px;">
                        <div class="nav__items__logo__drop__link">
                            <a href="shop/"><img class="nav__items__logo__drop__link__image" src="<?= get_template_directory_uri() ?>/assets/images/heightsampleslogo.png" alt="height sonics logo" /></a>
                        </div>
                    </div>
                </div>
                <a href="#about" class="nav__items__links nicescroll">
                    ABOUT
                </a>
                <a href="#testimonials" class="nav__items__links nicescroll">
                    TESTIMONIALS
                </a>
                <a href="#work" class="nav__items__links nicescroll">
                    CLIENT FOCUS
                </a>
                <a href="#contact" class="nav__items__links nicescroll">
                    CONTACT
                </a>
            <?php } ?>
        </div>
        <div class="nav__basket">
            <a class="nav__basket__link" href="/cart" style="background-image: url('<?= get_template_directory_uri() ?>/assets/images/shopping_basket.png')">
                <?php if ($woocommerce->cart->cart_contents_count > 0) { ?>
                    <span>
                        <?= $woocommerce->cart->cart_contents_count ?>
                    </span>
                <?php } ?>
            </a>
        </div>
    </div>
</div>