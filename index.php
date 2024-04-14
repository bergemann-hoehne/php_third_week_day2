<?php
/*
 * Created on 01.04.2024
 * Task: Die Teilnehmer sollen basierend auf dem Code des Vortages die Formular erstellung dynamisch gestallten
 *          Es soll auf baiss eines Array der Inhalt des formulars erzeugt werden.
 *          Dabei ein Array erstellt werden, welches den typ, den name, den placeholder, als auch den potenziellen submitvalue beinhaltet.
 *          Die Prozessierung des Arrays zu einer ausgabe soll in dem definierten String "_formData" concateniert werden.
 *          Der string _formData wird bereits in der Form ausgegeben
 * 
 * Author: Max Musterman
 */
session_start();
if( !isset( $_SESSION['START'] ) ){
    $_SESSION['START'] = date('d.m.Y H:i:s');
}
// ============================================================================================================ //
//  ||
//  ||
//  \/
// Start from here
// content belongs right here
// ============================================================================================================ //
$_formData = "";




// ============================================================================================================ //
// ============================================================================================================ //
?>
<html>
    <header>
    </header>
    <body>
        <form enctype="multipart/form-data" name="projectform" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            

            <?php echo $_formData; ?>
            

            <!-- Checksum zur ueberprüfung des Submits -->
            <input style='display:none' name='CHECKSUM' type='hidden' value='<?php echo date('YmdHi');?>'>
            <br><br>
            <input type="submit" value="Daten übermitteln">
        
        </form>
    </body>
</html>
