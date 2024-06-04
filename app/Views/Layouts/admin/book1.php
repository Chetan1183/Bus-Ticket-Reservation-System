<?= $this->extend('Layouts/main1') ?>

<?= $this->Section('content') ?>

<table width="100%" border="1" style="border-collapse: collapse;">
  <thead>
    <tr>
    <th width="10%">bus id</th>
      <th width="30%">bus type</th>
      <th width="20%">bus number</th>
      <th width="25%">status</th>
      <th width="15%">&nbsp;</th>
    </tr>
  </thead>
  <tbody>
  <?php 
  if(count($booking) > 0){

    foreach($booking as $booking){
  ?>
     <tr>
       <td><?= $booking['user_id'] ?></td>
      
       <td><?= $booking['bus_type'] ?></td>
       <td><?= $booking['busnumber'] ?></td>
       <td><?= $booking['status'] ?></td>
       <td align="center">
         <a class="btn btn-sm btn-info" href="<?= site_url('bus/edit/'.$booking['bus_id']) ?>">Edit</a>
         <a class="btn btn-sm btn-danger" href="<?= site_url('bus/delete/'.$booking['bus_id']) ?>">Delete</a>
       </td>
     </tr>
  <?php
    }

  }else{
  ?>
    <tr>
      <td colspan="4">No data found.</td>
    </tr>
  <?php
  }
  ?>
  </tbody>
</table>
<?= $this->endSection() ?>