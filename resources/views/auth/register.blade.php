<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Register</title>
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('admin/img/favicons/smk.jpg')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('admin/img/favicons/smk.jpg')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('admin/img/favicons/smk.jpg')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('admin/img/favicons/smk.jpg')}}">
	<link rel="stylesheet" href="assets1/css/register.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="container-fluid">
    <div class="row no-gutter">
        <!-- The image half -->
        <div class="col-md-6 d-none d-md-flex bg-image"></div>


        <!-- The content half -->
        <div class="col-md-6 bg-light">
            <div class="login d-flex align-items-center py-5">

                <!-- Demo content-->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 col-xl-7 mx-auto">
                            @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
            
                            <h3 class="display-4">Register</h3>
                            <form action="/postregister" method="post">
								@csrf
                                <div class="form-group mb-3">
                                    <input id="inputEmail" value="{{ old('nik') }}" type="number" placeholder="NIK" name="nik" required="" autofocus="" class="form-control rounded-pill border-0 shadow-sm px-4">
                                </div>
								<div class="form-group mb-3">
                                    <input id="inputEmail" value="{{ old('username') }}" type="text" placeholder="Username" name="username" required="" autofocus="" class="form-control rounded-pill border-0 shadow-sm px-4">
                                </div>
								<div class="form-group mb-3">
                                    <input id="inputEmail" value="{{ old('email') }}" type="email" placeholder="Email" name="email" required="" autofocus="" class="form-control rounded-pill border-0 shadow-sm px-4">
                                </div>
                                <div class="form-group mb-3">
                                    <input id="inputPassword" type="password" placeholder="Password" name="password" required="" class="form-control rounded-pill border-0 shadow-sm px-4 text-primary">
                                </div>
                                <div class="custom-control custom-checkbox mb-3">
                                    <label for="customCheck1" class="custom-control-label">Sudah punya akun? <a href="/login">Masuk</a></label>
                                </div>
                                <button type="submit" class="btn btn-primary btn-block text-uppercase mb-2 rounded-pill shadow-sm">Daftar</button>
                            </form>
                        </div>
                    </div>
                </div><!-- End --> 

            </div>
        </div><!-- End -->

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>

