<?php
// components/card-case-study.php
/** @var array $case */
?>
<div class="case-card animate-enter">
    <div class="case-image">
        <!-- Placeholder image if actual image not found -->
        <div class="placeholder-img" style="background: linear-gradient(45deg, #1e293b, #0f172a);"></div>
        <div class="case-overlay">
            <?php echo $case['result']; ?>
        </div>
    </div>
    <div class="case-content">
        <h3 class="case-client"><?php echo htmlspecialchars($case['client']); ?></h3>
        <a href="#" class="case-link">Read Story ➝</a>
    </div>
</div>
