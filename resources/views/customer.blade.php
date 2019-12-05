@extends('layouts.app')

@section('content')

<div class="container" style="width: 80%">
  <div class="row mx-md-n5">
    <div class="col">
      <img class="rounded mx-auto d-block" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTrSfzzdWiD6rB3gC3M82q6cBhV9t42KnLrstWSvx12d0fVh_yY" alt="customer profile">
    </div>
    <div class="col">
      <h2 style="color:#FF9900">customer name</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa culpa consequuntur modi error eligendi, necessitatibus fugiat deleniti omnis sunt officia dolor magnam aspernatur quae quibusdam, et quia harum sed ratione?</p>
      <br><br><br>
      <div class="row">
        <div class="col">
          <button type="button" class="btn btn-lg btn-block" style="background-color:#FF9900">BACK</button>
        </div>
        <div class="col">
          <button type="button" class="btn btn-lg btn-block btn-danger">DELETE</button></div>
      </div>
    </div>
  </div>

</div>

@endsection