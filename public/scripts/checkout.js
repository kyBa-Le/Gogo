import { fetchData } from "./main.js";

const apiPath = "/api" + window.location.pathname;

let tour = await fetchData(apiPath);
let user = await fetchData('/api/user');
document.getElementById('tourId').value = tour['id'];
document.getElementById('totalCost').value = tour['price'];
document.getElementById('tourName').value = tour['name'];

// Populate Tour Information
document.getElementById('tour-card').innerHTML =  
    `<img src=${tour["image_url"]} alt="Tour Image">
    <h3>${tour["name"]}</h3>
    <p><strong>Description:</strong> ${tour["description"]}</p>
    <div class="row">
        <p><strong>Start Date:</strong> ${tour["started_date"]}</p>
        <p><strong>End Date:</strong> ${tour["completed_date"]}</p>
    </div>
    <div class="row">
        <p><strong>Price:</strong> ${tour["price"]}</p>
        <p><strong>Organizer:</strong> ${tour["organizer"]}</p>
    </div>
    <p><strong>Schedule:</strong> ${tour["schedule"]}</p>
    `;
if (user !== false) {
    document.getElementById('email').value = user['email'];
    document.getElementById('fullname').value = user['fullname'];
    document.getElementById('phone').value = user['phone'];
} else {
    if (window.confirm("Please login before book tour!")) {
        window.location.href = '/sign-in';
    }
    else {
        window.location.href = '/';
    }
}

