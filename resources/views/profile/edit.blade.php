<<<<<<< HEAD
@extends('layouts.app')

@section('content')
<style>
    :root {
        --night-bg: #0f172a;  /* Very dark blue, almost black */
        --night-text: #e2e8f0;  /* Light gray for main text */
        --night-accent: #38bdf8;  /* Light blue for accents */
        --night-secondary: #1e293b;  /* Slightly lighter blue for secondary elements */
    }

    body, .bg-white, .bg-gray-100 {
        background-color: var(--night-bg) !important;
        color: var(--night-text) !important;
    }

    .text-gray-700, .text-gray-800, .text-gray-900 {
        color: var(--night-text) !important;
    }

    a, .text-blue-600 {
        color: var(--night-accent) !important;
    }

    .card, .bg-white {
        background-color: var(--night-secondary) !important;
        border-color: #4a5568 !important;
    }

    .form-group {
        margin-bottom: 1rem;
    }

    .form-group label {
        color: var(--night-text);
        display: block;
        margin-bottom: 0.5rem;
    }

    input[type="text"], input[type="email"], textarea {
        background-color: var(--night-bg);
        color: var(--night-text);
        border: 1px solid #4a5568;
        padding: 0.5rem;
        width: 100%;
        border-radius: 0.25rem;
    }

    input[type="file"] {
        color: var(--night-text);
    }

    button {
        background-color: var(--night-accent);
        color: #ffffff !important;
        border: none;
        padding: 0.5rem 1rem;
        border-radius: 0.25rem;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    button:hover {
        background-color: #2980b9;
    }

    .image-preview {
        width: 100px;
        height: 100px;
        border-radius: 50%;
        object-fit: cover;
        border: 2px solid var(--night-accent);
        margin-bottom: 0.5rem;
    }

    .container {
        max-width: 600px;
        margin: 0 auto;
        padding: 2rem;
    }

    h1 {
        color: var(--night-text);
        margin-bottom: 2rem;
    }
</style>

<div class="container">
    <h1>Edit Profile</h1>

    <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="{{ old('name', $user->name) }}" required>
        </div>

        <div class="form-group">
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
                <img src="{{ asset('storage/' . $user->profile_picture) }}" alt="Profile Picture" class="image-preview">
            @endif
            <input type="file" id="profile_picture" name="profile_picture">
        </div>

        <div class="form-group">
            <label for="background_picture">Background Picture</label>
            @if($user->background_picture)
                <img src="{{ asset('storage/' . $user->background_picture) }}" alt="Background Picture" class="image-preview">
            @endif
            <input type="file" id="background_picture" name="background_picture">
        </div>

        <button type="submit">Save Changes</button>
    </form>
</div>
@endsection
=======
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
>>>>>>> b00352a402cdd61f12da4089a579b6c5760e7845
