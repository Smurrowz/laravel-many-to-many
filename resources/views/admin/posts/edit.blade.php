@extends('layouts.app')
@section('content')
<h1 class="text-center"> Modifica il post</h1>
<form action="{{route('admin.posts.update',$post)}}" method="POST"> 
  @csrf
  @method('PUT')
  <div class="mb-3">
    <label for="title" class="form-label">Titolo</label>
    <input type="text" name="title" class="form-control" id="title" value="{{$post['title']}}" placeholder="Inserisci il titolo">
  </div>
  <div class="mb-3">
    <label for="content" class="form-label">Contenuto:</label>
    <textarea class="form-control" id="content"  placeholder="Inserisci il contenuto del post" name="content" rows="20">{{$post['content']}}</textarea>
  </div>
  <div class="d-flex justify-content-around">
    <a class="btn btn-primary" href="{{route('admin.posts.show', $post)}}" role="button">Torna al post</a>
    <input type="submit" class="btn btn-success" role="button" value="Salva Modifiche">
  </div>

</form>
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
@endsection