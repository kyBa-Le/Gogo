async function fetchCuisines() {
    try {
        const response = await fetch("/api/cuisines"); // Đợi fetch hoàn thành
        const data = await response.json(); // Đợi JSON được parse
        return (data);
    } catch (error) {
        console.error('Error fetching Cuisines:', error);
    }
}

let cuisines = await fetchCuisines();
export function renderCuisineCard(cuisine) {
    document.getElementById('cuisine-cards').innerHTML +=
        `<div class="cuisine-card">
            <img src="${cuisine.image_url}" alt="${cuisine.name}" />
            <h4 class="cuisine-name">${cuisine.name}</h4>
            <p class="cuisine-description">${cuisine.description}</p>
            <p class="cuisine-location">Location ID: ${cuisine.location_id}</p>
            <a href="/cultural_locations/${cuisine.location_id}" class="cuisine-link">View destination</a>
        </div>`;
}

function renderAllCuisines(cuisines) {
    for (let i = 0; i < cuisines.length; i++) {
        renderCuisineCard(cuisines[i]);
    }
}

renderAllCuisines(cuisines);