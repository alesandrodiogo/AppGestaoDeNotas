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
              <th>ID</th>
                <th>Nome</th>
                <th>Nº Estudante</th>
                <th>Nome Pai</th>
                <th>Nome Mãe</th>
                <th>Telefone</th>
                <th>Turma</th>
                <th>Sala</th>
                <th>Data de Nascimento</th>
                <th>Morada</th>
                <th>Opção</th>
              </tr>
              </thead>
              <tbody>
              @foreach ($alunos as $aluno)
              <tr>
              <th>{{ $aluno->id }}</th>
                <td>{{ $aluno->nome_completo }}</td>
                <td>{{ $aluno->numero_estudante }}</td>
                <td>{{ $aluno->nome_pai }}</td>
                <td>{{ $aluno->nome_mae }}</td>
                <td>{{ $aluno->telefone }}</td>
                <td>{{ $aluno->turma->nome }}</td>
                <td>{{ $aluno->sala->nome }}</td>
                <th>{{ $aluno->data_nascimento }}</th>
                <th>{{ $aluno->morada }}</th>
                <td> 
                  <a class="btn btn-info btn-sm" href="/user_profile_aluno/edit/{{ $aluno->id }}">
                  <i class="fas fa-pencil-alt"></i></a>

                  <form action="/user_profile_aluno/destroy/{{$aluno->id }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">
                            <i class="fas fa-trash">
                            </i>
                            </button>
                            </form>
                  <a class="btn btn-danger btn-sm" href="/user_profile_aluno/ver/{{ $aluno->id }}">
                    <i class="fas fa-eye"></i></a>
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
