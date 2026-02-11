<?php
// components/section-stats-reviews.php
$stats = $content['stats_new'];
$reviews = $content['reviews'];
?>
<section class="stats-reviews-section">
    <div class="container">
        
        <!-- Stats Row -->
        <div class="stats-row flex justify-between">
            <?php foreach ($stats as $stat): ?>
                <div class="stat-item text-center">
                    <div class="stat-value"><?php echo $stat['value']; ?></div>
                    <div class="stat-label"><?php echo $stat['label']; ?></div>
                </div>
            <?php
endforeach; ?>
        </div>

        <!-- Reviews Grid -->
        <div class="reviews-grid grid grid-cols-2">
            <?php foreach ($reviews as $review): ?>
                <div class="review-card">
                    <div class="stars">★★★★★</div>
                    <p class="review-text"><?php echo $review['text']; ?></p>
                    <div class="review-author">
                        <div class="author-img"></div> <!-- Placeholder for CSS image -->
                        <div class="author-info">
                            <strong><?php echo $review['author']; ?></strong>
                            <span><?php echo $review['role']; ?></span>
                        </div>
                    </div>
                </div>
            <?php
endforeach; ?>
        </div>

    </div>
</section>
