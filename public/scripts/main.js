export async function fetchData(path) {
    try {
        const response = await fetch(path); // Đợi fetch hoàn thành
        const data = await response.json(); // Đợi JSON được parse
        return (data);
    } catch (error) {
        console.error('Error fetching events:', error);
    }
}

export async function sendData(path, data) {
    showLoading(); // Hiển thị loading
    const response = await fetch(path, {
        method: 'POST', // Hoặc 'PUT' nếu bạn muốn cập nhật
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify(data), // Chuyển đổi `data` thành chuỗi JSON
    });

    const returnData = await response.json(); // Trả về dữ liệu phản hồi
    hideLoading(); // Ẩn loading
    return await JSON.parse(returnData);
}

export function checkCookie(name) {
    const cookie = getCookie(name);
    return cookie !== undefined && cookie !== null && cookie !== "";
}

// Hàm getCookie đã đề cập ở trên
function getCookie(name) {
    const value = `; ${document.cookie}`;
    const parts = value.split(`; ${name}=`);
    if (parts.length === 2) return parts.pop().split(';').shift();
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