
         @extends('layouts.master')

@section('content')
<div class="container-fluid">
     <!-- Small boxes (Stat box) -->



     <div class="row">

     <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger disabled ">
              <div class="inner">
                <h3></h3>

                <p>Années</p>
              </div>
              <div class="icon">
                <i class="ion ion-clipboard"></i>
              </div>
             
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3></h3>

                <p>Nombres des profs</p>
              </div>
              <div class="icon">
                <i class="ion ion-briefcase"></i>
              </div>
            </div>
          </div>
          <!-- ./col -->
          
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3></h3>

                <p>Classe</p>
              </div>
              <div class="icon">
                <i class="ion ion-home"></i>
              </div>
             
            </div>
          </div>
          <!-- ./col -->
          

       
         
        </div>


       
            <!-- small box -->
       

          <div class="small-box bg-text-secondary disabled ">
              <div class="inner">
                <h3></h3>

                <p>Nombre des élèves</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
          </div>
         

        
        
</div>
</div>
@endsection

                