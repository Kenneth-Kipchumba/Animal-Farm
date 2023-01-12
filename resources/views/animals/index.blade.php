@extends('layouts.app')

@section('content')
<div class="container-fluid">
  <h1 class="text-black-50">Animals List</h1>

  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Expandable Table</h3>
      <button class="btn float-right" data-toggle="modal" data-target="#animal-create">
        Add New Animal
      </button>
    </div>
    <!-- ./card-header -->
    <div class="card-body">
      <table class="table table-bordered table-hover">
        <thead>
          <tr>
            <th>Name</th>
            <th>Tag</th>
            <th>Sex</th>
          </tr>
        </thead>
        <tbody>
          @foreach($animals as $animal)
          <tr data-widget="expandable-table" aria-expanded="false">
          <td>{{ $animal->name }}</td>
          <td>{{ $animal->tag }}</td>
          <td>{{ $animal->sex }}</td>
          <td>
            <button class="btn btn-info btn-sm">
              <i class="fas fa-pen"></i>
            </button>
          </td>
        </tr>
        <tr class="expandable-body d-none">
          <td colspan="5">
            <h4>Brief History</h4>
            <p style="display: none;">
              {{ $animal->brief_history }}
            </p>
          </td>
          </tr>
          @endforeach
        </tbody>
        <tfoot>
            {{ $animals->links() }}
        </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
  </div>

<!--Animal Create Modal -->
<div class="modal fade" id="animal-create" data-coreui-backdrop="static" data-coreui-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">
          Add Animal
        </h5>
        <button type="button" class="btn-close" data-coreui-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{ route('animals.store') }}" multiple>
          @csrf
          <div class="mb-3">
            <label>Choose Breed</label>
            <select name="breed_id" class="form-control" style="width: 100%;" tabindex="-1" aria-hidden="true">
            @foreach($breeds as $breed)
              <option value="{{ $breed->id }}">
                {{ $breed->name }}
              </option>
            @endforeach
            </select>
          </div>

          <div class="mb-3">
            <label for="name" class="form-label">
              Animal Name
            </label>
            <input type="text" class="form-control" name="name" id="name" aria-describedby="name" value="{{ old('name') }}">
            <div id="name" class="form-text">
              e.g Koroiit
            </div>
          </div>

          <div class="mb-3">
            <label>Assign Feedlot</label>
            <select name="feedlot_id" class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
            @foreach($feedlots as $feedlot)
              <option value="{{ $feedlot->id }}">
                {{ $feedlot->name }}
              </option>
            @endforeach
            </select>
          </div>

          <div class="mb-3">
            <div class="row">
              <div class="col">
                <div class="mb-3">
                  <label for="age" class="form-label">
                    Age
                  </label>
                  <input type="text" class="form-control" name="age" id="age" aria-describedby="age" value="{{ old('age') }}">
                    <div id="age" class="form-text">
                      animal age
                    </div>
                </div>
              </div>
              <div class="col">
                <div class="mb-3">
                  <label for="tag" class="form-label">
                    Tag Number
                  </label>
                  <input type="text" class="form-control" name="tag" id="tag" aria-describedby="tag" value="{{ old('tag') }}">
                    <div id="tag" class="form-text">
                      tag number
                    </div>
                </div>
              </div>
            </div>
          </div>

          <div class="mb-3">
            <div class="row">
              <div class="col">
                <label for="entry_weight" class="form-label">
                 Entry Weight
                </label>
                <input type="number" step="0.0001" class="form-control" name="entry_weight" id="entry_weight" aria-describedby="entry_weight" value="{{ old('entry_weight') }}">
                <div id="entry_weight" class="form-text">
                  Weight during purchase
                </div>
              </div>
              <div class="col">
                <label>Sex</label>
                <select name="sex" class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                  <option value="Male">
                    Male
                  </option>
                  <option value="Female">
                    Female
                  </option>
                </select>
              </div>
            </div>
          </div>

          <div class="mb-3">
            <label for="initial_animal_image" class="form-label">
              Upload Animal image
            </label>
            <input type="file" class="form-control" name="initial_animal_image" id="initial_animal_image" aria-describedby="initial_animal_image" value="{{ old('initial_animal_image') }}">
            <div id="initial_animal_image" class="form-text">
              Animal image
            </div>
          </div>

          <div class="mb-3">
            <label for="brief_history" class="form-label">
              Brief History
            </label>
            <textarea class="form-control" id="brief_history" name="brief_history" rows="3">
                {{ old('brief_history') }}
            </textarea>
            <div id="brief_history" class="form-text">
              brief story about the new animal
            </div>
          </div>

                  <button type="submit" class="btn btn-primary float-end">
                    Add Animal
                  </button>
                </form>
              </div>
              <div class="modal-footer">
                
             </div>
          </div>
        </div>
        </div>
        <!-- End Animal Create Modal -->
    </div>
@endsection
