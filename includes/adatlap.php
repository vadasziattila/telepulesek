    <?php
        $result = Telepules();
        $row = mysqli_fetch_array($result);
    ?>
    <div class="container">
        <h1 class="display-5 my-4"><?php echo $row["helyseg"]; ?></h1>
        <p class="fs-4"> Település jogállása: <?php echo $row["jogallas"]; ?> </p>
        <p class="fs-4"> Vármegye: <?php echo $row["megye"]; ?> vármegye</p>
        <p class="fs-4"> Járás: <?php echo $row["jaras"]; ?> járás</p>
        <p class="fs-4"> Terület: <?php echo $row["terulet"]; ?> km<sup>2</sup></p>
        <p class="fs-4"> Népesség: <?php echo $row["nepesseg"]; ?> fő</p>
        <p class="fs-4"> Lakásszám: <?php echo $row["lakas"]; ?> darab</p>
    </div>