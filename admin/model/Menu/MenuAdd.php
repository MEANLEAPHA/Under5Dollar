<?php
    include '../../root/Header.php';
    include '../../connection/conect.php';
?>
</head>
<body>
    <div class="container-fludi mt-3" style="margin-left: 10px;">
        <form action="MenuCreate.php" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-xl-12 bg-secondary p-2">
                    <a href="MenuInterface.php" class="btn btn-success" style="margin-left: 15px;">Back</a>
                    <input type="submit" value="Save" class="btn btn-success" name='btnDissave' >
                  
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 ">
                    <label for="">Menu_Id</label>
                       <input type="text" class="form-control" name='DId' readonly>
                </div>
                <div class="col-xl-4 ">
                    <label for="">Menu_Name</label>
                      <input type="text" class="form-control" name='DName' >
                </div>
                <div class="col-xl-4 ">
                    <label for="">Menu_Class</label>
                      <input type="text" class="form-control" name='DClass' >
                </div>
                
            </div>
        </form>
    </div>
</body>
<?php 
  include '../../root/DataTable.php';
  ?>
</html>