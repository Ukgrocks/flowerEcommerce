<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@1.14.0/dist/full.css" rel="stylesheet">
</head>

<body class="bg-gray-100">

    <!-- Container -->
    <div class="container mx-auto p-6">

        <!-- Page Title -->
        <h2 class="text-3xl font-bold mb-6 text-center">Your Cart</h2>

        <!-- Total Items and Total Amount -->
        <div class="bg-white p-6 rounded-lg shadow-md mb-6 text-center">
            <div class="mb-4">
                <a href="shopping">
                    <button type="submit" class="btn btn-primary">
                        Back to Shopping
                    </button>
                </a>
            </div>
            <p class="text-lg font-semibold">Total Items: 
                <span class="text-xl text-gray-700">{{ $total_items }}</span>
            </p>
            <p class="text-lg font-semibold mt-2">Total Amount: 
                <span class="text-xl text-green-600">$ {{ number_format($total_price, 2) }}</span>
            </p>
        </div>

        <!-- Cart Items List -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($flowers as $item)
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <div class="flex items-center space-x-4">
                    <!-- Product Image -->
                    <img src="{{$item->photo}}" alt="{{ $item->name }}" class="w-24 h-24 object-cover rounded-lg border border-gray-300">

                    <!-- Product Details -->
                    <div>
                        <p class="font-bold text-lg">{{ $item->name }}</p>
                        <p class="text-gray-500">Price: $ {{ number_format($item->price, 2) }}</p>
                        <form method="post" action="remove/{{$item->id}}">
                            @csrf
                        <button type="submit" class="btn btn-primary">Remove</button>
                        </form>
                    </div>
             
                </div>
            
            </div>
            @endforeach
          
        </div>

    </div>

    <div class="container mx-auto p-6">
        <div class="bg-white p-8 rounded-lg shadow-md max-w-lg mx-auto">

            <!-- Form Title -->
            <h2 class="text-3xl font-bold mb-6 text-center">Checkout</h2>

            <!-- Checkout Form -->
            <form method="post" action="checkout">
            @csrf
                <!-- Customer Name -->
                <div class="mb-4">
                    <label for="name" class="block text-lg font-semibold mb-2">Customer Name</label>
                    <input type="text" id="name" name="name" class="input input-bordered w-full" placeholder="Enter your name" required>
                </div>

                <!-- Customer Address -->
                <div class="mb-4">
                    <label for="address" class="block text-lg font-semibold mb-2">Customer Address</label>
                    <textarea id="address" name="address" class="textarea textarea-bordered w-full" placeholder="Enter your address" required></textarea>
                </div>

                <!--Total Items -->
                <div class="mb-4">
                    <label for="total_items" class="block text-lg font-semibold mb-2">Total Items</label>
                    <input type="number" id="total_items" name="total_items" class="input input-bordered w-full" value="{{ $total_items }}" readonly>
                </div>

                <!-- Total Price -->
                <div class="mb-4">
                    <label for="total_price" class="block text-lg font-semibold mb-2">Total Price</label>
                    <input type="text" id="total_price" name="total_price" class="input input-bordered w-full" value="$ {{$total_price}}" readonly>
                </div>
                <!-- Customer Contact Number -->
                <div class="mb-6">
                    <label for="contact" class="block text-lg font-semibold mb-2">Customer Contact Number</label>
                    <input type="tel" id="contact" name="contact" class="input input-bordered w-full" placeholder="Enter your contact number" pattern="[0-9]{10}" required>
                </div>
                
                
                <!-- Submit Button -->
                <div class="text-center">
                    @if($total_items > 0)
                    <button type="submit" class="btn btn-primary w-full">Place Order</button>
                    @else
                    <button type="submit" class="btn btn-primary w-full" disabled>Place Order</button>
                    @endif
                </div>
            </form>
        </div>
    </div>

</body>

</html>
