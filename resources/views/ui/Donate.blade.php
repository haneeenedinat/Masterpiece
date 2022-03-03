


@extends('layouts.footer')
@extends('layouts.header')
@section('content')
<div  class="DonorsContainer">
      <h3>Donors Form</h3>

      <form method="post" action="{{route('storeDonate.uistoreDonate')}}" >
      @csrf
        <div class="form-group">
          <label for="add_product">Cloth Name</label>
          <input class="form-control" type="text"  name="cloth_name" id ="cloth_name" required/>
          <p class="Msg1"></p>
        </div>
        <!-- <p>{MessageProductName}</p> -->
        <div class="form-group">
          <label for="add_product">Cloth description</label>
          <input class="form-control" type="text" name="cloth_description" id ="cloth_description"  required />
          <p class="Msg2"></p>

        </div>
         <!-- <p>{MessageProductDescription}</p> -->
         <div class="form-group">
          <label for="add_product">Cloth Image</label>
          <input class="form-control" type="file" name="cloth_img"  required />
        </div>
        <div class="form-group">
          <label for="add_product">Cloth Size</label>
          <input class="form-control" type="text" placeholder="S,L,M,XL Or 36,38,40" name="size" id ="size"  required />
          <p class="Msg2"></p>

        </div>
        <div class="form-group">
          <label for="add_product">Category Title</label>
        
          <select class="form-select" aria-label="Default select example" name="categorie_id" id ="categorie_id"  required>                                        
              <option selected>select category name</option>
             @foreach($Categories as $Category)                                     
            <option value="{{$Category->id}}">{{$Category->categorie_name}}</option>
           @endforeach
          </select>
        </div>
        <!-- <p>{MessageSelectCategory}</p> -->
        <div class="form-group">
          <input
            class="btn btn-primary"
            type="submit"
            id="submit"
            name="add_product_submit"
            value="Add Cloth"
            id='submit'
          />
        </div>
        </form>
        </div>
  
    <script src='js2/scripts.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
@endsection
 </body>

</html>