<?= $this->extend('Layouts/layout') ?>

<?= $this->section('content') ?>

<div class="actionbutton mt-2">
  <a class="btn btn-info float-right mb20" href="<?=site_url('/index')?>">List Bus</a>
</div>

<div class="row">
  <h2>Edit bus</h2>
</div>

<?php
// Display Response 
if(session()->has('message')){
?>
   <div class="alert <?= session()->getFlashdata('alert-class') ?>">
      <?= session()->getFlashdata('message') ?>
   </div>
<?php
}

?>

<?php $validation = \Config\Services::validation(); ?>
<div class="row">
  <div class="col-md-12">
    <form action="<?=site_url('busupdate/'.$bus['bus_id'])?>" method="post">
      <div class="form-group">
        <label for="bus_name">Bus Name:</label>
        <select class="form-control" name="bus_name" aria-label="Default select example">
        
          <option value="Chetan Travels">Chetan Travels</option>
          <option value="Rushi Travels">Rushi Travels</option>
          <option value="Shubham Travels">Shubham Travels</option>
          <option value="Mayur Travels">Mayur Travels</option>
          <option value="Omkar Travels">Omkar Travels</option>
          <option value="Mangesh Travels">Mangesh Travels</option>
         </select>

        <!-- Error -->
        <?php if( $validation->getError('bus_name') ) {?>
        <div class='alert alert-danger mt-2'>
          <?= $error = $validation->getError('bus_name'); ?>
        </div>
        <?php }?>
      </div>
      <div class="form-group">
        <label for="bus_number">Bus Number:</label>
        <select class="form-control" name="bus_number" aria-label="Default select example">
          <option value="mh17">mh17</option>
          <option value="mh18 ">mh18</option>
          <option value="mh19 "> mh19</option>
          <option value="mh20 "> mh20</option>
          <option value="mh21 ">mh21 </option>
          <option value="mh22 ">mh22</option>
          </select>

           <!-- Error -->
            <?php if ($validation->getError('bus_number')) { ?>
          <div class='alert alert-danger mt-2'>
            <?= $error = $validation->getError('bus_number'); ?>
          </div>
          <?php } ?>
            </div>
      <div class="form-group">
        <label for="bus_capacity">Bus Capacity:</label>
        <select class="form-control" name="bus_capacity" aria-label="Default select example">
          <option value="45">45</option>
          <option value="50 ">50</option>
          
          </select>
          <!-- Error -->
           <?php if ($validation->getError('bus_capacity')) { ?>
          <div class='alert alert-danger mt-2'>
            <?= $error = $validation->getError('bus_capacity'); ?>
          </div>
        <?php } ?>
      </div>
      <div class="form-group">
        
        <label for="bus_status">bus status:</label>

        <select class="form-control" name="bus_status" id="bus_status" aria-label="Default select example">
          <option value="AVAILABLE">AVAILABLE</option>
          <option value="UNAVAILABLE">UNAVAILABLE</option>

        </select>
    
        <!-- Error -->
        <?php if ($validation->getError('bus_status')) { ?>
          <div class='alert alert-danger mt-2'>
            <?= $error = $validation->getError('bus_status'); ?>
          </div>
        <?php } ?>

      </div>
      <div class="form-group">

                    <label for="origin">bus origin:</label>

                    <select class="form-control" name="origin" id="origin" aria-label="Default select example">
                        <option value="NASIK">NASIK</option>
                        <option value="SANGAMNER">SANGAMNER</option>

                    </select>
               
                <!-- Error -->
                <?php if ($validation->getError('origin')) { ?>
                <div class='alert alert-danger mt-2'>
                    <?= $error = $validation->getError('origin'); ?>
                </div>
                <?php } ?>
        </div>
        <div class="form-group">

            <label for="destination">bus destination:</label>

            <select class="form-control" name="destination" id="destination" aria-label="Default select example">
                <option value="NASIK">NASIK</option>
                <option value="SANGAMNER">SANGAMNER</option>

            </select>
      
        <!-- Error -->
        <?php if ($validation->getError('destination')) { ?>
        <div class='alert alert-danger mt-2'>
            <?= $error = $validation->getError('destination'); ?>
        </div>
        <?php } ?>
    </div>

    <div class="form-group">
        <label for="departure">Enter Departure Time</label>
        <input type="datetime-local" name="departure" class="form-control" id="departure" value="<?= old('departure',$bus['departure']) ?>">
  

    <!-- Error -->
    <?php if ($validation->getError('departure')) { ?>
    <div class='alert alert-danger mt-2'>
        <?= $error = $validation->getError('departure'); ?>
    </div>
    <?php } ?>
</div>

<div class="form-group">
<label for="price">bus price:</label>

<select class="form-control" name="price" id="price" aria-label="Default select example">
    <option value="500">500</option>
    <option value="1000">1000</option>

</select>



<!-- Error -->
<?php if ($validation->getError('price')) { ?>
<div class='alert alert-danger mt-2'>
    <?= $error = $validation->getError('price'); ?>
</div>
<?php } ?>
<div>







      <br>

      <button type="submit" class="btn btn-success" name="submit">Submit</button>
    </form>
  </div>

</div>
    
<?= $this->endSection() ?>