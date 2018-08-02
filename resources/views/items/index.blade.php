@extends('layouts.app')

@section('cover')
    <div class="cover">
        <div class="cover-inner">
            <div class="cover-contents">
                <h1>気になるモノが見つかるサイト</h1>
            </div>
        </div>
    </div>
@endsection

@section('content')
    @include('items.items')
    {!! $items->render() !!}
@endsection
