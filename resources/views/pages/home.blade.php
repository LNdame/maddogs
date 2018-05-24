@extends('layouts.app')

@section('content')

<section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">Welcome to the SME Evaluation Tool</h1>
          <p class="lead text-muted">If you have already registered with us proceed to login, if not, click the register button below.</p>
          <p>
            <a href="/login" class="btn btn-primary my-2">Login</a>
            <a href="/register" class="btn btn-secondary my-2">Register</a>
          </p>
        </div>
</section>

@endsection
