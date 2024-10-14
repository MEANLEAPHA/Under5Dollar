<?php include 'connection/header.php' ;

if (!isset($_SESSION['user_id'])) {
        // Show a message for guest users
        echo "<script>alert('Welcome my dear customer!');</script> ";
       
    } else {
            // If logged in, show the user’s email
        echo "<script>alert('Welcome back, " . $_SESSION['user_email'] . "!');</script>";
    }  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RICKIE</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&family=Great+Vibes&family=Sacramento&display=swap" rel="stylesheet">
    <link href="photo_2024-03-17_21-47-06.jpg" rel="icon">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://kit.fontawesome.com/ec7a51a641.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="asset/index.css">
   
</head>
<body>
    <!--Header-->
    <div class="forIcon">
    <div class="forShopicon"></div>
      
  
         <select name="" id="option">
          <option style='display:none'><p>Catagories</p></option>
          <option value="">service</option>
          <option value="">house stuff</option>
          <option value="">clothes</option>
          <option value="">game</option>

         </select>
         <label id='cartt'><i class="fa-sharp fa-solid fa-cart-shopping"></i> Shopping cart
         <div class="forNotfication"></div></label>
         
        <!-- If user is logged in, show logout link -->
       <?php if (isset($_SESSION['user_email'])) :
    $userEmail = $_SESSION['user_email'];
    $firstLetter = strtoupper(substr($userEmail, 0, 1));?>
        
            <div class="user-icon" style='width: 30px; height: 30px;border: 1px white solid ;text-decoration: none;color: black;border-radius: 50%;background-color: white;font-size: larger;text-align: center;padding:0;margin-top: 17px;margin-right: 15px;'>
            <a href="userlogin/logout.php" title="Logout" style='' ><?php echo $firstLetter; ?></a>
            </div>
            
        
    <?php else: ?>
        <!-- If user is not logged in, show login link -->
        <a href="userlogin/UserLogin.php" title="Login">
            <i class="fa-solid fa-user"></i> 
        </a>
    <?php endif; ?>
    </div>
    <!--Header-->
      <div id="forNav" >
      
      
        <div id="CCB"> 
     
     <div id="forCloseAndBuy"> 
     <div id="address">
  <i class="fa-solid fa-arrow-left" id="close"></i>
  <p>Shopping Cart</p>
  <form action="buyerData.php" id="shipadd" method='POST'>
   <label for="">Username</label><input type="text" placeholder="Username" id="username" name='buyerName'>
   <label for="">Gmail</label><input type="text" placeholder="User@gmail.com" id="gmail" required name='buyerEmail'> 
   <label for="">State</label> <select id="state" name='buyerState'><option value="nothing"></option><option value="PP">PhnomPenh</option><option value="SR">SR</option></select>
   <label for="">Apartment</label><input type="text" placeholder="Apartment" id="apartment" name='buyerApartment'>
   <label for="">Telephone</label><input type="tel" placeholder="0$$$$$$$$$" id="tele" name='buyerTelephone'>
   <label for="">Ordernote</label><input type="text" placeholder="Order Note" id="ordernote" name='buyerOrderNote'>
   <input type="text" id='stuff-quanity' value='' readonly  name='buyerStuff' style='display:none'>
   <input type="text" id='stuff-image' value='' readonly  name='buyerImage' style='display:none'>
   <input type="text" id='product-cost' value='' readonly  name='buyerProductCost' style='display:none'>
   <input type="text" id='product-shipping' value='' readonly  name='buyerProductShip' style='display:none'>
   <input type="text" id='product-total' value='' readonly  name='buyerProductTotal' style='display:none'>
   <input type="submit" value="Buy Now" name='buyNow' id='buyNow' style='background-color:green;width:90%'>
  </form>
  <div id="orderSummery">
   <div id="sumCost">

  <div id="total">
    <p >Total:$<span id="total-prices">0</span></p>
    <p >Shipping:$<span  id="shipCost">0</span> </p>
    <p >Totalcost:$<span id="totalCost">0</span></p>
   
  </div>
  <div id="QRcode">
    <p>Scan to pay</p>
  <img src="img/photo_2024-08-29_14-43-50.jpg" alt="" id="forQR">
  </div>
  </div>
   
     </div>
   
