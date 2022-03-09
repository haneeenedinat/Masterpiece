@extends('layouts.footer')
@extends('layouts.header')
@section('content')
<div class="Profile">
      <div class="ProfileTitle">
        <h2>personal information</h2>
      </div>

      <div class="ProfileImgInformation">
      
      <!-- <div class="divImg">
          <img src="../assets/img/Profile.png" alt="Profile Img" />
          </div> -->

        <div class="ProfileInformation">
            <div>
          <div class="ProfileInformationUserName">
              <h3>personal information</h3>
            <h3>UserName : {{Auth::user()->name}}</h3>
          </div>

          <div class="ProfileInformationEmail">
            <h3>Email :{{Auth::user()->email}}</h3>
          </div>

          </div>

          <div class="SelectedServicesInformationProfile">
              <h2>Clothes information</h2>
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
            <!-- <div>TimeSelectedRender</div> -->
          </div>
        </div>
      </div>
    </div>
    @endsection
 </body>
</html>