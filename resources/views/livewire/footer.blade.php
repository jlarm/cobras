<div>
    @foreach($links as $link)
        <a target="_blank" href="{{ $link['url'] }}">{{ $link['platform'] }}</a>
    @endforeach
</div>
