
@extends('../admins/layouts')
@section('content')
@section('grands','Gestion Joueurs')
<br>
<div class="container-fluid">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Joueur {{$joueur->nom}}</h3>
                
                <div class="box-tools">
                    <div class="btn-group pull-right" style="margin-right: 5px">
                        <a href="{{ route('joueurs.index') }}" class="btn btn-sm btn-default" title="Liste"><i class="fa fa-list"></i><span class="hidden-xs">&nbsp;Liste</span></a>
                    </div>
                </div>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
        
            
            <form action="{{route('joueurs.store')}}" method="POST" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                @csrf
                <div class="box-body">

                    <div class="fields-group">

                            <div class="form-group   is-empty">

                                    <label for="name" class="col-sm-2  control-label">Nom du joueur</label>

                                    <div class="col-sm-8">


                                        <div class="input-group">

                                            <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>

                                            <input  disabled value="{{$joueur->nom}}" type="text" id="nom" name="nom"  class="form-control">

                                            
                                        </div>
                                       


                                    </div>
                                </div>


                        <div class="form-group   is-empty">

                            <label for="prenom" class="col-sm-2  control-label">Prenom Joueur</label>

                            <div class="col-sm-8">


                                <div class="input-group">

                                    <span class="input-group-addon"><i class="fa fa-money fa-fw"></i></span>

                                    <input disabled value="{{$joueur->prenom}}" type="text" id="prenom" name="prenom" class="form-control" >
                                    

                                </div>
                               

                            </div>
                        </div>

                        <div class="form-group   is-empty">

                                <label for="fonction" class="col-sm-2  control-label">date de naissance</label>

                                <div class="col-sm-8">


                                    <div class="input-group">

                                        <span class="input-group-addon"><i class="fa fa-money fa-fw"></i></span>

                                        <input disabled value="{{$joueur->datenais}}"  id="datenais"  class="form-control">

                                        
                                    </div>


                                </div>
                                
                            </div>


                            <div class="form-group   is-empty">

                                    <label for="lieunais" class="col-sm-2  control-label  ">Lieu de Naissance</label>

                                    <div class="col-sm-8">


                                        <div class="input-group">

                                            <span class="input-group-addon"><i class="fa fa-money fa-fw"></i></span>

                                            <input value="{{$joueur->lieunais}}" type="text" id="lieunais"   class="form-control ">

                                   
                                        </div>
                                            

                                    </div>

                                </div>


                                    <div class="form-group   is-empty">

                                        <label for="taille" class="col-sm-2  control-label">taille</label>

                                        <div class="col-sm-8">


                                            <div class="input-group">

                                                <span class="input-group-addon"><i class="fa fa-money fa-fw"></i></span>

                                                <input disabled value="taille" type="text" id="taille" name="taille" class="form-control">

                                            </div>
                                            

                                        </div>
                                    </div>



                                        <div class="form-group   is-empty">

                                                <label for="poids" class="col-sm-2  control-label">Votre poids</label>

                                                <div class="col-sm-8">


                                                    <div class="input-group">

                                                        <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>

                                                        <input value="{{$joueur->poids}}" disabled id="poids" name="poids"  class="form-control ">
        
                                                      
                                                    </div>
                                                   

                                                </div>
                                            </div>



                                            <div class="form-group   is-empty">

                                                    <label for="numero_maillot" class="col-sm-2  control-label">Numéro Maillot</label>

                                                    <div class="col-sm-8">


                                                        <div class="input-group">

                                                            <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>

                                                            <input type="text" id="numero_maillot" name="numero_maillot"  class="form-control  {{$errors->has('numero_maillot')? 'is-invalid': ''}}" placeholder="Entrée le numéro maillot">
                                                            @if($errors->has('numero_maillot'))
                                                            <span class="invalid-feedback">{{$errors->first('numero_maillot')}}</span>
                                                        @endif
                                                        <span class="invalid-feedback"></span>
                                                        </div>
                                                        

                                                    </div>
                                                </div>


                                                
                                            <div class="form-group   is-empty">

                                                <label for="position_terrain" class="col-sm-2  control-label">Position Terrain</label>

                                                <div class="col-sm-8">


                                                    <div class="input-group">

                                                        <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>

                                                        <input type="text" id="position_terrain" name="position_terrain" class="form-control {{$errors->has('position_terrain')? 'is-invalid': ''}}" placeholder="Entrée le numéro maillot">
                                                        @if($errors->has('position_terrain'))
                                                            <span class="invalid-feedback">{{$errors->first('position_terrain')}}</span>
                                                      @endif
                                                      <span class="invalid-feedback"></span>
                                                    </div>
                                                    
                                                </div>
                                            </div>

     
                                            <div class="form-group   is-empty">

                                                <label for="details_joueurs" class="col-sm-2  control-label">Details Joueur</label>

                                                <div class="col-sm-8">


                                                    <div class="input-group">

                                                        <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>

                                                        <textarea name="details_joueurs" class="form-control  {{$errors->has('details_joueurs')? 'is-invalid' : ''}}" id="details_joueurs" ></textarea>
                                                        @if($errors->has('details_joueurs'))
                                                             <span class="invalid-feedback">{{$errors->first('details_joueurs')}}</span>
                                                        @endif
                                                        <span class="invalid-feedback"></span>
                                                    </div>
                                                    

                                                </div>
                                            </div>
                                            
                                           
     
                                            <div class="form-group   is-empty">

                                                <label for="photo_joueurs" class="col-sm-2  control-label">Photo du Joueur</label>

                                                <div class="col-sm-8">


                                                    <div class="input-group">

                                                        <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>

                                                        <input name="photo_joueurs" type="file" class="form-control {{$errors->has('photo_joueurs')? 'is-invalid' : ''}}" id="details_joueurs" >
                                                        @if($errors->has('photo_joueurs'))
                                                             <span class="invalid-feedback">{{$errors->first('photo_joueurs')}}</span>
                                                        @endif
                                                        <span class="invalid-feedback"></span>
                                                    </div>
                                                    

                                                </div>
                                            </div>
                                            
                                            <div class="form-group   is-empty">

                                                <label for="vidéo_joueurs" class="col-sm-2  control-label">video du Joueur</label>

                                                <div class="col-sm-8">


                                                    <div class="input-group">

                                                        <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>

                                                        <input type="text" id="video_joueurs" name="video_joueurs" class="form-control {{$errors->has('video_joueurs')? 'is-invalid' : ''}}" placeholder="Entrée le liens de la vidéo">
                                                        @if($errors->has('video_joueurs'))
                                                              <span class="invalid-feedback">{{$errors->first('video_joueurs')}}</span>
                                                         @endif
                                                         <span class="invalid-feedback"></span>
                                                    </div>
                                                   
                                                </div>
                                            </div>


                            </div>

                        <div class="box-footer">


                            <div class="col-md-2">
                            </div>

                            <div class="col-md-8">

                                <div class="btn-group pull-right">
                                    <button type="submit" class="btn btn-primary">Soumettre</button>
                                </div>


                                <div class="btn-group pull-left">
                                    <button type="reset" class="btn btn-warning">Réinitialiser</button>
                                </div>
                            </div>
                        </div>



                        <!-- /.box-footer -->
                    </form>
                </div>
    </div>
            </div>
        </div>

     
@stop
