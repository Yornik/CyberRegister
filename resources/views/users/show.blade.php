@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">
                    <strong>{{ $user->name }}</strong>
                    @foreach($user->expertises->sortBy('cyber_expertise_id') as $expertise)
                        {{ $expertise->code }}
                    @endforeach
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if(!is_null($user->expertises))
                    <table width="100%">
                    @foreach($user->expertises->sortBy('cyber_expertise_id') as $expertise)
                        <tr>
                            <td>{{ $expertise->code }}</td>
                            <td>{{ $expertise->description }}</td>
                            <td>@if($expertise->date_of_expiration)geldig tot {{  $expertise->date_of_expiration->format('Y-m-d') }}@endif</td>
                        </tr>
                    @endforeach
                    </table>
                    @endif
                    @if(!empty($user->photo))
                        <img src="{{ $user->photo }}" alt="{{ $user->name }}" width="100%" />
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
