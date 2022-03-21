@extends('layouts.footer')
@extends('layouts.header')
@section('content')

<div class="ProductContainer">
<h2 class="titleProducts"> Clothes</h2>

<div class="search">
<form method="GET" action="{{route('search.searchClothes')}}" class="searchForm" >
 <label>cloth name: </label>
<input type="text" name="cloth_name" value="" placeholder="trouser,shirt..."  id="search" required />
<label>size: </label>
<input type="text" name="size" value="" placeholder="S,L or 38,40" id="search" required/>
<button type="submit" >Search</button>
</form>
@if(!empty(Session::get('search')))
<div class="message"> {{ Session::get('search') }}</div>
@endif

</div>

<div class="main-containerProduct">
    @foreach($cloths as $cloth)
    @if( $cloth->available == 'yes')
      <div class="Card">
        <div class="image-containerCard">
          <img src="../assets/img/{{$cloth->cloth_img}}" alt="{{$cloth->cloth_img}}" />
        </div>
        <div class="information-containerCard">
         <div class="card-title">{{$cloth->cloth_name}}</div>
          <div class="card-brief-description">
            <p>{{$cloth->cloth_description}}</p>
            <p>Size : {{$cloth->size}}</p>
            <form method='post' action="{{route('addClothe.AddClotheToCart',$cloth->id)}}">
            @csrf
            @method('PUT')
            <button type="submit" class='icon'>Book</button>
            </form>
         
          </div>
          <div class="Categorie">Categorie Name : {{$cloth->categorie_name}}</div>
        </div>
      </div>
      @endif
      @endforeach
      </div>
      </div>
@endsection
 </body>
</html>