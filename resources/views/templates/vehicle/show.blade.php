@extends('layouts.base')
@vite(['resources/less/templates/vehicle/show.css'])

@section('body-class', 'layout-show-vehicle')
@section('content')
<div class="main-layout">
    <div class="internal-banner" style="background-image:url('{{ asset('/images/banners/inner-banner.jpg') }}')">
        <h4 class="internal-page-title">RESULT PAGE</h4>
    </div>

    <div class="result-primary-block">
        <div class="vehicle-headings">
            <h4 class="vehicle-name">2011 BMW 3 Series 320i for sale  in KwaZulu Natal</h4>
            <h4 class="vehicle-price">R300 0000</h4>
        </div>

        <div class="images-details">
            <div class="images-section">
                <div class="main-image bg-cover" style="background-image:url('{{ asset('/images/car.jpg') }}')"></div>

                <div class="bottom-image-container">
                    <div class="small-image bg-cover" style="background-image:url('{{ asset('/images/car.jpg') }}')"></div>
                    <div class="small-image bg-cover" style="background-image:url('{{ asset('/images/car.jpg') }}')"></div>
                    <div class="small-image bg-cover" style="background-image:url('{{ asset('/images/car.jpg') }}')"></div>
                    <div class="small-image bg-cover" style="background-image:url('{{ asset('/images/car.jpg') }}')"></div>
                </div>
            </div>

            <div class="details-section">
                <h4 class="vehicle-details-heading">Details</h4>

                <div class="vehicle-content">
                    <div class="left-content">

                        <div class="each-content">
                            <span class="name">Mileage</span>
                            <span class="data">1200</span>
                        </div>

                        <div class="each-content">
                            <span class="name">Transmission</span>
                            <span class="data">Auto</span>
                        </div>

                        <div class="each-content">
                            <span class="name">Fuel Type</span>
                            <span class="data">Petrol</span>
                        </div>

                        <div class="each-content">
                            <span class="name">Mileage</span>
                            <span class="data">1200</span>
                        </div>

                        <div class="each-content">
                            <span class="name">Status</span>
                            <span class="data">Used</span>
                        </div>

                    </div>
                    <div class="right-content">

                        <div class="each-content">
                            <span class="name">Year</span>
                            <span class="data">2018</span>
                        </div>

                        <div class="each-content">
                            <span class="name">Colour</span>
                            <span class="data">Black</span>
                        </div>

                        <div class="each-content">
                            <span class="name">Condition</span>
                            <span class="data">Excelent</span>
                        </div>

                        <div class="each-content">
                            <span class="name">Doors</span>
                            <span class="data">5</span>
                        </div>

                        <div class="each-content">
                            <span class="name">Area</span>
                            <span class="data">Durban</span>
                        </div>

                    </div>

                </div>

                <h4 class="vehicle-details-heading pt-30">Description</h4>
                <div class="description-data">
                    Automatic320i Motor Sport in excellent condition with Service history. Full House including Sunroof, Leather seats, Park Assist, Aircon, Power steering, Airbags, Radio, Cd Payer, Electric Windows, Central Locking, Multi Function Steering Wheel, Alloy Wheels Fog Lamps. Finance available. No Deposit Required.
                </div>

            </div>
        </div>
    </div>

    <div class="contact-dealer">
        <form class="dealer-form-container">
            <h4 class="contact-delear-head">CONTACT DEALER</h4>

            <div class="each-field">
                <label>Full Name</label> 
                <input type="text" class="input-field" name="full-name" />
            </div>
            <div class="each-field">
                <label>Email address</label> 
                <input type="email" class="input-field" name="email" />
            </div>
            <div class="each-field">
                <label>Mobile Number</label> 
                <input type="text" class="input-field"name="mobile-number" />
            </div>
            <div class="each-field">
                <label>Area</label> 
                <input type="text" class="input-field" name="area" />
            </div>
            
            <div class="each-field">
                <label>Message</label>
                <textarea class='input-field text-area' name="message"></textarea>
            </div>

            <button class="primary-buttons" type="submit">SEND</button>



        </form>

        <div class="contact-dealer-bg bg-cover" style="background-image:url('{{ asset('/images/contact-dealer.jpg') }}')"></div>

    </div>

    <div class="sold-cars-container">
        <h3 class="block-site-heading">SOME SUGGESTIONS</h3>
    
        <div class="sold-list">
            <x-sold />
            <x-sold />
            <x-sold />
        </div>
    </div>


</div>
@endsection
