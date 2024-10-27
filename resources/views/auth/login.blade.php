<x-guest-layout>
    <style>
        html, body, #app, .min-h-screen, .bg-gray-100 {
            background-color: #000 !important;
            min-height: 100vh;
            margin: 0;
            padding: 0;
        }
        body {
            color: #e7e9ea;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Helvetica Neue', Arial, sans-serif;
        }
        .login-container {
            background-color: #000;
            padding: 2rem;
            max-width: 400px;
            width: 100%;
            border: none !important;
            box-shadow: none !important;
        }
        .ishare-logo {
            font-size: 2.5rem;
            font-weight: bold;
            color: #1da1f2;
            text-align: center;
            margin-bottom: 1rem;
        }
        h1 {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 2rem;
            color: #e7e9ea;
            text-align: center;
        }
        input {
            background-color: #000 !important;
            border: 1px solid #333 !important;
            border-radius: 4px !important;
            color: #e7e9ea !important;
            padding: 0.75rem !important;
            width: 100% !important;
            margin-bottom: 1rem !important;
        }
        input:focus {
            border-color: #1da1f2 !important;
            box-shadow: 0 0 0 2px rgba(29, 161, 242, 0.3) !important;
        }
        .btn-login {
            background-color: #1d9bf0 !important;
            color: #fff !important;
            border: none !important;
            border-radius: 9999px !important;
            padding: 0.5rem 1rem !important;
            font-weight: bold !important;
            cursor: pointer !important;
            transition: background-color 0.2s !important;
        }
        .btn-login:hover {
            background-color: #1a91da !important;
        }
        .text-blue {
            color: #1d9bf0 !important;
            text-decoration: none;
        }
        .text-blue:hover {
            text-decoration: underline !important;
        }
        /* Remove any potential white borders or outlines */
        * {
            border: none !important;
            outline: none !important;
        }
        .checkbox-container {
            display: flex;
            align-items: center;
            margin-bottom: 1rem;
        }
        .checkbox-container input[type="checkbox"] {
            margin-right: 0.5rem;
            width: auto !important;
        }
        .checkbox-container label {
            color: #fff; /* Changed to white */
        }
        .login-actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 1rem;
        }
    </style>

    <div class="login-container">
        <div class="ishare-logo">iShare</div>
        <h1>Log in to iShare</h1>

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus placeholder="Phone, email, or username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />

            <input id="password" type="password" name="password" required autocomplete="current-password" placeholder="Password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />

            <div class="checkbox-container">
                <input type="checkbox" id="remember_me" name="remember">
                <label for="remember_me">Remember me</label>
            </div>

            <div class="login-actions">
                <a href="{{ route('password.request') }}" class="text-blue">Forgot password?</a>
                <button type="submit" class="btn-login">LOG IN</button>
            </div>
        </form>
    </div>
</x-guest-layout>