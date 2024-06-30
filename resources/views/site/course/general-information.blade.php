@extends('site.course.index')

@section('course-page')
<section class="gway-section section mt-60px">
    <div class="section__title fs-24 fw-700 mb-40px mt-20px">Tại sao nên học kinh doanh Dropship</div>
    <div class="row">
        <div class="col-5 mb-24px">@include('site.course.general-information-item', ['title' => 'Chi phí khởi nghiệp thấp'])</div>
        <div class="col-5 mb-24px">@include('site.course.general-information-item', ['title' => 'Thị trường toàn cầu'])</div>
        <div class="col-5 mb-24px">@include('site.course.general-information-item', ['title' => 'Thu nhập tiềm năng'])</div>
        <div class="col-5 mb-24px">@include('site.course.general-information-item', ['title' => 'Linh hoạt về địa điểm'])</div>
        <div class="col-5 mb-24px">@include('site.course.general-information-item', ['title' => 'Dễ dàng mở rộng kinh doanh'])</div>
        <div class="col-5 mb-24px">@include('site.course.general-information-item', ['title' => 'Được hỗ trợ từ chuyên gia'])</div>
    </div>
    <div class="section__title fs-24 fw-700 mb-40px mt-20px">Dành cho ai?</div>
    <div class="row">
        <div class="col-5 mb-24px">@include('site.course.general-information-item', ['title' => 'Freelancer'])</div>
        <div class="col-5 mb-24px">@include('site.course.general-information-item', ['title' => 'Mẹ bỉm sữa'])</div>
        <div class="col-5 mb-24px">@include('site.course.general-information-item', ['title' => 'Sinh viên'])</div>
        <div class="col-5 mb-24px">@include('site.course.general-information-item', ['title' => 'Người đi làm'])</div>
    </div>
    <div class="section__title fs-24 fw-700 mb-40px mt-20px">Được gì khi tham gia khoá học?</div>
    <div class="row">
        <div class="col-12 mb-24px">@include('site.course.general-information-item', ['title' => 'Được gì khi tham gia khoá học?'])</div>
        <div class="col-12 mb-24px">@include('site.course.general-information-item', ['title' => 'Tham gia vào các bài tập và dự án thực tế để áp dụng kiến thức'])</div>
        <div class="col-12 mb-24px">@include('site.course.general-information-item', ['title' => 'Tham gia cộng đồng học viên và được hỗ trợ từ các chuyên gia ngay cả khi hoàn thành khoá học'])</div>
    </div>
</section>
@endsection