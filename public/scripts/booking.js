import {fetchData} from "./main.js";

let bookingsAndTours = await fetchData('/api/users/bookings');
function renderBookings(bookingsAndTours) {
    for (let i = 0; i<bookingsAndTours.length; i++) {
        let bookingAndTour = bookingsAndTours[i];
        let id = bookingAndTour['id'];
        document.getElementById('main-content').innerHTML += `<div data-id="${bookingAndTour['id']}" id="item-${bookingAndTour['id']}" class="container-fluid booked-item" 
                data-tourId="${bookingAndTour['tour_id']}" data-tour-description="${bookingAndTour['tour_description']}"
                data-tour-name="${bookingAndTour['tour_name']}" data-started-date="${bookingAndTour['tour_start_date']}" 
                data-completed-date="${bookingAndTour['tour_completed_date']}" data-status="${bookingAndTour['status']}" 
                data-total-cost=${bookingAndTour['total_cost']}" 
                data-location-id="${bookingAndTour['tour_location_id']}"
                data-tour-image="${bookingAndTour['tour_image_url']}">
                <img id="item-img" src="${bookingAndTour['tour_image_url']}">
                <div class="information">
                    <p style="font-weight: bold">Tour: ${bookingAndTour['tour_name']}</p>
                    <p>Booking date: ${bookingAndTour['booking_date']}</p>
                    <p>Price: ${bookingAndTour['total_cost']}đ - ${bookingAndTour['status']}</p>
                </div>
            </div>`
    }
}

await renderBookings(bookingsAndTours);
async function renderDetails(id) {
    console.log('id in render detail:' + id);
    let item = document.getElementById('item-' + id);
    let locationId = parseInt(item.dataset.locationId);
    let location = await fetchData('/api/cultural_locations/' + locationId);
    document.getElementById('detailed-info').innerHTML = `
        <img id="detail-booking" src="${item.dataset.tourImage}">
        <p></p>
        <p>Tour name: ${item.dataset.tourName}</p>
        <p>Started date: ${item.dataset.startedDate}</p>
        <p>End date: ${item.dataset.completedDate}</p>
        <p>Location: ${location['name']}</p>
        <p>Status: ${item.dataset.status}</p>
        <p>Description: ${item.dataset.tourDescription}</p>
        <p>Total cost: <span style="color: red">${item.dataset.totalCost} VND</span>
    `;
}
document.querySelectorAll('.booked-item').forEach(tour => {
    tour.addEventListener('click', async () => {
        await renderDetails(tour.dataset.id);
    });
});
