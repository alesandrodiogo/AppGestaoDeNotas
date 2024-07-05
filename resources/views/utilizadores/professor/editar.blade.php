@extends('layouts.main')
 @section('title','Editar Professor')
 @section('content')
  <div class="wrapper">

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  <div class="card-header">
  <h3 class="title"> Actualizar </h3>
  </div>
        <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Dados</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
             
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputName1">Nome</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Nome">
                </div>
                 <div class="form-group">
                  <label for="exampleInputName1">Endereço</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Descrição">
                </div>
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                 <label for="exampleInputName1">Telefone</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Telefone">
                </div>
                <!-- /.form-group -->
              
                  <div class="form-group">
                  <label for="exampleInputName1">Email</label>
                        <input type="email" class="form-control" id="exampleInputName1" placeholder="Email">
                </div>
               
                <!-- /.form-group -->
              </div>
             
             <div class="col-md-6">
                <div class="form-group">
                  <label for="exampleInputName1">Senha</label>
                        <input type="password" class="form-control" id="exampleInputName1" placeholder="Senha">
                </div>
                 
              </div>
              <!-- /.col -->
              <div class="col-md-6">
               
                <!-- /.form-group -->
              
                  <div class="form-group">
                  <label for="exampleInputName1">Confirmar Senha</label>
                        <input type="password" class="form-control" id="exampleInputName1" placeholder="Confirmar Senha">
                </div>
               
                <!-- /.form-group -->
              </div>
               <div class="form-group">
                <button type="button" class="btn btn-block bg-gradient-success btn-sm">Adicionar</button>
              </div>
              
            </div>
            <!-- /.row -->
           </div>
          </div>
          <!-- /.card-body -->
       
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
   @endsection







  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <%- include('../../partials/footer'); %>
</div>
<!-- ./wrapper -->



 