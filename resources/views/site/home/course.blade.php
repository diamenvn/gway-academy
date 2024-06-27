<section id="secion-banner" class="gway-section section section--spacing">
    <div class="course">
        <div class="container">
            <div class="d-flex">
                <div class="col section__title">
                    <span>Khóa học</span>
                </div>
                <div class="col-auto">

                </div>
            </div>
            <div class="row mt-3">
                @include('site.module.course-card', array(
                'img' => asset('assets/images/unsplash_7uSKXpksCKg.png'),
                'title' => 'Khóa học Dropship',
                'time' => 6,
                'slot' => 16,
                'level' => "Cơ bản"
                ))
                @include('site.module.course-card', array(
                'img' => asset('assets/images/d9c74cd7b92cbf2d10474f79f951cd3e.png'),
                'title' => 'Khóa học Amazon',
                'time' => 6,
                'slot' => 16,
                'level' => "Cơ bản"
                ))
                @include('site.module.course-card', array(
                'img' => asset('assets/images/d9413aa7572487cf8575e026dc4ac9d6.png'),
                'title' => 'Khóa học Livestream',
                'time' => 6,
                'slot' => 16,
                'level' => "Cơ bản"
                ))
                @include('site.module.course-card', array(
                'img' => asset('assets/images/521de3806b195ed58af62ab20cbe62b9.png'),
                'title' => 'Khóa học Dropship',
                'time' => 6,
                'slot' => 16,
                'level' => "Cơ bản"
                ))
            </div>
        </div>
    </div>
</section>