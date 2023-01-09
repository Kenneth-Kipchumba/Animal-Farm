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
                      <td>$animal->name</td>
                      <td>$animal->tag</td>
                      <td>$animal->sex</td>
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

        <!--Job Create Modal -->
        <div class="modal fade" id="animal-create" data-coreui-backdrop="static" data-coreui-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">
                  Create Job
                </h5>
                <button type="button" class="btn-close" data-coreui-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form method="POST" action="{{ route('animals.store') }}" multiple>
                  @csrf
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
                    <label for="tag" class="form-label">
                      Animal Tag
                    </label>
                    <input type="text" class="form-control" name="tag" id="tag" aria-describedby="tag" value="{{ old('tag') }}">
                    <div id="tag" class="form-text">
                      tag number
                    </div>
                  </div>

                  <div class="form-group">
                  <label>Select animal breed</label>
                  <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                    <option selected="selected" data-select2-id="3">Friesan - Pure Breed</option>
                    <option data-select2-id="33">Friesan - Pure Breed</option>
                    <option data-select2-id="33">Friesan - Mixed Breed</option>
                    <option data-select2-id="34">Ashyre - Mixed Breed</option>
                    <option data-select2-id="35">Ashyre - Pure Breed</option>
                  </select>
                  <span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" data-select2-id="2" style="width: 100%;">
                    <span class="selection">
                        <span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-ndq8-container">
                            <span class="select2-selection__rendered" id="select2-ndq8-container" role="textbox" aria-readonly="true" title="Friesan - Pure Breed">
                                Friesan - Pure Breed
                            </span>
                            <span class="select2-selection__arrow" role="presentation">
                                <b role="presentation"></b>
                            </span>
                        </span>
                    </span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                </div>

                <div class="form-group">
                  <label>Sex</label>
                  <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                    <option selected="selected" data-select2-id="3">Male</option>
                    <option data-select2-id="33">Female</option>
                  </select><span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" data-select2-id="2" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-ndq8-container"><span class="select2-selection__rendered" id="select2-ndq8-container" role="textbox" aria-readonly="true" title="Male">Male</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                </div>

                <div class="mb-3">
                    <div class="row">
                      <div class="col">
                        <label for="buying_weight" class="form-label">
                         Buying Weight
                        </label>
                        <input type="number" step="0.0001" class="form-control" name="buying_weight" id="buying_weight" aria-describedby="buying_weight" value="{{ old('buying_weight') }}">
                        <div id="buying_weight" class="form-text">
                          Weight during purchase
                        </div>
                      </div>
                      <div class="col">
                        <label for="buying_price" class="form-label">
                         Buying Price
                        </label>
                        <input type="number" step="0.01" class="form-control" name="buying_price" id="buying_price" aria-describedby="buying_price" value="{{ old('buying_price') }}">
                        <div id="buying_price" class="form-text">
                          Buying Price
                        </div>
                      </div>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="brought_from" class="form-label">
                      Brougt from
                    </label>
                    <input type="text" class="form-control" name="brought_from" id="brought_from" aria-describedby="brought_from" value="{{ old('brought_from') }}">
                    <div id="brought_from" class="form-text">
                      origin
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



                  <div class="mb-3">
                    <div class="row">
                      <div class="col">
                        <label for="buying_date" class="form-label">
                          Date animal was bought
                        </label>
                        <input type="date" id="buying_date" name="buying_date" class="form-control">
                      </div>
                      <div class="col">
                        <!-- <label for="end_date" class="form-label">
                          End Date
                        </label>
                        <input type="date" id="end_date" name="end_date" class="form-control"> -->
                      </div>
                    </div>
                  </div>

                  <button type="submit" class="btn btn-primary float-end">
                    Buy
                  </button>
                </form>
              </div>
              <div class="modal-footer">
                
            </div>
          </div>
        </div>
        </div>
        <!-- End Job Create Modal -->
    </div>
@endsection
