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
<div class="container" ng-app='reviews' ng-controller="ReviewController">
    <div class="row">
        <div class="col-sm-9"><h3>Reviews:</h3></div>
        <div class="col-sm-9">
            <div class="panel panel-primary" ng-repeat="review in reviews">
              <div class="panel-heading">{{review.name}}</div>
              <div class="panel-body">
                {{review.review}}
              </div>
              <div class="panel-footer">{{review.rating}} out of 5 Stars</div>
            </div>
        </div>
        <div class="col-sm-9">
            <div class="panel panel-primary">
              <div ng-hide="name==''" class="panel-heading">{{name}}</div>
              <div ng-hide="review==''" class="panel-body">
                {{review}}
              </div>
              <div ng-hide="rating==''" class="panel-footer">{{rating}} out of 5 Stars</div>
            </div>
        </div>
        <div class="col-sm-9">
            <form novalidate name="reviewForm" class="form-horizontal" ng-submit="submitReview(reviewForm)">
                <div class="panel panel-primary">
                  <div class="panel-heading">Add a Review</div>
                  
                  <div class="panel-body">
                    
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-10">
                          <input ng-model="name" type="text" class="form-control" id="name" placeholder="Name" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="review" class="col-sm-2 control-label">Review</label>
                        <div class="col-sm-10">
                          <textarea ng-model="review" class="form-control" id="review" rows="3" required>Type your review here</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="rating" class="col-sm-2 control-label">How Many Stars?</label>
                        <div class="col-sm-10">
                            <select ng-model='rating' id="rating" class="form-control" required>
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                              <option>5</option>
                            </select>
                        </div>
                     </div>
                     
                  <div class="panel-footer"><button class="btn btn-default">Submit</button></div>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="/js/reviews.js"></script>