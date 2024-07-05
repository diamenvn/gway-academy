@extends('site.layout.master')

@section('content')
<section id="section-post" class="gway-section section section--spacing">
    <div class="container">
        <div class="row">
            <div class="col-12 hidden-in-mobile">
                <div class="btn btn-back mb-60px" role="button">
                    <a href="{{route('posts.index')}}" class="d-block">
                        <svg width="38" height="38" viewBox="0 0 38 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M8.84171 19.8247C8.3861 19.3691 8.3861 18.6304 8.84171 18.1748L15.0639 11.9526C15.5195 11.497 16.2582 11.497 16.7138 11.9526C17.1695 12.4082 17.1695 13.1469 16.7138 13.6025L12.4832 17.8331L28.3333 17.8331C28.9777 17.8331 29.5 18.3555 29.5 18.9998C29.5 19.6441 28.9777 20.1665 28.3333 20.1665L12.4832 20.1665L16.7138 24.397C17.1695 24.8527 17.1695 25.5914 16.7138 26.047C16.2582 26.5026 15.5195 26.5026 15.0639 26.047L8.84171 19.8247Z"
                                fill="#2A2A2A" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="col-12">
                <div class="post-content__thumbnail" style="height: 400px">
                    <img class="w-100 h-100 object-fit-cover border-radius-12px" src="{{asset('assets/images/banner-dropship-1920x782-1.png')}}" alt="">
                </div>
                <div class="post-content__text mt-60px">
                    <div class="post-content__title-post fs-32 fw-700">Bí quyết thành công với Dropship: Khám phá chiến lược đỉnh cao</div>
                    <div class="post-content__desc mt-40px">
                        <span>
                            Kinh doanh dropship đang trở thành một trong những xu hướng nổi bật trong lĩnh vực thương mại điện tử. Với mô hình này, bạn có thể bắt đầu kinh doanh mà không cần phải lo lắng về việc quản lý kho hàng hay vận chuyển sản phẩm. Bài viết này sẽ giúp bạn hiểu rõ hơn về
                            dropship, lợi ích của nó và các bước để bắt đầu một cửa hàng dropship thành công.
                        </span>
                        <br><br>
                        <div><strong>Lợi ích của dropship:</strong></div>
                        <br>
                        <ol>
                            <li>Tiết kiệm chi phí ban đầu: Bạn không cần đầu tư một số tiền lớn để mua hàng tồn kho. Điều này giúp giảm thiểu rủi ro tài chính và cho phép bạn khởi nghiệp với nguồn vốn nhỏ.</li>
                            <li>Dễ dàng quản lý: Bạn không cần lo lắng về việc quản lý kho hàng, đóng gói và vận chuyển sản phẩm. Nhà cung cấp sẽ làm tất cả những công việc này cho bạn.</li>
                            <li>Linh hoạt về địa điểm: Bạn có thể điều hành doanh nghiệp từ bất kỳ đâu trên thế giới chỉ với một chiếc máy tính kết nối internet.</li>
                            <li>Đa dạng hóa sản phẩm: Bạn có thể cung cấp một loạt các sản phẩm mà không cần lo lắng về việc tồn kho. Điều này giúp bạn dễ dàng thử nghiệm các sản phẩm mới và tìm ra những sản phẩm bán chạy nhất.</li>
                        </ol>
                        <br><br>
                        <span>Cách thức hoạt động của dropship: Mô hình dropship hoạt động dựa trên sự hợp tác giữa bạn (người bán hàng), nhà cung cấp và khách hàng. Quy trình cơ bản như sau:</span>
                        <br>
                        <ol>
                            <li>Chọn nhà cung cấp: Tìm kiếm và lựa chọn nhà cung cấp uy tín cung cấp sản phẩm bạn muốn bán.</li>
                            <li>Đăng sản phẩm lên cửa hàng: Đưa các sản phẩm từ nhà cung cấp lên cửa hàng trực tuyến của bạn với giá bán lẻ.</li>
                            <li>Khách hàng đặt hàng: Khi khách hàng đặt hàng trên cửa hàng của bạn, bạn sẽ nhận thanh toán từ khách hàng.</li>
                            <li>Đặt hàng với nhà cung cấp: Sau khi nhận đơn hàng, bạn đặt hàng với nhà cung cấp và thanh toán giá gốc.</li>
                            <li>Nhà cung cấp giao hàng: Nhà cung cấp sẽ đóng gói và vận chuyển sản phẩm trực tiếp đến khách hàng của bạn.</li>
                        </ol>
                        <br><br>
                        <div><strong>Các bước để bắt đầu kinh doanh dropship:</strong></div>
                        <br><br>
                        <ol>
                            <li>Nghiên cứu thị trường: Tìm hiểu thị trường và xác định nhu cầu của khách hàng. Chọn ngách sản phẩm mà bạn có kiến thức và đam mê.</li>
                            <li>Chọn nền tảng bán hàng: Quyết định xem bạn sẽ bán hàng trên nền tảng nào (ví dụ: Shopify, WooCommerce, Lazada, Shopee, v.v.).</li>
                            <li>Tìm kiếm nhà cung cấp: Lựa chọn các nhà cung cấp uy tín cung cấp các sản phẩm chất lượng.</li>
                            <li>Thiết lập cửa hàng trực tuyến: Tạo và thiết lập cửa hàng trực tuyến của bạn, bao gồm cả việc thiết kế giao diện và thêm sản phẩm.</li>
                            <li>Quảng bá cửa hàng: Sử dụng các kênh tiếp thị như mạng xã hội, email marketing và quảng cáo trả tiền để thu hút khách hàng đến cửa hàng của bạn.</li>
                            <li>Theo dõi và tối ưu hóa: Theo dõi hiệu suất kinh doanh của bạn và tối ưu hóa các chiến lược tiếp thị, giá cả và sản phẩm để tăng doanh thu.</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-60px">
            <div class="text-gray-800 fs-24 fw-700 col-12">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto">
                        Xem thêm
                    </div>
                    <div class="col-auto">
                        <span class="px-1 btn">
                            <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 24C0 10.7452 10.7452 0 24 0C37.2548 0 48 10.7452 48 24C48 37.2548 37.2548 48 24 48C10.7452 48 0 37.2548 0 24Z" fill="#EAEAEA" />
                                <path d="M27.5001 33.2398L19.8935 25.6331C18.9951 24.7348 18.9951 23.2648 19.8935 22.3664L27.5001 14.7598" stroke="#555555" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span>
                        <span class="px-1 btn">
                            <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 24C0 10.7452 10.7452 0 24 0C37.2548 0 48 10.7452 48 24C48 37.2548 37.2548 48 24 48C10.7452 48 0 37.2548 0 24Z" fill="#EAEAEA" />
                                <path d="M20.3945 33.2398L28.0012 25.6331C28.8995 24.7348 28.8995 23.2648 28.0012 22.3664L20.3945 14.7598" stroke="#555555" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>

                        </span>
                    </div>
                </div>
            </div>
            <div class="col-12 mt-24px">
                <div class="row">
                    <div class="col-md-4">
                        <div class="post">
                            <a href="{{route('posts.show', 1)}}" class="d-block recent-posts__item recent-posts__item--fullsize mt-0">
                                <div class="d-flex flex-wrap">
                                    <div class="col">
                                        <div class="item item__image">
                                            <img class="w-100" src="{{asset('assets/images/image 8 (1).png')}}" alt="">
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
                                            <img class="w-100" src="{{asset('assets/images/image 8 (2).png')}}" alt="">
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
                                            <img class="w-100" src="{{asset('assets/images/image 8 (3).png')}}" alt="">
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
        </div>
    </div>
</section>
@endsection