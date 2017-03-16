<div class="container">
    <div class='row'>
     <div class="col-sm-12 text-center"><h1>Information About <?php echo $hotel['name']?></h1></div>   
    <div class="col-sm-9">
        <?php 
            echo "<h3>".$hotel['location']['address']."</h3>";
            echo "<p>".$hotel['description']."<p>";
            echo "<h3>Rooms:</h3>";
            echo "<table class='table table-striped'>";
            echo "<tr><th>Type</th><th>Price</th><th>Description</th></tr>";
            foreach($hotel['rooms']as $room){
                echo "<tr><td>".$room['type']."</td><td>".$room['price']."</td><td>".$room['description']."</td></tr>";
            }
            echo "</table>";
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
          <li class="list-group-item">
                Services:
                <?php
                    echo "<ul>";
                    foreach($hotel['services']as $service){
                        echo "<li>".$service."</li>";
                    }
                    echo "</ul>";
                ?>
          </li>
        </ul>
    </div>    
    </div>
</div>    