export async function fetchData(path) {
    showLoading(); // Hiển thị loading
    try {
        const response = await fetch(path); // Gửi yêu cầu đến API
        if (!response.ok) {
            throw new Error(`HTTP error! Status: ${response.status}`);
        }
        return await response.json(); // Trả về dữ liệu JSON đã parse
    } catch (error) {
        console.error('Error fetching data:', error);
        throw error; // Có thể ném lỗi hoặc xử lý khác tùy vào ứng dụng
    } finally {
        hideLoading(); // Đảm bảo ẩn loading trong mọi trường hợp
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