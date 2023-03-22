@extends('parts.layout')

@section('content')
<div class="centered">
    <img src="https://assets-cdn.kahoot.it/controller/v2/assets/icn_kahoot_logo-58b66a21.svg">
    <div class="" style="margin-bottom: 5%;"></div>
    <article class="card vertical">
        <form method="POST" action="{{ route ('getGame-post') }}">
            @csrf
            <div class="card-body ">
                <input id="gamepin" name="gamepin" type="text" class="width-100p" placeholder="Game PIN" />
            </div>
            <footer class="card-footer">
                <button type="submit" class="button style-dark edge-round-sm width-100p">Enter</button>
            </footer>
        </form>
    </article>
</div>
@endsection