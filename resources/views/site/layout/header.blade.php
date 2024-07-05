<header class="header header__layout bg-gray-0">
    <div class="container h-100">
        <div class="d-flex align-items-center justify-content-between flex-nowrap h-100 position-relative">
            <div class="icon-show-menu" data-toggle="collapse" href=".header__item__menu">
                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M8.33398 10.667C8.33398 10.1147 8.7817 9.66699 9.33398 9.66699H22.6673C23.2196 9.66699 23.6673 10.1147 23.6673 10.667C23.6673 11.2193 23.2196 11.667 22.6673 11.667H9.33398C8.7817 11.667 8.33398 11.2193 8.33398 10.667ZM8.33398 16.0003C8.33398 15.448 8.7817 15.0003 9.33398 15.0003H22.6673C23.2196 15.0003 23.6673 15.448 23.6673 16.0003C23.6673 16.5526 23.2196 17.0003 22.6673 17.0003H9.33398C8.7817 17.0003 8.33398 16.5526 8.33398 16.0003ZM8.33398 21.3337C8.33398 20.7814 8.7817 20.3337 9.33398 20.3337H22.6673C23.2196 20.3337 23.6673 20.7814 23.6673 21.3337C23.6673 21.8859 23.2196 22.3337 22.6673 22.3337H9.33398C8.7817 22.3337 8.33398 21.8859 8.33398 21.3337Z"
                        fill="#555555" />
                </svg>
            </div>
            <div class="header__item">
                <a href="/" class="logo d-block">
                    <img src="{{asset('assets/images/logo.png')}}" alt="" srcset="">
                </a>
            </div>
            <div class="header__item header__item__menu">
                @include('site.module.menu')
            </div>
            <div class="header__item hidden-in-mobile">
                <a href="" class="d-block">
                    <div class="btn btn-primary">Nhận tư vấn</div>
                </a>
            </div>
        </div>
    </div>
</header>