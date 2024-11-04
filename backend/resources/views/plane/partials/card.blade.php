<div class="col-12 col-md-6 col-lg-3 mb-2 d-flex align-items-stretch">
    <div class="card">
        <img src="{{asset("images/" . strtolower($plane["family"]) . ".jpg")}}" class="card-img-top" alt="">
        <div class="card-body d-flex flex-column justify-content-evenly">
            <h5 class="card-title">{{$plane["manufacturer"]}} {{$plane["family"]}}</h5>
            <ul>
                <li>@if($plane["type"] == "wide_body") {{ "Szélestörzsű" }} @elseif($plane["type"] == "narrow_body") {{"Keskenytörzsű"}} @endif</li>
                <li>Első felszállás: {{$plane["first_flight"]}} </li>
                <li>Hajtóművek száma: {{$plane["engines"]}}</li>
                <li>Maximum ülések száma: {{$plane["seats"]}} ülés</li>
            </ul>
            <a href="{{route("planes.show", ["id" => $plane["id"]])}}" class="btn btn-primary">További információk</a>
        </div>
    </div>
</div>