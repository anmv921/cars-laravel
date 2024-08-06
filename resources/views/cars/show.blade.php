@extends('layouts.app')

<header>
    @include('layouts.header')
</header>

@section('content')

    <div class="py-24">

    <div class="text-center" >

        <div class="text-center">
            <a 
            class="border-b-2 pb-2 border-dotted italic text-gray-500"
            href="{{ url('/') . '/cars' }}" >
                Go back &larr; 
            </a>
        </div>

        <br>

        <div class ="flex justify-center">
            <img 
            class="w-6/12 mb-8 shadow-xl"
            src="{{ asset('images/' . $car->image_path) }}" 
            alt="" >
        </div>
            
        <h1 class="text-5xl uppercase bold" >
            {{ $car->name }}
        </h1>
    </div>

    <div class="py-10 text-center" >
            <div class="m-auto">
                <span class="uppercase text-blue-500 font-bold text-xs italic">
                    Founded: {{ $car->founded }}
                </span>
            </div>

            <p class="text-lg text-gray-700 py-6 px-20" >
                {{ $car->description }}
            </p>

            <p class="text-lg text-gray-700 py-3">
                Models:
            </p>

            <table class="table-auto" >
                <tr class="bg-blue-100">
                    <th class="w-1/2 border-4 border-gray-500">
                        Model
                    </th>
                    <th class="w-1/2 border-4 border-gray-500">
                        Engines
                    </th>
                    <th class="w-1/2 border-4 border-gray-500">
                        Production Date
                    </th>

                    @forelse ($car->carModels as $model)
                        <tr>
                            <td class="border-4 border-gray-500" >
                                {{ $model->model_name }}
                            </td>

                            <td class="border-4 border-gray-500" >
                                @foreach ($car->engines as $engine)
                                    @if ($model->id == $engine->model_id)
                                        {{ $engine->engine_name }}
                                    @endif
                                @endforeach
                            </td>

                            <td class="border-4 border-gray-500" >
                                {{ date("d-m-Y", 
                                strtotime($car->productionDate->created_at)) }}
                            </td>

                        </tr>
                    @empty
                        <p>
                            No models found
                        </p>
                    @endforelse
                </tr>
            </table>

            @php
                $contador = 0;
            @endphp
            <p class="text-left" >
                Product types:
                @forelse ($car->products as $product)
                    {{ $product->name }}

                    @if ($contador < count($car->products)-1 )
                        |
                    @endif 
                    @php
                        $contador += 1;
                    @endphp
                @empty
                    <p class="text-left">
                        No car products
                    </p>
                @endforelse
            </p>

            <hr class="mt-4 mb-8" >
    </div>

</div>

@endsection