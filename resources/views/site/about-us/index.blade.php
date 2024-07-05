@extends('site.layout.master')
@section('title', "Giới thiệu")

@section('content')
<section id="section-banner-about-us" class="gway-section section">
    <div class="banner">
        <div class="container h-100">
            <div class="row align-items-center justify-content-between h-100">
                <div class="col-md-6 col-12">
                    <div class="text-gray-800 fs-32 fs-20-mobile fw-700">Về chúng tôi</div>
                </div>
                <div class="col-md-6 col-12">
                    <span class="text-align-justify text-gray-500 fs-20 fw-400 fs-16-mobile">Chúng tôi quyết tâm trở thành một trung tâm đào tạo hàng đầu, là nguồn lực đáng tin cậy cho sự phát triển nhân lực ưu tú, có khả năng thích ứng linh hoạt với công nghệ 4.0 và đóng góp tích cực vào sự phát
                        triển bền vững của cộng đồng và xã hội.</span>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="section-vision-mission" class="gway-section section section--spacing">
    <div class="container px-5 px-2-mobile">
        <div class="row mt-60px mb-60px">
            <div class="col-12 text-align-center">
                <span class="fs-32 fs-20-mobile fw-700">TẦM NHÌN - SỰ MỆNH - MỤC TIÊU</span>
            </div>
        </div>
        <div class="row mt-60px pt-5">
            <div class="col-md-4 col-12">
                <div class="card">
                    <span>
                        Chúng tôi quyết tâm trở thành một trung tâm đào tạo hàng đầu, là nguồn lực đáng tin cậy cho sự phát triển nhân lực ưu tú, có khả năng thích ứng linh hoạt với công nghệ 4.0 và đóng góp tích cực vào sự phát triển bền vững của cộng đồng và xã hội
                    </span>
                    <div class="icon">
                        <svg width="80" height="80" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 40C0 17.9086 17.9086 0 40 0C62.0914 0 80 17.9086 80 40C80 62.0914 62.0914 80 40 80C17.9086 80 0 62.0914 0 40Z" fill="#FFFBF1" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M57.7525 44.1753C60.0073 41.8029 60.0073 38.1986 57.7525 35.8262C53.9496 31.825 47.4182 26.3896 39.9991 26.3896C32.5801 26.3896 26.0487 31.825 22.2458 35.8262C19.991 38.1986 19.991 41.8029 22.2458 44.1753C26.0487 48.1765 32.5801 53.6119 39.9991 53.6119C47.4182 53.6119 53.9496 48.1765 57.7525 44.1753ZM39.9991 45.8341C43.2208 45.8341 45.8325 43.2224 45.8325 40.0008C45.8325 36.7791 43.2208 34.1674 39.9991 34.1674C36.7775 34.1674 34.1658 36.7791 34.1658 40.0008C34.1658 43.2224 36.7775 45.8341 39.9991 45.8341Z"
                                fill="#FCAF17" />
                        </svg>

                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12">
                <div class="card">
                    <span>Với niềm đam mê về sự sáng tạo và sứ mệnh giáo dục, chúng tôi cam kết cung cấp những trải nghiệm học tập chất lượng cao, kích thích tinh thần khám phá và thúc đẩy sự phát triển toàn diện của học viên, từ kiến thức đến kỹ năng thực tiễn.</span>
                    <div class="icon">
                        <svg width="81" height="80" viewBox="0 0 81 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.333984 40C0.333984 17.9086 18.2426 0 40.334 0C62.4254 0 80.334 17.9086 80.334 40C80.334 62.0914 62.4254 80 40.334 80C18.2426 80 0.333984 62.0914 0.333984 40Z" fill="#FDFFEB" />
                            <path
                                d="M52.8445 57.6616C52.8269 57.6616 52.8093 57.6616 52.7917 57.6616C52.3874 57.6704 51.9788 57.6616 51.5745 57.6616H21.5862C21.5686 57.6616 21.551 57.6616 21.5378 57.6616C21.5334 57.6616 21.5334 57.6616 21.529 57.6616C21.5247 57.6616 21.5203 57.6616 21.5203 57.6616H21.5159C21.428 57.6528 21.3401 57.6265 21.2566 57.5737C20.9709 57.4067 20.8171 56.9717 21.0149 56.6816C21.0149 56.6772 21.0193 56.6729 21.0193 56.6729C21.0325 56.6509 21.0456 56.6333 21.0588 56.6157C21.6477 55.7104 22.3113 54.8491 22.9353 53.9702C24.2405 52.1245 25.5456 50.2832 26.8508 48.4375C28.3538 46.3149 29.8567 44.1924 31.3552 42.0698C32.5989 40.312 33.8425 38.5586 35.0862 36.8008C35.5037 36.2075 35.9211 35.6187 36.3386 35.0298V23.2129C36.3386 22.7822 36.6462 22.4482 37.0417 22.356C37.0989 22.3428 37.156 22.334 37.2131 22.334H37.2483H45.1365C45.6506 22.334 45.9407 22.8921 45.7034 23.3271C45.1936 24.2676 44.6882 25.2124 44.1785 26.1528C44.6882 27.0977 45.1936 28.0381 45.7034 28.9785C45.7341 29.0356 45.7561 29.0972 45.7693 29.1631C45.7825 29.2114 45.7913 29.2642 45.7913 29.3125C45.7956 29.4575 45.7473 29.5937 45.6594 29.708C45.5715 29.8223 45.6594 29.7124 45.655 29.7124L45.6506 29.7168C45.5583 29.8267 45.4353 29.9102 45.2947 29.9497C45.2419 29.9629 45.1848 29.9717 45.1277 29.9717H38.0964V35.0122C38.637 35.7681 39.1643 36.5283 39.7004 37.2842C41.0056 39.1299 42.3108 40.9712 43.616 42.8169C43.8005 43.0762 43.9851 43.3355 44.1697 43.5991C44.3454 43.8496 44.5256 44.1001 44.7014 44.3506C44.8772 44.6011 45.0574 44.8516 45.2331 45.102C46.1955 46.4644 47.1623 47.8267 48.1247 49.189C48.6521 49.9316 49.175 50.6743 49.7024 51.417C49.9089 51.7114 50.1155 52.0015 50.3264 52.2959C50.533 52.5903 50.7395 52.8804 50.946 53.1748C51.2493 53.6011 51.5525 54.0317 51.8557 54.458C52.3787 55.1963 52.8972 55.9302 53.4202 56.6685C53.7102 57.0859 53.3103 57.6616 52.8445 57.6616Z"
                                fill="#B4CD26" />
                            <path
                                d="M59.6743 51.3156C59.5381 51.6364 59.2217 51.8561 58.8701 51.8561H52.2607C52.0542 51.5617 51.8477 51.2716 51.6411 50.9772C51.4346 50.6828 51.228 50.3927 51.0171 50.0983C50.4941 49.3556 49.9668 48.613 49.4395 47.8703C48.4771 46.508 47.5103 45.1457 46.5479 43.7834C46.3721 43.5329 46.1919 43.2824 46.0161 43.0319C45.8403 42.7814 45.6602 42.5309 45.4844 42.2804C46.5039 40.9093 47.519 39.5382 48.5386 38.1628C48.71 37.9342 48.8901 37.7804 49.1802 37.7453C49.4263 37.7101 49.7515 37.776 49.9185 37.987C49.9228 37.9958 49.9272 38.0002 49.936 38.009C50.3491 38.4836 50.7139 39.0109 51.0962 39.5075C51.896 40.5402 52.6958 41.5729 53.4912 42.6056C54.4097 43.7922 55.3325 44.9831 56.251 46.1696C57.0156 47.154 57.7759 48.1427 58.5405 49.1271C58.8569 49.5358 59.1733 49.9445 59.4897 50.3532C59.7183 50.6476 59.8237 50.964 59.6743 51.3156Z"
                                fill="#B4CD26" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12">
                <div class="card">
                    <span>
                        Chúng tôi dành tâm huyết để tạo ra một môi trường đào tạo chất lượng cao, nơi kết hợp giữa công nghệ 4.0 và giáo trình thực tiễn, giúp học viên phát triển kỹ năng và sự tự tin và nắm bắt được những công thức kinh doanh hiệu quả để phát triển lĩnh vực kinh doanh cá nhân &
                        doanh nghiệp
                    </span>
                    <div class="icon">
                        <svg width="81" height="80" viewBox="0 0 81 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0.666016 40C0.666016 17.9086 18.5746 0 40.666 0C62.7574 0 80.666 17.9086 80.666 40C80.666 62.0914 62.7574 80 40.666 80C18.5746 80 0.666016 62.0914 0.666016 40Z" fill="#DDF9FF" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M43.0715 39.6564L61.1408 21.5872C61.7103 21.0177 61.7103 20.0943 61.1408 19.5248C60.5713 18.9553 59.6479 18.9553 59.0784 19.5248L53.3448 25.2584C49.9404 22.3277 45.5097 20.556 40.6651 20.556C29.9263 20.556 21.2207 29.2616 21.2207 40.0004C21.2207 50.7393 29.9263 59.4449 40.6651 59.4449C51.404 59.4449 60.1096 50.7393 60.1096 40.0004C60.1096 36.1542 58.9929 32.5689 57.066 29.5509L52.4338 34.1831C53.3021 35.9363 53.7901 37.9114 53.7901 40.0004C53.7901 47.2492 47.9139 53.1254 40.6651 53.1254C33.4164 53.1254 27.5401 47.2492 27.5401 40.0004C27.5401 32.7517 33.4164 26.8754 40.6651 26.8754C43.7641 26.8754 46.6123 27.9495 48.8576 29.7456L46.7787 31.8245C45.0746 30.5481 42.9581 29.7921 40.6651 29.7921C35.0272 29.7921 30.4568 34.3625 30.4568 40.0004C30.4568 45.6383 35.0272 50.2088 40.6651 50.2088C46.3031 50.2088 50.8735 45.6383 50.8735 40.0004C50.8735 38.7321 50.6422 37.5178 50.2195 36.3974L45.9742 40.6427C45.6569 43.2931 43.401 45.3477 40.6651 45.3477C37.712 45.3477 35.3179 42.9536 35.3179 40.0004C35.3179 37.0472 37.712 34.6532 40.6651 34.6532C41.6118 34.6532 42.5011 34.8992 43.2724 35.3308L41.0092 37.594C40.8968 37.5781 40.7819 37.5699 40.6651 37.5699C39.3228 37.5699 38.2346 38.6581 38.2346 40.0004C38.2346 41.3428 39.3228 42.431 40.6651 42.431C42.0075 42.431 43.0957 41.3428 43.0957 40.0004C43.0957 39.8837 43.0875 39.7688 43.0715 39.6564Z"
                                fill="#37C4E5" />
                        </svg>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="section-achievements" class="gway-section section section--spacing">
    <div class="container">
        <div class="row mt-60px mb-60px">
            <div class="col-12 text-align-center">
                <span class="fs-32 fw-700">THÀNH TÍCH</span>
            </div>
            <div class="col-12 text-1 mt-20px">
                <div style="max-width: 1100px" class="m-auto px-5 text-align-center">Innovator Academy chính thức trở thành đơn vị đào tạo đầu tiên tại Việt Nam được kiểm định và cấp <strong>Chứng nhận đào tạo</strong> về Thương mại điện tử từ cơ quan quản lý nhà nước </span>
                </div>
            </div>
            <div class="col-12">
                <div class="row mt-60px justify-content-around">
                    <div class="col-md-auto col-12 text-align-center">
                        <div class="text-2">10K+</div>
                        <div class="text-3">Học viên</div>
                    </div>
                    <div class="col-md-auto col-12 text-align-center">
                        <div class="text-2">75%</div>
                        <div class="text-3">Bán hàng Dropship</div>
                    </div>
                    <div class="col-md-auto col-12 text-align-center">
                        <div class="text-2">25%</div>
                        <div class="text-3">Bán hàng Amazon</div>
                    </div>
                    <div class="col-md-auto col-12 text-align-center">
                        <div class="text-2">10%</div>
                        <div class="text-3">Học viên đạt doanh <br> thu >10000$</div>
                    </div>
                    <div class="col-md-auto col-12 text-align-center">
                        <div class="text-2">55%</div>
                        <div class="text-3">Học viên đạt doanh <br> thu >3000$</div>
                    </div>
                </div>
            </div>
        </div>
