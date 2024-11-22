async function fetchEvents() {
    try {
        const response = await fetch("/api/events"); // Đợi fetch hoàn thành
        const data = await response.json(); // Đợi JSON được parse
        return JSON.parse(data);
    } catch (error) {
        console.error('Error fetching events:', error);
    }
}
let events = await fetchEvents();

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

function renderEventCard(event) {
    document.getElementById("event-cards").innerHTML +=
        `<div class="event-card" id="card-01" style="background-image: url('${event['image_url']}');">
            <p id="day">4 days</p>
            <div id="event-bref-info">
                <p id="place">${event[""]}</p>
                <h4 id="title"><a href="/event/${event['id']}">${event['name']}</a></h4>
                <p id="date">${event['event_date']}</p>
            </div>
        </div>`;
}

function renderAllEventCards(events) {
    for(let i = 0; i < events.length; i++) {
        renderEventCard(events[i]);
    }
}

renderAllEventCards(events);
