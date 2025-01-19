<style>
    .w-5 {display: none}
</style>

<div class="cmn-padding-stb">
    @foreach ($rev as $item)
        <div class="review">
            <img src="{{ asset('img/review.png') }}" alt="{{ $item['name'] }}">
            <div>
                @php
                    $rating = '';
                    for ($i = 0; $i < $item['rating']; $i++) {
                        $rating = $rating . '★';
                    }
                    $remaining = 5 - Str::length($rating);
                    for ($i = 0; $i < $remaining; $i++) {
                        $rating = $rating . '☆';
                    }
                @endphp
                <div class="stars">{{ $rating }}</div>
                <div class="name">{{ $item['name'] }}</div>
                <div class="details">{{ $item['message'] }}</div>
            </div>
        </div>
    @endforeach
    <div class="pagination">
        {{ $rev->links() }}
    </div>
</div>
