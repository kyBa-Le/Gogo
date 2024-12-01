import { fetchData } from "./main.js";

async function renderTourCard(tour) {
    document.getElementById("tour-card").innerHTML += `
        <div class="tour-card">
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
}

async function loadTours() {
    let api = "/api/tours/filter" + window.location.search;
    try {
        const tours = await fetchData(api);

        if (tours.length > 0) {
            tours.forEach((tour) => renderTourCard(tour));
        } else {
            document.getElementById("tour-card").innerHTML = `<p>No tours found for the given criteria.</p>`;
        }
    } catch (error) {
        console.error("Error fetching tours:", error);
        document.getElementById("tour-card").innerHTML = `<p>An error occurred while fetching tours.</p>`;
    }
}

const action = new URLSearchParams(window.location.search).has('location');
if (!action) {
    loadTours();
} else {
    let api = "/api/tours/search?" + window.location.search;
    let tours = await fetchData(api);
    if (tours.length === 0) {
        document.getElementById("tour-card").innerHTML = `<p style="color: #1a1a1a">No tours found for the given criteria.</p>`;
    }
    tours.forEach((tour) => renderTourCard(tour));
}


