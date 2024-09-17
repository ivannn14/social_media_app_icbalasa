<!-- resources/views/dashboard.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Dashboard</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f2f5;
            margin: 0;
            padding: 0;
            color: #333;
        }
        .container {
            max-width: 1200px;
            margin: auto;
            padding: 20px;
        }
        header {
            background-color: #ffffff;
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
            color: #333;
            text-decoration: none;
            font-weight: 600;
            transition: color 0.3s ease;
        }
        nav ul li a:hover {
            color: #007bff;
        }
        .profile-header {
            position: relative;
            margin-bottom: 80px;
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
            background-color: #fff;
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
        }
        .post-form button {
            background-color: #1877f2;
            color: #fff;
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
            background-color: #fff;
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
            color: #1877f2;
            cursor: pointer;
            font-size: 14px;
            padding: 5px 10px;
            margin-top: 10px;
        }
        .like-button.liked {
            color: #fff;
            background-color: #1877f2;
            border-radius: 4px;
        }
        .share-button {
            background-color: #42b72a;
            color: #fff;
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
        }
        .comment-form button {
            background-color: #1877f2;
            color: #fff;
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
            background-color: #f0f2f5;
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
            color: #fff;
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
            background-color: #f8f9fa; /* Light gray background for images */
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
            border: 2px solid #fff;
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
            border: 2px solid #fff;
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
            background-color: #fff;
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
            background-color: #fff;
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
            background-color: #f8f9fa;
        }

        .post-user-info {
            display: flex;
            flex-direction: column;
            margin-left: 12px;
        }

        .post-user-name {
            font-weight: 600;
            color: #050505;
        }

        .post-timestamp {
            color: #65676b;
            font-size: 0.9em;
        }

        .post-image-container {
            margin-top: 12px;
            text-align: center;
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
                                        <label for="image" class="btn btn-outline-primary rounded-circle p-2">
                                            <i class="fas fa-image"></i>
                                        </label>
                                        <input type="file" class="d-none" id="image" name="image" accept="image/*">
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
                            @if($post->image_path)
                                <div class="post-image-container">
                                    <img src="{{ asset('storage/' . $post->image_path) }}" alt="Post image" class="post-image">
                                </div>
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
                    @foreach($sharedPosts as $post)
                        <div class="post shared">
                            <p>{{ $post->content }}</p>
                            <small>Originally posted by {{ $post->user->name }} on {{ $post->created_at->format('M d, Y H:i') }}</small>
                            <small>Shared by you on {{ $post->pivot->created_at->format('M d, Y H:i') }}</small>
                            
                            <!-- Like and comment features can be added here if needed -->
                        </div>
                    @endforeach
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

        const fileInput = document.getElementById('image');
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
        });
    </script>
</body>
</html>
