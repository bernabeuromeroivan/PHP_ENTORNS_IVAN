<?php

session_start();
$_SESSION['alumnes'] = ["Joan", "Miguel", "David", "Pedro"];

?>

<pre>
    <? var_dump($_SESSION['alumnes']) ?>
</pre>

<?php

array_push($_SESSION['alumnes'], 'Jonathan');

?>

<pre>
    <? var_dump($_SESSION['alumnes']) ?>
</pre>