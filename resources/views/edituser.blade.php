@extends('layouts.admin')

@section('content')

<!-- page content -->
<div class="right_col" role="main">
    <!-- top tiles -->
    <h1> Edit User {{ ucwords($user->name) }}</h1>
    <!-- Notifikasi menggunakan flash session data -->
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    @if (session('error'))
    <div class="alert alert-error">
        {{ session('error') }}
    </div>
    @endif
    <div class="row">
        <div class="col-md-6 col-sm-6 ">
            <div class="animate form login_form">
                <form method="POST" action="{{ route('users.update', $user->id) }}">
                    @csrf
                    @method('PUT')
                    <div>
                        <input type="text" class="form-control mb-4 @error('name') is-invalid @enderror" name="name" placeholder="Username" value="{{ old('name',$user->name) }}" required="" />
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div>
                        <input type="email" name="email" class="form-control mb-4 @error('email') is-invalid @enderror" placeholder="Email" value="{{ old('email',$user->email) }}" required="" />
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div>
                        <button class="btn btn-primary btn-block mt-2" type="submit">Update User</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /top tiles -->
    <br />


</div>
<!-- /page content -->

@endsection