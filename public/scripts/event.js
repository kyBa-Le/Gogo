import {fetchData} from "./main.js";

let events = await fetchData("/api/events");

// Cuộn trang khi ấn xem tour ở banner
document.getElementById("banner-button").addEventListener("click", function() {
    var target = document.getElementById("event-all-events");
    var startPosition = window.pageYOffset;
    var targetPosition = target.getBoundingClientRect().top + startPosition - 50; // Target position, adjusting for the offset
    var duration = 1000; // Scroll duration in ms
    var startTime = performance.now(); // Use performance.now() for better precision
    function easeInOut(currentTime) {
        var timeElapsed = currentTime - startTime;
        var progress = Math.min(timeElapsed / duration, 1); // Clamp progress to 1

        // Ease-in-out equation (quadratic ease)
        var easeProgress = -0.5 * (Math.cos(Math.PI * progress) - 1);

        window.scrollTo(0, startPosition + (targetPosition - startPosition) * easeProgress);

        if (timeElapsed < duration) {
            requestAnimationFrame(easeInOut);
        }
    }
    // Start the custom scrolling animation
    requestAnimationFrame(easeInOut);
});

async function renderEventCard(event) {
    let location = await fetchData('/api/cultural_locations/' + event['cultural_location_id']);
    console.log(location);
    document.getElementById("event-cards").innerHTML +=
        `<div class="event-card" id="card-01" style="background-image: url('${event['image_url']}');">
            <div class="overlay"></div> <!-- Lớp phủ tối -->
            <div id="event-bref-info">
                <p id="place">${location['name']} - ${location['region']}</p>
                <h4 id="title"><a href="/events/${event['id']}">${event['name']}</a></h4>
                <p id="date">${event['event_date']}</p>
            </div>
        </div>`;
}

let currentMonth = new Date().getMonth() + 1;
let currentYear = new Date().getFullYear();
let  eventInMonth = await fetchData("/api/events/search?month=" + currentMonth + "&year=" + currentYear);

function renderAllEventCards(events) {
    for(let i = 0; i < events.length; i++) {
        renderEventCard(events[i]);
    }
}

renderAllEventCards(events);

console.log(eventInMonth);
// render for slider
if (eventInMonth.length === 0) {
    document.getElementById("carousel-inner").innerHTML +=
        `<div class="carousel-item" data-bs-interval="10000">
            <img src="https://static.vinwonders.com/production/Vietnam-travel-from-India-1.jpg" 
                class="d-block w-100" alt="">
            <h1 class="position-absolute top-50 start-50 translate-middle text-white p-3">Coming soon</h1>
            <div id="description" style="width: 100%; margin: 0; left: 0">
                <h1 class="text-center imperial-script-bigger">There are no event in ${currentMonth}, 
                please wait for upcoming event and join our tour</h1>
            </div>
        </div>`;
} else {
    for (let i = 0; i<eventInMonth.length; i++) {
        document.getElementById("carousel-inner").innerHTML +=
            `<div class="carousel-item" data-bs-interval="10000">
            <img src="${eventInMonth[i]['image_url']}" 
                class="d-block w-100" alt="${eventInMonth[i]['image_url']}">
            <h1 id="event-name">This is ${eventInMonth[i]['name']}<br>Happen in ${currentMonth}</h1>
            <div id="description">
                <p>${eventInMonth[i]['description']}</p>
                <button id="slide-book-now" data-id="${eventInMonth[i]['id']}"><b>Book now</b></button>
            </div>
        </div>`;
    }
}

document.getElementById("slide-book-now").addEventListener('click', function () {
    let id = document.getElementById("slide-book-now").getAttribute("data-id");
    window.location.href = "/booking/" + id;
})