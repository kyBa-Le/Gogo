import {sendData} from "./main.js";
import {checkCookie} from "./main.js";
const form = document.getElementById('signIn-form');
hideError();
document.getElementById("sign-in-button").
    addEventListener('click', async function (event){
        event.preventDefault();
        hideError();
        console.log("Submitting");
        const formData = new FormData(form);
    const data = {};
    formData.forEach((value, key) => {
        data[key] = value; // Gắn từng cặp key-value vào đối tượng
    });
    let response = await sendData("/api/sign-in", data);
    if (response["success"] === false) {
        document.getElementById('error-place').innerHTML += showError("Email or password is incorrect!");
    } else {
        checkCookie("session_id");
        await success();
    }
    });

function showError(message) {
    return `<div id="error-message" style="color: #e75151;">
        <b>${message}</b>
    </div>
    `
}

function hideError() {
    document.getElementById('error-place').innerHTML = "";
}

// Hàm delay để sử dụng await
function delay(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}

async function success() {
    document.getElementById("form-container").remove();
    document.getElementById('success-box').style.display = "flex";
    await delay(500);
    window.location.href = '/';
}