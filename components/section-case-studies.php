<?php
// components/section-case-studies.php
$case_studies = $content['case_studies'];
?>
<section id="case-studies" class="case-studies-section">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2 class="section-title-large text-white">Success Stories</h2>
            <p class="section-subtitle-new text-white-50">See how we help our partners grow.</p>
        </div>

        <div class="grid grid-cols-2 gap-md">
            <?php foreach ($case_studies as $study): ?>
                <div class="case-card">
                    <div class="case-image">
                        <!-- In a real scenario, use actual images. Using placeholders/CSS for now -->
                        <div class="placeholder-img" style="background: url('<?php echo $study['image']; ?>') center/cover no-repeat, #1e293b;"></div>
                        <div class="case-overlay">
                            <?php echo $study['result']; ?>
                        </div>
                    </div>
                    <div class="case-content">
                        <div>
                            <h3 class="case-client"><?php echo $study['client']; ?></h3>
                        </div>
                        <a href="#" class="case-link">Read Case Study <span class="arrow">→</span></a>
                    </div>
                </div>
            <?php
endforeach; ?>
        </div>
        
        <div class="text-center mt-5">
             <a href="#" class="btn btn-primary">View All Case Studies</a>
        </div>
    </div>
</section>
