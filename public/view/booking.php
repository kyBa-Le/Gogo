<?php
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/booking.css">
    <title>Document</title>
</head>
<body>
    <?php require_once 'view/components/header.php' ?>
    <h1 class="text-center mt-5">Booking history</h1>
    <div class="container-fluid" id="booking-info-container">
        <div class="side-bar" id="side-bar">
            <h2>Detailed information</h2>
            <div id="detailed-info">
                <p style="margin-top: 50%; font-style: italic">There is no booking selected</p>
            </div>
        </div>
        <div class="main-content" id="main-content">
        </div>
    </div>
    <div class="pt-lg-5"></div>
    <?php require_once 'view/components/footer.php' ?>
    <script src="scripts/booking.js" type="module"></script>
</body>
</html>
