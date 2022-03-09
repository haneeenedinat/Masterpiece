
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Tables - SB Admin</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="{{asset('css2/styles.css')}}"  rel="stylesheet" />
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
      @extends('layouts.dashboard');
            
            @section('content')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4" style="margin-bottom:2%;">Clothes Table</h1>
                        <div class="card mb-4" style="border:none;">
                       <button  style="width:20%" class="create"><a class="dropdown-item" href="{{route('cloth.create')}}">Create cloth</a></button>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                    Cloth
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                        <th>User name</th>
                                            <th>Cloth name</th>
                                            <th>Cloth img</th>
                                            <th>Cloth description</th>
                                            <th>Categorie name</th>
                                            <th>Size</th>
                                            <th>available</th>
                                           <th>Edit</th> 
                                           <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th>User name</th>
                                        <th>Cloth name</th>
                                            <th>Cloth img</th>
                                            <th>Cloth description</th>
                                            <th>Categorie name</th>
                                            <th>Size</th>
                                            <th>available</th>
                                            <td>Edit</td>
                                            <td>Delete</td>
                                         


                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach($cloths as $cloth)
                                        <tr>
                                        <td width="200vw">{{$cloth->name}}</td>
                                            <td width="200vw">{{$cloth->cloth_name}}</td>   
                                            <td><img src="../assets/img/{{$cloth->cloth_img}}" alt="{{$cloth->cloth_name}}" width="300vw"/></td>
                                            <td width="200vw">{{$cloth->cloth_description}}</td>
                                            <td width="200vw">{{$cloth->categorie_name}}</td>
                                            <td width="200vw">{{$cloth->size}}</td>
                                            <td width="200vw">{{$cloth->available}}</td>
                                            <td><button class="edit"  style="background-color:green !important;color:white;border:none;padding:0.5rem;border-radius:3px"><a style="text-decoration:none; color:white" href="{{route('cloth.edit',$cloth->id)}}">edit</a></button></td>
                                          
                                            <td>
                                            <form method="POST" action="{{route('cloth.destroy',$cloth->id)}}">
                                             @csrf
                                             @method('delete')

                                          <button type="submit" class="delete" style="background-color:red !important;color:white;border:none;padding:0.5rem;border-radius:3px">delete</button>
                                       </form>
                                    </td>

                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
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
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="{{asset('js2/datatables-simple-demo.js')}}"></script>
        @endsection
    </body>
</html>
