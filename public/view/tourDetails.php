<?php ?>
<!doctype html>
<html lang="en">
<head>
    <base href="/">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/cusines.css">
    <link rel="stylesheet" href="css/tourDetails.css">
    <title>Tour Details</title>
</head>
<body>
    <?php require_once 'view/components/header.php' ?>
    <div class="container-fluid" id="tour-details-container">
        <img id="tour-image" src="https://static.vinwonders.com/production/what-is-hanoi-famous-for-thumb.jpg">
        <div class="tour-information" id="container-tour-information">

        </div>
        <h1 class="text-center">Cuisines in tour</h1>
        <div class="tour-information" id="cuisine-in-tour-container">
            <div class="cuisine-cards" id="cuisine-cards">

            </div>
        </div>
        <h1 class="text-center">Events in tour</h1>
        <div class="tour-information"></div>
    </div>
    <?php require_once 'view/components/footer.php' ?>
    <script type="module" src="scripts/tourDetails.js"></script>
</body>
</html>
