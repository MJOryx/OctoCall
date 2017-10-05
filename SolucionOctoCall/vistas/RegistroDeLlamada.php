<?php
/**
 * Created by PhpStorm.
 * User: edwinmuj
 * Date: 9/28/17
 * Time: 10:32 PM
 */
echo "<html>
<header>
</header>
<body>
";
$content = file_get_contents('header.php');
echo $content;
echo   "
<div class=\"container-fluid\">
    
    <div class=\"row\">
        <div class=\"col m3\"></div>
        <div class=\"col m8\">
        <h3>Registrar Llamada</h3>
             <div class=\"row\">
                <form class=\"col s12\">
                    <div class='row'>
                        <input type=\"text\" class=\"timepicker  col m6\">
                          <input type=\"text\" class=\"datepicker col m6\">
                    </div>
                  <div class=\"row\">
                    <div class=\"input-field col s4\">
                      <i class=\"material-icons prefix\">account_circle</i>
                      <input id=\"icon_prefix\" type=\"text\" class=\"validate\">
                      <label for=\"icon_prefix\">Pasajero</label>
                    </div>
                    <div class=\"input-field col s4\">
                      <i class=\"material-icons prefix\">phone</i>
                      <input id=\"icon_telephone\" type=\"tel\" class=\"validate\">
                      <label for=\"icon_telephone\">Teléfono</label>
                    </div>
                    <div class=\"input-field col s4\">
                      <i class=\"material-icons prefix\">email</i>
                      <input id=\"email\" type=\"email\" class=\"validate\">
                      <label for=\"email\" data-error=\"wrong\" data-success=\"right\">Correo</label>
                    </div>
                  </div>
                  <div class='row'>
                        <div class=\"input-field col s6\">
                          <i class=\"material-icons prefix\">mode_edit</i>
                          <textarea id=\"icon_prefix2\" class=\"materialize-textarea\"></textarea>
                          <label for=\"icon_prefix2\">Asunto</label>
                        </div>    
                        <div class='col m6'>

                        </div>                
                    </div>
                                               <a href=\"#\" data-activates=\"slide-out-fixed\" class=\"btn \" ><i class=\"material-icons right\">send</i></a>
                    
                </form>
              </div>
        
        </div>
    </div>
</div>
";

echo "
</body>

<script
        src=\"https://code.jquery.com/jquery-3.2.1.min.js\"
        integrity=\"sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=\"
        crossorigin=\"anonymous\">
</script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js\"></script>

<script src=\"../js/picker.js\"></script>
<script src=\"../js/picker.date.js\"></script>
<script src=\"../js/picker.time.js\"></script>
<script src=\"../js/init.js\"></script>
";

