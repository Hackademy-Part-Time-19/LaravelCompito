<x-layout>
     <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h1>anime di genere:</h1>
                <ul>

                   
                    @foreach ($anime as $animee)
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{$animee['images']['jpg']['image_url']}}" alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">{{$animee['title']}}</h5>
                          <p class="card-text">{{Str::limit($animee['synopsis'],100)}}</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                      </div>
                    @endforeach
                </ul>
            </div>
        </div>
     </div>

</x-layout>

{{-- <x-card :anime="$anime" >

</x-card> --}}