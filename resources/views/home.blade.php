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
        <h2 class="mx-auto mb-10">Welcome to the Tsenene Capital Dashboard</h2><br>
        
          <h3 class="mx-auto mb-5"><em>If you haven't already, start by creating your copany profile</em></h3>
        <a class="btn btn-primary btn-xl" href="{{url('companies/create')}}">Create Company Profile</a>
      </div>
    </section>

    

@endsection
