<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Flower Shop - Fresh Blooms for You</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@1.14.0/dist/full.css" rel="stylesheet">
</head>
<body class="bg-white text-gray-700">

    <!-- Navbar -->
    <nav class="bg-white shadow-lg">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <div class="text-2xl font-bold text-green-500">Flower Bliss</div>
                <ul class="flex space-x-6 text-gray-600">
                    <a href="loggin"><button class="mt-2 btn btn-primary bg-green-500 border-none hover:bg-green-600">Login for Sellers</button></a>
               </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="bg-gradient-to-br from-green-100 to-green-200 py-20">
        <div class="container mx-auto px-4 text-center">
            <h1 class="text-5xl font-bold text-green-800">Fresh Blooms Delivered to Your Doorstep</h1>
            <p class="mt-4 text-xl text-gray-600">Choose from a wide variety of fresh flowers, perfect for every occasion.</p>
            <a href="shopping"><button class="mt-8 btn btn-primary bg-green-500 border-none hover:bg-green-600">Shop Now</button></a>
        </div>
    </section>

    <!-- Featured Flowers -->
    <section id="shop" class="py-16">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-4xl font-bold text-green-800">Our Featured Flowers</h2>
            <p class="mt-2 text-gray-600">Explore our top picks of fresh blooms, hand-picked just for you.</p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mt-8">
                <!-- Flower Card 1 -->
                <div class="card shadow-lg">
                    <figure>
                        <img src="https://cms.interiorcompany.com/wp-content/uploads/2024/01/red-velvet-types-of-red-roses.jpg" alt="Rose Bouquet" class="w-full h-48 object-cover">
                    </figure>
                    <div class="card-body text-left">
                        <h3 class="card-title">Rose Bouquet</h3>
                        <p>Brighten someone's day with this stunning rose bouquet.</p>
                    
                    </div>
                </div>

                <!-- Flower Card 2 -->
                <div class="card shadow-lg">
                    <figure>
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/4/40/Sunflower_sky_backdrop.jpg/440px-Sunflower_sky_backdrop.jpg" alt="Sunflowers" class="w-full h-48 object-cover">
                    </figure>
                    <div class="card-body text-left">
                        <h3 class="card-title">Sunflowers</h3>
                        <p>Bring warmth and cheer to your home with these sunflowers.</p>
                
                    </div>
                </div>

                <!-- Flower Card 3 -->
                <div class="card shadow-lg">
                    <figure>
                        <img src="https://images.herzindagi.info/image/2024/Apr/summer-lily-flowers-to-grow.jpg" alt="Lily Arrangement" class="w-full h-48 object-cover">
                    </figure>
                    <div class="card-body text-left">
                        <h3 class="card-title">Lily Arrangement</h3>
                        <p>Elegant lilies, perfect for any occasion.</p>
                    
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section id="about" class="bg-green-50 py-16">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-4xl font-bold text-green-800">Why Choose Flower Bliss?</h2>
            <p class="mt-4 text-gray-600 bg-white px-6 py-4 rounded-lg shadow-lg border-l-4 border-pink-500 font-serif leading-relaxed">
                <span class="text-2xl font-bold text-pink-600">"Flower Bliss" - Where Every Petal Speaks!</span><br><br>
                
                Looking to add a touch of nature's beauty to your life? 
                <span class="text-pink-600 font-semibold">Flower Bliss</span> brings you the freshest, most vibrant blooms that elevate every occasion. 
                Whether you're celebrating love, expressing gratitude, or simply brightening someone's day, our flowers are crafted to deliver pure joy.<br><br>
                
                Imagine walking into a room filled with captivating fragrances and vivid colors that turn any 
                space into a paradise. With <span class="text-pink-600 font-semibold">Flower Bliss</span>, you’re not just buying flowers – you’re choosing an 
                experience. From romantic roses to cheerful daisies, exotic orchids to charming tulips, our 
                carefully curated selection ensures you find the perfect bouquet for every moment.<br><br>
                
                <span class="font-semibold text-gray-700">Flower Bliss</span> is committed to freshness and quality, sourcing only the finest flowers to 
                guarantee long-lasting beauty. We take pride in offering eco-friendly packaging and reliable 
                delivery to make every order effortless. When you choose <span class="text-pink-600 font-semibold">Flower Bliss</span>, you choose elegance, 
                quality, and a promise to make life’s moments truly unforgettable.<br><br>
                
                Explore <span class="text-pink-600 font-semibold">Flower Bliss</span> today, and let your heart blossom with every bouquet. 
                Because with us, flowers aren’t just beautiful – they’re blissful!
            </p>
            
        </div>
    </section>

    <!-- Footer -->
    <footer id="contact" class="bg-green-100 py-8">
        <div class="container mx-auto px-4 text-center">
            <p class="text-gray-600">Contact us: info@flowerbliss.com | Follow us on social media</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/daisyui@1.14.0/dist/full.js"></script>
</body>
</html>
