@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @can('isAdmin')
                    <div class="btn btn-success">
                    You have Admin Access
                    </div>
                    @elsecan('isManager')
                    <div class="btn btn-success">
                    You have manager Access
                    </div>
                    @else
                    <div class="btn btn-success">
                    You have user Access
                    </div>
                    @endcan
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
