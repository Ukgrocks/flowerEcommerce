<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Flowers</title>
</head>
<body>
<div class="container mx-auto mt-5">
    <!-- resources/views/components/navbar.blade.php -->

    <nav class="bg-black text-white py-4">
        <div class="container mx-auto flex justify-between items-center px-4">
            <!-- Leftmost: Brand Name -->
            <div class="text-xl font-bold mr-4">
                <a href="#" class="hover:text-gray-400">Plantify</a>
            </div>
    
            <!-- Center: Navigation Links -->
            <div class="hidden md:flex space-x-6">
                <a href="#" class="hover:text-gray-400">Flowers</a>
                <a href="#" class="hover:text-gray-400">Plants</a>
                <a href="#" class="hover:text-gray-400">Bonsai</a>
            </div>
    
            <!-- Rightmost: Cart and User Icons -->
            <div class="flex items-center space-x-4">
                <form method="get" action="{{route('save_flower')}}" class="inline-block">
                    @csrf
                    <button type="submit" class="px-3 py-2 bg-green-500 text-white rounded hover:bg-green-600">Add Flowers</button>
                </form>
    
                <form method="get" action="{{route('loginpage')}}" class="inline-block">
                    @csrf
                    <button type="submit" class="px-3 py-2 bg-red-500 text-white rounded hover:bg-red-600">Log Out</button>
                </form>
            </div>
        </div>
    </nav>
    
    <div class="container mx-auto mt-10">
        <div class="p-6 bg-gradient-to-br from-yellow-100 to-yellow-200 border-2 border-yellow-300 rounded-2xl shadow-2xl text-gray-800 mx-auto w-full md:w-2/3 lg:w-1/2">
            <h2 class="text-xl font-bold text-center mb-3 text-yellow-700">Total Earnings</h2>
            <p class="text-center text-xl">
                Total revenue generated: 
                <span class="font-semibold text-green-700">₹{{ number_format($totalEarnings, 2) }}</span>
            </p>
        </div>
    </div>
    
    
    <h1 class="text-3xl font-bold text-center mb-8">Flowers on Sale</h1>
    
    <!-- Centering the grid using flex utilities -->
    <div class="flex justify-center items-center min-h-screen">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
            @foreach($flowers as $flower)
            <div class="card bg-base-100 h-96 w-96 shadow-xl">
                <figure class="px-10 pt-10">
                  <img
                    src={{$flower->Photo}}
                    alt={{$flower->Name}}
                    class="w-full h-48 object-cover rounded-lg" />
                </figure>
                <div class="card-body items-center text-center">
                  <h2 class="card-title">{{$flower->Name}}</h2>
                  <p>Price : {{$flower->Price}}</p>
  <div class="flex justify-between">
    <form method="get" action="shopping/{{$flower->SHOP_ID}}/{{$flower->Product_ID}}">
        <div class="card-actions">
          <button class="btn btn-primary">Delete</button>
        </div>
      </form>
    </div>
                  

                </div>
              </div>
            @endforeach
        </div>
    </div>


    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contact Display</title>
        <!-- Include DaisyUI and Tailwind CSS -->
        <script src="https://cdn.tailwindcss.com"></script>
        <link href="https://cdn.jsdelivr.net/npm/daisyui@2.5.1/dist/full.css" rel="stylesheet">
    </head>
    <body>
        <div class="min-h-screen flex items-center justify-center bg-gray-100">
            @foreach($data as $data)
            <div class="card w-96 bg-base-100 shadow-xl">
                <figure class="px-10 pt-10">
                    <!-- Shop Logo -->
                    <img src="https://via.placeholder.com/100" alt="Shop Logo" class="rounded-full w-32 h-32">
                </figure>
                <div class="card-body items-center text-center">
                    <!-- Shop Name -->
                    <h2 class="card-title text-2xl font-bold">{{$data->Shop_Name}}</h2>
                    
                    <!-- Shop Address -->
                    <p class="text-gray-500 mt-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block mr-2" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9 7 7 0 01-9.9-9.9zM10 18a1.5 1.5 0 001.5-1.5H8.5A1.5 1.5 0 0010 18zm0-14a5 5 0 00-5 5 5 5 0 0010 0 5 5 0 00-5-5z" clip-rule="evenodd" />
                        </svg>
                       {{$data->Shop_Address}}
                    </p>
                    
                    <!-- Phone Number -->
                    <p class="text-gray-500 mt-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10l1-2m0 0l1-2m1 2l1-2m0 0L6 6h.01M6 16l1 2m1-2l1 2m0 0h.01m7-12l1 2m1-2l1 2m-3 12h-2m3-6l1-2m1 2l1-2m-7-6h2M7 10h10M4 6h16m-4 6h4M3 18h18" />
                        </svg>
                        {{$data->Contact_Number}}
                    </p>
                </div>
            </div>
            @endforeach
        </div>
    </body>
    </html>
    
</div>
</body>
</html>
