@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1>Hello {!! $name !!}</h1>
                    <h3>{!! $age !!}</h3>
                    {!! Auth::user()->name !!}
                    You are logged in {!! Auth::user()->email !!}

        <!--             <form method="POST" action="/about">
                     <button type="submit" class="btn btn-primary">
                    about
                    </button>
                    </form> -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
