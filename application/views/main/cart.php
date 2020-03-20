        <section class="banner_area">
        	<div class="container">
        		<div class="banner_text">
        			<h3>Cart</h3>
        		</div>
        	</div>
        </section>
        <!--================End Main Header Area =================-->
        
        <!--================Cart Table Area =================-->
        <section class="cart_table_area p_100">
        	<div class="container">
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th scope="col">Preview</th>
								<th scope="col">Product</th>
								<th scope="col">Price</th>
								<th scope="col">Quantity</th>
								<th scope="col">Total</th>
								
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<img src="<?php echo base_url(); ?>assets/img/product/chocolava.jpg" width="40%" alt="">
								</td>
								<td>Choco Lava</td>
								<td>Rp 30.000</td>
								<td>
									<input type="number" name="quantity" placeholder="Jumlah">
								</td>
								<td>Rp 30.000</td>
								
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td></td>
								<td></td>
								<td colspan="3">
									
								</td>
							</tr>
						</tbody>
					</table>
				</div>
       			<div class="row cart_total_inner">
        			<div class="col-lg-7"></div>
        			<div class="col-lg-5">
        				<div class="cart_total_text">
        					<div class="cart_head">
        						Cart Total
        					</div>
        					<div class="sub_total">
        						<h5>Sub Total <span>Rp 30.000</span></h5>
        					</div>
        					<div class="total">
        						<h4>Total <span>Rp 30.000</span></h4>
        					</div>
        					<div class="cart_footer">
        						<a class="pest_btn" href="<?php echo base_url('index.php/main/checkout')?>">Proceed to Checkout</a>
        					</div>
        				</div>
        			</div>
        		</div>
        	</div>
        </section>