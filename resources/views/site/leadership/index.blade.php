@extends('site.layout.master')
@section('title', "Đội ngũ chuyên gia")

@section('content')
<section id="section-banner-about-us" class="gway-section section">
    <div class="banner">
        <div class="container h-100">
            <div class="row align-items-center justify-content-between h-100">
                <div class="col-md-6 col-12">
                    <div class="text-gray-800 fs-32 fs-20-mobile fw-700">Đội ngũ chuyên gia </div>
                </div>
                <div class="col-md-6 col-12">
                    <span class="text-align-justify fs-16-mobile text-gray-500 fs-20 fw-400">Đội ngũ chuyên gia của Innovator Academy cam kết mang đến những chương trình đào tạo chất lượng và hiệu quả nhất, giúp các doanh nghiệp phát triển bền vững và đạt được thành công lâu dài.</span>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="section-founder" class="gway-section section section-list-leadership section--spacing">
    <div class="container">
        <div class="row mt-60px mt-0-mobile justify-content-start">
            <div class="col-md-4 col-6">
                <a href="{{route('leadership.show', 1)}}" class="card">
                    <div class="card__image">
                        <img class="w-100 h-100 object-fit-cover" src="{{asset('assets/images/9aa948aa99b53beb62a4.jpg')}}" alt="" srcset="">
                    </div>
                    <div class="card__information align-items-center d-flex flex-column mt-20px">
                        <div class="fs-24 fs-16-mobile"><strong>Nguyễn Trọng Toản</strong></div>
                        <div class="fs-16 fs-14-mobile text-gray-500">Cổ đông sáng lập</div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-6">
                <a href="{{route('leadership.show', 1)}}" class="card">
                    <div class="card__image">
                        <img class="w-100 h-100 object-fit-cover" src="{{asset('assets/images/Nguyễn Sỹ Bình.jpg')}}" alt="" srcset="">
                    </div>
                    <div class="card__information align-items-center d-flex flex-column mt-20px">
                        <div class="fs-24 fs-16-mobile"><strong>Trần Sỹ Bình</strong></div>
                        <div class="fs-16 fs-14-mobile text-gray-500">Cổ đông sáng lập</div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-6">
                <a href="{{route('leadership.show', 1)}}" class="card">
                    <div class="card__image">
                        <img class="w-100 h-100 object-fit-cover" src="{{asset('assets/images/Đỗ Bảo Ngọc.JPG')}}" alt="" srcset="">
                    </div>
                    <div class="card__information align-items-center d-flex flex-column mt-20px">
                        <div class="fs-24 fs-16-mobile"><strong>Đỗ Bảo Ngọc</strong></div>
                        <div class="fs-16 fs-14-mobile text-gray-500">Cổ đông sáng lập</div>
                    </div>
                </a>
            </div>
            <div class="col-md-4 col-6">
                <a href="{{route('leadership.show', 1)}}" class="card">
                    <div class="card__image">
                        <img class="w-100 h-100 object-fit-cover" src="{{asset('assets/images/Đậu Ngọc Anh.jpg')}}" alt="" srcset="">
                    </div>
                    <div class="card__information align-items-center d-flex flex-column mt-20px">
                        <div class="fs-24 fs-16-mobile"><strong>Đậu Ngọc Anh</strong></div>
                        <div class="fs-16 fs-14-mobile text-gray-500">Cổ đông sáng lập</div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
@endsection