<?php
    include '../../root/Header.php';
    include '../../connection/conect.php';

$DisId=$_GET['id'];
if($DisId!=null){
    $select="SELECT * FROM `tbl_menu` WHERE Menu_Id =$DisId";
    $shSelect=$con->query($select);
                    $willShSl=$shSelect->fetch_assoc();
           $DName=$willShSl['Menu_Name'];
      $DDescription=$willShSl['Menu_Class'];
               
   
       
};
?>
</head>
<body>
    <div class="container-fludi mt-3" style="margin-left: 10px;">
        <form action="MenuCreate.php" method="post">
            <div class="row">
                <div class="col-xl-12 bg-secondary p-2">
                    <a href="MenuInterface.php" class="btn btn-success" style="margin-left: 15px;">Back</a>
                    <input type="submit" value="UPDATE" class="btn btn-success" name='btnDisupdate' >
                  
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4 ">
                    <label for="">Menu_Id</label>
                       <input type="text" class="form-control" name='MenuId'  readonly value='<?php echo $DisId ?>'>
                </div>
                <div class="col-xl-4 ">
                    <label for="">Menu_Name</label>
                      <input type="text" class="form-control" name='MenuName'  value='<?php echo $DName ?>'>
                </div>
                <div class="col-xl-4 ">
                    
                </div>
                <div class="col-xl-4 ">
                    <label for="">Menu_Class</label>
                       <input type="text" class="form-control" name='MenuDescription'  value='<?php echo $DDescription ?>'>
                </div>
               

                
               
                
            </div>
        </form>
    </div>
</body>

<?php 
  include '../../root/DataTable.php';
  ?>
