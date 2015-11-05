<?php
$host = 'luna.a2wi.co.in';
$ports = array(80, 443, 7501);
 
foreach ($ports as $port)
{
    $connection = @fsockopen($host, $port);
 
    if (is_resource($connection))
    {
        echo '<h2>' . $host . ':' . $port . ' ' . '(' . getservbyport($port, 'tcp') . ') is open.</h2>' . "\n";
 
        fclose($connection);
    }
 
    else
    {
        echo '<h2>' . $host . ':' . $port . ' is not responding.</h2>' . "\n";
    }
}
 
?>