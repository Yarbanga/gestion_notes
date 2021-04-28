@extends('layouts.app');
@section('content')
<div class="row justify-content-center ">
    <div class="card col-11">
      @if(Session::has('message'))
					<p class="alert {{ Session::get('alert-class', 'alert-success') }}">{{ Session::get('message') }}</p>
			@endif
      <div class="mt-1">
        <h5 class="text-center text-uppercase font-weight-bold">Information sur l'année scolaire</h5>
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
                  <th scope="col">Choix de l'année</th>
                  <th scope="col">Option </th>
                </thead>
                <tbody> 
                 @foreach($authentifications as $key=>$Authentification)
                <tr class="tablecolor text-center">
                  <td>{{++$key}}</td>
                  <td>{{$Authentification->trimestre}}</td>
                  <td>
                    <a href=""><button class="btn btn-success">Edit</button></a>
                     <a href=" "><button class="btn btn-danger"><i class="fas fa-trash"></i>Remove</button></a>
                  </td>
                </tr>
                </tr>
                  @endforeach  
            </tbody>
          </table>
      </div>
    </div>
</div>    
@endsection
  
  

  
  
  
  
   