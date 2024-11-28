import {sendData} from "./main.js";
// Lấy form bằng ID
const form = document.getElementById('signUp-form');
removeAllError();
// Lắng nghe sự kiện submit
document.getElementById("sign-up-button").addEventListener('click', async function (event) {
    event.preventDefault(); // Ngăn chặn hành động gửi form mặc định
    removeAllError();
    confirmPassword();
    if (!confirmPassword()) {
        return confirmPassword();
    }
    const formData = new FormData(form);
    const data = {};
    formData.forEach((value, key) => {
        data[key] = value; // Gắn từng cặp key-value vào đối tượng
    });
    let response = await sendData("/api/sign-up", data);

    if (response.success === true) {
        window.alert("Sign up success, show pop up");
        return;
    }
    let errors = response["errors"];
    Object.entries(errors).forEach(([key, value]) => {
        let element = document.getElementById(key);
        renderError(element, value);
    })
});

function renderError(element, errorMessage) {
    element.classList.add("errorInput");
    let errorElement = document.createElement('span')
    errorElement.innerHTML = errorMessage;
    errorElement.classList.add("errorMessage");
    element.after(errorElement);
}

function removeAllError() {
    let e = document.getElementsByClassName("errorInput");
    for (let i = 0; i< e.length; i++) {
        e[i].classList.remove("errorInput");
    }
    let eMessage = document.getElementsByClassName("errorMessage");
    for (let i = 0; i< eMessage.length; i++) {
        eMessage[i].remove();
    }
}

function confirmPassword(){
    let password = document.getElementById("password").value;
    let confirmPassword = document.getElementById("confirm-password").value;
    if (password !== confirmPassword) {
        renderError(document.getElementById("confirm-password"), "confirmed password doesn't match")
        return false;
    }
    removeAllError();
    return true;
}

// Lấy phần tử loading
const loadingElement = document.getElementById('loading');

// Hàm hiển thị loading
function showLoading() {
    loadingElement.style.display = 'block';
}

// Hàm ẩn loading
function hideLoading() {
    loadingElement.style.display = 'none';
}