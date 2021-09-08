@extends('layout.layout')


@section('content')
@section('grand-text','Tableau de Bord')
@section('grands','Tableau de Bord')
@section('petit-text','Tableau de Bord')
<br>
<div class="container ">
  <p class="text-danger ">Bilan de la saison 2020 - 2021</p>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3 col-6">
            <div class="info-box">
                <span class="info-box-icon bg-aqua"><i class="fa fa-users"></i></span>
    
                <div class="info-box-content">
                  <span class="info-box-text">Joueur</span>
                  <span class="info-box-number">90</span>
                </div>
                <!-- /.info-box-content -->
              </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="info-box">
                <span class="info-box-icon bg-green"><i class="ion ion-ios-gear-outline"></i></span>
    
                <div class="info-box-content">
                  <span class="info-box-text">Total Match </span>
                  <span class="info-box-number">200</span>
                </div>
                <!-- /.info-box-content -->
              </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="info-box">
                <span class="info-box-icon bg-gey"><i class="ion ion-ios-gear-outline"></i></span>
    
                <div class="info-box-content">
                  <span class="info-box-text">Nombre But</span>
                  <span class="info-box-number">33</span>
                </div>
                <!-- /.info-box-content -->
              </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="info-box">
                <span class="info-box-icon bg-red"><i class="ion ion-ios-gear-outline"></i></span>
    
                <div class="info-box-content">
                  <span class="info-box-text">Carton Rouge</span>
                  <span class="info-box-number">90</span>
                </div>
                <!-- /.info-box-content -->
              </div>
        </div>
        <!-- ./col -->

        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="info-box">
                <span class="info-box-icon bg-yellow"><i class="ion ion-ios-gear-outline"></i></span>
    
                <div class="info-box-content">
                  <span class="info-box-text">Carton jaune</span>
                  <span class="info-box-number">21</span>
                </div>
                <!-- /.info-box-content -->
              </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="info-box">
                <span class="info-box-icon bg-aqua"><i class="fa fa-tv"></i></span>
    
                <div class="info-box-content">
                  <span class="info-box-text">Classement</span>
                  <span class="info-box-number">2<small>eme</small></span>
                </div>
                <!-- /.info-box-content -->
              </div>        
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="info-box">
                <span class="info-box-icon bg-blue"><i class="fa fa-pencil"></i></span>
    
                <div class="info-box-content">
                  <span class="info-box-text">Article</span>
                  <span class="info-box-number">10</span>
                </div>
                <!-- /.info-box-content -->
              </div>
            </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="info-box">
                <span class="info-box-icon bg-purple"><i class="fa fa-money"></i></span>
    
                <div class="info-box-content">
                  <span class="info-box-text">Categorie</span>
                  <span class="info-box-number">20</span>
                </div>
                <!-- /.info-box-content -->
              </div>
        </div>
        <!-- ./col -->
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="box box-warning">
                <div class="box-header with-border">
                    <h3 class="box-title">Graphe</h3>

                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                    </div>
                    <!-- /.box-tools -->
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <canvas id="line-chart" width="800" height="450"></canvas>

                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>

        </div>
        

</div>







</div>

@include('layout.pieds-dash')

@stop


