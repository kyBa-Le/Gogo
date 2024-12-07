<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<header class="app-header">
    <div class="app-container header-content">
        <!-- Logo -->
        <div class="custom-brand">
            <img
                class="brand-logo"
                src="assets/images/logo.png"
                alt="Gogo" onclick="window.location.href='/'" />
        </div>
        <div class="custom-search-form">
            <input
                type="text"
                class="custom-search-input"
                placeholder="Search tours by destination"
                id="search-bar"
                name="query" />
        </div>
        <!-- Navigation -->
        <nav class="header-navigation">
            <ul class="custom-menu-list">
                <li class="custom-menu-item"><a href="/">Home</a></li>
                <li class="custom-menu-item" onclick="location.href='/events'">Event</li>
                <li class="custom-menu-item" onclick="location.href='/cuisines'">Cuisine</li>
                <li class="custom-menu-item" onclick="location.href='/cultures'">Culture</li>
            </ul>
        </nav>
        <div class="header-actions">
            <button class="custom-btn custom-btn-secondary" onclick=" {
              window.location.href = '/sign-in'
            }">Sign in</button>
            <button class="custom-btn custom-btn-primary" onclick="{
              window.location.href = '/sign-up';
            }">Sign up</button>
        </div>
        <div class="account" id="accountSection" style="display: none;">
            <i class="fas fa-user-circle user-avatar" id="user-avatar"></i>
            <div class="dropdown-menu" id="dropdownMenu" style="display: none;">
                <ul>
                    <li onclick="viewProfile()"><a href="/profile">View Profile</a></li>
                    <li onclick="historyTour()">History Tour</li>
                    <li onclick="logout()">Logout</li>
                </ul>
            </div>
        </div>
    </div>
    <script src="../../scripts/header.js" type="module">
    </script>
</header>