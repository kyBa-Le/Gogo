<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Your World of Joy</title>
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <main class="main-app">
        <?php include 'components/header.php'; ?>
        <section class="hero-section">
            <div class="hero-content">
                <h1 class="hero-title">Your world of joy</h1>
                <p class="hero-description">From local escapes to far-flung adventures, find what makes you happy anytime, anywhere</p>

                <div class="search-container">
                    <form class="hero-search-form" action="/search" method="get">
                        <div class="price-search">
                            <label class="checkbox-label">
                                <input type="checkbox" id="search-by-price" name="search-by-price" title="Search by price">
                                <span>
                                    <div class="search-attribute" style="left:-41px; position:relative">Price</div>
                                    <select id="price" name="price" class="search-select" title="Select a price range" aria-label="Price selection">
                                        <option value="">Search by price</option>
                                        <option value="100">100</option>
                                        <option value="200">200</option>
                                        <option value="300">300</option>
                                        <option value="400">400</option>
                                    </select>
                                </span>
                            </label>
                        </div>
                        <div class="when-search">
                            <label class="checkbox-label">
                                <input type="checkbox" id="search-by-date" name="search-by-date" title="Search by date">
                                <span>
                                    <div class="search-attribute" style="left:-41px; position:relative">When</div>
                                    <input type="date" class="search-input" id="when" name="when" required title="Select a date" aria-label="Date selection">
                                </span>
                            </label>
                        </div>
                        <button type="submit" class="btn btn-primary hero-btn" title="Search for tours">Search</button>
                    </form>
                </div>
            </div>
        </section>

        <!-- Destination -->
        <section class="destination-section">
            <div class="destination-header">
                <h4 class="destination-title">Trending destinations</h4>
                <a href="#" onclick="seeAll()">
                    See all
                </a>
            </div>
            <div class="destinations-content">
                <div class="destinations">
                    <img src="../assets/images/Paris.png" alt="Paris">
                    <p>
                        Paris
                    </p>
                    <p>
                        100+ Tours
                    </p>
                </div>
                <div class="destinations">
                    <img src="../assets/images/Bali.png" alt="Paris">
                    <p>
                        Bali
                    </p>
                    <p>
                        600+ Tours
                    </p>
                </div>
                <div class="destinations">
                    <img src="../assets/images/BangKok.png" alt="Paris">
                    <p>
                        Bangkok
                    </p>
                    <p>
                        100+ Tours
                    </p>
                </div>
                <div class="destinations">
                    <img src="../assets/images/Cam.png" alt="Paris">
                    <p>
                        Cappadocia
                    </p>
                    <p>
                        900+ Tours
                    </p>
                </div>
                <div class="destinations">
                    <img src="../assets/images/Phuket.png" alt="Paris">
                    <p>
                        Phuket
                    </p>
                    <p>
                        200+ Tours
                    </p>
                </div>
                <div class="destinations">
                    <img src="../assets/images/Roma.png" alt="Paris">
                    <p>
                        Roma
                    </p>
                    <p>
                        400+ Tours
                    </p>
                </div>
                <div class="destinations">
                    <img src="../assets/images/Singapore.png" alt="Paris">
                    <p>
                        Singapore
                    </p>
                    <p>
                        300+ Tours
                    </p>
                </div>
                <div class="destinations">
                    <img src="../assets/images/Tokyo.png" alt="Paris">
                    <p>
                        Tokyo
                    </p>
                    <p>
                        700+ Tours
                    </p>
                </div>  
            </div>
        </section>

        <!-- Popular Tours Section -->
        <?php include 'popular_tour.php'; ?>
        <?php include 'popular_things_to_do.php'; ?>
        <?php include 'components/footer.php'; ?>
    </main>
</body>
</html>