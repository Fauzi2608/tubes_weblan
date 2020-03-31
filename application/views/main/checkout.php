   <!--================Billing Details Area =================-->    
        <section class="billing_details_area p_100">
            <div class="container">
                <div class="return_option">
                	<h4>Sudah Punya Akun ? <a href="<?php echo base_url('index.php/main/login')?>">Click here to login</a></h4>
                </div>
                <div class="row">
                	<div class="col-lg-7">
               	    	<div class="main_title">
               	    		<h2>Detail Pesanan</h2>
               	    	</div>
                		<div class="billing_form_area">
                			<form class="billing_form row" action="http://galaxyanalytics.net/demos/cake/theme/cake-html/contact_process.php" method="post" id="contactForm" novalidate="novalidate">
								<div class="form-group col-md-6">
								    <label for="first">Nama Depan *</label>
									<input type="text" class="form-control" id="first" name="namadpn" placeholder="Nama Depan">
								</div>
								<div class="form-group col-md-6">
								    <label for="last">Nama Belakang *</label>
									<input type="text" class="form-control" id="last" name="namablkg" placeholder="Nama Belakang">
								</div>
								<div class="form-group col-md-12">
								    <label for="company">Nama Perusahaan</label>
									<input type="text" class="form-control" id="company" name="perusahaan" placeholder="Nama Perusahaan">
								</div>
								<div class="form-group col-md-12">
								    <label for="address">Alamat *</label>
									<input type="text" class="form-control" id="address" name="alamat" placeholder="Nama Jalan">
									<input type="text" class="form-control" id="address2" name="alamat2" placeholder="Apartemen/hotel">
								</div>
								<div class="form-group col-md-12">
								    <label for="city">Kota *</label>
									<input type="text" class="form-control" id="city" name="kota" placeholder="Kota">
								</div>
								<div class="form-group col-md-6">
								    <label for="state1">Negara *</label>
								    <input type="text" class="form-control" id="state" name="negara" placeholder="Negara">
									
								</div>
								<div class="form-group col-md-6">
								    <label for="zip">Kode Pos *</label>
									<input type="text" class="form-control" id="zip" name="zip" placeholder="Kode Pos">
								</div>
								<div class="form-group col-md-6">
								    <label for="email">Email *</label>
									<input type="email" class="form-control" id="email" name="email" placeholder="Email Address">
								</div>
								<div class="form-group col-md-6">
								    <label for="phone">No Handphone *</label>
									<input type="text" class="form-control" id="phone" name="tlp" placeholder="Select an option">
								</div>
								<div class="select_check col-md-12">
										<input type="checkbox" id="f-option" name="selector">
										<label for="f-option">Buat akun ?</label>
										<div class="check"></div>
								</div>
								<div class="form-group col-md-12">
									<label for="phone">Order Note<label>
									<textarea class="form-control" name="message" id="message" rows="1" placeholder="Note untuk pesanan yang diantarkan"></textarea>
								</div>
							</form>
                		</div>
                	</div>
                	<div class="col-lg-5">
                		<div class="order_box_price">
                			<div class="main_title">
                				<h2> Order</h2>
                			</div>
							<div class="payment_list">
								<div class="price_single_cost">
									<h5>Produk <span>Total</span></h5>
									<h5>Jumlah Produk x 2 <span>Rp 120.000 ,-</span></h5>
									<h4>Subtotal <span>Rp 240.000 ,-</span></h4>
									<h5>Pengiriman dan Penanganan<span class="text_f">Rp 5000 ,-</span></h5>
									<h3>Total <span>Rp 245.000 ,-</span></h3>
								</div>
								<div id="accordion" class="accordion_area">
									<div class="card">
										<div class="card-header" id="headingOne">
											<h5 class="mb-0">
												<button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
												Transfer Bank
												</button>
											</h5>
										</div>
										<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
											<div class="card-body">
											Pembayaran Melalui Transfer Bank. Via Rekening PastrKu.
											</div>
										</div>
									</div>
									<div class="card">
										<div class="card-header" id="headingTwo">
											<h5 class="mb-0">
												<button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
												Cash
												</button>
											</h5>
										</div>
										<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
											<div class="card-body">
											Pembayaran langsung melalui pelayan kami
											</div>
										</div>
									</div>
									
								</div>
								<button type="submit" value="submit" class="btn pest_btn">place order</button>
							</div>
						</div>
                	</div>
                </div>
            </div>
        </section>