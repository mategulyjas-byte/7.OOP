

<div class="m1">

<nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top ">
  <div class="container " style="max-width: 1200px;">
    <a class="navbar-brand" href="#">Menü</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">


      <?php if(!isset($_SESSION["user"]["id"])){  ?>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Kezdőlap</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/about">Rólunk</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="/register">Regisztráció</a>
        </li>

         <li class="nav-item">
          <a class="nav-link" href="/account">Belépés</a>
        </li>

<?php ;} else{?>


           <li class="nav-item">
          <a class="nav-link" href="/profile">Profilom</a>
        </li>


        <li class="nav-item">
          <a class="nav-link" href="/logout">Kilépés</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="/datamodification">Adatmódosítás</a>
        </li>



        <?php  if(( $_SESSION["user"]["email"] === "admin@admin.hu")) {?>
        <li class="nav-item">
          <a class="nav-link" href="/table">Táblázat</a>
        </li>
<?php ;} ?>




        <li class="nav-item">
          <a class="nav-link" href="/tablecity">Települések</a>
        </li>


         <li class="nav-item">
          <a class="nav-link" href="/sarkoz">Élmények megosztása</a>
        </li>


        
        <li class="nav-item">
          <a class="nav-link" href="/sarkozinfo">Ti irtátok</a>
        </li>


        <li class="nav-item">
          <a class="nav-link" href="/vote">Szavazás</a>
        </li>

         <!-- <li class="nav-item">
          <a class="nav-link" id="szamlalo" href=""></a>

        </li> -->

<?php ;} ?>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Hasznos linkek
          </a>
          <ul class="dropdown-menu">
            <li><a target="_blank" class="dropdown-item" href="https://www.youtube.com/watch?v=rSnMAIpOstM">Videó a Sárközről</a></li>
            <li><a target="_blank" class="dropdown-item" href="https://www.scribd.com/document/727407021/Barth-Kalocsai-Sarkoz-Fogalma">A Sárköz története</a></li>
            <li><a target="_blank" class="dropdown-item" href="https://www.kalocsa.hu/wp-content/uploads/2023/09/Del_Alfold_Kalocsai_Sarkoz.pdf">Sárköz települései</a></li>

            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul> 

   


    

      
    </div>
  </div>
</nav>


 <?php if(isset($_SESSION["user"]["id"])){  ?>


<div  
style=" display:flex; ; justify-content:space-around; ; flex-direction:column;  font-family:monospace; font-size: 70%;  ">

<div style="text-align:center" id="ora"></div>

<div  style="text-align:center" id="szamlalo"></div>


</div>
<?php ;} ?> 


</div>

