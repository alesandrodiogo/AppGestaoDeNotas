@extends('layouts.main')
@section('title','Adicionar escola')
@section('content')
  <div class="wrapper">




  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  <div class="card-header">
  <h3 class="title"> Adicionar </h3>
  </div>
        <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Escola</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
             
            </div>
          </div>
       <form action="/admin/escola/add" enctype="multipart/form-data" method="POST">
           <!-- /.card-header -->
           <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputName1">Rensponsável</label><!-- Os responsaveis seram listados em base ao estatuto de DG-->
                  <select class="form-control select2" name="responsavel" style="width: 100%;">
                    <!--<% responsavel.forEach(responsavel=>{ %>-->
                    <option selected="selected" value="<%=responsavel.id %>"><%=responsavel.nome %></option>
                    <!--<%}) %>-->
                  </select>
                </div>
                 <div class="form-group">
                  <label for="exampleInputName1">Nome</label>
                        <input type="text" name="nome" class="form-control" id="exampleInputName1" placeholder="Nome">
                </div>
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                 <label for="exampleInputName1">NIF</label>
                        <input type="text" name="nif" class="form-control" id="exampleInputName1" placeholder="NIF">
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                  <label for="exampleInputName1">Tipologia</label>
                  <select class="form-control select2" name="tipologia" style="width: 100%;">
                    <!--<% tipologia.forEach(tipologia=>{ %>-->
                    <option selected="selected" value="<%=tipologia.id %>"><%=tipologia.descricao %></option>
                    <!--<%}) %>-->
                  </select>
                </div>

               
                <!-- /.form-group -->
              </div>
             
             <div class="col-md-6">
              <div class="form-group">
                <label for="exampleInputName1">Designação</label>
                <select class="form-control select2" name="designacao" style="width: 100%;">
                  <!--<% designacao.forEach(designacao=>{ %>-->
                  <option selected="selected" value="<%=designacao.id %>"><%=designacao.descricao %></option>
                  <!--<%}) %>-->
                </select>
              </div>
                 
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputName1">Tipo de Escola</label>
                  <select class="form-control select2" name="tipoescola" style="width: 100%;">
                    <!--<% tipoescolas.forEach(tipoescolas=>{ %>-->
                    <option selected="selected" value="<%=tipoescolas.id %>"><%=tipoescolas.descricao %></option>
                    <!--<%}) %>-->
                  </select>
                </div>
                 
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label> Subsistema</label>
                  <select class="select2" name="subsistema" multiple="multiple" data-placeholder="Subsistema" style="width: 100%;">
                    <!--<% subsistema.forEach(subsistema=>{ %>-->
                    <option value="<%=subsistema.id %>"><%=subsistema.nome %></option>
                    <!--<%}) %>-->
                  </select>
                </div>
                 
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputName1">País</label>
                  <select class="form-control select2" name="pais" style="width: 100%;">
                    <!--<% pais.forEach(pais=>{ %>-->
                    <option value="<%=pais.id %>"><%=pais.nome %></option>
                    <!--<%}) %>-->
                  </select>
                </div>
                 
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputName1">provincia</label>
                  <select class="form-control select2" name="provincia" style="width: 100%;">
                    <!--<% provincia.forEach(provincia=>{ %>-->
                    <option selected="selected" value="<%=provincia.id %>"><%=provincia.nome %></option>
                    <!--<%}) %>-->
                  </select>
                </div>
                 
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputName1">Município</label>
                  <select class="form-control select2" name="municipio" style="width: 100%;">
                    <!--<% municipio.forEach(municipio=>{ %>-->
                    <option selected="selected" value="<%=municipio.id %>"><%=municipio.nome %></option>
                    <!--<%}) %>-->
                  </select>
                </div>
                 
              </div>
              <!-- /.col -->
              <div class="col-md-6">
               
                <!-- /.form-group -->
                  <div class="form-group">
                  <label for="exampleInputName1">Bairro</label>
                        <input type="text" name="bairro" class="form-control" id="exampleInputName1" placeholder="Bairro">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Adicionar logotipo</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" name="file" class="custom-file-input" id="exampleInputFile">
                      <label class="custom-file-label" for="exampleInputFile">Escolha um logo</label>
                    </div>
                  </div>
                </div>
               
                <!-- /.form-group -->
              </div>
               <div class="form-group">
                <button type="submit" class="btn btn-block bg-gradient-success btn-sm">Adicionar</button>
              </div>
              
            </div>
            <!-- /.row -->
           </div>
          </div>
          <!-- /.card-body -->
       </form>
       
        </div>
         <!-- /.row 1-->
         
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->


</div>

</div>
  <!-- /.content-wrapper -->

  </div>
  <!-- /.content-wrapper -->
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
</div>
<!-- ./wrapper -->
 @endsection