// Toggle menu wrapper
const menuToggle = document.getElementById("menu-toggle");
const wrapper = document.getElementById("wrapper");

if (menuToggle && wrapper) {
    menuToggle.addEventListener("click", function() {
        wrapper.classList.toggle("toggled");
    });
}

// Inisialisasi Chart.js untuk menampilkan grafik
const financeCanvas = document.getElementById('financeChart');
if (financeCanvas) {
    const ctx = financeCanvas.getContext('2d');
    const financeChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
            datasets: [
                {
                    label: 'Pemasukan',
                    data: [12000000, 15000000, 11000000, 17000000, 13000000, 19000000, 21000000, 23000000, 25000000],
                    borderColor: 'rgba(75, 192, 192, 1)',
                    fill: false
                },
                {
                    label: 'Pengeluaran',
                    data: [8000000, 7000000, 9000000, 12000000, 8000000, 10000000, 11000000, 13000000, 14000000],
                    borderColor: 'rgba(255, 99, 132, 1)',
                    fill: false
                }
            ]
        },
        options: {
            responsive: true,
            animation: {
                duration: 1000, // Durasi animasi saat pertama kali dimuat
                easing: 'easeInOutSine'
            },
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    // Fungsi untuk memperbarui data chart
    function updateChartData(newData) {
        if (newData && newData.pemasukan && newData.pengeluaran) {
            financeChart.data.datasets[0].data = newData.pemasukan;
            financeChart.data.datasets[1].data = newData.pengeluaran;

            // Memperbarui chart tanpa animasi untuk mengurangi "flicker"
            financeChart.update({
                duration: 0,
                lazy: true
            });
        } else {
            console.warn("Data untuk pembaruan chart tidak lengkap");
        }
    }

    // Contoh pemanggilan fungsi updateChartData
    updateChartData({
        pemasukan: [13000000, 16000000, 12000000, 18000000, 14000000, 20000000, 22000000, 24000000, 26000000],
        pengeluaran: [9000000, 8000000, 9500000, 12500000, 9000000, 11000000, 12000000, 13500000, 14500000]
    });
} else {
    console.warn("Elemen canvas untuk financeChart tidak ditemukan.");
}
