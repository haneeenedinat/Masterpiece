<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Register - SB Admin</title>
        <link href="{{asset('css2/styles.css')}}" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body >

            
            @section('content')
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Create cloth</h3></div>
                                    <div class="card-body">
                                        <form method="post" action="{{route('cloth.store')}}" enctype="multipart/form-data">
                                        @csrf
                                            <div class="row mb-3">
                                                <!-- <div class="col-md-6"> -->
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputFirstName" type="text" placeholder="Enter cloth name" name="cloth_name" required style="margin:0.5em 0;padding:1em"/>
                                                        <label for="inputFirstName"  style="margin:0 0.7em 0 1.5em ">name</label>
                                                    </div>
                                                <!-- </div> -->
                                                <!-- <div class="col-md-6"> -->
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <!-- <input class="form-control" id="inputPasswordConfirm" type="text" placeholder="image" name="cloth_img" required/> -->
                                                        <input class="form-control" id="inputPasswordConfirm" type="file" placeholder="image" name="cloth_img" required/>


                                                        <label for="inputPasswordConfirm" style="margin-left:1em">image</label>
                                                    </div>
                                                <!-- </div> -->
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" type="text" placeholder="Enter description" name="cloth_description" required />
                                                <label for="inputEmail">description</label>
                                            </div>
                                            <!-- <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" type="text" name="user_id" value='1' disabled/>
                                                <label for="inputEmail">user name</label>
                                            </div> -->
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" type="text" name="size"  placeholder="Enter size such as :S,L,M,XL or ,36,38,40" required/>
                                                <label for="inputEmail"> Size Such As :S,L,M,XL Or ,36,38,40</label>
                                            </div>
                                            <div class="row mb-3">
                                           
                                                <!-- <div class="col-md-6"> -->
                                                    <div class="form-floating mb-3 mb-md-0">
                                                       
                                                         <select class="form-select" aria-label="Default select example" name="categorie_id" required>
                                                         
                                                       <option selected>select category name</option>
                                                       @foreach($Categories as $Category)
                                                  
                                                        <option value="{{$Category->id}}">{{$Category->categorie_name}}</option>
                                                        @endforeach
                                                          </select>
                                                    </div>
                                                <!-- </div> -->
                                             
                                              
                                            </div>
                                            <div class="mt-4 mb-0">
                                                <div class="d-grid"><button type="submit">Create cloth</button></div>
                                            </div>
                                        </form>
                                    </div>
                                    <!-- <div class="card-footer text-center py-3">
                                        <div class="small"><a href="login.html">Have an account? Go to login</a></div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2021</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('js2/scripts.js')}}"></script>

    </body>
</html>
