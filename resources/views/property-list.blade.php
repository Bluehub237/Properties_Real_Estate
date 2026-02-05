@extends('template.house')

@section('title')
    Housa - Property-list
@endsection
@section('content')
    <!--===== HERO AREA STARTS =======-->
    <div class="inner-header-area">
        <div class="containe-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="inner-header heading1">
                        <h2>Find Accommodation</h2>
                        <div class="space28"></div>
                        <p><a href="{{ route('house.index') }}">Home</a> <svg xmlns="http://www.w3.org/2000/svg" width="9"
                                height="16" viewBox="0 0 9 16" fill="none">
                                <path d="M1.5 1.74997L7.75 7.99997L1.5 14.25" stroke="#1B1B1B" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg> <span>Listing</span>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="inner-images">
                        <img src="assets/img/all-images/hero/hero-img9.png" alt="housa">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="space40"></div>
    <!--===== HERO AREA ENDS =======-->
    <!--===== OTHERS AREA STARTS =======-->
    <div class="others-section-area others2">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="tab-header">
                        <button class="tab-btn" data-tab="for-rent">For Rent</button>
                    </div>
                    <div class="space24"></div>
                    <div class="property-tab-section b-bg1">
                        <div class="tab-content1" id="for-sale">
                            <div class="filters">
                                <div class="filter-group">
                                    <label>Labels</label>
                                    <select>
                                        <option>All Labels</option>
                                        <option>New Offer</option>
                                        <option>Hot Offer</option>
                                    </select>
                                </div>
                                <div class="filter-group">
                                    <label>Types</label>
                                    <select>
                                        <option>All Types</option>
                                        <option>Apartment</option>
                                        <option>Bar</option>
                                        <option>Cafe</option>
                                        <option>House</option>
                                        <option>Farm</option>
                                        <option>Luxury Homes</option>
                                        <option>Office</option>
                                        <option>Single Family</option>
                                        <option>Store</option>
                                        <option>Villa</option>
                                    </select>
                                </div>
                                <div class="filter-group">
                                    <label for="customize-sale">Customize</label>
                                    <button id="customize-sale" class="customize-sale show-form">
                                        Advance <span class="icon"><svg xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 24 24" fill="currentColor">
                                                <path
                                                    d="M6.17071 18C6.58254 16.8348 7.69378 16 9 16C10.3062 16 11.4175 16.8348 11.8293 18H22V20H11.8293C11.4175 21.1652 10.3062 22 9 22C7.69378 22 6.58254 21.1652 6.17071 20H2V18H6.17071ZM12.1707 11C12.5825 9.83481 13.6938 9 15 9C16.3062 9 17.4175 9.83481 17.8293 11H22V13H17.8293C17.4175 14.1652 16.3062 15 15 15C13.6938 15 12.5825 14.1652 12.1707 13H2V11H12.1707ZM6.17071 4C6.58254 2.83481 7.69378 2 9 2C10.3062 2 11.4175 2.83481 11.8293 4H22V6H11.8293C11.4175 7.16519 10.3062 8 9 8C7.69378 8 6.58254 7.16519 6.17071 6H2V4H6.17071Z">
                                                </path>
                                            </svg></span>
                                    </button>
                                </div>
                                <div class="search-button">
                                    <button id="search-sale" type="submit">Search <span class="arrow1"><i
                                                class="fa-solid fa-arrow-right"></i></span><span class="arrow2"><i
                                                class="fa-solid fa-arrow-right"></i></span></button>
                                </div>
                            </div>
                        </div>
                        <div class="tab-content1" id="for-rent" style="display: none;">
                            <div class="filters">
                                <div class="filter-group">
                                    <label>Status</label>
                                    <select>
                                        <option>All Status</option>
                                        <option>For Rent</option>
                                        <option>For Sale</option>
                                    </select>
                                </div>
                                <div class="filter-group">
                                    <label>Labels</label>
                                    <select>
                                        <option>All Labels</option>
                                        <option>New Offer</option>
                                        <option>Hot Offer</option>
                                    </select>
                                </div>
                                <div class="filter-group">
                                    <label>Types</label>
                                    <select>
                                        <option>All Types</option>
                                        <option>Apartment</option>
                                        <option>Bar</option>
                                        <option>Cafe</option>
                                        <option>House</option>
                                        <option>Farm</option>
                                        <option>Luxury Homes</option>
                                        <option>Office</option>
                                        <option>Single Family</option>
                                        <option>Store</option>
                                        <option>Villa</option>
                                    </select>
                                </div>
                                <div class="filter-group">
                                    <label for="customize-sale">Customize</label>
                                    <button id="customize-sale1" class="customize-sale show-form">
                                        Advance <span class="icon"><svg xmlns="http://www.w3.org/2000/svg"
                                                viewBox="0 0 24 24" fill="currentColor">
                                                <path
                                                    d="M6.17071 18C6.58254 16.8348 7.69378 16 9 16C10.3062 16 11.4175 16.8348 11.8293 18H22V20H11.8293C11.4175 21.1652 10.3062 22 9 22C7.69378 22 6.58254 21.1652 6.17071 20H2V18H6.17071ZM12.1707 11C12.5825 9.83481 13.6938 9 15 9C16.3062 9 17.4175 9.83481 17.8293 11H22V13H17.8293C17.4175 14.1652 16.3062 15 15 15C13.6938 15 12.5825 14.1652 12.1707 13H2V11H12.1707ZM6.17071 4C6.58254 2.83481 7.69378 2 9 2C10.3062 2 11.4175 2.83481 11.8293 4H22V6H11.8293C11.4175 7.16519 10.3062 8 9 8C7.69378 8 6.58254 7.16519 6.17071 6H2V4H6.17071Z">
                                                </path>
                                            </svg></span>
                                    </button>
                                </div>
                                <div class="search-button">
                                    <button id="search-sale1" type="submit">Search <span class="arrow1"><i
                                                class="fa-solid fa-arrow-right"></i></span><span class="arrow2"><i
                                                class="fa-solid fa-arrow-right"></i></span></button>
                                </div>
                            </div>
                        </div>
                        <div class="wd-search-form">
                            <div class=" group-select">
                                <div class="box-select">
                                    <h5>Bathrooms</h5>
                                    <div class="nice-select" tabindex="0">
                                        <span class="current">Bathrooms</span>
                                        <ul class="list">
                                            <li data-value="1" class="option">1</li>
                                            <li data-value="2" class="option selected">2</li>
                                            <li data-value="3" class="option">3</li>
                                            <li data-value="4" class="option">4</li>
                                            <li data-value="5" class="option">5</li>
                                            <li data-value="6" class="option">6</li>
                                            <li data-value="7" class="option">7</li>
                                            <li data-value="8" class="option">8</li>
                                            <li data-value="9" class="option">9</li>
                                            <li data-value="10" class="option">10</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="box-select">
                                    <h5>Bedrooms</h5>
                                    <div class="nice-select" tabindex="0">
                                        <span class="current">Bedrooms</span>
                                        <ul class="list">
                                            <li data-value="1" class="option">1</li>
                                            <li data-value="2" class="option selected">2</li>
                                            <li data-value="3" class="option">3</li>
                                            <li data-value="4" class="option">4</li>
                                            <li data-value="5" class="option">5</li>
                                            <li data-value="6" class="option">6</li>
                                            <li data-value="7" class="option">7</li>
                                            <li data-value="8" class="option">8</li>
                                            <li data-value="9" class="option">9</li>
                                            <li data-value="10" class="option">10</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="box-select">
                                    <h5>States</h5>
                                    <div class="nice-select" tabindex="0">
                                        <span class="current">All States</span>
                                        <ul class="list">
                                            <li data-value="1" class="option">New York</li>
                                            <li data-value="2" class="option selected">California</li>
                                            <li data-value="3" class="option">Texas</li>
                                            <li data-value="4" class="option">Sydney</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="box-select">
                                    <h5>City</h5>
                                    <div class="nice-select" tabindex="0">
                                        <span class="current">All Cities</span>
                                        <ul class="list">
                                            <li data-value="1" class="option">Alice</li>
                                            <li data-value="2" class="option selected">Bridgaport</li>
                                            <li data-value="3" class="option">Dallas</li>
                                            <li data-value="4" class="option">Kingston</li>
                                            <li data-value="5" class="option">Los Angeles</li>
                                            <li data-value="6" class="option">New York</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class=" group-select">
                                <div class="box-select">
                                    <h5>Garages</h5>
                                    <div class="nice-select" tabindex="0">
                                        <span class="current">Any Garages</span>
                                        <ul class="list">
                                            <li data-value="1" class="option">1</li>
                                            <li data-value="2" class="option selected">2</li>
                                            <li data-value="3" class="option">3</li>
                                            <li data-value="4" class="option">4</li>
                                            <li data-value="5" class="option">5</li>
                                            <li data-value="6" class="option">6</li>
                                            <li data-value="7" class="option">7</li>
                                            <li data-value="8" class="option">8</li>
                                            <li data-value="9" class="option">9</li>
                                            <li data-value="10" class="option">10</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="box-select">
                                    <h5>Rooms</h5>
                                    <div class="nice-select" tabindex="0">
                                        <span class="current">Any Rooms</span>
                                        <ul class="list">
                                            <li data-value="1" class="option">1</li>
                                            <li data-value="2" class="option selected">2</li>
                                            <li data-value="3" class="option">3</li>
                                            <li data-value="4" class="option">4</li>
                                            <li data-value="5" class="option">5</li>
                                            <li data-value="6" class="option">6</li>
                                            <li data-value="7" class="option">7</li>
                                            <li data-value="8" class="option">8</li>
                                            <li data-value="9" class="option">9</li>
                                            <li data-value="10" class="option">10</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="group-price">
                                <div class="slider-item">
                                    <div class="slider-label">Price Range: <span id="price-output">$200 -
                                            $2,500,000</span></div>
                                    <div class="slider price-slider">
                                        <input type="range" id="price-range-min" class="range-min" min="200"
                                            max="2500000" value="200" step="100">
                                        <input type="range" id="price-range-max" class="range-max" min="200"
                                            max="2500000" value="2500000" step="100">
                                        <div class="slider-fill"></div>
                                    </div>
                                </div>
                                <div class="slider-item">
                                    <div class="slider-label">Size Range: <span id="size-output">146 SqFt - 448
                                            SqFt</span></div>
                                    <div class="slider size-slider">
                                        <input type="range" id="size-range-min" class="range-min" min="146"
                                            max="448" value="146" step="1">
                                        <input type="range" id="size-range-max" class="range-max" min="146"
                                            max="448" value="448" step="1">
                                        <div class="slider-fill"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="group-checkbox">
                                <div class=" title text-4 fw-6">Others Features</div>
                                <div class="space16"></div>
                                <div class="group-amenities ">
                                    <fieldset class="checkbox-item style-1  ">
                                        <label>
                                            <input type="checkbox">
                                            <span class="btn-checkbox"></span>
                                            <span class="text-4">Air Conditioning</span>
                                        </label>
                                    </fieldset>
                                    <fieldset class="checkbox-item style-1   mt-12">
                                        <label>
                                            <input type="checkbox">
                                            <span class="btn-checkbox"></span>
                                            <span class="text-4"> Laundry</span>
                                        </label>
                                    </fieldset>
                                    <fieldset class="checkbox-item style-1   mt-12">
                                        <label>
                                            <input type="checkbox">
                                            <span class="btn-checkbox"></span>
                                            <span class="text-4">Refrigerator </span>
                                        </label>
                                    </fieldset>
                                    <fieldset class="checkbox-item style-1   mt-12">
                                        <label>
                                            <input type="checkbox">
                                            <span class="btn-checkbox"></span>
                                            <span class="text-4">Washer </span>
                                        </label>
                                    </fieldset>
                                    <fieldset class="checkbox-item style-1  ">
                                        <label>
                                            <input type="checkbox">
                                            <span class="btn-checkbox"></span>
                                            <span class="text-4"> Barbeque</span>
                                        </label>
                                    </fieldset>
                                    <fieldset class="checkbox-item style-1   mt-12">
                                        <label>
                                            <input type="checkbox">
                                            <span class="btn-checkbox"></span>
                                            <span class="text-4"> Lawn</span>
                                        </label>
                                    </fieldset>
                                    <fieldset class="checkbox-item style-1   mt-12">
                                        <label>
                                            <input type="checkbox">
                                            <span class="btn-checkbox"></span>
                                            <span class="text-4">Sauna </span>
                                        </label>
                                    </fieldset>
                                    <fieldset class="checkbox-item style-1   mt-12">
                                        <label>
                                            <input type="checkbox">
                                            <span class="btn-checkbox"></span>
                                            <span class="text-4">Wifi </span>
                                        </label>
                                    </fieldset>
                                    <fieldset class="checkbox-item style-1  ">
                                        <label>
                                            <input type="checkbox">
                                            <span class="btn-checkbox"></span>
                                            <span class="text-4">Dryer </span>
                                        </label>
                                    </fieldset>
                                    <fieldset class="checkbox-item style-1   mt-12">
                                        <label>
                                            <input type="checkbox">
                                            <span class="btn-checkbox"></span>
                                            <span class="text-4">Microwave</span>
                                        </label>
                                    </fieldset>
                                    <fieldset class="checkbox-item style-1   mt-12">
                                        <label>
                                            <input type="checkbox">
                                            <span class="btn-checkbox"></span>
                                            <span class="text-4"> Swimming Pool</span>
                                        </label>
                                    </fieldset>
                                    <fieldset class="checkbox-item style-1   mt-12">
                                        <label>
                                            <input type="checkbox">
                                            <span class="btn-checkbox"></span>
                                            <span class="text-4">Window Coverings</span>
                                        </label>
                                    </fieldset>
                                    <fieldset class="checkbox-item style-1  ">
                                        <label>
                                            <input type="checkbox">
                                            <span class="btn-checkbox"></span>
                                            <span class="text-4"> Gym</span>
                                        </label>
                                    </fieldset>
                                    <fieldset class="checkbox-item style-1   mt-12">
                                        <label>
                                            <input type="checkbox">
                                            <span class="btn-checkbox"></span>
                                            <span class="text-4">Outdoor Shower </span>
                                        </label>
                                    </fieldset>
                                    <fieldset class="checkbox-item style-1   mt-12">
                                        <label>
                                            <input type="checkbox">
                                            <span class="btn-checkbox"></span>
                                            <span class="text-4"> TV Cable</span>
                                        </label>
                                    </fieldset>
                                    <fieldset class="checkbox-item style-1   mt-12">
                                        <label>
                                            <input type="checkbox">
                                            <span class="btn-checkbox"></span>
                                            <span class="text-4">Fireplace </span>
                                        </label>
                                    </fieldset>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===== OTHERS AREA STARTS =======-->
    <div class="space30"></div>
    <!--===== PROPERTY AREA STARTS =======-->
    <div class="property-inner-section-find">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="property-mapgrid-area">
                        <div class="heading1">
                            <h3>Properties ({{ $total }})</h3>
                            <div class="tabs-btn">
                                <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="pills-profile-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-profile" type="button" role="tab"
                                            aria-controls="pills-profile" aria-selected="false">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="31" height="30"
                                                viewBox="0 0 31 30" fill="none">
                                                <g clip-path="url(#clip0_6032_33158)">
                                                    <path
                                                        d="M5.74594 23.4104C5.88835 23.4027 6.03082 23.4242 6.16466 23.4735C6.2985 23.5227 6.4209 23.5987 6.5244 23.6968C6.6279 23.7949 6.71033 23.9131 6.76666 24.0441C6.82299 24.1751 6.85205 24.3162 6.85205 24.4589C6.85205 24.6015 6.82299 24.7426 6.76666 24.8736C6.71033 25.0046 6.6279 25.1228 6.5244 25.2209C6.4209 25.319 6.2985 25.395 6.16466 25.4443C6.03082 25.4935 5.88835 25.515 5.74594 25.5074H1.55044C1.40803 25.515 1.26556 25.4935 1.13172 25.4443C0.997886 25.395 0.875484 25.319 0.771982 25.2209C0.668481 25.1228 0.58605 25.0046 0.529719 24.8736C0.473388 24.7426 0.444336 24.6015 0.444336 24.4589C0.444336 24.3162 0.473388 24.1751 0.529719 24.0441C0.58605 23.9131 0.668481 23.7949 0.771982 23.6968C0.875484 23.5987 0.997886 23.5227 1.13172 23.4735C1.26556 23.4242 1.40803 23.4027 1.55044 23.4104H5.74594ZM29.4504 23.4104C29.5928 23.4027 29.7353 23.4242 29.8692 23.4735C30.003 23.5227 30.1254 23.5987 30.2289 23.6968C30.3324 23.7949 30.4148 23.9131 30.4712 24.0441C30.5275 24.1751 30.5565 24.3162 30.5565 24.4589C30.5565 24.6015 30.5275 24.7426 30.4712 24.8736C30.4148 25.0046 30.3324 25.1228 30.2289 25.2209C30.1254 25.319 30.003 25.395 29.8692 25.4443C29.7353 25.4935 29.5928 25.515 29.4504 25.5074H8.79394C8.65153 25.515 8.50906 25.4935 8.37523 25.4443C8.24139 25.395 8.11898 25.319 8.01548 25.2209C7.91198 25.1228 7.82955 25.0046 7.77322 24.8736C7.71689 24.7426 7.68784 24.6015 7.68784 24.4589C7.68784 24.3162 7.71689 24.1751 7.77322 24.0441C7.82955 23.9131 7.91198 23.7949 8.01548 23.6968C8.11898 23.5987 8.24139 23.5227 8.37523 23.4735C8.50906 23.4242 8.65153 23.4027 8.79394 23.4104H29.4504ZM5.74594 14.0084C5.88707 14.003 6.02782 14.0262 6.15978 14.0765C6.29174 14.1269 6.41219 14.2033 6.51392 14.3012C6.61565 14.3992 6.69658 14.5167 6.75185 14.6466C6.80713 14.7766 6.83562 14.9164 6.83562 15.0576C6.83562 15.1988 6.80713 15.3386 6.75185 15.4686C6.69658 15.5985 6.61565 15.716 6.51392 15.814C6.41219 15.9119 6.29174 15.9884 6.15978 16.0387C6.02782 16.089 5.88707 16.1122 5.74594 16.1069H1.55044C1.40931 16.1122 1.26856 16.089 1.1366 16.0387C1.00465 15.9884 0.884196 15.9119 0.782463 15.814C0.68073 15.716 0.599805 15.5985 0.544528 15.4686C0.489252 15.3386 0.460762 15.1988 0.460762 15.0576C0.460762 14.9164 0.489252 14.7766 0.544528 14.6466C0.599805 14.5167 0.68073 14.3992 0.782463 14.3012C0.884196 14.2033 1.00465 14.1269 1.1366 14.0765C1.26856 14.0262 1.40931 14.003 1.55044 14.0084H5.74594ZM29.4504 14.0084C29.5916 14.003 29.7323 14.0262 29.8643 14.0765C29.9962 14.1269 30.1167 14.2033 30.2184 14.3012C30.3202 14.3992 30.4011 14.5167 30.4564 14.6466C30.5116 14.7766 30.5401 14.9164 30.5401 15.0576C30.5401 15.1988 30.5116 15.3386 30.4564 15.4686C30.4011 15.5985 30.3202 15.716 30.2184 15.814C30.1167 15.9119 29.9962 15.9884 29.8643 16.0387C29.7323 16.089 29.5916 16.1122 29.4504 16.1069H8.79244C8.65131 16.1122 8.51056 16.089 8.3786 16.0387C8.24665 15.9884 8.1262 15.9119 8.02446 15.814C7.92273 15.716 7.8418 15.5985 7.78653 15.4686C7.73125 15.3386 7.70276 15.1988 7.70276 15.0576C7.70276 14.9164 7.73125 14.7766 7.78653 14.6466C7.8418 14.5167 7.92273 14.3992 8.02446 14.3012C8.1262 14.2033 8.24665 14.1269 8.3786 14.0765C8.51056 14.0262 8.65131 14.003 8.79244 14.0084H29.4504ZM5.74594 4.50736C5.88835 4.49974 6.03082 4.52121 6.16466 4.57046C6.2985 4.61971 6.4209 4.69571 6.5244 4.79382C6.6279 4.89193 6.71033 5.0101 6.76666 5.14111C6.82299 5.27213 6.85205 5.41325 6.85205 5.55586C6.85205 5.69847 6.82299 5.83959 6.76666 5.97061C6.71033 6.10162 6.6279 6.21979 6.5244 6.3179C6.4209 6.41601 6.2985 6.49201 6.16466 6.54126C6.03082 6.59051 5.88835 6.61198 5.74594 6.60436H1.55044C1.40803 6.61198 1.26556 6.59051 1.13172 6.54126C0.997886 6.49201 0.875484 6.41601 0.771982 6.3179C0.668481 6.21979 0.58605 6.10162 0.529719 5.97061C0.473388 5.83959 0.444336 5.69847 0.444336 5.55586C0.444336 5.41325 0.473388 5.27213 0.529719 5.14111C0.58605 5.0101 0.668481 4.89193 0.771982 4.79382C0.875484 4.69571 0.997886 4.61971 1.13172 4.57046C1.26556 4.52121 1.40803 4.49974 1.55044 4.50736H5.74594ZM29.4504 4.50736C29.5928 4.49974 29.7353 4.52121 29.8692 4.57046C30.003 4.61971 30.1254 4.69571 30.2289 4.79382C30.3324 4.89193 30.4148 5.0101 30.4712 5.14111C30.5275 5.27213 30.5565 5.41325 30.5565 5.55586C30.5565 5.69847 30.5275 5.83959 30.4712 5.97061C30.4148 6.10162 30.3324 6.21979 30.2289 6.3179C30.1254 6.41601 30.003 6.49201 29.8692 6.54126C29.7353 6.59051 29.5928 6.61198 29.4504 6.60436H8.79244C8.65003 6.61198 8.50756 6.59051 8.37373 6.54126C8.23989 6.49201 8.11748 6.41601 8.01398 6.3179C7.91048 6.21979 7.82805 6.10162 7.77172 5.97061C7.71539 5.83959 7.68634 5.69847 7.68634 5.55586C7.68634 5.41325 7.71539 5.27213 7.77172 5.14111C7.82805 5.0101 7.91048 4.89193 8.01398 4.79382C8.11748 4.69571 8.23989 4.61971 8.37373 4.57046C8.50756 4.52121 8.65003 4.49974 8.79244 4.50736H29.4504Z"
                                                        fill="#ED8438" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_6032_33158">
                                                        <rect width="30" height="30" fill="white"
                                                            transform="translate(0.5)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </button>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="space32"></div>
                        <div class="tab-content" id="pills-tabContent">
                            <di v class="tab-pane fade show active" id="pills-profile" role="tabpanel"
                                aria-labelledby="pills-profile-tab" tabindex="0">
                                <div class="row">
                                    @foreach ($properties as $property)
                                        <div class="col-lg-6 col-md-6">
                                            <div class="property-tab-boxarea">
                                                <div class="row align-items-center">
                                                    <div class="col-lg-6">
                                                        <div class="img1 image-anime">
                                                            <a href="{{ route('property.show', $property) }}"><img
                                                                    src="{{ asset('storage/' . json_decode($property->photos)[0]) }}"
                                                                    alt="housa"></a>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="content-tab-area">
                                                            <div class="property-price">
                                                                <div class="text">
                                                                    <a href="{{ route('property.show', $property) }}"
                                                                        class="title">{{ $property->title }}</a>
                                                                    <div class="space16"></div>
                                                                    <p>{{ $property->address }}, {{ $property->city }}</p>
                                                                </div>
                                                                <a href="#"
                                                                    class="price">{{ number_format($property->price, 0, ',', ' ') }}
                                                                    FCFA</a>
                                                            </div>
                                                            <div class="space20"></div>
                                                            <div class="property-other-widget">
                                                                <ul>
                                                                    <li><span><svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none">
                                                                                <path d="M8 9H16M8 15H16" stroke="#1B1B1B"
                                                                                    stroke-width="1.5"
                                                                                    stroke-linejoin="round" />
                                                                                <path d="M3 21H21V3.00046L3 3V21Z"
                                                                                    stroke="#1B1B1B" stroke-width="1.5"
                                                                                    stroke-linejoin="round" />
                                                                            </svg></span>{{ $property->lot_size }} m²</li>
                                                                    <li><span><svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none">
                                                                                <path d="M22 17.5H2" stroke="#1B1B1B"
                                                                                    stroke-width="1.5"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                                <path
                                                                                    d="M22 21V16C22 14.1144 22 13.1716 21.4142 12.5858C20.8284 12 19.8856 12 18 12H6C4.11438 12 3.17157 12 2.58579 12.5858C2 13.1716 2 14.1144 2 16V21"
                                                                                    stroke="#1B1B1B" stroke-width="1.5"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                                <path
                                                                                    d="M16 12V10.6178C16 10.1103 15.9085 9.94054 15.4396 9.7405C14.4631 9.32389 13.2778 9 12 9C10.7222 9 9.53688 9.32389 8.5604 9.7405C8.09154 9.94054 8 10.1103 8 10.6178V12"
                                                                                    stroke="#1B1B1B" stroke-width="1.5"
                                                                                    stroke-linecap="round" />
                                                                                <path
                                                                                    d="M20 12V7.36057C20 6.66893 20 6.32311 19.8292 5.99653C19.6584 5.66995 19.4151 5.50091 18.9284 5.16283C16.9661 3.79978 14.5772 3 12 3C9.42282 3 7.03391 3.79978 5.07163 5.16283C4.58492 5.50091 4.34157 5.66995 4.17079 5.99653C4 6.32311 4 6.66893 4 7.36057V12"
                                                                                    stroke="#1B1B1B" stroke-width="1.5"
                                                                                    stroke-linecap="round" />
                                                                            </svg></span>{{ $property->bedrooms }} Beds</li>
                                                                    <li><span><svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none">
                                                                                <path d="M6 20L5 21M18 20L19 21"
                                                                                    stroke="#1B1B1B" stroke-width="1.5"
                                                                                    stroke-linecap="round" />
                                                                                <path
                                                                                    d="M3 12V13C3 16.2998 3 17.9497 4.02513 18.9749C5.05025 20 6.70017 20 10 20H14C17.2998 20 18.9497 20 19.9749 18.9749C21 17.9497 21 16.2998 21 13V12"
                                                                                    stroke="#1B1B1B" stroke-width="1.5"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round" />
                                                                                <path d="M2 12H22" stroke="#1B1B1B"
                                                                                    stroke-width="1.5"
                                                                                    stroke-linecap="round" />
                                                                                <path
                                                                                    d="M4 12V5.5234C4 4.12977 5.12977 3 6.5234 3C7.64166 3 8.62654 3.73598 8.94339 4.80841L9 5"
                                                                                    stroke="#1B1B1B" stroke-width="1.5"
                                                                                    stroke-linecap="round" />
                                                                                <path d="M8 6L10.5 4" stroke="#1B1B1B"
                                                                                    stroke-width="1.5"
                                                                                    stroke-linecap="round" />
                                                                            </svg></span>{{ $property->bathrooms }} Baths
                                                                    </li>
                                                                </ul>
                                                                <div class="space24"></div>
                                                                <div class="btn-area">
                                                                    <div class="name-area">
                                                                        <div class="img">
                                                                            <img src="assets/img/all-images/others/others-img1.png"
                                                                                alt="housa">

                                                                        </div>
                                                                        <div class="text">
                                                                            <a href="#">{{ $property->user->first_name }}
                                                                                {{ $property->user->last_name }}</a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="love-share">
                                                                        <a href="javascript:void(0)" class="heart"><img
                                                                                src="assets/img/icons/heart2.svg"
                                                                                alt="housa" class="heart1"> <img
                                                                                src="assets/img/icons/heart1.svg"
                                                                                alt="housa" class="heart2"></a>
                                                                        <a href="#" class="share"><svg
                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                width="19" height="20"
                                                                                viewBox="0 0 19 20" fill="none">
                                                                                <path
                                                                                    d="M11.0373 14.6505L7.14942 12.5297C6.47355 13.2521 5.51175 13.7034 4.44452 13.7034C2.39902 13.7034 0.740814 12.0452 0.740814 9.99974C0.740814 7.95424 2.39902 6.29603 4.44452 6.29603C5.51169 6.29603 6.47345 6.74739 7.14931 7.46961L11.0373 5.34893C10.9646 5.05938 10.926 4.75628 10.926 4.44418C10.926 2.39868 12.5842 0.740479 14.6297 0.740479C16.6752 0.740479 18.3334 2.39868 18.3334 4.44418C18.3334 6.48968 16.6752 8.14789 14.6297 8.14789C13.5625 8.14789 12.6007 7.69651 11.9248 6.97424L8.0369 9.09492C8.10961 9.38446 8.14822 9.68761 8.14822 9.99974C8.14822 10.3119 8.10962 10.6149 8.03693 10.9045L11.9249 13.0252C12.6007 12.303 13.5625 11.8516 14.6297 11.8516C16.6752 11.8516 18.3334 13.5098 18.3334 15.5553C18.3334 17.6008 16.6752 19.259 14.6297 19.259C12.5842 19.259 10.926 17.6008 10.926 15.5553C10.926 15.2432 10.9646 14.94 11.0373 14.6505ZM4.44452 11.8516C5.46727 11.8516 6.29637 11.0225 6.29637 9.99974C6.29637 8.97696 5.46727 8.14789 4.44452 8.14789C3.42177 8.14789 2.59267 8.97696 2.59267 9.99974C2.59267 11.0225 3.42177 11.8516 4.44452 11.8516ZM14.6297 6.29603C15.6525 6.29603 16.4816 5.46693 16.4816 4.44418C16.4816 3.42143 15.6525 2.59233 14.6297 2.59233C13.6069 2.59233 12.7779 3.42143 12.7779 4.44418C12.7779 5.46693 13.6069 6.29603 14.6297 6.29603ZM14.6297 17.4071C15.6525 17.4071 16.4816 16.5781 16.4816 15.5553C16.4816 14.5325 15.6525 13.7034 14.6297 13.7034C13.6069 13.7034 12.7779 14.5325 12.7779 15.5553C12.7779 16.5781 13.6069 17.4071 14.6297 17.4071Z"
                                                                                    fill="#ED8438" />
                                                                            </svg></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    <div class="col-lg-12">
                                        <div class="pagination justify-content-center">
                                            {{ $properties->links('pagination::bootstrap-4') }}

                                        </div>
                                    </div>
                                </div>
                        </div>
                        </di>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!--===== PROPERTY AREA ENDS =======-->
    <div class="space30"></div>
@endsection
