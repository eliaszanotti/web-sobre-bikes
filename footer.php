<footer>
        <div class="footer-content">
            <div class="footer-left">
                <h1 class="footer-title">Contact</h1>
                <div class="footer-contact">
                    <div class="footer-contact-left">
                        <h2 class="footer-contact-title">Adresse</h2>
                        <p class="footer-contact-text">Rue de la paix 75000 Paris</p>
                    </div>
                    <div class="footer-contact-right">
                        <h2 class="footer-contact-title">Téléphone</h2>
                        <p class="footer-contact-text">01 23 45 67 89</p>
                    </div>
                </div>
            </div>
            <div class="footer-right">
                <h1 class="footer-title">Réseaux sociaux</h1>
                <div class="footer-social">
                    <a href="https://www.facebook.com/" class="footer-social-link"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/" class="footer-social-link"><i class="fab fa-instagram"></i></a>
                    <a href="https://twitter.com/" class="footer-social-link"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <p class="footer-bottom-text">© 2020 - Tous droits réservés - <a href="<?php echo get_permalink( get_page_by_title( 'Mentions légales' ) ) ?>" class="footer-bottom-link">Mentions légales</a></p>
        </div>    
</footer>
    
    <?php wp_footer() ?>
</body>
</html>