@extends('layouts.main')

@section('title', 'Dashboard')

@section('contents')
<div class="container">
    <div class="row center">
        <div class="m8">
            <div class="card">
                <div class="card-content">
                    <span class="card-title">Dashboard</span>
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    You are logged in!
                </div>                    
            </div>
        </div>
    </div>
</div>
@endsection
