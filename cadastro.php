


    <form name='cadastro' method="POST">
        <br>Male:<input type="text" name="Fname">:<br />
        <br><input type="submit" value="enviar" name="submit"><br />
    </form>
        
    
    <?php
    $Fname = [];
    if($_POST["Fname"] != ""){
    $Fname = $_POST["Fname"];
    echo "$Fname";
    }

    ?>