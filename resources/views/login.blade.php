@extends('Layouts.app')
@section('content')
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header">
                                        <h3 class="text-center font-weight-light my-4">Login</h3>
                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $item)
                                                        <li>{{$item}}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="card-body">
                                        <form action="" method="POST">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="inputEmail">Email</label>
                                                <input class="form-control" value="{{old('email')}}" id="email" type="email" placeholder="name@example.com" name="email"/>
                                            </div>
                                            <div class="mb-3">
                                                <label for="inputPassword">Password</label>
                                                <input class="form-control" value="{{old('password')}}" id="password" type="password" placeholder="Password" name="password" />
                                            </div>
                                            <div class="mb-3 d-grid">
                                                <button name="submit" type="submit" class="btn btn-primary">Login</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('js/scripts.js')}}"></script>
@endsection
