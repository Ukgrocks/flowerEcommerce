<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit a Product</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@latest/dist/full.css" rel="stylesheet">
</head>
<body class="bg-gray-100 flex justify-center items-center min-h-screen">

    <div class="bg-white shadow-lg rounded-lg p-6 max-w-xl w-full">
        <h1 class="text-2xl font-bold text-center mb-4">Submit a Product</h1>
        <form action="" method="POST" class="space-y-2">
            @csrf

            <div class="form-control">
                <label for="name" class="label">
                    <span class="label-text">Name of Flower</span>
                </label>
                <input type="text" name="name" id="name" class="input input-bordered w-full" required />
            </div>

            <div class="form-control">
                <label for="price" class="label">
                    <span class="label-text">Price</span>
                </label>
                <input type="text" name="price" id="price" class="input input-bordered w-full" required />
            </div>


            <div class="form-control">
                <label for="type" class="label">
                    <span class="label-text">Type of Flower</span>
                </label>
                <input type="text" name="type" id="type" class="input input-bordered w-full" required />
            </div>

            <div class="form-control">
                <label for="shopid" class="label">
                    <span class="label-text">Shop ID</span>
                </label>
                <input type="text" name="shopid" id="shopid" class="input input-bordered w-full" required />
            </div>

            <div class="form-control">
                <label for="photo" class="label">
                    <span class="label-text">Upload Photo URL</span>
                </label>
                <input type="text" name="photo" id="photo" class="input input-bordered w-full" required />
            </div>

            <div class="form-control mt-4">
                <button type="submit" class="btn btn-primary w-full">Submit</button>
            </div>
        </form>
    </div>

</body>
</html>
