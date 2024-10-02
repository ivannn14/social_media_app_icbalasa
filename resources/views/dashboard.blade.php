<!-- resources/views/dashboard.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Dashboard</title>
    <style>
<<<<<<< HEAD
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            padding: 0;
            color: #333;
=======
<<<<<<< HEAD
        :root {
            --night-bg: #0f172a;  /* Very dark blue, almost black */
            --night-text: #e2e8f0;  /* Light gray for main text */
            --night-accent: #38bdf8;  /* Light blue for accents */
            --night-secondary: #1e293b;  /* Slightly lighter blue for secondary elements */
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: var(--night-bg);
            margin: 0;
            padding: 0;
            color: var(--night-text);
=======
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            padding: 0;
            color: #333;
>>>>>>> b00352a402cdd61f12da4089a579b6c5760e7845
>>>>>>> 911081c18f8f2c16e2107738bb94388fd0bf114f
        }
        .container {
            max-width: 1200px;
            margin: auto;
            padding: 20px;
        }
        header {
<<<<<<< HEAD
            background-color: #ffffff;
=======
<<<<<<< HEAD
            background-color: var(--night-secondary);
=======
            background-color: #ffffff;
>>>>>>> b00352a402cdd61f12da4089a579b6c5760e7845
>>>>>>> 911081c18f8f2c16e2107738bb94388fd0bf114f
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            padding: 15px 0;
        }
        nav ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        nav ul li a {
<<<<<<< HEAD
            color: #333;
=======
<<<<<<< HEAD
            color: var(--night-text);
=======
            color: #333;
>>>>>>> b00352a402cdd61f12da4089a579b6c5760e7845
>>>>>>> 911081c18f8f2c16e2107738bb94388fd0bf114f
            text-decoration: none;
            font-weight: 600;
            transition: color 0.3s ease;
        }
        nav ul li a:hover {
<<<<<<< HEAD
            color: #007bff;
=======
<<<<<<< HEAD
            color: var(--night-accent);
=======
            color: #007bff;
>>>>>>> b00352a402cdd61f12da4089a579b6c5760e7845
>>>>>>> 911081c18f8f2c16e2107738bb94388fd0bf114f
        }
        .profile-header {
            position: relative;
            margin-bottom: 80px;
<<<<<<< HEAD
=======
<<<<<<< HEAD
        }
        .background-picture {
            width: 100%;
            height: 350px;
            object-fit: cover;
            border-radius: 0 0 8px 8px;
        }
        .profile-pic-container {
            position: absolute;
            bottom: -60px;
            left: 30px;
            z-index: 1;
        }
        .profile-pic {
            width: 168px;
            height: 168px;
            border-radius: 50%;
            border: 6px solid var(--night-bg);
            object-fit: cover;
        }
        .edit-button {
            position: absolute;
            right: 30px;
            bottom: 20px;
            background-color: var(--night-accent);
            color: var(--night-bg);
            border: none;
            padding: 8px 20px;
            border-radius: 6px;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s ease;
            text-decoration: none; /* Add this line to remove underline */
            display: inline-block; /* Add this line for proper padding */
        }
        .edit-button:hover {
            background-color: var(--night-bg);
            color: var(--night-accent);
        }
        .user-info {
            background-color: var(--night-secondary);
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            margin-top: 20px;
        }
=======
>>>>>>> 911081c18f8f2c16e2107738bb94388fd0bf114f
        }
        .background-picture {
            width: 100%;
            height: 350px;
            object-fit: cover;
            border-radius: 0 0 8px 8px;
        }
        .profile-pic-container {
            position: absolute;
            bottom: -60px;
            left: 30px;
            z-index: 1;
        }
        .profile-pic {
            width: 168px;
            height: 168px;
            border-radius: 50%;
            border: 6px solid #ffffff;
            object-fit: cover;
        }
        .edit-button {
            position: absolute;
            right: 30px;
            bottom: 20px;
            background-color: #ffffff;
            color: #1877f2;
            border: none;
            padding: 8px 20px;
            border-radius: 6px;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s ease;
            text-decoration: none; /* Add this line to remove underline */
            display: inline-block; /* Add this line for proper padding */
        }
        .edit-button:hover {
            background-color: #f0f2f5;
        }
        .user-info {
            background-color: #fff;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            margin-top: 20px;
        }
<<<<<<< HEAD
=======
>>>>>>> b00352a402cdd61f12da4089a579b6c5760e7845
>>>>>>> 911081c18f8f2c16e2107738bb94388fd0bf114f
        .user-name {
            font-size: 2rem;
            font-weight: 700;
            margin: 10px 0 5px;
        }
        .user-email {
            color: #65676B;
            margin-bottom: 20px;
        }
        .post-form {
<<<<<<< HEAD
            background-color: #fff;
=======
<<<<<<< HEAD
            background-color: var(--night-secondary);
=======
            background-color: #fff;
>>>>>>> b00352a402cdd61f12da4089a579b6c5760e7845
>>>>>>> 911081c18f8f2c16e2107738bb94388fd0bf114f
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            margin-top: 20px;
        }
        .post-form textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            resize: vertical;
