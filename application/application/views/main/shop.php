<section class="banner_area">
            <div class="container">
                <div class="banner_text">
                    <h3>Shop</h3>
                </div>
            </div>
        </section>
<section class="product_area p_100">
        	<div class="container">
        		<div class="row product_inner_row">
        			<div class="col-lg-9">
        				<div class="row product_item_inner">
        					<?php foreach ($shop as $m) { ?>
        					<div class="col-lg-4 col-md-4 col-6">
        						<div class="cake_feature_item">
									<div class="cake_img">
										<img src="<?php echo base_url()?>./assets/img/shop/<?php echo $m->foto; ?>" width="150px" height="150px" alt="">
									</div>
									<div class="cake_text">
										
										<h4><?php echo $m->Harga; ?></h4>
										<h3><?php echo $m->nama_menu; ?></h3>
										<a class="pest_btn" href="<?php echo base_url('index.php/main/cart')?>">Add to cart</a>
									</div>
								</div>
        					</div>
        					<?php } ?>
        				</div>
        				<div class="product_pagination">
        					<div class="left_btn">
        						<a href="#"><i class="lnr lnr-arrow-left"></i> New posts</a>
        					</div>
        					<div class="middle_list">
								<nav aria-label="Page navigation example">
									<ul class="pagination">
									<li class="page-item"><a class="page-link" href="#">1</a></li>
									<li class="page-item active"><a class="page-link" href="#">2</a></li>
									<li class="page-item"><a class="page-link" href="#">3</a></li>
									<li class="page-item"><a class="page-link" href="#">...</a></li>
									<li class="page-item"><a class="page-link" href="#">12</a></li>
									</ul>
								</nav>
        					</div>
        					<div class="right_btn"><a href="#">Older posts <i class="lnr lnr-arrow-right"></i></a></div>
        				</div>
        			</div>
        			<div class="col-lg-3">
        				<div class="product_left_sidebar">
        					<aside class="left_sidebar search_widget">
        						<div class="input-group">
									<input type="text" class="form-control" placeholder="Enter Search Keywords">
									<div class="input-group-append">
										<button class="btn" type="button"><i class="icon icon-Search"></i></button>
									</div>
								</div>
        					</aside>
        					<aside class="left_sidebar p_catgories_widget">
        						<div class="p_w_title">
        							<h3>Product Categories</h3>
        						</div>
        						<ul class="list_style">
        							<li><a href="#">Roti (17)</a></li>
        							<li><a href="#">Kue Chocolate (15)</a></li>
        							<li><a href="#">Kue Basah (14)</a></li>
                                    <li><a href="#">Kue Ulang Tahun(11)</a></li>
        							<li><a href="#">Kue Pernikahan (8)</a></li>
                                    <li><a href="#">Kue Lainnya(11)</a></li>
        						</ul>
        					</aside>
        					
        					
        				</div>
        			</div>
        		</div>
        	</div>
        </section>
    