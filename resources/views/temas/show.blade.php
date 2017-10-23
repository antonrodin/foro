@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Temas</div>

                    <div class="panel-body">
                        <article>
                            <h2>{{ $tema->title }}</h2>
                            <div class="body">{{ $tema->body }}</div>
                        </article>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">

                    @foreach($tema->respuestas as $respuesta)
                        <div class="panel-heading">
                            {{ $respuesta->user->name }} hace
                            {{ $respuesta->created_at->diffForHumans() }}
                        </div>
                        <div class="panel-body">
                            <article>
                                <div class="body">{{ $respuesta->body }}</div>
                            </article>
                        </div>
                        <hr>
                    @endforeach
                </div>
            </div>
        </div>

        @if(auth()->check())
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                    <form method="POST" action="{{ url("temas/{$tema->id}/responder") }}">

                        {{ csrf_field() }}

                        <div class="form-group">
                            <textarea placeholder="¿Tienes algo que decir?" name="body" id="body" class="form-control" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-default">Responder</button>
                    </form>
            </div>
        </div>
        @endif
    </div>
@endsection