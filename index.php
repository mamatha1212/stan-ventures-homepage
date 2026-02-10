
<?php
// Load data
$content = require_once 'data/content.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $content['metadata']['title']; ?></title>
    <meta name="description" content="<?php echo $content['metadata']['description']; ?>">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">
    
    <!-- Styles -->
    <link rel="stylesheet" href="assets/css/style.css?v=<?php echo time(); ?>">
</head>
<body>

    <?php include 'includes/header.php'; ?>

    <main>
        <?php include 'components/section-hero.php'; ?>
        
        <?php include 'components/section-services.php'; ?>
        <?php include 'components/section-stats-reviews.php'; ?>
        <?php include 'components/section-proven-results.php'; ?>
        <?php include 'components/section-process.php'; ?>
        

        <?php include 'components/section-comparison.php'; ?>
    </main>

    <?php include 'includes/footer.php'; ?>

    <script src="assets/js/main.js"></script>
</body>
</html>


    <?php include 'includes/header.php'; ?>

    <main>
        <?php include 'components/section-hero.php'; ?>
        
        <?php include 'components/section-services.php'; ?>
        <?php include 'components/section-stats-reviews.php'; ?>
        <?php include 'components/section-proven-results.php'; ?>
        <?php include 'components/section-process.php'; ?>
        

        <?php include 'components/section-comparison.php'; ?>
    </main>

    <?php include 'includes/footer.php'; ?>

    <script src="assets/js/main.js"></script>
</body>
</html>
