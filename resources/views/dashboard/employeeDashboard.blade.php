@extends('dashboard.index')
@section('main')
<div class="page-wrapper">

    <!-- Nội dung Trang -->
    <div class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="welcome-box">
                    <div class="welcome-img">
                        <img alt="" src="assets/img/profiles/av2.jpg">
                    </div>
                    <div class="welcome-det">
                        <h3>Chào mừng, Rin Nguyen</h3>
                        <p>Thứ Hai, 29 tháng 3 2024 </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8 col-md-8">
                <section class="dash-section">
                    <h1 class="dash-sec-title">Hôm nay</h1>
                    <div class="dash-sec-content">
                        <div class="dash-info-list">
                            <a href="#" class="dash-card text-danger">
                                <div class="dash-card-container">
                                    <div class="dash-card-icon">
                                        <i class="fa fa-hourglass-o"></i>
                                    </div>
                                    <div class="dash-card-content">
                                        <p>Rin Nguyen nghỉ ốm hôm nay</p>
                                    </div>
                                    <div class="dash-card-avatars">
                                        <div class="e-avatar"><img src="assets/img/profiles/av1.jpg" alt=""></div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="dash-info-list">
                            <a href="#" class="dash-card">
                                <div class="dash-card-container">
                                    <div class="dash-card-icon">
                                        <i class="fa fa-suitcase"></i>
                                    </div>
                                    <div class="dash-card-content">
                                        <p>Bạn đang nghỉ hôm nay</p>
                                    </div>
                                    <div class="dash-card-avatars">
                                        <div class="e-avatar"><img src="assets/img/profiles/av1.jpg" alt=""></div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="dash-info-list">
                            <a href="#" class="dash-card">
                                <div class="dash-card-container">
                                    <div class="dash-card-icon">
                                        <i class="fa fa-building-o"></i>
                                    </div>
                                    <div class="dash-card-content">
                                        <p>Bạn đang làm việc từ xa hôm nay</p>
                                    </div>
                                    <div class="dash-card-avatars">
                                        <div class="e-avatar"><img src="assets/img/profiles/av2.jpg" alt=""></div>
                                    </div>
                                </div>
                            </a>
                        </div>

                    </div>
                </section>

                <section class="dash-section">
                    <h1 class="dash-sec-title">Ngày mai</h1>
                    <div class="dash-sec-content">
                        <div class="dash-info-list">
                            <div class="dash-card">
                                <div class="dash-card-container">
                                    <div class="dash-card-icon">
                                        <i class="fa fa-suitcase"></i>
                                    </div>
                                    <div class="dash-card-content">
                                        <p>2 người sẽ nghỉ ngày mai</p>
                                    </div>
                                    <div class="dash-card-avatars">
                                        <a href="#" class="e-avatar"><img src="assets/img/profiles/av2.jpg" alt=""></a>
                                        <a href="#" class="e-avatar"><img src="assets/img/profiles/avatar-08.jpg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="dash-section">
                    <h1 class="dash-sec-title">7 ngày tới</h1>
                    <div class="dash-sec-content">
                        <div class="dash-info-list">
                            <div class="dash-card">
                                <div class="dash-card-container">
                                    <div class="dash-card-icon">
                                        <i class="fa fa-suitcase"></i>
                                    </div>
                                    <div class="dash-card-content">
                                        <p>2 người sẽ nghỉ</p>
                                    </div>
                                    <div class="dash-card-avatars">
                                        <a href="#" class="e-avatar"><img src="assets/img/profiles/av1.jpg" alt=""></a>
                                        <a href="#" class="e-avatar"><img src="assets/img/profiles/avatar-07.jpg" alt=""></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dash-info-list">
                            <div class="dash-card">
                                <div class="dash-card-container">
                                    <div class="dash-card-icon">
                                        <i class="fa fa-user-plus"></i>
                                    </div>
                                    <div class="dash-card-content">
                                        <p>Ngày đầu tiên của bạn là Thứ Năm</p>
                                    </div>
                                    <div class="dash-card-avatars">
                                        <div class="e-avatar"><img src="assets/img/profiles/av2.jpg" alt=""></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dash-info-list">
                            <a href="" class="dash-card">
                                <div class="dash-card-container">
                                    <div class="dash-card-icon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <div class="dash-card-content">
                                        <p>Ngày nghỉ Xuân vào Thứ Hai</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </section>
            </div>

            <div class="col-lg-4 col-md-4">
                <div class="dash-sidebar">
                    <section>
                        <h5 class="dash-title">Dự án</h5>
                        <div class="card">
                            <div class="card-body">
                                <div class="time-list">
                                    <div class="dash-stats-list">
                                        <h4>71</h4>
                                        <p>Tổng số Nhiệm vụ</p>
                                    </div>
                                    <div class="dash-stats-list">
                                        <h4>14</h4>
                                        <p>Nhiệm vụ Chờ</p>
                                    </div>
                                </div>
                                <div class="request-btn">
                                    <div class="dash-stats-list">
                                        <h4>2</h4>
                                        <p>Tổng số Dự án</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section>
                        <h5 class="dash-title">Nghỉ phép của bạn</h5>
                        <div class="card">
                            <div class="card-body">
                                <div class="time-list">
                                    <div class="dash-stats-list">
                                        <h4>4.5</h4>
                                        <p>Ngày đã Nghỉ</p>
                                    </div>
                                    <div class="dash-stats-list">
                                        <h4>12</h4>
                                        <p>Còn lại</p>
                                    </div>
                                </div>
                                <div class="request-btn">
                                    <a class="btn btn-primary" href="#">Xin nghỉ phép</a>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section>
                        <h5 class="dash-title">Thời gian nghỉ phép của bạn</h5>
                        <div class="card">
                            <div class="card-body">
                                <div class="time-list">
                                    <div class="dash-stats-list">
                                        <h4>5.0 Giờ</h4>
                                        <p>Đã được phê duyệt</p>
                                    </div>
                                    <div class="dash-stats-list">
                                        <h4>15 Giờ</h4>
                                        <p>Còn lại</p>
                                    </div>
                                </div>
                                <div class="request-btn">
                                    <a class="btn btn-primary" href="#">Xin nghỉ giờ</a>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section>
                        <h5 class="dash-title">Ngày lễ sắp tới</h5>
                        <div class="card">
                            <div class="card-body text-center">
                                <h4 class="holiday-title mb-0">Thứ Hai 29 Tháng 3 2024 </h4>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>

    </div>
    <!-- /Nội dung Trang -->

</div>

@endsection
