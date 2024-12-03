<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Your World of Joy</title>
    <link rel="icon" href="../favicon.ico" type="image/x-icon">
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
                    <form class="hero-search-form" action="/search" method="get" onsubmit="processSearchForm(event)">
                        <div class="price-search">
                            <label class="checkbox-label">
                                <input type="checkbox" id="search-by-price" name="filter" title="Search by price">
                                <span>
                                    <div class="search-attribute" style="left:-41px; position:relative">Price</div>
                                    <select id="price" name="price" class="search-select" title="Select a price range" aria-label="Price selection">
                                        <option value="">Search by price</option>
                                        <option value="1080000">1.080.000 VND</option>
                                        <option value="3320000">3.320.000 VND</option>
                                        <option value="5620000">5.620.000 VND</option>
                                        <option value="7799000">7.799.000 VND</option>
                                    </select>
                                </span>
                            </label>
                        </div>
                        <div class="when-search">
                            <label class="checkbox-label">
                                <input type="checkbox" id="search-by-date" name="filter" title="Search by date">
                                <span>
                                    <div class="search-attribute" style="left:-41px; position:relative">When</div>
                                    <input type="date" class="search-input" id="when" name="when" title="Select a date" aria-label="Date selection">
                                </span>
                            </label>
                        </div>
                        <button type="submit" class="custom-btn custom-btn-primary hero-btn" title="Search for tours">Search</button>
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

        <section class="popular_tour-section">
            <div class="popular_tour-header">
                <h4 class="popular_title">
                    Find Popular Tours
                </h4>
                <a href="#">
                    See all
                </a>
            </div>
            <div class="card-grid">
                <div class="card">
                    <img alt="Tour image of a person riding an ATV in the Arizona desert" src="../assets/images/Tour_1.png" />
                    <div class="card-content">
                        <p>
                            Paris, France
                        </p>
                        <h3>
                            Centipede Tour - Guided Arizona Desert Tour by ATV
                        </h3>
                        <p class="rating">
                            <i class="fas fa-star"></i> 4.8 (243)
                        </p>
                        <div class="details">
                            <p>
                                4 days
                            </p>
                            <p class="price">
                                From $189.25
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img alt="Tour image of Molokini and Turtle Town in New York" src="../assets/images/tour.png" />
                    <div class="card-content">
                        <p>
                            New York, USA
                        </p>
                        <h3>
                            Molokini and Turtle Town Snorkeling Adventure Aboard
                        </h3>
                        <p class="rating">
                            <i class="fas fa-star"></i> 4.8 (243)
                        </p>
                        <div class="details">
                            <p>
                                4 days
                            </p>
                            <p class="price">
                                From $225
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img alt="Tour image of Westminster Abbey in London" src="../assets/images/tour_3.png" />
                    <div class="card-content">
                        <p>
                            London, UK
                        </p>
                        <h3>
                            Westminster Walking Tour &amp; Westminster Abbey Entry
                        </h3>
                        <p class="rating">
                            <i class="fas fa-star"></i> 4.8 (243)
                        </p>
                        <div class="details">
                            <p>
                                4 days
                            </p>
                            <p class="price">
                                From $943
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img alt="Tour image of Circle Island in New York" src="../assets/images/tour_4.png" />
                    <div class="card-content">
                        <p>
                            New York, USA
                        </p>
                        <h3>
                            All Inclusive Ultimate Circle Island Day Tour with Lunch
                        </h3>
                        <p class="rating">
                            <i class="fas fa-star"></i> 4.8 (243)
                        </p>
                        <div class="details">
                            <p>
                                4 days
                            </p>
                            <p class="price">
                                From $771
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img alt="Tour image of Space Center Houston in Paris" src="../assets/images/tour5.png" />
                    <div class="card-content">
                        <p>
                            Paris, France
                        </p>
                        <h3>
                            Space Center Houston Admission Ticket
                        </h3>
                        <p class="rating">
                            <i class="fas fa-star"></i> 4.8 (243)
                        </p>
                        <div class="details">
                            <p>
                                4 days
                            </p>
                            <p class="price">
                                From $189.25
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img alt="Tour image of Shell Key Preserve in New York" src="../assets/images/tour_6.png" />
                    <div class="card-content">
                        <p>
                            New York, USA
                        </p>
                        <h3>
                            Clear Kayak Tour of Shell Key Preserve and Tampa Bay Area
                        </h3>
                        <p class="rating">
                            <i class="fas fa-star"></i> 4.8 (243)
                        </p>
                        <div class="details">
                            <p>
                                4 days
                            </p>
                            <p class="price">
                                From $225
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img alt="Tour image of colorful rock formations in London" src="../assets/images/tour_7.png" />
                    <div class="card-content">
                        <p>
                            London, UK
                        </p>
                        <h3>
                            History and Hauntings of Salem Guided Walking Tour
                        </h3>
                        <p class="rating">
                            <i class="fas fa-star"></i> 4.8 (243)
                        </p>
                        <div class="details">
                            <p>
                                4 days
                            </p>
                            <p class="price">
                                From $943
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img alt="Tour image of colorful rock formations in London" src="../assets/images/tour_7.png" />
                    <div class="card-content">
                        <p>
                            London, UK
                        </p>
                        <h3>
                            History and Hauntings of Salem Guided Walking Tour
                        </h3>
                        <p class="rating">
                            <i class="fas fa-star"></i> 4.8 (243)
                        </p>
                        <div class="details">
                            <p>
                                4 days
                            </p>
                            <p class="price">
                                From $943
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <!--section popular_things_to_do -->

        <div class="popular_section">
            <div class="popular_header">
                <h4 class="popular_title">Find Popular Tours</h4>
                <a href="#">See all</a>
            </div>
            <div class="container">
                <div class="column column-1">
                    <img src="../assets/images/Link.png" alt="Image 1">
                    <img src="../assets/images/rows2.png" alt="Image 2">
                </div>

                <div class="column column-2">
                    <img src="../assets/images/column.png" alt="Image 3">
                </div>

                <div class="column column-3">
                    <img class="top" src="../assets/images/island.png" alt="Image 4">
                    <div class="bottom">
                        <img src="../assets/images/restaurant.png" alt="Image 5">
                        <img src="../assets/images/rock.png" alt="Image 6">
                    </div>
                </div>
            </div>
        </div>

        <!-- Top trending -->
        <section class="popular_tour-section top-trending">
            <div class="popular_tour-header">
                <h4 class="popular_title">
                    Top trending
                </h4>
                <a href="#">
                    See all
                </a>
            </div>
            <div class="card-grid">
                <div class="card">
                    <img alt="Tour image of a person riding an ATV in the Arizona desert" src="../assets/images/Tour_1.png" />
                    <div class="card-content">
                        <p>
                            Paris, France
                        </p>
                        <h3>
                            Centipede Tour - Guided Arizona Desert Tour by ATV
                        </h3>
                        <p class="rating">
                            <i class="fas fa-star"></i> 4.8 (243)
                        </p>
                        <div class="details">
                            <p>
                                4 days
                            </p>
                            <p class="price">
                                From $189.25
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img alt="Tour image of Molokini and Turtle Town in New York" src="../assets/images/tour.png" />
                    <div class="card-content">
                        <p>
                            New York, USA
                        </p>
                        <h3>
                            Molokini and Turtle Town Snorkeling Adventure Aboard
                        </h3>
                        <p class="rating">
                            <i class="fas fa-star"></i> 4.8 (243)
                        </p>
                        <div class="details">
                            <p>
                                4 days
                            </p>
                            <p class="price">
                                From $225
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img alt="Tour image of Westminster Abbey in London" src="../assets/images/tour_3.png" />
                    <div class="card-content">
                        <p>
                            London, UK
                        </p>
                        <h3>
                            Westminster Walking Tour &amp; Westminster Abbey Entry
                        </h3>
                        <p class="rating">
                            <i class="fas fa-star"></i> 4.8 (243)
                        </p>
                        <div class="details">
                            <p>
                                4 days
                            </p>
                            <p class="price">
                                From $943
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <img alt="Tour image of Circle Island in New York" src="../assets/images/tour_4.png" />
                    <div class="card-content">
                        <p>
                            New York, USA
                        </p>
                        <h3>
                            All Inclusive Ultimate Circle Island Day Tour with Lunch
                        </h3>
                        <p class="rating">
                            <i class="fas fa-star"></i> 4.8 (243)
                        </p>
                        <div class="details">
                            <p>
                                4 days
                            </p>
                            <p class="price">
                                From $771
                            </p>
                        </div>
                    </div>
                </div>
        </section>
        <?php include 'components/footer.php'; ?>
    </main>
</body>
</html>