import {fetchData} from "./main.js";

const apiPath = "/api" + window.location.pathname;
let cultureDetail = await fetchData(apiPath);

document.getElementById("destination-section").innerHTML = 
    `<div class="banner" style="background-image: url('${cultureDetail.image_url}');">
        <div class="banner-overlay"></div>
        <div class="banner-content">
            <h1 class="display-4 fw-bold title">${cultureDetail.name}</h1>
            <p class="fst-italic">${cultureDetail.region}</p>
        </div>
    </div>`;

document.getElementById("destination-section").innerHTML += 
    `<div class="d-flex justify-content-center culture-description">
        <div class="container-fluid" id="culture-description">
            <p>Location name: ${cultureDetail["name"]}</p>
            <p>Region: ${cultureDetail['region']}</p>
            <p id="description">"${cultureDetail["description"]}"</p>
        </div>
    </div>`;

document.getElementById("culture-book-now").addEventListener('click', function (){
    window.location.href = '/search?location-id='+ cultureDetail['id'];
})
