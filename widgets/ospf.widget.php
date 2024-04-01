<?php


/*
|--------------------------------------------------------------------------
| OSPF Neighbors widget
|--------------------------------------------------------------------------
|
| A widget to display OSPF neighbors, parsing the output of the "show ip ospf neighbor" command.
| Requires the FRR routing package to be installed and OSPF to be configured.
| Then add the widget to the dashboard from usual widget menu.
|
*/

$lines = str_getcsv($output, "\n");

foreach ($lines as $num => $line) {
    $words = preg_split("/[\s,]+/", $line);
    if ($num > 1)
        $all[] = $words;
}

$titles = ['NeighborID','Pri','State','UpTime','DeadTime','Address','Interface']; #,'RXmtL','RqstL','DBsmL'];
?>

<div class="table-responsive">
    <table class="table table-hover table-striped table-condensed">
        <thead>
            <tr>
                
                <?php
                foreach ($titles as $title) {
                    echo "<th>$title</th>";
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
