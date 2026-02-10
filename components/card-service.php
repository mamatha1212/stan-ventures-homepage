<?php
// components/card-service.php
/** @var array $service */
?>
<div class="service-card-new animate-enter">
    <div class="card-icon-wrapper">
        <div class="service-icon-new icon-<?php echo $service['icon']; ?>"></div>
        <!-- Decorative Circle -->
        <div class="decorative-circle"></div>
    </div>
    
    <h3 class="service-title-new"><?php echo htmlspecialchars($service['title']); ?></h3>
    <p class="service-desc-new"><?php echo htmlspecialchars($service['description']); ?></p>
    
    <a href="#" class="service-link-new">
        <?php echo $service['link_text']; ?> <span class="arrow">→</span>
    </a>
</div>
