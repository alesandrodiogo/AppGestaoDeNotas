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
            <h1>Escola</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item">
                <button type="submit" class="btn btn-primary btn-block">
                  <a href="/nota/add">Novo</a>
                </button>
              </li>
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
          <h3 class="card-title">Lista de escolas</h3>

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
                <th style="width: 15%">ID Responsável</th>
                <th style="width: 15%">Nome</th>
                <th style="width: 15%">NIF</th>
                <th>ID Tipologia</th>
                <th style="width: 15%">ID Designação</th>
                <th style="width: 15%" class="text-center">ID Tipo de Escola</th>
                <th style="width: 15%" class="text-center">ID Subsistema</th>
                <th style="width: 15%" class="text-center">ID País</th>
                <th style="width: 15%" class="text-center">ID Cidade</th>
                <th style="width: 15%" class="text-center">ID Município</th>
                <th style="width: 15%" class="text-center">Bairro</th>
                <th style="width: 15%" class="text-center">Opções</th>
              </tr>
            </thead>
            <tbody>
              <!--<% escolas.forEach(escolas=>{ %>-->
              <tr>
                <td><%=escolas.id %></td>
                <td><%=escolas.responsavel_id %></td>
                <td><%=escolas.nome %></td>
                <td><%=escolas.nif %></td>
                <td ><%=escolas.tipologiA_id %></td>
                <td ><%=escolas.designacao_id %></td>
                <td ><%=escolas.tipoescola_id %></td>
                  <td><%=escolas.subsistema_id %></td>
                  <td><%=escolas.pais_id %></td>
                  <td><%=escolas.cidade_id %></td>
                  <td><%=escolas.municipio_id %></td>
                  <td><%=escolas.bairro %></td>
                </td>
                <td class="project-actions text-right">
                  <a class="btn btn-info btn-sm" href="/nota/edit">
                    <i class="fas fa-pencil-alt"> </i>
                  </a>
                  <a class="btn btn-danger btn-sm" href="/admin/escola/del/<%=escolas.id %>">
                    <i class="fas fa-trash"> </i>
                  </a>
                </td>
              </tr>
              <!--<%}) %>-->
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
