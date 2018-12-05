<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="../CSS/table.css">
        <script type="text/javascript" src="../JQuery/jquery-3.1.1.js"></script>
        <script type="text/javascript" src="../JS/fonctions.js"></script>
    </head>
    <body>
    <table border="1" cellpadding="15" cellspacing="10">
   <tr>
      <th>Numero commande</th>
      <th>Choix du livreur</th>
      <th>Clients</th>
   </tr>
   <tr>
    <td>

        <?php
            include 'cnx.php';
       
            #Num commande
            $sql = $bdd->prepare("select numCli, numCde from commandes ");
            $sql->execute();
            #echo "<label>Numero commande</label><br>";
            echo "<select id=numcommande onchange='AfficherLesFormations()'>";
            foreach($sql->fetchAll(PDO::FETCH_ASSOC) as $ligne)
            {
                echo "<option value='".$ligne['numCli']."'>".$ligne['numCde']."</option>";
            }
            echo "</select><td>";

            
            #Choix du livreur
            $sql = $bdd->prepare("select numLiv, nomLiv from livreurs ");
            $sql->execute();
            #echo "<label>Choix du livreurs</label><br>";
            echo "<select id=nomdulivreurs onchange='AfficherLesFormations()'>";
            foreach($sql->fetchAll(PDO::FETCH_ASSOC) as $ligne)
            {
                echo "<option value='".$ligne['numLiv']."'>".$ligne['nomLiv']."</option>";
            }
            echo "</select><td>";

            #Choix Clients
            $sql = $bdd->prepare("select numCli, nomCli from clients ");
            $sql->execute();
            #echo "<label>Choix du Clients</label><br>";
            echo "<select id=nomclient onchange='AfficherLesFormations()'>";
            foreach($sql->fetchAll(PDO::FETCH_ASSOC) as $ligne)
            {
                echo "<option value='".$ligne['numCli']."'>".$ligne['nomCli']."</option>";
            }
            echo "</select>";
                    
        ?>
    </table>    
    <table border="1" cellpadding="15" cellspacing="10" width="100%">
   <tr>
      <th>Nom pizza</th>
      <th>Nombre de peronnes</th>
      <th>Prix du pizza</th>
      <th>Quantité</th> 
   </tr>
   <tr>
    <td>
        <?php
            #Choix du Pizza
            $sql = $bdd->prepare("select numPiz, nomPiz from pizzas ");
            $sql->execute();
            #echo "<label>Nom pizza</label><br>";
            foreach($sql->fetchAll(PDO::FETCH_ASSOC) as $ligne)
            {
                echo "<center><option value='".$ligne['numPiz']."'>".$ligne['nomPiz']."</option></center>";
            } 
        ?>
    <td>
        <?php    
            #Nombre de peronne    
            $sql = $bdd->prepare("select numPiz, nbPers from pizzas ");
            $sql->execute();
            
            #echo "<label>nombre de peronnes</label><br>";
            foreach($sql->fetchAll(PDO::FETCH_ASSOC) as $ligne)
            {
                echo "<center><option value='".$ligne['numPiz']."'>".$ligne['nbPers']."</option></center>";
            }
        ?>
    <td>
        <?php    
            #Prix pizza    
            $sql = $bdd->prepare("select numPiz, prix from pizzas ");
            $sql->execute();
            #echo "<label>Prix du pizza</label><br>";
            foreach($sql->fetchAll(PDO::FETCH_ASSOC) as $ligne)
            {
                echo "<center><option value='".$ligne['numPiz']."'>".$ligne['prix']."</option></center>";
            }
            
        ?>
    <td>
            <div>
                <input type="range" id="start" name="volume"
                        min="0" max="11">
                <label for="volume">Quantité :<span id="demo"></span></label>
        
                <script>
                    var slider = document.getElementById("start");
                    var output = document.getElementById("demo");
                    output.innerHTML = slider.value;

                    slider.oninput = function() {
                    output.innerHTML = this.value;
                    }
                </script>
            </div>
            <div>
                <input type="range" id="start1" name="volume1"
                        min="0" max="11">
                <label for="volume1">Quantité :<span id="demo1"></span></label>
        
                <script>
                    var slider = document.getElementById("start1");
                    var output = document.getElementById("demo1");
                    output.innerHTML = slider.value;

                    slider.oninput = function() {
                    output.innerHTML = this.value;
                    }
                </script>
            </div>
            <div>
                <input type="range" id="start" name="volume"
                        min="0" max="11">
                <label for="volume">Quantité :<span id="demo"></span></label>
        
                    <script>
                    var slider = document.getElementById("start");
                    var output = document.getElementById("demo");
                    output.innerHTML = slider.value;

                    slider.oninput = function() {
                    output.innerHTML = this.value;
                    }
                    </script>
            </div>
            <div>
                <input type="range" id="start" name="volume"
                        min="0" max="11">
                <label for="volume">Quantité :<span id="demo"></span></label>
        
                    <script>
                    var slider = document.getElementById("start");
                    var output = document.getElementById("demo");
                    output.innerHTML = slider.value;

                    slider.oninput = function() {
                    output.innerHTML = this.value;
                    }
                    </script>
            </div>
            <div>
                <input type="range" id="start" name="volume"
                        min="0" max="11">
                <label for="volume">Quantité :<span id="demo"></span></label>
        
                    <script>
                    var slider = document.getElementById("start");
                    var output = document.getElementById("demo");
                    output.innerHTML = slider.value;

                    slider.oninput = function() {
                    output.innerHTML = this.value;
                    }
                    </script>
            </div>
            <div>
                <input type="range" id="start" name="volume"
                        min="0" max="11">
                <label for="volume">Quantité :<span id="demo"></span></label>
        
                    <script>
                    var slider = document.getElementById("start");
                    var output = document.getElementById("demo");
                    output.innerHTML = slider.value;

                    slider.oninput = function() {
                    output.innerHTML = this.value;
                    }
                    </script>
            </div>
            <div>
                <input type="range" id="start" name="volume"
                        min="0" max="11">
                <label for="volume">Quantité :<span id="demo"></span></label>
        
                    <script>
                    var slider = document.getElementById("start");
                    var output = document.getElementById("demo");
                    output.innerHTML = slider.value;

                    slider.oninput = function() {
                    output.innerHTML = this.value;
                    }
                    </script>
            </div>
            <div>
                <input type="range" id="start" name="volume"
                        min="0" max="11">
                <label for="volume">Quantité :<span id="demo"></span></label>
        
                    <script>
                    var slider = document.getElementById("start");
                    var output = document.getElementById("demo");
                    output.innerHTML = slider.value;

                    slider.oninput = function() {
                    output.innerHTML = this.value;
                    }
                    </script>
            </div>
            <div>
                <input type="range" id="start" name="volume"
                        min="0" max="11">
                <label for="volume">Quantité :<span id="demo"></span></label>
        
                    <script>
                    var slider = document.getElementById("start");
                    var output = document.getElementById("demo");
                    output.innerHTML = slider.value;

                    slider.oninput = function() {
                    output.innerHTML = this.value;
                    }
                    </script>
            </div>
            <div>
                <input type="range" id="start" name="volume"
                        min="0" max="11">
                <label for="volume">Quantité :<span id="demo"></span></label>
        
                    <script>
                    var slider = document.getElementById("start");
                    var output = document.getElementById("demo");
                    output.innerHTML = slider.value;

                    slider.oninput = function() {
                    output.innerHTML = this.value;
                    }
                    </script>
            </div>
            <div>
                <input type="range" id="start" name="volume"
                        min="0" max="11">
                <label for="volume">Quantité :<span id="demo"></span></label>
        
                    <script>
                    var slider = document.getElementById("start");
                    var output = document.getElementById("demo");
                    output.innerHTML = slider.value;

                    slider.oninput = function() {
                    output.innerHTML = this.value;
                    }
                    </script>
            </div>
        
    </table>
     

    </body>
</html>