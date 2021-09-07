
@extends('../admins/layouts')
@section('content')
@section('grands','Gestion Joueurs')
<br>
<div class="container-fluid">
    <div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Nouveau Joueur</h3>
                
                <div class="box-tools">
                    <div class="btn-group pull-right" style="margin-right: 5px">
                        <a href="{{ route('joueurs.index') }}" class="btn btn-sm btn-default" title="Liste"><i class="fa fa-list"></i><span class="hidden-xs">&nbsp;Liste</span></a>
                    </div>
                </div>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
        
                @if (session('status'))

                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h4><i class="icon fa fa-warning"></i> Alert!</h4>
                        {{ session('status') }}
                    </div>
                        <div class="alert alert-primary" role="alert"></div>
                  @endif
            
            <form action="{{route('joueurs.store')}}" method="POST" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
                @csrf
                <div class="box-body">

                    <div class="fields-group">

                            <div class="form-group   is-empty">

                                    <label for="name" class="col-sm-2  control-label">Nom du joueur</label>

                                    <div class="col-sm-8">


                                        <div class="input-group">

                                            <span class="input-group-addon"><i class="fa fa-pencil fa-fw"></i></span>

                                            <input required type="text" id="nom" name="nom"  class="form-control {{$errors->has('nom')? 'is-invalid' : ''}}" placeholder="Entrée nom joueur">

                                            @if($errors->has('nom'))
                                                 <span class="invalid-feedback">{{$errors->first('nom')}}</span>
                                             @endif
                                             <span class="invalid-feedback"></span>
                                        </div>
                                       


                                    </div>
                                </div>


                        <div class="form-group   is-empty">

                            <label for="prenom" class="col-sm-2  control-label">Prenom Joueur</label>

                            <div class="col-sm-8">


                                <div class="input-group">

                                    <span class="input-group-addon"><i class="fa fa-money fa-fw"></i></span>

                                    <input required type="text" id="prenom" name="prenom" class="form-control {{$errors->has('prenom')? 'is-invalid': ''}}" placeholder="Entrée prenom joueur">
                                    @if($errors->has('prenom'))
                                        <span class="invalid-feedback">{{$errors->first('prenom')}}</span>
                                    @endif
                                     <span class="invalid-feedback"></span>

                                </div>
                               

                            </div>
                        </div>

                        <div class="form-group   is-empty">

                                <label for="fonction" class="col-sm-2  control-label">date de naissance</label>

                                <div class="col-sm-8">


                                    <div class="input-group">

                                        <span class="input-group-addon"><i class="fa fa-money fa-fw"></i></span>

                                        <input required type="date" id="datenais" name="datenais"  class="form-control {{$errors->has('datenais')? 'is-invalid': ''}}" placeholder="Entrée la date de naissance">

                                            @if($errors->has('datenais'))
                                              <span class="invalid-feedback">{{$errors->first('datenais')}}</span>
                                            @endif
                                            <span class="invalid-feedback"></span>
                                    </div>


                                </div>
                                
                            </div>


                            <div class="form-group   is-empty">

                                    <label for="lieunais" class="col-sm-2  control-label  ">Lieu de Naissance</label>

                                    <div class="col-sm-8">


                                        <div class="input-group">

                                            <span class="input-group-addon"><i class="fa fa-money fa-fw"></i></span>

                                            <input required type="text" id="lieunais" name="lieunais"  class="form-control {{$errors->has('lieunais')? 'is-invalid': ''}}" placeholder="Entrée lieu de naissance">

                                            @if($errors->has('lieunais'))
                                                     <span class="invalid-feedback">{{$errors->first('lieunais')}}</span>
                                            @endif
                                            <span class="invalid-feedback"></span>
                                        </div>
                                            

                                    </div>

                                </div>


                                    <div class="form-group   is-empty">

                                        <label for="taille" class="col-sm-2  control-label">taille</label>

                                        <div class="col-sm-8">


                                            <div class="input-group">

                                                <span class="input-group-addon"><i class="fa fa-money fa-fw"></i></span>

                                                <input required type="text" id="taille" name="taille" class="form-control {{$errors->has('taille')? 'is-invalid': ''}}" placeholder="Entrée votre taille">

                                                    @if($errors->has('taille'))
                                                      <span class="invalid-feedback">{{$errors->first('taille')}}</span>
                                                  @endif
                                                  <span class="invalid-feedback"></span>
                                            </div>
                                            

                                        </div>
                                    </div>



                                        <div class="form-group   is-empty">

                                                <label for="poids" class="col-sm-2  control-label">Votre poids</label>

                                                <div class="col-sm-8">


                                                    <div class="input-group">

                                                        <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>

                                                        <input required type="text" id="poids" name="poids"  class="form-control {{$errors->has('poids')? 'is-invalid': ''}}" placeholder="Entrée votre poids">
        
                                                        @if($errors->has('poids'))
                                                        <span class="invalid-feedback">{{$errors->first('poids')}}</span>
                                                    @endif
                                                    <span class="invalid-feedback"></span>
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
