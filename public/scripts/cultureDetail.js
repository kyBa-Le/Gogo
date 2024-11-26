import { fetchData } from "./main.js";

(async () => {
    const apiPath = "/api" + window.location.pathname;
    let cultureDetail = await fetchData(apiPath);

    if (!cultureDetail) {
        console.error("Không tìm thấy dữ liệu cho địa điểm văn hóa.");
        alert("Không tìm thấy thông tin về địa điểm này.");
        return;
    }

    // Cập nhật nội dung banner
    const destinationSection = document.getElementById("destination-section");
    destinationSection.innerHTML = `
        <div class="banner" style="background-image: url('${cultureDetail.image_url}');">
            <div class="banner-content">
                <h1 class="display-4 fw-bold title">${cultureDetail.name}</h1>
                <p class="fst-italic">${cultureDetail.region}</p>
            </div>
        </div>
    `;

// Cập nhật mô tả về địa điểm
destinationSection.innerHTML += `
    <div class="description-section container">
        <p>${cultureDetail.description}</p>
    </div>
`;

// Xử lý danh sách dishes
function renderCultureDishCard(dish) {
    return `
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <img src="${dish.image_url}" alt="${dish.name}" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">${dish.name}</h5>
                    <p class="card-text text-muted">${dish.description}</p>
                </div>
            </div>
        </div>`;
}

// Hiển thị danh sách dishes
const dishesSection = document.getElementById("culture-dishes-section");
if (cultureDetail.dishes && cultureDetail.dishes.length > 0) {
    let dishesHtml = "";
    cultureDetail.dishes.forEach((dish) => {
        dishesHtml += renderCultureDishCard(dish);
    });
    dishesSection.innerHTML = dishesHtml;
} else {
    dishesSection.innerHTML = `<p class="text-muted">Không có món ăn nào được liên kết với địa điểm này.</p>`;
}

// Xử lý các sự kiện
const eventsSection = document.querySelector(".culture-events .row");

// Hàm tạo card cho mỗi sự kiện
function renderCultureEventCard(event) {
    const eventCardHTML = `
        <div class="col-md-6">
            <div class="card h-100 shadow-sm">
                <img src="${event.image_url}" alt="${event.name}" class="card-img-top" style="height: 200px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title">${event.name}</h5>
                    <p class="text-muted mb-2"><strong>Date:</strong> ${event.event_date}</p>
                    <p class="card-text">${event.description}</p>
                </div>
            </div>
        </div>
    `;
    eventsSection.innerHTML += eventCardHTML;
}

// Render tất cả sự kiện
if (cultureDetail.events && cultureDetail.events.length > 0) {
    cultureDetail.events.forEach(renderCultureEventCard);
} else {
    eventsSection.innerHTML = `<p class="text-center">Không có sự kiện nào sắp tới.</p>`;
}

// Xử lý các tour
const toursSection = document.querySelector(".culture-tours .row");

// Hàm tạo card cho mỗi tour
function renderCultureTourCard(tour) {
    const tourCardHTML = `
        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <img src="${tour.image_url}" alt="${tour.name}" class="card-img-top" style="height: 200px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title">${tour.name}</h5>
                    <p class="text-muted mb-2"><strong>Start Date:</strong> ${tour.started_date}</p>
                    <p class="text-muted mb-2"><strong>End Date:</strong> ${tour.completed_date}</p>
                    <p class="text-success fw-bold">Price: $${tour.price}</p>
                    <a href="#" class="btn btn-primary">Book Tour</a>
                </div>
            </div>
        </div>
    `;
    toursSection.innerHTML += tourCardHTML;
}

// Render tất cả các tour
if (cultureDetail.tours && cultureDetail.tours.length > 0) {
    cultureDetail.tours.forEach(renderCultureTourCard);
} else {
    toursSection.innerHTML = `<p class="text-center">Không có tour nào sẵn có.</p>`;
}

// Xử lý Reviews
const reviewsSection = document.querySelector(".culture-reviews .row");

// Hàm tạo card cho mỗi review
function renderReviewCard(review) {
    const reviewCardHTML = `
        <div class="col-md-4">
            <div class="review-card p-3 border rounded shadow-sm">
                <div class="d-flex align-items-center mb-2">
                    <strong class="review-user">${review.username}</strong>
                    <span class="text-muted ms-auto small">${review.review_date}</span>
                </div>
                <p class="review-detail mb-2">"${review.detail}"</p>
                <div class="text-warning small">
                    ${"⭐".repeat(review.rating)}${"☆".repeat(5 - review.rating)}  <!-- Hiển thị sao theo rating -->
                </div>
            </div>
        </div>
    `;
    reviewsSection.innerHTML += reviewCardHTML;
}

// Render tất cả các review
if (cultureDetail.reviews && cultureDetail.reviews.length > 0) {
    cultureDetail.reviews.forEach(renderReviewCard);
} else {
    reviewsSection.innerHTML = `<p class="text-center">Chưa có đánh giá nào.</p>`;
}

})();
