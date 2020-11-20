<html>
    <head>


    </head>
    <body>
    <div class="container">
        <table class= table1>   
            <thead>
                <tr>
                <th>National No</th>
                <th>Nama</th>
                <th>Tipe</th>
                <th>Spesies</th>
                <th>Height</th>
                <th>Weight</th>
                <th>Abilities</th>
                <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include('connection.php');
            
                $q = $conn->real_escape_string('SELECT * FROM pokedex_data');
                $q = $conn->query($q);  
                while($res = $q->fetch_assoc()):
                ?>

            <tr>
                <td class="align-middle"><?= $res["national_no"] ?></td>
                <td class="align-middle"><?= $res["name"] ?></td>
                <td class="align-middle"><?= $res["type"] ?></td>
                <td class="align-middle"><?= $res["species"] ?></td>
                <td class="align-middle"><?= $res["height"] ?></td>
                <td class="align-middle"><?= $res["weight"] ?></td>
                <td class="align-middle"><?= $res["abilities"] ?></td>
                
                <td>
                    <a href='detail.php'; role="button" class="btn btn-sm btn primary">Detail</a>
                    <a href="edit.php?id=<? $res['id']?>" role="button" class="btn btn-sm btn primary">Edit</a>
                    <a href="javascript:rm('delete.php?id=<? $res['id']?>')" role="button" class="btn btn-sm btn danger">Hapus</a>
                </td>
            </tr>

        <?php endwhile; ?>
        </tbody>
        </table>
        <a href="createpokemon.php" role="button" class="btn btn-sm btn primary">Tambah</a>
    </div>
    </body>
    <script type="text/javascript">
        function rm(s){
            var c = confirm('Apakah anda yakin ingin menghapus pokemon?')
            if(c){
                window.location =s;
            }
        }

        </script>
        </html>





    </div>
    </body>

</html>