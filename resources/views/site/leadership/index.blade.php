@extends('site.layout.master')
@section('title', "Đội ngũ chuyên gia")

@section('content')
    <section id="section-banner-about-us" class="gway-section section">
        <div class="banner">
            <div class="container h-100">
                <div class="row align-items-center justify-content-between h-100">
                    <div class="col-6">
                        <div class="text-gray-800 fs-32 fw-700">Đội ngũ chuyên gia </div>
                    </div>
                    <div class="col-6">
                        <span class="text-align-justify text-gray-500 fs-20 fw-400">Đội ngũ chuyên gia của Innovator Academy  cam kết mang đến những chương trình đào tạo chất lượng và hiệu quả nhất, giúp các doanh nghiệp phát triển bền vững và đạt được thành công lâu dài.</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="section-founder" class="gway-section section section-list-leadership section--spacing">
        <div class="container">
            <div class="row mt-60px justify-content-around">
                <div class="col-4">
                    <a href="{{route('leadership.show', 1)}}" class="card">
                        <div class="card__image"></div>
                        <div class="card__information align-items-center d-flex flex-column mt-20px">
                            <div class="fs-24"><strong>Mr. Trần Quốc Lợi</strong></div>
                            <div class="fs-16 text-gray-500">Cổ đông sáng lập</div>
                        </div>
                    </a>
                </div>
                <div class="col-4">
                    <a href="{{route('leadership.show', 1)}}" class="card">
                        <div class="card__image"></div>
                        <div class="card__information align-items-center d-flex flex-column mt-20px">
                            <div class="fs-24"><strong>Mr. Trần Quốc Lợi</strong></div>
                            <div class="fs-16 text-gray-500">Cổ đông sáng lập</div>
                        </div>
                    </a>
                </div>
                <div class="col-4">
                    <a href="{{route('leadership.show', 1)}}" class="card">
                        <div class="card__image"></div>
                        <div class="card__information align-items-center d-flex flex-column mt-20px">
                            <div class="fs-24"><strong>Mr. Trần Quốc Lợi</strong></div>
                            <div class="fs-16 text-gray-500">Cổ đông sáng lập</div>
                        </div>
                    </a>
                </div>
                <div class="col-4">
                    <a href="{{route('leadership.show', 1)}}" class="card">
                        <div class="card__image"></div>
                        <div class="card__information align-items-center d-flex flex-column mt-20px">
                            <div class="fs-24"><strong>Mr. Trần Quốc Lợi</strong></div>
                            <div class="fs-16 text-gray-500">Cổ đông sáng lập</div>
                        </div>
                    </a>
                </div>
                <div class="col-4">
                    <a href="{{route('leadership.show', 1)}}" class="card">
                        <div class="card__image"></div>
                        <div class="card__information align-items-center d-flex flex-column mt-20px">
                            <div class="fs-24"><strong>Mr. Trần Quốc Lợi</strong></div>
                            <div class="fs-16 text-gray-500">Cổ đông sáng lập</div>
                        </div>
                    </a>
                </div>
                <div class="col-4">
                    <a href="{{route('leadership.show', 1)}}" class="card">
                        <div class="card__image"></div>
                        <div class="card__information align-items-center d-flex flex-column mt-20px">
                            <div class="fs-24"><strong>Mr. Trần Quốc Lợi</strong></div>
                            <div class="fs-16 text-gray-500">Cổ đông sáng lập</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
