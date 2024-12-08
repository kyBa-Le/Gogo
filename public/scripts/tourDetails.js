import {fetchData} from "./main.js";

let path = '/api' + window.location.pathname;
let tour = await fetchData(path);
let location = await fetchData('/api/cultural_locations/' + tour['cultural_location_id'])
document.getElementById('tour-image').src=tour['image_url'];
document.getElementById('container-tour-information').innerHTML = `<h1>Tour informations</h1>
            <p>Name : ${tour['name']}</p>
            <p>Started date : ${tour['started_date']}</p>
            <p>Completed date : ${tour['completed_date']}</p>
            <p>Organizer : ${tour['organizer']}</p>
            <p>Schedule : ${tour['schedule']}</p>
            <p>Destination : ${location['name']} - ${location['region']}</p>
            <p>Description : ${tour['description']}</p>
            <p>Price : ${tour['price']} VND</p>
            <div style="width: 100%" class="d-flex justify-content-end"><button onclick="function (){window.location.href=}" id="book-now">Book now</button></div>`;