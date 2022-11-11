    <?php
        $result   = ABC();
       // print_r($result);
    ?>
    <div class="container">
        <h1 class="display-5 my-4 text-center">Összes település - ABC-ben</h1>
        <p class="text-center">
            <a class="pe-2" href="./?p=abc&abc=a">A</a>
            <a class="pe-2" href="./?p=abc&abc=b">B</a>
            <a class="pe-2" href="./?p=abc&abc=c">C</a>
            <a class="pe-2" href="./?p=abc&abc=d">D</a>
            <a class="pe-2" href="./?p=abc&abc=e">E</a>
            <a class="pe-2" href="./?p=abc&abc=f">F</a>
            <a class="pe-2" href="./?p=abc&abc=g">G</a>
            <a class="pe-2" href="./?p=abc&abc=h">H</a>
            <a class="pe-2" href="./?p=abc&abc=i">I</a>
            <a class="pe-2" href="./?p=abc&abc=j">J</a>
            <a class="pe-2" href="./?p=abc&abc=k">K</a>
            <a class="pe-2" href="./?p=abc&abc=l">L</a>
            <a class="pe-2" href="./?p=abc&abc=m">M</a>
            <a class="pe-2" href="./?p=abc&abc=n">N</a>
            <a class="pe-2" href="./?p=abc&abc=o">O</a>
            <a class="pe-2" href="./?p=abc&abc=p">P</a>
            <a class="pe-2" href="./?p=abc&abc=r">R</a>
            <a class="pe-2" href="./?p=abc&abc=s">S</a>
            <a class="pe-2" href="./?p=abc&abc=t">T</a>
            <a class="pe-2" href="./?p=abc&abc=u">U</a>
            <a class="pe-2" href="./?p=abc&abc=v">V</a>
            <a class="pe-2" href="./?p=abc&abc=z">Z</a>    
        </p>
        
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