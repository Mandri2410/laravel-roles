@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('You are logged in!') }}
                    <p>This is your application dashboard.</p>
                    <div class="row mt-4">
                        @canany(['create-role', 'edit-role', 'delete-role'])
                            <div class="col-md-4 mb-3">
                                <a class="btn btn-primary w-100" href="{{ route('roles.index') }}">
                                    <i class="bi bi-person-fill-gear"></i> Manage Roles
                                </a>
                            </div>
                        @endcanany
                        @canany(['create-user', 'edit-user', 'delete-user'])
                            <div class="col-md-4 mb-3">
                                <a class="btn btn-success w-100" href="{{ route('users.index') }}">
                                    <i class="bi bi-people"></i> Manage Users
                                </a>
                            </div>
                        @endcanany
                        @canany(['create-product', 'edit-product', 'delete-product'])
                            <div class="col-md-4 mb-3">
                                <a class="btn btn-warning w-100" href="{{ route('products.index') }}">
                                    <i class="bi bi-bag"></i> Manage Products
                                </a>
                            </div>
                        @endcanany
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
