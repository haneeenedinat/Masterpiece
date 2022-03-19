


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

         @error('cloth_name')
        <div class="error">{{ $message }}</div>
        @enderror 
    
        <input  type="text" name="cloth_description" placeholder="Cloth description" id ="cloth_description"  required />
        <p class="Msg2"></p>
      
        @error('cloth_description')
        <div class="error">{{ $message }}</div>
        @enderror 

        <input  type="file" placeholder="Cloth Image" name="cloth_img" id="cloth_img" required/>
        <p class="Msg3"></p>
     
        @error('cloth_img')
        <div class="error">{{ $message }}</div>
        @enderror 

        <input  type="text" placeholder="Cloth Size : S,L,M,XL Or 36,38,40" name="size" id ="size" required/>
        <p class="Msg4"></p>

        @error('size')
        <div class="error">{{ $message }}</div>
        @enderror 
       
        <select   name="categorie_id" id ="categorie_id"  required>  
              <option selected value="None">select category name</option>
             @foreach($Categories as $Category)                                     
            <option value="{{$Category->id}}">{{$Category->categorie_name}}</option>
           @endforeach
          </select>
          <p class="Msg5"></p>
          <button type="submit" class="submit" >Add Cloth</button>
          </form>
        </div>
      </div>
    </div>

   
   
    <script src='js2/Donate.js'></script>
@endsection
 </body>

</html>