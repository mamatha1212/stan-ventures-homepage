<?php
// components/section-hero.php
$hero = $content['hero'];
?>
<section class="hero-section">
    <div class="container hero-container">
        
        <div class="hero-content">
            <div class="badge-pill">
                <span class="dot-green"></span> 
                <?php echo $hero['badge']; ?>
            </div>
            
            <h1 class="hero-title animate-enter">
                SEO that scales <br><span class="text-gradient-hero">on autopilot.</span>
            </h1>
            
            <p class="hero-desc animate-enter" style="animation-delay: 0.1s;">
                <?php echo $hero['description']; ?>
            </p>
            
            <div class="hero-actions animate-enter" style="animation-delay: 0.2s;">
                <a href="<?php echo $hero['cta_primary']['url']; ?>" class="btn btn-white icon-arrow">
                    <?php echo $hero['cta_primary']['text']; ?> ➝
                </a>
                <a href="<?php echo $hero['cta_secondary']['url']; ?>" class="btn btn-outline icon-play">
                    <?php echo $hero['cta_secondary']['text']; ?>
                </a>
            </div>
        </div>

        <!-- Dashboard Graph Visual -->
        <div class="hero-visual animate-enter" style="animation-delay: 0.4s;">
            <!-- Main Chart Card -->
            <div class="visual-grid">
                <div class="chart-card">
                    <!-- Header dots -->
                    <div class="card-header">
                        <div class="header-dot"></div>
                        <div class="header-dot"></div>
                    </div>
                    
                    <!-- Bar Chart -->
                    <div class="chart-container">
                        <div class="chart-bars">
                            <div class="bar" style="height: 30%"></div>
                            <div class="bar" style="height: 45%"></div>
                            <div class="bar" style="height: 35%"></div>
                            <div class="bar" style="height: 60%"></div>
                            <div class="bar" style="height: 40%"></div>
                            <div class="bar" style="height: 75%"></div>
                            <div class="bar" style="height: 55%"></div>
                            <div class="bar" style="height: 85%"></div>
                            <div class="bar" style="height: 45%"></div>
                            <div class="bar" style="height: 70%"></div>
                        </div>
                        <div class="chart-footer">
                            <div class="footer-line"></div>
                            <div class="growth-label">+124%</div>
                        </div>
                    </div>
                </div>

                <!-- Right Side Stats Column -->
                <div class="stats-column">
                    <!-- Top Card: Keywords -->
                    <div class="stat-card purple-theme">
                        <div class="icon-box-small purple">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" class="icon-svg">
                                <path d="M12 20V10M18 20V4M6 20v-4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="stat-content">
                            <div class="stat-value">2,543</div>
                            <div class="stat-label">Keywords Ranked</div>
                        </div>
                    </div>

                    <!-- Bottom Card: Traffic Growth -->
                    <div class="stat-card green-theme">
                        <div class="icon-box-small green">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" class="icon-svg">
                                <path d="M7 17L17 7M17 7H7M17 7V17" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <div class="stat-content">
                            <div class="stat-value">485%</div>
                            <div class="stat-label">Traffic Growth</div>
                        </div>
                    </div>
                </div>

                <!-- Floating Badge: Organic Traffic (Overlapping) -->
                <div class="floating-badge">
                    <div class="badge-icon green">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none">
                             <path d="M7 17L17 7M17 7H7M17 7V17" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <div class="badge-content">
                        <div class="badge-label">Organic Traffic</div>
                        <div class="badge-value">+12,405</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Trusted By Logos -->
        <div class="trusted-by">
            <p>Trusted by Industry-Leading Agencies & Fast-Growing Brands</p>
            <div class="marquee-container">
                <div class="marquee-content">
                    <!-- First Set -->
                    <?php for ($i = 0; $i < 4; $i++): ?>
                        <?php foreach ($content['partners'] as $partner): ?>
                            <div class="partner-logo">
                                <img src="<?php echo $partner['logo']; ?>" alt="<?php echo $partner['name']; ?>">
                            </div> 
                        <?php
    endforeach; ?>
                    <?php
endfor; ?>
                    
                    <!-- Duplicate Set for Seamless Scrolling -->
                    <?php for ($i = 0; $i < 4; $i++): ?>
                        <?php foreach ($content['partners'] as $partner): ?>
                            <div class="partner-logo">
                                <img src="<?php echo $partner['logo']; ?>" alt="<?php echo $partner['name']; ?>">
                            </div> 
                        <?php
    endforeach; ?>
                    <?php
endfor; ?>
                </div>
            </div>
        </div>

    </div>
</section>
