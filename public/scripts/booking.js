import {fetchData} from "./main.js";

let bookingsAndTours = await fetchData('/api/user/bookings');

for (let i = 0; i <5 ; i++) {
    document.getElementById('main-content').innerHTML += `<div class="container-fluid booked-item">
                <img src="destination.img">
                <div class="information">
                    <p>Tour name</p>
                    <p>Booking date</p>
                    <p>Total cost - Status</p>
                </div>
            </div>`
}

function renderBookings(bookingsAndTours) {
    for (let i = 0; i<bookingsAndTours.length; i++) {
        let bookingAndTour = bookingsAndTours[i];
        document.getElementById('main-content').innerHTML += `<div onclick="renderDetails(${bookingAndTour})" class="container-fluid booked-item" 
                data-tourId="${bookingAndTour['tour_id']}">
                <img src="destination.img">
                <div class="information">
                    <p>${bookingAndTour['tour_name']}</p>
                    <p>${bookingAndTour['booking_date']}</p>
                    <p>${bookingAndTour['total_cost']} - ${bookingAndTour['status']}</p>
                </div>
            </div>`
    }
}

async function renderDetails(bookingAndTour) {
    let location = await fetchData('/api/cultures/' + bookingAndTour['location_id']);
    document.getElementById('detailed-info').innerHTML = `
        <img id="detail-booking" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQdVbOF_W54QbangrguqovUrJ_DUebJw3C9ZQ&s">
        <p></p>
        <p>Tour name: ${bookingAndTour['tour_name']}</p>
        <p>Started date: ${bookingAndTour['started_date']}</p>
        <p>End date: ${bookingAndTour['completed_date']}</p>
        <p>Location: ${location['name']}</p>
        <p>Status: ${bookingAndTour['status']}</p>
        <p>Description: ${bookingAndTour['description']}</p>
        <p>Total cost: <span style="color: red">${bookingAndTour['total_cost']}</span>
    `;
}