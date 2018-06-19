@if (Auth::id() != $user->id)

    @if (Auth::user()->favorites($user->id))
                        {!! Form::open(['route' => ['user.unfavorite', $micropost->micropost_id], 'method' => 'delete']) !!}
                        {!! Form::submit('Unfavorite', ['class' => "btn btn-danger btn-xs"]) !!}
                        {!! Form::close() !!}
    @else
                        {!! Form::open(['route' => ['user.favorite', $micropost->micropost_id]]) !!}
                        {!! Form::submit('Favorite', ['class' => "btn btn-primary btn-xs"]) !!}
                        {!! Form::close() !!}
    @endif
@endif    
