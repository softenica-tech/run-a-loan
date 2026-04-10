<!DOCTYPE html>
<html lang="en">
<head>
    <?php include ('includes/css.php') ?>
    <title>Request a Demo</title>
</head>
<body class="request-demo-page">
    <?php include ('includes/header.php') ?>

    <main>
        <section class="request-demo-hero">
            <div class="container">
                <div class="request-demo-hero-inner">
                    <h1>Request a Demo</h1>
                </div>
            </div>
        </section>

        <section class="request-demo-intro">
            <div class="container">
                <div class="request-demo-intro-copy">
                    <h2>Get In Touch</h2>
                    <p>
                        We will send you through some information around the pricing and details of loan management system. We will then arrange for an on-line demo to take you through the system and answer any questions you might have.
                    </p>
                    <span>For the demo all you will need is a computer with an internet connection and a browser.</span>
                </div>

                <div class="request-demo-office">
                    <h3>Our Head Office</h3>
                    <div class="request-demo-office-grid">
                        <article class="request-demo-office-card">
                            <img src="images/request-demo/Phone.svg" alt="" class="request-demo-office-icon">
                            <p>+27 (11) 568 5174</p>
                        </article>

                        <article class="request-demo-office-card">
                            <img src="images/request-demo/Mail.svg" alt="" class="request-demo-office-icon">
                            <p>info@runaloan.com</p>
                        </article>

                        <article class="request-demo-office-card">
                            <img src="images/request-demo/Location.svg" alt="" class="request-demo-office-icon">
                            <p>1018 Fredenharry Drive, Johannesburg, South Africa</p>
                        </article>

                        <article class="request-demo-office-card">
                            <h4>Follow Us</h4>
                            <div class="request-demo-socials">
                                <a href="#" aria-label="LinkedIn"><img src="images/request-demo/Linked In.svg" alt=""></a>
                                <a href="#" aria-label="Facebook"><img src="images/request-demo/facebook.svg" alt=""></a>
                                <a href="#" aria-label="X"><img src="images/request-demo/X.svg" alt=""></a>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <section class="request-demo-contact">
            <div class="container">
                <div class="request-demo-contact-grid">
                    <div class="request-demo-form-wrap">
                        <h2>Fantastic, Let's Get Started.</h2>

                        <form class="request-demo-form">
                            <div class="request-demo-field">
                                <input type="text" name="full_name" placeholder="Full Name *" required>
                            </div>

                            <div class="request-demo-field request-demo-select">
                                <select name="country" aria-label="Your Country">
                                    <option value="" selected>Your Country</option>
                                    <option value="south-africa">South Africa</option>
                                    <option value="botswana">Botswana</option>
                                    <option value="namibia">Namibia</option>
                                    <option value="zambia">Zambia</option>
                                </select>
                            </div>

                            <div class="request-demo-field">
                                <input type="tel" name="contact_number" placeholder="Contact Number">
                            </div>

                            <div class="request-demo-field">
                                <input type="email" name="email_address" placeholder="Email Address *" required>
                            </div>

                            <div class="request-demo-field">
                                <textarea name="message" rows="7" placeholder="Message (Optional)"></textarea>
                            </div>

                            <button type="submit" class="btn btn-site btn-site-alt">
                                Send Message
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                        <path d="M3.43442 0C3.12087 0 2.82015 0.124563 2.59843 0.346278C2.37672 0.567993 2.25216 0.868715 2.25216 1.18227C2.25216 1.49582 2.37672 1.79654 2.59843 2.01826C2.82015 2.23997 3.12087 2.36454 3.43442 2.36454H13.9645L0.376288 15.9528C0.260126 16.0609 0.166963 16.1916 0.102348 16.3364C0.0377332 16.4815 0.00297474 16.6382 0.000184589 16.7969C-0.00262133 16.9556 0.026588 17.1133 0.0860482 17.2605C0.145508 17.4077 0.234005 17.5414 0.346274 17.6536C0.458542 17.7659 0.592265 17.8545 0.739481 17.9139C0.886697 17.9733 1.04438 18.0026 1.20312 17.9998C1.36186 17.997 1.51842 17.9623 1.66345 17.8977C1.80847 17.833 1.939 17.7399 2.04723 17.6237L15.6355 4.03548V14.5656C15.6355 14.8791 15.76 15.1799 15.9818 15.4015C16.2034 15.6233 16.5042 15.7478 16.8177 15.7478C17.1313 15.7478 17.432 15.6233 17.6537 15.4015C17.8755 15.1799 18 14.8791 18 14.5656V1.18227C17.9992 1.02511 17.9671 0.869708 17.9054 0.725125C17.8197 0.523571 17.6802 0.349399 17.5023 0.221557C17.3244 0.0937139 17.1149 0.0170877 16.8965 0H3.43442Z" fill="#11111C"/>
                                    </svg>
                                </span>
                            </button>
                        </form>
                    </div>

                    <div class="request-demo-map-wrap">
                        <iframe
                            title="Office Location"
                            src="https://www.google.com/maps?q=Johannesburg%2C%20South%20Africa&z=13&output=embed"
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"
                            allowfullscreen>
                        </iframe>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <?php include ('includes/footer.php') ?>
    <?php include ('includes/js.php') ?>
</body>
</html>
