<!-- resources/views/profile/partials/update-profile-background-form.blade.php -->
<form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="form-group mb-4">
        <label for="profile_picture" class="block text-sm font-medium text-gray-700">Profile Picture</label>
        <input type="file" id="profile_picture" name="profile_picture" class="mt-1 block w-full text-sm text-gray-900 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
        @error('profile_picture')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <div class="form-group mb-4">
        <label for="background_image" class="block text-sm font-medium text-gray-700">Background Image</label>
        <input type="file" id="background_image" name="background_image" class="mt-1 block w-full text-sm text-gray-900 border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
        @error('background_image')
            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
        Update Images
    </button>
</form>
