<html>
<head>
</head>
<body>
    <style>
    @import url(//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css);

    @import url(https://fonts.googleapis.com/css?family=Titillium+Web:300);

    .fa-2x {
        font-size: 2em;
    }

    .fa {
        position: relative;
        display: table-cell;
        width: 60px;
        height: 36px;
        text-align: center;
        vertical-align: middle;
        font-size: 20px;
    }

    #corazon {
        color: rgb(11, 54, 24);
        margin-top: 4px;
    }

    #icon-color {
        color: #ffffff;
    }

    .main-menu:hover,
    nav.main-menu.expanded {
        width: 250px;
        overflow: visible;
    }

    .main-menu {
background: #2e2f31;
border-right:1px solid #e5e5e5;
position: relative;
margin-top: 46px;
bottom:0;
height: 95%;
left:0;
width:  55px;
overflow:hidden;
-webkit-transition:width .05s linear;
transition:width .05s linear;
-webkit-transform:translateZ(0) scale(1,1);
z-index:1000;
}

    .main-menu>ul {
        margin: 7px 0;
    }

    .main-menu li {
        position: relative;
        display: block;
        width: 250px;
    }

    .main-menu li>a {
position:relative;
display:table;
border-collapse:collapse;
border-spacing:0;
color:rgb(255, 255, 255);
 font-family: arial;
font-size: 14px;
text-decoration:none;
-webkit-transform:translateZ(0) scale(1,1);
-webkit-transition:all .1s linear;
transition:all .1s linear;

    }

    .main-menu .nav-icon {
        position: relative;
        display: table-cell;
        width: 50px;
        height: 26px;
        text-align: center;
        vertical-align: middle;
        font-size: 18px;
    }

    .main-menu .nav-text {
        position: relative;
        display: table-cell;
        vertical-align: middle;
        width: 190px;
        font-family: 'Titillium Web', sans-serif;
    }

    .main-menu>ul.logout {
        position: absolute;
        left: 0;
        bottom: 0;
    }

    .no-touch .scrollable.hover {
        overflow-y: hidden;
    }

    .no-touch .scrollable.hover:hover {
        overflow-y: auto;
        overflow: visible;
    }

    a:hover,
    a:focus {
        text-decoration: none;
    }

    hr {
        padding: 0%;
    }

    nav {
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        -o-user-select: none;
        user-select: none;
    }

    nav ul,
    nav li {
        outline: 0;
        margin: 0;
        padding: 0;
    }

    .main-menu li:hover>a,
    nav.main-menu li.active>a,
    .dropdown-menu>li>a:hover,
    .dropdown-menu>li>a:focus,
    .dropdown-menu>.active>a,
    .dropdown-menu>.active>a:hover,
    .dropdown-menu>.active>a:focus,
    .no-touch .dashboard-page nav.dashboard-menu ul li:hover a,
    .dashboard-page nav.dashboard-menu ul li.active a {
        color: white;
        background-color: #5fa2db;
        width: 100%;

    }

    .area {
        float: left;
        background: #e2e2e2;
        width: 100%;
        height: 100%;
    }

    @font-face {
        font-family: 'Titillium Web';
        font-style: normal;
        font-weight: 300;
        src: local('Titillium WebLight'), local('TitilliumWeb-Light'), url(http://themes.googleusercontent.com/static/fonts/titilliumweb/v2/anMUvcNT0H1YN4FII8wpr24bNCNEoFTpS2BTjF6FB5E.woff) format('woff');
    }


    nav li ul {
        display: none;
        position: absolute;
        top: 0px;
        left: 250px;
        background: #e5e5e5;
        width: auto;
        padding: 0px;


    }

    nav li:hover ul,
    #nav-text {
        font-family: 'Titillium Web', sans-serif;
        display: block;
        width: auto;

    }
    </style>
    <nav class="main-menu">
        <ul>
            <li>
                <a href="#">
                    <i class="fa fa-hospital-o fa-2x" id="icon-color"></i>
                    <span class="nav-text">
                        HRAE IXTAPALUCA
                    </span>
                </a>

            </li>
            <hr style="margin: 0px 0px;">
            <li class="has-subnav">
                <a href="principal">
                    <i class="fa fa-book fa-2x" id="icon-color"></i>
                    <span class="nav-text">
                        Principal
                    </span>
                </a>
            
            </li>
            <hr style="margin: 0px 0px;">
            <li class="has-subnav">
                <a href="#">
                    <i class="fa fa-medkit fa-2x" id="icon-color"></i>
                    <span class="nav-text">
                    Tipo de O.S
                    </span>
                </a>
                            <input type="hidden" value="2022" id="year2">
                            <input type="hidden" value="2023" id="year3">

                            <input type="hidden" value="gratutita 2022" id="tipo4">
                            <input type="hidden" value="gratuita 2023" id="tipo5">
                <ul style="background: #2e2f31;">
                
                    <li><a href="#" id="nav-text" onclick="tipoFarmacia3();"><i class="fa fa-medkit fa-2x" id="icon-color"></i>
                            <span class="nav-text">Gratuita 2022
                            </span></a></li>
                    <li><a href="#" id="nav-text" onclick="tipoFarmacia4();"><i class="fa fa-medkit fa-2x" id="icon-color"></i>
                            <span class="nav-text">Gratuita 2023
                            </span></a></li>
                            <li><a href="#" id="nav-text" data-toggle="modal"
                                data-target="#myModal_editarOrden"><i class="fa fa-medkit fa-2x" id="icon-color"></i>
                            <span class="nav-text">Editar O.S
                            </span></a></li>
                            <li><a href="#" id="nav-text" data-toggle="modal"
                                data-target="#myModal_cancelarOrden"><i class="fa fa-medkit fa-2x" id="icon-color"></i>
                            <span class="nav-text">Cancelar O.S
                            </span></a></li>

                </ul>
            </li>
            <hr style="margin: 0px 0px;">
            <li class="has-subnav">
                <a href="#">
                    <i class="fa fa-barcode fa-2x" id="icon-color"></i>
                    <span class="nav-text">
                        Movimientos FG 2022
                    </span>
                </a>
                <ul style="background: #2e2f31;">
                    <li><a href="reporteEntregasOsFG" id="nav-text"><i
                                class="fa fa-barcode fa-2x" id="icon-color"></i>
                            <span class="nav-text">Reporte faltante de entregas</span></a></li>
                    <li><a href="reporteEntregadoFG" id="nav-text"><i class="fa fa-barcode fa-2x"
                                id="icon-color"></i>
                            <span class="nav-text">Reporte entregado</span></a></li>

                </ul>
            </li>
        
            <hr style="margin: 0px 0px;">
           <!-- <li>
                <a href="#">
                    <i class="fa fa-archive fa-2x" id="icon-color"></i>
                    <span class="nav-text">
                        Minimos/Maximos
                    </span>
                </a>
                <ul style="background: #2e2f31;">
                    <li><a href="#" target="_blank" id="nav-text" onclick="window.open('minimos','','width=1500,height=1080,left=80,top=70,toolbar=yes');"><i class="fa fa-archive fa-2x"
                                id="icon-color"></i>
                            <span class="nav-text">Minimos no alcanzados</span></a></li>
                    <li><a href="#" target="_blank" id="nav-text" onclick="window.open('minimosCubiertos','','width=1500,height=1080,left=80,top=70,toolbar=yes');"><i class="fa fa-archive fa-2x"
                                id="icon-color"></i>
                            <span class="nav-text">Minimos Cubiertos</span></a></li>
                    <li><a href="#" target="_blank" id="nav-text" onclick="window.open('maximosCubiertos','','width=1500,height=1080,left=80,top=70,toolbar=yes');"><i class="fa fa-archive fa-2x"
                                id="icon-color"></i>
                            <span class="nav-text">Maximos Cubiertos</span></a></li>

                </ul>
            </li>-->
        
    </ul>
        <ul class="logout">
            <li>
                <a href="close_sesion">
                    <i class="fa fa-power-off fa-2x" id="icon-color"></i>
                    <span class="nav-text">
                        Logout
                    </span>
                </a>
            </li>
        </ul>
    </nav>
</body>

</html>