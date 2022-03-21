@extends('layouts.footer')
@extends('layouts.header')
@section('content')
<div class="ContactUs">
      <div class="ContactUsh2">
        <h2>how we can help you</h2>
      </div>

      <div class="ContactUsImgForm">
        <div>
          <img src="../assets/img/ContactUs2.png" alt="ContactUs Img" />
        </div>
    
        <div class="ContactUsForm">
          <form method="post" action="{{route('contact-us.store')}}" >
          @csrf
          @error('Message')
          <div class="errorMessage">{{ $message }}</div>
          @enderror 
          
          @if(!empty(Session::get('message')))
         <div class="message"> {{ Session::get('message') }}</div>
          @endif

            <textarea  placeholder="Tell us" name="Message" ></textarea>
      
            <button type="submit">Send</button>
          </form>
        </div>
      </div>
    </div>
@endsection
 </body>

</html>