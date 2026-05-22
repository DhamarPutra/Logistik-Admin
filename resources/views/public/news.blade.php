<!DOCTYPE html>
<html>

<head>
    <title>{{ Auth::check() ? Auth::user()->role . 'Page' : 'GuestPage' }}</title>
</head>

<body>
    <h1>Berita Terkini</h1>
    <div class="row">
        @foreach($news['articles'] as $article)
        <div class="col-md-4 mb-2">
            <div class="card h-100">
                @if(isset($article['urlToImage']))
                <img class="card-img-top" src="{{ $article['urlToImage'] }}" alt="Article Image">
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{ $article['title'] }}</h5>
                    <p class="card-text">{{ $article['description'] }}</p>
                    <a href="{{ $article['url'] }}" class="btn btn-primary" target="_blank">Read more</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</body>

</html>