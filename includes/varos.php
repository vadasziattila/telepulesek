    <?php
        $result   = Varos();
       // print_r($result);
    ?>
    <div class="container">
        <h1 class="display-5 my-4 text-center">Városok</h1>
        <table class="table">
            <tr>
                <th>Település</th>
                <th>Jogállás</th>
                <th>Vármegye</th>
                <th>Járás</th>
            </tr>
            <?php while($row = mysqli_fetch_array($result)) { ?>
                <tr>
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

        
    </div>