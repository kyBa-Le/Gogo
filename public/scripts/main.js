export async function fetchData(path) {
    try {
        const response = await fetch(path); // Đợi fetch hoàn thành
        const data = await response.json(); // Đợi JSON được parse
        return JSON.parse(data);
    } catch (error) {
        console.error('Error fetching events:', error);
    }
}