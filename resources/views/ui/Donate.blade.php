


@extends('layouts.footer')
@extends('layouts.header')
@section('content')
<div  class="DonorsContainer">
      <h3>Donors Form</h3>

      <form >
        <div class="form-group">
          <label for="add_product">Product Name</label>
          <input
            class="form-control"
            type="text"
            name="product_name"
            required/>
        </div>
        <!-- <p>{MessageProductName}</p> -->
        <div class="form-group">
          <label for="add_product">Product description</label>
          <input class="form-control" type="text" name="product_description" required />
        </div>
         <!-- <p>{MessageProductDescription}</p> -->
         <div class="form-group">
          <label for="add_product">Product Image</label>
          <input class="form-control" type="file" name="product_img" required />
        </div>
        <div class="form-group">
          <label for="add_product">Category Title</label>
          <select name="category_id" id="" class="form-control" required>
            <option value="">Category Title</option>
            <option value="trouser">trouser</option>
            <option value="Shirt"> Shirt</option>
            <option value="blouse"> blouse</option>
          </select>
        </div>
        <!-- <p>{MessageSelectCategory}</p> -->
        <div class="form-group">
          <input
            class="btn btn-primary"
            type="submit"
            name="add_product_submit"
            value="Donors"
          />
        </div>
        </form>
        </div>

    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
@endsection
 </body>

</html>