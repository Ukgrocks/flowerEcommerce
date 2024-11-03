<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Signup Form</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdn.jsdelivr.net/npm/daisyui@2.51.5/dist/full.css" rel="stylesheet" type="text/css" />
</head>
<body class="bg-base-200">



<!-- Display validation errors -->
{{-- @if ($errors->any())
  <div style="color: red;">
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>
@endif --}}

  <div class="flex justify-center items-center h-screen">
    <form method="post" action="">
      @csrf
    <!-- Increased width and reduced height for the form -->
    <div class="card w-full max-w-5xl bg-base-100 shadow-xl p-3">
      <div class="card-body">
        <h2 class="card-title justify-center text-2xl font-bold mb-2">Sign Up</h2>

        <div class="grid grid-cols-2 gap-4">
          <!-- Email Input -->
          <div class="form-control">
            <label for="email1" class="label">
              <span class="label-text">Email</span>
            </label>
            <input id="email1" type="email" name="email1" placeholder="Enter your email" class="input input-bordered" required />
            @error('email1')
            <div style="color: red;">{{ $message }}</div>
            @enderror
          </div>

          <!-- Password Input -->
          <div class="form-control">
            <label for="password1" class="label">
              <span class="label-text">Password</span>
            </label>
            <input id="password1" type="password" name="password1" placeholder="Enter your password" class="input input-bordered" required />
    
          </div>
        </div>

        <div class="grid grid-cols-2 gap-4">
          <!-- Shop ID Input -->
          <div class="form-control">
            <label for="shopid" class="label">
              <span class="label-text">Shop ID</span>
            </label>
            <input id="shopid" type="text" name="shopid" placeholder="Enter your shop ID" class="input input-bordered" required />
      
          </div>

          <!-- Shop Name Input -->
          <div class="form-control">
            <label for="shopname" class="label">
              <span class="label-text">Shop Name</span>
            </label>
            <input id="shopname" type="text" name="shopname" placeholder="Enter your shop name" class="input input-bordered" required />
  
          </div>
        </div>

        <div class="grid grid-cols-2 gap-4">
          <!-- Shop Contact Number Input -->
          <div class="form-control">
            <label for="contact" class="label">
              <span class="label-text">Shop Contact Number</span>
            </label>
            <input id="contact" type="tel" name="contact" placeholder="Enter shop contact number" class="input input-bordered" required />
    
          </div>

          <!-- Shop Address Input -->
          <div class="form-control">
            <label for="shopaddress" class="label">
              <span class="label-text">Shop Address</span>
            </label>
            <textarea id="shopaddress" name="shopaddress" placeholder="Enter shop address" class="textarea textarea-bordered" required></textarea>

          </div>
        </div>

        <!-- Normal-sized Submit Button -->
        <div class="form-control mt-4">
          <label class="label"></label>
          <button value="submit" class="btn btn-primary">Sign Up</button>
        </div>
      </div>
    </div>
    </form>
  </div>
</body>
</html>
