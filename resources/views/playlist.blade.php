@extends('template')

@section('content')
 <div class="div-content flex justify-start items-center">
    <span class="menu flex flex-col justify-between bg-white  place-self-center">
        <a href="{{ route('home') }}"><img class="w-14 my-3" src="{{ asset('img/icons/logo-popCoder-multicolor.png') }}" alt="logo"></a>
        <a href="{{route('screen')}}"><img class="w-14"  src="{{ asset('img/icons/icono-musica.png') }}" alt="icono-musica"></a>
        <a href="{{route('playlist.index')}}"><img class="w-14"  src="{{ asset('img/icons/icono-gatito.png') }}" alt="logo"></a>
        <a href="{{route('playlist.index')}}"><img class="w-14"  src="{{ asset('img/icons/icono-patito.png') }}" alt="logo"></a>
    </span>
    <span class="d-menu bg-gradient-to-r from-green-400 to-blue-500 hover:from-pink-500 hover:to-yellow-500"><button></button></span>
    <div class="d-content bg-stone-50/40 h-96 rounded-md max-w-8xl">
        <div class="flex justify-end"><a href="{{route('addSong.create')}}"><img class="w-14 left-0"  src="{{ asset('img/icons/icono-add-song.png') }}" alt="logo"></a></div>
         <div class="grid grid-flow-row grid-cols-1 grid-rows-2 md:grid-cols-2 justify-center place-content-center">
          @foreach ($songs as $song)
            <div class="transform overflow-hidden place-self-center rounded-lg bg-white text-left shadow-xl transition-all sm:my-2 sm:w-full sm:max-w-md mb-6">
              <div class="bg-white px-4 pt-3 pb-4 sm:p-6 sm:pb-4">
                <div class="sm:flex sm:items-start">
                  <div class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                    <a href="{{ route('playlist.index') }}"><img class="rounded-full h-12 w-12" src="{{ asset('img/avatares/natalia.png') }}" alt="avatar"></a>
                  </div>
                  <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                    <h3 class="text-base font-semibold leading-4 text-gray-900" id="modal-title">Tu canción</h3>
                    <div class="mt-2">
                        <a class="text-sm" href="{{route('songDescription.show', $song->id_song)}}">Título: {{$song->title}}</a>
                        <p class="text-sm">Artista: {{$song->artist}}</p>
                        <p class="text-sm">Género: {{$song->genre}}</p>
                        <p class="text-sm">Url: {{$song->url}}</p>
                        <img href='{{$song->image}}' alt="avatar"/>
                        <form action="{{ route('addSong.store') }}" method="POST">
                            <div class="flex items-center">
                                <input id="status" name="status" type="checkbox" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600">
                                <label for="status" class="ml-2 block text-sm text-gray-900">Escuchada</label>
                              </div>
                        </form>
                    </div>
                  </div>
                </div>
              </div>
              <div class="bg-gray-50 px-2 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                <a href="{{route('addSong.store')}}"><button type="button" class="mr-3 mt-1 inline-flex w-full justify-center rounded-md bg-slate-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-slate-500 sm:ml-3 sm:w-auto">Editar</button></a> 
                {{-- <form action="{{route('playlist.destroy', $song)}}" method="POST"> --}}
                {{-- @csrf --}}
                {{-- @method('delete') --}}
                <button type="submit" class="mr-3 mt-1 inline-flex w-full justify-center rounded-md bg-pink-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-pink-500 sm:ml-3 sm:w-auto">Eliminar</button>
                {{-- </form> --}}
              
              </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection