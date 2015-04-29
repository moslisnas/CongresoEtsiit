<section class="leftSection">
        <h1>¡Regístrate!</h1>
        <p>
        	Tenemos diversas cuotas a su disposición:
        </p>
        <!-- begin .boxes -->
        <div class="clearfloat"></div>
        <div class="boxes boxesInscripcion">
			<ul>
                <div id="cuota1" class="cuota">
                    <li>
                        <img src="images/inscripcion1.jpg" style="width:85%;height:85%" alt="Profesor"><h2>Cuota profesores:</h2>
                        <p>Dirigidas a docentes de la Universidad de Granada.</p>
                        <span>2,95€</span>
                        <button onClick="showForm()">¡Apuntarse!</button>
                    </li>
                </div>
                <div id="cuota2" class="cuota">
                    <li>
                        <img src="images/inscripcion2.jpg" style="width:85%;height:85%" alt="Usuario"><h2>Cuota normal:</h2>
                        <p>Dirigidas a cualquier persona interesada en el evento que no pertenezca a la Universidad de Granada.</p>
                        <span>4,95€</span>
                        <button onClick="showForm()">¡Apuntarse!</button>
                    </li>
                </div>
                <div id="cuota3" class="cuota">
                    <li>
                        <img src="images/inscripcion3.jpg" style="width:85%;height:85%" alt="Alumno"><h2>Cuota alumnos:</h2>
                        <p>Dirigidas a alumnos matriculados en el año vigente en la Universidad de Granada.</p>
                        <span>3,95€</span>
                        <button onClick="showForm()">¡Apuntarse!</button>
                    </li>
                </div>
            </ul>
        </div>
        <div class="clearfloat"></div>
        <!-- end .boxes -->
        <div class="hiddenForm" id="form">
            <div class="boxes boxFormulario">
                <form action="#" method="post">
                    <div class="buttonCancelar">
                        <button onclick="showForm()" type="button"><icon>^<icon></button>
                    </div>
                    <div class="titleForm">
                        <p>Rellene sus datos:</p>
                    </div>
                    <div class="fields">
                        <div>
                            <label for="usuario">Usuario*</label>
                            <input type="text" id="usuario" value="" placeholder="Nombre de Usuario">
                        </div>
                        <div>
                            <label for="contrasenia">Constraseña*</label>
                            <input type="password" id="contrasenia" value="" placeholder="Contraseña">
                        </div>
                        <div>
                            <label for="nombre">Nombre*</label>
                            <input type="text" id="nombre" value="" placeholder="Nombre">
                        </div>
                        <div>
                            <label for="apellidos">Apellidos*</label>
                            <input type="text" id="apellidos" value="" placeholder="Apellidos">
                        </div>
                        <div>
                            <label for="correoElectronico">Correo-E*</label>
                            <input type="text" id="correoElectronico" value="" placeholder="Correo-E">
                        </div>
                    </div>
                    <div class="fields">
                        <div>
                            <label for="localidad">Localidad</label>
                            <input type="text" id="localidad" value="" placeholder="Localidad">
                        </div>
                        <div>
                            <label for="localidad">Teléfono</label>
                            <input type="text" id="telefono" value="" placeholder="Teléfono">
                        </div>
                    </div>
                    <div class="clearfloat"></div>
                    <div class="errorText" id="errorDiv">
                        <p id="errorMessage"></p>
                    </div>
                    <div class="buttonForm">
                        <button onclick="verificarFormulario()" type="button">Registrarse</button>
                    </div>
                </form>
            </div>
        </div>
    </section>