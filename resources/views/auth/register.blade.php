
<x-layout>
    <div class=" container-fluid  h-100 p-0" style= "margin-top: 150px; margin-bottom: 120px">
        <div class="d-flex flex-column justify-content-center align-items-center mt-5 ">
           <h1><a class="navbar-brand fw-bold text-white mt-4 border-bottom pb-2" href="/">Immobili<span
                        style="background: linear-gradient(90deg, #7C3AED, #188ea3); -webkit-background-clip: text; -webkit-text-fill-color: transparent;">Live</span></a>
            </h1>
            <h2 class="m-3">Registrati sul nostro sito</h2>
            <form action="{{ route('register.store') }}" method="POST" class="ms-3 mt-3 col-3">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputname" class="form-label"><span class="fs-5 fw-semibold">Nome</span></label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="exampleInputname" name="name">
                    @error('name')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
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
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword2" class="form-label"><span class="fs-5 fw-semibold">Conferma Password</span></label>
                    <input type="password" class="form-control" id="exampleInputPassword2" name="password_confirmation">
                </div>
                <button type="submit" class="btn btn-primary">Registrati</button>
            </form>
        </div>
    
    </div>
</x-layout>