</section>
<section id="section-founder" class="gway-section section section--spacing">
    <div class="container">
        <div class="row mt-60px mb-60px">
            <div class="col-12 text-align-center">
                <span class="fs-32 fw-700">BAN ĐIỀU HÀNH</span>
            </div>
            <div class="col-12 text-1 mt-20px">
                <div style="max-width: 1100px" class="m-auto px-5 text-align-center">Với đội ngũ lãnh đạo tài năng và tâm huyết, Innovator Academy luôn sẵn sàng đồng hành cùng khách hàng trên con đường chinh phục thành công.</span>
                </div>
            </div>
            <div class="col-12">
                <div class="row mt-60px justify-content-around">
                    <div class="col-md-3 col-6">
                        <div class="card">
                            <div class="card__image">
                                <img class="w-100 h-100 object-fit-cover" src="{{asset('assets/images/9aa948aa99b53beb62a4.jpg')}}" alt="" srcset="">
                            </div>
                            <div class="card__information align-items-center d-flex flex-column mt-20px">
                                <div class="fs-24 fs-16-mobile"><strong>Nguyễn Trọng Toản</strong></div>
                                <div class="fs-16 fs-14-mobile text-gray-500">Cổ đông sáng lập</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="card">
                            <div class="card__image">
                                <img class="w-100 h-100 object-fit-cover" src="{{asset('assets/images/Nguyễn Sỹ Bình.jpg')}}" alt="" srcset="">
                            </div>
                            <div class="card__information align-items-center d-flex flex-column mt-20px">
                                <div class="fs-24 fs-16-mobile"><strong>Trần Sỹ Bình</strong></div>
                                <div class="fs-16 fs-14-mobile text-gray-500">Cổ đông sáng lập</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="card">
                            <div class="card__image">
                                <img class="w-100 h-100 object-fit-cover" src="{{asset('assets/images/Đỗ Bảo Ngọc.JPG')}}" alt="" srcset="">
                            </div>
                            <div class="card__information align-items-center d-flex flex-column mt-20px">
                                <div class="fs-24 fs-16-mobile"><strong>Đỗ Bảo Ngọc</strong></div>
                                <div class="fs-16 fs-14-mobile text-gray-500">Cổ đông sáng lập</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-6">
                        <div class="card">
                            <div class="card__image">
                                <img class="w-100 h-100 object-fit-cover" src="{{asset('assets/images/Đậu Ngọc Anh.jpg')}}" alt="" srcset="">
                            </div>
                            <div class="card__information align-items-center d-flex flex-column mt-20px">
                                <div class="fs-24 fs-16-mobile"><strong>Đậu Ngọc Anh</strong></div>
                                <div class="fs-16 fs-14-mobile text-gray-500">Cổ đông sáng lập</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<section id="section-gallery-company" class="gway-section section section--spacing">
    <div class="container">
        <div class="row">
            <div class="col-12 text-align-center">
                <span class="fs-32 fw-700">Khoảnh khắc tại Innovator Academy</span>
            </div>
            <div class="col-12 list-image mt-60px">
                <div class="row flex-wrap">
                    <div class="col-md-5 col-6">
                        <img src="{{asset('assets/images/z5304126092893_7023fbd002a4839fe6bd09f2a5b2af5d.png')}}" alt="">
                    </div>
                    <div class="col-md-3 col-6">
                        <img src="{{asset('assets/images/a7519472f1f487e176a0c5b15cbb0347_2.jpg')}}" alt="" srcset="">
                    </div>
                    <div class="col-md-4 col-6">
                        <img src="{{asset('assets/images/f11b4d241dd810a927d3dabfefd0e3f7.jpg')}}" alt="">
                    </div>
                    <div class="col-md-3 col-6">
                        <img src="{{asset('assets/images/a400f9c5593c823e7ed7964bb16a40d5.jpg')}}" alt="">
                    </div>
                    <div class="col-md-3 col-6">
                        <img src="{{asset('assets/images/5622b3ba78f157c7de63bd6965edddeb.jpg')}}" alt="" srcset="">
                    </div>
                    <div class="col-md-6 col-6">
                        <img src="{{asset('assets/images/7f10572da3382da8fe12286bd43c8e0f.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="section-register-now" class="gway-section section section--spacing">
    <div class="container">
        <div class="box">
            <div class="row align-items-center">
                <div class="col-md-9 col-12">
                    <div class="text-1"><strong>Cùng nhau</strong>, hãy định hình tương lai của đổi mới kỹ thuật số</div>
                    <div class="text-2 text-gray-500 fs-20 mt-3">Hãy tham gia cùng chúng tôi trong hành trình học tập thú vị này và khám phá tiềm năng của bạn</div>
                </div>
                <div class="col-md-3 col-12 text-align-right">
                    <div class="me-auto">
                        <div class="btn btn-primary"><a href="">Đăng ký ngay</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection