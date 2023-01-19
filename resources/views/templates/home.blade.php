@extends('layouts.base')
@vite(['resources/less/home.css', 'resources/less/aos.css', 'resources/js/custom.js'])

@section('body-class', 'layout-home')

@section('content')
<div class="main-banner">
    <div class="each-banner" >
        <div class="banner-image-contaienr bg-cover" style="background-image:url('{{ asset('/images/banners/banner-2.jpg') }}')"></div>
        <div class="do-you-want">
            <div class="text-content animated4">
                <span class="orange-text">DO YOU </span> <br />
                <span class="white-text">WANT / NEED</span>
                <span class="white-text">TO BUY </span><span class="orange-text">A CAR</span>
            </div>
            
        </div>
        <div class="bottom-bar"></div>
    </div>

    <div class="search-form-block animated">
        <form >
            <div class="form-content">
                <select class="form-field">
                    <option>Select Make</option>
                    <option value="audi">Audi</option>
                    <option value="BMW">BMW</option>
                    <option value="Chevrolet">Chevrolet</option>
                </select>

                <select class="form-field">
                    <option>Select Model</option>
                </select>

                <select class="form-field">
                    <option>Select Year</option>
                    <option value="2000">2000</option>
                    <option value="2001">2001</option>
                    <option value="2002">2002</option>
                    <option value="2003">2003</option>
                    <option value="2004">2004</option>
                    <option value="2005">2005</option>
                    <option value="2006">2006</option>
                    <option value="2007">2007</option>
                </select>

                <select class="form-field">
                    <option>Min Price</option>
                </select>

                <select class="form-field">
                    <option>Max Price</option>
                </select>
               
                <button class="form-field search-btn">Search</button>
            </div>
        </form>
        <div class="user-our-smart-search"></div>
    </div>
</div>

<div class="welcome-content" >
    <h2 class="welcome-heading" data-aos="fade-up" data-aos-duration="1000">WELCOME TO <br /><span class="orange-text">MC-CARS</span></h2>
    <div data-aos="fade-up" data-aos-duration="1000">
        <p>
            Whether you're looking for a new or used hatchback, crossover, SUV, people-mover or bakkie, 
            mc-cars.co.za lists tens of thousands of vehicles for sale that are stocked by hundreds of reputable dealers across South Africa, as well as those that are advertised by private sellers. What's more, in our Car Specials section we list dozens of special deals offered by franchised dealers countrywide.
        </p>
        <p>
            Lists tens of thousands of vehicles for sale that are stocked by hundreds of reputable dealers across South Africa, as well as those that are advertised by private sellers.
        </p>
    </div>
   
</div>

<div class="services-container">
    <div class="each-service-block">
        <div class="each-service" data-aos="zoom-in" data-aos-duration="600" data-aos-offset="50">
            <div class="inner-content">
                @svg('car')
                <h4>ALL BRANDS</h4>
                <p>Galley simply dummy text lorem Ipsum is of the printin k a of type and</p>
            </div>
        </div>

        <div class="each-service" data-aos="zoom-in" data-aos-duration="900" data-aos-offset="50">
            <div class="inner-content">
                @svg('support')
                <h4>ALL BRANDS</h4>
                <p>Galley simply dummy text lorem Ipsum is of the printin k a of type and</p>
            </div>
        </div>

        <div class="each-service" data-aos="zoom-in" data-aos-duration="1200">
            <div class="inner-content">
                @svg('car')
                <h4>ALL BRANDS</h4>
                <p>Galley simply dummy text lorem Ipsum is of the printin k a of type and</p>
            </div>
        </div>

        <div class="each-service" data-aos="zoom-in" data-aos-duration="1400">
            <div class="inner-content">
                @svg('card')
                <h4>ALL BRANDS</h4>
                <p>Galley simply dummy text lorem Ipsum is of the printin k a of type and</p>
            </div>
        </div>
    </div>
    <div class="each-service-block" style="background-image: url('{{ asset('/images/services.jpg') }}')"></div>
</div>

<div class="featured-container">
    <h3 class="block-site-heading">FEATURED VEHICLES</h3>
    <div class="featured-listing-container">
        <div class="vehicle-makes-list">
            <ul>
                <li><a>ALL</a></li>
                <li><a>AUDI</a></li>
                <li><a>CHEVROLET</a></li>
                <li><a>HYUNDAI</a></li>
                <li><a>LEXUS</a></li>
                <li><a>MERCEDES</a></li>
                <li><a>TOYOTA</a></li>
            </ul>
        </div>
        <div class="vehicles-container">
           <x-vehicle />
           <x-vehicle />
           <x-vehicle />
           <x-vehicle />
           <x-vehicle />
           <x-vehicle />
           <x-vehicle />
           <x-vehicle />
        </div>
    </div>
</div>

<div class="sell-your-car bg-cover" style="background-image: url('{{ asset('/images/sell-car-bg.jpg') }}')">
    <div class="sell-car-block" data-aos="fade-right" data-aos-duration="600" data-aos-offset="100">
        <span class="white-text">Sell Your</span>
        <span class="orange-text">Car</span>
        <span class="white-text">easily</span>

        <a class="proceed-btn" href="#">PROCEED</a>
    </div>
    <img class="white-car" data-aos="fade-left" data-aos-offset="100" data-aos-duration="1000" alt="car" src="{{ asset('/images/white-car.png') }}" />

</div>

<div class="sold-cars-container">
    <h3 class="block-site-heading">LATEST SOLD</h3>

    <div class="sold-list">
        <x-sold />
        <x-sold />
        <x-sold />
    </div>
</div>

<div class="testimonials-container bg-cover" style="background-image:url('{{ asset('/images/banners/testimonials.jpg') }}')">
    <h3 class="block-site-heading">TESTIMONIALS</h3>

    <div class="testimonials-container-list">
        <div class="each-testimonial">
            <div class="testimonial-content">
                @svg('elem')
                <div class="testimonials-text">
                    All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.
                    All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary.
                </div>
            </div>

            <div class="user-details">
                <div class="user-profile"></div>
                <div class="user-name">Marc Caiphe</div>
            </div>

        </div>
    </div>
</div>



<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>

@endsection