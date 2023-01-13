@extends('layouts.app')

@section('content')
<div class="container-fluid">

  <h1 class="text-black-50 mt-2">
    {{ $animal->name }}
    <a href="#" class="btn btn-app bg-info">
     {{ $animal->tag }}
    </a>
  </h1>

  <div class="card">
    <div class="card-header">
      <h3 class="card-title">Details</h3>
      <button class="btn float-right" data-toggle="modal" data-target="#record-weight">
        Record Animal Weight
      </button>
    </div>
    <!-- ./card-header -->
    <div class="card-body">
      <div class="row">
        <div class="col">
          <h4>Display Animal Breed here</h4>
          <img src="{{ asset('assets/img/bull.jpg') }}" class="img-thumbnail img-fluid" alt="Default Animal Image" style="width: 20rem; height: 20rem;">
          <hr>
          @if(count($weights) > 0)
          <div class="table-responsive">
            <table class="table table-sm">
              <thead>
                <th>Sale</th>
                <th>Purchase</th>
                <th>Value</th>
              </thead>
              <tbody>
                <tr title="">
                  <td>{{ $sale->price ?? 'Null' }}</td>
                  <td>{{ $purchase->price ?? 'Null' }}</td>
                  <td></td>
                </tr>
              </tbody>
            </table>
          </div>
          @endif
        </div>
        <div class="col">
          @if(count($weights) > 0)
          <div class="table-responsive">
            <table class="table table-sm">
              <thead>
                <th>Date Measured</th>
                <th>Weight</th>
              </thead>
              <tbody>
                @foreach($weights as $weight)
                <tr title="Recorded by {{ $weight->created_by }}">
                  <td>{{ date('D, d/M/Y', strtotime($weight->date)) }}</td>
                  <td>{{ $weight->weight }} Kgs</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
          @endif
        </div>
      </div>
    </div>
    <!-- /.card-body -->
  </div>

  <!--Weight Create Modal -->
  <div class="modal fade" id="record-weight" data-backdrop="static" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">
            Record Weight
          </h5>
          <button type="button" class="close" data-dismiss="modal">
            &times;
          </button>
        </div>
        <div class="modal-body">
          <form method="POST" action="{{ route('weights.store') }}">
            @csrf

            <input type="hidden" name="animal_id" value="{{ $animal->id }}">
            <div class="mb-3">
              <label for="weight" class="form-label">
               Enter Measured Weight
              </label>
              <input type="number" step="0.0001" class="form-control" name="weight" id="weight" aria-describedby="weight" value="{{ old('weight') }}">
              <div id="weight" class="form-text">
                
              </div>
            </div>

            <div class="mb-3">
              <label for="date" class="form-label">
               Date measurement was taken
              </label>
              <input type="date" class="form-control" name="date" id="date" aria-describedby="date" value="{{ old('date') }}">
              <div id="date" class="form-text">
                
              </div>
            </div>

            <button type="submit" class="btn btn-primary float-end">
              Record
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
