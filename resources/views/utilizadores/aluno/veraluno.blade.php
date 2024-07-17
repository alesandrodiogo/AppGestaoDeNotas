@extends('layouts.main')
@section('title','Ver Aluno')
@section('content')
<div class="wrapper">

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Ficha</h1>
          </div>
        </div>
      </div>
      <!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img
                    class="profile-user-img img-fluid img-circle"
                    src="../../../dist/img/user4-128x128.jpg"
                    alt="User profile picture"
                  />
                </div>

                <h3 class="profile-username text-center">{{ $aluno->nome_completo }}</h3>

                <p class="text-muted text-center">{{ $aluno->numero_estudante }}</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Turma</b> <a class="float-right">{{ $aluno->turma->nome }}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Sala</b> <a class="float-right">{{ $aluno->sala->nome }}</a>
                  </li>
                  <li class="list-group-item">
                    <b>Data Nascimento</b> <a class="float-right">{{ $aluno->data_nascimento }}</a>
                  </li>
                </ul>

                
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Sobre Aluno</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i> Nome do pai</strong>

                <p class="text-muted">
                {{ $aluno->nome_pai }}
                </p>

                <hr />

                <strong><i class="fas fa-book mr-1"></i> Nome da mãe</strong>

                <p class="text-muted">
                {{ $aluno->nome_mae }}
                </p>

                <hr />

                <strong><i class="fas fa-book mr-1"></i> Telefone</strong>

                <p class="text-muted">
                {{ $aluno->telefone }}
                </p>

                <hr />

                <strong
                  ><i class="fas fa-map-marker-alt mr-1"></i>
                  Localização</strong
                >

                <p class="text-muted">{{ $aluno->morada }}</p>

                <hr />
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item">
                    <a class="nav-link" href="#timeline" data-toggle="tab"
                      >Notas</a
                    >
                  </li>
                  
                  
                </ul>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <!-- /.tab-pane -->
                  <div class="active tab-pane" id="timeline">
                    <!-- The timeline -->
                    <div class="timeline timeline-inverse">
                      <div class="card">
                        <div class="card-header">
                          <h3 class="card-title">Resumo de Notas</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                        <table class="table table-striped projects">
            <thead>
              <tr>
                <th style="width: 15%">ID</th>
                <th style="width: 15%">Aluno</th>
                <th style="width: 15%">Ano lectivo</th>
                <th style="width: 15%">Disciplina</th>
                <th style="width: 15%">MT1</th>
                <th style="width: 15%">MT2</th>
                <th style="width: 15%">MT3</th>
                <th style="width: 15%">MFD</th>
                <th style="width: 15%">MAC</th>
                <th style="width: 15%">NPP</th>
                <th style="width: 15%">NPT</th>
                <th style="width: 15%">MT</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($aluno->notas as $nota)
              <tr>
                <td>{{ $nota->id }}</td>
                <td>{{ $nota->aluno->nome_completo }}</td>
                <td>{{ $nota->anoLectivo->nome ?? 'N/A' }}</td>
                <td>{{ $nota->disciplina->nome }}</td>
                <td>{{ $nota->mt1 }}</td>
                <td >{{ $nota->mt2 }}</td>
                <td >{{ $nota->mt3 }}</td>
                <td >{{ $nota->mfd }}</td>
                <td>{{ $nota->mac }}</td>
                <td >{{ $nota->npp }}</td>
                <td >{{ $nota->npt }}</td>
                <td >{{ $nota->mt }}</td>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
                        </div>
                        <!-- /.card-body -->
                      </div>
                    </div>
                  </div>
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="settings">
                    <form class="form-horizontal">
                      <div class="form-group row">
                        <label for="inputName" class="col-sm-2 col-form-label"
                          >Name</label
                        >
                        <div class="col-sm-10">
                          <input
                            type="email"
                            class="form-control"
                            id="inputName"
                            placeholder="Name"
                          />
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-2 col-form-label"
                          >Email</label
                        >
                        <div class="col-sm-10">
                          <input
                            type="email"
                            class="form-control"
                            id="inputEmail"
                            placeholder="Email"
                          />
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-2 col-form-label"
                          >Name</label
                        >
                        <div class="col-sm-10">
                          <input
                            type="text"
                            class="form-control"
                            id="inputName2"
                            placeholder="Name"
                          />
                        </div>
                      </div>
                      <div class="form-group row">
                        <label
                          for="inputExperience"
                          class="col-sm-2 col-form-label"
                          >Experience</label
                        >
                        <div class="col-sm-10">
                          <textarea
                            class="form-control"
                            id="inputExperience"
                            placeholder="Experience"
                          ></textarea>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputSkills" class="col-sm-2 col-form-label"
                          >Skills</label
                        >
                        <div class="col-sm-10">
                          <input
                            type="text"
                            class="form-control"
                            id="inputSkills"
                            placeholder="Skills"
                          />
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <div class="checkbox">
                            <label>
                              <input type="checkbox" /> I agree to the
                              <a href="#">terms and conditions</a>
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-danger">
                            Submit
                          </button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
</div>
<!-- ./wrapper -->
 @endsection
