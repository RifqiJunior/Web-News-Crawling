@extends('dashboard.layout')

@section('konten')
    {{-- <div class="card2 card-title justify-center"> --}}
    <div class="search-box pt-2">
        <div class="search-input">
            <form action='/runpython' id='search-form' method='get' target='_top'>
                <input type="text" name="search" placeholder='Cari Artikel Disini ...' class="input">
                <button id='search-button' type='submit'>
                    <span>Search</span>
                </button>
            </form>
        </div>
    </div>
    {{-- </div> --}}
    <div class="grid grid-cols-3">
        @foreach ($list as $item)
            <div class="flex column justify-center ">
                <div data-aos="fade-down" class="card w-96 bg-white shadow-xl m-2">
                    <figure class="px-10 pt-10">
                        <img src="{{ $item[0] }}" alt="" class="rounded-xl" />
                    </figure>
                    <div class="card-body items-center text-center">
                        <h2 class="card-title">{{ $item[1] }}</h2>
                        <p class="card-text"><small class="text-muted align-content-between">{{ $item[4] }}
                                {{ $item[3] }}</small></p>
                        <div class="card-actions">
                            <a class="btn btn-primary " href="{{ $item[2] }}" target="_blank">baca</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
{{-- scaping python
        {{-- <form action="/runpython" method="post">
            @csrf
            <button type="submit">scrap</button>
        </form>   --}}
