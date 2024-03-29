<?php require_once('src/validar_sesion.php') ?>
<div class="sidebar">
        <div class="logo-details">
            <div id="logoprin" class='bx bxs-graduation icon' color="blue"></div>
            <div class="logo_name">E. SAN MARCOS</div>
            <i class='bx bx-menu' id="btn"></i>
        </div>
        <ul class="nav-list d-none" id="nav-list">
            <li>
                <a href="perfil_padre.php" onclick="">
                    <i class='bx bx-building-house'></i>
                    <span class="links_name">Principal</span>
                </a>
                <span class="tooltip">Principal</span>
            </li>
            <li>
                <a href="padre_notas.php">
                    <i class='bx bx-notepad'></i>
                    <span class="links_name">Reporte de Notas</span>
                </a>
                <span class="tooltip">Notas</span>
            </li>
            <li>
                <a href="asistencia_padre.php">
                    <i class='bx bxs-x-square'></i>
                    <span class="links_name">Reporte de Faltas</span>
                </a>
                <span class="tooltip">Faltas</span>
            </li>
            <li>
                <a href="observaciones_padre.php">
                    <i class='bx bx-file-find'></i>
                    <span class="links_name">Reporte Observaciones</span>
                </a>
                <span class="tooltip">Observaciones</span>
            </li>
            <div id="hogar">
                <p>Tu cuenta</p>
            </div>
            <li>
                <a href="editar_perfil_padre.php">
                    <i class='bx bxs-wrench'></i>
                    <span class="links_name">Editar</span>
                </a>
                <span class="tooltip">Editar</span>
            </li>
            <li>
                <a href="src/cerrar_sesion.php">
                    <i class='bx bx-exit'></i>
                    <span class="links_name">Salir</span>
                </a>
                <span class="tooltip">Salir</span>
            </li>
            <div id="hogar2">
                <p>Documentación</p>
            </div>
            <li>
                <a href="#">
                    <i class='bx bx-help-circle'></i>
                    <span class="links_name">Ayuda</span>
                </a>
                <span class="tooltip">Ayuda</span>
            </li>
        </ul>
    </div>