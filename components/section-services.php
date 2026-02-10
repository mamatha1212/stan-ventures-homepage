<?php
// components/section-services.php
$services = $content['services'];
?>
<section id="services" class="services-section-new">
    <div class="container">
        <div class="section-header-left">
            <div class="header-text">
                <h2 class="section-title-large">Our SEO Services That <br><span class="text-blue">Drive Scalable Growth</span></h2>
                <p class="section-subtitle-new">Flexible, white-label, and built for long-term results.</p>
            </div>
            <a href="#" class="btn btn-outline-dark">View Full Catalog</a>
        </div>
        
        <div class="services-grid-new grid grid-cols-3">
            <?php foreach ($services as $service): ?>
                <?php include 'components/card-service.php'; ?>
            <?php
endforeach; ?>
        </div>
    </div>
</section>
