@extends('layouts.main')
@section('title','Nível académico')
@section('content')
 <div class="wrapper">  

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Niveis Académicos</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"> <button type="submit" class="btn btn-primary btn-block"><a href="/nivel_academico/add">Novo</a> </button></li>
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
          <h3 class="card-title">Lista geral de Niveis</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>ID</th>
              <th>Nome</th>
              <th>Opção</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($niveisAcademicos as $nivelAcademico)
            <tr>
              <td>{{ $nivelAcademico->id }}</td>
              <td>{{ $nivelAcademico->nome }}</td>
              <td> 
                <a class="btn btn-info btn-sm" href="/nivel_academico/edit/{{$nivelAcademico->id}}">
                <i class="fas fa-pencil-alt"></i></a>

                <form action="/nivel_academico/destroy/{{ $nivelAcademico->id }}" method="POST" style="display:inline;">
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




