<!DOCTYPE html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container py-5 w">
        <h1>Register User Form</h1>
          <form method="post" class="p-md-5 border rounded-3 bg-body-tertiary" action="{{ route('registerSave') }}">
            @csrf
            <!-- Name input -->
                <div class="form-floating mb-3">
                    <input type="text" id="form4Example1" name="name" class="form-control" />
                    <label class="form-label" for="form4Example1">Name</label>
                </div>

                <!-- Email input -->
                <div class="form-floating mb-3">
                    <input type="email" id="form4Example2" name="email" class="form-control" />
                    <label class="form-label" for="form4Example2">Email address</label>
                </div>
                <!-- Message input -->

                <div class="form-floating mb-3">
                    <input type="text" id="form4Example3" name="password" class="form-control" />
                    <label class="form-label" for="form4Example1">Password</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="text" id="form4Example4" name="password_confirmation" class="form-control" />
                    <label class="form-label" for="form4Example1">Confirm Password</label>
                </div>
                <!-- Submit button -->
                <button type="submit" class="w-100 btn btn-lg btn-primary">Register</button>
          </form>
           @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>There were some problems with your input:</strong>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
    </div>
</body>
</html>
