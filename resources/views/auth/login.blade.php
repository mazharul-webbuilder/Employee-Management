<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{asset('/')}}assets/front/css/bootstrap.css">
</head>
<body>

    <section class="">
        <div class="container ">
            <div class="row">
                <div class="col-md-6 mx-auto col-sm-12 ">
                    <div class="card shadow" style="margin-top: 25%;">
                        <div class="card-header">
                            <h3 class="text-center text-secondary">Spark Admin Login</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{route('login')}}" method="POST">
                                @csrf
                                <div class="row mb-4">
                                    <div class="col-md-3">
                                        <label for="email" class="form-label">Email</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="email" name="email" id="email" class="form-control">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-md-3">
                                        <label for="password" class="form-label">Password</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="password" name="password" class="form-control" id="password">
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-9">
                                        <input type="submit" class="btn btn-success">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




<script src="{{asset('/')}}assets/front/js/jquery-3.6.0.js"></script>
<script src="{{asset('/')}}assets/front/js/bootstrap.js"></script>
</body>
</html>
