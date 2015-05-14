<div id="sadrzaj">
<form name = "formakontakta" id ="formakontakta" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

<label for="unosime">First name:*</label>
<input type="text" class="unos" name="ime" id="unosime" value="<?php echo $ime;?>"><div id="greskaime"><?php echo $ime_slikagreska;echo "   ";echo $ime_greska;?></div>              

<label for="unosprezime">Last name:</label>
<input type="text" class="unos" id="unosprezime" name="prezime" value="<?php echo $prezime;?>"><div id="greskaprezime"> <?php echo $prezime_slikagreska;echo "   ";echo $prezime_greska;?></div>

<label for="mejl">E-mail:*</label>
<input type="email" class="unos" id="mejl" name="email" value="<?php echo $email;?>"><div id="greskamail"> <?php echo $email_slikagreska;echo "   ";echo $email_greska;?></div>

<label for="country">Country:*</label>
<input type="text" class="unos" name="country" id="country" value="<?php echo $country;?>"><div id="greskadrzava"> <?php echo $country_slikagreska;echo "   ";echo $country_greska;?></div>                  

<label for="poruka">Write a message to us:*</label>
<textarea rows="8" cols="10" id="poruka" name="poruka"><?php echo $poruka;?></textarea><div id="greskatekst"> <?php echo $poruka_slikagreska;echo "   ";echo $poruka_greska;?></div>       


<button id="sabmit"name="send" type="submit" value="Submit">Send</button>



<button id="reset" name="reset" type="reset" value="Reset">Reset</button>
</form>
</div>