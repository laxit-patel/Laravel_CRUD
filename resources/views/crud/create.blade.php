@extends('layouts.app')

@section('content')

<div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
    <div class="container-fluid">
        <div class="header-body">
        <h1 class="text-white"><i class="fa fa-plus-circle text-white" ></i> &nbsp; Create</h1>
        <p class="text-white">This Operation shows insert operation using LARAVEL.</p>
        </div>
    </div>
</div>

    <div class="container-fluid mt--7 ">
        <div class="row ">
            
            <div class="col-xl-12 ">
                <div class="card shadow bg-gradient-green">
                    
                    <div class="card-body ">
                        
                        
  <form method="post" action="/submitCreate">
  <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
  <div class="row">

    <div class="col-md-6">
      <div class="form-group">
        <div class="input-group mb-4">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="ni ni-spaceship text-success"></i></span>
          </div>
          <input class="form-control form-control-lg" placeholder="Ship Name" type="text" name="ship_name">
        </div>
      </div>
    </div>

    <div class="col-md-3">
      <div class="form-group">
        <div class="input-group mb-4">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="ni ni-app text-success"></i></span>
          </div>
          <select class="form-control form-control-lg custom-select-lg form-control-lg" name="ship_type">
          <option selected disabled>Type</option>
            <option>Generation Ship</option>
            <option>Battle Ship</option>
            <option>Ice Hauler</option>
            <option>Colonial Vessel</option>
            <option>Rescue Ship</option>
            <option>Pod</option>
            <option>Lander</option>
            <option>Rocket</option>
            <option>Transporter</option>
            <option>Mining Ship</option>
            <option>Relay Ship</option>
            <option>Station</option>
          </select>
        </div>
      </div>
    </div>
   
    <div class="col-md-3">
    <div class="form-group">
      <div class="input-group mb-4">
        <div class="input-group-prepend">
          <span class="input-group-text"><i class="fa fa-tint text-success"></i></span>
        </div>
        <input class="form-control form-control-lg" placeholder="Fuel" type="text" name="ship_fuel">
      </div>
    </div>
  </div>

  </div>

  <div class="row">

  <div class="col-md-6">
      <div class="form-group">
        <div class="input-group mb-4">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="ni ni-planet text-success"></i></span>
          </div>
          <input class="form-control form-control-lg" placeholder="Origins" type="text" name="ship_origins">
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="form-group">
        <div class="input-group mb-4">
          <div class="input-group-prepend">
            <span class="input-group-text"><i class="ni ni-atom text-success"></i></span>
          </div>
          <input class="form-control form-control-lg" placeholder="Propulsion System" type="text" name="ship_propulsion">
        </div>
      </div>
    </div>

  </div>



  <div class="row">

    <div class="col-md-10">
      <div class="form-group has-success">
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="2" placeholder="Add Description Here . . ." name="ship_details"></textarea>
      </div>
    </div>

    <div class="col-md-2">
      <div class="form-group ">
      <input class="form-control form-control-lg bg-gradient-primary text-white" placeholder="Prupulsion System" type="submit">
      </div>
    </div>
    
  </div>

</form>

                    </div>
                </div>
            </div>

        </div>
       

        @include('layouts.footers.auth')
    </div>
@endsection
