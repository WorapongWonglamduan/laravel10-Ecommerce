<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel10 Ecommerce</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>


<body>
    @include('admin.message')
    <div class="d-flex justify-content-center">
        <h1 class="text-center">LOGIN</h1>
    </div>
    <form action="{{ route('admin.authenticate') }}" method="post"{{--  enctype="multipart/form-data" --}}>
        @csrf
        <div class="row  p-5">
            <div class="col-md-12 mb-3">
                <div class="form-group">
                    <strong>Email</strong>
                    <input type="email" name="email" id='email'
                        class="form-control @error('email') is-invalid @enderror" placeholder="Email"
                        value={{ old('email') }}>

                </div>
                @error('email')
                    <p class="invalid-feedback">{{ $message }}</p>
                @enderror
            </div>
            <div class="col-md-12 mb-3">
                <div class="form-group">
                    <strong>Password</strong>
                    <input type="password" name="password" id='password'
                        class="form-control @error('password') is-invalid @enderror" placeholder="Password">

                </div>
                @error('password')
                    <p class="invalid-feedback">{{ $message }}</p>
                @enderror
            </div>

            <div class="col-md-12 mb-3"> <button type="submit" class="btn btn-primary">Login</button></div>

        </div>

    </form>
</body>

</html>
