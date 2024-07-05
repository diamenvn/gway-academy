@extends('site.layout.master')

@section('content')
<section id="secion-course" class="gway-section custom-container-md section section--spacing pb-0 hidden-in-mobile">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="btn btn-back" role="button">
                    <a href="{{ route('leadership.index') }}" class="d-block">
                        <svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M8.84171 19.8247C8.3861 19.3691 8.3861 18.6304 8.84171 18.1748L15.0639 11.9526C15.5195 11.497 16.2582 11.497 16.7138 11.9526C17.1695 12.4082 17.1695 13.1469 16.7138 13.6025L12.4832 17.8331L28.3333 17.8331C28.9777 17.8331 29.5 18.3555 29.5 18.9998C29.5 19.6441 28.9777 20.1665 28.3333 20.1665L12.4832 20.1665L16.7138 24.397C17.1695 24.8527 17.1695 25.5914 16.7138 26.047C16.2582 26.5026 15.5195 26.5026 15.0639 26.047L8.84171 19.8247Z"
                                fill="#2A2A2A" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="section-founder-detail" class="gway-section custom-container-md section section--spacing">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 col-12">
                <div class="px-1-mobile">
                    <div class="card">
                        <div style="height: 640px" class="card__image">
                            <img class="w-100 h-100 object-fit-cover" src="{{asset('assets/images/9aa948aa99b53beb62a4.jpg')}}" alt="" srcset="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="px-5 px-1-mobile">
                    <div class="text-gray-800 fs-40 fw-700">Nguyễn Trọng Toản</div>
                    <div class="fs-24 fw-400 text-gray-500">Chủ tịch hội dồng quản trị</div>
                    <div class="fs-20 text-gray-500 mt-40px">
                        <div>
                            <div>Đồng sáng lập iCheck</div>
                            <div>Đồng sáng lập HecaTech</div>
                            <div>Kinh nghiệm làm việc tại các vị trí cấp cao tại VNPT và VMG 15 năm đầu tư trong lĩnh vực
                                công nghệ thông tin  6 năm đầu tư trong lĩnh vực thương mại điện tử
                                Từng gọi vốn thành công với nhiều Start-Up
                                Kinh nghiệm trong xây dựng chiến lược, quản lý tổ chức và vận hành bộ máy theo quy mô
                                tập đoàn</div>
                        </div>
                    </div>
                </div>
                <div class="px-5">
                    <div class="mt-40px">
                        <div class="mb-3">
                            <svg width="48" height="49" viewBox="0 0 48 49" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 24.5C0 11.2452 10.7452 0.5 24 0.5C37.2548 0.5 48 11.2452 48 24.5C48 37.7548 37.2548 48.5 24 48.5C10.7452 48.5 0 37.7548 0 24.5Z" fill="#FFFBF1" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M11.459 18.6667C11.459 15.6061 13.9401 13.125 17.0007 13.125H31.0007C34.0612 13.125 36.5423 15.6061 36.5423 18.6667V30.3333C36.5423 33.3939 34.0612 35.875 31.0007 35.875H17.0007C13.9401 35.875 11.459 33.3939 11.459 30.3333V18.6667ZM17.0007 14.875C14.9066 14.875 13.209 16.5726 13.209 18.6667V30.3333C13.209 32.4274 14.9066 34.125 17.0007 34.125H31.0007C33.0947 34.125 34.7923 32.4274 34.7923 30.3333V18.6667C34.7923 16.5726 33.0947 14.875 31.0007 14.875H17.0007Z"
                                    fill="#FCAF17" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M11.6508 18.1204C11.9526 17.7431 12.5033 17.6819 12.8806 17.9838L21.632 24.9849C23.0168 26.0927 24.9845 26.0927 26.3693 24.9849L35.1207 17.9838C35.4981 17.6819 36.0487 17.7431 36.3506 18.1204C36.6525 18.4978 36.5913 19.0484 36.214 19.3503L27.4625 26.3514C25.4386 27.9706 22.5628 27.9706 20.5388 26.3514L11.7874 19.3503C11.4101 19.0484 11.3489 18.4978 11.6508 18.1204Z"
                                    fill="#FCAF17" />
                            </svg>
                            <span>Nguyentrongtoan@gmail.com</span>
                        </div>
                        <div class="mb-3">
                            <svg width="48" height="49" viewBox="0 0 48 49" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 24.5C0 11.2452 10.7452 0.5 24 0.5C37.2548 0.5 48 11.2452 48 24.5C48 37.7548 37.2548 48.5 24 48.5C10.7452 48.5 0 37.7548 0 24.5Z" fill="#FFFBF1" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M15.8333 14.875C15.0279 14.875 14.375 15.5279 14.375 16.3333C14.375 26.1594 22.3406 34.125 32.1667 34.125C32.9721 34.125 33.625 33.4721 33.625 32.6667V30.7464C33.625 30.1501 33.2619 29.6139 32.7083 29.3924L30.3351 28.4431C29.6309 28.1614 28.8283 28.4666 28.4891 29.145L28.2826 29.558C28.1062 29.9109 27.7153 30.1021 27.3284 30.0247L27.5 29.1667C27.3284 30.0247 27.3287 30.0247 27.3284 30.0247L27.3272 30.0244L27.3258 30.0242L27.3221 30.0234L27.3116 30.0212L27.278 30.014C27.2502 30.0078 27.2117 29.999 27.1633 29.9873C27.0665 29.9637 26.9301 29.9283 26.7609 29.8785C26.423 29.7791 25.9523 29.622 25.4053 29.3876C24.3155 28.9205 22.8988 28.1362 21.6313 26.8687C20.3638 25.6012 19.5795 24.1845 19.1124 23.0947C18.878 22.5478 18.7209 22.077 18.6215 21.7391C18.5717 21.5699 18.5363 21.4335 18.5127 21.3367C18.501 21.2883 18.4922 21.2498 18.486 21.222L18.4788 21.1884L18.4766 21.1779L18.4758 21.1742L18.4756 21.1728C18.4755 21.1725 18.4753 21.1716 19.3333 21L18.4753 21.1716C18.3979 20.7847 18.5891 20.3938 18.942 20.2174L19.355 20.0109C20.0334 19.6717 20.3386 18.8691 20.0569 18.1649L19.1076 15.7917C18.8862 15.2381 18.3499 14.875 17.7536 14.875H15.8333ZM20.3638 21.4516C21.6964 20.6468 22.2692 18.9837 21.6817 17.5149L20.7325 15.1418C20.2452 13.9237 19.0655 13.125 17.7536 13.125H15.8333C14.0614 13.125 12.625 14.5614 12.625 16.3333C12.625 27.1259 21.3741 35.875 32.1667 35.875C33.9386 35.875 35.375 34.4386 35.375 32.6667V30.7464C35.375 29.4345 34.5763 28.2548 33.3582 27.7675L30.9851 26.8183C29.5163 26.2308 27.8532 26.8036 27.0484 28.1362C26.789 28.0533 26.4629 27.9369 26.0947 27.7791C25.1428 27.3712 23.9346 26.6971 22.8687 25.6313C21.8029 24.5654 21.1288 23.3572 20.7209 22.4053C20.5631 22.0371 20.4467 21.711 20.3638 21.4516Z"
                                    fill="#FCAF17" />
                            </svg>
                            <span>+84 347 000 678</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="section-see-more" class="gway-section custom-container-md section section--spacing">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-auto">
                <span class="fs-24 fw-700">Xem thêm</span>
            </div>
            <div class="col-auto">
                <span class="px-2 btn">
                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 24C0 10.7452 10.7452 0 24 0C37.2548 0 48 10.7452 48 24C48 37.2548 37.2548 48 24 48C10.7452 48 0 37.2548 0 24Z" fill="#EAEAEA" />
                        <path d="M27.4992 33.2398L19.8925 25.6331C18.9942 24.7348 18.9942 23.2648 19.8925 22.3664L27.4992 14.7598" stroke="#555555" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </span>
                <span class="px-2 btn">
                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 24C0 10.7452 10.7452 0 24 0C37.2548 0 48 10.7452 48 24C48 37.2548 37.2548 48 24 48C10.7452 48 0 37.2548 0 24Z" fill="#EAEAEA" />
                        <path d="M20.3945 33.2398L28.0012 25.6331C28.8995 24.7348 28.8995 23.2648 28.0012 22.3664L20.3945 14.7598" stroke="#555555" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>

                </span>
            </div>
        </div>
        <div class="row mt-20px">
            <div class="col-md-3 col-6">
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
            <div class="col-md-3 col-6">
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
            <div class="col-md-3 col-6">
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
            <div class="col-md-3 col-6">
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