<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Beauty</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@300..900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/assets/css/header.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>

<body>
    @include('front.layout.header')
    @yield('content')
    @include('front.layout.footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        window.addEventListener('scroll', function() {
            const header = document.querySelector('.Header');
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });
    </script>
    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
    <script>
        // Set your target date/time here
        const targetDate = new Date("2025-05-13T23:59:59").getTime();

        const updateCountdown = () => {
            const now = new Date().getTime();
            const distance = targetDate - now;

            if (distance < 0) {
                document.getElementById("countdown").innerHTML = "<h2>Time's up!</h2>";
                clearInterval(timer);
                return;
            }

            const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((distance % (1000 * 60)) / 1000);


            document.getElementById("hours").textContent = String(hours).padStart(2, '0');
            document.getElementById("minutes").textContent = String(minutes).padStart(2, '0');
            document.getElementById("seconds").textContent = String(seconds).padStart(2, '0');
        };

        const timer = setInterval(updateCountdown, 1000);
        updateCountdown(); // initial call
    </script>
    <script>
        let quantity = 1;

        function increase() {
            quantity++;
            document.getElementById('quantity').innerText = quantity;
        }

        function decrease() {
            if (quantity > 1) {
                quantity--;
                document.getElementById('quantity').innerText = quantity;
            }
        }
    </script>
    <script>
        var swiper = new Swiper(".mySwiper2", {
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
    <script>
        const items = document.querySelectorAll(".faq-question");
        items.forEach(item => {
            item.addEventListener("click", () => {
                const answer = item.nextElementSibling;
                answer.classList.toggle("show");
                item.classList.toggle("active");
            });
        });
    </script>
    <script>
        function toggleFaq(btn) {
            const answer = btn.nextElementSibling;
            const arrow = btn.querySelector('.faq-arrow');
            const isOpen = answer.style.display === 'block';
            answer.style.display = isOpen ? 'none' : 'block';
            arrow.style.transform = isOpen ? 'rotate(0deg)' : 'rotate(90deg)';
        }
    </script>
    <script>
        function toggleMoreContent() {
            var moreContent = document.getElementById('more-content');
            var btn = document.getElementById('btn-xem-them');
            if (moreContent.style.display === 'none' || moreContent.style.display === '') {
                moreContent.style.display = 'block';
                btn.innerText = 'Thu gọn';
            } else {
                moreContent.style.display = 'none';
                btn.innerText = 'Xem thêm';
            }
        }
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var offcanvas = document.getElementById('offcanvasRight');
            var bsOffcanvas = bootstrap.Offcanvas.getOrCreateInstance(offcanvas);

            offcanvas.addEventListener('show.bs.offcanvas', function() {
                let overlay = document.querySelector('.custom-full-overlay');
                if (!overlay) {
                    overlay = document.createElement('div');
                    overlay.className = 'custom-full-overlay';
                    overlay.onclick = function() {
                        bsOffcanvas.hide();
                    };
                    document.body.appendChild(overlay);
                    setTimeout(() => overlay.classList.add('show'), 10);
                } else {
                    overlay.classList.add('show');
                }
            });

            // Khi offcanvas bắt đầu đóng, giữ overlay lại 0.2s rồi mới ẩn
            offcanvas.addEventListener('hide.bs.offcanvas', function() {
                var overlay = document.querySelector('.custom-full-overlay');
                if (overlay) {
                    overlay.classList.remove('show');
                    setTimeout(() => {
                        if (overlay.parentNode) overlay.parentNode.removeChild(overlay);
                    }, 200); // overlay biến mất sau khi offcanvas đã thu lại một chút
                }
            });
        });
    </script>
    <script>
        // Xử lý nút cộng/trừ số lượng trong giỏ hàng
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.input-group').forEach(function(group) {
                const minusBtn = group.querySelector('button[title="Giảm"]');
                const plusBtn = group.querySelector('button[title="Tăng"]');
                const input = group.querySelector('input[type="text"]');

                if (minusBtn && plusBtn && input) {
                    minusBtn.addEventListener('click', function() {
                        let value = parseInt(input.value) || 1;
                        if (value > 1) input.value = value - 1;
                    });
                    plusBtn.addEventListener('click', function() {
                        let value = parseInt(input.value) || 1;
                        input.value = value + 1;
                    });
                }
            });
        });
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Xử lý nút xóa sản phẩm trong giỏ hàng
            document.querySelectorAll('.btn[title="Xóa"]').forEach(function(btn) {
                btn.addEventListener('click', function() {
                    // Tìm đến phần tử cha chứa toàn bộ sản phẩm
                    var product = btn.closest('.d-flex.align-items-start.border-bottom.py-3');
                    if (product) product.remove();
                });
            });
        });
    </script>
    <script>
document.addEventListener('DOMContentLoaded', function() {
    var header = document.querySelector('header');
    window.addEventListener('scroll', function() {
        if (window.scrollY > 10) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    });
});
</script>
</body>

</html>
