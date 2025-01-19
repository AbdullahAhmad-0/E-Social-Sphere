<div class="cmn-padding">
    @if (isset($cmn))
        @foreach ($cmn as $c)
            @if ($heading === basename($c['heading']))
                <h2 class="heading-common">{{ $heading }}</h2>
                {!! $c['details'] !!}
            @endif
        @endforeach

    @elseif (isset($services))
        @php
            $currentUrl = basename(request()->url());
        @endphp

        @foreach ($services as $service)
            @if ($currentUrl === basename($service['url']))
                <h2 class="heading-common">{{ $service['heading'] }}</h2>
                {!! $service['details'] !!}
            @endif
        @endforeach
    @endif
</div>
