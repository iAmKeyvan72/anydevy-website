<footer id="footer" class="section footer dark-bg" data-before="CONTACT US">
    <div class="footer-form-box">
        <div class="footer-text-box">
            <p class="footer-title" id="footer-title1"></p>
            <p class="footer-title">
                <span id="footer-title2"></span>
                <span class="pink" id="footer-title3"></span>
                <span id="footer-title4"></span>
            </p>
            <p class="footer-text">
                Feel free to send us emails, or contact us via phone.
                <br/>
                You can eben fill the form below to get in touch with us.
            </p>
        </div>

        <div class="contact-form">

            <?php
            echo do_shortcode('[contact-form-7 id="397" title="RFQ"]');
            ?>
        </div>
        <!--        <form action="" method="post" class="contact-form">-->
        <!--            <div class="input_container input-effect">-->
        <!--                <input class="effect-21 footer-input input-with-label" type="text" placeholder=""/>-->
        <!--                <label>Name</label>-->
        <!--                <span class="focus-border">-->
        <!--            <i></i>-->
        <!--          </span>-->
        <!--            </div>-->
        <!--            <div class="input_container input-effect">-->
        <!--                <input class="effect-21 footer-input input-with-label" type="text" placeholder=""/>-->
        <!--                <label>Email address</label>-->
        <!--                <span class="focus-border">-->
        <!--            <i></i>-->
        <!--          </span>-->
        <!--            </div>-->
        <!--            <textarea name="comment" id="comment" class="footer-input" cols="30" rows="10"-->
        <!--                      placeholder="Your message to us, feel free to talk about your project"></textarea>-->
        <!---->
        <!--            <button class="btn btn-pink contact-form-btn">Send Message</button>-->
        <!--        </form>-->
    </div>

    <div class="contact-detail">

        <?php
        $email_address = get_option('email_address');
        $phone_number = get_option('phone_number');
        ?>

        <div class="email-box">
            <p class="footer-label">Get in touch</p>
            <a href="mailto:<?php echo $email_address ?>" class="see-more"><?php echo $email_address ?></a>
        </div>
        <div class="email-box">
            <p class="footer-label">Get us a call</p>
            <a href="tel:<?php echo $phone_number ?>" class="see-more"><?php echo $phone_number ?></a>
        </div>
    </div>
</footer>
<?php
wp_footer();
?>
</body>

</html>