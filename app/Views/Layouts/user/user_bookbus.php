<?= $this->extend('Layouts/layout') ?>

<?= $this->Section('content') ?>
<div class="container">
  <div class="row">
    <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 mt-5 pt-3 pb-3 bg-white border form-wrapper">
    <div class="container">
                <div class="booking-form">
                    <div class="form-header">
                        <h1>Make your reservation</h1>
                        <hr>
                    </div>
                   
                    <form action="<?= base_url('bookbus/'.$bus_id)?>" method="post">
                        <div class="form-group">
                            <input class="form-control" type="text" name="user_name" value="<?= session()->get("user_name") ?>" placeholder="enter your name" value>
                            <span class="form-label">Provide some Information</span>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <select class="form-control" name="no_of_seats" required>
                                        <option value="" selected hidden>no of seats</option>
                                        <option>1</option>
                                       
                                    </select>
                                    <span class="select-arrow"></span>
                                    <span class="form-label">Seats</span>
                                </div>
                            </div>
                           
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="text" name="pickup_point"  value="<?=$bus['origin'] ?>" placeholder="enter your pickup_point" value>
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="text" name="destination"  value="<?=$bus['destination'] ?>" placeholder="enter your destination" value>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" type="email" name="user_email" placeholder="Enter your Email">
                                    <span class="form-label">Email</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" type="text" name="user_phone" placeholder="Enter your phone">
                                    <span class="form-label">Phone</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group"> <input class="form-control" type="text" name="price"  value=<?= $bus['price'] ?>> <span class="form-label">price</span> </div>
                            </div>
                        </div><br>
                        <div class="col-12 col-sm-4">
          <button type="submit" class="btn btn-primary">Book Ticket</button>
        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>
<!-- <div class="container">
  <div class="row">
    <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 mt-5 pt-3 pb-3 bg-white border form-wrapper">
    <div class="container">
                <div class="booking-form">
                    <div class="form-header">
                        <h1>Make your reservation</h1>
                        <hr>
                    </div>
                    <form action="/request" method="post">
                        <div class="form-group">
                            <input class="form-control" type="text" name="user_name" placeholder="enter your name">
                            <span class="form-label">Destination</span>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" type="date" required>
                                    <span class="form-label">Check In</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" type="date" required>
                                    <span class="form-label">Check out</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <select class="form-control" required>
                                        <option value="" selected hidden>no of rooms</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                    </select>
                                    <span class="select-arrow"></span>
                                    <span class="form-label">Rooms</span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <select class="form-control" required>
                                        <option value="" selected hidden>no of adults</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                    </select>
                                    <span class="select-arrow"></span>
                                    <span class="form-label">Adults</span>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <select class="form-control" required>
                                        <option value="" selected hidden>no of children</option>
                                        <option>0</option>
                                        <option>1</option>
                                        <option>2</option>
                                    </select>
                                    <span class="select-arrow"></span>
                                    <span class="form-label">Children</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" type="email" placeholder="Enter your Email">
                                    <span class="form-label">Email</span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group"> <input class="form-control" type="tel" placeholder="Enter you Phone"> <span class="form-label">Phone</span> </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-4">
          <button type="submit" class="btn btn-primary">Book Room</button>
        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->