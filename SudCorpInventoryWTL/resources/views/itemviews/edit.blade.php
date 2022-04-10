<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SudCorp Inventory Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        
                            
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="m-0 font-weight-bold text-primary">SudCorp<sup>TM</sup></h1>
                                        <h3 class="h4 text-gray-900 mb-4">Edit Item</h3>
                                    </div>
                                    <form class="user" action="/edit/{{$item->id}}" method="post">
                                        @csrf
                                        @method("PUT")
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                name="iname" placeholder="Name" value="{{$item->iname}}">
                                                @error("iname")
                                                <p style="color:red">{{$errors->first("iname")}}</p>
                                                @enderror
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                name="price" placeholder="Price" value="{{$item->price}}">
                                                @error("price")
                                                <p style="color:red">{{$errors->first("price")}}</p>
                                                @enderror
                                        </div>
                                      
                                        <button class="btn btn-primary btn-user btn-block">
                                            Save
                                      </button>
                                </div>
                            
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>