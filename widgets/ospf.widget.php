<?php

$lines = str_getcsv($output, "\n");
foreach ($lines as $num => $line) {
   
    $keywords = preg_split("/[\s,]+/", $line);
    if ($num > 1){
        $all[] = $keywords;
    }
    //     $all[] = $keywords;
    //     $titles[] = $keywords;
    // #print_r($keywords);
    // unset($all[0]);
    $titles = ['NeighborID','Pri','State','UpTime','DeadTime','Address','Interface']; #,'RXmtL','RqstL','DBsmL'];
}
?>

<div class="table-responsive">
    <table class="table table-hover table-striped table-condensed">
        <thead>
            <tr>
                
                <?php
                foreach ($titles as $word) {
                    echo "<th>$word</th>";
                }
                ?>
            </tr>
        </thead>
        <tbody>
            
        <?php
        foreach ($all as $num => $word) {
            echo "<tr>";
                foreach ($word as $num => $w) {
                    if ($num < 7) 
                    echo "<td>$w</td>";
                }
            echo "</tr>";
        }
        ?>
        
        </tbody>
    </table>
</div>







