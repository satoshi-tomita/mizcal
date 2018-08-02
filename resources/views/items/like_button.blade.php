@if (Auth::user()->is_like($item->code))
    {!! Form::open(['route' => 'item_user.dont_like', 'method' => 'delete']) !!}
        {!! Form::hidden('itemCode', $item->code) !!}
        {!! Form::submit('Like', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}
@else
    {!! Form::open(['route' => 'item_user.like']) !!}
        {!! Form::hidden('itemCode', $item->code) !!}
        {!! Form::submit('Like it', ['class' => 'btn btn-warning']) !!}
    {!! Form::close() !!}
@endif
