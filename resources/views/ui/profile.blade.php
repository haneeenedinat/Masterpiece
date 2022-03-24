@extends('layouts.footer')
@extends('layouts.header')
@section('content')
<div class="Profile">
      <div class="ProfileTitle">
        <h2>personal information</h2>
      </div>

      <div class="ProfileImgInformation">
        <div class="ProfileInformation">
            <div>
          <div class="ProfileInformationUserName">
              <h3>personal information</h3>
              </div>
     <div class="formcontainer">
       <form method="POST" action="{{route('profile.profileupdate',Auth::user()->id)}}" class="profileForm">
       @csrf
       @method('PUT')
       <div class="group1">
      <input type="text" value="{{Auth::user()->name}}" name="name"/>
      <input type="text" value="{{Auth::user()->email}}" name="email" disabled/>
      </div>

      <div class="group4">
      @error('name')
        <div class="errorname">{{ $message }}</div>
        @enderror 
      </div>

      <div class="group2">
      <input type="text" value="{{Auth::user()->phone}}" name="phone"/>
      <input type="password" value="{{Auth::user()->password}}" name="password"  />
      </div>

      <div class="group5">
      @error('phone')
        <div class="errorname">{{ $message }}</div>
        @enderror 
        @error('password')
        <div class="errorname">{{ $message }}</div>
        @enderror 
  
      </div>

      <div class="group3">
      <button type="submit" class="submit">update information</button>
      </div>
      </form>
          </div>

          </div>

          <div class="SelectedServicesInformationProfile">
              <h2>Clothes information</h2>

        @if(!empty($profile))
         <div class="messageprofile">The representative will contact you on the day the items are received</div>
          @endif
              <table>
          <thead>
          <tr>
            <th>cloth_img</th>
            <th>cloth_name</th>
            <th>size</th>
            <th>Access time</th>
          </tr>
  
          @foreach($profile as $profileUser)
          <tr>
            <th><img src="../assets/img/{{$profileUser->cloth_img}}" alt="{{$profileUser->cloth_img}}"/></th>
            <th>{{$profileUser->cloth_name}}</th>
            <th>{{$profileUser->size}}</th>
            <th>{{$profileUser->Access_time}}</th>
          </tr>
          @endforeach
   
        </thead>
        </table>
          </div>
        </div>
      </div>
    </div>
    @endsection
 </body>
</html>