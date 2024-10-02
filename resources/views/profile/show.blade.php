@extends('layouts.app')

@section('content')
<<<<<<< HEAD
=======
<<<<<<< HEAD
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

    .profile-picture-container {
        position: relative;
        width: 150px;
        height: 150px;
        margin: 0 auto;
        margin-top: -75px;
        border: 5px solid var(--night-secondary);
        border-radius: 50%;
        overflow: hidden;
        box-shadow: 0 0 10px rgba(255, 255, 255, 0.1);
    }

    .profile-picture {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .bio-section {
        margin-top: 20px;
    }

    .bio-section h3 {
        font-size: 1.5rem;
        margin-bottom: 10px;
        color: var(--night-text);
    }

    .bio-section p {
        font-size: 1rem;
        color: var(--night-text);
    }

    .btn-primary, .btn-secondary {
        background-color: var(--night-accent);
        color: #ffffff !important; /* Changed to white */
        border: none;
        transition: background-color 0.3s ease;
    }

    .btn-primary:hover, .btn-secondary:hover {
        background-color: #2980b9; /* Darker shade for hover effect */
        color: #ffffff !important;
    }
</style>

=======
>>>>>>> b00352a402cdd61f12da4089a579b6c5760e7845
>>>>>>> 911081c18f8f2c16e2107738bb94388fd0bf114f
<div class="container mt-4">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <!-- Profile Background Image -->
                <div class="relative">
                    <div class="w-full h-80 overflow-hidden rounded-t-lg">
                        <img src="{{ asset('storage/' . $user->background_picture) }}" alt="Background Image" class="w-full h-full object-cover">
                    </div> 
                </div>

                <div class="card-body text-center">
                    @if($user->profile_picture)
                        <div class="profile-picture-container">
                            <img src="{{ asset('storage/' . $user->profile_picture) }}" alt="Profile Picture" class="profile-picture">
                        </div>
                    @endif
                    <h2>{{ $user->name }}</h2>
                    <p>{{ $user->email }}</p>
                    <div class="bio-section">
                        <h3>Bio</h3>
                        <p>{{ $user->bio }}</p>
                    </div>
                    <div class="text-center mt-4">
                        <a href="{{ route('profile.edit') }}" class="btn btn-primary">Edit Profile</a>
                    </div>
                    <div class="text-center mt-2">
                        <a href="{{ route('dashboard') }}" class="btn btn-secondary">Home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> 911081c18f8f2c16e2107738bb94388fd0bf114f

<style>
    .profile-picture-container {
        position: relative;
        width: 150px;
        height: 150px;
        margin: 0 auto;
        margin-top: -75px; /* Adjust this value to position the profile picture correctly */
        border: 5px solid white;
        border-radius: 50%;
        overflow: hidden;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .profile-picture {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .bio-section {
        margin-top: 20px;
    }

    .bio-section h3 {
        font-size: 1.5rem;
        margin-bottom: 10px;
    }

    .bio-section p {
        font-size: 1rem;
        color: #555;
    }
</style>
<<<<<<< HEAD
=======
>>>>>>> b00352a402cdd61f12da4089a579b6c5760e7845
>>>>>>> 911081c18f8f2c16e2107738bb94388fd0bf114f
