@extends('layouts.footer')
@extends('layouts.header')
@section('content')

<div class="ProductContainer">
<h2 class="titleProducts"> Clothes</h2>
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



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
@endsection
 </body>
</html>