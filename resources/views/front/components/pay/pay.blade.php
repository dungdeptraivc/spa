<div class="container">
    <div class="text_pro  ">
        <p> Trang chủ / <span class="text-secondary"> Thanh toán </span> </p>
    </div>
    <div class="container mt-4">
        <div class="row">

            <!-- Thông tin nhận hàng -->
            <div class="col-lg-4">
                <div class="section-box">
                    <h6 class="fw-bold mb-3">Thông tin nhận hàng</h6>
                    <form>
                        <input type="email" class="pay-form-control mb-2" placeholder="Email">
                        <input type="text" class="pay-form-control mb-2" placeholder="Họ và tên">
                        <div class="input-group mb-2">
                            <input type="text" class="pay-form-controlvn" placeholder="Số điện thoại (tuỳ chọn)">
                            <span class="input-group-text p-0">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/2/21/Flag_of_Vietnam.svg"
                                    width="30">
                            </span>
                        </div>
                        <input type="text" class="pay-form-control mb-2" placeholder="Địa chỉ (tuỳ chọn)">
                        <select class="form-select mb-2">
                            <option>Tỉnh thành</option>
                        </select>
                        <select class="form-select mb-2" disabled>
                            <option>Quận huyện (tuỳ chọn)</option>
                        </select>
                        <select class="form-select mb-2" disabled>
                            <option>Phường xã (tuỳ chọn)</option>
                        </select>
                        <textarea class="pay-form-control" rows="3" placeholder="Ghi chú (tuỳ chọn)"></textarea>
                    </form>
                </div>
            </div>

            <!-- Vận chuyển + Thanh toán -->
            <div class="col-lg-4">
                <!-- Vận chuyển -->
                <div class="section-box mb-3">
                    <h6 class="fw-bold mb-3">Vận chuyển</h6>
                    <div class="alert alert-info mb-0">Vui lòng nhập thông tin giao hàng</div>
                </div>

                <!-- Thanh toán -->
                <div class="section-box">
                    <h6 class="fw-bold mb-3">Thanh toán</h6>
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="radio" name="payment" id="bank" checked>
                        <label class="form-check-label" for="bank">Chuyển khoản</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="payment" id="cod">
                        <label class="form-check-label" for="cod">Thu hộ (COD)</label>
                    </div>
                </div>
            </div>

            <!-- Đơn hàng -->
            <div class="col-lg-4">
                <div class="section-box">
                    <h6 class="fw-bold">Đơn hàng (1 sản phẩm)</h6>
                    <div class="d-flex align-items-start my-3">
                        <img src="/assets/image/anhmas.jpg" class="me-2 rounded" style="width: 60px; height: auto;">
                        <div>
                            <div>Sữa tắm tinh dầu hoa trà thơm mát</div>
                            <div class="text-end text-danger">360.000đ</div>
                        </div>
                    </div>

                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Nhập mã giảm giá">
                        <button class="btn btn-primary">Áp dụng</button>
                    </div>

                    <ul class="list-unstyled small">
                        <li class="d-flex justify-content-between"><span>Tạm tính</span><strong>360.000đ</strong></li>
                        <li class="d-flex justify-content-between"><span>Phí vận chuyển</span><span>-</span></li>
                    </ul>
                    <hr>
                    <div class="d-flex justify-content-between fw-bold">
                        <span>Tổng cộng</span>
                        <span class="text-primary">360.000đ</span>
                    </div>

                    <div class="mt-2">
                        <a href="" class="text-decoration-none small text-primary">&lt; Quay về giỏ hàng</a>
                    </div>
                    <div class="mt-3 d-grid">
                        <button class="btn btn-primary">ĐẶT HÀNG</button>
                    </div>
                </div>
            </div>

        </div>
    </div>


</div>
