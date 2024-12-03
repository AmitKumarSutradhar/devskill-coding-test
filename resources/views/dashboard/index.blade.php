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
<body>
<section class="min-vh-100">
    <div class="container h-100">
        <div class="d-flex justify-content-center align-items-center h-100">

            <form action="{{ route('user.create') }}" method="POST" class="mt-5 shadow">
                @csrf
                <div class="p-4">
                    <h2 class="mb-3">Create New User</h2>
                    <div class="mb-3">
                        <input type="text" name="username" class="form-control"  id="exampleInputEmail1" placeholder="Username" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <input type="text" name="name" class="form-control"  id="exampleInputEmail1" placeholder="Name" aria-describedby="emailHelp">
                    </div>

                    <div class="mb-3">
                        <input type="email" name="email" class="form-control"  id="exampleInputEmail1" placeholder="Email" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="password">
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary w-100">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>

<script src="{{ asset('/assets/vendor/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
