import { fetchData } from "./main.js";

async function checkLoginStatus() {
    const result = await fetchData('/api/is-signed-in');
    console.log(result);
    if (result.isSignedIn) {
        document.querySelector('.header-actions').style.display = 'none';
        document.querySelector('.account').style.display = 'block';
    } else {
        document.getElementById('header-actions').style.display = 'block';
    }
}
checkLoginStatus();

document.getElementById('user-avatar').addEventListener('click', () => {
    const dropdownMenu = document.getElementById('dropdownMenu');
    if (dropdownMenu.style.display === 'block') {
        dropdownMenu.style.display = 'none';
    } else {
        dropdownMenu.style.display = 'block';
    }
});


const input = document.getElementById('search-bar');
let isFocused = false;

input.addEventListener('focus', () => {
    isFocused = true;
    console.log("Ô input đang được nhấn vào!");
});

input.addEventListener('keydown', (event) => {
    if (isFocused && event.key === 'Enter') {
        const location = input.value.trim();
        if (location) {
            console.log("Phím Enter được nhấn ngay sau khi focus!");
            console.log("Giá trị hiện tại:", location);
            window.location.href = "/search?location=" + encodeURIComponent(location);
        } else {
            console.log("Không thể tìm kiếm với giá trị rỗng!");
        }
    }
});

input.addEventListener('blur', () => {
    isFocused = false;
});
