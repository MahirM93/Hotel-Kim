<!DOCTYPE html>
<head>
<title>Hotel</title>
<link rel="stylesheet"href="style.css">
</head>

<?php
//Procesuiraj formu
if(isset($_POST['date'])){
    require "rezervacija.php";
    echo $_REV->save($_POST['date'],$_POST['name'],$_POST['email']);
    "<div>OK</div>":"<div>".$_RSV->error."</div>";
}


?>






<body>
<header>

<div class="banner">
    <div class="navbar"><a href="index.php">
        <img src="logo.png"class="logo"></a>
        <ul>
            <li><a href="#">Pocetna</a></li>
            <li><a href="#">Smjestaj</a></li>
            <li><a href="#">Restorani</a></li>
            <li><a href="#">O nama</a></li>
            <li><a href="#">Kontakt</a></li>
            
        </ul>
</div>

<div class="content">
    <h1>Zdravo svima</h1>  <p>Dobro dosli na  web stranicu hotela</p>
    <div>
        <button type="button"><span></span>Lokacija</button>
        <button type="button"><span></span>Reservacija</button>
    </div>

</div>

</header>
<section class="section2">

<div class="rezervacija">
    <h2>Rezervacija Soba</h2>
    <form metho="post"target="self">
   <div class="moj">
   <h4>Vrsta</h4>     
<select name="vrsta">
    <option value="jednosobna">Jednokrevetna Soba</option>
    <option value="jednosobna">Dvokrevetna Soba</option>
    <option value="jednosobna">Trokrevetna Soba</option>
    <option value="jednosobna">Apartman</option>
</select>
</div>
<div class="moj">
   <h4>Dolazak</h4>     
<input type="date"name="datum"value="<?php echo date('Y-m-d');?>"/>
</div>
<div class="moj">
   <h4>Odlazak</h4>     
   <input type="date"name="datum"value="<?php echo date('Y-m-d');?>"/>
</div>
<div class="moj">
   <h4>Odrasli</h4>     
   <select name="vrsta">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
</select>
</div>
<div class="moj">
   <h4>Djeca</h4>     
<input type="text"name=""placeholder=""require/>
</div>
<input type="submit"value="Rezervisi"/>
</form>
</div>
</section>
<section class="prvi">

<section class="sekcija3">

<div class="tekst">
    <img src="E.jpg"/>
    <h4>Dobrodosli u Hotel KIM</h4>
    <h1>Vas drugi dom</h1>
    <p>___________________</p>
    <p>U centru grada a opet izdvojen od gradske vreve Hotel Kim 
        je mjesto gdje ćete biti dočekani kao član porodice bez obzira 
        da li ste kod nas prvi put ili ste naš stalni gost. Već od 1996. 
        se bavimo ugostiteljstvom a 2006. smo proširili naše usluge i na 
        hotelijerstvo. Od tada rastemo i  radimo na kvaliteti naših usluga.
         Raspolažemo sa 32 sobe i 5 apartmana. Pored smještajnih jedinica u 
         bašti našeg hotela ili na hotelskoj terasi možete predahnuti i uživati 
         uz naše specijalitete domaće i internacionalne kuhinje.  </p>
         <button>Detaljno</button>
</div>

</section>

<section class="sekcija4">
    <h1>Specijalna ponuda</h1>
    <div class="kutija">
        <h3>1.Specijalna ponuda <br>smjestaja</h3><br>
        <p>Platite tri noćenja po punoj cijeni četvrta noć gratis. 
            Ponuda uključuje: Noćenje sa doručkom, besplatan WiFi u svim dijelovima 
            objekta, besplatan parking prostor u sklopu hotela, besplatan prijevoz do 
            aerodroma i još niz pogodnosti. Kontaktirajte nas za rezervacije i iskoristite 
            ovu priliku da posjetite Sarajevo i Ilidžu i uživate u bogatoj turističkoj ponudi.</p>
</div>
<div class="kutija">
        <h3>2.  Posebna ponuda za<br>
turističke agencije
</h3><br>
        <p>Do kraja 2019. godine imamo poseban program saradnje kroz koju ćemo Vašoj agenciji odobriti dodatne pogodnosti kroz popuste, posebne cijene, gratis usluge i slično. Kontaktirajte nas uz napomenu da ste zainteresovani za naš poseban program saradnje kako bi Vam poslali ponudu.
</p>
</div>
<div class="kutija">
        <h3>3. Posebna svadbena<br> ponuda
</h3><br>
        <p>Dragi mladenci, do kraja godine imamo posebnu ponudu gdje za svadbe u mjesecu septembru, oktobru, novembru i decembru odobravamo posebne pogodnosti po Vašim željama. Očekujemo Vas na kahvi kako bi zajedno napravili najbolji svadbeni program za Vas.
</p>
</div>
</section>



<section>
    <div class="ponude">
        <div class="wifi">
            <img src="wifi.png">
            <h2>Besplatni wifi</h2>
            <p>Dostupan u cijelom objektu</p>
        </div>
        <div class="wifi">
            <img src="check.png">
            <h2>Recepcija</h2>
            <p>Recepcija 24h 7/7</p>
        </div>
        <div class="wifi">
            <img src="parking.png">
            <h2>Besplatan parking</h2>
            <p>Besplatan parking za sve goste hotela</p>
        </div>
        <div class="wifi">
            <img src="bel.png">
            <h2>Online rezervacija</h2>
            <p>Online rezervacija soba i apartmana</p>
        </div>
    </div>
</section>


<section>
    <div class="kutija33">
<h1>Sobe i apartmani</h1><br>

</div>
<div class="kutija31">
    <h1>Apartmani</h1>
    <p>Apartmani sa velikim bračnim krevetom i dnevnim<br> boravkom. Prostrani i udobni. .<br>
-------Bespaltni Wifi<br>
-------Posluga u Sobi<br>
-------Ugrađen Sef<br>
-------Parking</p><br>
<button>Rezervisi sobu</button>
</div>
<div class="Slika">
    <img src="44.jpg">
</div>
</section>




<section>
    <div class="sve">
    <div class="km1">
        <img src="w.jpg">
    </div>
    <div class="km2">
        <h1>Dvokrevetna soba</h1><br>
        <p>Bračni krevet ili dva odvojena kreveta. Svejedno je koju kombinaciju birate udoban boravak je zagarantovan. </p>
        <button>Rezervisi sobu</button>
    </div>
    <div class="km1">
        <img src="t.jpg">
    </div>
    <div class="km2">
        <h1>Trokrevetna soba</h1><br>
        <p>Odlična kombinacija za porodicu ili skupinu prijatelja.
 </p>
        <button>Rezervisi sobu</button>
    </div>

    </div>
</section>
</section>
<footer>
    <img src="logo.png">
    <p>info@hotelbosna.ba<br><br>
+387 33 771 340<br><br>
+387 62 482 298  |  +387 61 135 590 ( Viber i Whatsapp )<br><br>
Butmirska cesta 8<br><br>
71210 Ilidža - SARAJEVO</p>
</footer>
<div class="rad">
    <p>Copyright © All right reserved. Design By: Mesanovic Mahir</p>
</div>
</body>



</html>