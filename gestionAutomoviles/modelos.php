<?php
require_once "cliente-automoviles.php";
$client->TestBD();
$marca=$_GET["marca"];
$modeloss = $client->ObtenerModelosPorMarca($marca);
?>
                <style>
                    figure {
                        border: 1px #cccccc solid;
                        padding: 4px;
                        margin: auto;
                    }

                    figcaption {
                        background-color: navy;
                        color: white;
                        font-weight: bolder;
                        font-style: italic;
                        padding: 2px;
                        text-align: center;
                    }
                </style>
                <?php
                foreach ($modeloss as $model) {
                    //var_dump($model);
                    ?>
                    <figure>
                        <img src="images/<?=strtolower($marca)?>.jpg" alt="logo <?=$marca?>">
                        <figcaption><?=$model['modelo']?></figcaption>
                    </figure>
                    <?php
                }
                ?>







