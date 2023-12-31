<div class="bg-purple-700 mb-8">
    <div class="container mx-auto">
        <div class="flex items-center">
            <a class="block px-8 py-4 text-white {{ session('activeNav') == 'home' ? 'bg-purple-800 rounded' : null }}" href="{{ route('home') }}">Home</a>
            <a class="block px-8 py-4 text-white {{ session('activeNav') === 'about' ? 'bg-purple-800 rounded' : null }}" href="{{ route('about') }}">About Us</a>
            <a class="block px-8 py-4 text-white {{ session('activeNav') === 'contact' ? 'bg-purple-800 rounded' : null }}" href="{{ route('contact-us') }}">Contact Us</a>
        </div>
    </div>
</div>
