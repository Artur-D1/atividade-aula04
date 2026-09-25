<?php

$resposta = (string) readline("É mamífero? (sim/nao): ");

if ($resposta === "sim") {

    $resposta = (string) readline("É quadrúpede? (sim/nao): ");

    if ($resposta === "sim") {

        $resposta = (string) readline("É carnívoro? (sim/nao): ");

        if ($resposta === "sim") {
            echo "Leão.\n";
        } elseif ($resposta === "nao") {

            $resposta = (string) readline("É herbívoro? (sim/nao): ");

            if ($resposta === "sim") {
                echo "Cavalo.\n";
            }
        }
    } elseif ($resposta === "nao") {

        $resposta = (string) readline("É bípede? (sim/nao): ");

        if ($resposta === "sim") {

            $resposta = (string) readline("É onívoro? (sim/nao): ");

            if ($resposta === "sim") {
                echo "Homem.\n";
            } elseif ($resposta === "nao") {

                $resposta = (string) readline("É Frutíovoro? (sim/nao): ");
                if ($resposta === "sim")

                    echo "Macaco.\n";
            }
        } elseif ($resposta === "nao") {

            $resposta = (string) readline("É voador? (sim/nao): ");

            if ($resposta === "sim") {
                echo "Morcego.\n";
            } elseif ($resposta === "nao") {

                $resposta = (string) readline("É Aquático? (sim/nao): ");

                if ($resposta === "sim") {
                 
                }
            }
        }
    }
} elseif ($resposta === "nao") {

    $resposta = (string) readline("É ave? (sim/nao): ");

    if ($resposta === "sim") {

        $resposta = (string) readline("É não voadora? (sim/nao): ");

        if ($resposta === "sim") {

            $resposta = (string) readline("É tropical? (sim/nao): ");

            if ($resposta === "sim") {
                echo "Avestruz.\n";
            } elseif ($resposta === "nao") {

                $resposta = (string) readline("É polar? (sim/nao): ");

                if ($resposta === "sim") {
                    echo "Pinguim.\n";
                }
            }
        } elseif ($resposta === "nao") {

            $resposta = (string) readline("É nadadora? (sim/nao): ");

            if ($resposta === "sim") {
                echo "Pato.\n";
            } elseif ($resposta === "nao") {

                $resposta = (string) readline("É de rapina? (sim/nao): ");

                if ($resposta === "sim") {
                    echo "Águia.\n";
                }
            }
        }
    } elseif ($resposta === "nao") {

        $resposta = (string) readline("É réptil? (sim/nao): ");

        if ($resposta === "sim") {

            $resposta = (string) readline("Possui casco? (sim/nao): ");

            if ($resposta === "sim") {
                echo "Tartaruga.\n";
            } elseif ($resposta === "nao") {

                $resposta = (string) readline("É Carnívoro? (sim/nao): ");

                if ($resposta === "sim") {
                    echo "Crocodilo.\n";
                } elseif ($resposta === "nao") {

                    $resposta = (string) readline("Possui patas? (sim/nao): ");
                    if ($resposta === "nao") {
                        echo "Cobra.\n";
                    }
                }
            }
        }
    }
}
