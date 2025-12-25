 {{-- FORM RICERCA --}}
 <form id="searchForm" action="{{ route('property.filter') }}" class="row g-2 mt-3" method="GET">
     <div class="col-md-7">
         <input type="text" class="form-control" placeholder="Titolo, Descrizione" name="inputTitle">
     </div>
     <div class="col-md-3">
         <select class="form-select" name="cityInput">
             <option selected>Città</option>
             @foreach ($properties as $property)
                 <option>{{ $property->city }}</option>
             @endforeach
         </select>
     </div>
     <div class="col-md-2">
         <button type="submit" class="btn btn-success w-100">Cerca</button>
     </div>
 </form>
