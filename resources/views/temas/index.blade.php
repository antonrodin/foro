@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Temas</div>

                    <div class="panel-body">
                        @foreach($temas as $tema)
                            <article>
                                <h4><a href="{{ url("temas/{$tema->id}") }}">{{ $tema->title }}</a></h4>
                                <div class="body">{{ $tema->body }}</div>
                            </article>
                            <hr>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection