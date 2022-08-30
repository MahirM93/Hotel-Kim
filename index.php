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
</body>



</html>