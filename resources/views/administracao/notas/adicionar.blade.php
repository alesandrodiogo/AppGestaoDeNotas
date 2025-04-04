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
       <form action="/notas/store" method="POST">
           <!-- /.card-header -->
           @csrf
           <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="aluno_id">Aluno</label>
                  <select class="form-control select2" name="aluno_id" id="aluno_id" style="width: 100%;">
                  @foreach ($alunos as $aluno)
                    <option selected="selected" value="{{ $aluno->id }}">{{ $aluno->nome_completo }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="anolectivo_id">Ano lectivo</label>
                  <select class="form-control select2" name="anolectivo_id" id="anolectivo_id" style="width: 100%;">
                  @foreach ($anosLectivos as $anoLectivo)
                    <option selected="selected" value="{{ $anoLectivo->id }}">{{ $anoLectivo->nome }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group">
                  <label for="disciplina_id">Disciplina</label>
                  <select class="form-control select2" name="disciplina_id" id="disciplina_id" style="width: 100%;">
                  @foreach ($disciplinas as $disciplina)
                    <option selected="selected" value="{{ $disciplina->id }}">{{ $disciplina->nome }}</option>
                    @endforeach
                  </select>
                </div>
                 <div class="form-group">
                  <label for="mt1">MT1</label>
                        <input type="number" name="mt1" class="form-control" id="mt1" placeholder="">
                </div>
                <div class="form-group">
                 <label for="mt2">MT2</label>
                        <input type="number" name="mt2" class="form-control" id="mt2" placeholder="">
                </div>
                <div class="form-group">
                 <label for="mt3">MT3</label>
                        <input type="number" name="mt3" class="form-control" id="mt3" placeholder="">
                </div>
                <div class="form-group">
                 <label for="mac">MAC</label>
                        <input type="number" name="mac" class="form-control" id="mac" placeholder="">
                </div>
                <div class="form-group">
                 <label for="npp">NPP</label>
                        <input type="number" name="npp" class="form-control" id="npp" placeholder="">
                </div>
                <div class="form-group">
                 <label for="npt">NPT</label>
                        <input type="number" name="npt" class="form-control" id="npt" placeholder="">
                </div>
              </div>
              <!-- /.col -->
              <div class="col-md-6">
                
              <div class="form-group">
                 <label for="mfd">MFD</label>
                        <input type="number" disabled name="mfd" class="form-control" id="mfd" placeholder="">
                </div>
                <div class="form-group">
                 <label for="mt">MT</label>
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