 <?php 
    require('../controllers/rating360.php'); 

    $rate = loadRatings();
?>
           <div class="page-content fade-in-up">
                <div class="row">
                    <div class="col-md-8">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title"> <i class="fa fa-star-half-alt" aria-hidden="true"></i> Virtual Tour Ratings</div>
                            </div>
                                <?php if(isset($rate)){
                                foreach($rate as $r){


                            ?>
                            <div class="ibox-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td> <img src="../assets/img/user-1.jpg" class="img-ratvw">  </td>
                                                <td width="350px"> 
                                                    <div class="ratvw-usrnam"><?php echo $r['FirstName'];?></div>
                                                    <div class="font-13"><?php echo $r['Comment'];?></div>
                                                </td>   
                                                <td>
                                                    <div class="td-content"> 
                                                        <?php if($r['stars'] == 1){?>
                                                            <span class="fa fa-star star-checked"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                        
                                                        <?php }else if($r['stars'] == 2){?>
                                                            <span class="fa fa-star star-checked"></span>
                                                            <span class="fa fa-star star-checked"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                        
                                                        <?php }else if($r['stars'] == 3){?>
                                                            <span class="fa fa-star star-checked"></span>
                                                            <span class="fa fa-star star-checked"></span>
                                                            <span class="fa fa-star star-checked"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                    
                                                        <?php }else if($r['stars'] == 4){?>
                                                            <span class="fa fa-star star-checked"></span>
                                                            <span class="fa fa-star star-checked"></span>
                                                            <span class="fa fa-star star-checked"></span>
                                                            <span class="fa fa-star star-checked"></span>
                                                            <span class="fa fa-star"></span>

                                                        <?php }else if($r['stars'] == 5){?>
                                                            <span class="fa fa-star star-checked"></span>
                                                            <span class="fa fa-star star-checked"></span>
                                                            <span class="fa fa-star star-checked"></span>
                                                            <span class="fa fa-star star-checked"></span>
                                                            <span class="fa fa-star star-checked"></span>
                                                        <?php }?>

                                                    </div>
                                                </td>
                                            </tr>                                      
                                        </tbody>
                                    </table> <?php }} ?> 
                                        <center> <a class="btn btn-ratvwall" href="#" role="button"> View All </a> </center>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
</main>
</div>