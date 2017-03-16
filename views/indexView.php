<div class="container">
    <div class='row'>  
        <div class="col-sm-12 text-center"><h1>Hotel APP in PHP</h1></div>
        <div class="col-sm-6 col-sm-offset-3 text-center">
            <ul class="list-group">
                <?php
                    foreach($hotelPage as $hotel){
                        echo '<li class="list-group-item">';
                        echo '<a href="index.php?id='.$hotel['_id']['$oid'].'">'.$hotel['name'].'</a>';
                        echo '</li>';
                    }
                ?>
            </ul>
        </div>
    </div>    
    <div class='row'>
        <nav aria-label="...">
          <ul class="pager">
            <?php
                if($prev<0){
                    echo '<li class="previous disabled"><a href="#"><span aria-hidden="true">&larr;</span> Previous</a></li>';
                }else{
                    echo '<li class="previous"><a href="index.php?offset='.$prev.'"><span aria-hidden="true">&larr;</span> Previous</a></li>';
                }
                
                if($next==0){
                    echo '<li class="next disabled"><a href="#">Next <span aria-hidden="true">&rarr;</span></a></li>';
                }else{
                    echo '<li class="next"><a href="index.php?offset='.$next.'">Next <span aria-hidden="true">&rarr;</span></a></li>';
                }
                //<li class="next"><a href="#">Next <span aria-hidden="true">&rarr;</span></a></li>
            ?>
          </ul>
        </nav>
        
    </div>
</div>  