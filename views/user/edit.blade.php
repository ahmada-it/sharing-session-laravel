@extends('pages.layout.layout')
@section('content')

<div class="content-wrapper">
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <form method="POST" action="{{ route('user.update', ['id' => $user->id]) }}">
            <div class="card">
              <div class="card-header">
                <h4>Form Edit Data User {{$user->name}}</h4>
                <div class="card-header-form">
                </div>
              </div>
              <div class="card-body">
                @csrf
                <input name="_method" type="hidden" value="PATCH">
                <div class="row">
                  <div class="col-6">
                    <div class="form-group">
                      <label for="name">Name</label>
                      <input id="name" type="text" class="form-control" name="name" placeholder="Name"
                        value="{{$user->name}}">
                    </div>
                    <div class="form-group">
                      <label for="name">Email</label>
                      <input id="email" type="email" class="form-control" name="email" placeholder="Email"
                        value="{{$user->email}}">
                    </div>
                    <div class="form-group">
                      <label for="name">Password</label>
                      <input id="password" type="password" class="form-control" name="password" placeholder="Password"
                        value="{{$user->password}}">
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg" tabindex="4">
                      <i class="fas fa-pen"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
        </div>
        </form>
      </div>
    </div>
</div>
</section>
</div>

@endsection