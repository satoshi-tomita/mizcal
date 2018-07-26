{"filter":false,"title":"register.blade.php","tooltip":"/monolist/resources/views/auth/register.blade.php","ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":38,"column":0},"end":{"row":38,"column":0},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":46,"mode":"ace/mode/php"}},"hash":"c1b72a539cac179f58d9fee2d6b2df7c2bd832bc","undoManager":{"mark":1,"position":1,"stack":[[{"start":{"row":0,"column":0},"end":{"row":37,"column":11},"action":"insert","lines":["@extends('layouts.app')","","@section('content')","<div class=\"row\">","    <div class=\"col-xs-offset-3 col-xs-6\">","        <div class=\"panel panel-default\">","            <div class=\"panel-heading\">会員登録</div>","            <div class=\"panel-body\">","                {!! Form::open(['route' => 'signup.post']) !!}","                    <div class=\"form-group\">","                        {!! Form::label('name', 'お名前') !!}","                        {!! Form::text('name', old('name'), ['class' => 'form-control']) !!}","                    </div>","","                    <div class=\"form-group\">","                        {!! Form::label('email', 'メールアドレス') !!}","                        {!! Form::email('email', old('email'), ['class' => 'form-control']) !!}","                    </div>","","                    <div class=\"form-group\">","                        {!! Form::label('password', 'パスワード') !!}","                        {!! Form::password('password', ['class' => 'form-control']) !!}","                    </div>","","                    <div class=\"form-group\">","                        {!! Form::label('password_confirmation', 'パスワード（確認）') !!}","                        {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}","                    </div>","","                    <div class=\"text-right\">","                        {!! Form::submit('登録する', ['class' => 'btn btn-success']) !!}","                    </div>","                {!! Form::close() !!}","            </div>","        </div>","    </div>","</div>","@endsection"],"id":1}],[{"start":{"row":37,"column":11},"end":{"row":38,"column":0},"action":"insert","lines":["",""],"id":2}]]},"timestamp":1532073370781}