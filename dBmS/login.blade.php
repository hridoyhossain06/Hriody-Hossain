<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />

    <title>
        Admin - Login
    </title>
</head>

<body class="bg-secondary-subtle" style="min-height: 100vh;">
    <main>
        <section class="bg-image"
            style="background-image: url('img/bg/photo-1540747913346-19e32dc3e97e.jpeg'); background-repeat: no-repeat; background-size: cover; background-position: center; width: 100%">
            <div class="container">
                <div class="row">
                    <div class="col-sm-9 col-md-7 col-lg-5 mx-auto my-5">
                        <div class="card border-0 shadow rounded-3 my-5">
                            <div class="card-body p-2 p-sm-4">
                                @if (session('success'))
                                    <div class="alert alert-success mt-3">
                                        {{ session('success') }}
                                    </div>
                                @endif
                                <h5 class="card-title text-center text-bold mb-3 fw-gradient fs-5">Admin Login</h5>
                                <form action="{{route('admin.login.submit')}}" method="post">
                                    @csrf
                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control" name="email" id="admin_email_login"
                                            placeholder="name@example.com" required>
                                        <label for="admin_email_login">Email address</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input type="password" class="form-control" name="password"
                                            id="admin_password_login" placeholder="Password" required>
                                        <label for="admin_password_login">Password</label>
                                    </div>

                                    <div class="form-check d-flex px-0 mb-2">
                                        <label class="show-password">
                                            <input type="checkbox" class="show-password-toggle"
                                                onclick="togglePasswordVisibility()">
                                            Show Password
                                        </label>
                                    </div>

                                    <div class="d-grid">
                                        <button class="btn btn-success btn-login text-initial fw-bold"
                                            type="submit">Log
                                            in</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <script>
        function togglePasswordVisibility() {
            const passwordInput = document.getElementById('admin_password_login');
            const isPasswordHidden = passwordInput.type === 'password';
            passwordInput.type = isPasswordHidden ? 'text' : 'password';
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
