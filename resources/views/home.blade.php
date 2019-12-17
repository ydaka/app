@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background-color:#333; color:#ffffff;" align="center">
                    Bienvenido, ¡Estás conectado!
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="card">
                            <div class="card-body">
                                <div class="tenor-gif-embed" data-postid="10464987" data-share-method="host" data-width="100%" data-aspect-ratio="1.0">
                                    <!--a href="https://tenor.com/view/fate-padoru-christmas-gif-10464987">Fate Padoru Christmas GIF</a> from 
                                    <a href="https://tenor.com/search/fatepadoru-gifs">Fatepadoru GIFs</a-->
                                </div>
                            </div>
                    </div>
                    <script type="text/javascript" async src="https://tenor.com/embed.js"></script>
            </div>
        </div>
    </div>
</div>
@endsection
