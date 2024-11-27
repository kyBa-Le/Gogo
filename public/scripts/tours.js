import { fetchData } from "./main.js";

async function renderTourCard(tour) {
    document.getElementById('tour-card').innerHTML +=
        `<div class="tour-card">
            <img src="${tour.image_url}" alt="${tour.name}" />
            <div class="heading">
            <h4 class="tour-name">${tour.name}</h4>
            <p class="tour-description">${tour.description}</p>
            <p class="tour-dates">
                Start Date: ${tour.started_date} <br>
                End Date: ${tour.completed_date}
            </p>
            </div>
            <p class="tour-price">Price: ${tour.price} VND</p>
            <p class="tour-location">${tour.location_name} - ${tour.region}</p>
            <a href="/tour/${tour.id}" class="tour-link">View Details</a>
        </div>`;
};

let api = "/api/tours/search?" + window.location.search;
let tours = await fetchData(api);  
console.log(tours);

tours.forEach((tour) => renderTourCard(tour));






        