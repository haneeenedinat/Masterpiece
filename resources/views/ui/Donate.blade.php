


@extends('layouts.footer')
@extends('layouts.header')
@section('content')

     <div class="Donate">
      <div class="Donateh2">
        <h2>Donors Form</h2>
      </div>
    
      <div class="DonateImgForm">
        <div>
          <img src="../assets/img/cartempty.png" alt="ContactUs Img" />
        </div>
        <div class="DonateForm">
        <form method="post" action="{{route('storeDonate.uistoreDonate')}}" enctype="multipart/form-data">
        @csrf
        <input  type="text"  name="cloth_name" placeholder="Cloth Name" id="cloth_name" required/>
        <p class="Msg1"></p>
        <input  type="text" name="cloth_description" placeholder="Cloth description" id ="cloth_description"  required />
      
        <input  type="file" placeholder="Cloth Image" name="cloth_img" required/>

        <input  type="text" placeholder="Cloth Size : S,L,M,XL Or 36,38,40" name="size" id ="size"  required />
        <select   name="categorie_id" id ="categorie_id"  required>                                        
              <option selected>select category name</option>
             @foreach($Categories as $Category)                                     
            <option value="{{$Category->id}}">{{$Category->categorie_name}}</option>
           @endforeach
          </select>
          <button type="submit" >Add Cloth</button>
          </form>
        </div>
      </div>
    </div>


  
    <script src='js2/Donate.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
@endsection
 </body>

</html>