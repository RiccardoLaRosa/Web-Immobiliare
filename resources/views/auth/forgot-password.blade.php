<x-layout>
    <div class=" container-fluid  h-100 p-0">
        <div class="d-flex flex-column justify-content-center align-items-center mt-5 ">
            <h1><a class="navbar-brand fw-bold text-primary mt-4 border-bottom pb-2" href="/">ImmobiliLive</a></h1>
            <h2 class="m-3">Recupera la tua password</h2>
            <form action="{{ route('password.email') }}" method="POST" class="ms-3 mt-3 col-3">
                @csrf

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label"><span class="fs-5 fw-bold">Email</span></label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                    @error('email')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Recupera</button>
            </form>
        </div>
    </div>
</x-layout>