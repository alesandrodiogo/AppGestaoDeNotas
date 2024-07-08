@extends('layouts.main')
@section('title','Administração')
@section('content')
<div class="wrapper">


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <!-- /.PODE SE COLOCAR O NOME DA ESCOLA EM CASE VARIA -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
       <div class="row">
          <!-- ./col -->
          <div class="col-lg-6 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>53</h3>

                <p>Escolas</p>
              </div>
              <div class="icon">
                <i class="fas fa-school"></i>
              </div>
              <a href="/escolas" class="small-box-footer">Saber mais <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-6 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>65</h3>

                <p>Província</p>
              </div>
              <div class="icon">
                <i class="fas fa-city"></i>
              </div>
              <a href="/provincias" class="small-box-footer">Saber mais <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row 1-->

        <div class="row">
          <!-- ./col -->
          <div class="col-lg-6 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>65</h3>

                <p>Municipio</p>
              </div>
              <div class="icon">
                <i class="fas fa-city"></i>
              </div>
              <a href="/municipios" class="small-box-footer">Saber mais <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
            <!-- ./col -->
          <div class="col-lg-6 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>65</h3>

                <p>Subsistema</p>
              </div>
              <div class="icon">
                <i class="fas fa-city"></i>
              </div>
              <a href="/subsistemas" class="small-box-footer">Saber mais <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
           <!-- ./col -->
           <div class="col-lg-6 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>65</h3>

                <p>Tipo de escola</p>
              </div>
              <div class="icon">
                <i class="fas fa-city"></i>
              </div>
              <a href="/tipologia" class="small-box-footer">Saber mais <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
           <!-- ./col -->
           <div class="col-lg-6 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>65</h3>

                <p>Gestão de notas</p>
              </div>
              <div class="icon">
                <i class="fas fa-city"></i>
              </div>
              <a href="/notas" class="small-box-footer">Saber mais <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
        <!-- /.row 2-->

      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
@endsection