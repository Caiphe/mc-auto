@vite(['resources/less/components/vehicle.css'])

<a class="single-vehicle" href="{{ route('vehicle.show') }}">
    <div class="primary-banner">
        <div class="vehicle-banner" style="background-image: url('{{ asset('/images/services.jpg') }}')"></div>
    </div>
    <div class="top-details">
        <span>@svg('gear') Manual</span>
        <span>60000 km</span>
    </div>
    <div class="vehicle-model-make">
        Lexus GS 4000h
    </div>
    <div class="vehicle-price">R6.000.000</div>
</a>