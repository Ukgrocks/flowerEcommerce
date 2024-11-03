<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdn.jsdelivr.net/npm/daisyui@2.51.5/dist/full.css" rel="stylesheet" type="text/css" />
</head>
<body class="bg-base-200">
  <div class="flex justify-center items-center h-screen">
   <div class="card w-96 bg-base-100 shadow-xl">
  <form method="post" action="">
        @csrf
      <div class="card-body">
        <h2 class="card-title justify-center">Login</h2>
        
        <!-- Email Input -->
        <div class="form-control">
          <label class="label">
            <span class="label-text">Email</span>
          </label>
          <input type="email" name="email2" placeholder="Enter your email" class="input input-bordered" required/>
        </div>
        
        <!-- Password Input -->
        <div class="form-control">
          <label class="label">
            <span class="label-text">Password</span>
          </label>
          <input type="password" name="password2" placeholder="Enter your password" class="input input-bordered" required/>
        </div>
        
        <!-- Shop ID Input -->
        <div class="form-control">
          <label class="label">
            <span class="label-text">Shop ID</span>
          </label>
          <input type="text" name="shopid2" placeholder="Enter your shop ID" class="input input-bordered" required/>
        </div>

        
        <!-- Submit Button -->
        <div class="form-control mt-6">
          <button class="btn btn-primary">Login</button>
        </div>
      </form>
      <form action="signup" method="get">
        @csrf
        <div class="form-control mt-6">
          <button class="btn btn-success w-full">Sign Up</button>
      </div>
     </form>
     <form action="/" method="get">
      @csrf
      <div class="form-control mt-6">
        <button class="btn btn-secondary w-full">Home Page</button>
    </div>
   </form>
      </div>
   </div>  
</body>
</html>
