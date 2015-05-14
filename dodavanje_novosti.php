<?php
	$vijest = array();
	$broj_vijesti = 0;
	$vijesti = array();
	$datumi = array();
	function compare($f1, $f2)
  	{
    	$f1Lines = file($f1, FILE_IGNORE_NEW_LINES);
    	$f2Lines = file($f2, FILE_IGNORE_NEW_LINES);
    	$d1 = $f1Lines[0];
    	$d2 = $f2Lines[0];
    	if ($d1 == $d2) 
      		return 0;
    	return (strtotime($d1) < strtotime($d2)) ? 1 : -1;
  	}
 
  	$allFiles = array();
    foreach (glob("novosti/*.txt") as $file)
    {
      array_push($allFiles, $file);

    }
    usort($allFiles, "compare");
	
  
	foreach ($allFiles as $file)
	{
		$handle = fopen($file, "r");
		if ($handle) 
		{
			$brojac=0;
			$sadrzaj="";
			while (($buffer = fgets($handle, 1024)) !== false) 
			{
				if ($brojac==0)
				{
					$datum =$buffer;
				}
				if ($brojac==1)
				{
					$autor =$buffer;
				}
				if ($brojac==2)
				{
					$naslov =$buffer;
				}
				if ($brojac==3)
				{
					$slika='';
					if(trim($buffer)=='')
						$slika="";
					else 
						$slika = '<img class = "slika" src="'.$buffer.'" alt="image_news">';
				}
				if ($brojac > 3 and trim($buffer) != "--")
				{
					$sadrzaj = $sadrzaj.$buffer;
				}
				if (trim($buffer) == "--")
				{
					$detaljnije='';
					while (($buffer = fgets($handle, 1024)) !== false) 
					{
						$detaljnije=$detaljnije.$buffer;
					}
					$_detaljnije = '';
					if($detaljnije != '') 
						$_detaljnije = '<a class="detaljnije" href="?add='.$broj_vijesti.'">Read more...</a>';
					else $_detaljnije = '';
					break;
				}
				$brojac = $brojac + 1;
			}
			$broj_vijesti = $broj_vijesti + 1;
			array_push($datumi, $datum);
			
			$pojedinacna_vijest = '<div class="news"><h3>'.ucfirst(strtolower($naslov)).'</h3>
                  				   <h5>Author: '.$autor.',Published : '.$datum.'</h5>
                  				   '.$slika.'<p>'.$sadrzaj.'<br>'.$detaljnije.'</p></div>';
            array_push($vijesti, $pojedinacna_vijest);
            
			$jedna_vijest= '<div class="news"><h3>'.ucfirst(strtolower($naslov)).'</h3>
                  			<h5>Author: '.$autor.', Published : '.$datum.'</h5>
                  		   '.$slika.'<p>'.$sadrzaj.'</p>'.$_detaljnije.'</div>';
            array_push($vijest, $jedna_vijest);
            // ako je neko kliknuo "Detaljnije..."
			if(isset($_GET['add'])) 
			{
				if($_GET['add'] <= ($broj_vijesti - 1))
				{
					$vijest = array();
    				array_push($vijest, $vijesti[$_GET['add']]);
				}	
			}
		}
		fclose($handle);
	}	
?>