<?php
    include '../../root/Header.php';
    include '../../connection/conect.php';
    
    ?>
    <style>
        .fa-pen-to-square{
            color:blue;
              margin-left:20px;
            
        }
        .fa-trash{
            color:red;
            margin-left:20px;
        }

    </style>
<body>
    <div class="container-fludi mt-3">
        <div class="row">
            <div class="col-xl-12 bg-secondary p-2">
                <a href="MenuAdd.php" class="btn btn-success mx-4">Add</a>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>Advertise-Id</th>
                    <th>Advertise-Paragraph</th>
                    <th>Advertise-Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php 
            $sql="SELECT * FROM tbl_menu";
    $id=1;
$excute=$con->query($sql);
while($show=$excute->fetch_assoc()){?>
       <tr>
                        <td><?php echo $id++ ?></td>
                        <td><?php echo $show['Advertise-Paragraph'] ?></td>
                        <td><?php echo $show['Advertise-Image']?></td>
                        <td>
                       <a href="AtUpdate.php?id=<?php echo $show['Advertise_Id']?>"><i class="fa-regular fa-pen-to-square" ></i></a> 
                       <a href="AtCreate.php?id=<?php echo $show['Advertise_Id']?>&&action=delete"><i class="fa-solid fa-trash"></i></a> 
                        </td>
                    </tr>
<?php
}
    ?>

            </tbody>

        </table>
    </div>
    
    </body>
   
<?php 
  include '../../root/DataTable.php';
  ?>
</html>
