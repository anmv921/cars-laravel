@extends('layouts.app')

<header>
    @include('layouts.header')
</header>

@section('content')

    <div class="m-auto w-4/5 py-24">

        <div class="text-center">
            <h1 class="text-5xl uppercase bold">
                Create car
            </h1>
        </div>

        

        <br>
        
        <div class="text-center">
            <a 
            class="border-b-2 pb-2 border-dotted italic text-gray-500"
            href="{{ url('/') . '/cars' }}" >
                &larr; Go back
            </a>
        </div>
      
        <div class="flex justify-center pt-20" >
            <form action="/cars" method="POST" 
            enctype="multipart/form-data" >

                @csrf
                
                <div class="block">

                    <input type="file"
                    class="block shadow-5xl mb-10 p-2 w-80 italic
                    placeholder-gray-400" 
                    name="image" >

                    <input type="text"
                    class="block shadow-5xl mb-10 p-2 w-80 italic
                    placeholder-gray-400" 
                    name="name"
                    placeholder="Brand name..." >

                    <input type="text"
                    class="block shadow-5xl mb-10 p-2 w-80 italic
                    placeholder-gray-400" 
                    name="founded"
                    placeholder="Founded..." >

                    <input type="text"
                    class="block shadow-5xl mb-10 p-2 w-80 italic
                    placeholder-gray-400" 
                    name="description"
                    placeholder="Description..." >

                    <button class="bg-green-500 block shadow-5xl mb-10 p-2 w-80
                    uppercase font-bold"
                    type="submit" >
                        Submit
                    </button>
                </div>
            </form>

        </div>

            @if ($errors->any())
                <div class="w-4/8 m-auto text-center">
                    @foreach ($errors->all() as $error)
                        <li class="text-red-500 list list-none" >
                            {{ $error }}
                        </li>
                    @endforeach
                </div>
            @endif
            
    </div>

@endsection