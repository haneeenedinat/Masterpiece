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
    <body>

            
            @section('content')
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-8" >
                                <div class="card shadow-lg border-0 rounded-lg m-5">
                                    <div class="card-header"  ><h3 class="text-center font-weight-light my-4">Create User</h3></div>
                                    <div class="container">
                                        <form method="post" action="{{route('user.store')}}">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">name</label>
                                                <input type="text" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Enter name" required>
                                            </div>
                                            @if(!empty(Session::get('message')))
                                            <div class="alert alert-danger"> {{ Session::get('message') }}</div>
                                              @endif
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">email</label>
                                                <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" required>
                                            </div>
                                            
                                            <div class="mb-3">
                                                <label for="exampleFormControlTextarea1" class="form-label">password</label>
                                                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                                            </div>

                                            <div class="mb-3">   
                                            <label for="exampleFormControlTextarea1" class="form-label">Role</label>

                                            <select class="form-select" aria-label="Default select example" name="role" required>   
                                                       <option selected> Role</option>
                                                        <option value="admin" >Admin</option>
                                                        <option value="user">User</option>
                                          </select>
                                            </div>

                                            <div class="mb-3">
                                                <label for="exampleFormControlTextarea1" class="form-label">phone</label>
                                                <input type="text" name="phone" class="form-control" id="exampleInputPassword1" placeholder="phone" required>
                                            </div>
                                          
                                                  

                                            <input class="mb-5" type="submit" value="submit">
                                        </form>
                                        
                                        </div>
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
