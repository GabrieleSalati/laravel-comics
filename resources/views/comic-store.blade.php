@extends("layouts.app");

@section("title", "Home")

@section ("content")
<section>
    <div class="container">
        <div class="row">
            @forelse($comics as $comic)
            <div class="col-3">
                <div class="card">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $comic['title']}}</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            @empty
            <div>
                <h2>Not found</h2>
            </div>
            @endforelse
        </div>
    </div>
</section>
@endsection