<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Bordados Casa Morales</title>
<link rel="stylesheet" href="css/style.css" />
<link href='http://fonts.googleapis.com/css?family=Terminal+Dosis' rel='stylesheet' type='text/css'>
<!-- The below script Makes IE understand the new html5 tags are there and applies our CSS to it -->
<!--[if IE]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

   <script src="js/jQuery-2.1.4.min.js"></script>

 <script src="bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="icheck.min.js"></script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <script type="text/javascript">

       $(document).ready(function() {

       


         $('#colores').click(function(){

      $.ajax({
      type: "POST",
      url: "//localhost/CasaMorales/colores.html",
      success: function(a) {
              $('#colores1').html(a);

   }
      });
   });


  $('#uso').click(function(){

      $.ajax({
      type: "POST",
      url: "//localhost/CasaMorales/uten.html",
      success: function(a) {
              $('#uten').html(a);

   }
      });
   });

         });
       </script>
</head>
<body style="background:url(images/vatii.jpg) no-repeat center center fixed;  background-size: cover;">

<header>
    <div class="wrapper">
        <h1><a href="index.html" id="brand" title="Bordados Casa Morales">Bordados Casa Morales</a></h1>
         <nav>
            <ul>
                <li>
                  <a href="index.html">Inicio</a>
                  <ul class="sub-menu">  
                        <li><a href="quienSoy.html">Quienes Somos</a></li>
                        <li><a href="mision.html">Misión</a></li>
                        <li><a href="vision.html">Visión</a></li>
                        <li><a href="valores.html">Valores</a></li>
                    
                    </ul>
                </li>
                <li><a href="search.html">Catalogo</a>
                 <ul class="sub-menu">
                         <li><a href="manteles.html">Manteles</a></li>
                        <li><a href="estolas.html">Estolas</a></li>
                        <li><a href="casullas.html">Casullas</a></li>
                        <li><a href="estandartes.html">Estandartes</a></li>
                        <li><a href="juego.html">Juego de altar</a></li>
                        <li><a href="pano.html">Paño de Hombros</a></li>
                    </ul></li>
                </li>
                <li><a href="contacto.html">Contacto</a>
               <ul class="sub-menu">
                      
                    </ul></li></li>
                <li><a href="informacion.html">Información Liturgica </a>
                  <ul class="sub-menu">
                        <li><a href="colores2.html">Significado de los colores liturgicos</a>
                        <li><a href="uten2.html">Significado de los utensilios liturgicos</a></li>
                        
                    </ul></li>
          </ul>
        </nav>
    </div>
</header>


<aside id="top">
    <div class="wrapper">
        <ul id="social">
            <li><a href="#" class="facebook" title="Danos like en Facebook">Danos like en Facebook</a></li>
            <li><a href="#" class="twitter" title="Siguenos en twitter">Siguenos en twitter</a></li>
        </ul>
       
        <div id="action-bar"><a href="login.html"></a> </div> 
    </div>
    </aside>
  
 <div style="height:100%; width:100%; alignment-adjust:before-edge;">&nbsp;</div>


   

 <div style=" background:rgba(255, 255, 255, 0.80); height:100%; width:100%; alignment-adjust:before-edge;"><br><br>
  <h1  style=" color:#000;font-size: 30px;alignment-adjust: central; text-align: justify;margin:20px;width:100%; font-family:cham;">LOG IN</h1> 

  <p style=" width:50%; margin:20px; color:#000;font-size: 20px; alignment-adjust: central; text-align: justify;font-family: 'Terminal Dosis', "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, sans-serif;">

  <ol style=" width:50%; margin:20px; color:#000;font-size: 20px; alignment-adjust: central; text-align: justify;font-family: 'Terminal Dosis', "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, sans-serif;">
   <body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
    
      <div class="login-box-body">
        <p class="login-box-msg">Ingresa tus datos para inciar con tu cuenta</p>


<br>
<br>

        <form action="checa.php" method="post">
        	<div style="aligment:left;">
          <div class="form-group has-feedback">
          	<label>correo : </label>
            <input type="email" class="form-control" placeholder="Email" name="usuario">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
          	<br>
          	<label>Contraseña : </label>
            <input type="password" class="form-control" placeholder="Password" name="contrasenia">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-8">
              <div class="checkbox icheck">
               
              </div>
            </div><!-- /.col -->
            <div class="col-xs-4">
            	<br>
              <button type="submit">INGRESAR</button>
            </div><!-- /.col -->
          </div>

        </form>
<br>
<br>
       
     
      

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <!-- jQuery 2.1.4 -->
    <script src="jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="icheck.min.js"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>


    <script type="text/javascript">
function validar()
{
    if(document.getElementById("nombre").value)
    {
        document.getElementById("nombreError").innerHTML="";
    }else{
        document.getElementById("nombreError").innerHTML="indica un nombre";
        return false;
    }
    return true;
}
</script>
    <ol id="colores1" style=" width:100%; margin:20px; color:#000;font-size: 20px; alignment-adjust: central; text-align: justify;" >


        </ol>


  <ol style=" width:50%; margin:20px; color:#FFF;font-size: 20px; alignment-adjust: central; text-align: justify;font-family: 'Terminal Dosis', "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, sans-serif;" id="uten">


        </ol>


      
  </ol>


</p>
<br>
</div>


<article >
</article>



<footer>
  <div class="wrapper">
      <span class="logo">Bordados Casa Morales.</span>
        <a  target="_blank"  class="right">Bordados Casa Morales , Aguascalientes , Ags.</a> <a href="#">Calle Tulum #101 Fracc. Pirámides C.P. 20275 </a><a href="#">Teléfono : 044-449-18-18-81. </a> 
        <a > contacto@bordadoscasamorales.com</a><br />
       
</footer>
</div>
</body>
</html>
