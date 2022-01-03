<?php $root = (!empty($_SERVER['HTTPS']) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/'; ?>
<?php 
    if(strpos($_SERVER['REQUEST_URI'], 'shop')){ 
        $color = "#fff";
        $text = "#0C0D10";
        $url = "/assets/images/fb_icon__black.svg";
        $url2 = "/assets/images/insta_icon__black.svg";
    } else {
        $color = "#0C0D10";
        $text = "#fff";
        $url = "/assets/images/fb_icon.svg";
        $url2 = "/assets/images/insta_icon.svg";
    }
?>
<div class="footer" style="background-color: <?=$color?>; color: <?=$text?>;">
    <div class="footer__container">
        <div class="footer__block">
            <p>Copyright Height Sonics 2022</p>
            <div class="footer__block__socials">
                <a href="www.facebook.com/HeightMasteringUK"><img src="<?= get_template_directory_uri() ?><?=$url?>" alt=""></a>
                <a href="https://www.instagram.com/height_mastering/"><img src="<?= get_template_directory_uri() ?><?=$url2?>" alt=""></a>
            </div>
            <div class="footer__block__links">
                <a href="https://metrik-space.com/" style="color: <?=$text?>;">SITE BY METRIK SPACE</a>
            </div>
        </div>
    </div>
</div>