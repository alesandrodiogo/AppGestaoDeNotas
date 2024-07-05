@extends('layouts.main')
@section('title','Listar Alunos')
@section('content')
<div class="wrapper">
  
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Alunos</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"> <button type="submit" class="btn btn-primary btn-block"><a href="/user_profile_aluno/add">Novo</a> </button></li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

      <div class="card-body p-0">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Lista geral de Alunos</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>Nome</th>
                <th>Nº Estudante</th>
                <th>Turma</th>
                <th>Sala</th>
                <th>Opção</th>
              </tr>
              </thead>
              <tbody>
              <tr>
                <td>Trident Internet Explorer 4.0</td>
                <td>Internet Explorer 4.0</td>
                <td>Win 95+</td>
                <td> 4</td>
                <td> 
                  <a class="btn btn-info btn-sm" href="/user_profile_aluno/edit">
                  <i class="fas fa-pencil-alt"></i></a>

                  <a class="btn btn-danger btn-sm" href="#">
                  <i class="fas fa-trash"></i></a>
                  <a class="btn btn-danger btn-sm" href="/user_profile_aluno/ver">
                    <i class="fas fa-eye"></i></a>
                </td>
              </tr>
              
              </tbody>
              <tfoot>
              <tr>
                <th>Nome</th>
                <th>Nº Estudante</th>
                <th>Turma</th>
                <th>Sala</th>
                <th>Opção</th>
              </tr>
              </tfoot>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->

  <!-- Main Footer -->
</div>
<!-- ./wrapper -->
 @endsection
