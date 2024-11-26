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
    <link rel="stylesheet" href="css/event.css" type="text/css">
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
        
        <section>
            <div class="culture-dishes destination-section">
                <!-- Section Title -->
                <h2 class="text-center mb-4">Featured Dishes</h2>
            
                <!-- Dishes Grid -->
                <div class="row g-4" id="culture-dishes-section">
                    <!-- Dish Item -->
                    <div class="col-md-4">
                        <div class="card h-100 shadow-sm">
                            <img src="https://kvi.vn/Uploads/786/images/file_restaurant_photo_nfos_16608-a5edadfe-220818150324.jpg" alt="Phở" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">Phở</h5>
                                <p class="card-text text-muted">
                                    Phở is one of Vietnam’s most iconic dishes. It consists of a rich broth, tender slices of beef or chicken, and soft rice noodles, topped with herbs and lime. This dish is a must-try for anyone visiting Vietnam.
                                </p>
                            </div>
                        </div>
                    </div>
            
                    <!-- Dish Item -->
                    <div class="col-md-4">
                        <div class="card h-100 shadow-sm">
                            <img src="https://example.com/dish2-image.jpg" alt="Bún Chả" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title">Bún Chả</h5>
                                <p class="card-text text-muted">
                                    Bún Chả is a beloved dish of Hanoi, consisting of grilled pork served with rice noodles, fresh herbs, and a tangy dipping sauce. It's a flavorful combination that reflects the local culinary tradition.
                                </p>
                            </div>
                        </div>
                    </div>
            
                    <!-- Dish Item -->
                    <div class="col-md-4">
                        <div class="card h-100 shadow-sm">
                            <img src="https://example.com/dish3-image.jpg" alt="Chả Cá" class="card-img-top" style="height: 200px; object-fit: cover;">
                            <div class="card-body">
                                <h5 class="card-title">Chả Cá</h5>
                                <p class="card-text text-muted">
                                    Chả Cá is a turmeric-infused grilled fish dish, served with vermicelli noodles, fresh herbs, peanuts, and a savory dipping sauce. A signature dish from Hanoi, it’s packed with vibrant flavors.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>                                  
        </section>

        <section>
            <div class="culture-events destination-section">
                <!-- Section Title -->
                <h2 class="text-center mb-4">Upcoming Events</h2>

                <!-- Events List -->
                <div class="row g-4">
                    <!-- Các thẻ sự kiện sẽ được thêm vào đây -->
                </div>
            </div>            
        </section>

        <section>
            <div class="culture-tours destination-section">
                <!-- Section Title -->
                <h2 class="text-center mb-4">Available Tours</h2>

                <!-- Tours List -->
                <div class="row g-4">
                    <!-- Các thẻ tour sẽ được thêm vào đây -->
                </div>
            </div>            
        </section>

        <section>
            <div class="culture-reviews destination-section">
                <!-- Section Title -->
                <h2 class="text-center mb-4">User Reviews</h2>

                <!-- Reviews Grid -->
                <div class="row g-3">
                    <!-- Các thẻ review sẽ được thêm vào đây -->
                </div>
            </div>            
        </section>

        <!-- Footer -->
        <?php require_once "view/components/footer.php" ?>
   </main>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/scripts/cultureDetail.js" type="module"></script>
</body>
</html>
