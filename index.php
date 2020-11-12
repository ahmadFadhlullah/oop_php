<?php
require "init.php";

use App\Controllers\Test;
use App\System\Tampil;

echo Tampil::tampil();
echo "<br>";
echo Test::hello();

 ?>
