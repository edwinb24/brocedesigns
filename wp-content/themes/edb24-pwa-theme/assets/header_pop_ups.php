<?php 
        /* Images for Enroll Now Sticky CTA */
        $toll_free_phone_number = "(844) 908-0051 (TTY:711)";
        $toll_free_phone_number_link_format = "18449080051";
        $sticky_enroll_computer_image = "https://ik.imagekit.io/gkuqjysbk/php_and_sparrow_assets/php_sparrow_125px/PHP_icons_dkgreen_computer_screen_827_91m6LYrKIh.png";
        $sticky_enroll_envelope_image = "https://ik.imagekit.io/gkuqjysbk/php_and_sparrow_assets/php_sparrow_125px/PHP_icons_dkgreen_envelope_827_46Q8Q_-4c.png";
        $sticky_enroll_phone_image = "https://ik.imagekit.io/gkuqjysbk/php_and_sparrow_assets/php_sparrow_125px/PHP_icons_dkgreen_phone_827_U717HlZAQ7.png";
        $sticky_enroll_hand_shake_image = "https://ik.imagekit.io/gkuqjysbk/php_and_sparrow_assets/php_sparrow_125px/PHP_icons_dkgreen_handshake_827_Eid3ToGrMQ.png";
?>

<!-- Sticky CTA -->
<div class="sticky_cta span_with_pop_up" id="enroll_cta" onclick="togglePopUp(this)">
	<span>
                ENROLL NOW
        </span>
</div>

<!-- Sticky CTA Modal-->
<div id="enroll_cta_modal" class="modal_content" style="width: 550px; height: 335px; margin-left: -185px; margin-top: -220px">
        <span id="modal_close_button" onclick="togglePopUp()">×</span>
        <div class="enroll_cta_header">
                <h2>Enroll Now</h2>
        </div>
        <div class="ways_to_enroll">
                <div class="enroll_modal_computer">
                        <img 
                                src= "<?php echo $sticky_enroll_computer_image ?>"
                        />
                        <div class="outgoing_link">
                                <a href="/enroll" target="_blank">
                                        <button class="wp-block-button">Enroll Online</button>
                                </a>
                        </div>
                </div>
                <div class="enroll_modal_envelope">
                        <img 
                                src= "<?php echo $sticky_enroll_envelope_image ?>"
                        />
                        <div class="outgoing_link">
                                <a href="/enroll#enroll_by_mail" target="_blank">
                                        <button class="wp-block-button">Enroll by Mail</button>
                                </a>
                        </div>
                </div>
                <div class="enroll_modal_phone">
                        <img 
                                src= "<?php echo $sticky_enroll_phone_image ?>"
                        />
                        <p>
                                <strong>Enroll by Phone</strong>
                                <br />
                                 CALL TOLL FREE:
                                <br />
                                <a href="tel:+<?php echo $toll_free_phone_number_link_format?>"><?php echo $toll_free_phone_number ?></a>
                        </p>
                </div>
                <div class="enroll_modal_meeting">
                        <img 
                                src= "<?php echo $sticky_enroll_hand_shake_image ?>"
                        />
                        <div class="outgoing_link">
                                <a href="/attend-meeting" target="_blank">
                                        <button class="wp-block-button">ATTEND A MEETING</button>
                                </a>
                        </div>
                </div>
        </div>
</div>

<!-- Header Three External Links Modal-->
<div id="member_portal_modal" class="modal_content" style="width: 500px; height: 265px; margin-left: -200px; margin-top: -200px">
        <span id="modal_close_button" onclick="togglePopUp()">×</span>
        <h1>Attention</h1>
        <p>
                You are about to leave the <?php echo $brand_name; ?> plan site and visit our Member Portal – a website specifically created
                for current <?php echo $brand_name; ?> members.
                <br>
                <br>
                To continue to our Member Portal, click on the link below. Otherwise, close this window to remain on the <?php echo $brand_name; ?>
                website.
        </p>
        <div class="outgoing_link"><a href="https://member.phpmedicare.com" target="_blank"><button class="wp-block-button center">Visit the Member Portal</button></a></div>
</div>

<div id="producer_portal_modal" class="modal_content" style="width: 500px; height: 260px; margin-left: -200px; margin-top: -200px">
        <span id="modal_close_button" onclick="togglePopUp()">×</span>
        <h1>Attention</h1>
        <p>
                You’re about to leave the <?php echo $brand_name; ?> plan site and visit our Producer Portal – a website specifically created
                for agents and brokers representing <?php echo $brand_name; ?>.
                <br>
                <br>
                To continue to this site and view the online form, click the link below. Otherwise, close this window to remain on the current site.
        </p>
        <div class="outgoing_link"><a href="https://producer.phpmedicare.com" target="_blank"><button class="wp-block-button center">Visit the Producer Portal</button></a></div>
       
</div>
<div id="provider_portal_modal" class="modal_content" style="width: 500px; height: 285px; margin-left: -200px; margin-top: -200px">
        <span id="modal_close_button" onclick="togglePopUp()">×</span>
        <h1>Attention</h1>
        <p>
                You’re about to leave the <?php echo $brand_name; ?> plan site and visit our Provider Portal – a website specifically created
                for providers in the <?php echo $brand_name; ?> network or those interested in joining our provider network.
                <br>
                <br>
                To continue to our Provider Portal, click on the link below. Otherwise, close this window to remain on the <?php echo $brand_name; ?> plan site.    
        </p>
        <div class="outgoing_link"><a href="https://provider.phpmedicare.com" target="_blank"><button class="wp-block-button center">Visit the Provider Portal</button></a></div>
</div>