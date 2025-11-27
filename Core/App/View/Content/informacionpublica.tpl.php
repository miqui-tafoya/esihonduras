<span id="breadcrumbs"><?php echo $metaParams['route'] ?></span>
<div id="main">

    <div class="contenedor-publica">
        <div class="cabecera-publica">
            <p class="cabecera-uno">
                Información Pública
            </p>
            <p class="cabecera-dos-publica">
                La información es para todas y todos y los derechos ESI también.
            </p>
            <p class="cuerpo-texto">Derechos ESI pone a tu disposición la información pública y los datos abiertos sobre
                salud sexual y reproductiva en Honduras.
                El acceso a la información sobre los programas, lineamientos, políticas en derechos sexuales y
                reproductivos también es un derecho, contribuyendo a la formulación y evaluación de políticas públicas
                basadas en evidencia.
                Podrás encontrar información organizada en seis categorías: Protocolo, Políticas públicas, normas,
                lineamientos, guías y otros.
            </p>

        </div>
        <div class="bloque-buscar">

            <p class="cabecera-dos-publica">Buscar por palabra </p>
            <form action="">
                <label for="fname">Ingresa una palabra</label>
                <input type="text" id="" name="fname"><br><br>

            </form>


        </div>

        <div class="bloque-filtrar">
            <p class="cabecera-dos-publica">Filtrar por categoría: </p>
            <form action="#">
                <input type="checkbox" id="protocolo" name="protocolo" value="Protocolo">
                <label for="protocolo"> Protocolo </label><br>

                <input type="checkbox" id="politica" name="politica" value="Política">
                <label for="politica"> Política </label><br>

                <input type="checkbox" id="norma" name="norma" value="Norma">
                <label for="norma">  Norma</label><br><br>

                <input type="checkbox" id="lineamientos" name="lineamientos" value="Lineamientos">
                <label for="lineamientos">  Lineamientos</label><br><br>

                <input type="checkbox" id="guias" name="guias" value="lineamientos">
                <label for="guias">  Guías</label><br><br>

                 <input type="checkbox" id="otros" name="otros" value="Otros">
                <label for="otros">Otros</label><br><br>
                
              
                <input type="submit" value="Filtrar">
            </form>

        </div>

    </div>
</div>