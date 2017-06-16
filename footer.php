<?php wp_footer(); ?>
<!-- footer-->
<div class="social">
    <a href="#">
        <img title="Twitter" alt="Twitter" src="https://socialmediawidgets.files.wordpress.com/2014/03/01_twitter.png" width="35" height="35" />
    </a>
    <a href="#">
        <img title="Pinterest" alt="Pinterest" src="https://socialmediawidgets.files.wordpress.com/2014/03/13_pinterest.png" width="35" height="35" />
    </a>
    <a href="#">
<img title="Facebook" alt="Facebook" src="https://socialmediawidgets.files.wordpress.com/2014/03/02_facebook.png" width="35" height="35" />
    </a>
    <a href="#">
<img title="LinkedIn" alt="LinkedIn" src="https://socialmediawidgets.files.wordpress.com/2014/03/07_linkedin.png" width="35" height="35" />
    </a>
    <a href="#">
        <img title="Instagram" alt="RSS" src="https://socialmediawidgets.files.wordpress.com/2014/03/10_instagram.png" width="35" height="35" />
    </a>
</div>
<footer>
<div class="footnav">
    <div>
        <h3><a href="#">About</a></h3>
        <h3><a href="#">Products</a></h3>
    <ul>
        <li><a href="#">leo vitae</a></li>
        <li><a href="#">vitae auctor</a></li>
        <li><a href="#">leo faucibus</a></li>
        <li><a href="#">auctor faucibus</a></li>
    </ul>
    </div>

    <div>
    <h3><a href="#">Blog</a></h3>
    <ul>
        <li><a href="#">leo vitae</a></li>
        <li><a href="#">vitae auctor</a></li>
        <li><a href="#">leo faucibus</a></li>
        <li><a href="#">auctor faucibus</a></li>
    </ul>
    <h3><a href="#">Support</a></h3>
    </div>

    <div>
    <h3><a href="#">Nutrition</a></h3>
    <h3><a href="#">Contact</a></h3>
    <ul>
        <li><a href="#">leo vitae</a></li>
        <li><a href="#">vitae auctor</a></li>
        <li><a href="#">leo faucibus</a></li>
        <li><a href="#">auctor faucibus</a></li>
    </ul>
    </div>

    <div>
        <p class="search"><img class="micon" src="<?php bloginfo('template_directory'); ?>/images/micon.png">Search</p>
    </div>
</div>
<div class="smol"><small>
&copy; 2017, All Rights Reserved ~ Authored by Calvin Calvo <!--
<a href="http://validator.w3.org/check/referer" target="_blank">Valid HTML</a> ~
<a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank">Valid CSS</a>-->
<script async defer src="//platform.instagram.com/en_US/embeds.js"></script>
</small></div>
<!-- jQuery -->
<script>
$(function(){
    $(".sub-menu").hide();
    $(".menu-item-has-children").on("mouseover", function(){
        if($(".menu-item-has-children").on("mouseover")){
            $(".sub-menu").toggle().show();
        } else {
            $(".sub-menu").hide();
        }
    });
});

</script>
<!-- Bootstrap Core JavaScript -->
<script src="scripts/bootstrap.min.js"></script>
</footer>
</body>
</html>
