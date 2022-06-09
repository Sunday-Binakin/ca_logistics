<div class="widget bg-white widget_services">
    <h4 class="widget-title">Our services</h4>
    <ul>
        @foreach ($services as $s)
            <li><a href="#">{{ $s->title }}</a></li>
        @endforeach
        {{-- <li><a href="#">Lube, Oil and Filters</a></li>
        <li><a href="#">Belts and Hoses</a></li>
        <li><a href="#">Air Conditioning</a></li>
        <li><a href="#">Brake Repair</a></li>
        <li><a href="#">Auto Careion Auto Careion</a></li>
        <li><a href="#">Water Tank Auto Careion</a></li> --}}
    </ul>
</div>
