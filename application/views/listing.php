<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Login Form</title>
    <link rel="stylesheet" href="<?php echo base_url()?>resources/css/reset.css">
    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
    <link rel="stylesheet" href="<?php echo base_url()?>resources/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url()?>resources/css/bootstrap.min.css">
  </head>
  <body>

    <div class="container">
      <div class="row">
      <div class="col-md-12">
        <h3>Property Listing</h3>
        <form method="post">
        <div class="row">
          <div class="col-md-12" style="border : 2px solid #33b5e5; ">
              <h5>Advanced Search</h5>
              <div class="row">
                <div class="col-md-4">
                    <select name="order_by" class="form-control">
                    <option>select</option>
                        <option value="newest" <?php echo $this->input->post('order_by') == 'newest' ? 'selected="selected"' : ''; ?>>Newest</option>
                        <option value="oldest" <?php echo $this->input->post('order_by') == 'oldest' ? 'selected="selected"' : ''; ?>>Oldest</option>
                        <option value="most_expensive" <?php echo $this->input->post('order_by') == 'most_expensive' ? 'selected="selected"' : ''; ?>>Most expensive</option>
                        <option value="least_expensive" <?php echo $this->input->post('order_by') == 'least_expensive' ? 'selected="selected"' : ''; ?>>Least expensive</option>
                        <option value="smallest" <?php echo $this->input->post('order_by') == 'smallest' ? 'selected="selected"' : ''; ?>>Smallest</option>
                        <option value="largest" <?php echo $this->input->post('order_by') == 'largest' ? 'selected="selected"' : ''; ?>>Largest</option>
                    </select>
                </div>
                <div class="col-md-4">
                  <select name="property_sale" class="form-control"> 
                    <option value="">Select</option>
                    <option value="commercial" <?php echo $this->input->post('property_sale') == 'commercial' ? 'selected="selected"' : ''; ?>>Commercial</option>
                    <option value="residential" <?php echo $this->input->post('property_sale') == 'residential' ? 'selected="selected"' : ''; ?>>Residential</option>
                  </select>
                </div>
                <div class="col-md-4">
                  <select name="property_type" class="form-control"> 
                    <option value="">Select</option>
                    <option value="1 bhk" <?php echo $this->input->post('property_type') == '1 bhk' ? 'selected="selected"' : ''; ?>>1 bhk</option>
                    <option value="2 bhk" <?php echo $this->input->post('property_type') == '2 bhk' ? 'selected="selected"' : ''; ?>>2 bhk</option>
                    <option value="3 bhk" <?php echo $this->input->post('property_type') == '3 bhk' ? 'selected="selected"' : ''; ?>>3 bhk</option>
                    <option value="4 bhk" <?php echo $this->input->post('property_type') == '4 bhk' ? 'selected="selected"' : ''; ?>>4 bhk</option>
                    <option value="4+ bhk" <?php echo $this->input->post('property_type') == '4+ bhk' ? 'selected="selected"' : ''; ?>>4+ bhk</option>
                  </select>
                </div>


              </div>
              <br style="clear:both"/>

              <div class="row">
                <div class="col-md-4">
                <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </div>
              <br style="clear:both"/>
          </div>
        </div>
        </form>
        <hr>
        <?php foreach ($properties as $key => $row) { ?>
          <div class="row">
              <div class="col-md-12" style="border : 2px solid #33b5e5; ">
                  <hr>
                  <div class="row">
                    <div class="col-md-6"><?php echo $row['address']?></div>
                    <div class="col-md-6"><?php echo $row['property_status']?></div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-md-6"><?php echo $row['property_type']?></div>
                    <div class="col-md-6"><?php echo $row['price']?></div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-md-12"><?php echo $row['description']?></div>
                  </div>
                  <hr>
              </div>
          </div>
          <hr>
        <?php } ?>
      </div>
      </div>
    </div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='http://codepen.io/andytran/pen/vLmRVp.js'></script>
    <script src="<?php echo base_url()?>resources/js/index.js"></script>
  </body>
</html>
