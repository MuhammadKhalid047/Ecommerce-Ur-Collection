<?php
    include 'include/header.php';
    include 'include/navbar.php';
?>
  <style>
    /* Custom styles go here */
    .product-image {
      max-width: 100%;
      height: auto;
    }

    .quantity-size-container {
      display: flex;
      justify-content: space-between;
    }

    .availability-status {
      font-weight: bold;
    }

    .color-options {
      display: flex;
      gap: 10px;
    }
  </style>


<div class="container mt-5">
  <div class="row">
    <div class="col-lg-6">
      <img src="./assets/img/gallery/latest3.jpg" alt="Product Image" class="img-fluid">
    </div>
    <div class="col-lg-6">
      <h2>Product Name</h2>
      <p class="text-muted">Product Code: ABC123</p>
      <p><strong>Price:</strong> $49.99</p>

      <!-- Quantity and Size options -->
      <div class="mb-3">
        <label for="quantity">Quantity:</label>
        <input type="number" id="quantity" class="form-control" value="1" min="1">
      </div>

      <div class="mb-3">
        <label for="size">Size:</label>
        <select id="size" class="form-select">
          <option value="small">Small</option>
          <option value="medium">Medium</option>
          <option value="large">Large</option>
        </select>
      </div>
       <!-- Color options -->
       <div class="mb-3">
        <label for="color">Color:</label>
        <select id="color" class="form-select">
          <option value="red">Red</option>
          <option value="blue">Blue</option>
          <option value="green">Green</option>
        </select>
      </div>
      <!-- Product availability and sold information -->
      <p><strong>Availability:</strong> <span id="availability">In Stock (10 left)</span></p>
      <p><strong>Sold:</strong> 100 pieces</p>

      <!-- Add to Wishlist and Add to Cart buttons -->
      <div class="mb-3">
        <button class="btn btn-outline-secondary">Add to Wishlist</button>
        <button class="btn btn-primary">Add to Cart</button>
      </div>


      <!-- Product description -->
      
      
    </div>
    <div class="col-12">
        <h4>Description:</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit....</p>

    </div>
  </div>
</div>




<?php include('include/footer.php'); 
        include('include/script.php');
    ?>