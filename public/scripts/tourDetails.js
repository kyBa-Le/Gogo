import {fetchData} from "./main.js";

let path = '/api' + window.location.pathname;
let tour = await fetchData(path);
let location = await fetchData('/api/cultural_locations/' + tour['cultural_location_id'])
let cuisines = await fetchData('/api/cuisines/location?location-id=' + location['id']);
document.getElementById('tour-image').src=tour['image_url'];
document.getElementById('container-tour-information').innerHTML = `<h1>Tour informations</h1>
            <p>Name : ${tour['name']}</p>
            <p>Started date : ${tour['started_date']}</p>
            <p>Completed date : ${tour['completed_date']}</p>
            <p>Organizer : ${tour['organizer']}</p>
            <p>Schedule : ${tour['schedule']}</p>
            <p>Destination : ${location['name']} - ${location['region']}</p>
            <p>Description : ${tour['description']}</p>
            <p>Price : ${tour['price']} VND</p>
            <div style="width: 100%" class="d-flex justify-content-end"><button onclick="{window.location.href='/checkout/' + ${tour['id']}}" id="book-now">Book now</button></div>`;
for (let i = 0; i<cuisines.length; i++) {
    let cuisine = cuisines[i];
    document.getElementById('cuisine-cards').innerHTML += `
        <div class="cuisine-card">
            <img src="${cuisine.image_url}" alt="${cuisine.name}" />
            <h4 class="cuisine-name">${cuisine.name}</h4>
            <p class="cuisine-description">${cuisine.description}</p>
            <p class="cuisine-location">Location ID: ${cuisine.location_id}</p>
            <a href="/cultural_locations/${cuisine.location_id}" class="cuisine-link">View destination</a>
        </div>`;
}