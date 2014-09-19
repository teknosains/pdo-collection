<?php

require "koneksi.php";

$query = $pdo->prepare("SELECT * FROM article");
$query->execute();
if($query->rowCount() > 0 ){
    
   $no=1;
   while ($r = $query->fetch()) {
        
       echo '<tr>
                
                <td>'.$no.'</td>
                <td><a href="detail.php?id='.$r['id'].'">'.$r['title'].'</a></td>
             </tr>';
        
       ++$no;

    }//end while
    
}else{
    
    echo "<tr><td colspan=\"2\">Not Found</td></tr>";
}
