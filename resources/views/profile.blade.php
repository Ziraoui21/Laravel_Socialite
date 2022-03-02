@extends("main")

@section('title')
    Profile - {{$user->name}}
@endsection

@section('content')
    <div class="container">
        <div class="card text-center mt-5">
            <div class="card-header">
              Profile
            </div>
            <div class="card-body">
                <img src="{{$user->avatar_path}}" class="mb-5 rounded-circle">
              <h5 class="card-title"><i class="fas fa-user"></i> {{$user->name}}</h5>
              <p class="card-text"><i class="fas fa-envelope"></i> {{$user->email}}</p>
            </div>
          </div>
    </div>
@endsection