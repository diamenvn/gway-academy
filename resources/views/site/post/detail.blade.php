@extends('site.layout.master')

@section('content')
<section id="section-post" class="gway-section section section--spacing">
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
            <div class="col-12">
                <div class="post-content__thumbnail" style="height: 400px"> 
                    <img class="w-100 h-100 object-fit-cover border-radius-12px" src="{{asset('assets/images/b10e8bac60b851ecf350226c61567941.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection 