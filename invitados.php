<?php
include_once 'includes/header.php';
?>
<?php
global $database;
$sql = " SELECT id_conferencista, nombres AS Nombre, apellidos AS Apellido, especialidad AS Especialidad, foto, descripcionConferencista AS Descripcion  ";
$sql .= "FROM conferencista ";
$sql .= " INNER JOIN persona ON persona.id_persona = conferencista.id_persona ";

$res = $database->Consulta($sql);
?>
<section class="seccion contenedor">
    <h2>Invitados</h2>
    <section class="invitados contenedor seccion">
        <ul class="lista-invitados clearfix">
            <?php foreach ($res as $ress){?>
                    <li>
                        <a class="invitado-info" href="#invitado<?php  echo $ress['id_conferencista']; ?>">
                            <div class="invitado">
                                <img width="500" src="data:;base64,<?php echo base64_encode($ress['foto']) ?>"alt="imagen invitado">
                                <p>
                                    <?php
                                        echo $ress['Nombre']. " " . $ress['Apellido']
                                    ?>
                                </p>
                            </div>
                        </a>
                    </li>

                    <div style="display:none">
                        <div class="invitado-info" id="invitado<?php  echo $ress['id_conferencista'] ?>">
                        <h2>
                            <?php
                                echo $ress['Nombre']. " " . $ress['Apellido']
                            ?>
                        </h2>
                        <img width="500" src="data:;base64,<?php echo base64_encode($ress['foto']) ?>" alt="imagen invitado">
                        <p style="margin: 15px">
                            <?php
                                echo $ress['Descripcion']
                            ?>
                        </p>
                    </div>
                </div>
            <?php }?>
        </ul>
    </section>
</section>

<?php
include_once 'includes/footer.php';
?>
