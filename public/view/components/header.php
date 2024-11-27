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
        // Lấy ô input
        const input = document.getElementById('search-bar');

        // Biến để kiểm tra xem ô input có đang được focus hay không
        let isFocused = false;

        // Sự kiện khi ô input được nhấn vào
        input.addEventListener('focus', () => {
            isFocused = true; // Đánh dấu rằng ô input đang được focus
            console.log("Ô input đang được nhấn vào!");
        });

        // Sự kiện khi nhấn phím Enter trong ô input
        input.addEventListener('keydown', (event) => {
            if (isFocused && event.key === 'Enter') {
                console.log("Phím Enter được nhấn ngay sau khi focus!");
                console.log("Giá trị hiện tại:", input.value); // Lấy giá trị từ ô input
                let location = input.value;
                window.location.href = "/tours?location=" + location;
            }
        });

        // Sự kiện khi ô input bị mất focus
        input.addEventListener('blur', () => {
            isFocused = false; // Đánh dấu rằng ô input không còn được focus
        });
    </script>
</header>