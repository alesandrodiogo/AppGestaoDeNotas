@extends('layouts.main')
@section('title','Ano lectivo')
@section('content')
 <div class="wrapper">
  
    

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Nome da área Ex. Ano lectivo</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"> <button type="submit" class="btn btn-primary btn-block"><a href="/ano_lectivo/add">Novo</a> </button></li>
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
                       Nome
                    </th>
                    <th style="width: 15%" class="text-center">
                      Opções
                    </th>
                </tr>
            </thead>
            <tbody>
            @foreach($anoLectivos as $anoletivo)
                <tr>
                    <td>
                    {{ $anoletivo->id }}
                    </td>
                    <td class="project-state">
                    {{ $anoletivo->nome }}
                    </td>
                    <td class="project-actions text-right">
                        
                        <a class="btn btn-info btn-sm" href="/ano_lectivo/edit/{{$anoletivo->id}}">
                            <i class="fas fa-pencil-alt">
                            </i>
                            
                        </a>
                        <form action="/ano_lectivo/destroy/{{$anoletivo->id}}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">
                            <i class="fas fa-trash">
                            </i>
                            </button>
                            </form>
                    </td>
                </tr>
                @endforeach
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




