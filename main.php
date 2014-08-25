<?php
include_once("moduler/head.php");
?>

<main id="view">

  <?php

$NotepadDirectory = "moduler";

$file = './' . trim($NotepadDirectory) . '/notepadcontent.php';

if(count($_POST) ) { 
Fix_POST(); 
}

if (isset($_POST['notepad']) )
{
   $firstline = '<'.'?php exit; ?'.">\r\n";
   $f = fopen($file,'w');
   fwrite($f,$firstline.$_POST['notepad']);
   fclose($f);
}

function Fix_POST()
{
   foreach( $_POST as $k => $v )
   {
      if( is_array($_POST[$k]) )
      {
         foreach( $_POST[$k] as $kk => $vv )
         {
            $_POST[$k][$kk] = trim(stripslashes($vv));
         }
      }
      else { $_POST[$k] = trim(stripslashes($v)); }
   }
}
?>
<section id="main">
  <form method="post" action="<?php echo($_SERVER['PHP_SELF']); ?>">

  <h3>Notepad</h3>
	  <input value="Update Notepad" name="submit" type="submit">

  <div id="textarea">
  <textarea name="notepad" cols="60" rows="20"><?php
$f = @fopen($file,'r');
if( $f )
{
   $line = '';
   fgets($f,20);
   while( ($line = fgets($f,16384)) !== false ) { echo $line; }
   fclose($f);
}
?>
  </textarea><br>
  </form>
</section>