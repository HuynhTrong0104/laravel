@extends('dashboard')

@section('content')
    <main class="login-form">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                        <h3 class="card-header text-center bg-primary text-white">Login</h3>
                        <div class="card-body">
                            <form method="POST" action="{{ route('user.authUser') }}" id="login-form">
                                @csrf
                                <div class="form-group mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="text" placeholder="Email" id="email" class="form-control" name="email" required autofocus>
                                    <div class="invalid-feedback">Please enter a valid email address.</div>
                                    @if ($errors->has('email'))
                                        <div class="invalid-feedback d-block">{{ $errors->first('email') }}</div>
                                    @endif
                                </div>

                                <div class="form-group mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
                                    <div class="invalid-feedback">Password is required.</div>
                                    @if ($errors->has('password'))
                                        <div class="invalid-feedback d-block">{{ $errors->first('password') }}</div>
                                    @endif
                                </div>

                                <div class="form-group mb-3">
                                    <div class="form-check">
                                        <input type="checkbox" name="remember" class="form-check-input" id="remember">
                                        <label class="form-check-label" for="remember">Remember Me</label>
                                    </div>
                                </div>

                                <div class="d-grid mx-auto">
                                    <button type="submit" class="btn btn-success btn-block" id="submit-btn" disabled>Signin</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const form = document.getElementById("login-form");
            const inputs = form.querySelectorAll("input");
            const submitBtn = document.getElementById("submit-btn");

            function validateForm() {
                let isValid = true;
                inputs.forEach(input => {
                    if (!input.checkValidity()) {
                        isValid = false;
                        input.classList.add("is-invalid");
                    } else {
                        input.classList.remove("is-invalid");
                        input.classList.add("is-valid");
                    }
                });
                submitBtn.disabled = !isValid;
            }

            inputs.forEach(input => {
                input.addEventListener("input", validateForm);
                input.addEventListener("focus", () => input.classList.add("border-primary"));
                input.addEventListener("blur", () => input.classList.remove("border-primary"));
            });
        });
    </script>
@endsection
