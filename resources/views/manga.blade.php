<x-layout>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h1>manga:</h1>
                <ul>
                    @foreach ($manga as $mangaa)
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{$mangaa['images']['jpg']['image_url']}}" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">{{$mangaa['title_japanese']}}</h5>
                          <p class="card-text">{{Str::limit($mangaa['synopsis'],100)}}</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
                    @endforeach
                </ul>
            </div>
        </div>
     </div>
</x-layout>