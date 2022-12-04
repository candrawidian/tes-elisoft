@extends('layouts.admin')

@section('content')

<!-- page content -->
<div class="right_col" role="main">
  <!-- top tiles -->
  <h1> All User</h1>
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
          <form method="POST" action="{{ route('users.store') }}">
                @csrf
                <div>
                    <input type="text" class="form-control mb-4 @error('name') is-invalid @enderror" name="name" placeholder="Username" value="{{ old('name') }}" required="" />
                    @error('name')
                    <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror 
                </div>
                <div>
                    <input type="email" name="email" class="form-control mb-4 @error('email') is-invalid @enderror" placeholder="Email" value="{{ old('email') }}" required="" />
                    @error('email')
                    <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror  
                </div>
                <div>
                    <input type="password" name="password" class="form-control mb-4 @error('password') is-invalid @enderror" placeholder="Password" required="" />
                    @error('password')
                    <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                </div>
                <div>
                    <input type="password" name="password_confirmation" class="form-control @error('password_confirmation') is-invalid @enderror" placeholder="Password Confirmation" required="" />
                    @error('password_confirmation')
                    <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                </div>
                <div>
                    <button class="btn btn-primary btn-block mt-2" type="submit">Add User</button>
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