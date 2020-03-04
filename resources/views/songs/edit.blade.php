@extends('songs.layout')
@section('content')

    <div class = "row">
        <div class = "col-lg-12 margin-tb">
            <div class = "pull-left">
                <h2> Edit Song </h2>
            </div>
            <div class = "pull-right">
                <a class = "btn btn-primary" href = "{{ route('songs.index') }}" style = "position: absolute; top: 12.5em; left: 65.2em; width: 5em; height: 2.5em"> Back </a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class = "alert alert-danger">
            <strong> Warning! </strong> Please check input field code <br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action = "{{ route('songs.update',$song->id) }}" method = "POST">
        @csrf
        @method('PUT')
   
         <div class = "row">
            <div class = "col-xs-12 col-sm-12 col-md-12">
                <div class = "form-group">
                    <strong> Title: </strong>
                    <input type = "text" name = "title" value = "{{ $song->title }}" class = "form-control" placeholder = "Title">
                </div>
            </div>
            <div class = "col-xs-12 col-sm-12 col-md-12">
                <div class = "form-group">
                    <strong> Description: </strong>
                    <input class = "form-control" name = "genre" value = "{{ $song->genre }}"> </input>
                </div>
            </div>
            <div class  = "col-xs-12 col-sm-12 col-md-12 text-center">
              <button type = "submit" class = "btn btn-primary" style = "position: absolute; width: 5em; height: 2.5em; left: 59em; top: -.10em"> Submit </button>
            </div>
        </div>
   
    </form>
@endsection