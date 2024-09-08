<!-- resources/views/dashboard.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        /* Add your styles here */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 1200px;
            margin: auto;
            padding: 20px;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            border-radius: 5px;
        }
        nav ul {
            list-style-type: none;
            padding: 0;
        }
        nav ul li {
            display: inline;
            margin-right: 15px;
        }
        nav ul li a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
        }
        nav ul li a:hover {
            text-decoration: underline;
        }
        .bg-white {
            background-color: #fff;
        }
        .p-4 {
            padding: 16px;
        }
        .rounded {
            border-radius: 5px;
        }
        .shadow {
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .text-xl {
            font-size: 1.25rem;
        }
        .font-semibold {
            font-weight: 600;
        }
        .text-2xl {
            font-size: 1.5rem;
        }
        img.profile-pic {
            width: 100px;
            height: 100px;
            border-radius: 50%;
        }
        .bg-gray-800 {
            background-color: #2d2d2d;
        }
    </style>
</head>
<body>
    <div class="container mx-auto p-4">
        <header class="bg-gray-800 text-white p-4 rounded">
            <h1 class="text-2xl">Dashboard</h1>
            <nav>
                <ul class="flex space-x-4">
                    <li><a href="{{ route('profile.show') }}" class="hover:underline">Profile</a></li>
                    
                </ul>
            </nav>
        </header>

        <main class="mt-4">
            <!-- Dashboard Content -->
            <div class="bg-white p-4 rounded shadow">
                <h2 class="text-xl font-semibold">Welcome, {{ Auth::user()->name }}</h2>
                <!-- Display user's profile picture and background picture -->
                <div class="mt-4">
                    <img src="{{ Auth::user()->profile_picture_url }}" alt="Profile Picture" class="profile-pic">
                    <h3 class="text-lg font-semibold mt-2">{{ Auth::user()->name }}</h3>
                    <p class="text-gray-600">{{ Auth::user()->email }}</p>
                    <div class="mt-4">
                        <p>Background Picture:</p>
                        <img src="{{ Auth::user()->background_picture_url }}" alt="Background Picture" style="max-width: 100%; height: auto;">
                    </div>
                </div>
            </div>
        </main>
    </div>

    <!-- Add your JavaScript here -->

</body>
</html>
