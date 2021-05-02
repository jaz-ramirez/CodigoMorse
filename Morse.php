<?php
    $tradu = (isset ($_POST["traduccion"]) && $_POST["traduccion"] !="") ?$_POST["traduccion"]: "No especificó"." ";
    $codigo = (isset ($_POST["codigo"]) && $_POST["codigo"] !="") ?$_POST["codigo"]: "No especificó"." ";

    $verifica = ["A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z","1","2","3","4","5","6","7","8","9","0",",","?","!","\""];
    $cuenta=0;
    $mayus= strtoupper($codigo);
    $elementos = str_split($mayus);
    if($tradu=="aespañol")
    {
        foreach ($elementos as $llave => $valor)
        {
            for($i=0; $i<40; $i++)
            {
                if($valor == $verifica[$i])
                    $cuenta++;
            }
        }
    }
    if($cuenta>0)
        echo "Elemento inválido";
    

    if($tradu=="amorse")
    {
        echo "<h4>De Español a Morse</h4>";
        
        $normal = str_split($mayus);
        echo "<h1>Su texto a traducir es: </h1>";
        foreach($normal as $llave => $valor)
            echo $valor;
        
        echo "<h1>Su traducción es: </h1>";
        foreach($normal as $llave => $valor)
        {
            
            switch ($valor)
            {
                case ($valor=="A"):
                    echo ".-"." ";
                    break;
                case ($valor=="B"):
                    echo "-..."." ";
                    break;
                case ($valor=="C"):
                    echo "-.-."." ";
                    break;
                case ($valor=="D"):
                    echo "-.."." ";
                    break;
                case ($valor=="E"):
                    echo "."." ";
                    break;
                case ($valor=="F"):
                    echo "..-."." ";
                    break;
                case ($valor=="G"):
                    echo "--."." ";
                    break;
                case ($valor=="H"):
                    echo "...."." ";
                    break;
                case ($valor=="I"):
                    echo ".."." ";
                    break;
                case ($valor=="J"):
                    echo ".---"." ";
                    break;
                case ($valor=="K"):
                    echo "-.-"." ";
                    break;
                case ($valor=="L"):
                    echo ".-.."." ";
                    break;
                case ($valor=="M"):
                    echo "--"." ";
                    break;
                case ($valor=="N"):
                    echo "-."." ";
                    break;
                case ($valor=="O"):
                    echo "---"." ";
                    break;
                case ($valor=="P"):
                    echo ".--."." ";
                    break;
                case ($valor=="Q"):
                    echo "--.-"." ";
                    break;
                case ($valor=="R"):
                    echo ".-."." ";
                    break;
                case ($valor=="S"):
                    echo "..."." ";
                    break;
                case ($valor=="T"):
                    echo "-"." ";
                    break;
                case ($valor=="U"):
                    echo "..-"." ";
                    break;
                case ($valor=="V"):
                    echo "...-"." ";
                    break;
                case ($valor=="W"):
                    echo ".--"." ";
                    break;
                case ($valor=="X"):
                    echo "-..-"." ";
                    break;
                case ($valor=="Y"):
                    echo "-.--"." ";
                    break;
                case ($valor=="Z"):
                    echo "--.."." ";
                    break;
                case ($valor=="1"):
                    echo ".----"." ";
                    break;
                case ($valor=="2"):
                    echo "..---"." ";
                    break;
                case ($valor=="3"):
                    echo "...--"." ";
                    break;
                case ($valor=="4"):
                    echo "....-"." ";
                    break;
                case ($valor=="5"):
                    echo "....."." ";
                    break;
                case ($valor=="6"):
                    echo "-...."." ";
                    break;
                case ($valor=="7"):
                    echo "--..."." ";
                    break;
                case ($valor=="8"):
                    echo "---.."." ";
                    break;
                case ($valor=="9"):
                    echo "----."." ";
                    break;
                case ($valor=="0"):
                    echo "-----"." ";
                    break;
                case ($valor=="."):
                    echo ".-.-.-"." ";
                    break;
                case ($valor==","):
                    echo "-.-.--"." ";
                    break;
                case ($valor=="?"):
                    echo "..--.."." ";
                    break;
                case ($valor=="!"):
                    echo "--..--"." ";
                    break;
                case ($valor=="\""):
                    echo "--..--";
                    break;
                case ($valor==" "):
                    echo "&nbsp;&nbsp;";
                    break;
                default :
                    echo "Traducción no encontrada";
                
            }
        
        }

    }
    if($tradu=="aespañol")
    {
        echo "<h4>De Morse a Español</h4>";
        $morse = explode(" ", $codigo);
        foreach ($morse as $llave => $valor)
            echo $valor. "&nbsp";
        echo "<h1>Su traducción es: </h1>";
        foreach ($morse as $llave => $valor)
        {
            switch ($valor)
            {
                case  ($valor ==".-")://A
                    echo "A";
                    break;
                case ($valor == "-...")://B
                    echo "B";
                    break;
                case ($valor == "-.-.")://C
                    echo "C";
                    break;
                case ($valor == "-..")://D
                    echo "D";
                    break;
                case ($valor == ".")://E
                    echo "E";
                    break;
                case ($valor == "..-.")://F
                    echo "F";
                    break;
                case ($valor == "--.")://G
                    echo "G";
                    break;
                case ($valor == "....")://H
                    echo "H";
                    break;
                case ($valor == ".."); //I
                    echo "I";
                    break;
                case ($valor == ".---")://J
                    echo "J";
                    break;
                case ($valor == "-.-")://K
                    echo "K";
                    break;
                case ($valor == ".-.."); //L
                    echo "L";
                    break;
                case ($valor == "--"); //M
                    echo "M";
                    break;
                case ($valor == "-.")://N
                    echo "N";
                    break;
                case ($valor == "---")://O
                    echo "O";
                    break;
                case ($valor == ".--.")://P
                    echo "P";
                    break;
                case ($valor == "--.-")://Q
                    echo "Q";
                    break;
                case ($valor == ".-.")://R
                    echo "R";
                    break;
                case ($valor == "...")://S
                    echo "S";
                    break;
                case ($valor == "-")://T
                    echo "T";
                    break;
                case ($valor == "..-")://U
                    echo "U";
                    break;
                case ($valor == "...-")://V
                    echo "V";
                    break;
                case ($valor == ".--")://W
                    echo "W";
                    break;
                case ($valor == "-..-")://X
                    echo "X";
                    break;
                case ($valor == "-.--")://Y
                    echo "Y";
                    break;
                case ($valor == "--..")://Z
                    echo "Z";
                    break;
                case ($valor == ".----")://1
                    echo "1";
                    break;
                case ($valor == "..---")://2
                    echo "2";
                    break;
                case ($valor == "...--")://3
                    echo "3";
                    break;
                case ($valor == "....-")://4
                    echo "4";
                    break;
                case ($valor == ".....")://5
                    echo "5";
                    break;
                case ($valor == "-....")://6
                    echo "6";
                    break;
                case ($valor == "--...")://7
                    echo "7";
                    break;
                case ($valor == "---..")://8
                    echo "8";
                    break;
                case ($valor == "----.")://9
                    echo "9";
                    break;
                case ($valor == "-----")://0
                    echo "10";
                    break;
                case ($valor == ".-.-.-")://.
                    echo ".";
                    break;
                case ($valor == "-.-.--")://,
                    echo ",";
                    break;
                case ($valor == "..--..")://?
                    echo "?";
                    break;
                case ($valor == "--..--")://!
                    echo "!";
                    break;
                case ($valor == "--..--")://"
                    echo "\"";
                    break;
                case ($valor == " ")://Espacio
                    echo "&nbsp,&nbsp,&nbsp";
                    break;
                default :
                    echo "Traducción no encontrada";
            }

        }
        
    }
    echo "<br><br><a href=\"http://localhost/CURSOWEB/CodMorse/IngresoCodigo.html\">Regresar</a>";
    
    
?>