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
            <!-- /.card-header -->
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
  
                  <div class="form-group">
                    <label for="exampleInputName1">Nome Completo</label>
                          <input type="text" class="form-control" id="exampleInputName1" placeholder="Nome">
                  </div>
                    <!-- Date dd/mm/yyyy -->
                  <div class="form-group">
                    <label>Data da inscrição:</label>
  
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                      </div>
                      <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                    </div>
                    <!-- /.input group -->
                  </div>
                  <!-- /.form group -->
                </div>
                <!-- /.col -->
                <div class="col-md-6">
                  <!-- Date dd/mm/yyyy -->
                  <div class="form-group">
                    <label>Data de Nascimento</label>
  
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                      </div>
                      <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                    </div>
                    <!-- /.input group -->
                  </div>
                  <!-- /.form group -->
                  <div class="form-group">
                    <label for="exampleInputFile">Documento de idenficação</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Escolher</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Carregar</span>
                      </div>
                    </div>
                  </div>
                </div>
  
                <div class="col-md-6">
                  <!-- Date dd/mm/yyyy -->
                  <div class="form-group">
                    <label>Data de Validade</label>
  
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                      </div>
                      <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                    </div>
                    <!-- /.input group -->
                  </div>
                  <!-- /.form group -->
                  <div class="form-group">
                    <label>Nacionalidade</label>
                    <select class="form-control select2" style="width: 100%;">
                      <option selected="selected">Angolana</option>
                      <option>Alaska</option>
                      <option>California</option>
                      <option>Delaware</option>
                      <option>Tennessee</option>
                      <option>Texas</option>
                      <option>Washington</option>
                    </select>
                  </div>
                </div>
               
               <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputName1">Natural de</label>
                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Natural">
                  </div>                
               
                  <!-- /.form-group -->
                  <div class="form-group">
                    <label>Genero</label>
                    <select class="form-control select2" style="width: 100%;">
                      <option selected="selected">Masculino</option>
                      <option>Femenino</option>
                      <option>Prefer não divulgar</option>
                    </select>
                  </div>
                  <!-- /.form-group -->
                </div>
  
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputName1">Residencia</label>
                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Residencia">
                  </div>                
               
                  <!-- /.form-group -->
                  <div class="form-group">
                    <label>Municipio</label>
                    <select class="form-control select2" style="width: 100%;">
                      <option selected="selected">Luanda</option>
                      <option>Soyo</option>
                      <option>Prefer não divulgar</option>
                    </select>
                  </div>
                  <!-- /.form-group -->
                </div>
  
                <div class="col-md-6">
  
                  <div class="form-group">
                    <label>Província</label>
                    <select class="form-control select2" style="width: 100%;">
                      <option selected="selected">Luanda</option>
                      <option>Zaire</option>
                      <option>Prefer não divulgar</option>
                    </select>
                  </div>
                  <!-- /.form-group -->
                  <div class="form-group">
                    <label for="exampleInputName1">Telefone </label>
                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Telefone">
                  </div>                
                  <!-- /.form-group -->
                </div>
  
                <div class="col-md-6">
  
                  <div class="form-group">
                    <label for="exampleInputName1">Telefone Alternativo</label>
                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Telefone Alternativo">
                  </div>                
                  <!-- /.form-group -->
  
                  <div class="form-group">
                    <label>Estado civil</label>
                    <select class="form-control select2" style="width: 100%;">
                      <option selected="selected">Solteiro</option>
                      <option>Casado</option>
                      <option>Divorciado</option>
                    </select>
                  </div>
                  <!-- /.form-group -->
                
                </div>
  
                <div class="col-md-6">
  
                  <div class="form-group">
                    <label for="exampleInputName1">Email</label>
                    <input type="email" class="form-control" id="exampleInputName1" placeholder="Email">
                  </div>                
                  <!-- /.form group -->
                  <div class="form-group">
                    <label for="exampleInputFile">Foto</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Escolher</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Carregar</span>
                      </div>
                    </div>
                  </div>
                  <!-- /.form-group -->
                
                </div>
              </div>
              <!-- /.row -->
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
                <div class="col-md-6">
                    <div class="form-group">
                    <label for="exampleInputName1">Nome Pai</label>
                        <input type="text" class="form-control" id="exampleInputName1" placeholder="Nome Pai">
                    </div>
                    
                    <div class="form-group">
                      <label>Profissão pai</label>
                      <select class="form-control select2" style="width: 100%;">
                        <option selected="selected">Solteiro</option>
                        <option>Casado</option>
                        <option>Divorciado</option>
                      </select>
                    </div>
                    <!-- /.form-group -->
                </div>
                <!-- /.col -->
                <div class="col-md-6">
                  
                  <div class="form-group">
                    <label for="exampleInputName1">Nome Mãe</label>
                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Nome Mãe">
                  </div>
                 
                  <!-- /.form-group -->
                  <div class="form-group">
                    <label>Profissão Mãe</label>
                    <select class="form-control select2" style="width: 100%;">
                      <option selected="selected">Solteiro</option>
                      <option>Casado</option>
                      <option>Divorciado</option>
                    </select>
                  </div>
                  <!-- /.form-group -->
                </div>
               
               <div class="col-md-6">
                <div class="form-group">
                  <label>Situação pai</label>
                  <select class="form-control select2" style="width: 100%;">
                    <option selected="selected">Solteiro</option>
                    <option>Casado</option>
                    <option>Divorciado</option>
                  </select>
                </div>
                <!-- /.form-group -->               
                </div>
                <!-- /.col -->
                
                <div class="col-md-6">
                  <!-- /.form-group -->
                  <div class="form-group">
                    <label>Situação Mãe</label>
                    <select class="form-control select2" style="width: 100%;">
                      <option selected="selected">Solteiro</option>
                      <option>Casado</option>
                      <option>Divorciado</option>
                    </select>
                  </div>
                  <!-- /.form-group -->
                </div>
              </div>
              <!-- /.row -->
             </div>
            <div class="card-header">
              <b><h3 class="card-title">Dados Académicos</h3></b> 
  
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
                    <label>Curso anterior</label>
                    <select class="form-control select2" style="width: 100%;">
                      <option selected="selected">Solteiro</option>
                      <option>Casado</option>
                      <option>Divorciado</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>Nível académico</label>
                    <select class="form-control select2" style="width: 100%;">
                      <option selected="selected">Solteiro</option>
                      <option>Casado</option>
                      <option>Divorciado</option>
                    </select>
                  </div>
                </div>
                <!-- /.col -->
                <div class="col-md-6">
                  <div class="form-group">
                   <label for="exampleInputName1">Nome da escola anterior</label>
                    <input type="text" class="form-control" id="exampleInputName1" placeholder="Escola anterior">
                  </div>
                  <!-- /.form-group -->
                  <div class="form-group">
                    <label for="exampleInputName1">Ano Concluido</label>
                    <input type="number" class="form-control" id="exampleInputName1" placeholder="Ano Concluido">
                  </div>
                  <!-- /.form-group -->
                </div>
               
               <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputName1">Média final</label>
                    <input type="password" class="form-control" id="exampleInputName1" placeholder="Média Final">
                  </div>                
                </div>
                <!-- /.col -->
                
                <div class="col-md-6">
                  <!-- /.form-group -->
                  <div class="form-group">
                    <label>Curso Pretendido</label>
                    <select class="form-control select2" style="width: 100%;">
                      <option selected="selected">Infomática</option>
                      <option>Casado</option>
                      <option>Divorciado</option>
                    </select>
                  </div>
                  <!-- /.form-group -->
                </div>
                 <div class="form-group col-md-3">
                  <button type="button" class="btn btn-block bg-gradient-success btn-sm">Gravar</button>
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



  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
</div>
<!-- ./wrapper -->
 @endsection





 