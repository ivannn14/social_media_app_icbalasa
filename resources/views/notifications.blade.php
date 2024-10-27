<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Notifications</title>
    <style>
        /* Add your styles here */
        body {
            font-family: Arial, sans-serif;
            background-color: #1a1a2e;
            color: #eaeaea;
        }

        .container {
            width: 80%;
            margin: 0 auto;
        }

        header {
            background-color: #162447;
            padding: 10px 0;
        }

        nav ul {
            list-style: none;
            padding: 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        nav ul li {
            display: inline;
        }

        nav ul li a {
            color: #eaeaea;
            text-decoration: none;
            padding: 10px 20px;
        }

        nav ul li a:hover {
            background-color: #1f4068;
            border-radius: 5px;
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

        .notification-item {
            padding: 10px;
            border-bottom: 1px solid #ccc;
            background-color: #1f4068;
            margin-bottom: 5px;
            border-radius: 5px;
        }

        .notification-item:hover {
            background-color: #162447;
        }

        h2 {
            margin-top: 20px;
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
                    <li class="notification-dropdown">
                        <a href="{{ route('notifications.index') }}" id="notificationDropdown" role="button">
                            <i class="fas fa-bell"></i>
                            <span class="badge badge-danger notification-badge" id="notificationCount"></span>
                        </a>
                    </li>
                    <li><a href="{{ route('friends.index') }}">Friends</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="container">
        <h2>Notifications</h2>
        <div id="notificationsList">
            @forelse(auth()->user()->unreadNotifications as $notification)
                <div class="notification-item">
                    @if($notification->type === 'App\Notifications\PostLiked')
                        <p>
                            <strong>{{ $notification->data['liker_name'] }}</strong> liked your post
                        </p>
                    @else
                        <p>{{ $notification->data['message'] ?? 'Unknown notification type' }}</p>
                    @endif
                </div>
            @empty
                <p>No new notifications</p>
            @endforelse
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            function fetchNotifications() {
                fetch('/notifications/get')
                    .then(response => response.json())
                    .then(data => {
                        const notificationsList = document.getElementById('notificationsList');
                        notificationsList.innerHTML = '';

                        if (data.length === 0) {
                            notificationsList.innerHTML = '<p>No new notifications</p>';
                        } else {
                            data.forEach(notification => {
                                const notificationItem = document.createElement('div');
                                notificationItem.className = 'notification-item';

                                if (notification.type === 'App\\Notifications\\PostLiked') {
                                    notificationItem.innerHTML = `
                                        <p><strong>${notification.data.liker_name}</strong> liked your post</p>
                                    `;
                                } else {
                                    notificationItem.innerHTML = `
                                        <p>${notification.data.message || 'Unknown notification'}</p>
                                    `;
                                }

                                notificationsList.appendChild(notificationItem);
                            });
                        }

                        // Update notification count in the icon
                        const notificationCount = document.getElementById('notificationCount');
                        if (notificationCount) {
                            notificationCount.textContent = data.length;
                            notificationCount.style.display = data.length > 0 ? 'inline' : 'none';
                        }
                    })
                    .catch(error => console.error('Error fetching notifications:', error));
            }

            fetchNotifications();
            setInterval(fetchNotifications, 30000); // Refresh every 30 seconds
        });
    </script>
</body>
</html>
