@extends('layouts.app')

@section('cover')
    <div class="cover">
        <div class="cover-inner">
            <div class="cover-contents">
                <h1>気になるモノが見つかるサイト</h1>
                @if (!Auth::check())
                    <a href="{{ route('signup.get') }}" class="btn btn-success btn-lg">Mizcalで見つける</a>
                @endif
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="col-xs-12">
        <ul class="nav nav-tabs nav-justified">
            <li role="presentation" class="{{ Request::is('/') ? 'active' : '' }}"><a href="{{ route('welcome') }}">全てのアイテム</a></li>
            <li role="presentation" class="{{ Request::is('genres?id=560202') ? 'active' : '' }}"><a href="{{ route('genres.index', ['id' => 560202]) }}">スマートフォン</a></li>
            <li role="presentation" class="{{ Request::is('genres?id=560029') ? 'active' : '' }}"><a href="{{ route('genres.index', ['id' => 560029]) }}">タブレット</a></li>
        </ul>
        @include('items.items')
        {!! $items->render() !!}
    </div>
@endsection
