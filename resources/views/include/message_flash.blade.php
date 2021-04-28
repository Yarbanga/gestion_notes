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
                        Bonjour! Vous venez d'ajouter avec succès un nous utilisateur. 
                    </p>
                     <p>
                         Vous pouvez maintenant lui faire parvenir sont password afin qu'il puisse se connetter.
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