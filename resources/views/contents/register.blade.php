@extends('layout.template')

@section('konten')
    <div class="card m-5 shadow">
        <div class="card-body">
            <div class="card-title fs-1 text-center">Register</div>
            <form action="{{ route('register') }}" method="POST">
                @csrf
                <label for="" class="form-text fs-5">Email</label>
                <input type="text" class="form-control" name="email" id="" require>
                <label for="" class="form-text fs-5 mt-2">username</label>
                <input type="text" name="username" class="form-control" id="" require>
                <label for="" class="form-text fs-5 mt-2" >Password</label>
                <input type="password" name="password" class="form-control" id="" require>
                <input type="submit" value="Register" class="btn btn-primary btn-block mt-3 w-100 mx-auto">
            </form>
        </div>
    </div>
@endsection