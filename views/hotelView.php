<div class="container">
    <div class='row'>
     <div class="col-sm-12 text-center"><h1>Information About <?php echo $hotel['name']?></h1></div>   
    <div class="col-sm-9">
        <?php 
            echo "<p>".$hotel['location']['address']."</p>";
            echo "<p>".$hotel['description']."<p>";
            echo "Service:";
            echo "<ul>";
            foreach($hotel['services']as $service){
                echo "<li>".$service."</li>";
            }
            echo "</ul>";
        ?>
        
    </div>
    <div class="col-sm-3">
        <ul class="list-group">
          <li class="list-group-item">
            <span class="badge"><?php echo $hotel['stars']?></span>
                Stars
          </li>
          <li class="list-group-item">
            <span class="badge"><?php echo $hotel['currency']?></span>
                Currency
          </li>
        </ul>
    </div>    
    </div>
</div>    