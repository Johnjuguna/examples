

<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 footer-info">
                    <img src="img/logo.png" alt="TheEventApp">
                    <p>Our platform revolutionizes event management by
                        enabling organizers to seamlessly create, schedule,
                        and share event details with attendees. With real-time updates
                        and an intuitive dashboard, users can stay informed about upcoming events,
                        track schedules, and easily locate venues through an integrated mapping system.
                        Designed for Music & Entertainment, Educational, and Social & Community events,
                        the system ensures
                        a smooth event experience with instant
                        push notifications and an interactive calendar view.</p>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="fa fa-angle-right"></i> <a href="#home">Home</a></li>
                        <li><i class="fa fa-angle-right"></i> <a href="#about">About us</a></li>
                        <li><i class="fa fa-angle-right"></i> <a href="#">service</a></li>

                        <li><i class="fa fa-angle-right"></i> <a href="#">Terms of service</a></li>
                        <li><i class="fa fa-angle-right"></i> <a href="#">Privacy policy</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="fa fa-angle-right"></i> <a href="#home">Home</a></li>
                        <li><i class="fa fa-angle-right"></i> <a href="#about">About us</a></li>
                        <li><i class="fa fa-angle-right"></i> <a href="#service">Services</a></li>
                        <li><i class="fa fa-angle-right"></i> <a href="#">Terms of service</a>
                            <script>
                                const { value: accept } = await Swal.fire({
                                    title: "Terms and conditions",
                                    input: "checkbox",
                                    inputValue: 1,
                                    inputPlaceholder: `
    I agree with the terms and conditions
  `,
                                    confirmButtonText: `
    Continue&nbsp;<i class="fa fa-arrow-right"></i>
  `,
                                    inputValidator: (result) => {
                                        return !result && "You need to agree with T&C";
                                    }
                                });
                                if (accept) {
                                    Swal.fire("You agreed with T&C :)");
                                }
                            </script>
                        </li>

                        <li><i class="fa fa-angle-right"></i> <a href="#">Privacy policy</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-contact">
                    <h4>Contact Us</h4>
                    <p>
                        A108 Central Business District, <br>
                       Nairobi Kenya<br>
                       <br>
                        <strong>Phone:</strong> +254 797489847<br>
                        <strong>Email:</strong> john@eventapp.com<br>
                    </p>

                    <div class="social-links">
                        <a href="https://x.com/Jn6028293John" class="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="https://www.facebook.com/profile.php?id=100083614967712" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="https://www.instagram.com/nhfozdiizgdji/" class="instagram"><i class="fa fa-instagram"></i></a>
                        <a href="#" class="tiktok"><i class="fa fa-tiktok"></i></a>

                        <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <div class="container"  style="color: greenyellow;">
        <div class="copyright">
            &copy; Copyright <strong>TheEventApp</strong>. All Rights Reserved
        </div>
        <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=TheEvent
            -->
            Designed by <a href="https://www.facebook.com/profile.php?id=100083614967712/">john</a>
        </div>
    </div>
</footer><!-- #footer -->
