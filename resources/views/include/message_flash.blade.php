@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                 @if(Session::has('message'))
               <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                @endif
                <div class="card-body">
                    <p>
                        Bonjour! votre inscription a été effectuée avec succès. 
                    </p>
                     <p>
                         Vous pouvez maintenant vous connectez en mettant tout vous information correcte du professeur
                     </p>
                     <p>
                       Simplon, vous remercie pour la confiance!
                     Cordialement!  
                     </p>
                     
                </div>
            </div>
        </div>
    </div>
</div>
@endsection