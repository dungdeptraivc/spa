<header class="">
    <div class="">
        <nav class="navbar navbar-expand-lg ">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse nav-header" id="navbarNav">
                    <a href="/">
                        <img src="//bizweb.dktcdn.net/100/510/129/themes/952186/assets/logo.png?1723611130961"
                            alt="logo EGA Beauty Spa" width="194" height="56">
                    </a>
                    <ul class="navbar-nav mx-auto align-items-center">
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="/" id="home-link">Trang chủ</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="{{ route('introduce') }}" id="home-link">Giới thiệu</a>
                        </li>
                        <li class="nav-item mx-1">
                            <a class="nav-link" href="{{ route('service') }}" id="shop-link"> Dịch vụ</a>
                        </li>
                        <li class="nav-item mx-1">
                            <a class="nav-link" href="{{ route('blog') }}" id="event-link">Blog</a>
                        </li>
                        <li class="nav-item mx-1">
                            <a class="nav-link" href="{{ route('detail-product') }}" id="event-link">Sản phẩm </a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="{{ route('contact') }}" id="contact-link">Contact</a>
                        </li>
                        <li class="nav-item mx-2">
                            <a class="nav-link" href="{{ route('login') }}" id="contact-link">Login</a>
                        </li>
                    </ul>
                    <a class="cart-icon text-black" data-bs-toggle="offcanvas" href="#offcanvasCart" role="button"
                        aria-controls="offcanvasCart">
                        <div class="d-flex align-items-center position-relative">
                            <div class="mx-2 position-relative icon-cart1">
                                <i class="bi bi-basket fs-3"></i>
                                <span
                                    class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">3</span>
                            </div>
                        </div>
                    </a>
                    <div class="mx-2 search-container">
                        <div class="search-box">
                            <input type="text" class="search-input" placeholder="Search...">
                        </div>
                        <div class="color-cart">
                            <i class="bi bi-search search-icon fs-3 mx-1"></i>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasCart" aria-labelledby="offcanvasCartLabel">
            <div class="offcanvas-header">
                <h5 id="offcanvasCartLabel">Giỏ hàng của bạn</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <div class="container py-3">
                    <!-- Sản phẩm 1 -->
                    <div class="d-flex align-items-start border-bottom py-3">
                        <img src="/assets/image/anh11.jpg" alt="" class="w-25 mt-2 mx-2 rounded">
                        <div class="flex-grow-1">
                            <div class="d-flex justify-content-between align-items-start mt-2">
                                <h6 class="mb-3">[Bộ gội - xả - xịt dưỡng] Bộ 3 Thảo dược – Kích mọc tóc</h6>
                                <button type="button"
                                    class="btn btn-sm btn-light border-0 text-danger p-1 ms-2 rounded-circle shadow-sm"
                                    title="Xóa">
                                    <i class="bi bi-x-lg"></i>
                                </button>
                            </div>
                            <div class="text-danger fw-bold mb-2">395.000₫</div>
                            <div class="input-group input-group-sm w-auto ">
                                <button class="btn btn-outline-secondary px-2" type="button" title="Giảm">−</button>
                                <input type="text" min="1" class="form-control2 text-center" value="1"
                                    style="width: 40px;">
                                <button class="btn btn-outline-secondary px-2" type="button" title="Tăng">+</button>
                            </div>
                        </div>
                    </div>

                    <!-- Sản phẩm 2 -->
                    <div class="d-flex align-items-start border-bottom py-3">
                        <img src="/assets/image/anh11.jpg" alt="" class="w-25 mt-2 mx-2 rounded">
                        <div class="flex-grow-1">
                            <div class="d-flex justify-content-between align-items-start mt-2">
                                <h6 class="mb-3">[Bộ gội - xả - xịt dưỡng] Bộ 3 Thảo dược – Kích mọc tóc</h6>
                                <button type="button"
                                    class="btn btn-sm btn-light border-0 text-danger p-1 ms-2 rounded-circle shadow-sm"
                                    title="Xóa">
                                    <i class="bi bi-x-lg"></i>
                                </button>
                            </div>
                            <div class="text-danger fw-bold mb-2">395.000₫</div>
                            <div class="input-group input-group-sm w-auto">
                                <button class="btn btn-outline-secondary px-2" type="button"
                                    title="Giảm">−</button>
                                <input type="text" class="form-control2 text-center" value="1"
                                    min="1" style="width: 40px;">
                                <button class="btn btn-outline-secondary px-2" type="button"
                                    title="Tăng">+</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cart-footer">
                    <div class="total">TỔNG CỘNG :<strong>755.000₫</strong></div>
                    <a href="{{ route('pay') }}" class="checkout-btn">THANH TOÁN </a>
                </div>
            </div>
        </div>
    </div>
</header>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('.form-control2').forEach(function(input) {
            input.addEventListener('input', function() {
                let value = parseInt(this.value) || 1;
                if (value < 1) value = 1;
                this.value = value;
            });
        });
    });
</script>
