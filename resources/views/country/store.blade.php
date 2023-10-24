@extends('layouts.app')

@section('content')

<div class="container w-50 border p-4 mt-4">
    <form action="{{ route('country.store')}}" method="POST" novalidate>
        @csrf 

        @if (session('success'))
            <h6 class="alert alert-success p-2 mt-2">{{ session('success') }}</h6>
        @endif

        <div class="mb-3">
            <label for="exampleInputEmail1"class="form-label">
                Codigo internacional del pais
            </label>
            <input 
                id="exampleInputEmail1" aria-describedby="emailHelp"
                name="country_code"
                type="text"
                class="from-control"
                value="{{ old('country_code')}}"
            >
                @error('country_code')
                    <h6 class="alert alert-dander p2 mt-2">{{ $message }}</h6>
                @enderror

        </div>
        <div>
        <label for="exampleInputPassword1"class="form-label">
                Nombre pais
            </label>
            <input 
                id="exampleInputPassword1"
                name="country_name"
                type="text" class="from-control"
                @error
                    value="{{ old('country_name')}}"
                @enderror
            >
                @error('country_name')
                    <h6 class="alert alert-dander p2 mt-2">{{ $message }}</h6>
                @enderror
        </div>

        <button type="submit" class="btn btn-primary">
            enviar
        </button>

    </form>

</div>



@endsection
