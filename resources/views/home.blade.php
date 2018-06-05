@extends('layouts.app')

@section('content')



<!-- Callout -->
    <section class="callout">
      <div class="container text-center">
        <div class="panel panel-default">
                

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
        <h2 class="mx-auto mb-5">Welcome to
          <em>your</em>
          Dashboard</h2>

          <h3 class="mx-auto mb-5">Start by creating a new company </h3>
        <a class="btn btn-primary btn-xl" href="{{url('companies/create')}}">Create New Company</a>
      </div>
    </section>

    

@endsection
