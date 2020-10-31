<div id="starter">
<div style="text-align: center; margin-bottom: 20px; font-size: 25px;background: rgb(0, 0, 0); background: rgba(0, 0, 0, 0.20);">
  <h3 style="color: #ff3030; padding: 10px; font-family: 'Merriweather', serif;">Starters</h3>
</div>
<div class="container" style="width:95%; margin: auto;">
<div class="row sp">

   <?php
        include('connect.php');
        $product= mysqli_query($db,"SELECT * FROM products WHERE category='starter'"); 

        if (!empty($product)) { 
        while ($row=mysqli_fetch_array($product)) {
        ?>
        <div class="col-lg-4">
        <div class="card" style="width: 18rem;">
        <img class="card-img-top shop-item-image" src="<?php echo $row['p_path']?>">
        <div class="card-body">
          <h5 class="card-title shop-item-title"><?php echo $row['p_name']?></h5>
          <div class="shop-item-details">
          <p class="shop-item-price"><?php echo "Rs ".$row['p_price']?></p>
          </div>
          <p class="card-text"><?php echo$row['p_description']; ?></p>
          <center><button class="btn shop-item-button" type="submit" value="<?php echo $row['p_id']?>" name="add">Add to cart</button></center>
        </div>
      </div>
      </div>
       <?php
      }
  }  else {
 echo "No Records.";

  }
  ?>

</div>
</div>
</div>