@extends('layouts.main')

@section('content')
    <!-- explors map and sidebar section start -->
    <section class="listico-explors-map-search section-padding p-5">
        <div class="container-fluid m-0 p-0">
            <div class="row">
                <div class="col-lg-4 col-xl-3 col-sm-12 col-md-6">
                    <div class="sidebar-advance-search-wrapper">
                        <div class="listico-advance-search">
                            <form action="/businesses" method="GET" class="advance-search-form">
                                <h4 class="mt-0">What are you looking for?</h4>
                                <span style="font-weight: 600">Sort:</span>
                                <select name="sort_by">
                                    <option value="best_match">Best Match</option>
                                    <option value="rating">Rating</option>
                                    <option value="review_count">Review Count</option>
                                    <option value="distance">Distance</option>
                                </select>

                                <span style="font-weight: 600">Open Now:</span>
                                <select name="open_now">
                                    <option value="" disabled selected>-- Select --</option>
                                    <option value="true" @selected(request('open_now') == 'true')>Yes</option>
                                    <option value="false" @selected(request('open_now') == 'false')>No</option>
                                </select>

                                <span style="font-weight: 600">Radius:</span>
                                <input type="text" placeholder="" value="{{ request('radius') }}" name="radius"
                                    min="0" max="40000">

                                <span style="font-weight: 600">Term:</span>
                                <input type="text" placeholder="" value="{{ request('term') }}" name="term"
                                    min="0" max="40000">

                                <span style="font-weight: 600">Location:</span>

                                <input type="text" placeholder="Location Name" value="{{ request('location') }}"
                                    name="location">
                                @error('location')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                @enderror

                                @php
                                    $price = request('price') ? request('price') : [];
                                @endphp
                                <span style="font-weight: 600">Price:</span>
                                <div class="tags-sidebar">
                                    <div class="checkbox-list">
                                        <div class="check-box"><input type="checkbox" name="price[]" value="1"
                                                @checked(in_array(1, $price))><span>$</span></div>
                                        <div class="check-box"><input type="checkbox" name="price[]" value="2"
                                                @checked(in_array(2, $price))><span>$$</span></div>
                                        <div class="check-box"><input type="checkbox" name="price[]" value="3"
                                                @checked(in_array(3, $price))><span>$$$</span></div>
                                        <div class="check-box"><input type="checkbox" name="price[]" value="4"
                                                @checked(in_array(4, $price))><span>$$$$</span></div>
                                    </div>
                                </div>
                                <button type="submit" class="btn-search">Search Now</button>
                            </form>
                            <!-- advance form end -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-xl-9 col-sm-12 col-md-6">
                    <div class="top-place-widgets px-4">
                        @foreach ($businesses as $business)
                            <div class="single-popular-item">

                                <div class="item-cover-image bg-cover"
                                    style="background-image: url('{{ $business['image_url'] }}')">
                                    <div class="tags">
                                        <ul>
                                            @foreach ($business['categories'] as $category)
                                                <li><a href="#">{{ $category['title'] }}</a></li>
                                            @endforeach
                                        </ul>
                                        <a href="#" class="btn-wishlist"><i class="far fa-heart"></i></a>
                                    </div>

                                </div>
                                <div class="item-content">
                                    <h4><a href="/businesses/{{ $business['alias'] }}">{{ $business['name'] }}</a></h4>
                                    <div class="item-feedback">
                                        <ul>
                                            @for ($i = 1; $i <= 5; $i++)
                                                @if ($i <= floor($business['rating']))
                                                    <li>
                                                        <i class="fas fa-star"></i>
                                                    </li>
                                                @else
                                                    <li>
                                                        <i class="far fa-star"></i>
                                                    </li>
                                                @endif
                                            @endfor

                                        </ul>
                                        ({{ $business['review_count'] }} Reviwer)
                                    </div>
                                    <div class="item-store-location">
                                        <i class="fas fa-map-marker-alt"></i>
                                        {{ implode(' ', $business['location']['display_address']) }}
                                    </div>
                                    <div class="item-meta-data open">
                                        <ul>
                                            <li><i class="far fa-clock"></i>
                                                @if ($business['is_closed'])
                                                    <span class="text-danger">Closed</span>
                                                @else
                                                    <span>Open</span>
                                                @endif
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        @endforeach

                        <div class="mt-4">

                            <nav>
                                <ul class="pagination d-flex justify-content-end">
                                    <li class="page-item @if(request('offset', 0) == 0) disabled @endif">
                                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true" id="previous-link">Previous</a>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" id="next-link">Next</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>

                    </div>


                </div>

            </div>
        </div>
    </section>
@endsection('content')

@section('script')
    <script>
        $(document).ready(function() {
        $('#next-link').on('click', function(e) {
            e.preventDefault();

            let currentOffset = parseInt('{{ request('offset', 0) }}');
            let newOffset = currentOffset + 20;

            let searchParams = new URLSearchParams(window.location.search);

            if (searchParams.has('offset')) {
                searchParams.set('offset', newOffset);
            } else {
                searchParams.append('offset', newOffset);
            }

            window.location.href = window.location.pathname + '?' + searchParams.toString();
        });
        
        $('#previous-link').on('click', function(e) {
            e.preventDefault();

            let currentOffset = parseInt('{{ request('offset', 20) }}');
            let newOffset = currentOffset - 20;

            let searchParams = new URLSearchParams(window.location.search);

            if (searchParams.has('offset')) {
                searchParams.set('offset', newOffset);
            } else {
                searchParams.append('offset', newOffset);
            }

            window.location.href = window.location.pathname + '?' + searchParams.toString();
        });
    });
    </script>
@endsection
