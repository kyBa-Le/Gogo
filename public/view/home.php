<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../src/styles/main.css">
    <title>Document</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <main class="main-app">
        <header class="app-header">
            <div class="container header-content">
                <!-- Logo -->
                <div class="brand">
                    <img
                        class="brand-logo"
                        src="assets/images/logo.png"
                        alt="Gogo"
                    />
                </div>
                <form class="search-form" action="/search" method="get">
                    <input
                        type="text"
                        class="search-input"
                        placeholder="Search tours by destination"
                        name="query"
                    />
                </form>
                <!-- Navigation -->
                <nav class="header-navigation">
                    <ul class="menu-list">
                        <li class="menu-item">Home</li>
                        <li class="menu-item">Culture</li>
                        <li class="menu-item">Cuisine</li>
                    </ul>
                </nav>  
                <div class="header-actions">
                    <button class="btn btn-secondary">Sign in</button>
                    <button class="btn btn-primary">Sign up</button>
                  </div>
            </div>
        </header>
        <!-- hero-sections-->
        <section class="hero-section">
            <div class="hero-content">
                <h1 class="hero-title">Your world of joy</h1>
                <p class="hero-description">From local escapes to far-flung adventures, find what makes you happy anytime, anywhere</p>
                
                <div class="search-container">
                    <form class="hero-search-form" action="/search" method="get">
                        <div class="price-search">
                            <label>
                                <input type="checkbox" id="search-by-price" name="search-by-price" title="Search by price">
                                Price
                            </label>
                            <select id="price" name="price" class="search-select" title="Select a price range" aria-label="Price selection">
                                <option value="">Search by price</option>
                                <option value="100">100</option>
                                <option value="200">200</option>
                                <option value="300">300</option>
                                <option value="400">400</option>
                            </select>
                        </div>
                        
                        <div class="when-search">
                            <label>
                                <input type="checkbox" id="search-by-date" name="search-by-date" title="Search by date"> <!-- Checkbox cho When -->
                                When
                            </label>
                            <input type="date" class="search-input" id="when" name="when" min="" required title="Select a date" aria-label="Date selection">
                        </div>
        
                        <button type="submit" class="btn btn-primary hero-btn" title="Search for tours">Search</button>
                    </form>
                </div>
            </div>
        </section>
        <footer class="app-footer">
            <div class="footer-header">
                <p class="footer-header-text">Speak to our expert at <span style="color: var(--primary-color);">1-800-453-6744</span></p>
                <button class="btn btn-secondary">Follow Us</button>
            </div>
            <div class="footer-content container">
                <div class="footer-section footer-contact">
                    <h4 class="footer-section-title">Contact Us</h4>
                    <p class="footer-description">328 Queensberry Street, North Melbourne VIC3051, Australia.</p>
                    <p class="footer-description">hi@viatours.com</p>
                </div>
                <div class="footer-section footer-company">
                    <h4 class="footer-section-title">Company</h4>
                    <ul class="footer-section-list">
                        <li class="footer-section-item"><a href="#" class="footer-link">About Us</a></li>
                        <li class="footer-section-item"><a href="#" class="footer-link">Tourz Reviews</a></li>
                        <li class="footer-section-item"><a href="#" class="footer-link">Contact Us</a></li>
                        <li class="footer-section-item"><a href="#" class="footer-link">Travel Guides</a></li>
                        <li class="footer-section-item"><a href="#" class="footer-link">Data Policy</a></li>
                        <li class="footer-section-item"><a href="#" class="footer-link">Cookie Policy</a></li>
                        <li class="footer-section-item"><a href="#" class="footer-link">Legal</a></li>
                        <li class="footer-section-item"><a href="#" class="footer-link">Sitemap</a></li>
                    </ul>
                </div>
                <div class="footer-section footer-support">
                    <h4 class="footer-section-title">Support</h4>
                    <ul class="footer-section-list">
                        <li class="footer-section-item"><a href="#" class="footer-link">Get in Touch</a></li>
                        <li class="footer-section-item"><a href="#" class="footer-link">Help Center</a></li>
                        <li class="footer-section-item"><a href="#" class="footer-link">Live Chat</a></li>
                        <li class="footer-section-item"><a href="#" class="footer-link">How It Works</a></li>
                    </ul>
                </div>
                <div class="footer-newsletter">
                    <h4 class="footer-section-title">Newsletter</h4>
                    <p class="footer-description">
                      Subscribe to the free newsletter and stay up to date
                    </p>
                    <form class="footer-description newsletter-form">
                        <div class="input-container">
                          <input
                            type="email"
                            placeholder="Your email address"
                            class="footer-newsletter-input"
                          />
                          <button type="submit" class="btn btn-secondary email">Send</button>
                        </div>
                      </form>
                  </div>
            </div>
        </footer>
    </main>
</body>
</html>
