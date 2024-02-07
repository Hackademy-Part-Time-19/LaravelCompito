<x-layout>
 <div class="container">
    <div class="row">
        <div class="col-lg-6">
            <h1>Lista generi anime</h1>
            <ul>
                
                @foreach ($dati as $anime)
                <li> <a href="{{route('by.genre',['genre_id'=>$anime['mal_id']])}}">{{$anime['name']}}</a>
                  
                </li>
                @endforeach
            </ul>
        </div>
    </div>
 </div>
</x-layout>