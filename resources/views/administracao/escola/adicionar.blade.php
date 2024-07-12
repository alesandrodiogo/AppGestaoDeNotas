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
       <form action="/escola/store" method="POST">
           <!-- /.card-header -->
           @csrf
           <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                 <div class="form-group">
                  <label for="nome">Nome</label>
                        <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome completo">
                </div>
                <div class="form-group">
                  <label for="director">Director</label>
                        <input type="text" name="director" class="form-control" id="director" placeholder="Nome completo">
                </div>
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                <div class="form-group">
                 <label for="exampleInputName1">NIF</label>
                        <input type="text" name="nif" class="form-control" id="exampleInputName1" placeholder="NIF">
                </div>
                <div class="form-group">
                  <label for="subsistema_id">Subsistema</label><!-- Os responsaveis seram listados em base ao estatuto de DG-->
                  <select class="form-control select2" name="subsistema_id" id="subsistema_id" style="width: 100%;">
                  @foreach ($subsistemas as $subsistema)
                    <option selected="selected" value="{{ $subsistema->id }}">{{ $subsistema->nome }}</option>
                    @endforeach
                  </select>
                </div>
                <!-- /.form-group -->
                <div class="form-group">
                <label for="tipologia_id">Tipologia</label>
                <select name="tipologia_id" id="tipologia_id" class="form-control" required>
                    @foreach ($tipologias as $tipologia)
                        <option value="{{ $tipologia->id }}">{{ $tipologia->nome }}</option>
                    @endforeach
                </select>
            </div>
                <!-- /.form-group -->
              </div>
             
             <div class="col-md-6">
             <div class="form-group">
                <label for="municipio_id">Município</label>
                <select name="municipio_id" id="municipio_id" class="form-control" required>
                    @foreach ($municipios as $municipio)
                        <option value="{{ $municipio->id }}">{{ $municipio->nome }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="provincia_id">Província</label>
                <select name="provincia_id" id="provincia_id" class="form-control" required>
                    @foreach ($provincias as $provincia)
                        <option value="{{ $provincia->id }}">{{ $provincia->nome }}</option>
                    @endforeach
                </select>
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