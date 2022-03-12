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
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">edit cloth</h3></div>
                                    <div class="card-body">
                                        <form method="post" action="{{route('cloth.update',$cloth->id)}}" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputFirstName" type="text" placeholder="Enter cloth name" name="cloth_name" value="{{$cloth->cloth_name}}" required/>
                                                        <label for="inputFirstName">name</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputPasswordConfirm" type="file" placeholder="image" name="cloth_img" value="../assets/img/{{$cloth->cloth_img}}" required/>
                                                        <label for="inputPasswordConfirm"  style="padding-top: 0.5em;">image</label>
                                                    </div>
                                                </div>
                                              
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" type="text" placeholder="Enter description" name="cloth_description" value="{{$cloth->cloth_description}}" required />
                                                <label for="inputEmail">description</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                            <input class="form-control" id="inputEmail" type="text" name="size" value="{{$cloth->size}}" placeholder="Enter size such as :S,L,M,XL or ,36,38,40" required/>
                                                <label for="inputEmail"> Size Such As :S,L,M,XL Or ,36,38,40</label>
                                            </div>

                                                <div class="row mb-3">
                                                <div class="col-md-6">
                                                <select style="height:8vh" class="form-select" aria-label="Default select example" name="categorie_id" required>
                                                         
                                                         <option selected>select category name</option>
                                                         @foreach($Categories as $Category)
                                                    
                                                          <option value="{{$Category->id}}" 
                                                          @if($cloth->categorie_id == $Category->id)
                                                            selected
                                                          @endif
                                                          >{{$Category->categorie_name}}</option>
                                                          @endforeach
                                                            </select>
                                                </div>
                                                <div class="col-md-6">
                                                <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputPasswordConfirm" type="text" placeholder="image" name="available" value="{{$cloth->available}}" required/>
                                                        <label for="inputPasswordConfirm">available</label>
                                                    </div>
                                                </div>
                                              
                                            <!-- </div> -->
                                                
                                            </div>
                                            <div class="mt-4 mb-0">
                                                <div class="d-grid"><button type="submit">Edit cloth</button></div>
                                            </div>
                                        </form>
                                    </div>
 
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js2/scripts.js"></script>
    </body>
</html>
