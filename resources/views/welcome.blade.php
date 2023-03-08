
<?php
use Illuminate\Support\Facades\Storage;
$file  = "archivo.txt";


Storage::disk('ftp')->put('test.csv', $file);


?>
