<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
<main>
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="card mb-10">
          <div class="card-header">
            <nav class="header-navigation">
              <a href="#" class="btn btn-link">Back to the list</a>

            </nav>
          </div>
          <div class="card-body store-body">
            <div class="product-info">
              <div class="product-gallery">
                <div class="product-gallery-thumbnails">
                  <ol class="thumbnails-list list-unstyled">
                    <li><img src="https://via.placeholder.com/350x350/ffcf5b" alt=""></li>
                    <li><img src="https://via.placeholder.com/350x350/f16a22" alt=""></li>
                    <li><img src="https://via.placeholder.com/350x350/d3ffce" alt=""></li>
                    <!-- <li><img src="https://via.placeholder.com/350x350/7937fc" alt=""></li>
                    <li><img src="https://via.placeholder.com/350x350/930000" alt=""></li> -->
                  </ol>
                </div>
                <div class="product-gallery-featured">
                  <img src="https://via.placeholder.com/350x350/ffcf5b" alt="">
                </div>
              </div>
              <div class="product-seller-recommended">
                <h3 class="mb-5">More from David's Store</h3>
                <div class="recommended-items card-deck">
                  <div class="card">
                    <img src="https://via.placeholder.com/157x157" alt="" class="card-img-top">
                    <div class="card-body">
                      <h5 class="card-title">U$ 55.00</h5>
                      <span class="text-muted"><small>T-Shirt Size X - Large - Nickony Brand</small></span>
                    </div>
                  </div>
                  <div class="card">
                    <img src="https://via.placeholder.com/157x157" alt="" class="card-img-top">
                    <div class="card-body">
                      <h5 class="card-title">U$ 55.00</h5>
                      <span class="text-muted"><small>T-Shirt Size X - Large - Nickony Brand</small></span>
                    </div>
                  </div>
                  <!-- <div class="card">
                    <img src="https://via.placeholder.com/157x157" alt="" class="card-img-top">
                    <div class="card-body">
                      <h5 class="card-title">U$ 55.00</h5>
                      <span class="text-muted"><small>T-Shirt Size X - Large - Nickony Brand</small></span>
                    </div>
                  </div> -->
                  <!-- <div class="card">
                    <img src="https://via.placeholder.com/157x157" alt="" class="card-img-top">
                    <div class="card-body">
                      <h5 class="card-title">U$ 55.00</h5>
                      <span class="text-muted"><small>T-Shirt Size X - Large - Nickony Brand</small></span>
                    </div>
                  </div> -->
                </div>
                <!-- /.recommended-items-->
                <p class="mb-5 mt-5"><a href="#">See all ads from this seller</a></p>
                <div class="product-description mb-5">
                  <h2 class="mb-5">Features</h2>
                  <dl class="row mb-5">
                    <dt class="col-sm-3">Brand</dt>
                    <dd class="col-sm-9">Nickony</dd>
                    <dt class="col-sm-3">Color</dt>
                    <dd class="col-sm-9">Red</dd>
                    <dt class="col-sm-3">Size</dt>
                    <dd class="col-sm-9">XXL</dd>
                    <dt class="col-sm-3">Fabric</dt>
                    <dd class="col-sm-9">Cottom</dd>
                  </dl>
                  <h2 class="mb-5">Description</h2>
                  
                </div>


              </div>
            </div>
            <div class="product-payment-details">
              <p class="last-sold text-muted"><small>145 items sold</small></p>
              <h4 class="product-title mb-2">T-shirt Nickony - XXL Black and White - 100% cotton - Limited Stock</h4>
              <h2 class="product-price display-4">$ 25.00</h2>
              <p class="text-success"><i class="fa fa-credit-card"></i> 12x or  5x $ 5.00</p>
              <p class="mb-0"><i class="fa fa-truck"></i> Delivery in all territory</p>
              <div class="text-muted mb-2"><small>know more about delivery time and shipping forms</small></div>
              <label for="quant">Quantity</label>
              <input type="number" name="quantity" min="1" id="quant" class="form-control mb-5 input-lg" placeholder="Choose the quantity">
              <button class="btn btn-primary btn-lg btn-block">Buy Now</button>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <style type="text/css">
    body {
  background-color: #f5f5f5;
  padding-top: 25px;
  font-family: 'Open sans', Arial, sans-serif;
}

.header-navigation {
  display: flex;
  flex-direction: row;
  justify-content: flex-start;
  align-items: center;
  font-size: .80rem;
}

.header-navigation a {
  font-size: .80rem;
}

.header-navigation .breadcrumb {
  margin-bottom: 0;
  background-color: transparent;
  padding: 0.20rem 1rem;
}

.header-navigation .btn-group {
 margin-left: auto;
}

.header-navigation .btn-share {
  position: relative;
}

.header-navigation .btn-share::after {
  content: "";
  width: 1px;
  height: 50%;
  background-color: #ccc;
  position: absolute;
  top: 50%;
  left: 100%;
  transform: translateY(-50%);
}

.store-body {
  display: flex;
  flex-direction: row;
  padding: 0;
}

.store-body .product-info {
  width: 60%;
  border-right: 1px solid rgba(0,0,0,.125); 
}

.store-body .product-payment-details {
  width: 40%;
  padding: 15px 15px 0 15px;
}

.product-info .product-gallery {
  display: flex;
  flex-direction: row;
  border-bottom: 1px solid rgba(0,0,0,.125);
}

.product-gallery-featured {
  display: flex;
  width: 100%;
  flex-direction: row;
  justify-content: center;
  align-items: flex-start;
  padding: 15px 0;
  cursor: zoom-in;
}

.product-gallery-thumbnails .thumbnails-list li {
  margin-bottom: 30px;
  cursor: pointer;
  position: relative;
  width: 100px;
  height: 100px;
}

.thumbnails-list li img {
  display: block;
  width: 100%;
}

.product-gallery-thumbnails .thumbnails-list li:hover::before {
  content: "";
  width: 3px;
  height: 100%;
  background: #007bff;
  position: absolute;
  top: 0;
  left: 0;
}

.product-info .product-seller-recommended {
  padding: 20px 20px 0 20px;
}

.product-comments textarea {
  height: 50px;
}

.last-questions-list li {
  margin-bottom: 20px;
}

.last-questions-list li span {
  padding-left: 10px;
}
  </style>
  <script type="text/javascript">
    // select all thumbnails
const galleryThumbnail = document.querySelectorAll(".thumbnails-list li");
// select featured
const galleryFeatured = document.querySelector(".product-gallery-featured img");

// loop all items
galleryThumbnail.forEach((item) => {
  item.addEventListener("mouseover", function () {
    let image = item.children[0].src;
    galleryFeatured.src = image;
  });
});

// show popover
$(".main-questions").popover('show');

  </script>
</main>