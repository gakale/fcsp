
@extends('../admins/layouts')
@section('content')
@section('grand-text','Gestion des Joueurs')
@section('grands','Tableau de Bord')
@section('petit-text','Joueurs')


<div class="container-fluid">
    <div class="box">

        <div class="box-header with-border">
            <div class="pull-right">

                <div class="btn-group pull-right" style="margin-right: 10px">


                </div>

                <div class="btn-group pull-right" style="margin-right: 10px">
                    <a href="{{route('joueurs.create')}}" type="button" class="btn btn-sm btn-success" title="Nouveau">
                        <i class="fa fa-save"></i><span class="hidden-xs">&nbsp;&nbsp;Nouveau</span>
                    </a>
                </div>

            </div>
            <span>
                <a href="{{ route('joueurs.index') }}" class="btn btn-sm btn-primary grid-refresh" title="Rafraîchir"><i class="fa fa-refresh"></i><span class="hidden-xs"> Actualisé</span></a> <div class="btn-group" style="margin-right: 10px" data-toggle="buttons">
                    <label class="btn btn-sm btn-dropbox 5daed26c39e34-filter-btn " title="Filtre">
                        <input type="checkbox"><i class="fa fa-filter"></i><span class="hidden-xs">&nbsp;&nbsp;Filtre</span>
                    </label>

                </div>
            </span>
        </div>



        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Date de naissance</th>
                        <th>Lieu de Naissance</th>
                        <th>Taille</th>
                        <th>Poids</th>
                        <th>Numéro Maillot</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>

                @foreach($joueur as $joueurs)

                    <tr>
                        <td>{{$joueurs->nom}}</td>
                        <td>{{$joueurs->prenom}}</td>
                        <td>{{$joueurs->datenais}}</td>
                    
                        <td>{{$joueurs->lieunais}}</td>
                        <td>{{$joueurs->taille}}</td>
                        <td>{{$joueurs->poids}}</td>
                        <td>{{$joueurs->numero_maillot}}</td>
                        <td>
                            <a href="{{route('joueurs.show',$joueurs->id)}}">
                                <i class="fa fa-eye"></i>
                            </a>
                            <a href="#" >
                                <i class="fa fa-pencil"></i>
                            </a>
<<<<<<< HEAD
                            <a type="button" class="btn btn-xs" data-toggle="modal" data-target="#modal-delete" title="Supprimer">
=======
                            <a href="#" >
>>>>>>> aab7de708f137049a812198f97b9710e53624831
                                <i class="fa fa-trash"></i>
                            </a>
                        </td>
                    </tr>

                    @endforeach

                </tbody>
            </table>

        </div>
<<<<<<< HEAD
        <!-- Confirmation de la Suppression des données -->

        <div class="modal fade" id="modal-delete">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h2 class="modal-title"  style="text-align: center;">Attention !</h2>
                    </div>
                        <div class="modal-body">
                            <div class="row">
                                <form action="{{ route('joueurs.destroy', $joueurs->id ) }}" class="form-group" method="post">
                                    @csrf

                                    <div class="form-group col-md-12">
                                        <h3 class="" style="text-align: center;">Voulez vous vraiment supprimer ces données ?</h3>
                                    </div>
                                </div>
                            </div>


                            <div class="modal-footer">
                                <button type="button" class="btn btn-success pull-left" data-dismiss="modal">Non, Rétour</button>
                                <button type="submit" class="btn btn-danger">Oui, Supprimer</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                </form>
                <!-- /.modal-dialog -->
            </div>
=======
>>>>>>> aab7de708f137049a812198f97b9710e53624831



        <div class="box-footer clearfix">
            <b></b> à <b></b> de <b>0</b> lignes<ul class="pagination pagination-sm no-margin pull-right">
                <!-- Previous Page Link -->
                <li class="page-item disabled"><span class="page-link">«</span></li>

                <!-- Pagination Elements -->
                <!-- "Three Dots" Separator -->

                <!-- Array Of Links -->
                <li class="page-item active"><span class="page-link">1</span></li>

                <!-- Next Page Link -->
                <li class="page-item disabled"><span class="page-link">»</span></li>
            </ul>

            <label class="control-label pull-right" style="margin-right: 10px; font-weight: 100;">

                <small>Affiche</small>&nbsp;
                <select class="input-sm grid-per-pager" name="per-page">
                    <option value="#">10</option>
                    <option value="#" selected="">20</option>
                    <option value="#">30</option>
                    <option value="#">50</option>
                    <option value="#">100</option>
                </select>
                &nbsp;<small>lignes</small>
            </label>

        </div>
        <!-- /.box-body -->
    </div>
</div>




@stop
