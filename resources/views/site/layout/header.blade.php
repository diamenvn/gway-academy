<header class="header header__layout bg-gray-0">
    <div class="container h-100">
        <div class="d-flex align-items-center justify-content-between flex-nowrap h-100">
            <div class="header__item">
                <div class="logo">
                    <img src="{{asset('assets/images/logo.png')}}" alt="" srcset="">
                </div>
            </div>
            <div class="header__item">
                @include('site.module.menu')
            </div>
            <div class="header__item">
                <a href="" class="d-block">
                    <div class="btn btn-primary">Nhận tư vấn</div>
                </a>
            </div>
        </div>
    </div>
</header>   