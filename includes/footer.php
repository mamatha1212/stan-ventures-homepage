<!-- includes/footer.php -->
<footer class="site-footer-new">
    <div class="container">
        <div class="footer-cta-wrapper text-center">
            <h2 class="footer-title"><?php echo $content['footer']['title']; ?></h2>
            <p class="footer-subtitle"><?php echo $content['footer']['subtitle']; ?></p>
            
            <form id="footer-newsletter-form" class="footer-form">
                <div class="footer-input-group">
                    <input type="email" id="footer-email" placeholder="<?php echo $content['footer']['form_placeholder']; ?>" required>
                    <button type="submit" class="btn btn-white-pill"><?php echo $content['footer']['button_text']; ?></button>
                </div>
                <!-- <p class="form-note">Free strategy call included. No credit card required.</p> -->
            </form>
             <p class="form-note"><?php echo $content['footer']['note']; ?></p>
        </div>

        <div class="footer-bottom-row">
            <div class="footer-logo">
                <!-- Simple Logo SVG placeholder -->
                 <span class="logo-icon-footer">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="12" cy="12" r="10" stroke="#FF5722" stroke-width="4"/>
                    </svg>
                 </span>
                 <span class="logo-text-footer"><?php echo $content['footer']['logo_text']; ?></span>
            </div>
            
            <nav class="footer-nav">
                <?php foreach ($content['footer']['links'] as $label => $url): ?>
                    <a href="<?php echo $url; ?>"><?php echo $label; ?></a>
                <?php
endforeach; ?>
            </nav>

            <div class="footer-copyright">
                <?php echo $content['footer']['copyright']; ?>
            </div>
        </div>
    </div>
</footer>

<script src="assets/js/main.js"></script>
</body>
</html>
