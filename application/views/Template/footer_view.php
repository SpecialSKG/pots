<!-- Page Footer-->
<footer class="section footer-modern context-dark footer-modern-2">

    <div class="footer-modern-line-2">
        <div class="container">
            <div class="row row-30 align-items-center">
                <div class="col-sm-6 col-md-12 col-lg-8 col-xl-8 oh-desktop">
                    <div class="group-xmd group-sm-justify">
                        <div class="footer-modern-contacts wow slideInUp">
                            <div class="unit unit-spacing-sm align-items-center">
                                <div class="unit-left">
                                    <span class="icon icon-24 mdi mdi-phone"></span>
                                </div>
                                <div class="unit-body">
                                    <a class="phone" href="tel:+50374700643">(+503) 7470-0643</a>
                                </div>
                            </div>
                        </div>
                        <div class="footer-modern-contacts wow slideInDown">
                            <div class="unit unit-spacing-sm align-items-center">
                                <div class="unit-left">
                                    <span class="icon mdi mdi-email"></span>
                                </div>
                                <div class="unit-body">
                                    <a class="mail" href="mailto:happypots@outlook.es">happypots@outlook.es</a>
                                </div>
                            </div>
                        </div>
                        <div class="wow slideInRight">
                            <ul class="list-inline footer-social-list footer-social-list-2 footer-social-list-3">
                                <!-- <li><a class="icon mdi mdi-facebook" href="#"></a></li> -->
                                <li>
                                    <a class="icon mdi fa-instagram" href="https://www.instagram.com/happy.potsv/" target="_blank"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-modern-line-3">
        <div class="container">
            <div class="row row-10 justify-content-between">
                <div class="col-md-6"><span>San Salvador, El Salvador</span></div>
                <div class="col-md-auto">
                    <!-- Rights-->
                    <p class="rights">
                        <span>Happy Pots</span>
                        <span>&copy;</span>
                        <span class="copyright-year"></span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>
<!-- Global Mailform Output-->
<div class="snackbars" id="form-output-global"></div>
<!-- Javascript-->

<script src="<?= base_url() . 'assets/js/core.min.js'; ?>"></script>
<script src="<?= base_url() . 'assets/js/script.js'; ?>"></script>
<script src="<?= base_url() . 'assets/js/main.js'; ?>"></script>
<script src="<?= base_url('assets/js/jqueryui/jquery-ui.js') ?>"></script>
<script src="<?= base_url('assets/js/jquery.validate.min.js') ?>"></script>

<script src="<?= base_url() . 'assets/plugins/sweetalert/sweetalert2.all.js'; ?>"></script>

<!-- coded by Himic-->
<?php if ($view == 'Bienvenida') {  ?>
    <script src="<?= base_url() . 'assets/js/formulario/insert_form.js'; ?>"></script>
<?php } ?>

<?php if ($view == 'Contacto') {  ?>
    <script src="<?= base_url() . 'assets/js/formulario/insert_form.js'; ?>"></script>
<?php } ?>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-PEW8XHSY1N"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'G-PEW8XHSY1N');
</script>
<!-- GetButton.io widget -->
<script type="text/javascript">
    (function() {
        var options = {
            whatsapp: "+50374700643", // WhatsApp number
            instagram: "happy.potsv", // Instagram username
            instagram_color: "#FF318E", // Instagram button color
            call_to_action: "Envíanos un mensaje", // Call to action
            button_color: "#A8CE50", // Color of button
            position: "left", // Position may be 'right' or 'left'
            order: "whatsapp,instagram", // Order of buttons
            pre_filled_message: "Deseo mas información", // WhatsApp pre-filled message
        };
        var proto = document.location.protocol,
            host = "getbutton.io",
            url = proto + "//static." + host;
        var s = document.createElement('script');
        s.type = 'text/javascript';
        s.async = true;
        s.src = url + '/widget-send-button/js/init.js';
        s.onload = function() {
            WhWidgetSendButton.init(host, proto, options);
        };
        var x = document.getElementsByTagName('script')[0];
        x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- /GetButton.io widget -->
</body>

</html>