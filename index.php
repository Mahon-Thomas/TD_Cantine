<!DOCTYPE html>
<html>
    <head>
        <!-- En-tête de la page -->
        <meta charset="utf-8" />
        <title>Cantine - Plat du Jour</title>
        <link rel="stylesheet" href="style.css">
    </head>


<!--$bdd = new PDO('mysql:host=localhost;dbname=test', 'root', 'root'); -->

    <body>

    <h1>Menu de la semaine</h1>
    
    <table class ="color">

        <THead>
            <tr>
                <th> Jour </th>
                <th> Entree </th>
                <th> Plat </th>
                <th> Dessert </th>
            </tr>
        </THead>
        
    <?php 
    $rep = array (
        'Lundi' => array('0'=>'Macedoine','1'=>'Poulet sec', '2'=>'Orange'),
        'Mardi' => array('0'=>'Salade thon','1'=>'Rôti cabri','2'=>'Fromage'),
        'Mercredi' => array('0'=>'Salade oiseau','1'=>'Rôti porc','2'=>'Yaourt nature'),
        'Jeudi' => array('0'=>'Salade ananas','1'=>'Spaghetti','2'=>'Pomme'),
        'Vendredi' => array('0'=>'Salade museau','1'=>'riz cantonnais','2'=>'Gateau')
    );
    
    foreach($rep as $tab =>$valeur1){
        echo '<tr>' ;
        echo '<td align = "center">';
        
        echo "<br/>".$tab.'<br/><br/>' ;
        
        echo '</td>';
    
    foreach ($valeur1 as $jour =>$valeur2){
        
        echo '<td align = "center">';

        echo "<br/>".$valeur2."<br/><br/>";

        echo '</td>';
        
        
        }
    ?>

        <td>
            <form method="post" action="supprimer.php">
    
            <input type="submit" value="Supprimer" />
            
            </form>
        </td>

        <td>
            <form method="post" action="Modifier.php">
            
    
            <input type="submit" value="Modifier" />
            
            </form>
        </td> 

        <td>
            <form method="post" action="Ajouter.php">
                
            <input type="submit" value="Ajouter" />
            
            </form>
        </td>
    
    <?php
     echo '</tr>';
    }
    ?>

    </table>

    <?php
    $entree = $_POST['entree'];
    $plat = $_POST['plat'];
    $dessert = $_POST['dessert'];

        array_push($rep, 'entree', 'plat', 'dessert');

    ?>
    

    </body>

</html>