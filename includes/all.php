    <?php
        $NumPages = Pagination($RowPerPage);
        $result   = All($RowPerPage);
    ?>
    <div class="container">
        <h1 class="display-5 my-4 text-center">Összes település</h1>
        <p class="text-center">
        <?php for($i=1; $i<=$NumPages; $i++) { ?>
        <a class="pe-2" href="./?p=all&page=<?php echo $i ?>"><?php echo $i ?></a>
        <?php } ?>
        </p>
        <p class="text-center">
            Oldal: <?php if(!isset($_GET["page"])){ 
                    $page = 1; } else {
                        $page = $_GET["page"];
                    } 
                    echo $page." / ".$NumPages;
                    ?>
        </p>
        <table class="table">
            <tr>
                <th>#</th>
                <th>Település</th>
                <th>Jogállás</th>
                <th>Vármegye</th>
                <th>Járás</th>
            </tr>
            <?php while($row=mysqli_fetch_array($result)) { ?>
            <tr>
                <td><?php echo $row["ID"] ?></td>
                <td>
                    <a href="./?p=adatlap&id=<?php echo $row["ID"]; ?>">
                        <?php echo $row["helyseg"]; ?>
                    </a>
                </td>
                <td><?php echo $row["jogallas"]; ?></td>
                <td><?php echo $row["megye"]; ?></td>
                <td><?php echo $row["jaras"]; ?></td>
            </tr>
            <?php } ?>
        </table>

        <p class="text-center">
        <?php for($i=1; $i<=$NumPages; $i++) { ?>
        <a class="pe-2" href="./?p=all&page=<?php echo $i ?>"><?php echo $i ?></a>
        <?php } ?>
        </p>
    </div>