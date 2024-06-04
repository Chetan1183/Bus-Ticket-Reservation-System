<?= $this->extend('Layouts/layout') ?>

<?= $this->Section('content') ?>

<table width="100%" border="1" style="border-collapse: collapse;">
  <thead>
    <tr>
   
    <th width="10%">bus id</th>
      <th width="30%">user name</th>
      <th width="20%">pickup_point</th>
      <th width="25%">destination</th>
      <th width="15%">user_email</th>status
      <th width="15%">status</th>
    </tr>
  </thead>
  <tbody>
  <?php 
  if(count($booking) > 0){

    foreach($booking as $booking){
  ?>
     <tr>
       <td><?= $booking['bus_id'] ?></td>
       <td><?= $booking['user_name'] ?></td>
       <td><?= $booking['pickup_point'] ?></td>
       <td><?= $booking['destination'] ?></td>
       <td><?= $booking['user_email'] ?></td>
       
       <td><?= $booking['status'] ?></td>
      
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