<<<<<<< HEAD
=======
<<<<<<< HEAD
            background-color: var(--night-bg);
            color: var(--night-text);
        }
        .post-form button {
            background-color: var(--night-accent);
            color: var(--night-bg);
=======
>>>>>>> 911081c18f8f2c16e2107738bb94388fd0bf114f
        }
        .post-form button {
            background-color: #1877f2;
            color: #fff;
<<<<<<< HEAD
=======
>>>>>>> b00352a402cdd61f12da4089a579b6c5760e7845
>>>>>>> 911081c18f8f2c16e2107738bb94388fd0bf114f
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 10px;
        }
        .posts {
            margin-top: 20px;
        }
        .post {
<<<<<<< HEAD
            background-color: #fff;
=======
<<<<<<< HEAD
            background-color: var(--night-secondary);
=======
            background-color: #fff;
>>>>>>> b00352a402cdd61f12da4089a579b6c5760e7845
>>>>>>> 911081c18f8f2c16e2107738bb94388fd0bf114f
            border-radius: 8px;
            padding: 15px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            margin-bottom: 15px;
        }
        .post p {
            margin-bottom: 10px;
        }
        .post small {
            color: #65676B;
        }
        .like-button {
            background: none;
            border: none;
<<<<<<< HEAD
            color: #1877f2;
=======
<<<<<<< HEAD
            color: var(--night-accent);
=======
            color: #1877f2;
>>>>>>> b00352a402cdd61f12da4089a579b6c5760e7845
>>>>>>> 911081c18f8f2c16e2107738bb94388fd0bf114f
            cursor: pointer;
            font-size: 14px;
            padding: 5px 10px;
            margin-top: 10px;
        }
        .like-button.liked {
<<<<<<< HEAD
=======
<<<<<<< HEAD
            color: red;
        }
        .share-button {
            background-color: #42b72a;
            color: var(--night-bg);
=======
>>>>>>> 911081c18f8f2c16e2107738bb94388fd0bf114f
            color: #fff;
            background-color: #1877f2;
            border-radius: 4px;
        }
        .share-button {
            background-color: #42b72a;
            color: #fff;
<<<<<<< HEAD
=======
>>>>>>> b00352a402cdd61f12da4089a579b6c5760e7845
>>>>>>> 911081c18f8f2c16e2107738bb94388fd0bf114f
            border: none;
            padding: 5px 10px;
            border-radius: 4px;
            cursor: pointer;
            margin-left: 10px;
        }
        .comment-form {
            margin-top: 10px;
        }
        .comment-form textarea {
            width: 100%;
            padding: 5px;
            border: 1px solid #ddd;
            border-radius: 4px;
            resize: vertical;
<<<<<<< HEAD
=======
<<<<<<< HEAD
            background-color: var(--night-bg);
            color: var(--night-text);
        }
        .comment-form button {
            background-color: var(--night-accent);
            color: var(--night-bg);
=======
>>>>>>> 911081c18f8f2c16e2107738bb94388fd0bf114f
        }
        .comment-form button {
            background-color: #1877f2;
            color: #fff;
<<<<<<< HEAD
=======
>>>>>>> b00352a402cdd61f12da4089a579b6c5760e7845
>>>>>>> 911081c18f8f2c16e2107738bb94388fd0bf114f
            border: none;
            padding: 5px 10px;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 5px;
        }
        .comments {
            margin-top: 10px;
        }
        .comment {
<<<<<<< HEAD
            background-color: #f0f2f5;
=======
<<<<<<< HEAD
            background-color: var(--night-bg);
=======
            background-color: #f0f2f5;
>>>>>>> b00352a402cdd61f12da4089a579b6c5760e7845
>>>>>>> 911081c18f8f2c16e2107738bb94388fd0bf114f
            border-radius: 8px;
            padding: 10px;
            margin-bottom: 10px;
        }
        .comment p {
            margin-bottom: 5px;
        }
        .comment small {
            color: #65676B;
        }
        .shared-posts {
            margin-top: 30px;
        }
        .post.shared {
            border-left: 4px solid #42b72a;
        }
        .delete-button {
            background-color: #dc3545;
<<<<<<< HEAD
            color: #fff;
=======
<<<<<<< HEAD
            color: var(--night-bg);
=======
            color: #fff;
>>>>>>> b00352a402cdd61f12da4089a579b6c5760e7845
>>>>>>> 911081c18f8f2c16e2107738bb94388fd0bf114f
            border: none;
            padding: 5px 10px;
            border-radius: 4px;
            cursor: pointer;
            margin-left: 10px;
        }
        .delete-button:hover {
            background-color: #c82333;
        }
        .post-image-container {
            width: 40%;
            max-height: 500px; /* Adjust this value as needed */
            overflow: hidden;
            border-radius: 15px;
<<<<<<< HEAD
            background-color: #f8f9fa; /* Light gray background for images */
=======
<<<<<<< HEAD
            background-color: var(--night-bg); /* Light gray background for images */
=======
            background-color: #f8f9fa; /* Light gray background for images */
>>>>>>> b00352a402cdd61f12da4089a579b6c5760e7845
>>>>>>> 911081c18f8f2c16e2107738bb94388fd0bf114f
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .post-image {
            max-width: 100%;
            max-height: 100%;
            object-fit: contain;
        }
        .btn-outline-danger,
        .btn-outline-primary,
        .btn-outline-info {
            border: none;
            background-color: transparent;
            padding: 0.25rem 0.5rem;
        }

        .btn-outline-danger {
            color: #dc3545;
        }

        .btn-outline-primary {
            color: #007bff;
        }

        .btn-outline-info {
            color: #17a2b8;
        }

        .btn-outline-danger:hover,
        .btn-outline-primary:hover,
        .btn-outline-info:hover {
            background-color: transparent;
        }

        .btn-outline-danger.liked i {
            color: #dc3545;
        }

        .btn-outline-danger:focus,
        .btn-outline-primary:focus,
        .btn-outline-info:focus,
        .btn-outline-danger:active,
        .btn-outline-primary:active,
        .btn-outline-info:active {
            box-shadow: none;
            outline: none;
        }

        /* Ensure consistent spacing between buttons */
        .post-actions .btn,
        .post-actions form {
            margin-right: 1rem;
        }

        .post-actions form:last-child {
            margin-right: 0;
        }

        /* Optional: Adjust icon size and spacing */
        .post-actions .btn i {
            font-size: 1.2rem;
            margin-right: 0.25rem;
        }

        .profile-pic-mini {
            width: 40px;
            height: 40px;
            object-fit: cover;
            border-radius: 50%;
<<<<<<< HEAD
            border: 2px solid #fff;
=======
<<<<<<< HEAD
            border: 2px solid var(--night-bg);
=======
            border: 2px solid #fff;
>>>>>>> b00352a402cdd61f12da4089a579b6c5760e7845
>>>>>>> 911081c18f8f2c16e2107738bb94388fd0bf114f
            box-shadow: 0 1px 3px rgba(0,0,0,0.2);
        }

        .position-relative {
            position: relative;
        }

        .profile-status {
            position: absolute;
            bottom: 0;
            right: 0;
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background-color: #4CAF50; /* Green dot for 'online' status */
<<<<<<< HEAD
            border: 2px solid #fff;
=======
<<<<<<< HEAD
            border: 2px solid var(--night-bg);
=======
            border: 2px solid #fff;
>>>>>>> b00352a402cdd61f12da4089a579b6c5760e7845
>>>>>>> 911081c18f8f2c16e2107738bb94388fd0bf114f
        }

        .mr-3 {
            margin-right: 1rem;
        }

        .d-flex {
            display: flex;
        }

        .align-items-center {
            align-items: center;
        }

        .friends-sidebar {
<<<<<<< HEAD
            background-color: #fff;
=======
<<<<<<< HEAD
            background-color: var(--night-secondary);
=======
            background-color: #fff;
>>>>>>> b00352a402cdd61f12da4089a579b6c5760e7845
>>>>>>> 911081c18f8f2c16e2107738bb94388fd0bf114f
            border-radius: 8px;
            padding: 15px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            margin-bottom: 20px;
        }

        .friends-list {
            list-style-type: none;
            padding: 0;
        }

        .friend-item {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .friend-pic-mini {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .friend-name {
            font-size: 14px;
        }

        .post-card {
<<<<<<< HEAD
            background-color: #fff;
=======
<<<<<<< HEAD
            background-color: var(--night-secondary);
=======
            background-color: #fff;
>>>>>>> b00352a402cdd61f12da4089a579b6c5760e7845
>>>>>>> 911081c18f8f2c16e2107738bb94388fd0bf114f
            border: 1px solid #dddfe2;
            border-radius: 8px;
            margin-bottom: 20px;
            overflow: hidden;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.1);
        }

        .post-header {
            padding: 12px 16px;
            display: flex;
            align-items: center;
            border-bottom: 1px solid #e4e6eb;
        }

        .post-content {
            padding: 16px;
        }

        .post-footer {
            padding: 8px 16px;
            border-top: 1px solid #e4e6eb;
<<<<<<< HEAD
            background-color: #f8f9fa;
=======
<<<<<<< HEAD
            background-color: var(--night-bg);
=======
            background-color: #f8f9fa;
>>>>>>> b00352a402cdd61f12da4089a579b6c5760e7845
>>>>>>> 911081c18f8f2c16e2107738bb94388fd0bf114f
        }

        .post-user-info {
            display: flex;
            flex-direction: column;
            margin-left: 12px;
        }

        .post-user-name {
            font-weight: 600;
<<<<<<< HEAD
            color: #050505;
=======
<<<<<<< HEAD
            color: var(--night-text);
=======
            color: #050505;
>>>>>>> b00352a402cdd61f12da4089a579b6c5760e7845
>>>>>>> 911081c18f8f2c16e2107738bb94388fd0bf114f
        }

        .post-timestamp {
            color: #65676b;
            font-size: 0.9em;
        }

        .post-image-container {
            margin-top: 12px;
            text-align: center;
<<<<<<< HEAD
        }

=======
<<<<<<< HEAD
        }

        .post-image {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
        }

        .post-actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .post-actions button {
            padding: 6px 12px;
            font-size: 0.9em;
        }

        .post-video-container {
            margin-top: 12px;
            text-align: center;
        }

        .post-video {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
        }

        .post-actions {
            display: flex;
            justify-content: flex-end;
            padding: 10px 0;
        }

        .delete-share-form {
            margin-left: auto;
        }

        .btn-outline-danger {
            color: #dc3545;
            border-color: transparent;
            background-color: transparent;
            padding: 0.25rem 0.5rem;
        }

        .btn-outline-danger:hover {
            color: var(--night-bg);
            background-color: #dc3545;
            border-color: #dc3545;
        }

        .btn-outline-danger:focus {
            box-shadow: none;
        }

        .notification-dropdown {
            position: relative;
        }

        .notification-dropdown .fa-bell {
            font-size: 1.5rem; /* Increase the size of the bell icon */
        }

        .notification-badge {
            position: absolute;
            top: -8px; /* Adjust this value as needed */
            right: -8px; /* Adjust this value as needed */
            padding: 3px 6px;
            border-radius: 50%;
            background: red;
            color: white;
            font-size: 0.75rem; /* Adjust the font size of the badge */
        }

        .dropdown-menu {
            background-color: var(--night-secondary);
            border: 1px solid var(--night-accent);
            max-height: 300px; /* Adjust the height as needed */
            overflow-y: auto; /* Add scroll if content exceeds max height */
        }

        .dropdown-item {
            color: var(--night-text);
        }

        .dropdown-item:hover {
            background-color: var(--night-bg);
=======
        }

>>>>>>> 911081c18f8f2c16e2107738bb94388fd0bf114f
        .post-image {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
        }

        .post-actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .post-actions button {
            padding: 6px 12px;
            font-size: 0.9em;
<<<<<<< HEAD
        }

        .post-video-container {
            margin-top: 12px;
            text-align: center;
        }

        .post-video {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
        }

        .post-actions {
            display: flex;
            justify-content: flex-end;
            padding: 10px 0;
        }

        .delete-share-form {
            margin-left: auto;
        }

        .btn-outline-danger {
            color: #dc3545;
            border-color: transparent;
            background-color: transparent;
            padding: 0.25rem 0.5rem;
        }

        .btn-outline-danger:hover {
            color: #fff;
            background-color: #dc3545;
            border-color: #dc3545;
        }

        .btn-outline-danger:focus {
            box-shadow: none;
=======
>>>>>>> b00352a402cdd61f12da4089a579b6c5760e7845
>>>>>>> 911081c18f8f2c16e2107738bb94388fd0bf114f
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    <header>
        <div class="container">
            <nav>
                <ul>
                    <li><h1 style="margin: 0;"><a href="{{ route('dashboard') }}">NewsFeed</a></h1></li>
                    <li><a href="{{ route('profile.show') }}">Profile</a></li>
                    <li><a href="{{ route('profile.posts') }}">My Posts</a></li>
<<<<<<< HEAD
=======
<<<<<<< HEAD
                    <li class="notification-dropdown">
                        <a href="{{ route('notifications.index') }}" id="notificationDropdown" role="button">
                            <i class="fas fa-bell"></i>
                            <span class="badge badge-danger notification-badge" id="notificationCount"></span>
                        </a>
                    </li>
                    <li><a href="{{ route('friends.index') }}">Friends</a></li>
=======
>>>>>>> b00352a402cdd61f12da4089a579b6c5760e7845
>>>>>>> 911081c18f8f2c16e2107738bb94388fd0bf114f
                </ul>
            </nav>
        </div>
    </header>

    <div class="container">
        <div class="row">
            <!-- Main content area (posts) -->
            <div class="col-md-9">
                <div class="card mb-4">
                    <div class="card-header"></div>
                    <div class="card-body">
                        <div class="post-form">
                            <h2>Create a Post</h2>
                            <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group mb-3">
                                    <textarea class="form-control border-0" name="content" rows="3" placeholder="What's on your mind?" required></textarea>
                                </div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 911081c18f8f2c16e2107738bb94388fd0bf114f
                                        <label for="media" class="btn btn-outline-primary rounded-circle p-2">
                                            <i class="fas fa-image"></i>
                                        </label>
                                        <input type="file" class="d-none" id="media" name="media" accept="image/*,video/*">
<<<<<<< HEAD
=======
=======
                                        <label for="image" class="btn btn-outline-primary rounded-circle p-2">
                                            <i class="fas fa-image"></i>
                                        </label>
                                        <input type="file" class="d-none" id="image" name="image" accept="image/*">
>>>>>>> b00352a402cdd61f12da4089a579b6c5760e7845
>>>>>>> 911081c18f8f2c16e2107738bb94388fd0bf114f
                                        <span id="file-chosen" class="ml-2 text-muted"></span>
                                    </div>
                                    <button type="submit" class="btn btn-primary rounded-pill px-4">Post</button>
                                </div>
                                <div id="image-preview" class="mt-3 post-image-container" style="display: none;">
                                    <img src="" alt="Image preview" class="post-image">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <h2>Recent Posts</h2>
                @forelse($posts as $post)
                    <div class="post-card">
                        <div class="post-header">
                            <div class="position-relative mr-3">
                                <img src="{{ $post->user->profile_picture ? asset('storage/' . $post->user->profile_picture) : asset('images/default-profile.png') }}" 
                                     alt="{{ $post->user->name }}'s profile picture" 
                                     class="profile-pic-mini">
                                <div class="profile-status"></div>
                            </div>
                            <div class="post-user-info">
                                <span class="post-user-name">{{ $post->user->name }}</span>
                                <span class="post-timestamp">{{ $post->created_at->diffForHumans() }}</span>
                            </div>
                        </div>
                        <div class="post-content">
                            <p>{{ $post->content }}</p>
<<<<<<< HEAD
=======
<<<<<<< HEAD
                            @if($post->media_path)
                                @if(Str::startsWith($post->media_type, 'video'))
                                    <video width="100%" controls>
                                        <source src="{{ asset('storage/' . $post->media_path) }}" type="{{ $post->media_type }}">
                                        Your browser does not support the video tag.
                                    </video>
                                @else
                                    <img src="{{ asset('storage/' . $post->media_path) }}" alt="Post image" class="img-fluid">
                                @endif
=======
>>>>>>> 911081c18f8f2c16e2107738bb94388fd0bf114f
                            @if($post->image_path)
                                <div class="post-image-container">
                                    <img src="{{ asset('storage/' . $post->image_path) }}" alt="Post image" class="post-image">
                                </div>
<<<<<<< HEAD
                            @elseif($post->video_path)
                                <div class="post-video-container">
                                    <video controls class="post-video">
                                        <source src="{{ asset('storage/' . $post->video_path) }}" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                </div>
=======
>>>>>>> b00352a402cdd61f12da4089a579b6c5760e7845
>>>>>>> 911081c18f8f2c16e2107738bb94388fd0bf114f
                            @endif
                        </div>
                        <div class="post-footer">
                            <div class="post-actions">
                                <form action="{{ route('posts.like', $post) }}" method="POST" class="like-form">
                                    @csrf
                                    <button type="submit" class="btn btn-outline-danger btn-sm {{ $post->isLikedBy(auth()->user()) ? 'liked' : '' }}">
                                        <i class="fa{{ $post->isLikedBy(auth()->user()) ? 's' : 'r' }} fa-heart"></i> <span class="like-count">{{ $post->likes->count() }}</span>
                                    </button>
                                </form>
                                
                                <button class="btn btn-outline-primary btn-sm comment-toggle" data-post-id="{{ $post->id }}">
                                    <i class="far fa-comment"></i> Comment
                                </button>
                                
                                <form action="{{ route('posts.share', $post) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-outline-info btn-sm">
                                        <i class="fas fa-retweet"></i> Share
                                    </button>
                                </form>
                                @if(auth()->user()->id === $post->user_id)
                                    <form action="{{ route('posts.destroy', $post) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this post?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger btn-sm">
                                            <i class="far fa-trash-alt"></i> Delete
                                        </button>
                                    </form>
                                @endif
                            </div>
                        </div>
                    </div>

                    <!-- Comment section (hidden by default) -->
                    <div class="comment-section" id="comment-section-{{ $post->id }}" style="display: none;">
                        <h5>Comments</h5>
                        <!-- Display existing comments here -->
                        @foreach($post->comments as $comment)
                            <div class="comment" id="comment-{{ $comment->id }}">
                                <div class="comment-content">
                                    <strong>{{ $comment->user->name }}:</strong> <span class="comment-text">{{ $comment->content }}</span>
                                </div>
                                @if(auth()->user()->id === $comment->user_id)
                                    <div class="comment-actions">
                                        <button class="btn btn-sm btn-outline-secondary edit-comment" data-comment-id="{{ $comment->id }}">Edit</button>
                                        <form action="{{ route('comments.destroy', $comment) }}" method="POST" class="delete-comment-form d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                                        </form>
                                    </div>
                                @endif
                            </div>
                        @endforeach

                        <!-- Comment form -->
                        <form action="{{ route('posts.comment', $post) }}" method="POST" class="comment-form mt-3">
                            @csrf
                            <div class="form-group">
                                <textarea class="form-control" name="content" rows="2" placeholder="Write a comment..." required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm mt-2">Post Comment</button>
                        </form>
                    </div>
                @empty
                    <p>No posts available.</p>
                @endforelse

                <div class="shared-posts">
                    <h2>Shared Posts</h2>
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 911081c18f8f2c16e2107738bb94388fd0bf114f
                    @forelse($sharedPosts as $post)
                        <div class="post-card shared">
                            <div class="post-header">
                                <div class="position-relative mr-3">
                                    <img src="{{ $post->user->profile_picture ? asset('storage/' . $post->user->profile_picture) : asset('images/default-profile.png') }}" 
                                         alt="{{ $post->user->name }}'s profile picture" 
                                         class="profile-pic-mini">
                                </div>
                                <div class="post-user-info">
                                    <span class="post-user-name">{{ $post->user->name }}</span>
                                    <span class="post-timestamp">Originally posted on {{ $post->created_at->format('M d, Y H:i') }}</span>
                                    <span class="post-timestamp">Shared by you on {{ $post->pivot->created_at->format('M d, Y H:i') }}</span>
                                </div>
                            </div>
                            <div class="post-content">
                                <p>{{ $post->content }}</p>
<<<<<<< HEAD
                                @if($post->image_path)
                                    <div class="post-image-container">
                                        <img src="{{ asset('storage/' . $post->image_path) }}" alt="Shared post image" class="post-image">
                                    </div>
                                @elseif($post->video_path)
                                    <div class="post-video-container">
                                        <video controls class="post-video">
                                            <source src="{{ asset('storage/' . $post->video_path) }}" type="video/mp4">
                                            Your browser does not support the video tag.
                                        </video>
                                    </div>
=======
                                @if($post->media_path)
                                    @if(Str::startsWith($post->media_type, 'video'))
                                        <video width="100%" controls>
                                            <source src="{{ asset('storage/' . $post->media_path) }}" type="{{ $post->media_type }}">
                                            Your browser does not support the video tag.
                                        </video>
                                    @else
                                        <img src="{{ asset('storage/' . $post->media_path) }}" alt="Shared post image" class="img-fluid">
                                    @endif
>>>>>>> 911081c18f8f2c16e2107738bb94388fd0bf114f
                                @endif
                            </div>
                            <div class="post-actions">
                                <form action="{{ route('posts.unshare', $post->id) }}" method="POST" class="delete-share-form">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger btn-sm" title="Delete Share">
                                        <i class="far fa-trash-alt"></i>
                                    </button>
                                </form>
                            </div>
                        </div>
                    @empty
                        <p>No shared posts.</p>
                    @endforelse
<<<<<<< HEAD
=======
=======
                    @foreach($sharedPosts as $post)
                        <div class="post shared">
                            <p>{{ $post->content }}</p>
                            <small>Originally posted by {{ $post->user->name }} on {{ $post->created_at->format('M d, Y H:i') }}</small>
                            <small>Shared by you on {{ $post->pivot->created_at->format('M d, Y H:i') }}</small>
                            
                            <!-- Like and comment features can be added here if needed -->
                        </div>
                    @endforeach
>>>>>>> b00352a402cdd61f12da4089a579b6c5760e7845
>>>>>>> 911081c18f8f2c16e2107738bb94388fd0bf114f
                </div>
            </div>

            <!-- Friends sidebar -->
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">Friends</div>
                    <div class="card-body">
                        @php
                            $user = auth()->user();
                            $friends = $user ? $user->friends : collect();
                        @endphp
                        
                        @if($friends->isNotEmpty())
                            <ul class="list-unstyled">
                                @foreach($friends as $friend)
                                    <li class="mb-2">
                                        <img src="{{ $friend->profile_picture ? asset('storage/' . $friend->profile_picture) : asset('images/default-avatar.png') }}" 
                                             alt="{{ $friend->name }}'s avatar" 
                                             class="rounded-circle mr-2" 
                                             style="width: 32px; height: 32px;">
                                        {{ $friend->name }}
                                    </li>
                                @endforeach
                            </ul>
                        @else
                            <p>{{ __('No friends yet.') }}</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <script>
        function sharePost(url) {
            navigator.clipboard.writeText(url).then(function() {
                alert('Share link copied to clipboard!');
            }, function(err) {
                console.error('Could not copy text: ', err);
            });
        }

<<<<<<< HEAD
        const fileInput = document.getElementById('media');
=======
<<<<<<< HEAD
        const fileInput = document.getElementById('media');
=======
        const fileInput = document.getElementById('image');
>>>>>>> b00352a402cdd61f12da4089a579b6c5760e7845
>>>>>>> 911081c18f8f2c16e2107738bb94388fd0bf114f
        const fileChosen = document.getElementById('file-chosen');
        const imagePreview = document.getElementById('image-preview');
        const previewImage = imagePreview.querySelector('img');

        fileInput.addEventListener('change', function() {
            if (this.files && this.files[0]) {
                const file = this.files[0];
                fileChosen.textContent = file.name;
                
                const reader = new FileReader();
                reader.onload = function(e) {
                    previewImage.src = e.target.result;
                    imagePreview.style.display = 'block';
                }
                reader.readAsDataURL(file);
            } else {
                fileChosen.textContent = '';
                imagePreview.style.display = 'none';
            }
        });

        document.addEventListener('DOMContentLoaded', function() {
            // Comment toggle functionality
            document.querySelectorAll('.comment-toggle').forEach(button => {
                button.addEventListener('click', function() {
                    const postId = this.getAttribute('data-post-id');
                    const commentSection = document.getElementById(`comment-section-${postId}`);
                    if (commentSection.style.display === 'none') {
                        commentSection.style.display = 'block';
                    } else {
                        commentSection.style.display = 'none';
                    }
                });
            });

            // Comment form submission
            document.querySelectorAll('.comment-form').forEach(form => {
                form.addEventListener('submit', function(e) {
                    e.preventDefault();
                    const formData = new FormData(this);

                    fetch(this.action, {
                        method: 'POST',
                        body: formData,
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest',
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            // Clear the textarea
                            this.querySelector('textarea').value = '';
                            // Add the new comment to the DOM
                            const commentSection = this.closest('.comment-section');
                            const newComment = document.createElement('div');
                            newComment.className = 'comment';
                            newComment.innerHTML = `<strong>${data.comment.user.name}:</strong> ${data.comment.content}
                                <div class="comment-actions">
                                    <button class="btn btn-sm btn-outline-secondary edit-comment" data-comment-id="${data.comment.id}">Edit</button>
                                    <form action="/comments/${data.comment.id}" method="POST" class="delete-comment-form d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                                    </form>
                                </div>`;
                            commentSection.insertBefore(newComment, this);
                        } else {
                            alert('Failed to post comment. Please try again.');
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        alert('An error occurred. Please try again.');
                    });
                });
            });

            // Like functionality
            document.querySelectorAll('.like-form').forEach(form => {
                form.addEventListener('submit', function(e) {
                    e.preventDefault();
                    const button = this.querySelector('button');
                    const icon = button.querySelector('i');
                    const countSpan = button.querySelector('.like-count');
                    let count = parseInt(countSpan.textContent);
                    
                    // Send an AJAX request to update the like status
                    fetch(this.action, {
                        method: 'POST',
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                            'Accept': 'application/json',
                            'Content-Type': 'application/json'
                        },
                        body: JSON.stringify({
                            liked: !button.classList.contains('liked')
                        })
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            button.classList.toggle('liked');
                            icon.classList.toggle('fas');
                            icon.classList.toggle('far');
                            countSpan.textContent = data.likes_count;
                        } else {
                            console.error('Like action failed');
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                    });
                });
            });

            // Edit comment functionality
            document.addEventListener('click', function(e) {
                if (e.target && e.target.classList.contains('edit-comment')) {
                    const commentId = e.target.getAttribute('data-comment-id');
                    const commentDiv = document.getElementById(`comment-${commentId}`);
                    const commentContent = commentDiv.querySelector('.comment-text').textContent.trim();
                    
                    // Create an edit form
                    const editForm = document.createElement('form');
                    editForm.className = 'edit-comment-form';
                    editForm.innerHTML = `
                        <input type="hidden" name="_token" value="${document.querySelector('meta[name="csrf-token"]').content}">
                        <input type="hidden" name="_method" value="PATCH">
                        <div class="form-group">
                            <textarea class="form-control" name="content" rows="2" required>${commentContent}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm mt-2">Save</button>
                        <button type="button" class="btn btn-secondary btn-sm mt-2 cancel-edit">Cancel</button>
                    `;
                    
                    // Replace the comment content with the edit form
                    commentDiv.querySelector('.comment-content').style.display = 'none';
                    commentDiv.querySelector('.comment-actions').style.display = 'none';
                    commentDiv.insertBefore(editForm, commentDiv.firstChild);
                    
                    // Handle form submission
                    editForm.addEventListener('submit', function(event) {
                        event.preventDefault();
                        const formData = new FormData(this);
                        
                        fetch(`/comments/${commentId}`, {
                            method: 'POST',
                            body: formData,
                            headers: {
                                'X-Requested-With': 'XMLHttpRequest',
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                            }
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                commentDiv.querySelector('.comment-text').textContent = data.comment.content;
                                commentDiv.querySelector('.comment-content').style.display = 'block';
                                commentDiv.querySelector('.comment-actions').style.display = 'block';
                                editForm.remove();
                            } else {
                                alert('Failed to update comment. Please try again.');
                            }
                        })
                        .catch(error => {
                            console.error('Error:', error);
                            alert('An error occurred. Please try again.');
                        });
                    });
                    
                    // Handle cancel edit
                    editForm.querySelector('.cancel-edit').addEventListener('click', function() {
                        commentDiv.querySelector('.comment-content').style.display = 'block';
                        commentDiv.querySelector('.comment-actions').style.display = 'block';
                        editForm.remove();
                    });
                }
            });

            // Delete comment functionality
            document.addEventListener('click', function(e) {
                if (e.target && e.target.closest('.delete-comment-form')) {
                    e.preventDefault();
                    const form = e.target.closest('.delete-comment-form');
                    
                    if (confirm('Are you sure you want to delete this comment?')) {
                        fetch(form.action, {
                            method: 'DELETE',
                            headers: {
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                                'Accept': 'application/json',
                                'Content-Type': 'application/json'
                            }
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                // Remove the comment from the DOM
                                const commentElement = form.closest('.comment');
                                if (commentElement) {
                                    commentElement.remove();
                                } else {
                                    console.error('Comment element not found');
                                }
                            } else {
                                alert('Failed to delete comment. Please try again.');
                            }
                        })
                        .catch(error => {
                            console.error('Error:', error);
                            alert('An error occurred. Please try again.');
                        });
                    }
                }
            });
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 911081c18f8f2c16e2107738bb94388fd0bf114f

            // Delete share functionality
            document.querySelectorAll('.delete-share-form').forEach(form => {
                form.addEventListener('submit', function(e) {
                    e.preventDefault();
                    if (confirm('Are you sure you want to remove this shared post?')) {
                        this.submit();
                    }
                });
            });
<<<<<<< HEAD
=======

            // Function to fetch notifications
            function fetchNotifications() {
                fetch('/notifications')
                    .then(response => response.json())
                    .then(data => {
                        const notificationCount = document.getElementById('notificationCount');
                        
                        notificationCount.textContent = data.length;
                    })
                    .catch(error => console.error('Error fetching notifications:', error));
            }

            // Fetch notifications every 30 seconds
            fetchNotifications();
            setInterval(fetchNotifications, 30000);
        });

        function handleLike(postId, likeButton) {
            const isCurrentlyLiked = likeButton.classList.contains('liked');
            const likeCount = likeButton.querySelector('.like-count');

            console.log('Sending like request', { postId, isCurrentlyLiked });

            fetch(`/posts/${postId}/like`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify({ liked: !isCurrentlyLiked })
            })
            .then(response => response.json())
            .then(data => {
                console.log('Received response', data);
                if (data.success) {
                    likeButton.classList.toggle('liked', data.is_liked);
                    likeCount.textContent = data.likes_count;
                    console.log('Updated like button', { isLiked: data.is_liked, likesCount: data.likes_count });
                }
            })
            .catch(error => console.error('Error:', error));
        }

        // Add event listeners to all like buttons
        document.addEventListener('DOMContentLoaded', () => {
            document.querySelectorAll('.like-button').forEach(button => {
                button.addEventListener('click', function() {
                    const postId = this.dataset.postId;
                    handleLike(postId, this);
                });
            });
=======
>>>>>>> b00352a402cdd61f12da4089a579b6c5760e7845
>>>>>>> 911081c18f8f2c16e2107738bb94388fd0bf114f
        });
    </script>
</body>
</html>