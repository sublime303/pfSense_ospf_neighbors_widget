<?php
$ospf_title = gettext("OSPF Neighbors");
$output = shell_exec("vtysh -c 'show ip ospf nei'");
?>
