{{-- FORM RICERCA --}}
<form id="searchForm" action="{{ route('property.filter') }}" class="row g-2 mt-1" method="GET">

    <div class="col-md-4">
        <input type="text" class="form-control" placeholder="Titolo, Descrizione" name="inputTitle" value="{{ request('inputTitle') }}">
    </div>
    
    <div class="col-md-3">
        <select class="form-select" name="cityInput">
            <option value="" {{ !request('cityInput') ? 'selected' : '' }}>Città</option>
            @foreach ($properties->unique('city') as $property)
                <option value="{{ $property->city }}" @selected(request('cityInput') == $property->city)>
                    {{ $property->city }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="col-md-2">
        <select class="form-select" name="roomsInput">
            <option value="" {{ !request('roomsInput') ? 'selected' : '' }}>Stanze</option>
            @foreach ($properties->unique('rooms') as $property)
                <option value="{{ $property->rooms }}" @selected(request('roomsInput') == $property->rooms)>
                    {{ $property->rooms }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="col-md-2">
        <button type="submit" class="btn btn-success w-100">Cerca</button>
    </div>
</form>