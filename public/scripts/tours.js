import { fetchData } from "./main.js";

async function renderTourCard(tour) {
    document.getElementById("tour-card").innerHTML += `
        <div class="tour">
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
            <a href="/tours/${tour.id}" class="tour-link">Booking Tour</a>
        </div>`;
}

function loadTours(tours) {
        if (tours.length > 0) {
            tours.forEach((tour) => renderTourCard(tour));
        } else {
            document.getElementById("tour-card").innerHTML = `<img src="https://img.freepik.com/premium-vector/vector-illustration-about-concept-no-items-found-no-results-found_675567-6604.jpg?semt=ais_hybrid">`;
            document.body.innerHTML += `<div class="container-fluid d-flex justify-content-center"><p> No tour found! Please back to <a href="/">Home page</a></p></div>`;
        }
}

const action = new URLSearchParams(window.location.search).has('filter');
let api;
if (action) {
    api = "/api/tours/filter" + window.location.search;
} else {
    api = "/api/tours/search" + window.location.search;
}
let tours = await fetchData(api);
loadTours(tours);
let allTours =await fetchData ("/api/tours");
renderTourCard(allTours);