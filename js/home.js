

const carouselItems = document.querySelectorAll('.carousel-item');

let currentIndex = 0;
// Hàm chuyển đến slide tiếp theo
function showNextSlide() {
  // Ẩn slide hiện tại
  carouselItems[currentIndex].classList.remove('active');

  // Tăng index hoặc quay về slide đầu nếu đã ở slide cuối cùng
  currentIndex = (currentIndex + 1) % carouselItems.length;

  // Hiển thị slide tiếp theo
  carouselItems[currentIndex].classList.add('active');
}

// Thiết lập hàm chuyển động tự động
setInterval(showNextSlide, 2000); //
