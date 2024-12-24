{{-- ********** --}}
{{-- Top header --}}
{{-- ********** --}}
@if (Route::has('login'))
<div 
class="p-6 text-right sm:fixed sm:top-0 sm:right-0 bg-white w-screen" >
    @auth
        <a href="{{ route('home') }}" 
        class="font-semibold 
        text-gray-600 
        hover:text-gray-900 
        dark:text-gray-400 
        dark:hover:text-white 
        focus:outline 
        focus:outline-2 
        focus:rounded-sm 
        focus:outline-indigo-500">
            Home
        </a>

        <a href="{{ url('/') . '/cars' }}" 
        class="ml-4 
        font-semibold 
        text-gray-600 
        hover:text-gray-900 
        dark:text-gray-400 
        dark:hover:text-white 
        focus:outline 
        focus:outline-2 
        focus:rounded-sm 
        focus:outline-indigo-500">
            Cars
        </a>

        <span
        class="ml-4 
        font-semibold 
        text-gray-600 
        hover:text-gray-900 
        dark:text-gray-400 
        dark:hover:text-white 
        focus:outline 
        focus:outline-2 
        focus:rounded-sm 
        focus:outline-indigo-500">
            {{ strtoupper(Auth::user()->name) }}
        </span>
        
        <a href="{{ route('logout') }}" 
        class="ml-4 
        font-semibold 
        text-gray-600 
        hover:text-gray-900 
        dark:text-gray-400 
        dark:hover:text-white 
        focus:outline 
        focus:outline-2 
        focus:rounded-sm 
        focus:outline-indigo-500">
            Logout
        </a>

    @else
        <a href="{{ route('login') }}" 
        class="font-semibold 
        text-gray-600 
        hover:text-gray-900 
        dark:text-gray-400 
        dark:hover:text-white 
        focus:outline 
        focus:outline-2 
        focus:rounded-sm 
        focus:outline-indigo-500">
            Log in
        </a>

        @if (Route::has('register'))
            <a href="{{ route('register') }}" 
            class="ml-4 
            font-semibold 
            text-gray-600 
            hover:text-gray-900 
            dark:text-gray-400 
            dark:hover:text-white 
            focus:outline 
            focus:outline-2 
            focus:rounded-sm 
            focus:outline-indigo-500">
                Register
            </a>
        @endif
    @endauth
</div>
@endif
<br>
{{-- *********** --}}
{{-- /Top header --}}
{{-- *********** --}}