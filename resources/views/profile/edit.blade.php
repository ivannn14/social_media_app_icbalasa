<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <style>
        /* Add your CSS here */
        .container { max-width: 600px; margin: auto; padding: 20px; }
        header { margin-bottom: 20px; }
        .form-group { margin-bottom: 15px; }
        label { display: block; margin-bottom: 5px; }
        input[type="text"], input[type="email"], input[type="file"] { width: 100%; padding: 8px; }
        button { padding: 10px 15px; background-color: #007bff; color: white; border: none; border-radius: 5px; cursor: pointer; }
        button:hover { background-color: #0056b3; }
        img { max-width: 100px; margin-top: 10px; }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>Edit Profile</h1>
        </header>

        <main class="mt-4">
            <!-- Edit Profile Form -->
            <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PATCH')

                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" value="{{ old('username', $user->name) }}" required>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" value="{{ old('email', $user->email) }}" required>
                </div>

                <div class="form-group">
                    <label for="profile_picture">Profile Picture</label>
                    @if($user->profile_picture)
                        <img src="{{ asset('storage/' . $user->profile_picture) }}" alt="Profile Picture">
                    @endif
                    <input type="file" id="profile_picture" name="profile_picture">
                </div>

                <div class="form-group">
                    <label for="background_picture">Background Picture</label>
                    @if($user->background_picture)
                        <img src="{{ asset('storage/' . $user->background_picture) }}" alt="Background Picture">
                    @endif
                    <input type="file" id="background_picture" name="background_picture">
                </div>

                <div class="form-group">
                    <button type="submit">Save Changes</button>
                </div>
            </form>
        </main>
    </div>
</body>
</html>
