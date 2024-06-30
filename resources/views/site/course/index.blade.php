@extends('site.layout.master')

@section('content')
<section id="secion-course" class="gway-section section section--spacing">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="btn btn-back mb-60px" role="button">
                    <a href="" class="d-block">
                        <svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M8.84171 19.8247C8.3861 19.3691 8.3861 18.6304 8.84171 18.1748L15.0639 11.9526C15.5195 11.497 16.2582 11.497 16.7138 11.9526C17.1695 12.4082 17.1695 13.1469 16.7138 13.6025L12.4832 17.8331L28.3333 17.8331C28.9777 17.8331 29.5 18.3555 29.5 18.9998C29.5 19.6441 28.9777 20.1665 28.3333 20.1665L12.4832 20.1665L16.7138 24.397C17.1695 24.8527 17.1695 25.5914 16.7138 26.047C16.2582 26.5026 15.5195 26.5026 15.0639 26.047L8.84171 19.8247Z"
                                fill="#2A2A2A" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-8">
                <div class="fs-48 fw-700">Khóa học Dropship</div>
                <div class="fs-20 fw-400 text-gray-500 mt-20px">Khóa học Dropship tại Innovator Academy được thiết kế để giúp bạn bước chân vào thế giới kinh doanh trực tuyến một cách dễ dàng và hiệu quả. Với phương pháp giảng dạy sinh động, chúng tôi sẽ dẫn dắt bạn từ những bước đầu tiên đến khi
                    bạn
                    có thể
                    tự tin quản
                    lý một cửa hàng dropshipping thành công.</div>
                <div class="list-btn-navigation-course mt-60px">
                    <div class="d-flex w-100 gap-13">
                        <div class="btn {{Request::route()->getName() == 'course/general-information' ? 'btn-primary' : 'btn-secondary'}}"><a href="{{route('course/general-information')}}">Thông tin chung</a></div>
                        <div class="btn {{Request::route()->getName() == 'course/lesson-information' ? 'btn-primary' : 'btn-secondary'}}"><a href="{{route('course/lesson-information')}}">Nội dung khóa học</a></div>
                        <div class="btn {{Request::route()->getName() == 'course/rating' ? 'btn-primary' : 'btn-secondary'}}"><a href="{{route('course/rating')}}">Đánh giá</a></div>
                    </div>
                </div>
                @yield('course-page')
            </div>
            <div class="col-4">
                <div class="widget">
                    <div class="w-100 h-auto mb-24px">
                        <img class="w-100 border-radius-8px" src="{{asset('assets/images/dd192c77a3555738ea4c509fac562db6.png')}}" alt="" srcset="">
                    </div>
                    <div class="mb-24px">
                        <div class="border-radius-8px course-discount-box">
                            <div class="row justify-content-between">
                                <div class="col-auto">
                                    <div class="w-100">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M8.22538 18.2941C8.44586 18.3883 8.70221 18.3097 8.83098 18.1062L14.6904 8.79635C14.7852 8.64566 14.791 8.4554 14.7051 8.29996C14.6193 8.14404 14.4553 8.04723 14.2774 8.04723H10.3669L11.8212 2.27545C11.8799 2.04228 11.7611 1.80146 11.5404 1.70657C11.321 1.61217 11.063 1.6913 10.9348 1.89443L5.07538 11.2043C4.98049 11.355 4.97476 11.5453 5.0606 11.7007C5.14644 11.8566 5.31047 11.9534 5.48834 11.9534H9.39888L7.94452 17.7252C7.88586 17.9584 8.00458 18.1992 8.22538 18.2941Z"
                                                fill="#FFDD2B" />
                                        </svg>
                                        <span class="fw-500" style="line-height: 18px">Ưu đãi đặc biệt</span>
                                    </div>
                                    <div class="w-100 mt-2">
                                        <span class="fs-20 fw-500" style="line-height: 32px">11.290.000đ</span>
                                    </div>
                                    <div class="w-100 mt-2">
                                        <span class="fw-500" style="opacity: 0.5; text-decoration: line-through;">15.720.000đ</span>
                                        <span class="p-1 ms-2 border-radius-8px bg-gray-0" style="color: #E81D2B">-25%</span>
                                    </div>
                                </div>
                                <div class="col-auto text-align-right">
                                    <div class="w-100">Kết thúc sau</div>
                                    <div class="d-flex align-items-center mt-2">
                                        <span class="d-flex align-items-center justify-content-center border-radius-8px bg-gray-0" style="background: rgba(255, 255, 255, 0.30); width: 38px; height: 38px;">10</span>
                                        <span class="fs-25 px-1">:</span>
                                        <span class="d-flex align-items-center justify-content-center border-radius-8px bg-gray-0" style="background: rgba(255, 255, 255, 0.30); width: 38px; height: 38px;">30</span>
                                        <span class="fs-25 px-1">:</span>
                                        <span class="d-flex align-items-center justify-content-center border-radius-8px bg-gray-0" style="background: rgba(255, 255, 255, 0.30); width: 38px; height: 38px;">15</span>
                                    </div>
                                    <div class="w-100 mt-2">12 người đã đặt</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-24px">
                        <div class="course-widget-info">
                            <div class="fs-20 fw-700 course-widget__title">Khóa học Dropship</div>
                            <div class="d-flex gap-13 align-items-center mb-24px">
                                <div class="col-1">
                                    <svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M14 10.5C14 10.9688 13.7812 11.3438 13.5 11.625V14.1562C13.7812 14.3438 14 14.6562 14 15C14 15.5625 13.5312 16 13 16H3C1.3125 16 0 14.6875 0 13V3C0 1.34375 1.3125 0 3 0H6V6C6 6.4375 6.46875 6.65625 6.78125 6.40625L8.5 5L10.1875 6.375C10.5 6.625 11 6.40625 11 6V0H12.5C13.3125 0 14 0.6875 14 1.5V10.5ZM12 14V12H3C2.4375 12 2 12.4688 2 13C2 13.5625 2.4375 14 3 14H12Z"
                                            fill="#7F7F7F" />
                                    </svg>
                                </div>
                                <div class="flex-1">Số buổi: <span class="text-gray-900 fw-600">16</span></div>
                            </div>
                            <div class="d-flex gap-13 align-items-center mb-24px">
                                <div class="col-1">
                                    <svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M7 8C4.78125 8 3 6.21875 3 4C3 1.8125 4.78125 0 7 0C9.1875 0 11 1.8125 11 4C11 6.21875 9.1875 8 7 8ZM8.5625 9.5C11.5625 9.5 14 11.9375 14 14.9375C14 15.5312 13.5 16 12.9062 16H1.0625C0.46875 16 0 15.5312 0 14.9375C0 11.9375 2.40625 9.5 5.40625 9.5H8.5625Z"
                                            fill="#7F7F7F" />
                                    </svg>

                                </div>
                                <div class="flex-1">Số lượng chỗ: <span class="text-gray-900 fw-600">16/20</span></div>
                            </div>
                            <div class="d-flex gap-13 align-items-center mb-24px">
                                <div class="col-1">
                                    <svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M18.875 2.59375C18.875 2.6875 19.4688 5.25 17.75 7.6875C16.5625 9.4375 14.5938 10.6562 11.875 11.375C11.3125 11.5312 10.9062 12.0625 10.9062 12.6562C10.9062 13.4062 11.5 14 12.25 14H12.4062C13.2188 14 13.9062 14.6875 13.9062 15.5C13.9062 15.7812 13.7188 16 13.4375 16H6.46875C6.21875 16 6 15.7812 6 15.5C6 14.6875 6.65625 14 7.5 14H7.625C8.375 14 9 13.4062 8.96875 12.6562C8.96875 12.0625 8.59375 11.5312 8 11.375C5.28125 10.6562 3.3125 9.4375 2.15625 7.6875C0.5 5.25 1.09375 2.6875 1.09375 2.59375C1.1875 2.25 1.5 2 1.84375 2H5C4.96875 1.625 4.96875 1.28125 5 0.96875C5 0.4375 5.4375 0 6 0H13.9688C14.5312 0 14.9688 0.4375 14.9688 0.96875C15 1.28125 15 1.625 14.9688 2H18.125C18.4688 2 18.7812 2.25 18.875 2.59375ZM3.40625 6.875C4.125 7.96875 5.28125 8.8125 6.8125 9.4375C5.65625 7.625 5.1875 5.375 5 3.5H2.5C2.46875 4.25 2.53125 5.59375 3.40625 6.875ZM16.5625 6.875C17.4375 5.59375 17.5 4.25 17.4688 3.5H14.9688C14.7812 5.375 14.3125 7.625 13.1562 9.4375C14.6875 8.8125 15.8438 7.96875 16.5625 6.875Z"
                                            fill="#7F7F7F" />
                                    </svg>
                                </div>
                                <div class="flex-1">Trình độ: <span class="text-gray-900 fw-600">Cơ bản</span></div>
                            </div>
                            <div class="d-flex gap-13 align-items-center mb-24px">
                                <div class="col-1">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.29043 6H11.9241C13.8617 6 15.2145 7.33523 15.2145 9.24873V14.7513C15.2145 16.6648 13.8617 18 11.9241 18H7.29043C5.35281 18 4 16.6648 4 14.7513V9.24873C4 7.33523 5.35281 6 7.29043 6Z" fill="#7F7F7F" />
                                        <path
                                            d="M18.3664 7.90319C18.7176 7.72451 19.1296 7.74319 19.4648 7.95436C19.8 8.16471 20 8.53019 20 8.92979V15.0707C20 15.4711 19.8 15.8358 19.4648 16.0461C19.2816 16.1607 19.0768 16.2191 18.8704 16.2191C18.6984 16.2191 18.5264 16.1785 18.3656 16.0965L17.1808 15.4987C16.7424 15.2762 16.4704 14.8295 16.4704 14.3332V9.66644C16.4704 9.16938 16.7424 8.72268 17.1808 8.50177L18.3664 7.90319Z"
                                            fill="#7F7F7F" />
                                    </svg>
                                </div>
                                <div class="flex-1">Hình thức: <span class="text-gray-900 fw-600">Online</span></div>
                            </div>
                            <div class="btn btn-xxl btn-primary w-100 mb-24px">Đăng ký ngay</div>
                            <hr>
                            <div class="text-gray-700 fw-700 fs-16 mt-20px mb-24px">Chia sẻ khóa học</div>
                            <div class="d-flex gap-18">
                                <span><svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 16C0 24.8366 7.16344 32 16 32C24.8366 32 32 24.8366 32 16C32 7.16344 24.8366 0 16 0C7.16344 0 0 7.16344 0 16Z" fill="#7F7F7F" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M21.6 10.3C20.1 8.8 18.1 8 16 8C11.6 8 8 11.6 8 16C8 17.4 8.40001 18.8 9.10001 20L8 24L12.2 22.9C13.4 23.5 14.7 23.9 16 23.9C20.4 23.9 24 20.3 24 15.9C24 13.8 23.1 11.8 21.6 10.3ZM16 22.6C14.8 22.6 13.6 22.3 12.6 21.7L12.4 21.6L9.89999 22.3L10.6 19.9L10.4 19.6C9.69999 18.5 9.39999 17.3 9.39999 16.1C9.39999 12.5 12.4 9.5 16 9.5C17.8 9.5 19.4 10.2 20.7 11.4C22 12.7 22.6 14.3 22.6 16.1C22.6 19.6 19.7 22.6 16 22.6ZM19.6 17.6C19.4 17.5 18.4 17 18.2 17C18 16.9 17.9 16.9 17.8 17.1C17.7 17.3 17.3 17.7 17.2 17.9C17.1 18 17 18 16.8 18C16.6 17.9 16 17.7 15.2 17C14.6 16.5 14.2 15.8 14.1 15.6C14 15.4 14.1 15.3 14.2 15.2C14.3 15.1 14.4 15 14.5 14.9C14.6 14.8 14.6 14.7 14.7 14.6C14.8 14.5 14.7 14.4 14.7 14.3C14.7 14.2 14.3 13.2 14.1 12.8C14 12.5 13.8 12.5 13.7 12.5C13.6 12.5 13.5 12.5 13.3 12.5C13.2 12.5 13 12.5 12.8 12.7C12.6 12.9 12.1 13.4 12.1 14.4C12.1 15.4 12.8 16.3 12.9 16.5C13 16.6 14.3 18.7 16.3 19.5C18 20.2 18.3 20 18.7 20C19.1 20 19.9 19.5 20 19.1C20.2 18.6 20.2 18.2 20.1 18.2C20 17.7 19.8 17.7 19.6 17.6Z"
                                            fill="white" />
                                    </svg>
                                </span>
                                <span>
                                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 16C0 24.8366 7.16344 32 16 32C24.8366 32 32 24.8366 32 16C32 7.16344 24.8366 0 16 0C7.16344 0 0 7.16344 0 16Z" fill="#7F7F7F" />
                                        <path d="M24 16C24 11.6 20.4 8 16 8C11.6 8 8 11.6 8 16C8 20 10.9 23.3 14.7 23.9V18.3H12.7V16H14.7V14.2C14.7 12.2 15.9 11.1 17.7 11.1C18.6 11.1 19.5 11.3 19.5 11.3V13.3H18.5C17.5 13.3 17.2 13.9 17.2 14.5V16H19.4L19 18.3H17.1V24C21.1 23.4 24 20 24 16Z"
                                            fill="white" />
                                    </svg>

                                </span>
                                <span><svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M0 16C0 24.8366 7.16344 32 16 32C24.8366 32 32 24.8366 32 16C32 7.16344 24.8366 0 16 0C7.16344 0 0 7.16344 0 16Z" fill="#7F7F7F" />
                                        <path
                                            d="M8.09992 15.7083C12.3949 13.8371 15.2589 12.6034 16.6919 12.0074C20.7834 10.3056 21.6335 10.01 22.1877 10.0001C22.3095 9.99805 22.582 10.0283 22.7586 10.1715C22.9076 10.2924 22.9486 10.4558 22.9683 10.5705C22.9879 10.6851 23.0123 10.9464 22.9929 11.1505C22.7712 13.4801 21.8118 19.1335 21.3237 21.7427C21.1172 22.8468 20.7105 23.217 20.3168 23.2532C19.4613 23.3319 18.8116 22.6878 17.9829 22.1446C16.6862 21.2946 15.9537 20.7654 14.695 19.936C13.2404 18.9774 14.1834 18.4506 15.0124 17.5896C15.2293 17.3643 18.999 13.9355 19.0719 13.6244C19.0811 13.5855 19.0895 13.4405 19.0034 13.3639C18.9172 13.2874 18.7901 13.3136 18.6983 13.3344C18.5683 13.3639 16.4968 14.7331 12.4839 17.4419C11.8959 17.8457 11.3633 18.0424 10.8862 18.0321C10.3601 18.0207 9.34822 17.7346 8.59598 17.4901C7.67333 17.1902 6.94002 17.0316 7.00388 16.5223C7.03714 16.257 7.40248 15.9856 8.09992 15.7083Z"
                                            fill="white" />
                                    </svg>
                                </span>
                                <span><svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M0 16C0 7.16344 7.16344 0 16 0C24.8366 0 32 7.16344 32 16C32 24.8366 24.8366 32 16 32C7.16344 32 0 24.8366 0 16ZM22.1 11.5C22.8 11.4 23.4 11.3 24 11C23.6 11.7 23 12.3 22.3 12.7C22.5 17.4 19.1 22.5 13 22.5C11.2 22.5 9.5 21.9 8 21C9.7 21.2 11.5 20.7 12.7 19.8C11.2 19.8 10 18.8 9.6 17.5C10.1 17.6 10.6 17.5 11.1 17.4C9.6 17 8.5 15.6 8.5 14.1C9 14.3 9.5 14.5 10 14.5C8.6 13.5 8.1 11.6 9 10.1C10.7 12.1 13.1 13.4 15.8 13.5C15.3 11.5 16.9 9.5 19 9.5C19.9 9.5 20.8 9.9 21.4 10.5C22.2 10.3 22.9 10.1 23.5 9.7C23.3 10.5 22.8 11.1 22.1 11.5Z"
                                            fill="#7F7F7F" />
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection