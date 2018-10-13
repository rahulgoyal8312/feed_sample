@extends('Layout.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                
                @if( $role == '1')
                <div class="card-header">Dashboard [Admin]</div>
                @else
                <div class="card-header">Dashboard</div>
                @endif
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

        @foreach($post as $key=>$value)
        <div class="col-sm-12 col-md-12">
            <div class="card">
                <div class="card-header">{{$value->title}}</div>
                <div class="card-body"> {{$value->body}}</div>
            </div>
        </div>
        <br>
        @endforeach
            </div>
        </div>
    </div>

    </div>
</div>

@endsection
