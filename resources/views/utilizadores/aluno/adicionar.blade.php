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
                    <label for="exampleInputName1">Nome</label>
                          <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome completo">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputName1">Numero</label>
                          <input type="text" class="form-control" name="numero" id="numero" placeholder="Numero de estudante">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputName1">Turma</label>
                          <input type="text" class="form-control" name="turma_id" id="turma_id" placeholder="Turma">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputName1">Sala</label>
                          <input type="text" class="form-control" name="sala_id" id="sala_id" placeholder="Numero da sala">
                  </div>

                  <!-- /.form-group -->
                  <div class="form-group">
                    <label for="exampleInputName1">Telefone </label>
                    <input type="text" class="form-control" name="telefone" id="telefone" placeholder="Telefone">
                  </div>  

                  <div class="form-group">
                    <label for="exampleInputName1">Morada </label>
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
                      <input type="date" class="form-control" name="data_nascimento" id="data_nascimento" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
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
                    <label for="exampleInputName1">Nome Pai</label>
                        <input type="text" class="form-control" name="nome_pai" id="nome_pai" placeholder="Nome completo do pai">
                    </div>
                    </div>
                    <!-- /.form-group -->
                </div>
                <!-- /.col -->
                <div class="col-md-12">
                  
                  <div class="form-group">
                    <label for="exampleInputName1">Nome Mãe</label>
                    <input type="text" class="form-control" name="nome_mae" id="nome_mae" placeholder="Nome completo da mãe">
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





 