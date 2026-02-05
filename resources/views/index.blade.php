@extends('template.house')

@section('title')
    Housa - Real Esate Template
@endsection
@section('style')
    <link rel="stylesheet" href="assets/css/style.css">
@endsection
@section('content')
    <!--===== HERO AREA STARTS =======-->
    <div class="hero1-section-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="hero-heading-content heading1">
                        <h1 class="text-anime-style-3">Making Your Homeownership <br class="d-lg-block d-none"> Dream a
                            Reality</h1>
                        <div class="space20"></div>
                        <p class="text-anime-style-1">Whether you're looking to buy, sell, or rent, Housa connects you with
                            <br class="d-lg-block d-none"> the best properties and expert advice. Explore homes that fit
                            your
                            <br class="d-lg-block d-none"> vision and budget with ease and confidence.
                        </p>
                        <div class="space32"></div>
                        <div class="btn-area1" data-aos="fade-left" data-aos-duration="1000">
                            <a href="add-property.html" class="vl-btn1">Add Listing <span class="arrow1"><i
                                        class="fa-solid fa-arrow-right"></i></span><span class="arrow2"><i
                                        class="fa-solid fa-arrow-right"></i></span></a>
                        </div>
                        <div class="space80 d-lg-block d-none"></div>
                        <div class="space40 d-lg-none d-block"></div>
                        <div class="counter-boxarea">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-6" data-aos="fade-up" data-aos-duration="300">
                                    <div class="counter-box">
                                        <h1><span class="odometer text-nowrap" data-count="180"></span>+</h1>
                                        <div class="space10"></div>
                                        <p>Selling Property</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-6" data-aos="fade-up" data-aos-duration="500">
                                    <div class="counter-box">
                                        <h1><span class="odometer text-nowrap" data-count="120"></span>+</h1>
                                        <div class="space10"></div>
                                        <p>Buying Property</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-12" data-aos="fade-up" data-aos-duration="700">
                                    <div class="space30 d-md-none d-block"></div>
                                    <div class="counter-box">
                                        <h1><span class="odometer text-nowrap" data-count="150"></span>+</h1>
                                        <div class="space10"></div>
                                        <p>Property Available</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="hero-images-area image-anime">
                        <img src="assets/img/all-images/hero/hero-img1.png" alt="housa">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="space20"></div>
    <!--===== HERO AREA ENDS =======-->
    <!--===== OTHERS AREA STARTS =======-->
    <div class="others-section-area container-home1" data-aos="fade-up" data-aos-duration="1000">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="property-tab-section b-bg1">
                        <div class="tab-content1" id="for-sale">
                            <div class="filters">
                                <div class="filter-group">
                                    <label>Status</label>
                                    <select>
                                        <option>For Rent</option>
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
                                        <option>Studio</option>
                                        <option>Bedroom</option>
                                        <option>House</option>
                                        <option>Office</option>
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
                                        <option>For Rent</option>
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
                                        <option>Studio</option>
                                        <option>Bedroom</option>
                                        <option>House</option>
                                        <option>Office</option>
                                        <option>Single Family</option>
                                        <option>Store</option>
                                        <option>Villa</option>
                                    </select>
                                </div>
                                <div class="filter-group">
                                    <label for="customize-sale2">Customize</label>
                                    <button id="customize-sale2" class="customize-sale show-form">
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
                                    <h5>Neighborhood</h5>
                                    <div class="nice-select" tabindex="0">
                                        <span class="current">All Neighborhood</span>
                                        <ul class="list">
                                            <li data-value="1" class="option">Akwa </li>
                                            <li data-value="2" class="option selected">Makepe</li>
                                            <li data-value="3" class="option">Bepanda</li>
                                            <li data-value="4" class="option">Yassa</li>
                                            <li data-value="5" class="option">Logbessou</li>
                                            <li data-value="6" class="option">Pk17</li>
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
    <!--===== ABOUT AREA STARTS =======-->
    <div class="about1-section-area container-home1">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-5">
                    <div class="about-img1 image-anime reveal">
                        <img src="assets/img/all-images/about/about-img1.png" alt="housa">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="heading1">
                        <div class="head">
                            <h5>About Company</h5>
                            <div class="space16"></div>
                            <h3 class="text-anime-style-2">Empowering Your Real Estate Journey</h3>
                        </div>
                        <div class="space20"></div>
                        <div class="perag-bg">
                            <p data-aos="fade-up" data-aos-duration="900">We are passionate about simplifying the real
                                estate experience. Our expert team combines industry knowledge with a client-first approach
                                to help you achieve your property goals. </p>
                            <div class="space32"></div>
                            <div class="btn-area1" data-aos="fade-up" data-aos-duration="1000">
                                <a href="{{ route('house.property') }}" class="vl-btn1">See Properties <span class="arrow1"><i
                                            class="fa-solid fa-arrow-right"></i></span><span class="arrow2"><i
                                            class="fa-solid fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="about-img2 image-anime reveal">
                        <img src="assets/img/all-images/about/about-img2.png" alt="housa">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===== ABOUT AREA ENDS =======-->
    <div class="space30"></div>
    <!--===== PROPERTY AREA STARTS =======-->
    <div class="property1">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-9 m-auto">
                    <div class="heading1 text-center">
                        <h5>Our Properties</h5>
                        <div class="space16"></div>
                        <h2 class="text-anime-style-2">Browse Our Exclusive Properties Listing</h2>
                    </div>
                    <div class="space40"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 m-auto" data-aos="fade-up" data-aos-duration="1000">
                    <div class="property-list-tab">
                        <ul class="nav nav-pills" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-profile-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-profile" type="button" role="tab"
                                    aria-controls="pills-profile" aria-selected="false"><svg
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                        <path
                                            d="M10 10.1111V1L21 7V21H3V7L10 10.1111ZM12 4.36908V13.1886L5 10.0775V19H19V8.18727L12 4.36908Z">
                                        </path>
                                    </svg> Rent</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-contact" type="button" role="tab"
                                    aria-controls="pills-contact" aria-selected="false"><svg
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                        <path
                                            d="M19 19V9.79875L12 4.27675L5 9.79875V19H19ZM21 20C21 20.5523 20.5523 21 20 21H4C3.44772 21 3 20.5523 3 20V9.31391C3 9.00773 3.14027 8.71843 3.38065 8.52879L11.3807 2.21793C11.7438 1.93142 12.2562 1.93142 12.6193 2.21793L20.6193 8.52879C20.8597 8.71843 21 9.00773 21 9.31391V20ZM7 12H9C9 13.6569 10.3431 15 12 15C13.6569 15 15 13.6569 15 12H17C17 14.7614 14.7614 17 12 17C9.23858 17 7 14.7614 7 12Z">
                                        </path>
                                    </svg> Villas</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-contact1-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-contact1" type="button" role="tab"
                                    aria-controls="pills-contact1" aria-selected="false"><svg
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                        <path
                                            d="M12.6727 1.61162 20.7999 9H17.8267L12 3.70302 6 9.15757V19.0001H11V21.0001H5C4.44772 21.0001 4 20.5524 4 20.0001V11.0001L1 11.0001 11.3273 1.61162C11.7087 1.26488 12.2913 1.26488 12.6727 1.61162ZM14 11H23V18H14V11ZM16 13V16H21V13H16ZM24 21H13V19H24V21Z">
                                        </path>
                                    </svg> Apartments</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-contact2-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-contact2" type="button" role="tab"
                                    aria-controls="pills-contact2" aria-selected="false"><svg
                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor">
                                        <path
                                            d="M6 19H18V9.15745L12 3.7029L6 9.15745V19ZM19 21H5C4.44772 21 4 20.5523 4 20V11L1 11L11.3273 1.6115C11.7087 1.26475 12.2913 1.26475 12.6727 1.6115L23 11L20 11V20C20 20.5523 19.5523 21 19 21ZM8 9.99998C11.866 9.99998 15 13.134 15 17H13C13 14.2386 10.7614 12 8 12V9.99998ZM8 14C9.65685 14 11 15.3431 11 17H8V14Z">
                                        </path>
                                    </svg> Houses</button>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="space40"></div>
                <div class="col-lg-12">
                    <div class="main-tabs-area">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                aria-labelledby="pills-home-tab" tabindex="0">
                                <div class="row">
                                    @foreach ($properties as $property)
                                        <div class="col-lg-4 col-md-6">
                                            <div class="property-single-boxarea">
                                                <div class="property-list-img-area owl-carousel">
                                                    <a href="{{ route('property.show', $property) }}">
                                                        <div class="img1 image-anime">
                                                            <img src="{{ asset('storage/' . json_decode($property->photos)[3] ?? '') }}"
                                                                alt="housa">
                                                        </div>
                                                    </a>
                                                    <a href="{{ route('property.show', $property) }}">
                                                        <div class="img1 image-anime">
                                                            <img src="{{ asset('storage/' . json_decode($property->photos)[2] ?? '') }}"
                                                                alt="housa">
                                                        </div>
                                                    </a>
                                                    <a href="{{ route('property.show', $property) }}">
                                                        <div class="img1 image-anime">
                                                            <img src="{{ asset('storage/' . json_decode($property->photos)[1] ?? '') }}"
                                                                alt="housa">
                                                        </div>
                                                    </a>
                                                </div>
                                                <div class="space20"></div>
                                                <div class="property-price">
                                                    <div class="text">
                                                        <a href="{{ route('property.show', $property) }}" class="title">{{ $property->title }}</a>
                                                        <div class="space16"></div>
                                                        <p>{{ $property->address }}, {{ $property->city }} </p>
                                                    </div>
                                                    <a href="#" class="price">{{ number_format($property->price, 0, ',', ' ') }} FCFA</a>
                                                </div>
                                                <div class="space20"></div>
                                                <div class="property-other-widget">
                                                    <ul>
                                                        <li><span><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none">
                                                                    <path d="M8 9H16M8 15H16" stroke="#1B1B1B"
                                                                        stroke-width="1.5" stroke-linejoin="round" />
                                                                    <path d="M3 21H21V3.00046L3 3V21Z" stroke="#1B1B1B"
                                                                        stroke-width="1.5" stroke-linejoin="round" />
                                                                </svg></span>{{ $property->lot_size }} m²</li>
                                                        <li><span><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none">
                                                                    <path d="M22 17.5H2" stroke="#1B1B1B"
                                                                        stroke-width="1.5" stroke-linecap="round"
                                                                        stroke-linejoin="round" />
                                                                    <path
                                                                        d="M22 21V16C22 14.1144 22 13.1716 21.4142 12.5858C20.8284 12 19.8856 12 18 12H6C4.11438 12 3.17157 12 2.58579 12.5858C2 13.1716 2 14.1144 2 16V21"
                                                                        stroke="#1B1B1B" stroke-width="1.5"
                                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                                    <path
                                                                        d="M16 12V10.6178C16 10.1103 15.9085 9.94054 15.4396 9.7405C14.4631 9.32389 13.2778 9 12 9C10.7222 9 9.53688 9.32389 8.5604 9.7405C8.09154 9.94054 8 10.1103 8 10.6178V12"
                                                                        stroke="#1B1B1B" stroke-width="1.5"
                                                                        stroke-linecap="round" />
                                                                    <path
                                                                        d="M20 12V7.36057C20 6.66893 20 6.32311 19.8292 5.99653C19.6584 5.66995 19.4151 5.50091 18.9284 5.16283C16.9661 3.79978 14.5772 3 12 3C9.42282 3 7.03391 3.79978 5.07163 5.16283C4.58492 5.50091 4.34157 5.66995 4.17079 5.99653C4 6.32311 4 6.66893 4 7.36057V12"
                                                                        stroke="#1B1B1B" stroke-width="1.5"
                                                                        stroke-linecap="round" />
                                                                </svg></span>{{ $property->bedrooms }} Beds</li>
                                                        <li><span><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none">
                                                                    <path d="M6 20L5 21M18 20L19 21" stroke="#1B1B1B"
                                                                        stroke-width="1.5" stroke-linecap="round" />
                                                                    <path
                                                                        d="M3 12V13C3 16.2998 3 17.9497 4.02513 18.9749C5.05025 20 6.70017 20 10 20H14C17.2998 20 18.9497 20 19.9749 18.9749C21 17.9497 21 16.2998 21 13V12"
                                                                        stroke="#1B1B1B" stroke-width="1.5"
                                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                                    <path d="M2 12H22" stroke="#1B1B1B" stroke-width="1.5"
                                                                        stroke-linecap="round" />
                                                                    <path
                                                                        d="M4 12V5.5234C4 4.12977 5.12977 3 6.5234 3C7.64166 3 8.62654 3.73598 8.94339 4.80841L9 5"
                                                                        stroke="#1B1B1B" stroke-width="1.5"
                                                                        stroke-linecap="round" />
                                                                    <path d="M8 6L10.5 4" stroke="#1B1B1B"
                                                                        stroke-width="1.5" stroke-linecap="round" />
                                                                </svg></span>{{ $property->bathrooms }} Baths</li>
                                                    </ul>
                                                    <div class="space24"></div>
                                                    <div class="btn-area">
                                                        <div class="name-area">
                                                            <div class="img">
                                                                <img src="assets/img/all-images/others/others-img4.png"
                                                                    alt="housa">
                                                            </div>
                                                            <div class="text">
                                                                <a href="#">{{ $property->user->first_name }} {{ $property->user->last_name }}</a>
                                                            </div>
                                                        </div>
                                                        <div class="love-share">
                                                            <a href="javascript:void(0)" class="heart"><img
                                                                    src="assets/img/icons/heart2.svg" alt="housa"
                                                                    class="heart1"> <img src="assets/img/icons/heart1.svg"
                                                                    alt="housa" class="heart2"></a>
                                                            <a href="#" class="share"><svg
                                                                    xmlns="http://www.w3.org/2000/svg" width="19"
                                                                    height="20" viewBox="0 0 19 20" fill="none">
                                                                    <path
                                                                        d="M11.0373 14.6505L7.14942 12.5297C6.47355 13.2521 5.51175 13.7034 4.44452 13.7034C2.39902 13.7034 0.740814 12.0452 0.740814 9.99974C0.740814 7.95424 2.39902 6.29603 4.44452 6.29603C5.51169 6.29603 6.47345 6.74739 7.14931 7.46961L11.0373 5.34893C10.9646 5.05938 10.926 4.75628 10.926 4.44418C10.926 2.39868 12.5842 0.740479 14.6297 0.740479C16.6752 0.740479 18.3334 2.39868 18.3334 4.44418C18.3334 6.48968 16.6752 8.14789 14.6297 8.14789C13.5625 8.14789 12.6007 7.69651 11.9248 6.97424L8.0369 9.09492C8.10961 9.38446 8.14822 9.68761 8.14822 9.99974C8.14822 10.3119 8.10962 10.6149 8.03693 10.9045L11.9249 13.0252C12.6007 12.303 13.5625 11.8516 14.6297 11.8516C16.6752 11.8516 18.3334 13.5098 18.3334 15.5553C18.3334 17.6008 16.6752 19.259 14.6297 19.259C12.5842 19.259 10.926 17.6008 10.926 15.5553C10.926 15.2432 10.9646 14.94 11.0373 14.6505ZM4.44452 11.8516C5.46727 11.8516 6.29637 11.0225 6.29637 9.99974C6.29637 8.97696 5.46727 8.14789 4.44452 8.14789C3.42177 8.14789 2.59267 8.97696 2.59267 9.99974C2.59267 11.0225 3.42177 11.8516 4.44452 11.8516ZM14.6297 6.29603C15.6525 6.29603 16.4816 5.46693 16.4816 4.44418C16.4816 3.42143 15.6525 2.59233 14.6297 2.59233C13.6069 2.59233 12.7779 3.42143 12.7779 4.44418C12.7779 5.46693 13.6069 6.29603 14.6297 6.29603ZM14.6297 17.4071C15.6525 17.4071 16.4816 16.5781 16.4816 15.5553C16.4816 14.5325 15.6525 13.7034 14.6297 13.7034C13.6069 13.7034 12.7779 14.5325 12.7779 15.5553C12.7779 16.5781 13.6069 17.4071 14.6297 17.4071Z"
                                                                        fill="#ED8438" />
                                                                </svg></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="rent-sale-area">
                                                    <ul>
                                                        <li><a href="#">For Rent</a></li>
                                                        <li><a href="#">New</a></li>
                                                    </ul>
                                                    <a href="#" class="camera"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="16"
                                                            height="14" viewBox="0 0 16 14" fill="none">
                                                            <path
                                                                d="M12 7.39995C12 8.75995 10.96 9.79995 9.6 9.79995C8.24 9.79995 7.2 8.75995 7.2 7.39995C7.2 6.03995 8.24 4.99995 9.6 4.99995C10.96 4.99995 12 6.03995 12 7.39995ZM16 3.39995V12.2C16 13.08 15.28 13.8 14.4 13.8H1.6C0.72 13.8 0 13.08 0 12.2V3.39995C0 2.51995 0.72 1.79995 1.6 1.79995V0.999951H4.8V1.79995H6.4L7.2 0.199951H12L12.8 1.79995H14.4C15.28 1.79995 16 2.51995 16 3.39995ZM4.4 4.99995C4.4 4.35995 3.84 3.79995 3.2 3.79995C2.56 3.79995 2 4.35995 2 4.99995C2 5.63995 2.56 6.19995 3.2 6.19995C3.84 6.19995 4.4 5.63995 4.4 4.99995ZM13.6 7.39995C13.6 5.15995 11.84 3.39995 9.6 3.39995C7.36 3.39995 5.6 5.15995 5.6 7.39995C5.6 9.63995 7.36 11.4 9.6 11.4C11.84 11.4 13.6 9.63995 13.6 7.39995Z"
                                                                fill="#1B1B1B" />
                                                        </svg> 3</a>
                                                </div>
                                                <div class="btn-area1 text-center">
                                                    <a href="{{ route('property.show', $property) }}" class="vl-btn1">View Property
                                                        Details
                                                        <span class="arrow1"><i
                                                                class="fa-solid fa-arrow-right"></i></span><span
                                                            class="arrow2"><i
                                                                class="fa-solid fa-arrow-right"></i></span></a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===== PROPERTY AREA ENDS =======-->
    <div class="space30"></div>
    <!--===== CATEGORY AREA STARTS =======-->
    <div class="category1">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 m-auto">
                    <div class="heading1 text-center space-margin60">
                        <h5>Category</h5>
                        <div class="space16"></div>
                        <h2 class="text-anime-style-3">Select The Home That Suits You</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6" data-aos="zoom-in-up" data-aos-duration="800">
                    <div class="category-boxarea">
                        <div class="img1">
                            <img src="assets/img/all-images/category/ca-img1.png" alt="housa">
                        </div>
                        <div class="text">
                            <a href="topmap-grid.html">Apartment</a>
                            <div class="space16"></div>
                            <p>17 Properties</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="zoom-in-up" data-aos-duration="900">
                    <div class="category-boxarea">
                        <div class="img1">
                            <img src="assets/img/all-images/category/ca-img2.png" alt="housa">
                        </div>
                        <div class="text">
                            <a href="topmap-grid.html">Neighborhood</a>
                            <div class="space16"></div>
                            <p>10 Propertiess</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="zoom-in-up" data-aos-duration="1000">
                    <div class="category-boxarea">
                        <div class="img1">
                            <img src="assets/img/all-images/category/ca-img3.png" alt="housa">
                        </div>
                        <div class="text">
                            <a href="topmap-grid.html">Office</a>
                            <div class="space16"></div>
                            <p>8 Properties</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="zoom-in-up" data-aos-duration="1100">
                    <div class="category-boxarea">
                        <div class="img1">
                            <img src="assets/img/all-images/category/ca-img4.png" alt="housa">
                        </div>
                        <div class="text">
                            <a href="topmap-grid.html">Residential</a>
                            <div class="space16"></div>
                            <p>21 Properties</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="zoom-in-up" data-aos-duration="1200">
                    <div class="category-boxarea">
                        <div class="img1">
                            <img src="assets/img/all-images/category/ca-img5.png" alt="housa">
                        </div>
                        <div class="text">
                            <a href="topmap-grid.html">Studio</a>
                            <div class="space16"></div>
                            <p>06 Properties</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6" data-aos="zoom-in-up" data-aos-duration="1300">
                    <div class="category-boxarea">
                        <div class="img1">
                            <img src="assets/img/all-images/category/ca-img6.png" alt="housa">
                        </div>
                        <div class="text">
                            <a href="topmap-grid.html">Duplex Villa</a>
                            <div class="space16"></div>
                            <p>2 Properties</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===== CATEGORY AREA ENDS =======-->
    <div class="space30"></div>
    <!--===== PROPERTIES AREA STARTS =======-->
    <div class="pro-location1">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="heading1 text-center space-margin60">
                        <h5>Properties</h5>
                        <div class="space16"></div>
                        <h2 class="text-anime-style-3">Our Featured Properties</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12" data-aos="zoom-out" data-aos-duration="1200">
                    <div class="cs_case_study_1_list">
                        @foreach ($favorites as $favorite)
                        <div class="cs_case_study cs_style_1 cs_hover_active active" data-aos="fade-up"
                            data-aos-duration="800">
                            <a href="{{ route('property.show', $favorite) }}" class="cs_case_study_thumb cs_bg_filed"
                                data-src="assets/img/all-images/items/item-img2.png"></a>
                            <div class="content-area">
                                <div class="rent-sale-area">
                                    <ul>
                                        <li><a href="#">For Rent</a></li>
                                        <li><a href="#">New</a></li>
                                    </ul>
                                    <a href="#" class="camera"><svg xmlns="http://www.w3.org/2000/svg"
                                            width="16" height="14" viewBox="0 0 16 14" fill="none">
                                            <path
                                                d="M12 7.39995C12 8.75995 10.96 9.79995 9.6 9.79995C8.24 9.79995 7.2 8.75995 7.2 7.39995C7.2 6.03995 8.24 4.99995 9.6 4.99995C10.96 4.99995 12 6.03995 12 7.39995ZM16 3.39995V12.2C16 13.08 15.28 13.8 14.4 13.8H1.6C0.72 13.8 0 13.08 0 12.2V3.39995C0 2.51995 0.72 1.79995 1.6 1.79995V0.999951H4.8V1.79995H6.4L7.2 0.199951H12L12.8 1.79995H14.4C15.28 1.79995 16 2.51995 16 3.39995ZM4.4 4.99995C4.4 4.35995 3.84 3.79995 3.2 3.79995C2.56 3.79995 2 4.35995 2 4.99995C2 5.63995 2.56 6.19995 3.2 6.19995C3.84 6.19995 4.4 5.63995 4.4 4.99995ZM13.6 7.39995C13.6 5.15995 11.84 3.39995 9.6 3.39995C7.36 3.39995 5.6 5.15995 5.6 7.39995C5.6 9.63995 7.36 11.4 9.6 11.4C11.84 11.4 13.6 9.63995 13.6 7.39995Z"
                                                fill="#1B1B1B" />
                                        </svg> 3</a>
                                </div>
                                <div class="space32"></div>
                                <a href="{{ route('property.show', $favorite) }}" class="title">{{ $favorite->title }}</a>
                                <div class="space20"></div>
                                <p><span><svg xmlns="http://www.w3.org/2000/svg" width="18" height="22"
                                            viewBox="0 0 18 22" fill="none">
                                            <path
                                                d="M9 5C8.25832 5 7.5333 5.21993 6.91661 5.63199C6.29993 6.04404 5.81928 6.62971 5.53545 7.31494C5.25162 8.00016 5.17736 8.75416 5.32205 9.48159C5.46675 10.209 5.8239 10.8772 6.34835 11.4017C6.8728 11.9261 7.54098 12.2833 8.26841 12.4279C8.99584 12.5726 9.74984 12.4984 10.4351 12.2145C11.1203 11.9307 11.706 11.4501 12.118 10.8334C12.5301 10.2167 12.75 9.49168 12.75 8.75C12.75 7.75544 12.3549 6.80161 11.6517 6.09835C10.9484 5.39509 9.99456 5 9 5ZM9 11C8.55499 11 8.11998 10.868 7.74997 10.6208C7.37996 10.3736 7.09157 10.0222 6.92127 9.61104C6.75097 9.1999 6.70642 8.7475 6.79323 8.31105C6.88005 7.87459 7.09434 7.47368 7.40901 7.15901C7.72368 6.84434 8.12459 6.63005 8.56105 6.54323C8.9975 6.45642 9.4499 6.50097 9.86104 6.67127C10.2722 6.84157 10.6236 7.12996 10.8708 7.49997C11.118 7.86998 11.25 8.30499 11.25 8.75C11.25 9.34674 11.0129 9.91903 10.591 10.341C10.169 10.7629 9.59674 11 9 11ZM9 0.5C6.81273 0.502481 4.71575 1.37247 3.16911 2.91911C1.62247 4.46575 0.752481 6.56273 0.75 8.75C0.75 11.6938 2.11031 14.8138 4.6875 17.7734C5.84552 19.1108 7.14887 20.3151 8.57344 21.3641C8.69954 21.4524 8.84978 21.4998 9.00375 21.4998C9.15772 21.4998 9.30796 21.4524 9.43406 21.3641C10.856 20.3147 12.1568 19.1104 13.3125 17.7734C15.8859 14.8138 17.25 11.6938 17.25 8.75C17.2475 6.56273 16.3775 4.46575 14.8309 2.91911C13.2843 1.37247 11.1873 0.502481 9 0.5ZM9 19.8125C7.45031 18.5938 2.25 14.1172 2.25 8.75C2.25 6.95979 2.96116 5.2429 4.22703 3.97703C5.4929 2.71116 7.20979 2 9 2C10.7902 2 12.5071 2.71116 13.773 3.97703C15.0388 5.2429 15.75 6.95979 15.75 8.75C15.75 14.1153 10.5497 18.5938 9 19.8125Z"
                                                fill="#1B1B1B" />
                                        </svg></span> {{ $favorite->address }}, {{ $favorite->neighborhood }}, {{ $favorite->city }} </p>
                                <div class="space16"></div>
                                <div class="property-other-widget">
                                    <ul>
                                        <li><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path d="M8 9H16M8 15H16" stroke="#1B1B1B" stroke-width="1.5"
                                                        stroke-linejoin="round" />
                                                    <path d="M3 21H21V3.00046L3 3V21Z" stroke="#1B1B1B" stroke-width="1.5"
                                                        stroke-linejoin="round" />
                                                </svg></span>{{ $favorite->lot_size }} m²</li>
                                        <li><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path d="M22 17.5H2" stroke="#1B1B1B" stroke-width="1.5"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                    <path
                                                        d="M22 21V16C22 14.1144 22 13.1716 21.4142 12.5858C20.8284 12 19.8856 12 18 12H6C4.11438 12 3.17157 12 2.58579 12.5858C2 13.1716 2 14.1144 2 16V21"
                                                        stroke="#1B1B1B" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path
                                                        d="M16 12V10.6178C16 10.1103 15.9085 9.94054 15.4396 9.7405C14.4631 9.32389 13.2778 9 12 9C10.7222 9 9.53688 9.32389 8.5604 9.7405C8.09154 9.94054 8 10.1103 8 10.6178V12"
                                                        stroke="#1B1B1B" stroke-width="1.5" stroke-linecap="round" />
                                                    <path
                                                        d="M20 12V7.36057C20 6.66893 20 6.32311 19.8292 5.99653C19.6584 5.66995 19.4151 5.50091 18.9284 5.16283C16.9661 3.79978 14.5772 3 12 3C9.42282 3 7.03391 3.79978 5.07163 5.16283C4.58492 5.50091 4.34157 5.66995 4.17079 5.99653C4 6.32311 4 6.66893 4 7.36057V12"
                                                        stroke="#1B1B1B" stroke-width="1.5" stroke-linecap="round" />
                                                </svg></span>{{ $favorite->bedrooms }} Beds</li>
                                        <li><span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path d="M6 20L5 21M18 20L19 21" stroke="#1B1B1B" stroke-width="1.5"
                                                        stroke-linecap="round" />
                                                    <path
                                                        d="M3 12V13C3 16.2998 3 17.9497 4.02513 18.9749C5.05025 20 6.70017 20 10 20H14C17.2998 20 18.9497 20 19.9749 18.9749C21 17.9497 21 16.2998 21 13V12"
                                                        stroke="#1B1B1B" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M2 12H22" stroke="#1B1B1B" stroke-width="1.5"
                                                        stroke-linecap="round" />
                                                    <path
                                                        d="M4 12V5.5234C4 4.12977 5.12977 3 6.5234 3C7.64166 3 8.62654 3.73598 8.94339 4.80841L9 5"
                                                        stroke="#1B1B1B" stroke-width="1.5" stroke-linecap="round" />
                                                    <path d="M8 6L10.5 4" stroke="#1B1B1B" stroke-width="1.5"
                                                        stroke-linecap="round" />
                                                </svg></span>{{ $favorite->bathrooms }} Baths</li>
                                    </ul>
                                    <div class="space24"></div>
                                    <div class="btn-area">
                                        <div class="nm-btn">
                                            <h3>{{ number_format($favorite->price, 0, ',', ' ') }} FCFA/<span>month</span></h3>
                                        </div>
                                        <div class="love-share">
                                            <a href="javascript:void(0)" class="heart"><img
                                                    src="assets/img/icons/heart2.svg" alt="housa" class="heart1">
                                                <img src="assets/img/icons/heart1.svg" alt="housa" class="heart2"></a>
                                            <a href="#" class="share"><svg xmlns="http://www.w3.org/2000/svg"
                                                    width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                    <path
                                                        d="M13.0373 16.6502L9.14942 14.5295C8.47355 15.2518 7.51175 15.7032 6.44452 15.7032C4.39902 15.7032 2.74081 14.045 2.74081 11.9995C2.74081 9.95399 4.39902 8.29579 6.44452 8.29579C7.51169 8.29579 8.47345 8.74714 9.14931 9.46936L13.0373 7.34869C12.9646 7.05913 12.926 6.75604 12.926 6.44394C12.926 4.39844 14.5842 2.74023 16.6297 2.74023C18.6752 2.74023 20.3334 4.39844 20.3334 6.44394C20.3334 8.48944 18.6752 10.1476 16.6297 10.1476C15.5625 10.1476 14.6007 9.69626 13.9248 8.97399L10.0369 11.0947C10.1096 11.3842 10.1482 11.6874 10.1482 11.9995C10.1482 12.3116 10.1096 12.6147 10.0369 12.9042L13.9249 15.025C14.6007 14.3027 15.5625 13.8513 16.6297 13.8513C18.6752 13.8513 20.3334 15.5096 20.3334 17.555C20.3334 19.6005 18.6752 21.2588 16.6297 21.2588C14.5842 21.2588 12.926 19.6005 12.926 17.555C12.926 17.2429 12.9646 16.9398 13.0373 16.6502ZM6.44452 13.8513C7.46727 13.8513 8.29637 13.0223 8.29637 11.9995C8.29637 10.9767 7.46727 10.1476 6.44452 10.1476C5.42177 10.1476 4.59267 10.9767 4.59267 11.9995C4.59267 13.0223 5.42177 13.8513 6.44452 13.8513ZM16.6297 8.29579C17.6525 8.29579 18.4816 7.46669 18.4816 6.44394C18.4816 5.42119 17.6525 4.59209 16.6297 4.59209C15.6069 4.59209 14.7779 5.42119 14.7779 6.44394C14.7779 7.46669 15.6069 8.29579 16.6297 8.29579ZM16.6297 19.4069C17.6525 19.4069 18.4816 18.5778 18.4816 17.555C18.4816 16.5323 17.6525 15.7032 16.6297 15.7032C15.6069 15.7032 14.7779 16.5323 14.7779 17.555C14.7779 18.5778 15.6069 19.4069 16.6297 19.4069Z"
                                                        fill="#ED8438" />
                                                </svg></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="space100 d-lg-none d-block"></div>
                        <div class="space40 d-lg-none d-block"></div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===== PROPERTIES AREA ENDS =======-->
    <div class="space30"></div>
    <!--===== PROPERTIES_LOCATION AREA STARTS =======-->
    <div class="p-location1">
        <div class="conatainer">
            <div class="row">
                <div class="col-lg-10 m-auto">
                    <div class="heading1 text-center space-margin60">
                        <h5>Our Location</h5>
                        <div class="space16"></div>
                        <h2 class="text-anime-style-3">Find Your Properties In This Cities</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="800">
                    <div class="p-location-boxarea">
                        <div class="img1">
                            <img src="assets/img/all-images/p-location/p-loaction-img1.png" alt="housa">
                        </div>
                        <div class="content-area">
                            <a href="#">Los Angles</a>
                            <div class="space12"></div>
                            <p>8 Properties</p>
                        </div>
                        <div class="arrow">
                            <a href="property-halfmap-list.html"><svg xmlns="http://www.w3.org/2000/svg" width="29"
                                    height="28" viewBox="0 0 29 28" fill="none">
                                    <path d="M6.52264 22.168L20.5226 8.16797" stroke="white" stroke-width="2.4"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M9.14764 8.16797H20.5226V19.543" stroke="white" stroke-width="2.4"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="900">
                    <div class="p-location-boxarea">
                        <div class="img1">
                            <img src="assets/img/all-images/p-location/p-loaction-img2.png" alt="housa">
                        </div>
                        <div class="content-area">
                            <a href="#">Los Angles</a>
                            <div class="space12"></div>
                            <p>8 Properties</p>
                        </div>
                        <div class="arrow">
                            <a href="property-halfmap-list.html"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="29" height="28" viewBox="0 0 29 28" fill="none">
                                    <path d="M6.52264 22.168L20.5226 8.16797" stroke="white" stroke-width="2.4"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M9.14764 8.16797H20.5226V19.543" stroke="white" stroke-width="2.4"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1000">
                    <div class="p-location-boxarea">
                        <div class="img1">
                            <img src="assets/img/all-images/p-location/p-loaction-img3.png" alt="housa">
                        </div>
                        <div class="content-area">
                            <a href="property-details-v1.html">Los Angles</a>
                            <div class="space12"></div>
                            <p>8 Properties</p>
                        </div>
                        <div class="arrow">
                            <a href="property-halfmap-list.html"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="29" height="28" viewBox="0 0 29 28" fill="none">
                                    <path d="M6.52264 22.168L20.5226 8.16797" stroke="white" stroke-width="2.4"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M9.14764 8.16797H20.5226V19.543" stroke="white" stroke-width="2.4"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6" data-aos="fade-up" data-aos-duration="1100">
                    <div class="p-location-boxarea">
                        <div class="img1">
                            <img src="assets/img/all-images/p-location/p-loaction-img4.png" alt="housa">
                        </div>
                        <div class="content-area">
                            <a href="#">Los Angles</a>
                            <div class="space12"></div>
                            <p>8 Properties</p>
                        </div>
                        <div class="arrow">
                            <a href="property-halfmap-list.html"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="29" height="28" viewBox="0 0 29 28" fill="none">
                                    <path d="M6.52264 22.168L20.5226 8.16797" stroke="white" stroke-width="2.4"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M9.14764 8.16797H20.5226V19.543" stroke="white" stroke-width="2.4"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="1200">
                    <div class="p-location-boxarea">
                        <div class="img1">
                            <img src="assets/img/all-images/p-location/p-loaction-img5.png" alt="housa">
                        </div>
                        <div class="content-area">
                            <a href="property-details-v1.html">Los Angles</a>
                            <div class="space12"></div>
                            <p>8 Properties</p>
                        </div>
                        <div class="arrow">
                            <a href="property-halfmap-list.html"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="29" height="28" viewBox="0 0 29 28" fill="none">
                                    <path d="M6.52264 22.168L20.5226 8.16797" stroke="white" stroke-width="2.4"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M9.14764 8.16797H20.5226V19.543" stroke="white" stroke-width="2.4"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="1300">
                    <div class="p-location-boxarea">
                        <div class="img1">
                            <img src="assets/img/all-images/p-location/p-loaction-img6.png" alt="housa">
                        </div>
                        <div class="content-area">
                            <a href="property-details-v1.html">Los Angles</a>
                            <div class="space12"></div>
                            <p>8 Properties</p>
                        </div>
                        <div class="arrow">
                            <a href="property-halfmap-list.html"><svg xmlns="http://www.w3.org/2000/svg"
                                    width="29" height="28" viewBox="0 0 29 28" fill="none">
                                    <path d="M6.52264 22.168L20.5226 8.16797" stroke="white" stroke-width="2.4"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M9.14764 8.16797H20.5226V19.543" stroke="white" stroke-width="2.4"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===== PROPERTIES_LOCATION AREA ENDS =======-->
    <div class="space30"></div>
    <!--===== TEAM AREA STARTS =======-->
    <div class="team1 container-home1">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-9 m-auto">
                    <div class="heading1 text-center space-margin60">
                        <h5>Our Team Member</h5>
                        <div class="space16"></div>
                        <h2 class="text-anime-style-3">Meet The Expert Behind Housa</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="800" data-aos-offset="30px">
                    <div class="team-widget-boxarea">
                        <div class="img1">
                            <img src="assets/img/all-images/team/team-img1.png" alt="housa">
                            <div class="share">
                                <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="28"
                                        height="28" viewBox="0 0 28 28" fill="none">
                                        <path
                                            d="M15.1352 19.6467L10.4115 17.07C9.59027 17.9477 8.42169 18.4961 7.125 18.4961C4.63972 18.4961 2.625 16.4813 2.625 13.9961C2.625 11.5108 4.63972 9.49609 7.125 9.49609C8.42162 9.49609 9.59016 10.0445 10.4113 10.922L15.1352 8.34537C15.0469 7.99356 15 7.6253 15 7.24609C15 4.76081 17.0148 2.74609 19.5 2.74609C21.9852 2.74609 24 4.76081 24 7.24609C24 9.73138 21.9852 11.7461 19.5 11.7461C18.2033 11.7461 17.0348 11.1977 16.2135 10.3201L11.4897 12.8967C11.5781 13.2485 11.625 13.6169 11.625 13.9961C11.625 14.3753 11.5781 14.7435 11.4898 15.0953L16.2136 17.672C17.0348 16.7945 18.2033 16.2461 19.5 16.2461C21.9852 16.2461 24 18.2609 24 20.7461C24 23.2313 21.9852 25.2461 19.5 25.2461C17.0148 25.2461 15 23.2313 15 20.7461C15 20.3669 15.0469 19.9985 15.1352 19.6467ZM7.125 16.2461C8.36764 16.2461 9.375 15.2388 9.375 13.9961C9.375 12.7534 8.36764 11.7461 7.125 11.7461C5.88236 11.7461 4.875 12.7534 4.875 13.9961C4.875 15.2388 5.88236 16.2461 7.125 16.2461ZM19.5 9.49609C20.7427 9.49609 21.75 8.48874 21.75 7.24609C21.75 6.00345 20.7427 4.99609 19.5 4.99609C18.2573 4.99609 17.25 6.00345 17.25 7.24609C17.25 8.48874 18.2573 9.49609 19.5 9.49609ZM19.5 22.9961C20.7427 22.9961 21.75 21.9888 21.75 20.7461C21.75 19.5034 20.7427 18.4961 19.5 18.4961C18.2573 18.4961 17.25 19.5034 17.25 20.7461C17.25 21.9888 18.2573 22.9961 19.5 22.9961Z"
                                            fill="white" />
                                    </svg></a>
                            </div>
                            <ul>
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <div class="space20"></div>
                        <div class="textarea">
                            <a href="#">Henry Nicolas</a>
                            <div class="space12"></div>
                            <p>Founder & CEO</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="900" data-aos-offset="35px">
                    <div class="team-widget-boxarea">
                        <div class="img1">
                            <img src="assets/img/all-images/team/team-img2.png" alt="housa">
                            <div class="share">
                                <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="28"
                                        height="28" viewBox="0 0 28 28" fill="none">
                                        <path
                                            d="M15.1352 19.6467L10.4115 17.07C9.59027 17.9477 8.42169 18.4961 7.125 18.4961C4.63972 18.4961 2.625 16.4813 2.625 13.9961C2.625 11.5108 4.63972 9.49609 7.125 9.49609C8.42162 9.49609 9.59016 10.0445 10.4113 10.922L15.1352 8.34537C15.0469 7.99356 15 7.6253 15 7.24609C15 4.76081 17.0148 2.74609 19.5 2.74609C21.9852 2.74609 24 4.76081 24 7.24609C24 9.73138 21.9852 11.7461 19.5 11.7461C18.2033 11.7461 17.0348 11.1977 16.2135 10.3201L11.4897 12.8967C11.5781 13.2485 11.625 13.6169 11.625 13.9961C11.625 14.3753 11.5781 14.7435 11.4898 15.0953L16.2136 17.672C17.0348 16.7945 18.2033 16.2461 19.5 16.2461C21.9852 16.2461 24 18.2609 24 20.7461C24 23.2313 21.9852 25.2461 19.5 25.2461C17.0148 25.2461 15 23.2313 15 20.7461C15 20.3669 15.0469 19.9985 15.1352 19.6467ZM7.125 16.2461C8.36764 16.2461 9.375 15.2388 9.375 13.9961C9.375 12.7534 8.36764 11.7461 7.125 11.7461C5.88236 11.7461 4.875 12.7534 4.875 13.9961C4.875 15.2388 5.88236 16.2461 7.125 16.2461ZM19.5 9.49609C20.7427 9.49609 21.75 8.48874 21.75 7.24609C21.75 6.00345 20.7427 4.99609 19.5 4.99609C18.2573 4.99609 17.25 6.00345 17.25 7.24609C17.25 8.48874 18.2573 9.49609 19.5 9.49609ZM19.5 22.9961C20.7427 22.9961 21.75 21.9888 21.75 20.7461C21.75 19.5034 20.7427 18.4961 19.5 18.4961C18.2573 18.4961 17.25 19.5034 17.25 20.7461C17.25 21.9888 18.2573 22.9961 19.5 22.9961Z"
                                            fill="white" />
                                    </svg></a>
                            </div>
                            <ul>
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <div class="space20"></div>
                        <div class="textarea">
                            <a href="#">Sarah Johnson</a>
                            <div class="space12"></div>
                            <p>Real Estate Agent</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="1000" data-aos-offset="40px">
                    <div class="team-widget-boxarea">
                        <div class="img1">
                            <img src="assets/img/all-images/team/team-img3.png" alt="housa">
                            <div class="share">
                                <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="28"
                                        height="28" viewBox="0 0 28 28" fill="none">
                                        <path
                                            d="M15.1352 19.6467L10.4115 17.07C9.59027 17.9477 8.42169 18.4961 7.125 18.4961C4.63972 18.4961 2.625 16.4813 2.625 13.9961C2.625 11.5108 4.63972 9.49609 7.125 9.49609C8.42162 9.49609 9.59016 10.0445 10.4113 10.922L15.1352 8.34537C15.0469 7.99356 15 7.6253 15 7.24609C15 4.76081 17.0148 2.74609 19.5 2.74609C21.9852 2.74609 24 4.76081 24 7.24609C24 9.73138 21.9852 11.7461 19.5 11.7461C18.2033 11.7461 17.0348 11.1977 16.2135 10.3201L11.4897 12.8967C11.5781 13.2485 11.625 13.6169 11.625 13.9961C11.625 14.3753 11.5781 14.7435 11.4898 15.0953L16.2136 17.672C17.0348 16.7945 18.2033 16.2461 19.5 16.2461C21.9852 16.2461 24 18.2609 24 20.7461C24 23.2313 21.9852 25.2461 19.5 25.2461C17.0148 25.2461 15 23.2313 15 20.7461C15 20.3669 15.0469 19.9985 15.1352 19.6467ZM7.125 16.2461C8.36764 16.2461 9.375 15.2388 9.375 13.9961C9.375 12.7534 8.36764 11.7461 7.125 11.7461C5.88236 11.7461 4.875 12.7534 4.875 13.9961C4.875 15.2388 5.88236 16.2461 7.125 16.2461ZM19.5 9.49609C20.7427 9.49609 21.75 8.48874 21.75 7.24609C21.75 6.00345 20.7427 4.99609 19.5 4.99609C18.2573 4.99609 17.25 6.00345 17.25 7.24609C17.25 8.48874 18.2573 9.49609 19.5 9.49609ZM19.5 22.9961C20.7427 22.9961 21.75 21.9888 21.75 20.7461C21.75 19.5034 20.7427 18.4961 19.5 18.4961C18.2573 18.4961 17.25 19.5034 17.25 20.7461C17.25 21.9888 18.2573 22.9961 19.5 22.9961Z"
                                            fill="white" />
                                    </svg></a>
                            </div>
                            <ul>
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <div class="space20"></div>
                        <div class="textarea">
                            <a href="#">Sohia Rodriguez</a>
                            <div class="space12"></div>
                            <p>Marketing Director</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-duration="1100" data-aos-offset="50px">
                    <div class="team-widget-boxarea">
                        <div class="img1">
                            <img src="assets/img/all-images/team/team-img4.png" alt="housa">
                            <div class="share">
                                <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="28"
                                        height="28" viewBox="0 0 28 28" fill="none">
                                        <path
                                            d="M15.1352 19.6467L10.4115 17.07C9.59027 17.9477 8.42169 18.4961 7.125 18.4961C4.63972 18.4961 2.625 16.4813 2.625 13.9961C2.625 11.5108 4.63972 9.49609 7.125 9.49609C8.42162 9.49609 9.59016 10.0445 10.4113 10.922L15.1352 8.34537C15.0469 7.99356 15 7.6253 15 7.24609C15 4.76081 17.0148 2.74609 19.5 2.74609C21.9852 2.74609 24 4.76081 24 7.24609C24 9.73138 21.9852 11.7461 19.5 11.7461C18.2033 11.7461 17.0348 11.1977 16.2135 10.3201L11.4897 12.8967C11.5781 13.2485 11.625 13.6169 11.625 13.9961C11.625 14.3753 11.5781 14.7435 11.4898 15.0953L16.2136 17.672C17.0348 16.7945 18.2033 16.2461 19.5 16.2461C21.9852 16.2461 24 18.2609 24 20.7461C24 23.2313 21.9852 25.2461 19.5 25.2461C17.0148 25.2461 15 23.2313 15 20.7461C15 20.3669 15.0469 19.9985 15.1352 19.6467ZM7.125 16.2461C8.36764 16.2461 9.375 15.2388 9.375 13.9961C9.375 12.7534 8.36764 11.7461 7.125 11.7461C5.88236 11.7461 4.875 12.7534 4.875 13.9961C4.875 15.2388 5.88236 16.2461 7.125 16.2461ZM19.5 9.49609C20.7427 9.49609 21.75 8.48874 21.75 7.24609C21.75 6.00345 20.7427 4.99609 19.5 4.99609C18.2573 4.99609 17.25 6.00345 17.25 7.24609C17.25 8.48874 18.2573 9.49609 19.5 9.49609ZM19.5 22.9961C20.7427 22.9961 21.75 21.9888 21.75 20.7461C21.75 19.5034 20.7427 18.4961 19.5 18.4961C18.2573 18.4961 17.25 19.5034 17.25 20.7461C17.25 21.9888 18.2573 22.9961 19.5 22.9961Z"
                                            fill="white" />
                                    </svg></a>
                            </div>
                            <ul>
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                            </ul>
                        </div>
                        <div class="space20"></div>
                        <div class="textarea">
                            <a href="#">Daniel Williams</a>
                            <div class="space12"></div>
                            <p>Services Manager</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===== TEAM AREA ENDS =======-->
    <div class="space30"></div>
    <!--===== TESTIMONIAL AREA STARTS =======-->
    <div class="testimonials-2 container-home1">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 m-auto">
                    <div class="heading1 text-center space-margin60">
                        <h5>Testimonials</h5>
                        <div class="space16"></div>
                        <h2 class="text-anime-style-3">What Our Client Say About Housa</h2>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-xl-6 col-md-12 left _relative">
                    <div class="swiper swiper-testimonial-2">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testimonials-box-2">
                                    <div class="content-area">
                                        <img src="assets/img/icons/quito1.svg" alt="housa">
                                        <div class="space16"></div>
                                        <p class="text">
                                            "Housa made our home-buying process so smooth! Their agents were knowledgeable
                                            and supportive at every step. We couldn’t be happier with our new home!"
                                        </p>
                                    </div>
                                    <div class="bottom">
                                        <div class="info">
                                            <img src="assets/img/all-images/testimonial/testimonial-img9.png"
                                                alt="housa">
                                            <div class="content">
                                                <h6 class="name"><a href="#">Sheldon Jackson</a></h6>
                                                <p class="position">Shop Store Owner</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonials-box-2">
                                    <div class="content-area">
                                        <img src="assets/img/icons/quito1.svg" alt="housa">
                                        <div class="space16"></div>
                                        <p class="text">
                                            "Housa made our home-buying process so smooth! Their agents were knowledgeable
                                            and supportive at every step. We couldn’t be happier with our new home!"
                                        </p>
                                    </div>
                                    <div class="bottom">
                                        <div class="info">
                                            <img src="assets/img/all-images/testimonial/testimonial-img10.png"
                                                alt="housa">
                                            <div class="content">
                                                <h6 class="name"><a href="#">Alex Garcia</a></h6>
                                                <p class="position">Shop Store Owner</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonials-box-2">
                                    <div class="content-area">
                                        <img src="assets/img/icons/quito1.svg" alt="housa">
                                        <div class="space16"></div>
                                        <p class="text">
                                            "Housa made our home-buying process so smooth! Their agents were knowledgeable
                                            and supportive at every step. We couldn’t be happier with our new home!"
                                        </p>
                                    </div>
                                    <div class="bottom">
                                        <div class="info">
                                            <img src="assets/img/all-images/testimonial/testimonial-img11.png"
                                                alt="housa">
                                            <div class="content">
                                                <h6 class="name"><a href="#">Hector Fort</a></h6>
                                                <p class="position">Shop Store Owner</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonials-box-2">
                                    <div class="content-area">
                                        <img src="assets/img/icons/quito1.svg" alt="housa">
                                        <div class="space16"></div>
                                        <p class="text">
                                            "Housa made our home-buying process so smooth! Their agents were knowledgeable
                                            and supportive at every step. We couldn’t be happier with our new home!"
                                        </p>
                                    </div>
                                    <div class="bottom">
                                        <div class="info">
                                            <img src="assets/img/all-images/testimonial/testimonial-img12.png"
                                                alt="housa">
                                            <div class="content">
                                                <h6 class="name"><a href="#">Inaki Pena</a></h6>
                                                <p class="position">Shop Store Owner</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonials-box-2">
                                    <div class="content-area">
                                        <img src="assets/img/icons/quito1.svg" alt="housa">
                                        <div class="space16"></div>
                                        <p class="text">
                                            "Housa made our home-buying process so smooth! Their agents were knowledgeable
                                            and supportive at every step. We couldn’t be happier with our new home!"
                                        </p>
                                    </div>
                                    <div class="bottom">
                                        <div class="info">
                                            <img src="assets/img/all-images/testimonial/testimonial-img13.png"
                                                alt="housa">
                                            <div class="content">
                                                <h6 class="name"><a href="#">Raphinha Dias</a></h6>
                                                <p class="position">Shop Store Owner</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonials-box-2">
                                    <div class="content-area">
                                        <img src="assets/img/icons/quito1.svg" alt="housa">
                                        <div class="space16"></div>
                                        <p class="text">
                                            "Housa made our home-buying process so smooth! Their agents were knowledgeable
                                            and supportive at every step. We couldn’t be happier with our new home!"
                                        </p>
                                    </div>
                                    <div class="bottom">
                                        <div class="info">
                                            <img src="assets/img/all-images/testimonial/testimonial-img14.png"
                                                alt="housa">
                                            <div class="content">
                                                <h6 class="name"><a href="#">Marc Casado</a></h6>
                                                <p class="position">Shop Store Owner</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pagination-buttons">
                        <div class="swiper-button-next">
                            <button><i class="fa-solid fa-angle-left"></i></button>
                        </div>
                        <div class="swiper-button-prev">
                            <button><i class="fa-solid fa-angle-right"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-md-12">
                    <div class="map-testimonial">
                        <img class="map" src="assets/img/all-images/bg/map-bg.png" alt="housa">
                        <div class="swiper swiper-thumb2">
                            <div class="swiper-wrapper list-img">
                                <div class="swiper-slide">
                                    <div>
                                        <img src="assets/img/all-images/testimonial/testimonial-img9.png"
                                            alt="housa">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div><img src="assets/img/all-images/testimonial/testimonial-img10.png"
                                            alt="housa"></div>
                                </div>
                                <div class="swiper-slide">
                                    <div><img src="assets/img/all-images/testimonial/testimonial-img11.png"
                                            alt="housa"></div>
                                </div>
                                <div class="swiper-slide">
                                    <div><img src="assets/img/all-images/testimonial/testimonial-img12.png"
                                            alt="housa"></div>
                                </div>
                                <div class="swiper-slide">
                                    <div><img src="assets/img/all-images/testimonial/testimonial-img13.png"
                                            alt="housa"></div>
                                </div>
                                <div class="swiper-slide">
                                    <div><img src="assets/img/all-images/testimonial/testimonial-img14.png"
                                            alt="housa"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--===== TESTIMONIAL AREA ENDS =======-->
    <div class="space30"></div>
@endsection
