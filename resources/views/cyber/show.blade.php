@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">Cyber Expertise</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif

                    TODO: more than just {{ $cyberExpertise->expertise_code }} requires {{ $cyberExpertise->required_points }} / 2 yr
                    <p>
                       {{ $cyberExpertise->description }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
