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
      $AtInage=$willShSl['Advertise_Image'];
               
   
       
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
                    <label for="">Advertise_Id</label>
                       <input type="text" class="form-control" name='MenuId'  readonly value='<?php echo $DisId ?>'>
                </div>
                <div class="col-xl-4 ">
                    <label for="">Advertise_Paragraph</label>
                      <input type="text" class="form-control" name='MenuName'  value='<?php echo $DName ?>'>
                </div>
                <div class="col-xl-4 ">
                    
                </div>
                <div class="col-xl-4">
                    <label for="">Advertise_Image</label>
                    <input type="file" name="upload" class="form-control" id="photo">
                </div>
                <div class="col-xl-4">
                    <img src="<?php echo  $AtInage?>" alt="" width="100%" height="100%" id="previewIMG">
                </div>

                
               
                
            </div>
        </form>
    </div>
</body>
<script>
    var file= document.getElementById('photo');
    var previewIMG= document.getElementById('previewIMG');

    file.addEventListener('change',function(){
        // catch srcfile from input 
        var srcfile= this.files[0]; 
        var reader= new FileReader();
        reader.addEventListener('load',function(){
            //link srcfile to img 
            previewIMG.src=reader.result;
        })
        //return src to dispay
        reader.readAsDataURL(srcfile);
    })

   
   
    </script>
    <?php
   
     ?>
<?php 
  include '../../root/DataTable.php';
  ?>
