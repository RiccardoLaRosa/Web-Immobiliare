<x-layout>
        <div class=" container-fluid  h-100 p-0">
         <div class="d-flex flex-column justify-content-center align-items-center mt-5 ">
            <h1><a class="navbar-brand fw-bold text-primary mt-4 border-bottom pb-2" href="/">ImmobiliLive</a></h1>
            <h2 class="m-3">Accedi al tuo Profilo</h2>
            <form action="{{ route('login.store') }}" method="POST" class="ms-3 mt-3 col-5">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label"><span class="fs-5 fw-semibold">Email</span></label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                    @error('email')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label"><span class="fs-5 fw-semibold">Password</span></label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" id="exampleInputPassword1" name="password">
                    @error('password')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                    <a href="{{route('password.request')}}"><h6 class="mt-2">Password Dimenticata</h6></a>
                </div>
                <button type="submit" class="btn btn-primary">Accedi</button>
            </form>
         </div>
        </div>
</x-layout>
