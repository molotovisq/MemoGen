<?php
session_start();
if (!isset($_SESSION['user_id'])) {
  header('Location: login');
  exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">


<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    MemoGen
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.0.4" rel="stylesheet" />


</head>

<body class="g-sidenav-show bg-gray-200">
  <?php include("menu/aside-menu.php"); ?>
  <?php include("utils/select.php");
  $user_data = select_by_id($pdo, 'users', $_SESSION['user_id']);
  ?>

  <div class="main-content position-relative max-height-vh-100 h-100">
    <!-- Navbar -->
    <?php include('menu/navbar-top.php'); ?>


    <div class="container-fluid px-2 px-md-4">
      <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('/assets/img/sunrise.jpg');">
        <span class="mask  bg-gradient-dark  opacity-6"></span>
      </div>
      <div class="card card-body mx-3 mx-md-4 mt-n6">
        <div class="row mb-2 mx-auto">
          <div class="col-auto">
            <div class="avatar avatar-xl position-relative">
              <img src="<?php echo $user_data['profile_picture_path']; ?>" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
            </div>
          </div>
          <div class="col-auto my-auto">
            <div class="h-100">
              <h5 class="mb-1">
                <?php echo $user_data['complete_name']; ?>
              </h5>
              <p class="mb-0 font-weight-normal text-sm">
                <?php echo $user_data['professional_title']; ?>
              </p>
            </div>
          </div>

          <!--div class="col-md-3 my-auto mx-auto">
            <div class="mb-1 btn btn-dark">
              <a href="#">
                <h6 class="mb-1 text-light">
                  <b>
                 Editar Perfil 
                 </b>
                </h6>
                
              </a>
            </div>
          </div-->


        </div>
        <div class="row">
          <div class="row">

            <div class="col-12 col-xl-6">
              <div class="card card-plain h-100">
                <div class="card-header pb-0 p-3">
                  <div class="row">
                    <div class="col-md-8 d-flex align-items-center">
                      <h6 class="mb-0">Informações do Perfil</h6>
                    </div>
                    <div class="col-md-4 text-end">
                      <a id="user-edit" type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="refreshForm();">
                        <b>Editar Perfil</b>
                        <i class="fas fa-user-edit text-secondary text-sm position-relative" data-bs-toggle="tooltip" data-bs-placement="top" title="Editar Perfil"></i>

                      </a>
                    </div>
                  </div>
                </div>
                <div class="card-body p-3">
                  <p class="text-sm">
                    Inserir campo de descrição no banco de dados, se houver necessidade. Por agora, apenas aprecie esse texto de teste.
                  </p>
                  <hr class="horizontal gray-light my-4">
                  <ul class="list-group">
                    <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">Nome Completo: </strong> <?php echo $user_data['complete_name']; ?></li>
                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Título Profissional: </strong> <?php echo $user_data['professional_title']; ?></li>
                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Registro Nacional: </strong> <?php echo $user_data['national_register']; ?></li>
                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">CPF: </strong> <?php echo $user_data['br_cpf']; ?></li>
                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Email: </strong> <?php echo $user_data['email']; ?></li>

                  </ul>
                </div>
              </div>
            </div>
            <div class="col-12 col-xl-6">
              <div class="card card-plain h-100">
                <div class="card-header pb-0 p-3">
                  <h6 class="mb-0">Ultimas Instalações</h6>
                </div>
                <div class="card-body p-3">
                  <ul class="list-group">
                    <li class="list-group-item border-0 d-flex align-items-center px-0 mb-2 pt-0">
                      <div class="avatar me-3">
                        <img src="../assets/img/kal-visuals-square.jpg" alt="kal" class="border-radius-lg shadow">
                      </div>
                      <div class="d-flex align-items-start flex-column justify-content-center">
                        <h6 class="mb-0 text-sm">Hospital do Olho</h6>
                        <p class="mb-0 text-xs">Hospital do Olho de Campo Maior - PI</p>
                      </div>
                      <a class="btn btn-link pe-3 ps-0 mb-0 ms-auto w-25 w-md-auto" href="javascript:;">Reply</a>
                    </li>

                  </ul>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
    <footer class="footer mt-3">
      <div class="container-fluid">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6 mb-lg-0 mb-4">
            <div class="copyright text-center text-sm text-muted text-lg-start">
              ©
              <script>
                document.write(new Date().getFullYear())
              </script>,
              feito com <i class="fa fa-heart"></i> por Molotovisq.
            </div>
          </div>

        </div>
      </div>
    </footer>
  </div>

  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>

  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.0.4"></script>

  <!-- Jquery min -->
  <script src="../assets/js/jquery-3.6.1.min.js"></script>

  <!-- Jquery validate -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.14.0/jquery.validate.min.js"></script>

  <!-- Modal -->
  <div class="modal fade modal-lg" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Perfil</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

          <form id="user-data-form" class="row g-3" action="utils/update_user_data.php" method="POST">

            <div class="col-md-6">
              <label class="form-label">Nome Completo</label>
              <input id="complete-name-field" type="text" class="form-control border border-dark" placeholder="Ex: João Pedro Alves" name="complete_name" required>
            </div>
            <div class="col-md-6">
              <label for="inputPassword4" class="form-label">Título profissional</label>
              <input id="professional-title-field" type="text" class="form-control border border-dark" placeholder="Ex: Técnico em Eletrotécnica" name="professional_title" required>
            </div>
            <div class="col-md-6">
              <label for="inputPassword4" class="form-label">Registro Nacional</label>
              <input id="national-register-field" type="text" class="form-control border border-dark" placeholder="CREA/CFT" name="national_register" required>
            </div>
            <div class="col-md-6">
              <label for="inputPassword4" class="form-label">CPF</label>
              <input id="br-cpf-field" type="text" class="form-control border border-dark" placeholder="Ex: 123.456.789-00" name="br_cpf" required>
            </div>
            <div class="col-md-6">
              <label for="inputPassword4" class="form-label">Email</label>
              <input id="email-field" type="text" class="form-control border border-dark" placeholder="tecnico@gmail.com" name="email" required>
            </div>
        </div>
        </form>
        <div class="modal-footer">
          <button type="button" class="btn btn-gray" data-bs-dismiss="modal">Fechar</button>
          <button id="user-submit" type="submit" class="btn btn-dark">Salvar Mudanças</button>
        </div>
      </div>
    </div>
  </div>
</body>

<script>
  /*
  $(function() {
    $('#user-edit').on('click', function(e) {
      $('#email-field').val("AAAAAAAAAAAA");
    });
  });
  */
</script>

<script>
  $(function() {
    $('#user-submit').on('click', function(e) {
      $('#user-data-form').submit();
    });
  });
</script>

<script>
  $(function() {

    $("#user-data-form").validate({
      rules: {
        complete_name: {
          required: true,
          minlength: 8
        },
        professional_title: {
          required: true,
          minlength: 5
        },
        national_register: {
          required: true,
          digits: true,
          rangelength: [10, 11]

        },
        br_cpf: {
          required: true,
          digits: true,
          minlength: 11
        },
        email: {
          required: true,
          email: true

        }


      },


      messages: {
        complete_name: {
          required: "Por favor, insira o seu nome completo",
          minlength: "O seu nome tem de possuir ao menos 8 caracteres"
        },
        professional_title: {
          required: "Por favor, insira o seu título profissional",
          minlength: "O seu seu título profissional tem de possuir ao menos 10 caracteres"
        },
        national_register: {
          required: "Por favor, insira o seu registro nacional",
          rangelength: "O seu seu registro nacional tem de possuir entre 10 e 11 caracteres",
          digits: "Por favor, insira somente números"
        },
        br_cpf: {
          required: "Por favor, insira o seu CPF",
          rangelength: "O seu CPF tem de possuir 11 caracteres",
          digits: "Por favor, insira somente números"
        },
        email: {
          required: "Por favor, insira o seu email",
          email: "Por favor, insira um e-mail válido"

        }

      }
    });
  });
</script>


<script>
  var oReq = new XMLHttpRequest(); // New request object
  oReq.onload = function() {

    dbResponse = JSON.parse(this.responseText)
    //console.log(resp);
  };
  oReq.open("get", "utils/get_user_data.php", true);
  //                               ^ Don't block the rest of the execution.
  //                                 Don't wait until the request finishes to
  //                                 continue.
  oReq.send();

  function refreshForm() {
    function refreshField(field, data) {
      document.getElementById(field).value = dbResponse[data];
    }
    var inputs = document.getElementById("user-data-form").elements;

    for (let i = 0; i < inputs.length; i++) {
      refreshField(inputs[i].id, inputs[i].name)
    }
  }
</script>


</html>