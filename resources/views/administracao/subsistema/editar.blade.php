@extends('layouts.main')
@section('title','Editar subsistema')
@section('content')
  <div class="wrapper">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <div class="card-header">
    <h3 class="title"> Actualização </h3>
    </div>
          <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- SELECT2 EXAMPLE -->
          <div class="card card-default">
            <div class="card-header">
              <h3 class="card-title">Subsistema</h3>
  
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
               
              </div>
            </div>
             <!-- /.card-header -->
             <form action="/admin/subsistema/atualizar" method="POST">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputName1">Nome</label>
                            <input type="text" name="nome" value="" class="form-control" id="exampleInputName1" placeholder="Nome">
                             <input type="hidden" name="id" value="">
                    </div>
                  </div>
                  <!-- /.col -->          
               
                   <div class="form-group">
                    <button type="submit" class="btn btn-block bg-gradient-success btn-sm">Actualizar</button>
                  </div>
                  
                </div>
                <!-- /.row -->
               </div>
              </div>
            </form>
              <!-- /.card-body -->
        </div>
           <!-- /.row 1-->
           
        </div><!--/. container-fluid -->
      </section>
      <!-- /.content -->
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