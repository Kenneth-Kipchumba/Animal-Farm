@extends('layouts.app')

@section('content')
<div class="container-fluid">
  <h1 class="text-black-50">Purchases List</h1>

  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Expandable Table</h3>
      <button class="btn float-right" data-toggle="modal" data-target="#purchase-create">
        Add New Purchase
      </button>
    </div>
    <!-- ./card-header -->
    <div class="card-body">
      <table class="table table-bordered table-hover">
        <thead>
          <tr>
            <th>Seller</th>
            <th>Price</th>
            <th>Date</th>
          </tr>
        </thead>
        <tbody>
          @foreach($purchases as $purchase)
          <tr>
          <td>
            <a href="{{ route('purchases.show', $purchase->id) }}">
              {{ $purchase->seller }}
            </a>
          </td>
          <td>{{ $purchase->price }}</td>
          <td>{{ $purchase->date }}</td>
          <td>
            <button class="btn btn-info btn-sm">
              <i class="fas fa-pen"></i>
            </button>
          </td>
        </tr>
          @endforeach
        </tbody>
        <tfoot>
            {{ $purchases->links() }}
        </tfoot>
      </table>
    </div>
    <!-- /.card-body -->
  </div>

  <!--purchase Create Modal -->
  <div class="modal fade" id="purchase-create" data-backdrop="static" tabindex="-1" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">
            Add purchase
          </h5>
          <button type="button" class="close" data-dismiss="modal">
            &times;
          </button>
        </div>
        <div class="modal-body">
          <form method="POST" action="{{ route('purchases.store') }}" multiple>
            @csrf
            <div class="mb-3">
              <label>Choose Animal</label>
              <select name="breed_id" class="form-control" style="width: 100%;" tabindex="-1" aria-hidden="true">
                <option selected>--</option>
                @foreach($animals as $animal)
                  <option value="{{ $animal->id }}">
                    {{ $animal->name }}
                  </option>
                @endforeach
              </select>
            </div>

            <div class="mb-3">
              <label for="name" class="form-label">
                purchase Name
              </label>
              <input type="text" class="form-control" name="name" id="name" aria-describedby="name" value="{{ old('name') }}">
              <div id="name" class="form-text">
                e.g Koroiit
              </div>
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
                        purchase age
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
              <label for="initial_purchase_image" class="form-label">
                Upload purchase image
              </label>
              <input type="file" class="form-control" name="initial_purchase_image" id="initial_purchase_image" aria-describedby="initial_purchase_image" value="{{ old('initial_purchase_image') }}">
              <div id="initial_purchase_image" class="form-text">
                purchase image
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
                brief story about the new purchase
              </div>
            </div>

            <button type="submit" class="btn btn-primary float-end">
              Add purchase
            </button>
          </form>
        </div>
      <div class="modal-footer">
                  
      </div>
      </div>
    </div>
  </div>
  <!-- End purchase Create Modal -->
</div>

@endsection
