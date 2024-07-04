<div class="header__menu">
    <ul class="header__menu__lists d-flex flex-nowrap" role="navigation">
        <li class="{{ request()->is('/') ? 'active' : '' }}">
            <a href="{{route('index')}}">Trang chủ</a>
        </li>
        <li class="{{ request()->is('about-us*') ? 'active' : '' }}">
            <a href="{{route('about-us.index')}}">Giới thiệu</a>
        </li>
        <li class="{{ request()->is('leadership*') ? 'active' : '' }}">
            <a href="{{route('leadership.index')}}">Đội ngũ chuyên gia</a>
        </li>
        <li class="{{ request()->is('posts*') ? 'active' : '' }}">
            <a href="{{route('posts.index')}}">Bài viết</a>
        </li>
        <li class="{{ request()->is('service*') ? 'active' : '' }}">
            <a href="{{route('service.index')}}">Dịch vụ</a>
        </li>
        <li class="{{ request()->is('contact-us*') ? 'active' : '' }}">
            <a href="{{route('contact-us.index')}}">Liên hệ</a>
        </li>
    </ul>
</div>