<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="{{asset('style/style.css')}}" rel="stylesheet">
	<link href="{{asset('style/css/bootstrap.min.css')}}" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<title>Document</title>
</head>
<body>
	<div class="container d-flex justify-content-center"> <button class="btn btn-primary" data-toggle="modal" data-target="#my-modal">Se connecter</button>
    <div id="my-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered justify-content-center " role="document">
            <div class="modal-content border-0 mx-3">
                <div class="modal-body p-0">
                    <div class="row justify-content-center">
                        <div class="col">
                            <div class="card">
                                <div class="card-header bg-white border-0 pb-3">
                                    <div class="row justify-content-between align-items-center">
                                        <div class="flex-col-auto"></div>
                                        <div class="col-auto text-right"><button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span class="cross" aria-hidden="true">&times;</span> </button></div>
                                    </div>
                                </div>
                                <div class="card-body pt-0">
                                    <div class="row justify-content-center pb-sm-5 pb-3">
                                        <div class="col-sm-8 col px-sm-0 px-4">
                                            <h4 class="card-title mt-sm-5 mt-3 mb-sm-5 mb-3 text-center"><b>GESTION DE NOTE</b></h4>
                                            <div class="row">
                                                <div class="col"><input type="text" name="email" placeholder="Email"></div>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="col"><input type="text" name="matricule" placeholder="Matricule"></div>
                                            </div>
                                           
                                            <div class="row mt-2">
                                                <div class="col"><select class="form-control">
                                                        <option>6ème</option>
                                                        <option>5ème</option>
                                                        <option>4ème</option>
                                                        <option>3ème</option>
                                                        <option>2nd</option>
                                                        <option>1ère</option>
                                                        <option>TlD</option>
                                                        <option>TlA</option>
                                                        <option>TlC</option>


                                                    </select></div>
                                            </div>
                                             <div class="row mt-2">
                                                <div class="col"><input type="password" name="password" placeholder="&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;"></div>
                                            </div>
                                            <!-- <div class="row align-items-center mt-4 mb-5">
                                                <div class="col text-left">
                                                    <div class="custom-control custom-checkbox"><input id="my-input" class="custom-control-input" type="checkbox" name="souveni" value="true"><label for="my-input" class="custom-control-label"><span>se souveni de moi</span></label></div>
                                                </div>
                                                <div class="col-auto text-right"> <span class="pass"><u>mot de passe oublié</u></span></div>
                                            </div> -->
                                            <div class="row mt-2">
                                                <div class="col"><button type="button" class="btn btn-primary btn-block"><b>Se connecter</b></button></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
</div>
</body>
</html>