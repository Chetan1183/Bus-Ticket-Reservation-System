<?= $this->extend('Layouts/main') ?>

<?= $this->Section('content') ?>
<div class="container">

  <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 mt-5 pt-3 pb-3 bg-white border form-wrapper">
    <form method="post" action="/adminregister">
      
    
          <div class="form-group">
            <label for="admin_name">Enter name</label>
            <input type="text" name="admin_name" class="form-control" id="admin_name" required value="<?= set_value('admin_name') ?>" placeholder="Enter Full Name">
          </div>

          <div class="form-group">
            <label for="admin_loginid">Enter loginid</label>
            <input type="text" name="admin_loginid" class="form-control" id="admin_loginid" required value="<?= set_value('admin_loginid') ?>" placeholder="Enter id proof">
          </div>
          <div class="form-group">
            <label for="admin_password">enter password</label>
            <input type="password" name="admin_password" class="form-control" required id="admin_password" placeholder="enter password">
          </div>
          <div class="form-group">
            <label for="confirm_password">confirm password</label>
            <input type="password" name="confirm_password" class="form-control" required id="confirm_password" placeholder="confirm password">
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
          <button type="submit" class="btn btn-primary">register</button>
        </div>
        <div class="col-12 col-sm-8 text-right">
          <a href="/userlogin">already registered login</button>

        </div>
      </div>
  </div>
  </form>
</div>
</div>
</div>
<?= $this->endSection() ?>