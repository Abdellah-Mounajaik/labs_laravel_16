@extends('adminlte::page')
@section('content')
@include('layouts.flash')
<div class="container mt-2">
    <h1 style="color: #2be6ab" class="my-4 text-center">Tag & Catégorie</h1>
    <div class="row">
        <div class="col-6">
            <table class="table bg-white">
                <thead>
                    <tr>
                        <th scope="col">Categorie</th>
                        <th scope="col"></th>
                        <th scope="col"></th>

                        <th scope="col"><a href="{{route('categorie.create')}}">Ajouter</a>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $categorie)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$categorie->categorie}}</td>
                            <td></td>
                            <td>
                                <form action="{{route('categorie.destroy', $categorie->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Supprimer</button>
                                </form>
                            </td>
                            <td></td>
                        </tr>                        
                    @endforeach
                </tbody>
            </table>

        </div>
        <div class="col-6">
            <table class="table bg-white ">
                <thead>
                    <tr>
                        <th scope="col">Tags</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                       

                        <th scope="col"><a href="{{route('tag.create')}}">Ajouter</a>
                        </th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($tags as $tag)
                        <tr>
                            <th scope="row">{{$loop->iteration}}</th>
                            <td>{{$tag->tag}}</td>
                            <td></td>
                            <td></td>
                            <td>
                                <form action="{{route('tag.destroy', $tag->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Supprimer</button>
                                </form>
                            </td>
                        </tr>                        
                    @endforeach
                </tbody>
            </table>

        </div>

    </div>

</div>

@endsection