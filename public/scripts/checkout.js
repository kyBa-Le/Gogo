import { fetchData } from "./main.js";

const apiPath = "/api" + window.location.pathname;
console.log(apiPath)

let tour = await fetchData(apiPath);
console.log(tour);

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


