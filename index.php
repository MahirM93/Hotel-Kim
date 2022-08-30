<!DOCTYPE html>
<head>
<title>Hotel</title>
<link rel="stylesheet"href="style.css">
</head>
<body>
<header>

<div class="banner">
    <div class="navbar">
        <img src="logo.png"class="logo">
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
        <h3>1.Specijalna ponuda smjestaja</h3><br>
        <p>Platite tri noćenja po punoj cijeni četvrta noć gratis. 
            Ponuda uključuje: Noćenje sa doručkom, besplatan WiFi u svim dijelovima 
            objekta, besplatan parking prostor u sklopu hotela, besplatan prijevoz do 
            aerodroma i još niz pogodnosti. Kontaktirajte nas za rezervacije i iskoristite 
            ovu priliku da posjetite Sarajevo i Ilidžu i uživate u bogatoj turističkoj ponudi.</p>
</div>
<div class="kutija">
        <h3>1.Specijalna ponuda smjestaja</h3><br>
        <p>Platite tri noćenja po punoj cijeni četvrta noć gratis. 
            Ponuda uključuje: Noćenje sa doručkom, besplatan WiFi u svim dijelovima 
            objekta, besplatan parking prostor u sklopu hotela, besplatan prijevoz do 
            aerodroma i još niz pogodnosti. Kontaktirajte nas za rezervacije i iskoristite 
            ovu priliku da posjetite Sarajevo i Ilidžu i uživate u bogatoj turističkoj ponudi.</p>
</div>
<div class="kutija">
        <h3>1.Specijalna ponuda smjestaja</h3><br>
        <p>Platite tri noćenja po punoj cijeni četvrta noć gratis. 
            Ponuda uključuje: Noćenje sa doručkom, besplatan WiFi u svim dijelovima 
            objekta, besplatan parking prostor u sklopu hotela, besplatan prijevoz do 
            aerodroma i još niz pogodnosti. Kontaktirajte nas za rezervacije i iskoristite 
            ovu priliku da posjetite Sarajevo i Ilidžu i uživate u bogatoj turističkoj ponudi.</p>
</div>
</section>


</section>
</body>



</html>