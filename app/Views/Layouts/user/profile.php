<?= $this->extend('Layouts/main') ?>

<?= $this->Section('content') ?>
<div class="container">

  <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 mt-5 pt-3 pb-3 bg-white border form-wrapper">
    <!-- .''.$user['user_address'].''.$user['user_phone'].''.$user['user_gender'].''.$user['user_idproof'].''.$user['user_email'].''.$user['user_password'] -->
<h3><?= $user['user_name']?> </h3>
  
  <hr>
  <?php if(session()->get('success')):?>
        <div class="alert alert-success" role="alert">
          <?=session()->get('success') ?>
        </div>
        <?php endif;?>
  <form method="post" action="/profile">
      
    
          <div class="form-group">
            <label for="user_name">Enter name</label>
            <input type="text" name="user_name" class="form-control" id="user_name"  value="<?= set_value('user_name',$user['user_name']) ?>" placeholder="Enter Full Name">
          </div>
          <div class="form-group">
            <label for="user_address">Enter address</label>
            <input type="text" name="user_address" class="form-control" id="user_address"  value="<?= set_value('user_address',$user['user_address']) ?>" placeholder="Enter adress">
          </div>
          <div class="form-group">
            <label for="user_phone">Enter phone</label>
            <input type="text" name="user_phone" class="form-control" id="user_phone"  value="<?= set_value('user_phone',$user['user_phone']) ?>" placeholder="Enter phonenumber">
          </div>
          <div class="form-group">
            <label for="user_gender">Enter gender</label>
            <input type="text" name="user_gender" class="form-control" id="user_gender"  value="<?= set_value('user_gender',$user['user_gender']) ?>" placeholder="Enter gender">
          </div>
          <div class="form-group">
            <label for="user_idproof">Enter idpproof</label>
            <input type="text" name="user_idproof" class="form-control" id="user_idproof"  value="<?= set_value('user_idproof',$user['user_idproof']) ?>" placeholder="Enter id proof">
          </div>
          <div class="form-group">
            <label for="user_email">Enter email</label>
            <input type="text" name="user_email" class="form-control" id="user_email"  value="<?= set_value('user_email',$user['user_email']) ?>" placeholder="Enter email">
          </div>
          <div class="form-group">
            <label for="user_password">enter password</label>
            <input type="password" name="user_password" class="form-control"  id="user_password" placeholder="enter password">
          </div>
          <div class="form-group">
            <label for="confirm_password">confirm password</label>
            <input type="password" name="confirm_password" class="form-control"  id="confirm_password" placeholder="confirm password">
          </div>
          <?php if (isset($validation)) : ?>
            <div class="col-12">
              <div class="alert alert-danger" role="alert">
                <?= $validation->listErrors()  ?>
              </div>
            </div>
          <?php endif; ?>

        
      

      <div class="row">
        <div class="col-12 col-sm-4">
          <button type="submit" class="btn btn-primary">update</button>
        </div>
      </div>
  </div>
  </form>
</div>
</div>
</div>
<?= $this->endSection() ?>