@extends('layouts.main')
@section('title','Adicionar nota')
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
            <h3 class="card-title">Nota</h3>

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
                  <label for="exampleInputName1">Aluno</label><!-- Os responsaveis seram listados em base ao estatuto de DG-->
                  <select class="form-control select2" name="aluno_id" style="width: 100%;">
                    <!--<% responsavel.forEach(responsavel=>{ %>-->
                    <option selected="selected" value="<%=responsavel.id %>"><%=responsavel.nome %></option>
                    <!--<%}) %>-->
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputName1">Ano lectivo</label><!-- Os responsaveis seram listados em base ao estatuto de DG-->
                  <select class="form-control select2" name="anolectivo_id" style="width: 100%;">
                    <!--<% responsavel.forEach(responsavel=>{ %>-->
                    <option selected="selected" value="<%=responsavel.id %>"><%=responsavel.nome %></option>
                    <!--<%}) %>-->
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputName1">Disciplina</label><!-- Os responsaveis seram listados em base ao estatuto de DG-->
                  <select class="form-control select2" name="disciplina_id" style="width: 100%;">
                    <!--<% responsavel.forEach(responsavel=>{ %>-->
                    <option selected="selected" value="<%=responsavel.id %>"><%=responsavel.nome %></option>
                    <!--<%}) %>-->
                  </select>
                </div>
                 <div class="form-group">
                  <label for="exampleInputName1">MT1</label>
                        <input type="number" name="mt1" class="form-control" id="mt1" placeholder="">
                </div>
                <div class="form-group">
                 <label for="exampleInputName1">MT2</label>
                        <input type="number" name="mt2" class="form-control" id="mt2" placeholder="">
                </div>
                <div class="form-group">
                 <label for="exampleInputName1">MT3</label>
                        <input type="number" name="mt3" class="form-control" id="mt3" placeholder="">
                </div>
                <div class="form-group">
                 <label for="exampleInputName1">MAC</label>
                        <input type="number" name="mac" class="form-control" id="mac" placeholder="">
                </div>
                <div class="form-group">
                 <label for="exampleInputName1">NPP</label>
                        <input type="number" name="npp" class="form-control" id="npp" placeholder="">
                </div>
                <div class="form-group">
                 <label for="exampleInputName1">NPT</label>
                        <input type="number" name="npt" class="form-control" id="npt" placeholder="">
                </div>
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                
              <div class="form-group">
                 <label for="exampleInputName1">MFD</label>
                        <input type="number" disabled name="mfd" class="form-control" id="mfd" placeholder="">
                </div>
                <div class="form-group">
                 <label for="exampleInputName1">MT</label>
                        <input type="number" disabled name="mt" class="form-control" id="mt" placeholder="">
                </div>
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