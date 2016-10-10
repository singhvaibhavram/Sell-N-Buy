
<?php include 'header.php';?>

<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

    include 'dbFunction.php';
    include_once 'dbConnect.php';

    $funobj = new dbFunction($conn);

    $data = $funobj->getSellingItemById('*');
    //print_r($data);

?>
<link rel="stylesheet" type="text/css" href="style.css">

<div class="container">
  
  <?php foreach($data as $item): ?>
  
    <div class="col-md-3 col-sm-4 col-xs-6" style="padding: 5px;margin: 5px;height: 350px;width: 250px">

      <div class="card">
        <div class="rating">
          <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
        </div>
          <img class="img-responsive" style="height: 220px" src="uploads/<?php echo $item['item_image']; ?>.jpg">
          <div class="container">

            <h5><b><?php 
            echo "<a href='bid1.php?id=".$item['item_ID']."'>";
            echo $item['item_title'].'('.$item['item_ID'].')';
            echo "</a>"; ?></b></h5> 
            <p>Starting Price: ₹<?php echo $item['price'];?>
            </p>
            <p>Quantity: <?php echo $item['quantity']; ?></p>
          </div>
      </div>
          
    </div>
 
  <?php endforeach; ?>
   <object data="text1.html" type="text/html"></object>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>


<?php include 'footer.php'; ?>
