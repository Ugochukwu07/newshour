    <!-- footer -->
    <div class="footer">
        <div class="footer-content">
            <div class="footer-section about">
            <a href=<?php echo BASE_URL . "/index.php";?>>
                <h1 class="logo-text"><span>News</span>Hour</h1></a>
                <p>NewsHour is on of the top blog in the whole world in general. As it was ranked #1 by BBC on 52th Dec. 2098 in Middle East and The West. This blog is for sale. Contact Ekwueme Ugochukwu using the below email. Thanks for viewing.
                </p>
                <div class="contact">
                    <span><i class="fas fa-phone"></i> &nbsp; +234-814-344-0606</span>
                    <span><i class="fas fa-envelope"></i> &nbsp; ekwuemeugochukwu83@gmail.com</span>
                </div>
                <div class="social">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="footer-section quick">
                <h2>Quick Links</h2>
                <br>
                <ul>
                    <a href="#">
                        <li>Events</li>
                    </a>
                    <a href="#">
                        <li>Teams</li>
                    </a>
                    <a href="#">
                        <li>Mentors</li>
                    </a>
                    <a href="#">
                        <li>Gallery</li>
                    </a>
                    <a href="#">
                        <li>Terms & Conditions</li>
                    </a>
                </ul>
            </div>
            <div class="footer-section contact-form">
                <h2>Contact Us</h2>
                <br>
                <form action="<?php echo BASE_URL . '/index.php'; ?>" method="post">
                    <input type="email" name="email" value="<?php echo $email;?>" class="text-input contact-input" placeholder="Your email address">
                    <textarea row="4" name="message" value="<?php echo $message;?>" class="text-input contact-input" placeholder="Your message..."></textarea>
                    <button type="submit" class="btn btn-big contact-btn" name="complain"><i class="fas fa-envelope"></i>Send</button>
                </form>
            </div>
        </div>
        <div class=" footer-bottom">
            <i class="fas fa-copyright    "></i> newshour.com | Designed By Ekwueme Ugochukwu
        </div>
    </div>
    <!-- // footer -->