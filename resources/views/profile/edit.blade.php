<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f4f4; margin: 0; padding: 0; }
        .container { max-width: 600px; margin: 40px auto; padding: 20px; background-color: #ffffff; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        h1 { color: #333; text-align: center; margin-bottom: 30px; }
        .form-group { margin-bottom: 20px; }
        label { display: block; margin-bottom: 5px; color: #555; font-weight: bold; }
        input[type="text"], input[type="email"], textarea { width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 4px; box-sizing: border-box; }
        input[type="file"] { width: 100%; padding: 10px 0; }
        button { display: block; width: 100%; padding: 12px; background-color: #007bff; color: white; border: none; border-radius: 4px; cursor: pointer; font-size: 16px; }
        button:hover { background-color: #0056b3; }
        img { max-width: 100px; margin-top: 10px; border-radius: 50%; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Edit Profile</h1>

        <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <div>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" value="{{ old('name', $user->name) }}" required>
            </div>

            <div>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="{{ old('email', $user->email) }}" required>
            </div>

            <div class="form-group">
                <label for="bio">Bio:</label>
                <textarea id="bio" name="bio" rows="4">{{ old('bio', $user->bio) }}</textarea>
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

            <button type="submit">Save Changes</button>
        </form>
    </div>
</body>
</html>
