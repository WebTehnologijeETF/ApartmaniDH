<fieldset>
    <h3>Provjerite da li ste ispravno popunili kontakt formu:</h3>
    <br>
    <?php print "First name: " .$ime ?>
    <br><br>
    <?php print "Last name: " .$prezime ?>
    <br><br>
    <?php print "E-mail: " .$email ?>
    <br><br>
    <?php print "Country: " .$country ?>
    <br><br>
    <?php print "Poruka: " .$poruka ?>
    <br><br>

    <h3>Da li ste sigurni da želite poslati ove podatke?</h3>
    <form method="post" name = "sendemail" action="send_email.php">
        <input type="submit" name="send_email" value="Siguran sam">
        <input type="hidden" name="ime" value="<?php echo $ime;?>">
        <input type="hidden" name="email" value="<?php echo $email;?>">
        <input type="hidden" name="myname" value="<?php echo $poruka;?>">
    </form>
</fieldset>    



<br><br><br>
<h3>Ako ste pogrešno popunili formu, možete ispod prepraviti <br>unesene podatke: </h3>


<div id="sadrzaj">
<form name = "formakontakta" id ="formakontakta" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

<label for="unosime">First name:*</label>
<input type="text" class="unos" name="ime" id="unosime" value="<?php echo $ime;?>"><div id="greskaime"><?php echo $ime_slikagreska;echo "   ";echo $ime_greska;?></div>              

<label for="unosprezime">Last name:</label>
<input type="text" class="unos" id="unosprezime" name="prezime" value="<?php echo $prezime;?>"><div id="greskaprezime"> <?php echo $prezime_slikagreska;echo "   ";echo $prezime_greska;?></div>

<label for="mejl">E-mail:*</label>
<input type="email" class="unos" id="mejl" name="email" value="<?php echo $email;?>"><div id="greskamail"> <?php echo $email_slikagreska;echo "   ";echo $email_greska;?></div>

<label for="country">Country:*</label>
<input type="text" class="unos" name="drzava" id="country" value="<?php echo $country;?>"><div id="greskadrzava"> <?php echo $country_slikagreska;echo "   ";echo $country_greska;?></div>                  

<label for="poruka">Write a message to us:*</label>
<textarea rows="8" cols="10" id="poruka" name="poruka"><?php echo $poruka;?></textarea><div id="greskatekst"> <?php echo $poruka_slikagreska;echo "   ";echo $poruka_greska;?></div>       


<button id="sabmit" name="send" type="submit" value="Submit">Send</button>



<button id="reset" name="reset" type="reset" value="Reset">Reset</button>
</form>
</div>