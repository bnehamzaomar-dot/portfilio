<?php
function authentification($log,$pass){
$w=0;
if($log=="DEV101" && $pass=="123"){
   $w=1;
    }
 return $w;
}
function enrg($nom,$prenom,$ville,$temp,$des){
    $f=fopen("students.txt","a");
    $das="$nom-$prenom-$ville-$des";
    fwrite($f,$das);
    fwrite($f,"\r\n");
    fclose($f);
    move_uploaded_file($temp,$des);
}
function Display(){
    ?>
    <div class="container mt-4">
            <div class="row">
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>Nom</th>
                      <th>Prénom</th>
                      <th>Ville</th>
                      <th>Photo</th>
                    
                    </tr>
                  </thead>
                  <tbody>
        <?php
        $f=fopen("students.txt","r");
        while(!feof($f)){
            $line=fgets($f);
            if($line!=""){
                $infos =explode("-", $line);
                echo "<tr>";   
                echo "<td>$infos[0]</td>";     
               echo "<td>$infos[1]</td>"; 
               echo "<td>$infos[2]</td>"; 
               echo "<td><img src='$infos[3]'  width='100'  height='100'  /></td>";
               echo "</tr>";  
            }
        }
        fclose($f)
        ?>
        </tbody>
                </table>
            </div>
        </div>
        <?php
} 
function getStudentsUsingCity($v){
   $v=fopen("students.txt","r");
        while(!feof($v)){
            $line=fgets($v);
            if($line!=""){
                $infos =explode("-", $line); 
               echo "<p>$infos[2]</p>"; 
            }
}
} 
?>