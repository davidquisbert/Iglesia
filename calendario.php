<?php
    include_once 'includes/header.php';
?>
<section class="seccion contenedor">
    <h2>Calendario de Eventos</h2>

        <?php
        global $database;
        $sql = " SELECT nombreEvento AS Evento, descripcion AS Tipo_Evento, fecha AS Fecha, horarioIncio AS Hora, ";
        $sql .= "descripcionConferencista AS Descripcion, nombres AS Nombre_Conferencista, apellidos AS Apellido_Conferencista";
        $sql .= " FROM evento ";
        $sql .= " INNER JOIN horario_Evento ON horario_Evento.id_evento = evento.id_evento ";
        $sql .= " INNER JOIN horario ON horario.id_horario = horario_Evento.id_horario ";
        $sql .= " INNER JOIN conferencista_Evento ON conferencista_Evento.id_evento = evento.id_evento ";
        $sql .= " INNER JOIN conferencista ON conferencista.id_conferencista = conferencista_Evento.id_conferencista ";
        $sql .= " INNER JOIN persona ON conferencista.id_persona = persona.id_persona";
        $sql .= " INNER JOIN tipoEvento ON evento.id_tipoEvento = tipoEvento.id_tipoEvento";

        $res = $database->Consulta($sql);
        ?>
    <div class="evento">
        <?php
        $fecha = 0;
        foreach ($res as $ress)
        {

            if ($ress['Fecha'] != $fecha) {
        ?>
        <div class="calendario">
        <h3 class="dias">

            <i class="fa fa-calendar"></i>
            <?php

            Setlocale (LC_TIME,'spanish');
            echo ucwords(strftime ("%A, %d de %B del %Y", strtotime($ress['Fecha'])));

            $fecha = $ress['Fecha'];}f
            ?>
        </h3>
            <?php

            ?>
            <div class="dia">
                <p class="titulo">
                    <?php echo $ress['Evento']?>
                </p>

                <p class="hora"><i class="fa fa-clock" aria-hidden="true"></i>
                    <?php echo $ress['Fecha'] . " " . $ress['Hora']?>
                </p>

                <p>
                    <i class="fa fa-church" aria-hidden="true"></i>
                    <?php echo $ress['Tipo_Evento']?>
                </p>

                <p>
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <?php echo $ress['Nombre_Conferencista'] . " " . $ress['Apellido_Conferencista']?>
                </p>
            </div>

        <?php }?>
            <div>
    </div>
</section>

<?php
    include_once 'includes/footer.php';
?>
