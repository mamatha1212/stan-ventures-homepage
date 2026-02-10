<?php
// components/section-proven-results.php
$results = $content['proven_results'];
?>
<section class="proven-results-section">
    <div class="container">
        <div class="section-header-left">
            <h2 class="section-title-large text-dark">Proven Results</h2>
            <p class="section-subtitle-new">Data-backed case studies from our partner agencies.</p>
        </div>

        <div class="results-grid grid grid-cols-3">
            <?php foreach ($results as $result): ?>
                <div class="result-card">
                    <div class="result-image" style="background-image: url('<?php echo $result['image']; ?>'); background-size: cover; background-position: center;">
                        <span class="result-tag"><?php echo $result['tag']; ?></span>
                    </div>
                    <div class="result-content">
                        <div class="result-info">
                            <h3 class="result-title"><?php echo htmlspecialchars($result['title']); ?></h3>
                            <p class="result-desc"><?php echo htmlspecialchars($result['desc']); ?></p>
                        </div>
                        <div class="result-stat-box">
                            <div class="result-stat-value"><?php echo $result['stat_value']; ?></div>
                            <div class="result-stat-label"><?php echo $result['stat_label']; ?></div>
                        </div>
                    </div>
                </div>
            <?php
endforeach; ?>
        </div>
    </div>
</section>
