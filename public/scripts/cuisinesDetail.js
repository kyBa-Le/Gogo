import {fetchData} from "./main.js";
const apiPath = "/api" + window.location.pathname;   
let cuisine = await fetchData(apiPath);

async function renderCuisineCard(cuisine) {
    let apiLocation = await fetchData(`/api/cultural_locations/${cuisine.location_id}`);
    console.log(apiLocation);
    document.getElementById('cuisines-cards').innerHTML +=
        `<div class="card-cuisine-detail">
            <img src="${cuisine.image_url}" alt="${cuisine.name}" />
            <p class="cuisine-location">Location: ${apiLocation.name}</p>
            <div class="heading"> 
            <h4 class="cuisine-name">${cuisine.name}</h4>
            <p class="cuisine-description">${cuisine.description}</p>
            </div>
            <a href="/cuisines/${cuisine['id']}" class="view-tour">View Tour</a>
        </div>`;
}
renderCuisineCard(cuisine);