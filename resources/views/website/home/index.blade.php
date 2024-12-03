<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('/assets/vendor/css/bootstrap.min.css') }}">
</head>
<body style="background-color: #F6F7FC;">
<section class="min-vh-100">
    <div class="container h-100">
        <div class="d-flex justify-content-center align-items-center h-100">
            <p class="text-primary">{{ session('message') }}</p>

            <form action="{{ route('login') }}" method="POST" class="mt-5 shadow">
                @csrf
                <div class="">
                    <img src="{{ asset('/assets/images/login.jpg') }}" class="img-fluid w-100" style="height: 200px;" alt="login cover image">
                </div>
                <div class="p-4 bg-white">
                    <h2 class="display-6">Sign In</h2>
                    <div class="mb-3">
                        <input type="text" name="username" class="form-control"  id="exampleInputEmail1" placeholder="Username" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="password">
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary w-100">Submit</button>
                    </div>

                    <div class="d-flex justify-content-between">
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="" for="exampleCheck1">Remember Me</label>
                        </div>
                        <div class="mb-3 ">
                            <label class="" for="exampleCheck1">Forgot Password</label>
                        </div>
                    </div>
                    <div class="mb-3 text-center">
                        <p>Not a member? Sign up</p>
                    </div>

                </div>
            </form>
        </div>
    </div>
</section>

<script src="{{ asset('/assets/vendor/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
