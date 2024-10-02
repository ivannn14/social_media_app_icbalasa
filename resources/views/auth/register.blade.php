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
        .register-container {
            background-color: #000;
            padding: 2rem;
            max-width: 400px;
            width: 100%;
        }
        .ishare-logo {
            font-size: 2.5rem;
            font-weight: bold;
            color: #fff;
            text-align: center;
            margin-bottom: 0.5rem;
        }
        .create-account-text {
            font-size: 1.2rem;
            color: #e7e9ea;
            text-align: center;
            margin-bottom: 1.5rem;
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
        .btn-register {
            background-color: #1d9bf0 !important;
            color: #fff !important;
            border: none !important;
            border-radius: 9999px !important;
            padding: 0.75rem !important;
            font-weight: bold !important;
            width: auto !important;
            cursor: pointer !important;
            transition: background-color 0.2s !important;
            float: right;
        }
        .btn-register:hover {
            background-color: #1a91da !important;
        }
        .text-blue {
            color: #1d9bf0 !important;
            text-decoration: none;
        }
        .text-blue:hover {
            text-decoration: underline !important;
        }
        .login-link {
            margin-top: 1rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
    </style>

    <div class="register-container">
        <div class="ishare-logo">iShare</div>
        <div class="create-account-text">Create your account</div>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name" placeholder="Name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />

            <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="username" placeholder="Email" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />

            <input id="password" type="password" name="password" required autocomplete="new-password" placeholder="Password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />

            <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />

            <div class="login-link">
                <a href="{{ route('login') }}" class="text-blue">
                    {{ __('Already registered?') }}
                </a>
                <button type="submit" class="btn-register">REGISTER</button>
            </div>
        </form>
    </div>
</x-guest-layout>
