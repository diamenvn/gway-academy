@extends('site.layout.master')
@section('title', "Dịch vụ")

@section('content')
<section id="section-service" class="gway-section section section--spacing">
    <div class="container">
        <div class="row mt-20px mb-60px">
            <div class="col-12 text-align-center">
                <span class="fs-32 fw-700 fs-24-mobile">Dịch vụ vận hành triển khai</span>
            </div>
        </div>
        <div class="row mt-60px gap-30-mobile justify-content-around">
            <div class="col-md-6 col-12">
                <div class="card">
                    <div class="card__header">Gói RE REVIEW & EVALUATION</div>
                    <div class="text-align-center mt-40px mb-40px">
                        <span class="fs-80 fw-700">156$</span>
                        <span class="text-gray-500 fs-20 fw-500">Tháng</span>
                    </div>
                    <div class="card__body">
                        <div class="text-align-center mb-40px">
                            <span class="fs-20 fw-700">Quyền lợi</span>
                        </div>
                        <div class="row flex-1" style="gap: 30px">
                            <div class="col-12">
                                <div class="d-flex align-items-center gap-18">
                                    <div class="col-1">@include('site.module.checkbox')</div>
                                    <span class="mx-2 fs-18 fw-400">Chuyên gia đánh giá về sản phẩm/dịch vụ</span>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="d-flex align-items-center gap-18">
                                    <div class="col-1">@include('site.module.checkbox')</div>
                                    <span class="mx-2 fs-18 fw-400">Tính phù hợp để bán hàng trên Amazon</span>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="d-flex align-items-center gap-18">
                                    <div class="col-1">@include('site.module.checkbox')</div>
                                    <span class="mx-2 fs-18 fw-400">Đánh giá mức độ cạnh tranh của ngành hàng</span>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="d-flex align-items-center gap-18">
                                    <div class="col-1">@include('site.module.checkbox')</div>
                                    <span class="mx-2 fs-18 fw-400">Tham vấn phương án triển khai tổng thể</span>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-40px">
                            <div class="col-12">
                                <div class="btn btn-primary btn-lg w-100">Đăng ký</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="card">
                    <div class="card__header">LEGAL PACK</div>
                    <div class="text-align-center mt-40px mb-40px">
                        <span class="fs-80 fw-700">79$</span>
                        <span class="text-gray-500 fs-20 fw-500">Tháng</span>
                    </div>
                    <div class="card__body">
                        <div class="text-align-center mb-40px">
                            <span class="fs-20 fw-700">Quyền lợi</span>
                        </div>
                        <div class="row flex-1" style="gap: 30px">
                            <div class="col-12">
                                <div class="d-flex align-items-center gap-18">
                                    <div class="col-1">@include('site.module.checkbox')</div>
                                    <span class="mx-2 fs-18 fw-400">Dịch vụ đăng ký bảo hộ nhãn hiệu</span>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="d-flex align-items-center gap-18">
                                    <div class="col-1">@include('site.module.checkbox')</div>
                                    <span class="mx-2 fs-18 fw-400">Dịch vụ đại diện đăng ký thuế giá trị gia tăng phạm tại thị trường Mỹ</span>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="d-flex align-items-center gap-18">
                                    <div class="col-1">@include('site.module.checkbox')</div>
                                    <span class="mx-2 fs-18 fw-400">Dịch vụ đăng ký tư vấn kinh doanh</span>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-40px">
                            <div class="col-12">
                                <div class="btn btn-primary btn-lg w-100">Đăng ký</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row gap-30-mobile mt-40px">
            <div class="col-md-4 col-12">
                <div class="card">
                    <div class="card__header">Gói giải pháp cơ bản PLATIUM</div>
                    <div class="text-align-center mt-40px mb-40px">
                        <span class="fs-80 fw-700">156$</span>
                        <span class="text-gray-500 fs-20 fw-500">Tháng</span>
                    </div>
                    <div class="card__body">
                        <div class="text-align-center mb-40px">
                            <span class="fs-20 fw-700">Quyền lợi</span>
                        </div>
                        <div class="row flex-1" style="gap: 30px">
                            <div class="col-12">
                                <div class="d-flex align-items-center gap-18">
                                    <div class="col-1">@include('site.module.checkbox')</div>
                                    <span class="mx-2 fs-18 fw-400">Đăng ký tài khoản dựa theo thông tin chính chủ (doanh nghiệp/cá nhân..)</span>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="d-flex align-items-center gap-18">
                                    <div class="col-1">@include('site.module.checkbox')</div>
                                    <span class="mx-2 fs-18 fw-400">Tạo trang bán hàng chuyên nghiệp</span>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="d-flex align-items-center gap-18">
                                    <div class="col-1">@include('site.module.checkbox')</div>
                                    <span class="mx-2 fs-18 fw-400">Listing sản phẩm (Phía công ty cần cung cấp thông tin hồ sơ, chuẩn bị hình ảnh sản phẩm cụ thể theo yêu cầu để đảm bảo quá trình triển khai)</span>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-40px">
                            <div class="col-12">
                                <div class="btn btn-primary btn-lg w-100">Đăng ký</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12">
                <div class="card">
                    <div class="card__header">Gói giải pháp nâng cao TITAN</div>
                    <div class="text-align-center mt-40px mb-40px">
                        <span class="fs-80 fw-700">79$</span>
                        <span class="text-gray-500 fs-20 fw-500">Tháng</span>
                    </div>
                    <div class="card__body">
                        <div class="text-align-center mb-40px">
                            <span class="fs-20 fw-700">Quyền lợi</span>
                        </div>
                        <div class="row flex-1" style="gap: 30px">
                            <div class="col-12">
                                <div class="d-flex align-items-center gap-18">
                                    <div class="col-1">@include('site.module.checkbox')</div>
                                    <span class="mx-2 fs-18 fw-400">Đăng ký tài khoản dựa theo thông tin chính chủ (doanh nghiệp/cá nhân..)</span>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="d-flex align-items-center gap-18">
                                    <div class="col-1">@include('site.module.checkbox')</div>
                                    <span class="mx-2 fs-18 fw-400">Nghiên cứu phân tích ngách sản phẩm trên Amazon</span>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="d-flex align-items-center gap-18">
                                    <div class="col-1">@include('site.module.checkbox')</div>
                                    <span class="mx-2 fs-18 fw-400">Thiết kế gian hàng Amazon Content A+ (Phía công ty cần cung cấp thông tin hồ sơ, chuẩn bị hình ảnh sản phẩm cụ thể theo yêu cầu để đảm bảo quá trình triển khai)</span>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-40px">
                            <div class="col-12">
                                <div class="btn btn-primary btn-lg w-100">Đăng ký</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12">
                <div class="card">
                    <div class="card__header">Gói đồng hành phát triển DIAMOND</div>
                    <div class="text-align-center mt-40px mb-40px">
                        <span class="fs-80 fw-700">79$</span>
                        <span class="text-gray-500 fs-20 fw-500">Tháng</span>
                    </div>
                    <div class="card__body">
                        <div class="text-align-center mb-40px">
                            <span class="fs-20 fw-700">Quyền lợi</span>
                        </div>
                        <div class="row flex-1" style="gap: 30px">
                            <div class="col-12">
                                <div class="d-flex align-items-center gap-18">
                                    <div class="col-1">@include('site.module.checkbox')</div>
                                    <span class="mx-2 fs-18 fw-400">Đăng ký tài khoản dựa theo thông tin chính chủ (doanh nghiệp/cá nhân..)</span>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="d-flex align-items-center gap-18">
                                    <div class="col-1">@include('site.module.checkbox')</div>
                                    <span class="mx-2 fs-18 fw-400">Nghiên cứu phân tích ngách sản phẩm trên Amazon</span>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="d-flex align-items-center gap-18">
                                    <div class="col-1">@include('site.module.checkbox')</div>
                                    <span class="mx-2 fs-18 fw-400">Thiết kế gian hàng Amazon Content A+</span>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="d-flex align-items-center gap-18">
                                    <div class="col-1">@include('site.module.checkbox')</div>
                                    <span class="mx-2 fs-18 fw-400">Quản lý tồn kho nền tảng Amazon</span>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="d-flex align-items-center gap-18">
                                    <div class="col-1">@include('site.module.checkbox')</div>
                                    <span class="mx-2 fs-18 fw-400">Chạy Ads PPC (Pay-per-click)</span>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="d-flex align-items-center gap-18">
                                    <div class="col-1">@include('site.module.checkbox')</div>
                                    <span class="mx-2 fs-18 fw-400">Quản lý vận hàng bán hàng Dropship FBM &FBA</span>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-40px">
                            <div class="col-12">
                                <div class="btn btn-primary btn-lg w-100">Đăng ký</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-60px">
            <div class="col-12 text-align-center">
                <span class="fs-32 fw-700">Dịch vụ đào tạo coaching và chuyển giao</span>
            </div>
        </div>
        <div class="row mt-60px justify-content-around">
            <div class="col-md-6 col-12">
                <div class="card">
                    <div class="card__header">Đào tạo 1-1 (6 tháng)</div>
                    <div class="text-align-center mt-40px mb-40px">
                        <span class="fs-80 fw-700">156$</span>
                        <span class="text-gray-500 fs-20 fw-500">Tháng</span>
                    </div>
                    <div class="card__body">
                        <div class="text-align-center mb-40px">
                            <span class="fs-20 fw-700">Quyền lợi</span>
                        </div>
                        <div class="row flex-1" style="gap: 30px">
                            <div class="col-12">
                                <div class="d-flex align-items-center gap-18">
                                    <div class="col-1">@include('site.module.checkbox')</div>
                                    <span class="mx-2 fs-18 fw-400">Đào tạo toàn bộ các modules về kinh doanh trên Amazon cho cá nhân, team và support theo timeline đưa ra</span>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="d-flex align-items-center gap-18">
                                    <div class="col-1">@include('site.module.checkbox')</div>
                                    <span class="mx-2 fs-18 fw-400">Tư vấn chiến lược cơ bẩn phát triển thương hiệu tại Mỹ thông qua nền tảng Amazon</span>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="d-flex align-items-center gap-18">
                                    <div class="col-1">@include('site.module.checkbox')</div>
                                    <span class="mx-2 fs-18 fw-400">Support cá nhân, team bán hàng trên Amazon (VD: Support tối ưu QC, quản lý hàng hoá, vận chuyển...)</span>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-40px">
                            <div class="col-12">
                                <div class="btn btn-primary btn-lg w-100">Đăng ký</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="card">
                    <div class="card__header">Đào tạo 1-1 nâng cao và chuyên sâu (1 - 3 năm)</div>
                    <div class="text-align-center mt-40px mb-40px">
                        <span class="fs-80 fw-700">79$</span>
                        <span class="text-gray-500 fs-20 fw-500">Tháng</span>
                    </div>
                    <div class="card__body">
                        <div class="text-align-center mb-40px">
                            <span class="fs-20 fw-700">Quyền lợi</span>
                        </div>
                        <div class="row flex-1" style="gap: 30px">
                            <div class="col-12">
                                <div class="d-flex align-items-center gap-18">
                                    <div class="col-1">@include('site.module.checkbox')</div>
                                    <span class="mx-2 fs-18 fw-400">Đào tạo toàn bộ các modules cơ bản và nâng cao về kinh doanh trong và ngoài Amazon cho cá nhân, team và support theo timeline đưa ra</span>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="d-flex align-items-center gap-18">
                                    <div class="col-1">@include('site.module.checkbox')</div>
                                    <span class="mx-2 fs-18 fw-400">Tư vấn đưa ra chiến lược phát triển thương hiệu tại Mỹ thông qua nền tảng trong và ngoài Amazon</span>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="d-flex align-items-center gap-18">
                                    <div class="col-1">@include('site.module.checkbox')</div>
                                    <span class="mx-2 fs-18 fw-400">Đồng hành cùng cá nhân, team xây dựng lộ trình phát triển thương hiệu, quản lý hàng tồn kho, xử lý các vấn đề liên quan đến tài khoản, listing …</span>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="d-flex align-items-center gap-18">
                                    <div class="col-1">@include('site.module.checkbox')</div>
                                    <span class="mx-2 fs-18 fw-400">Support học viên trong quá trình vận hành, VD: chạy Ads trên Amazon, tối ưu hoá quảng cáo, xây dựng các chiến dịch Marketing ngoài Amazon,...</span>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-40px">
                            <div class="col-12">
                                <div class="btn btn-primary btn-lg w-100">Đăng ký</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection