<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <!-- Profile Background Image -->
            <div class="relative">
                <img src="{{ $user->background_image_url }}" alt="Background Image" class="w-full h-48 object-cover rounded-t-lg">
                
                <!-- Profile Picture -->
                <div class="absolute inset-x-0 bottom-0 transform -translate-y-1/2 flex justify-center">
                    <img src="{{ $user->profile_picture_url }}" alt="Profile Picture" class="w-32 h-32 object-cover rounded-full border-4 border-white">
                </div>
            </div>
            
            <!-- User Information -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-20">
                <div class="p-6 text-gray-900">
                    <div class="flex items-center space-x-4">
                        <div class="text-lg font-semibold">{{ $user->name }}</div>
                    </div>
                    <div class="mt-4">
                        <p class="text-gray-600">{{ $user->email }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