</div>     

     
     </div>
     <div id="for-add-to-cart">

     </div>
    </div>
    </div>
    <!--Mission statement-->
   
    
   <div class="slider">
      <div class="slides">
        <button class="prev" onclick="prevSlide()">back</button>
        <img src="img\photo_2023-09-28_23-08-05.jpg" alt="img1" class="slide">
        <img src="img\photo_2023-10-20_21-44-51.jpg" alt="img2" class="slide">
        <img src="img\playboy0.jpg" alt="img3" class="slide">
        <button class="next" onclick="nextSlide()">next</button>
      </div>
    </div>
     
    
     <!--Mission statement-->
     <!--NAV-->
     

     <div class='ContainNav'>
     <ol class='NavOl'>
        <button  onclick="home()" id="h"><i class="fa-solid fa-house"></i> Home</button>
        <button  onclick=" trending()" id="t"><i class="fa-solid fa-arrow-trend-up"></i> Trending</button>
        <button  onclick="New()" id="n"><i class="fa-solid fa-plus"></i> New</button>
        <button onclick=" discount()" id="d"> <i class="fa-solid fa-fire" ></i> Discount</button>
     </ol>
    </div>
    <!--NAV-->
<div id='ExContainer'>
            <div class='con1'>  
              <div id="fbox">
                <?php 
                  $sql="SELECT * FROM tbl_home"; 
                 $excute=$con->query($sql);
                while($show=$excute->fetch_assoc()){?>
          
                <div class="ffbox">
                  <a href="ProInfo/homeInfo.php?id=<?php echo $show['Product_Id']?>" style='color:black;text-decoration:none;'>
                    <img src="img\<?php echo $show['Product_Image']?>" class="forImage">
                    <div class="altImage"><?php echo $show['Product_Name'] ?></div>
                    <div class="infoImage"><?php echo $show['Product_Description']?></div>
                    </a>
                    <div class="btnImage">
                      <div class="price"><?php echo $show['Product_Price']?></div>
                      <button class="add2cart2" data-product-code="<?php echo $show['Product_Code']?>" data-product-name="<?php echo $show['Product_Name'] ?>" data-product-price="<?php echo $show['Product_Price']?>" data-product-image="<?php echo $show['Product_Image']?>">ADD TO CART</button>
                    </div>
                </div>
                <?php }?>
                  </div>
          
            </div>
             

              <div class='con2'>
                <div id="fbox">
                <?php 
            $sql="SELECT * FROM tbl_trending";
 $excute=$con->query($sql);
 while($show=$excute->fetch_assoc()){?>
                 <div class="ffbox">
                 <a href="ProInfo/trending.php?id=<?php echo $show['Trending_Id']?>" style='color:black;text-decoration:none;'>
                  <img src="img\<?php echo $show['Trending_Image'] ?>" class="forImage">
                  <div class="altImage"><?php echo $show['Trending_Name'] ?></div>
                  <div class="infoImage"><?php echo $show['Trending_Description']?></div>
 </a>
                  <div class="btnImage">
                    <div class="price"><?php echo $show['Trending_Description']?></div>
                    <button class="add2cart2" data-product-code="<?php echo $show['Product_Code']?>" data-product-name="<?php echo $show['Trending_Name'] ?>" data-product-price="<?php echo $show['Trending_Description']?>" data-product-image="<?php echo $show['Trending_Image'] ?>">ADD TO CART</button>
                  </div>
                </div>
                 
 <?php } ?> 
                  </div>
               
               </div>
              
               <div class='con3'>
                <div id="fbox">
                <?php 
            $sql="SELECT * FROM tbl_new";
 $excute=$con->query($sql);
 while($show=$excute->fetch_assoc()){?>
                    <div class="ffbox">
                    <a href="ProInfo/newInfo.php?id=<?php echo $show['New_Id']?>" style='color:black;text-decoration:none;'>
                    <img src="img\<?php echo $show['New_Image'] ?>" class="forImage">
                    <div class="altImage"><?php echo $show['New_Name'] ?></div>
                    <div class="infoImage"><?php echo $show['New_Description']?></div>
 </a>
                    <div class="btnImage">
                      <div class="price"><?php echo $show['New_Price']?></div>
                      <button class="add2cart2" data-product-code="<?php echo $show['Product_Code']?>" data-product-name="<?php echo $show['New_Name'] ?>" data-product-price="<?php echo $show['New_Price']?>" data-product-image="<?php echo $show['New_Image'] ?>">ADD TO CART</button>
                    </div>
                  </div>
                    
              <?php }?>
                  </div>
              
                    </div>
                  
               <div class='con4'>
                 <div id="fbox">
                 <?php 
            $sql="SELECT * FROM tbl_discount";
