@extends('layouts.main')
@section('title','Gestão')
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
        <div class="col-lg-6 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3>150</h3>
              <p>Alunos</p>
            </div>
            <div class="icon">
              <i class="fas fa-users"></i>
            </div>
            <a href="/user_profile_aluno" class="small-box-footer">Saber mais <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-6 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3>53</h3>

              <p>Nível Académico</p>
            </div>
            <div class="icon">
              <i class="fa fa-clipboard"></i>
            </div>
            <a href="/nivel_academico" class="small-box-footer">Saber mais <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-6 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3>44</h3>

              <p>Professores</p>
            </div>
            <div class="icon">
             <i class="fas fa-users"></i>
            </div>
            <a href="/user_profile_prof" class="small-box-footer">Saber mais <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-6 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3>65</h3>

              <p>CURSOS</p>
            </div>
            <div class="icon">
              <i class="fab fa-accusoft"></i>
            </div>
            <a href="/cursos" class="small-box-footer">Saber mais <i class="fas fa-arrow-circle-right"></i></a>
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
              <h3>53</h3>
              <p>Turmas</p>
            </div>
            <div class="icon">
               <i class="fa5 fa-building"></i>
            </div>
            <a href="/turmas" class="small-box-footer">Saber mais <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-6 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3>44</h3>

              <p>Escolas</p>
            </div>
            <div class="icon">
              <i class="fas fa-school"></i>
            </div>
            <a href="/escolas" class="small-box-footer">Saber mais <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <div class="col-lg-6 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3>65</h3>

              <p>Salas</p>
            </div>
            <div class="icon">
             <i class="fa5 fa-building"></i>
            </div>
            <a href="/salas" class="small-box-footer">Saber mais <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->

         <div class="col-lg-6 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3>150</h3>

              <p>Classes</p>
            </div>
            <div class="icon">
              <i class="fa5 fa-building"></i>
            </div>
            <a href="/classes" class="small-box-footer">Saber mais <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        
      </div>
       <!-- /.row 1-->


       <div class="row">
        <!-- ./col -->
        <!-- ./col -->

        <div class="col-lg-6 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3>65</h3>
              <p>Ano Lectivo</p>
            </div>
            <div class="icon">
             <i class="fa5 fa-building"></i>
            </div>
            <a href="/ano_lectivo" class="small-box-footer">Saber mais <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-6 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3>44</h3>

              <p>Disciplina</p>
            </div>
            <div class="icon">
             <i class="fas fa-users"></i>
            </div>
            <a href="/disciplinas" class="small-box-footer">Saber mais <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <!-- ./col -->

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