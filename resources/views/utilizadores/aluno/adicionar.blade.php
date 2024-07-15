 @extends('layouts.main')
 @section('title','Adicionar Aluno')
 @section('content')
  <div class="wrapper">

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <div class="card-header">
    <h3 class="title"> Novo aluno </h3>
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
            <form action="/alunos/store" method="POST">
            <!-- /.card-header -->
            @csrf
            <div class="card-body">
              <div class="row">
                <div class="col-md-12">
  
                  <div class="form-group">
                    <label for="nome_completo">Nome</label>
                          <input type="text" class="form-control" name="nome_completo" id="nome_completo" placeholder="Nome completo">
                  </div>

                  <div class="form-group">
                    <label for="numero_estudante">Numero</label>
                          <input type="text" class="form-control" name="numero_estudante" id="numero_estudante" placeholder="Numero de estudante">
                  </div>

                  <div class="form-group">
            <label for="turma_id">Turma</label>
            <select name="turma_id" id="turma_id" class="form-control" required>
                @foreach ($turmas as $turma)
                    <option value="{{ $turma->id }}">{{ $turma->nome }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="sala_id">Sala</label>
            <select name="sala_id" id="sala_id" class="form-control" required>
                @foreach ($salas as $sala)
                    <option value="{{ $sala->id }}">{{ $sala->nome }}</option>
                @endforeach
            </select>
        </div>

                  <!-- /.form-group -->
                  <div class="form-group">
                    <label for="telefone">Telefone </label>
                    <input type="text" class="form-control" name="telefone" id="telefone" placeholder="Telefone">
                  </div>  

                  <div class="form-group">
                    <label for="morada">Morada </label>
                    <input type="text" class="form-control" name="morada" id="morada" placeholder="Rua 21 bairro azul">
                  </div>  
                <!-- /.col -->
                <div class="col-md-12">
                  <!-- Date dd/mm/yyyy -->
                  <div class="form-group">
                    <label>Data de Nascimento</label>
  
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                      </div>
                      <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" required>
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
                        <input type="text" class="form-control" name="nome_pai" id="nome_pai" placeholder="Nome completo do pai">
                    </div>
                    </div>
                    <!-- /.form-group -->
                </div>
                <!-- /.col -->
                <div class="col-md-12">
                  
                  <div class="form-group">
                    <label for="nome_mae">Nome Mãe</label>
                    <input type="text" class="form-control" name="nome_mae" id="nome_mae" placeholder="Nome completo da mãe">
                  </div>
                </div>
              </div>
              <!-- /.row -->
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





 