<div class="bs-row">
    <div class="bs-col-6">
        <div class="bs-row">
            <div class="bs-col-3">Status:</div>
            <div class="bs-col-9">{{ $trip->getMessage() }}</div>
        </div>
        <div class="bs-row">
            <div class="bs-col-3">Vertrek datum:</div>
            <div class="bs-col-9">{{ $trip->getDepartureDate()->format('d-m-Y') }}</div>
        </div>
        <div class="bs-row">
            <div class="bs-col-3">Terug datum:</div>
            <div class="bs-col-9">{{ $trip->getArrivalDate()->format('d-m-Y') }}</div>
        </div>
    </div>
    <div class="bs-col-6">
        <div class="bs-row">
            <div class="bs-col-3">Locatie:</div>
            <div class="bs-col-9">{{ $trip->getCurrentLocation()->getLocation() }}</div>
        </div>
        <div class="bs-row">
            <div class="bs-col-3">Vertrek Locatie:</div>
            <div class="bs-col-9">{{ $trip->getDepartureLocation()->getLocation() }}</div>
        </div>
    </div>
</div>
<div class="bs-row bs-mt-2">
    <div class="bs-col-12">
        <div id="map" style="height: 40vh;"
             data-d-lat="{{ $trip->getDepartureLocation()->getLat() }}"
             data-d-lng="{{ $trip->getDepartureLocation()->getLng() }}"
             data-c-lat="{{ $trip->getCurrentLocation()->getLat() }}"
             data-c-lng="{{ $trip->getCurrentLocation()->getLng() }}"
         ></div>
    </div>
</div>

