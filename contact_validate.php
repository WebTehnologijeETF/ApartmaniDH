<?php

    header('Content-Type: text/html; charset=utf-8');
    
        // Inicijalizacija varijabli
		$forma = "";
        $ime = $prezime= $email = $poruka = $country = "";
        $ime_greska = $prezime_greska = $email_greska = $country_greska = $poruka_greska = "";
        $ime_slikagreska = $prezime_slikagreska= $email_slikagreska = $country_slikagreska= $poruka_slikagreska = "";
        $kontrolna=true;

        // Validacija obaveznih polja   
        //if (isset($_POST['send']))
			
		if (isset($_POST["send"]))
        {
            
            $kontrolna = true;

            if (empty($_POST["ime"])) 
            {
                $ime_greska = "Please enter a valid name.";
                $ime_slikagreska = '<img src="https://cdn4.iconfinder.com/data/icons/icocentre-free-icons/114/f-cross_256-16.png" alt="error" height="10" width="10">';
                $kontrolna = false;
            } 
            else 
            {
                $ime = provjera_unosa($_POST["ime"]);
                // provjera da li je ime ispravno uneseno
                if (!preg_match("/^[a-zA-Z ]*$/",$ime)) 
                {
                    $ime_greska = "Please enter a valid name."; 
                    $ime_slikagreska = 'Images/red_cross.png';
                    $kontrolna = false;
                }
            }
			
			 if (empty($_POST["prezime"])) 
            {
                $ime_greska = "Please enter a valid last name.";
                $ime_slikagreska = 'Images/red_cross.png';
                $kontrolna = false;
            } 
            else 
            {
                $prezime = provjera_unosa($_POST["prezime"]);
                // provjera da li je ime ispravno uneseno
                if (!preg_match("/^[a-zA-Z ]*$/",$prezime)) 
                {
                    $prezime_greska = "Please enter a valid name."; 
                    $prezime_slikagreska = 'Images/red_cross.png';
                    $kontrolna = false;
                }
            }
			
			 if (empty($_POST["country"])) 
            {
                $ime_greska = "Please enter a valid country name.";
                $ime_slikagreska = 'Images/red_cross.png';
                $kontrolna = false;
            } 
            else 
            {
                $country = provjera_unosa($_POST["country"]);
                if (!preg_match("/^[a-zA-Z ]*$/",$ime)) 
                {
                    $country_greska = "Please enter a valid country name."; 
                    $country_slikagreska = 'Images/red_cross.png';
                    $kontrolna = false;
                }
            }
           
            if (empty($_POST["email"])) 
            {
                $email_greska = "Please enter a valid e-mail.";
                $email_slikagreska = 'Images/red_cross.png';
                $kontrolna = false;
            } 
            else 
            {
                $email = provjera_unosa($_POST["email"]);
                // provjerava je li unesen ispravan format emaila
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
                {
                    $email_greska = "Please enter a valid e-mail."; 
                    $email_slikagreska = 'Images/red_cross.png';
                    $kontrolna = false;
                }
				/*
                // provjera potvrdnog emaila
                if (empty($_POST["emailconfirm"]))
                {
                    $emailconfirm_greska = "Please enter a valid e-mail.";
                    $emailconfirm_slikagreska = '<img src="Images/red_cross.png" alt="error">';
                    $kontrolna = false;
                }
                else
                {
                    $emailconfirm = provjera_unosa($_POST["emailconfirm"]);
                    // provjerava je li unesen ispravan format emaila
                    if (!filter_var($emailconfirm, FILTER_VALIDATE_EMAIL)) 
                    {
                        $emailconfirm_greska = "Please enter a valid e-mail."; 
                        $emailconfirm_slikagreska = '<img src="Images/red_cross.png" alt="error">';
                        $kontrolna = false;
                    }
                    else
                    {
                        //cross validacija
                        if ($email != $emailconfirm) 
                        {
                            $emailconfirm_greska = "Please confirm the e-mail."; 
                            $emailconfirm_slikagreska = '<img src="Images/red_cross.png" alt="error">';
                            $kontrolna = false;
                        } 
                    }
                        
                }
				*/
            }


            if (empty($_POST["tekst"])) 
            {
                $poruka_greska = "Please include a message.";
                $poruka_slikagreska = 'Images/red_cross.png';
                $kontrolna = false;
            } 
            else 
            {
                $poruka = provjera_unosa($_POST["tekst"]);
            }

        }

        if (isset($_POST["reset"]))
        {
            $ime = $email =/* $emailconfirm = */$poruka = "";
        }


        function provjera_unosa($data) 
        {
           $data = trim($data);
           $data = stripslashes($data);
           $data = htmlspecialchars($data);
           return $data;
        } 

        //if valid then redirect
        if($kontrolna)
        {
            $forma='forma_da.php';
        }  
        else
        {
            $forma='forma_ne.php';
        }     
			
?>


