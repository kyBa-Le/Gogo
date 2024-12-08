import {fetchData} from "./main.js";

const apiPath = "/api" + window.location.pathname;
let event = await fetchData(apiPath);
let location = await fetchData(`/api/cultural_locations/${event['cultural_location_id']}`);
document.getElementById("event-container").innerHTML +=
    `<div class="d-flex justify-content-center">
        <div id="event-image" style="background-image: url(${event["image_url"]})">
        </div>
    </div>
    <h1 class="text-center mb-1" style="color: #EB662B">Detailed information</h1>
    <div class="d-flex justify-content-center">
        <div class="container-fluid" id="event-description">
            <p>Event name: ${event["name"]}</p>
            <p id="event-date">Event date: ${event["event_date"]}</p>
            <p>Place: ${location['name']} - ${location['region']}</p>
            <p id="description">"${event["description"]}"</p>
        </div>
    </div>`;
document.getElementById("event-book-now").addEventListener('click', function (){
    window.location.href = '/search?date-include=' + event['event_date'] + '&location-id=' +  location['id'];
})