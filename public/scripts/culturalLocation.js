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
console.log (culturalLocations);

document.querySelector(".hero-img").innerHTML +=
    `<a href="/cultures/${culturalLocations[7]['id']}" id="hero-link">
        <img src="${culturalLocations[7]['image_url']}" alt="Hero Image" id="hero-img">
    </a>`

function renderCulturalLocationCard(culturalLocation) {
    document.getElementById("slider-content").innerHTML +=
        `<div class="swiper-slide card-cultural">
            <a href="/cultures/${culturalLocation['id']}" class="link_to_detailCultural">
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

function renderAllCulturalLocationCards(culturalLocations) {
    for(let i = 8; i < 16; i++) {
        renderCulturalLocationCard(culturalLocations[i]);
    }
}

renderAllCulturalLocationCards(culturalLocations);

function renderCulturalLocationGridImage(culturalLocationGridImage) {
    document.getElementById("more-cultural-grid").innerHTML +=
        `<div class="cultural${culturalLocationGridImage['id']}">
            <a href="/cultures/${culturalLocationGridImage['id']}">
                <img src="${culturalLocationGridImage['image_url']}" alt="${culturalLocationGridImage['name']}" class="image">
            </a>
        </div>`
}

function renderAllCulturalLocationGridImages(culturalLocationGridImages) {
    for(let i = 0; i < 6; i++) {
        renderCulturalLocationGridImage(culturalLocationGridImages[i]);
    }
}

renderAllCulturalLocationGridImages(culturalLocations);

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

