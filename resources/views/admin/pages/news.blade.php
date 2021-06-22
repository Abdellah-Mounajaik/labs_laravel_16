@extends('adminlte::page')
@section('content')
    <h1 style="color: #2be6ab" class="my-4 text-center">Tous les membres inscrits de la newsletter</h1>
    <div class="mt-5 container">
        <table class="table bg-white rounded-md">
            <thead>
                <tr style="color: #6a23b5">
                    <th scope="">#</th>
                    <th scope="">Email</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($newsletter as $item)
                    <tr>
                        <th>{{$loop->iteration}}</th>
                        <td>{{$item->mail}}</td>
                    </tr>
                    @empty
                        <tr>
                            <td>Pas de mails inscrits</td>
                        </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection