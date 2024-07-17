@extends('layouts.main')
@section('title','Notas')
@section('content')
<div class="wrapper">
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Notas</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            @if(Auth::user()->usertype == 'admin')
              <li class="breadcrumb-item">
                <button type="submit" class="btn btn-primary btn-block">
                  <a href="/nota/add">Novo</a>
                </button>
              </li>
              @endif
            </ol>
          </div>
        </div>
      </div>
      <!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Lista de notas</h3>
          @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        {{ $message }}
                    </div>
                @endif
          <div class="card-tools">
            <button
              type="button"
              class="btn btn-tool"
              data-card-widget="collapse"
              title="Collapse"
            >
              <i class="fas fa-minus"></i>
            </button>
            <button
              type="button"
              class="btn btn-tool"
              data-card-widget="remove"
              title="Remove"
            >
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
            <thead>
              <tr>
                <th style="width: 15%">ID</th>
                <th style="width: 15%">Aluno</th>
                <th style="width: 15%">Ano lectivo</th>
                <th style="width: 15%">Disciplina</th>
                <th style="width: 15%">MT1</th>
                <th style="width: 15%">MT2</th>
                <th style="width: 15%">MT3</th>
                <th style="width: 15%">MFD</th>
                <th style="width: 15%">MAC</th>
                <th style="width: 15%">NPP</th>
                <th style="width: 15%">NPT</th>
                <th style="width: 15%">MT</th>
                @if(Auth::user()->usertype == 'admin')
                <th style="width: 15%" class="text-center">Opções</th>
                @endif
              </tr>
            </thead>
            <tbody>
            @foreach ($notas as $nota)
              <tr>
                <td>{{ $nota->id }}</td>
                <td>{{ $nota->aluno->nome_completo }}</td>
                <td>{{ $nota->anoLectivo->nome ?? 'N/A' }}</td>
                <td>{{ $nota->disciplina->nome }}</td>
                <td>{{ $nota->mt1 }}</td>
                <td >{{ $nota->mt2 }}</td>
                <td >{{ $nota->mt3 }}</td>
                <td >{{ $nota->mfd }}</td>
                <td>{{ $nota->mac }}</td>
                <td >{{ $nota->npp }}</td>
                <td >{{ $nota->npt }}</td>
                <td >{{ $nota->mt }}</td>
                </td>
                @if(Auth::user()->usertype == 'admin')
                <td class="project-actions text-right">
                  <a class="btn btn-info btn-sm" href="/nota/edit/{{ $nota->id }}">
                    <i class="fas fa-pencil-alt"> </i>
                  </a>
                  <form action="/nota/destroy/{{ $nota->id }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">
                            <i class="fas fa-trash">
                            </i>
                            </button>
                            </form>
                </td>
                @endif
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
