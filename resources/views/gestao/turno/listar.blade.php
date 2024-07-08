@extends('layouts.main')
@section('title','Turnos')
@section('content')
 <div class="wrapper">
  
    

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Nome da área Ex. Turmas</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"> <button type="submit" class="btn btn-primary btn-block"><a href="/turno/add">Novo</a> </button></li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Lista de funcionário</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
      <div class="card-body p-0">
        <table class="table table-striped projects">
            <thead>
                <tr>
                    <th style="width: 15%">
                        ID
                    </th>
                    <th style="width: 15%">
                       Descrição
                    </th>
                    <th style="width: 15%" class="text-center">
                      Opções
                    </th>
                </tr>
            </thead>
            <tbody>
              <!--<% turma.forEach(turma=>{ %>-->
                <tr>
                    <td>
                      <!--<%=turma.id %>-->
                    </td>
                    <td class="project-state">
                      <!--<%=turma.descricao %>-->
                    </td>
                    <td class="project-actions text-right">
                        
                        <a class="btn btn-info btn-sm" href="/turno/edit">
                            <i class="fas fa-pencil-alt">
                            </i>
                            
                        </a>
                        <a class="btn btn-danger btn-sm" href="/gestao/turma/del/<%=turma.id %>">
                            <i class="fas fa-trash">
                            </i>
                        </a>
                    </td>
                </tr>
               <!-- <%}) %>-->
            </tbody>
        </table>
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




