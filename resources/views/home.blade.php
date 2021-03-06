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
                    Anda Login Sebagai <h3>{{ Auth::user()->name}}</h3>
                    Selamat datang di website kita

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
