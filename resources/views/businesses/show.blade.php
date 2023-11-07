@extends('layouts.main')

@section('content')
    <!-- breadcrumb section start -->
    <section class="banner-section bg-cover bg-overlay p-5" style="background-image: url('{{ $business['image_url'] }}')">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-12">
                    <div class="banner-left-content d-flex align-items-center">
                        <div class="banner-content">
                            <h3>{{ $business['name'] }}</h3>
                            <span><i class="fas fa-phone"></i>{{ $business['display_phone'] }}</span>
                            <span><i
                                    class="fas fa-map"></i>{{ implode(' ', $business['location']['display_address']) }}</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-1 col-sm-12 text-lg-right">
                    <div class="banner-left-content">
                        <div class="all-reviews">
                            @for ($i = 1; $i <= 5; $i++)
                                @if ($i <= floor($business['rating']))
                                    <i class="fas fa-star"></i>
                                @else
                                    <i class="far fa-star"></i>
                                @endif
                            @endfor
                            ({{ $business['review_count'] }} Reviwer)
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb section end -->

    <!-- deatils nav bar section start -->
    <div class="single-details-navbar">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-4 col-6 ">
                    <nav class="details-nav navbar navbar-expand-lg">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#detailsnav">
                            <i class="fas fa-bars"></i>
                        </button>
                        <div class="collapse navbar-collapse justify-content-start" id="detailsnav">
                            <ul class="navbar-nav">
                                <a href="#des-box">Description</a>
                                <a href="#photo-box">Photos</a>
                                <a href="#map-box">Maps</a>
                                <a href="#review-box">Reviews</a>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="col-lg-5 col-md-8 col-6">
                    <div class="social-link-share">
                        <ul>
                            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#"><i class="fab fa-dribbble"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- deatils nav bar section end -->

    <!-- single deatils content wrapper start -->
    <section class="single-details-box-section section-padding page-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-12">
                    <div class="single-content-box-area">
                        <div class="description_box box" id="des-box">
                            <h3>Description</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum nulla assumenda, officiis
                                architecto deleniti dolor consequatur sit porro nostrum eius magnam maxime numquam, hic
                                blanditiis tempore est praesentium voluptatum sed.</p>
                        </div>
                        <div class="photos_box box" id="photo-box">
                            <h3>Photos</h3>
                            <div class="photo-gallery">
                                @foreach ($business['photos'] as $photo)
                                    <div class="single-g-slide">
                                        <img src="{{ $photo }}" alt="">
                                    </div>
                                @endforeach

                                @if (count($business['photos']) < 4)
                                    @foreach ($business['photos'] as $photo)
                                        <div class="single-g-slide">
                                            <img src="{{ $photo }}" alt="">
                                        </div>
                                    @endforeach
                                @endif

                            </div>
                            <div class="gallery_nav">
                                @foreach ($business['photos'] as $photo)
                                    <div class="single-gallery-img">
                                        <img src="{{ $photo }}" alt="">
                                    </div>
                                @endforeach


                                @if (count($business['photos']) < 4)
                                    @foreach ($business['photos'] as $photo)
                                        <div class="single-gallery-img">
                                            <img src="{{ $photo }}" alt="">
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>

                        <div class="description_box box" id="review-box">
                            <h3>Reviews</h3>
                            <div>
                                @foreach ($reviews as $review)
                                    <div>
                                        <div class="single-testimonial mb-2">
                                            <img src="{{ $review['user']['image_url'] }}" alt="listico">
                                        </div>
                                        <div>
                                            <p style="font-weight: 800" class="mb-0">{{ $review['user']['name'] }}</p>
                                            <p>{{ $review['text'] }}</p>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>


                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="single-sidebar-widgets">
                        <a href="https://www.google.com/maps?q={{ $business['coordinates']['latitude'] }},{{ $business['coordinates']['longitude'] }}"
                                    class="btn-booking-start ml-0 w-100" style="margin-bottom:30px" target="_blank">Get Direction</a>

                        <div class="single-widgets widgets box">
                            <h3>Transactions</h3>
                            <ul>
                                @foreach ($business['transactions'] as $transaction)
                                    <li>{{ ucfirst($transaction) }}</li>
                                @endforeach

                            </ul>
                        </div><!-- single widget end -->
                        @php
                            $day = ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'];
                        @endphp
                        <div class="single-widgets widgets box market-time">
                            <h3>Hours</h3>
                            <ul>
                                @foreach ($business['hours'][0]['open'] as $key => $value)
                                    <li>
                                        {{ $day[$value['day']] }} <span>{{ timeFormatter($value['start']) }} -
                                            {{ timeFormatter($value['end']) }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div><!-- single widget end -->

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- single deatils content wrapper end -->
@endsection('content')

@php
    function timeFormatter($time)
    {
        return substr($time, 0, 2) . ':' . substr($time, 2, 2);
    }
@endphp
