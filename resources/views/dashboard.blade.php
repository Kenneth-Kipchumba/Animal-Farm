@extends('layouts.app')

@section('content')
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
     <div class="row mt-2">
       <div class="col-lg-3 col-6">
         <!-- small box -->
         <div class="small-box bg-info">
           <div class="inner">
             <h3>{{ $total_animals }}</h3>

             <p>Animals</p>
           </div>
           <div class="icon">
             <i class="ion ion-bag"></i>
           </div>
           <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
         </div>
       </div>
       <!-- ./col -->
       <div class="col-lg-3 col-6">
         <!-- small box -->
         <div class="small-box bg-success">
           <div class="inner">
             <h3>{{ $total_breeds }}</h3>

             <p>Breeds</p>
           </div>
           <div class="icon">
             <i class="ion ion-stats-bars"></i>
           </div>
           <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
         </div>
       </div>
       <!-- ./col -->
       <div class="col-lg-3 col-6">
         <!-- small box -->
         <div class="small-box bg-warning">
           <div class="inner">
             <h3>{{ $total_feedlots }}</h3>

             <p>Feedlots</p>
           </div>
           <div class="icon">
             <i class="ion ion-person-add"></i>
           </div>
           <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
         </div>
       </div>
       <!-- ./col -->
       <div class="col-lg-3 col-6">
         <!-- small box -->
         <div class="small-box bg-danger">
           <div class="inner">
             <h3>xxx Kgs</h3>

             <p>Animal Average Weight</p>
           </div>
           <div class="icon">
             <i class="ion ion-pie-graph"></i>
           </div>
           <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
         </div>
       </div>
       <!-- ./col -->
     </div>
     <!-- /.row -->
    </div>
@endsection
