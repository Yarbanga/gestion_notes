@extends('layouts.app');
@section('content')
<div class="row justify-content-center ">
    <div class="card col-11">
      @if(Session::has('message'))
					<p class="alert {{ Session::get('alert-class', 'alert-success') }}">{{ Session::get('message') }}</p>
			@endif
      <div class="mt-1">
        <h5 class="text-center text-uppercase font-weight-bold">Nos apprenants</h5>
        <a class="btn btn-warning" href="{{route('accueil')}}"> {{ __('Retour') }}</a>
        <div class="d-flex float-right">
          <div class=" text-center mr-2" >
            <button class="font-weight-bold text-uppercase bg-white text-danger mt-1">Total : </button>
          </div>
        <div></div>
      </div>
      </div>
            <div class="table table-responsive p-0">
              <table id="example1" class="table table-hover">
                <thead class="">
                <tr class=" btn-sm text-center">
                  <th scope="col">N°</th>
                  <th scope="col">Nom</th>
                  <th scope="col">Prénoms</th>
                  <th scope="col">Matricule</th>
                  <th scope="col">Classe</th>
                  <th scope="col">Role</th>
                  <th scope="col">Option </th>
                </thead>
                <tbody >                
            </tbody>
          </table>
      </div>
    </div>
</div>    
@endsection 