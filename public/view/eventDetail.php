<?php ?>
<!doctype html>
<!doctype html>
<html lang="en">
<head>
    <base href="/">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/eventDetail.css">
    <title>Event Detail</title>
</head>
<body>
<div class="container-fluid">
    <!--  Header  -->
    <?php require_once "components/header.php"?>

    <div id="event-container">

    </div>
    <div class="container d-flex justify-content-between align-items-center" id="booking-section">
        <p class="fw-bold" style="color: white">Let's join us to get more joyful moment</p>
        <button id="event-book-now">Book now</button>
    </div>

    <!--  Footer  -->
    <?php require_once "components/footer.php" ?>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="scripts/eventDetail.js" type="module"></script>
</body>
</html>
