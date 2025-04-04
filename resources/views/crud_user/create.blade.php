@extends('dashboard')

@section('content')
    <main class="signup-form">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                        <h3 class="card-header text-center bg-primary text-white">Create User</h3>
                        <div class="card-body">
                            <form action="{{ route('user.postUser') }}" method="POST" id="signup-form">
                                @csrf
                                <div class="form-group mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" id="name" class="form-control" name="name" required autofocus>
                                    <div class="invalid-feedback">Name is required.</div>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" id="email" class="form-control" name="email" required>
                                    <div class="invalid-feedback">Enter a valid email.</div>
                                </div>

                                <div class="form-group mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" id="password" class="form-control" name="password" required>
                                    <div class="invalid-feedback">Password must be at least 6 characters.</div>
                                </div>

                                <div class="d-grid mx-auto">
                                    <button type="submit" class="btn btn-success btn-block" id="submit-btn" disabled>Submit</button>
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
            const form = document.getElementById("signup-form");
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
