<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <base href="/">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cultural Details</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/cultureDetail.css">
    <link rel="stylesheet" href="css/culture.css">
    <link rel="stylesheet" href="css/cultureDetail.css">
</head>
<body>
   <main>
        <!-- Header -->
        <div class="position-fixed container-fluid">
            <?php require_once "view/components/header.php" ?>
        </div>

        <section id="destination-section">
            <!-- Banner -->
            <!-- Description -->
        </section>

        <div class="container d-flex justify-content-between align-items-center" id="booking-section">
            <p class="fw-bold message" style="color: white">Let's join us to get more joyful moment</p>
            <button id="culture-book-now">Find tour</button>
        </div>

        <!-- Footer -->
        <?php require_once "view/components/footer.php" ?>
   </main>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/scripts/cultureDetail.js" type="module"></script>
</body>
</html>
