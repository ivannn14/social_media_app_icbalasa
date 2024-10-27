<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>iShare</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #000;
            color: #fff;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            display: flex;
            width: 100%;
            max-width: 1200px;
        }
        .left-side {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 5rem;
            font-weight: bold;
        }
        .right-side {
            flex: 1;
            padding: 2rem;
        }
        h1 {
            font-size: 2.5rem;
            margin-bottom: 0.5rem;
        }
        p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
        }
        .button {
            display: block;
            width: 100%;
            padding: 0.8rem;
            margin-bottom: 1rem;
            text-align: center;
            text-decoration: none;
            color: #fff;
            background-color: #333;
            border-radius: 5px;
            font-size: 1rem;
        }
        .button:hover {
            background-color: #444;
        }
        .terms {
            font-size: 0.8rem;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="left-side">
            iShare
        </div>
        <div class="right-side">
            <h1>iShare</h1>
            <h2>Happening now</h2>
            <p>Join iShare today.</p>
            <a href="{{ route('register') }}" class="button">Sign up</a>
            <a href="{{ route('login') }}" class="button">Log in</a>
            <p class="terms">By signing up, you agree to the Terms of Service and Privacy Policy, including Cookie Use.</p>
        </div>
    </div>
</body>
</html>