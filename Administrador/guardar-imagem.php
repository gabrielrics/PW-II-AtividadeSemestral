<?php

    //imagem do marcador
    if(isset($_FILES["arqimage"])){
        $arqINome = $_FILES["arqimage"] ["name"];
        $arqITipo = $_FILES["arqimage"] ["type"];
        $arqITamanho = $_FILES["arqimage"] ["size"];
        $arqINomeTemp = $_FILES["arqimage"] ["temp_name"];
        $erroImgMarc = $_FILES["arqimage"] ["error"];
    

        if($erroImgMarc==0){
            if(is_uploaded_file($arqINomeTemp)){
                if(move_uploaded_file($arqINomeTemp, "image/" . $arqINome)){
                    $caminhoI = $arqINome;
                }
                else{
                    $erro = "Falha ao mover imagem do marcador";
                    echo "$erro";
                }

            }
            else{
                $erro = "Erro no envio: A imagem do marcador não foi recebida com sucesso.";
                echo "$erro";
            }
        }
        else{
            $erro = "Erro de envio: " . $erro;
            echo "$erro";
        }
    }
    else{
        $erro = "Imafem do Marcador enviado não encontrado";
        echo "$erro";
    }