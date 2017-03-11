@extends('layouts.master')
@section('content')
<div class="divTableTitle">
    Login
</div>
<div class="demo-card-wide mdl-card mdl-shadow--2dp">
    <form method="POST" action="/login">
        {{ csrf_field() }}
        <div class="mdl-card__supporting-text" style="margin: 0 auto">
            <div class="mdl-textfield mdl-js-textfield" style="width:100%">
                <input class="mdl-textfield__input" type="email" id="email" name="email" required>
                <label class="mdl-textfield__label" for="email">Email</label>
            </div>
            <div class="mdl-textfield mdl-js-textfield" style="width:100%">
                <input class="mdl-textfield__input" type="password" id="password" name="password" required>
                <label class="mdl-textfield__label" for="password">Password</label>
            </div>
            <br/>
            <br/>
        </div>
        <div class="mdl-card__actions mdl-card--border">
            <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent">
            Log in
            </button>
        </div>
    </form>
</div>
@endsection