$excute=$con->query($sql);
while($show=$excute->fetch_assoc()){?>
<div class="ffbox">
<a href="ProInfo/discountInfo.php?id=<?php echo $show['Discount_Id']?>" style='color:black;text-decoration:none;'>
                  <img src="img\<?php echo $show['Discount_Image'] ?>" class="forImage">
                  <div class="altImage"><?php echo $show['Discount_Name'] ?></div>
                  <div class="infoImage"><?php echo $show['Discount_Description']?></div>
</a>
                  <div class="btnImage">
                    <div class="price"><?php echo $show['Discount_Price']?></div>
                    <button class="add2cart2" data-product-code="<?php echo $show['Product_Code']?>" data-product-name="<?php echo $show['Discount_Name'] ?>" data-product-price="<?php echo $show['Discount_Price']?>" data-product-image="<?php echo $show['Discount_Image'] ?>"> ADD TO CART</button>
                  </div>
                  </div>
                 
                       <?php }?>
                  </div>
                  </div>
                  
 </div>
 <h2 style='background-color:#0e87fc;margin:0;padding:0;color:white;padding-left:5px' id='listContent'>Book</h2>
 <div id="bigContainer">
<div id="list">
<ol id="containlist">
<a onclick="book()">Book</a>
<a onclick="gameboard()">Gameboard</a>
<a onclick="fashion()">fashion</a>
<a onclick="houseStuff()">Housestuff</a>
<a onclick="clothes()">clothes</a>
<a onclick="freelane()">Freelance</a>
</ol>
</div>
<div id="containBox">
<div id="box1">
<div id="fbox">
                <?php 
            $sql="SELECT * FROM tbl_book";
            $excute=$con->query($sql);
            while($show=$excute->fetch_assoc()){?>
      
            <div class="ffbox">
              <a href="ProInfo/bookInfo.php?id=<?php echo $show['Product_Id']?>" style='color:black;text-decoration:none;'>
                <img src="img\<?php echo $show['Product_Image']?>" class="forImage">
                <div class="altImage"><?php echo $show['Product_Name'] ?></div>
                <div class="infoImage"><?php echo $show['Product_description']?></div>
                </a>
                <div class="btnImage">
                  <div class="price"><?php echo $show['Product_Price']?></div>
                  <button class="add2cart2" data-product-code="<?php echo $show['Product_Code']?>" data-product-name="<?php echo $show['Product_Name'] ?>" data-product-price="<?php echo $show['Product_Price']?>" data-product-image="<?php echo $show['Product_Image']?>">ADD TO CART</button>
                </div>
            </div>
            <?php }?>
                  </div>
</div>
<div id="box2">
<div id="fbox">
<?php 
            $sql="SELECT * FROM tbl_gameboard";
            $excute=$con->query($sql);
            while($show=$excute->fetch_assoc()){?>
      
            <div class="ffbox">
              <a href="ProInfo/gameInfo.php?id=<?php echo $show['Product_Id']?>" style='color:black;text-decoration:none;'>
                <img src="img\<?php echo $show['Product_Image']?>" class="forImage">
                <div class="altImage"><?php echo $show['Product_Name'] ?></div>
                <div class="infoImage"><?php echo $show['Product_description']?></div>
                </a>
                <div class="btnImage">
                  <div class="price"><?php echo $show['Product_Price']?></div>
                  <button class="add2cart2" data-product-code="<?php echo $show['Product_Code']?>" data-product-name="<?php echo $show['Product_Name'] ?>" data-product-price="<?php echo $show['Product_Price']?>" data-product-image="<?php echo $show['Product_Image']?>">ADD TO CART</button>
                </div>
            </div>
            <?php }?>
                  </div>
</div>
<div id="box3">
<div id="fbox">
<?php 
            $sql="SELECT * FROM tbl_fashion";
            $excute=$con->query($sql);
            while($show=$excute->fetch_assoc()){?>
      
            <div class="ffbox">
              <a href="ProInfo/fashionInfo.php?id=<?php echo $show['Product_Id']?>" style='color:black;text-decoration:none;'>
                <img src="img\<?php echo $show['Product_Image']?>" class="forImage">
                <div class="altImage"><?php echo $show['Product_Name'] ?></div>
                <div class="infoImage"><?php echo $show['Product_description']?></div>
                </a>
                <div class="btnImage">
                  <div class="price"><?php echo $show['Product_Price']?></div>
                  <button class="add2cart2" data-product-code="<?php echo $show['Product_Code']?>" data-product-name="<?php echo $show['Product_Name'] ?>" data-product-price="<?php echo $show['Product_Price']?>" data-product-image="<?php echo $show['Product_Image']?>">ADD TO CART</button>
                </div>
            </div>
            <?php }?>
                  </div>
