<html>
<div class="menu">
    <input type="text"
        style="width:100%; text-align: center; height:30px; margin-top:5px; font-size:15px; font-style: normal; color: white; background-color: #1778A9; border-radius:5px"
        disabled value="Hola&nbsp;<?php echo $rw['nombre_trabajador']; ?>">

    <div class="line">
        <li class="nav-item dropdown" id='dmenu' style="list-style:none;">
            <label class="lnr lnr-enter">
                <input type="submit" id="navbarDropdown" data-toggle="dropdown"
                    style="margin-left: 8px; background: none; color: black; font-size: 13px;" value="Menu principal"
                    onclick="window.location='principal'">


    </div></label></li>
    <hr style="margin: 0px 0px;">
    
    <div class="line">
        <li class="nav-item dropdown" id='dmenu' style="list-style:none;">
            <label class="lnr lnr-book">
                <input type="submit" id="navbarDropdown" data-toggle="dropdown"
                    style="margin-left: 8px; background: none; color: black; font-size: 13px;"
                    value="Orden de suministro" onclick="window.location.href='suministrosFG'">
                
            </label>
        </li>
    </div>
    <hr style="margin: 0px 0px;">

    <div class="line"><label class=""><a href="close_sesion"
                style="color: red; font-size:17px; font-style:normal; margin-left: 60px; text-decoration: none;">
                Cerrar Sesion
            </a></label></div>

    <br><br><br><br>
</div>

</html>