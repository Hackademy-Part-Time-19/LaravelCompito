<x-layout>
{{--     <div class="container">
       <div class="row">
           <div class="col-lg-6">
               <h1>Lista generi Manga</h1>
               <ul>
                   
                   @foreach ($dati as $manga)
                   <li> <a href="{{route('genre.manga',['genre_id'=>$manga['mal_id']])}}">{{$manga['name']}}</a>
                     
                   </li>
                   @endforeach
               </ul>
           </div>
       </div>
    </div>
   </x-layout> --}}