@extends('site.layout.master')
@section('title', "Bài viết")

@section('content')
<section id="section-post" class="gway-section section section--spacing">
    <div class="recent-posts container">
        <div class="row align-items-center justify-content-between">
            <div class="col-auto">
                <div class="text-gray-800 fs-28 fw-600">Bài viết</div>
            </div>
            <div class="col-auto">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Tất cả</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
        </div>
        <div class="row mt-40px">
            <div class="col-md-4">
                <div class="post">
                    <a href="{{route('posts.show', 1)}}" class="d-block recent-posts__item recent-posts__item--fullsize mt-0">
                        <div class="d-flex flex-wrap">
                            <div class="col">
                                <div class="item item__image">
                                    <img class="w-100" src="{{asset('assets/images/dropshipping-la-gi1.jpeg')}}" alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="item item__title">Bí Quyết Thành Công Với Dropship: Khám Phá Chiến Lược Đỉnh Cao</div>
                                <div class="item item__tag item__tag--info">Dropship</div>
                                <div class="item item__datetime">24/06/2024</div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="post">
                    <a href="{{route('posts.show', 1)}}" class="d-block recent-posts__item recent-posts__item--fullsize mt-0">
                        <div class="d-flex flex-wrap">
                            <div class="col">
                                <div class="item item__image h-100">
                                    <img class="w-100 h-100 object-fit-cover" src="{{asset('assets/images/8cd390dcf90bab80ae6580aa9b66e4af.png')}}" alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="item item__title">Làm Chủ Sàn Amazon: Từ Người Mới Đến Chuyên Gia</div>
                                <div class="item item__tag item__tag--info">Dropship</div>
                                <div class="item item__datetime">24/06/2024</div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="post">
                    <a href="{{route('posts.show', 1)}}" class="d-block recent-posts__item recent-posts__item--fullsize mt-0">
                        <div class="d-flex flex-wrap">
                            <div class="col">
                                <div class="item item__image">
                                    <img class="w-100" src="{{asset('assets/images/dropshipping-la-gi1.jpeg')}}" alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="item item__title">Bí Quyết Thành Công Với Dropship: Khám Phá Chiến Lược Đỉnh Cao</div>
                                <div class="item item__tag item__tag--info">Dropship</div>
                                <div class="item item__datetime">24/06/2024</div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="post">
                    <a href="{{route('posts.show', 1)}}" class="d-block recent-posts__item recent-posts__item--fullsize mt-0">
                        <div class="d-flex flex-wrap">
                            <div class="col">
                                <div class="item item__image h-100">
                                    <img class="w-100 h-100 object-fit-cover" src="{{asset('assets/images/adda3d1e3b8d49597ad63ea4c047acbc.png')}}" alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="item item__title">Livestream Bán Hàng: Nghệ Thuật Tăng Doanh Số Tức Thì</div>
                                <div class="item item__tag item__tag--info">Dropship</div>
                                <div class="item item__datetime">24/06/2024</div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="post">
                    <a href="{{route('posts.show', 1)}}" class="d-block recent-posts__item recent-posts__item--fullsize mt-0">
                        <div class="d-flex flex-wrap">
                            <div class="col">
                                <div class="item item__image">
                                    <img class="w-100" src="{{asset('assets/images/dropshipping-la-gi1.jpeg')}}" alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="item item__title">Bí Quyết Thành Công Với Dropship: Khám Phá Chiến Lược Đỉnh Cao</div>
                                <div class="item item__tag item__tag--info">Dropship</div>
                                <div class="item item__datetime">24/06/2024</div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="post">
                    <a href="{{route('posts.show', 1)}}" class="d-block recent-posts__item recent-posts__item--fullsize mt-0">
                        <div class="d-flex flex-wrap">
                            <div class="col">
                                <div class="item item__image">
                                    <img class="w-100" src="{{asset('assets/images/dropshipping-la-gi1.jpeg')}}" alt="">
                                </div>
                            </div>
                            <div class="col">
                                <div class="item item__title">Bí Quyết Thành Công Với Dropship: Khám Phá Chiến Lược Đỉnh Cao</div>
                                <div class="item item__tag item__tag--info">Dropship</div>
                                <div class="item item__datetime">24/06/2024</div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection