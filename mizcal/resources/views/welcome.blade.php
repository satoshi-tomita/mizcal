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
    @include('items.items')
    {!! $items->render() !!}
@endsection
