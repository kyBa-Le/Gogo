<header class="app-header">
    <div class="app-container header-content">
        <!-- Logo -->
        <div class="custom-brand">
            <img
                class="brand-logo"
                src="assets/images/logo.png"
                alt="Gogo" />
        </div>
        <form class="custom-search-form" action="/search" method="get">
            <input
                type="text"
                class="custom-search-input"
                placeholder="Search tours by destination"
                name="query" />
        </form>
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
            <button class="custom-btn custom-btn-secondary">Sign in</button>
            <button class="custom-btn custom-btn-primary">Sign up</button>
        </div>
    </div>
</header>