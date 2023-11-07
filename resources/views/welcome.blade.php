@extends('layouts.main')


@section('content')
    <!-- hero section start -->
    <section class="hero-section welcome-section section-padding">
        <div class="container-fluid m-lg-0 p-lg-0">
            <div>
                <div class="tab-pane active container" id="place">
                    <div class="search-form-box">
                        <h3 class="text-center">Discover Great Places.</h3>
                        <form action="/businesses" method="GET" class="search-form">
                            <div class="row justify-content-center">
                                <div class="col-5">
                                    <input type="text" placeholder="Location" name="location">

                                </div>
                                <div class="col-2">
                                    <button type="submit">Search</button>

                                </div>
                            </div>

                            @error('location')
                                <div class="text-center text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- hero section end -->

    <!-- Popular Categories carousel section start -->
    <section class="popular-categories carousel-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-xl-12 text-center">
                    <div class="section-title">
                        <h2>Popular Categories</h2>
                        <span>Why Freatures selection of the best places around the world</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="listico-item-carousel owl-carousel owl-theme">
                        <!-- single item box start -->
                        <div class="single-popular-item">
                            <div class="item-cover-image bg-cover" style="background-image: url('assets/img/mancook.png')">
                                <div class="tags">
                                    <ul>
                                        <li><a href="#">Sale</a></li>
                                        <li><a href="#">Food, Hotel</a></li>
                                    </ul>
                                    <a href="#" class="btn-wishlist"><i class="far fa-heart"></i></a>
                                </div>
                                <div class="item-details">
                                    <div class="brand">
                                        <img src="assets/img/avatar/4.jpg" alt="listico">
                                        <span class="item-price">$180/food</span>
                                    </div>
                                    <div class="item-category">
                                        <div class="cat-icon">
                                            <img src="assets/img/cafe.png" alt="listico">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item-content">
                                <h4><a href="listing-single-details.html">Great Food Dinner Here</a></h4>
                                <div class="item-feedback">
                                    <ul>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                    Average, (6Reviwer)
                                </div>
                                <div class="item-store-location">
                                    <i class="fas fa-map-marker-alt"></i>
                                    7567 Ground Moorabool, Upper East Side
                                </div>
                                <div class="item-meta-data open">
                                    <ul>
                                        <li><i class="far fa-clock"></i><span>Open</span> until 10:00 AM</li>
                                        <li>By<a href="#">admin</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- single item box end -->
                        <!-- single item box start -->
                        <div class="single-popular-item">
                            <div class="item-cover-image bg-cover" style="background-image: url('assets/img/hotel1.jpg')">
                                <div class="tags">
                                    <ul>
                                        <li><a href="#">Rent</a></li>
                                        <li><a href="#">Hotel, House</a></li>
                                    </ul>
                                    <a href="#" class="btn-wishlist"><i class="far fa-heart"></i></a>
                                </div>
                                <div class="item-details">
                                    <div class="brand">
                                        <img src="assets/img/avatar/author2.png" alt="listico">
                                        <span class="item-price">$890/hotel</span>
                                    </div>
                                    <div class="item-category">
                                        <div class="cat-icon">
                                            <img src="assets/img/hotel.png" alt="listico">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item-content">
                                <h4><a href="listing-single-details.html">Beautiful City Hostel & Hotel</a></h4>
                                <div class="item-feedback">
                                    <ul>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                    Average, (4 Reviwer)
                                </div>
                                <div class="item-store-location">
                                    <i class="fas fa-map-marker-alt"></i>
                                    7567 Ground Moorabool, Upper East Side
                                </div>
                                <div class="item-meta-data open">
                                    <ul>
                                        <li><i class="far fa-clock"></i><span>Open</span> until 10:00 AM</li>
                                        <li>By<a href="#">admin</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- single item box end -->
                        <!-- single item box start -->
                        <div class="single-popular-item">
                            <div class="item-cover-image bg-cover" style="background-image: url('assets/img/resto.jpg')">
                                <div class="tags">
                                    <ul>
                                        <li><a href="#">Restourant</a></li>
                                        <li><a href="#">sale, food</a></li>
                                    </ul>
                                    <a href="#" class="btn-wishlist"><i class="far fa-heart"></i></a>
                                </div>
                                <div class="item-details">
                                    <div class="brand">
                                        <img src="assets/img/avatar/5.jpg" alt="listico">
                                        <span class="item-price">$620/restourant</span>
                                    </div>
                                    <div class="item-category">
                                        <div class="cat-icon">
                                            <img src="assets/img/cafe.png" alt="listico">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item-content">
                                <h4><a href="listing-single-details.html">Luxury Restourant</a></h4>
                                <div class="item-feedback">
                                    <ul>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                    Great, (9 Reviwer)
                                </div>
                                <div class="item-store-location">
                                    <i class="fas fa-map-marker-alt"></i>
                                    27th Brooklyn New York, NY 10065
                                </div>
                                <div class="item-meta-data open">
                                    <ul>
                                        <li><i class="far fa-clock"></i><span>Open</span> until 8:00 AM</li>
                                        <li>By<a href="#">admin</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- single item box end -->
                        <!-- single item box start -->
                        <div class="single-popular-item">
                            <div class="item-cover-image bg-cover" style="background-image: url('assets/img/house.jpg')">
                                <div class="tags">
                                    <ul>
                                        <li><a href="#">Sale</a></li>
                                        <li><a href="#">Guests House</a></li>
                                    </ul>
                                    <a href="#" class="btn-wishlist"><i class="far fa-heart"></i></a>
                                </div>
                                <div class="item-details">
                                    <div class="brand">
                                        <img src="assets/img/avatar/author.png" alt="listico">
                                        <span class="item-price">$955/house</span>
                                    </div>
                                    <div class="item-category">
                                        <div class="cat-icon">
                                            <img src="assets/img/hotel.png" alt="listico">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item-content">
                                <h4><a href="listing-single-details.html">Apricot West Britford Arch</a></h4>
                                <div class="item-feedback">
                                    <ul>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                    Good, (8 Reviwer)
                                </div>
                                <div class="item-store-location">
                                    <i class="fas fa-map-marker-alt"></i>
                                    32 Dhanmondhu - Dhakan
                                </div>
                                <div class="item-meta-data open">
                                    <ul>
                                        <li><i class="far fa-clock"></i><span>Open</span> until 10:00 AM</li>
                                        <li>By<a href="#">admin</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- single item box end -->
                        <!-- single item box start -->
                        <div class="single-popular-item">
                            <div class="item-cover-image bg-cover" style="background-image: url('assets/img/resto.jpg')">
                                <div class="tags">
                                    <ul>
                                        <li><a href="#">Restourant</a></li>
                                        <li><a href="#">sale, food</a></li>
                                    </ul>
                                    <a href="#" class="btn-wishlist"><i class="far fa-heart"></i></a>
                                </div>
                                <div class="item-details">
                                    <div class="brand">
                                        <img src="assets/img/avatar/5.jpg" alt="listico">
                                        <span class="item-price">$620/restourant</span>
                                    </div>
                                    <div class="item-category">
                                        <div class="cat-icon">
                                            <img src="assets/img/hotel.png" alt="listico">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item-content">
                                <h4><a href="listing-single-details.html">Luxury Restourant</a></h4>
                                <div class="item-feedback">
                                    <ul>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                    Great, (9 Reviwer)
                                </div>
                                <div class="item-store-location">
                                    <i class="fas fa-map-marker-alt"></i>
                                    27th Brooklyn New York, NY 10065
                                </div>
                                <div class="item-meta-data open">
                                    <ul>
                                        <li><i class="far fa-clock"></i><span>Open</span> until 8:00 AM</li>
                                        <li>By<a href="#">admin</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- single item box end -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Popular Categories  carouselsection end -->


    <!-- how it works section start -->
    <section class="how-it-works bg-overlay section-padding bg-cover parallax-2"
        style="background-image: url('assets/img/how_work_bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-xl-12 text-center">
                    <div class="section-title white-color">
                        <h2>How It Works</h2>
                        <span>Why Freatures selection of the best places around the world</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-12 col-sm-12">
                    <div class="single-how-works d-flex align-items-start">
                        <div class="how-icon">
                            <span>01</span>
                            <img src="assets/img/kat.png" alt="listico">
                        </div>
                        <div class="how-works">
                            <h3>Bed form & wood</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae officia libero
                                inventore, eos quae.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-12 col-sm-12">
                    <div class="single-how-works d-flex align-items-start">
                        <div class="how-icon">
                            <span>02</span>
                            <img src="assets/img/exterior.png" alt="listico">
                        </div>
                        <div class="how-works">
                            <h3>Apply to aparment</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae officia libero
                                inventore, eos quae.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-12 col-sm-12">
                    <div class="single-how-works d-flex align-items-start">
                        <div class="how-icon">
                            <span>03</span>
                            <img src="assets/img/armchair.png" alt="listico">
                        </div>
                        <div class="how-works">
                            <h3>Charge lots of chairs</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae officia libero
                                inventore, eos quae.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- how it works section end -->


    <!-- trending Categories section start -->
    <section class="trending-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-xl-12 text-center">
                    <div class="section-title">
                        <h2>Trending Spaces</h2>
                        <span>Why Freatures selection of the best places around the world</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 col-md-6 col-lg-4 col-sm-12">
                    <!-- single item box start -->
                    <div class="single-popular-item">
                        <div class="item-cover-image bg-cover" style="background-image: url('assets/img/house.jpg')">
                            <div class="tags">
                                <ul>
                                    <li><a href="#">gust</a></li>
                                    <li><a href="#">hotel, rent</a></li>
                                </ul>
                                <a href="#" class="btn-wishlist"><i class="far fa-heart"></i></a>
                            </div>
                            <div class="item-details">
                                <div class="brand">
                                    <img src="assets/img/avatar/2.jpg" alt="listico">
                                    <span class="item-price">$920/hotel</span>
                                </div>
                                <div class="item-category">
                                    <div class="cat-icon">
                                        <img src="assets/img/exterior.png" alt="listico">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item-content">
                            <h4><a href="listing-single-details.html">Hotel Redison Five Star</a></h4>
                            <div class="item-feedback">
                                <ul>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                </ul>
                                Great, (9 Reviwer)
                            </div>
                            <div class="item-store-location">
                                <i class="fas fa-map-marker-alt"></i>
                                27th Brooklyn New York, NY 10065
                            </div>
                            <div class="item-meta-data open">
                                <ul>
                                    <li><i class="far fa-clock"></i><span>Open</span> until 8:00 AM</li>
                                    <li>By<a href="#">admin</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- single item box end -->
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4 col-sm-12">
                    <!-- single item box start -->
                    <div class="single-popular-item">
                        <div class="item-cover-image bg-cover" style="background-image: url('assets/img/mancook.png')">
                            <div class="tags">
                                <ul>
                                    <li><a href="#">restourant</a></li>
                                    <li><a href="#">shop, sale</a></li>
                                </ul>
                                <a href="#" class="btn-wishlist"><i class="far fa-heart"></i></a>
                            </div>
                            <div class="item-details">
                                <div class="brand">
                                    <img src="assets/img/avatar/3.jpg" alt="listico">
                                    <span class="item-price">$80/restaurant</span>
                                </div>
                                <div class="item-category">
                                    <div class="cat-icon">
                                        <img src="assets/img/cafe.png" alt="listico">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item-content">
                            <h4><a href="listing-single-details.html">Restaurant De La Marne</a></h4>
                            <div class="item-feedback">
                                <ul>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                </ul>
                                Good, (10 Reviwer)
                            </div>
                            <div class="item-store-location">
                                <i class="fas fa-map-marker-alt"></i>
                                Dhaka, Mirpur 12 C-Block Road 20
                            </div>
                            <div class="item-meta-data open">
                                <ul>
                                    <li><i class="far fa-clock"></i><span>Open</span> until 10:00 AM</li>
                                    <li>By<a href="#">admin</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- single item box end -->
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4 col-sm-12">
                    <!-- single item box start -->
                    <div class="single-popular-item">
                        <div class="item-cover-image bg-cover" style="background-image: url('assets/img/hotel1.jpg')">
                            <div class="tags">
                                <ul>
                                    <li><a href="#">hotel</a></li>
                                    <li><a href="#">Guests House</a></li>
                                </ul>
                                <a href="#" class="btn-wishlist"><i class="far fa-heart"></i></a>
                            </div>
                            <div class="item-details">
                                <div class="brand">
                                    <img src="assets/img/avatar/author2.png" alt="listico">
                                    <span class="item-price">$780/hotel</span>
                                </div>
                                <div class="item-category">
                                    <div class="cat-icon">
                                        <img src="assets/img/hotel.png" alt="listico">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item-content">
                            <h4><a href="listing-single-details.html">VVIP Awesome Guests House</a></h4>
                            <div class="item-feedback">
                                <ul>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                </ul>
                                Average, (2 Reviwer)
                            </div>
                            <div class="item-store-location">
                                <i class="fas fa-map-marker-alt"></i>
                                7567 Ground Moorabool, Upper East Side
                            </div>
                            <div class="item-meta-data open">
                                <ul>
                                    <li><i class="far fa-clock"></i><span>Open</span> until 10:00 AM</li>
                                    <li>By<a href="#">admin</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- single item box end -->
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4 col-sm-12">
                    <!-- single item box start -->
                    <div class="single-popular-item">
                        <div class="item-cover-image bg-cover" style="background-image: url('assets/img/resto.jpg')">
                            <div class="tags">
                                <ul>
                                    <li><a href="#">Restourant</a></li>
                                    <li><a href="#">sale, food</a></li>
                                </ul>
                                <a href="#" class="btn-wishlist"><i class="far fa-heart"></i></a>
                            </div>
                            <div class="item-details">
                                <div class="brand">
                                    <img src="assets/img/avatar/5.jpg" alt="listico">
                                    <span class="item-price">$620/restourant</span>
                                </div>
                                <div class="item-category">
                                    <div class="cat-icon">
                                        <img src="assets/img/hotel.png" alt="listico">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item-content">
                            <h4><a href="listing-single-details.html">Luxury Restourant</a></h4>
                            <div class="item-feedback">
                                <ul>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                </ul>
                                Great, (9 Reviwer)
                            </div>
                            <div class="item-store-location">
                                <i class="fas fa-map-marker-alt"></i>
                                Dhaka, Mirpur 12 C-Block Road 20
                            </div>
                            <div class="item-meta-data open">
                                <ul>
                                    <li><i class="far fa-clock"></i><span>Open</span> until 8:00 AM</li>
                                    <li>By<a href="#">admin</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- single item box end -->
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4 col-sm-12">
                    <!-- single item box start -->
                    <div class="single-popular-item">
                        <div class="item-cover-image bg-cover" style="background-image: url('assets/img/gust.jpg')">
                            <div class="tags">
                                <ul>
                                    <li><a href="#">rent</a></li>
                                    <li><a href="#">hotel</a></li>
                                </ul>
                                <a href="#" class="btn-wishlist"><i class="far fa-heart"></i></a>
                            </div>
                            <div class="item-details">
                                <div class="brand">
                                    <img src="assets/img/avatar/2.jpg" alt="listico">
                                    <span class="item-price">$280/gusthouse</span>
                                </div>
                                <div class="item-category">
                                    <div class="cat-icon">
                                        <img src="assets/img/exterior.png" alt="listico">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item-content">
                            <h4><a href="listing-single-details.html">Beautiful City Hostel & Hotel</a></h4>
                            <div class="item-feedback">
                                <ul>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                </ul>
                                Average, (10 Reviwer)
                            </div>
                            <div class="item-store-location">
                                <i class="fas fa-map-marker-alt"></i>
                                7567 Ground Moorabool, Upper East Side
                            </div>
                            <div class="item-meta-data open">
                                <ul>
                                    <li><i class="far fa-clock"></i><span>Open</span> until 10:00 AM</li>
                                    <li>By<a href="#">admin</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- single item box end -->
                </div>
                <div class="col-xl-4 col-md-6 col-lg-4 col-sm-12">
                    <!-- single item box start -->
                    <div class="single-popular-item">
                        <div class="item-cover-image bg-cover" style="background-image: url('assets/img/mans.jpg')">
                            <div class="tags">
                                <ul>
                                    <li><a href="#">Rent</a></li>
                                    <li><a href="#">Hotel, Travel</a></li>
                                </ul>
                                <a href="#" class="btn-wishlist"><i class="far fa-heart"></i></a>
                            </div>
                            <div class="item-details">
                                <div class="brand">
                                    <img src="assets/img/avatar/author.png" alt="listico">
                                    <span class="item-price">$380/medical</span>
                                </div>
                                <div class="item-category">
                                    <div class="cat-icon">
                                        <img src="assets/img/hotel.png" alt="listico">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item-content">
                            <h4><a href="listing-single-details.html">Apricot West Britford Arch</a></h4>
                            <div class="item-feedback">
                                <ul>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                </ul>
                                Average, (6Reviwer)
                            </div>
                            <div class="item-store-location">
                                <i class="fas fa-map-marker-alt"></i>
                                27th Brooklyn New York, NY 10065
                            </div>
                            <div class="item-meta-data open">
                                <ul>
                                    <li><i class="far fa-clock"></i><span>Open</span> until 10:00 AM</li>
                                    <li>By<a href="#">admin</a></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- single item box end -->
                </div>
            </div>
        </div>
    </section>
    <!-- trending Categories section end -->

    <!-- happy client testimonial section start -->
    <section class="testimonial-section bg-overlay section-padding bg-cover parallax"
        style="background-image: url('assets/img/testimonial_bg.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-xl-12 text-center">
                    <div class="section-title white-color">
                        <h2>Happy Client</h2>
                        <span>Why you chose us for the best places around the world</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 testimonial-carousel owl-carousel">
                    <div class="single-testimonial text-center">
                        <img src="assets/img/client2.png" alt="listico">
                        <div class="testimonials">
                            <div class="star">
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <span>Lorem ipsum dolor sit amet, consectetur ing elit, sed do eiusmod tempor incididunt
                                utab ore et dolore magna aliqua.</span>
                        </div>
                        <div class="client-info">
                            <h4>Guna Tileka</h4>
                            <span>Manager</span>
                        </div>
                    </div> <!-- ./ single testimonail end -->
                    <div class="single-testimonial text-center">
                        <img src="assets/img/client1.png" alt="listico">
                        <div class="testimonials">
                            <div class="star">
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <span>Lorem ipsum dolor sit amet, consectetur ing elit, sed do eiusmod tempor incididunt
                                utab ore et dolore magna aliqua.</span>
                        </div>
                        <div class="client-info">
                            <h4>Stiven Smith</h4>
                            <span>designer</span>
                        </div>
                    </div> <!-- ./ single testimonail end -->
                    <div class="single-testimonial text-center">
                        <img src="assets/img/client3.png" alt="listico">
                        <div class="testimonials">
                            <div class="star">
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                                <i class="far fa-star"></i>
                            </div>
                            <span>Lorem ipsum dolor sit amet, consectetur ing elit, sed do eiusmod tempor incididunt
                                utab ore et dolore magna aliqua.</span>
                        </div>
                        <div class="client-info">
                            <h4>Salman Ahmed</h4>
                            <span>Seller</span>
                        </div>
                    </div> <!-- ./ single testimonail end -->
                </div>
            </div> <!-- /.col-md-12 testimonial-carousel owl-carousel -->
        </div>
    </section>
    <!-- happy client testimonial section end -->

    <!-- Top Event  section start -->
    <section class="top-event-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-xl-12 text-center">
                    <div class="section-title">
                        <h2>Top Events</h2>
                        <span>Why Freatures selection of the best places around the world</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <div class="listico-item-carousel owl-carousel owl-theme">
                        <!-- single item box start -->
                        <div class="single-popular-item">
                            <div class="item-cover-image bg-cover"
                                style="background-image: url('assets/img/mancook.png')">
                                <div class="tags">
                                    <ul>
                                        <li><a href="#">Sale</a></li>
                                        <li><a href="#">Food, Hotel</a></li>
                                    </ul>
                                    <a href="#" class="btn-wishlist"><i class="far fa-heart"></i></a>
                                </div>
                                <div class="item-details">
                                    <div class="brand">
                                        <img src="assets/img/avatar/4.jpg" alt="listico">
                                        <span class="item-price">$180/food</span>
                                    </div>
                                    <div class="item-category">
                                        <div class="cat-icon">
                                            <img src="assets/img/cafe.png" alt="listico">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item-content">
                                <h4><a href="listing-single-details.html">Beautiful City of Food</a></h4>
                                <div class="item-feedback">
                                    <ul>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                    Average, (6Reviwer)
                                </div>
                                <div class="item-store-location">
                                    <i class="fas fa-map-marker-alt"></i>
                                    7567 Ground Moorabool, Upper East Side
                                </div>
                                <div class="item-meta-data open">
                                    <ul>
                                        <li><i class="far fa-clock"></i><span>Open</span> until 10:00 AM</li>
                                        <li>By<a href="#">admin</a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- single item box end -->
                        <!-- single item box start -->
                        <div class="single-popular-item">
                            <div class="item-cover-image bg-cover" style="background-image: url('assets/img/house.jpg')">
                                <div class="tags">
                                    <ul>
                                        <li><a href="#">gust</a></li>
                                        <li><a href="#">hotel, rent</a></li>
                                    </ul>
                                    <a href="#" class="btn-wishlist"><i class="far fa-heart"></i></a>
                                </div>
                                <div class="item-details">
                                    <div class="brand">
                                        <img src="assets/img/avatar/2.jpg" alt="listico">
                                        <span class="item-price">$920/hotel</span>
                                    </div>
                                    <div class="item-category">
                                        <div class="cat-icon">
                                            <img src="assets/img/exterior.png" alt="listico">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item-content">
                                <h4><a href="listing-single-details.html">Hotel Redison Five Star</a></h4>
                                <div class="item-feedback">
                                    <ul>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                    Great, (9 Reviwer)
                                </div>
                                <div class="item-store-location">
                                    <i class="fas fa-map-marker-alt"></i>
                                    27th Brooklyn New York, NY 10065
                                </div>
                                <div class="item-meta-data open">
                                    <ul>
                                        <li><i class="far fa-clock"></i><span>Open</span> until 8:00 AM</li>
                                        <li>By<a href="#">admin</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- single item box end -->
                        <!-- single item box start -->
                        <div class="single-popular-item">
                            <div class="item-cover-image bg-cover" style="background-image: url('assets/img/hotel1.jpg')">
                                <div class="tags">
                                    <ul>
                                        <li><a href="#">Sale</a></li>
                                        <li><a href="#">Guests House</a></li>
                                    </ul>
                                    <a href="#" class="btn-wishlist"><i class="far fa-heart"></i></a>
                                </div>
                                <div class="item-details">
                                    <div class="brand">
                                        <img src="assets/img/avatar/author.png" alt="listico">
                                        <span class="item-price">$955/house</span>
                                    </div>
                                    <div class="item-category">
                                        <div class="cat-icon">
                                            <img src="assets/img/hotel.png" alt="listico">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item-content">
                                <h4><a href="listing-single-details.html">Apricot West Britford Arch</a></h4>
                                <div class="item-feedback">
                                    <ul>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                    Good, (8 Reviwer)
                                </div>
                                <div class="item-store-location">
                                    <i class="fas fa-map-marker-alt"></i>
                                    27th Brooklyn New York, NY 10065
                                </div>
                                <div class="item-meta-data open">
                                    <ul>
                                        <li><i class="far fa-clock"></i><span>Open</span> until 10:00 AM</li>
                                        <li>By<a href="#">admin</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- single item box end -->
                        <!-- single item box start -->
                        <div class="single-popular-item">
                            <div class="item-cover-image bg-cover" style="background-image: url('assets/img/resto.jpg')">
                                <div class="tags">
                                    <ul>
                                        <li><a href="#">Restourant</a></li>
                                        <li><a href="#">sale, food</a></li>
                                    </ul>
                                    <a href="#" class="btn-wishlist"><i class="far fa-heart"></i></a>
                                </div>
                                <div class="item-details">
                                    <div class="brand">
                                        <img src="assets/img/avatar/5.jpg" alt="listico">
                                        <span class="item-price">$620/restourant</span>
                                    </div>
                                    <div class="item-category">
                                        <div class="cat-icon">
                                            <img src="assets/img/cafe.png" alt="listico">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item-content">
                                <h4><a href="listing-single-details.html">Luxury Restourant</a></h4>
                                <div class="item-feedback">
                                    <ul>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                    Great, (9 Reviwer)
                                </div>
                                <div class="item-store-location">
                                    <i class="fas fa-map-marker-alt"></i>
                                    27th Brooklyn New York, NY 10065
                                </div>
                                <div class="item-meta-data open">
                                    <ul>
                                        <li><i class="far fa-clock"></i><span>Open</span> until 8:00 AM</li>
                                        <li>By<a href="#">admin</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- single item box end -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Top Event  section end -->

    <!-- promo section start -->
    <section class="promo-section parallax section-padding bg-cover bg-overlay"
        style="background-image: url('assets/img/promo-bg.jpg')">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-xl-7 col-sm-12 col-md-7">
                    <div class="promo-content">
                        <h1>Visit the Best Cafes House <br>Restaurants & Bars </h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                            labore</p>
                        <a href="#" class="btn-promo">Visit Site</a>
                    </div>
                </div>
                <div class="col-xl-5 col-md-5 col-sm-12 mobile-none">
                    <div class="promo-img">
                        <img src="assets/img/promo-man.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- promo section end -->

    <!-- populer location section start -->
    <section class="top-location-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-xl-12 text-center">
                    <div class="section-title">
                        <h2>Popular Location</h2>
                        <span>Why Freatures selection of the best places around the world</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="top-locations-carousel owl-carousel owl-theme">

                        <div class="single-top-location bg-cover bg-overlay"
                            style="background-image: url('assets/img/location1.jpg')">
                            <div class="location-tag"><span>Listings, Travel, Restarunt</span></div>
                            <div class="location-info">
                                <span>3 Listing</span>
                                <h2>Malaysia</h2>
                            </div>
                        </div><!-- ./ single top location end -->
                        <div class="single-top-location bg-cover bg-overlay"
                            style="background-image: url('assets/img/bali_temples.jpg')">
                            <div class="location-tag"><span>Resorts, Hotel, Restarunt</span></div>
                            <div class="location-info">
                                <span>15 Listing</span>
                                <h2>Indonesia Travel</h2>
                            </div>
                        </div><!-- ./ single top location end -->
                        <div class="single-top-location bg-cover bg-overlay"
                            style="background-image: url('assets/img/location3.jpg')">
                            <div class="location-tag"><span>Listings, Travel, Restarunt</span></div>
                            <div class="location-info">
                                <span>9 Listing</span>
                                <h2>Canada</h2>
                            </div>
                        </div><!-- ./ single top location end -->
                        <div class="single-top-location bg-cover bg-overlay"
                            style="background-image: url('assets/img/location1.jpg')">
                            <div class="location-tag"><span>Listings, Travel, Restarunt</span></div>
                            <div class="location-info">
                                <span>3 Listing</span>
                                <h2>Malaysia</h2>
                            </div>
                        </div><!-- ./ single top location end -->
                        <div class="single-top-location bg-cover bg-overlay"
                            style="background-image: url('assets/img/tajmohal.jpg')">
                            <div class="location-tag"><span>Resorts, Hotel, Restarunt</span></div>
                            <div class="location-info">
                                <span>15 Listing</span>
                                <h2>Taj Mohal</h2>
                            </div>
                        </div><!-- ./ single top location end -->
                        <div class="single-top-location bg-cover bg-overlay"
                            style="background-image: url('assets/img/location3.jpg')">
                            <div class="location-tag"><span>Listings, Travel, Restarunt</span></div>
                            <div class="location-info">
                                <span>9 Listing</span>
                                <h2>Canada</h2>
                            </div>
                        </div><!-- ./ single top location end -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- populer location section end -->

    <!-- call to action section start -->
    <section class="call-to-action-wrap bg-cover" style="background-image: url('assets/img/call-to-action-bg.jpg')">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-xl-8 col-sm-12  col-md-7">
                    <div class="call-to-action">
                        <h2>Join Our Amazing Community</h2>
                        <span>Consectetur adipisicing elit, sed do eiusmod tempor</span>
                    </div>
                </div>
                <div class="col-xl-4 col-sm-12 col-md-5 text-lg-right">
                    <a href="#" class="call-action-btn"><i class="far fa-check-circle"></i>Contact Now</a>
                </div>
            </div>
        </div>
    </section>
    <!-- call to action section end -->
@endsection
