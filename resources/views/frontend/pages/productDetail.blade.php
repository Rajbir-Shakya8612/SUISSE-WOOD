@include('./frontend/layouts/header')
<section class="banner_area">

            <div class="banner_inner d-flex align-items-center">
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background="" style="transform: translateY(-6.53333px);"></div>
				<div class="container">
					<div class="banner_content text-center">
						<h2>Product Detail</h2>
					</div>
				</div>
            </div>
        </section>

<section class="container product-container view-product">
    <div class="row">
        <div class="col-12 col-md-5 product-detail-picture">
            <div>
                <img width="100%" src="img/service-3.jpg" alt="Green Club 700 Plywood">
            </div>
        </div>

        <div class="col-12 col-md-7 product-description" style="border:0px solid gray">
            <!-- Datos del vendedor y titulo del producto -->
             <div>
               <h3>Sussie Platinum</h3>
               
               <small>Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus reprehenderit, vel autem dolores quas excepturi mollitia voluptas dignissimos cumque rerum!</small>
              </div>
            <!-- Precios -->
             <div>
                  <div class="price">
                    <h4>₹70.23/ <span>Sq. Ft.</span></h4>
                  </div>
             </div>
             <div>
                  <div class="size">
                    <div class="parameter">
                      <small>Thickness</small>
                      <select name="" id="">
                        <option value="06mm">06mm</option>
                        <option value="06mm">09mm</option>
                        <option value="06mm">12mm</option>
                        <option value="06mm">16mm</option>
                        <option value="06mm">18mm</option>
                      </select>

                    </div>
                    <div class="parameter">
                      <small>Size</small>
                      <select name="" id="">
                        <option value="06mm">06mm</option>
                        <option value="06mm">09mm</option>
                        <option value="06mm">12mm</option>
                        <option value="06mm">16mm</option>
                        <option value="06mm">18mm</option>
                      </select>
                    </div>
                    <div class="parameter">
                      <small>Quantity</small>
                      <input type="number">
                    </div>
                  </div>
             </div>
             <div class="inquiry">
                <a href="" class="btn btn-primary w-100 py-3">Make an inquiry</a>
             </div>
            
    </div>
    <div class="row mt-5">
        <div class="col-12 features">
        <ul class="menu-items">
                        <li class="active">Features</li>
                        <li>Warranty</li>
                    </ul>
            <div style="width:100%;border-top:1px solid silver">
             
                    <ul class="features-list">
                    <li><span  >✓</span> 17 Layers* that adds to the durability and strength</li>
            <li><span  >✓</span> Wood like strength</li>
            <li><span  >✓</span> Structural Grade – IS 10701 Certified</li>
            <li><span  >✓</span> Acoustic property</li>
            <li><span  >✓</span> Zero formaldehyde emission for healthy interiors</li>
            <li><span  >✓</span> CARB Certified</li>
            <li><span  >✓</span> Borer- Fungus proof & Anti-Termite Guarantee</li>
            <li><span  >✓</span> Vira shield - Anti-viral and Anti-bacterial properties</li>
            <li><span  >✓</span> 100% Calibrated Plywood</li>
            <li><span  >✓</span> Composed Core Panels</li>
            <li><span  >✓</span> Penta 5 Tech</li>
            <li><span  >✓</span> Lifetime Warranty</li>
          </ul>
               
            </div>
        </div>
    </div>
</section>

@include('./frontend/layouts/footer')
