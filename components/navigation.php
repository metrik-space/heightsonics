<?php
$root = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/';
global $woocommerce;
?>
<div class="nav">
    <div class="nav__container">
        <div class="nav__items">
            <?php if(strpos($_SERVER['REQUEST_URI'], 'shop')){ ?>
                <a href="#about" class="nav__items__links nicescroll">
                    ABOUT
                </a>
                <a href="#shop" class="nav__items__links nicescroll">
                    SHOP
                </a>
            <?php } else { ?>
                <a href="#about" class="nav__items__links nicescroll">
                    ABOUT
                </a>
                <a href="#contact" class="nav__items__links nicescroll">
                    CONTACT
                </a>
            <?php } ?>
        </div>
        <div class="nav__basket">
            <a class="nav__basket__link" href="" style="background-image: url('<?= get_template_directory_uri() ?>/assets/images/shopping_basket.png')">
                <?php if ($woocommerce->cart->cart_contents_count > 0) { ?>
                    <span>
                        <?= $woocommerce->cart->cart_contents_count ?>
                    </span>
                <?php } ?>
            </a>
        </div>
    </div>
</div>