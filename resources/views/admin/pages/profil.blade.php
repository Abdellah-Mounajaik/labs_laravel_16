@extends('adminlte::page')
@section('content')
<div class="py-2">
    <div class="max-w-7xl mx-auto 8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-4 bg-white border-b border-gray-200 block">
                <div class="text-center bg-gray-100 py-4 shadow-md  mx-auto rounded-lg">
                    <h1 class="text-center text-gray-600 text-4xl m-auto">Users</h1>
                    <p class="text-center">Nombre de users: {{ count($users) }}</p>
                </div>
                @Webmaster
                <table class="text-left w-full">
                    <thead>
                        <tr>
                            <th
                                class="py-4 px-5 bg-light  ">
                                Photo</th>
                            <th
                                class="py-4 px-5 bg-light  ">
                                Nom</th>
                            <th
                                class="py-4 px-5 bg-light  ">
                                Email</th>
                            <th
                                class="py-4 px-5 bg-light  ">
                                Poste</th>
                            <th
                                class="py-4 px-5 bg-light  ">
                                Genre</th>
                            <th
                                class="py-4 px-5 bg-light  ">
                                Role</th>
                            <th
                                class="py-4 px-5 bg-light  ">
                                Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr class="hover:bg-grey-lighter">
                            <td class="py-4 px-4 border-b border-grey-light">
                                <img src="{{asset($user->image) }}" alt="" class="h-10" />
                            </td>
                            <td class="py-4 px-4 ">{{ $user->nom }}</td>
                            <td class="py-4 px-4 ">{{ $user->email }}</td>
                            <td class="py-4 px-4 ">{{ $user->poste->poste }}</td>
                            <td class="py-4 px-4 ">{{ $user->genre->genre }}</td>
                            <td class="py-4 px-4 ">{{ $user->role->role }}</td>
                            <td class="py-4 px-4 ">
                                @if (Auth::id() == $user->id)
                                    <p class="text-success font-bold">Tu es connecté !</p>
                                @elseif($user->role_id == 1)
                                    <p class="text-danger font-bold "> Action refusée !</p>
                                @else
                                    <div class="flex text-center">
                                        <a href="{{route('user.edit', $user->id)}}" class="w-auto my-2 bg-primary rounded-lg text-white mr-1 px-4 py-2">Edit</a>
                                        {{-- @Admin --}}
                                        <form class="my-3" action="{{route('user.destroy', $user->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            @if ((Auth::user()->role_id == 1) && (Auth::user()->id != $user->id))
                                                <button class="w-auto bg-danger rounded-lg text-white px-4 py-2">Delete</button>
                                            @endif
                                        </form>
                                        {{-- @endAdmin --}}
                                    </div>
                                @endif
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                @endWebmaster
            </div>
        </div>
    </div>
</div>


@endsection
{{-- <div class="text-center">
    <h1>Profil de la personne connecté :</h1>
    <h1>Nom : {{Auth::user()->nom}}</h1>
    <h1>Description : {{Auth::user()->description}}</h1>
    <h1>Genre : {{Auth::user()->genre->genre}}</h1>
    <h1>Role : {{Auth::user()->role->role}}</h1>
    <h1>Poste : {{Auth::user()->poste->poste}}</h1>
    <img src="{{asset('img/' . Auth::user()->image)}}" alt="">
</div> --}}