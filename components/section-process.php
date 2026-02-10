<?php
// components/section-process.php
$process_steps = $content['process'];
?>
<section class="process-section">
    <div class="container">
        <div class="section-header-left">
            <h2 class="section-title-large text-dark">Simple Process<span class="text-orange">.</span><br>Powerful Results<span class="text-orange">.</span></h2>
        </div>

        <div class="process-grid grid grid-cols-3">
            <?php foreach ($process_steps as $step): ?>
                <div class="process-card">
                    <div class="step-number"><?php echo $step['step']; ?></div>
                    <h3 class="step-title"><?php echo htmlspecialchars($step['title']); ?></h3>
                    <p class="step-desc"><?php echo htmlspecialchars($step['description']); ?></p>
                </div>
            <?php
endforeach; ?>
        </div>
    </div>
</section>
