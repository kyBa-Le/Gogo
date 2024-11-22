<?php
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/event.css" type="text/css">
    <title>Hello, world!</title>
</head>
<body>
    <div class="container-fluid">
        <div class="position-fixed container-fluid">
            <?php require_once "view/components/header.php" ?>
        </div>
        <!-- banner -->
        <div class="banner" id="event-banner">
            <div id="content">
                <p>Starting at $987</p>
                <h1>Let follow the upcoming events</h1>
                <p>Enjoy your trip with Gogo website</p>
                <button id="banner-button">View Tour</button>
            </div>
        </div>

        <!-- Page title -->
        <h1 class="text-center pt-5" id="event-title">GOGO - EVENTS
            <h3 class="text-center pb-5">Immersed in the vibrant atmosphere</h3>
        </h1>

        <!-- All out-standing event -->
        <div class="container-fluid" id="event-all-events">
            <h3 class="ms-4"><b>Out-standing event</b></h3>
            <div class="container-events" id="event-cards" >
                <div class="event-card" id="card-01" style="background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSxJtOpsox_DlGFD-faHfYUDW6DRqKB7RQRqA&s');">
                    <p id="day">4 days</p>
                    <div id="event-bref-info">
                        <p id="place">Paris</p>
                        <h4 id="title"><a href="/event/{id}">Centipede Tour - Guided Arizona<br>Desert Tour by ATV</a></h4>
                        <p id="date"><?php echo date("d - m - 20y") ?></p>
                    </div>
                </div>
            </div>
            <form action="/event/all" method="get"><button type="submit" id="events-see-more">See more</button></form>
        </div>

        <!-- Event carousel -->
        <div class="container-fluid" id="event-carousel">
            <h3 class="mb-5 ms-4">Upcoming events in <?php echo date("m/y") ?></h3>
            <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="10000">
                        <img src="https://ezcloud.vn/wp-content/uploads/2024/02/tour-la-gi.webp" 
                            class="d-block w-100" alt="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSxJtOpsox_DlGFD-faHfYUDW6DRqKB7RQRqA&s">
                        <h1 id="event-name">MTP Tour<br>Happen in 2025</h1>
                        <div id="description">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum quisquam voluptate reprehenderit ab placeat exercitationem perferendis vitae excepturi unde eos enim dolore nihil, nemo iure aperiam animi ipsam eaque blanditiis.</p>
                            <button><b>Book now</b></button>
                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="10000">
                        <img src="https://muinejeeptour.com/wp-content/uploads/2018/08/tour-bau-trang-Doi-cat-bay-lang-chai-suoi-tien-52.jpg" 
                            class="d-block w-100" alt="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSxJtOpsox_DlGFD-faHfYUDW6DRqKB7RQRqA&s">
                        <h1 id="event-name">This is an event<br>Happen in November</h1>
                        <div id="description">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum quisquam voluptate reprehenderit ab placeat exercitationem perferendis vitae excepturi unde eos enim dolore nihil, nemo iure aperiam animi ipsam eaque blanditiis.</p>
                            <button><b>Book now</b></button>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <!-- Footer -->
        <?php require_once "view/components/footer.php" ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="scripts/event.js" type="module"></script>
</body>
</html>