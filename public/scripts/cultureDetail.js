import {fetchData} from "./main.js";

const apiPath = "/api" + window.location.pathname;
let cultureDetail = await fetchData(apiPath);

// Cập nhật nội dung banner
document.getElementById("destination-section").innerHTML = 
    `<div class="banner" style="background-image: url('${cultureDetail.image_url}');">
        <div class="banner-content">
            <h1 class="display-4 fw-bold title">${cultureDetail.name}</h1>
            <p class="fst-italic">${cultureDetail.region}</p>
        </div>
    </div>`;

// Cập nhật mô tả về địa điểm
document.getElementById("destination-section").innerHTML += 
`<div class="description-section container">
    <p>${cultureDetail.description}</p>
</div>`;
