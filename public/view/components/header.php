<header class="app-header">
    <div class="app-container header-content">
        <!-- Logo -->
        <div class="custom-brand">
            <img
                class="brand-logo"
                src="assets/images/logo.png"
                alt="Gogo" />
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
            <button class="custom-btn custom-btn-secondary">Sign in</button>
            <button class="custom-btn custom-btn-primary">Sign up</button>
        </div>
    </div>
    <script>
        const input = document.getElementById('search-bar');
        let isFocused = false;
        input.addEventListener('focus', () => {
            isFocused = true; 
            console.log("Ô input đang được nhấn vào!");
        });
        input.addEventListener('keydown', (event) => {
            if (isFocused && event.key === 'Enter') {
                console.log("Phím Enter được nhấn ngay sau khi focus!");
                const location = input.value;
                console.log("Giá trị hiện tại:", input.value);
                window.location.href = "/search?location=" + location;
            }
        });
        input.addEventListener('blur', () => {
            isFocused = false;
        });
    </script>
</header>