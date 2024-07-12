 @extends('layouts.main')
 @section('title','Editar Aluno')
 @section('content')
  <div class="wrapper">

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="card-header">
    <h3 class="title"> Actualização de dados Aluno </h3>
    </div>
          <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
  
          <!-- DADOS PESSOAIS -->
          <div class="card card-default">
            <div class="card-header">
              <b><h3 class="card-title ">Dados pessoas</h3></b>
  
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <form action="/user_profile_aluno/update/{{$aluno->id}}" method="POST">
            <!-- /.card-header -->
            @csrf
            @method('PUT')
            <div class="card-body">
              <div class="row">
                <div class="col-md-12">
  
                  <div class="form-group">
                    <label for="nome">Nome</label>
                          <input type="text" value="{{ $aluno->nome }}" class="form-control" name="nome" id="nome" placeholder="Nome completo">
                  </div>

                  <div class="form-group">
                    <label for="numero">Numero</label>
                          <input type="text" value="{{ $aluno->numero }}" class="form-control" name="numero" id="numero" placeholder="Numero de estudante">
                  </div>

                  <div class="form-group">
                <label for="turma_id">Turma</label>
                <select name="turma_id" id="turma_id" class="form-control" required>
                    @foreach ($turmas as $turma)
                        <option value="{{ $turma->id }}" {{ $aluno->turma_id == $turma->id ? 'selected' : '' }}>{{ $turma->nome }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="sala_id">Sala</label>
                <select name="sala_id" id="sala_id" class="form-control" required>
                    @foreach ($salas as $sala)
                        <option value="{{ $sala->id }}" {{ $aluno->sala_id == $sala->id ? 'selected' : '' }}>{{ $sala->nome }}</option>
                    @endforeach
                </select>
            </div>

                  <!-- /.form-group -->
                  <div class="form-group">
                    <label for="telefone">Telefone </label>
                    <input type="text" value="{{ $aluno->telefone }}" class="form-control" name="telefone" id="telefone" placeholder="Telefone">
                  </div>  

                  <div class="form-group">
                    <label for="morada">Morada </label>
                    <input type="text" value="{{ $aluno->morada }}" class="form-control" name="morada" id="morada" placeholder="Rua 21 bairro azul">
                  </div>  
                <!-- /.col -->
                <div class="col-md-12">
                  <!-- Date dd/mm/yyyy -->
                  <div class="form-group">
                    <label for="data_nascimento">Data de Nascimento</label>
  
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                      </div>
                      <input type="date" value="{{ $aluno->data_nascimento }}" class="form-control" name="data_nascimento" id="data_nascimento" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                    </div>
                  </div>
                </div>
                </div>
              </div>
             </div>
            
            <div class="card-header">
              <b><h3 class="card-title">Dados Filiação</h3></b>
  
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                    <label for="nome_pai">Nome Pai</label>
                        <input type="text" value="{{ $aluno->nome_pai }}" class="form-control" name="nome_pai" id="nome_pai" placeholder="Nome completo do pai">
                    </div>
                    </div>
                    <!-- /.form-group -->
                </div>
                <!-- /.col -->
                <div class="col-md-12">
                  
                  <div class="form-group">
                    <label for="nome_mae">Nome Mãe</label>
                    <input type="text" value="{{ $aluno->nome_mae }}" class="form-control" name="nome_mae" id="nome_mae" placeholder="Nome completo da mãe">
                  </div>
                </div>
              </div>
              <!-- /.row -->
             </div>
                 <div class="form-group col-md-12">
                  <button type="button" class="btn btn-block bg-gradient-success btn-sm">Gravar</button>
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




 