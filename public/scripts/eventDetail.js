import {fetchData} from "./main.js";

const apiPath = "/api" + window.location.pathname;
let event = await fetchData(apiPath);

document.getElementById("event-container").innerHTML +=
    `<div class="d-flex justify-content-center">
        <div id="event-image" style="background-image: url(${event["image_url"]})">
            <h1 id="event-title">${event["name"]}</h1>
        </div>
    </div>
    <h1 class="ps-5 ms-5" style="color: #EB662B">Detailed information</h1>
    <div class="d-flex justify-content-center">
        <div class="container-fluid" id="event-description">
            <h4 >Event name: ${event["name"]}</h4>
            <h4>Event date: ${event["event_date"]}</h4>
            <h4>Place: ${event["cultural_location_id"]}</h4>
            <h4 id="description">"${event["description"]}"</h4>
        </div>
    </div>`;
let eventId = event["id"];

document.getElementById("event-book-now").addEventListener('click', function (){
    window.location.href = '/booking/' + eventId;
})