</div>
<div id="box4">
<div id="fbox">
<?php 
            $sql="SELECT * FROM tbl_housestuff";
            $excute=$con->query($sql);
            while($show=$excute->fetch_assoc()){?>
      
            <div class="ffbox">
              <a href="ProInfo/housestuffInfo.php?id=<?php echo $show['Product_Id']?>" style='color:black;text-decoration:none;'>
                <img src="img\<?php echo $show['Product_Image']?>" class="forImage">
                <div class="altImage"><?php echo $show['Product_Name'] ?></div>
                <div class="infoImage"><?php echo $show['Product_description']?></div>
                </a>
                <div class="btnImage">
                  <div class="price"><?php echo $show['Product_Price']?></div>
                  <button class="add2cart2" data-product-code="<?php echo $show['Product_Code']?>" data-product-name="<?php echo $show['Product_Name'] ?>" data-product-price="<?php echo $show['Product_Price']?>" data-product-image="<?php echo $show['Product_Image']?>">ADD TO CART</button>
                </div>
            </div>
            <?php }?>
                  </div>
</div>
<div id="box5">
<div id="fbox">
<?php 
            $sql="SELECT * FROM tbl_clothes";
            $excute=$con->query($sql);
            while($show=$excute->fetch_assoc()){?>
      
            <div class="ffbox">
              <a href="ProInfo/clothesInfo.php?id=<?php echo $show['Product_Id']?>" style='color:black;text-decoration:none;'>
                <img src="img\<?php echo $show['Product_Image']?>" class="forImage">
                <div class="altImage"><?php echo $show['Product_Name'] ?></div>
                <div class="infoImage"><?php echo $show['Product_description']?></div>
                </a>
                <div class="btnImage">
                  <div class="price"><?php echo $show['Product_Price']?></div>
                  <button class="add2cart2" data-product-code="<?php echo $show['Product_Code']?>" data-product-name="<?php echo $show['Product_Name'] ?>" data-product-price="<?php echo $show['Product_Price']?>" data-product-image="<?php echo $show['Product_Image']?>">ADD TO CART</button>
                </div>
            </div>
            <?php }?>
                  </div>
</div>
<div id="box6">
<div id="fbox">
<?php 
            $sql="SELECT * FROM tbl_freelance";
            $excute=$con->query($sql);
            while($show=$excute->fetch_assoc()){?>
      
            <div class="ffbox">
              <a href="ProInfo/freelanceInfo.php?id=<?php echo $show['Product_Id']?>" style='color:black;text-decoration:none;'>
                <img src="img\<?php echo $show['Product_Image']?>" class="forImage">
                <div class="altImage"><?php echo $show['Product_Name'] ?></div>
                <div class="infoImage"><?php echo $show['Product_description']?></div>
                </a>
                <div class="btnImage">
                  <div class="price"><?php echo $show['Product_Price']?></div>
                  <button class="add2cart2" data-product-code="<?php echo $show['Product_Code']?>" data-product-name="<?php echo $show['Product_Name'] ?>" data-product-price="<?php echo $show['Product_Price']?>" data-product-image="<?php echo $show['Product_Image']?>">ADD TO CART</button>
                </div>
            </div>
            <?php }?>
                  </div>
</div>

</div>
</div>

 

    <!--Footer-->
    <div class="footer" >
        <div class="footerbox">
        <div class="sbox1">
        
        <h5  class="h5a"><span>​©</span>Copyrigtht by RICKIE_2024 </h5>
        <h5  class="h5a"><a href="" >Privacy Policy</a></h5>
        <h5  class="h5a"><a href="" >ADRESS</a></h5>
        <h5  class="h5a">St-150  <span>_</span> Sangkat Tuek L'ak 2</h5>
        <h5  class="h5a" > Toul Kork <span>_</span>Phnom Penh </h5>
        </div>
        <div class="bbox1">
        <h3  class="h5B">
        ABOUT US</h3>
        <p  class="h5b">Rickie corporation is a franchise company where we provide the best fragrances in Cambodia.
        More about us</p>
        <a  class="h5b" href="userfeedback/feedback.php">FeedBack</a> 
        </div>
        <div class="sbox2">
        <h3  class="h5c"> OUR SOCIAL MEDIA</h3>
        <div class="forallicon">
        <a href="" class="facebook"><i class="fa-brands fa-facebook"></i></a>
        <a href="" class="inst"><i class="fa-brands fa-instagram" ></i></a>
        <a href="" class="telegram"><i class="fa-brands fa-telegram"  ></i></a>
        <a href="" class="x"><i class="fa-brands fa-x-twitter" ></i></a>
        </div>
        <h4   class="h5c">CONTACT</h4>
        <h4 class="h5c">rickie@gmail.com</h4>   
        <h4   class="h5c">061752924</h4> 
        </div>
        </div>
        </div>
    <!--Footer-->
    <script src="asset/Jquery.js"></script>
    <script src="asset/index.js"></script>
</body>

</html>