@extends('layouts.app')

@section('content')
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
