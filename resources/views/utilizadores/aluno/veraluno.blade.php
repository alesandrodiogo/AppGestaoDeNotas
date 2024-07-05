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
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Ficha</li>
            </ol>
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

                <h3 class="profile-username text-center">Jesus Afonso</h3>

                <p class="text-muted text-center">Informática</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Turma</b> <a class="float-right">I12AT</a>
                  </li>
                  <li class="list-group-item">
                    <b>Sala</b> <a class="float-right">A5</a>
                  </li>
                  <li class="list-group-item">
                    <b>Classe</b> <a class="float-right">11</a>
                  </li>
                </ul>

                <a href="#" class="btn btn-primary btn-block"
                  ><b>Altera Foto</b></a
                >
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
                <strong><i class="fas fa-book mr-1"></i> Educação</strong>

                <p class="text-muted">
                  B.S. in Computer Science from the University of Tennessee at
                  Knoxville
                </p>

                <hr />

                <strong
                  ><i class="fas fa-map-marker-alt mr-1"></i>
                  Localização</strong
                >

                <p class="text-muted">Luanda, Angola</p>

                <hr />

                <strong
                  ><i class="fas fa-pencil-alt mr-1"></i> Disciplina</strong
                >

                <p class="text-muted">
                  <span class="tag tag-danger">LP</span> |
                  <span class="tag tag-success">E.V.P</span> |
                  <span class="tag tag-info">E.M.C</span> |
                  <span class="tag tag-warning">E.L</span> |
                  <span class="tag tag-primary">E.M</span>
                </p>

                <hr />

                <strong
                  ><i class="far fa-file-alt mr-1"></i> Notificação</strong
                >

                <p class="text-muted">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam
                  fermentum enim neque.
                </p>
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
                    <a
                      class="nav-link active"
                      href="#activity"
                      data-toggle="tab"
                      >Aluno</a
                    >
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#timeline" data-toggle="tab"
                      >Notas</a
                    >
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#settings" data-toggle="tab"
                      >Saúde</a
                    >
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#timeline" data-toggle="tab"
                      >Responsavel</a
                    >
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#settings" data-toggle="tab"
                      >Historico</a
                    >
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#timeline" data-toggle="tab"
                      >Financeiro</a
                    >
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#settings" data-toggle="tab"
                      >Documentos</a
                    >
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#timeline" data-toggle="tab"
                      >Trabalhos</a
                    >
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#settings" data-toggle="tab"
                      >Ocorrências</a
                    >
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#timeline" data-toggle="tab"
                      >Anexos</a
                    >
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#settings" data-toggle="tab"
                      >Aulas</a
                    >
                  </li>
                </ul>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <!-- Post -->
                    <div class="post">
                      <span class="username">
                        <h3>Filiação</h3>
                      </span>
                      <p>
                        <span>Pai: Jesus Afonso</span><br />
                        <span>Mãe: Maria Angelina</span>
                      </p>
                    </div>
                    <!-- /.post -->

                    <!-- Post -->
                    <div class="post clearfix">
                      <span class="username">
                        <h3>Contactos</h3>
                      </span>
                      <p>
                        <span>Telefone: 99999999999</span><br />
                        <span>Tel. Mãe: 99999999999</span><br />
                        <span>Tel. Pai: 99999999999</span><br />
                        <span>Tel. Outro: 99999999999</span>
                      </p>
                    </div>
                    <!-- /.post -->

                    <!-- Post -->
                    <div class="post clearfix">
                      <span class="username">
                        <h3>Documento de Identificação</h3>
                      </span>
                      <p>
                        <span>B.I: 99999999999</span> |
                        <span>Data de Emissão: 99999999999</span><br />

                        <span>Outro: 99999999999</span> |
                        <span>Data de Emissão: 99999999999</span>
                      </p>
                    </div>
                    <!-- /.post -->

                    <!-- Post -->
                    <div class="post clearfix">
                      <span class="username">
                        <h3>Residência</h3>
                      </span>
                      <p>
                        <span>Cidade: 99999999999</span><br />
                        <span>Bairro: 99999999999</span><br />
                        <span>Rua: 99999999999</span><br />
                        <span>Nº Casa: 99999999999</span><br />
                        <span>Ponto de referencia: 99999999999</span><br />
                        <span>Endereço: 99999999999</span>
                      </p>
                    </div>
                    <!-- /.post -->
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="timeline">
                    <!-- The timeline -->
                    <div class="timeline timeline-inverse">
                      <div class="card">
                        <div class="card-header">
                          <h3 class="card-title">Resumo de Notas</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                          <table
                            id="example1"
                            class="table table-bordered table-striped"
                          >
                            <thead>
                              <tr>
                                <th>Disciplina</th>
                                <th>Média 1º T</th>
                                <th>Média 2º T</th>
                                <th>Média 3º T</th>
                                <th>Media final</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>Física</td>
                                <td>12</td>
                                <td>12</td>
                                <td>20</td>
                                <td>12</td>
                              </tr>
                              <tr>
                                <td>Matemática</td>
                                <td>20</td>
                                <td>15</td>
                                <td>15.5</td>
                                <td>16</td>
                              </tr>
                              <tr>
                                <td>Historia</td>
                                <td>20</td>
                                <td>15</td>
                                <td>15.5</td>
                                <td>16</td>
                              </tr>
                              <tr>
                                <td>E.M.C</td>
                                <td>20</td>
                                <td>15</td>
                                <td>15.5</td>
                                <td>16</td>
                              </tr>
                              <tr>
                                <td>Língua P</td>
                                <td>20</td>
                                <td>15</td>
                                <td>15.5</td>
                                <td>16</td>
                              </tr>
                            </tbody>
                            <tfoot>
                              <tr>
                                <th>Disciplina</th>
                                <th>Média 1º T</th>
                                <th>Média 2º T</th>
                                <th>Média 3º T</th>
                                <th>Media final</th>
                              </tr>
                            </tfoot>
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
