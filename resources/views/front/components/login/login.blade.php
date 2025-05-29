<div class="container ">
    <div class="text_pro  ">
        <p> Trang chủ / <span class="text-secondary"> Đăng nhập </span> </p>
    </div>
    <div class=" bg_login mb-5">
        <div class="text-center">
            <h1 class="login text-center "> Đăng nhập tài khoản </h1>
            <p>Bạn chưa có tài khoản <a href="{{ route('register') }}" class="text-decoration-none"> Đăng kí ngay </a></p>
            <input type="email" class="form-control1 w-50 " placeholder="Email" required="">
            <input type="text" class="form-control1 mt-3 w-50" placeholder="Mat khau" required="">
            <p class="mt-2">Bạn quên mật khẩu <a href="{{ route('forgost') }}" class="text-decoration-none "> Nhấn vào đây </a></p>
            <div class="mb-3">
            <a href=""><button type="button" class="btn btn-secondary mb-3">Subbmit</button></a>
            </div>
        </div>
    </div>
</div>
