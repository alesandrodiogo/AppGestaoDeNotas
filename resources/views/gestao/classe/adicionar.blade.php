@extends('layouts.main')
@section('title','Adicionar classe')
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
            <h3 class="card-title">Dados</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
             
            </div>
          </div>
          <form action="/classe/store" method="POST">
          @csrf
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="nome">Nome</label>
                        <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome">
                </div>
              </div>
              <!-- /.col -->
               <div class="form-group">
                <button type="button" class="btn btn-block bg-gradient-success btn-sm">Adicionar</button>
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
