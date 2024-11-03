<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You for Your Purchase!</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@1.14.0/dist/full.css" rel="stylesheet">
</head>

<body class="bg-gray-100">

    <!-- Confirmation Container -->
    <div class="container mx-auto p-6">
        <div class="bg-white p-8 rounded-lg shadow-md max-w-lg mx-auto text-center">

            <!-- Thank You Image -->
            {{-- <div class="mb-6">
                <img src="https://source.unsplash.com/featured/?thankyou" alt="Thank You" class="w-full h-64 object-cover rounded-lg">
            </div> --}}

            <!-- Thank You Message -->
            <h2 class="text-4xl font-bold text-green-500 mb-4">🎉Thank You!🎉</h2>
            <p class="text-lg text-gray-600 mb-6">We appreciate your business. Your order is confirmed! 🛍️</p>

            <!-- Billing Information -->
            <div class="bg-gray-100 p-4 rounded-lg shadow-inner mb-6">
                <h3 class="text-2xl font-semibold mb-4">📦 Billing Information</h3>

                <!-- Customer Name -->
                <p class="text-lg font-medium mb-2">👤 Name: <span class="font-semibold">{{ $name }}</span></p>

                <!-- Customer Address -->
                <p class="text-lg font-medium mb-2">🏠 Address: <span class="font-semibold">{{ $address }}</span></p>

                <!-- Total Items -->
                <p class="text-lg font-medium mb-2">🛒 Total Items: <span class="font-semibold">{{ $total_items }}</span></p>

                <!-- Total Price -->
                <p class="text-lg font-medium mb-2">💵 Total Price: <span class="font-semibold">{{ $total_price }}</span></p>

                <!-- Customer Contact Number -->
                <p class="text-lg font-medium">📞 Contact Number: <span class="font-semibold">{{ $phone }}</span></p>
            </div>

            <!-- Interactive Thank You Emojis -->
            <div class="mb-6">
                <p class="text-xl font-semibold text-gray-700">You're awesome! 🎉 🙌 😄</p>
                <p class="text-md text-gray-500">Your order is on its way! 🚚</p>
            </div>

            <!-- Back to Home Button -->
            <form method="get" action="check">
                @csrf
            <div class="text-center">
                <button class="btn btn-primary w-full">🏠 Back to Home</button>
            </div>
        </form>
        </div>
    </div>

</body>

</html>
