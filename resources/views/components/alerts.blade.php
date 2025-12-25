{{-- Alert successo --}}
@if (session()->has('success'))
    <div class="row justify-content-center mb-4">
        <div class="col-md-8">
            <div class="alert alert-success alert-dismissible fade show shadow-sm rounded-3" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    </div>
@endif

{{-- Alert warning --}}
@if (session()->has('warning'))
    <div class="row justify-content-center mb-4">
        <div class="col-md-8">
            <div class="alert alert-warning alert-dismissible fade show shadow-sm rounded-3" role="alert">
                {{ session('warning') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    </div>
@endif

{{-- Alert danger --}}
@if (session()->has('danger'))
    <div class="row justify-content-center mb-4">
        <div class="col-md-8">
            <div class="alert alert-danger alert-dismissible fade show shadow-sm rounded-3" role="alert">
                {{ session('danger') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        </div>
    </div>
@endif