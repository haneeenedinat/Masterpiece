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
            <!-- <input type="text" placeholder="Your Name"  required/>
            <input type="email" placeholder="you@example.com" required/>
            <input type="text" placeholder="0777777777" required/> -->
            <textarea  placeholder="Tell us" name="Message" required></textarea>
            <button type="submit">Send</button>
          </form>
        </div>
      </div>
    </div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
@endsection
 </body>

</html>