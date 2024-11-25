async function fetchCulturalLocations() {
    try {
        const response = await fetch("/api/cultural_locations");
        const data = await response.json();
        return JSON.parse(data);
    } catch (error) {
        console.error('Error fetching cultural locations:', error);
    }
}
let culturalLocations = await fetchCulturalLocations(); 

// Update hero section dynamically
document.querySelector(".hero-img").innerHTML +=
    `<a href="/culturalLocation/${culturalLocations[1]['id']}" id="hero-link">
        <img src="${culturalLocations[1]['image_url']}" alt="Hero Image" id="hero-img">
    </a>`

// Render a single card for the slider
function renderCulturalLocationCard(culturalLocation) {
    document.getElementById("slider-content").innerHTML +=
        `<div class="swiper-slide card-cultural">
            <a href="/culturalLocation/${culturalLocation['id']}" class="link_to_detailCultural">
                <div class="card-img">
                    <img src="${culturalLocation['image_url']}" alt="${culturalLocation['name']}" class="cultural-img">
                </div>
                <div class="content">
                    <h5 class="title">${culturalLocation['name']}</h5>
                    <div class="region">${culturalLocation['region']}</div>
                </div>
            </a>
        </div>`
}

// Render all slider cards
function renderAllCulturalLocationCards(culturalLocations) {
    for(let i = 0; i < culturalLocations.length; i++) {
        renderCulturalLocationCard(culturalLocations[i]);
    }
}

renderAllCulturalLocationCards(culturalLocations);

// Render a single grid image
function renderCulturalLocationGridImage(culturalLocationGridImage) {
    document.getElementById("more-cultural-grid").innerHTML +=
        `<div class="cultural${culturalLocationGridImage['id']}">
            <a href="/culturalLocation/${culturalLocationGridImage['id']}">
                <img src="${culturalLocationGridImage['image_url']}" alt="${culturalLocationGridImage['name']}" class="image">
            </a>
        </div>`
}

// Render all cultural grid images
function renderAllCulturalLocationGridImages(culturalLocationGridImages) {
    for(let i = 0; i < 6; i++) {
        renderCulturalLocationGridImage(culturalLocationGridImages[i]);
    }
}

renderAllCulturalLocationGridImages(culturalLocations);

// Khởi tạo Swiper
new Swiper(".mySwiper", {
    slidesPerView: 3, 
    spaceBetween: 30,   
    loop: true,          
    autoplay: {
        delay: 2500,    
        disableOnInteraction: false,
    },
    grabCursor: true,  
});

