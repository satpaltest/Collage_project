<form action="#" method="post">
	<div class="col-6 col-md-2 col-lg-3">
								<label for="checkIn" >Check In</label>
								<input type="text" class="form-control" id="checkIn" name="checkin-date" placeholder="Check In"  onfocus="(this.type='date')">
							</div>
						<div class="col-6 col-md-2 col-lg-3">
							<label for="checkOut" >Check Out</label>
							<input type="text" class="form-control" id="checkOut" name="checkout-date" placeholder="Check Out" onfocus="(this.type='date')">
						</div>
					<div class="row justify-content-between align-items-end">
						<div class="col-6 col-md-2 col-lg-3">
							<label for="checkIn" >GH Name</label>
							<input type="text" class="form-control" id="name" name="name" placeholder="GH Name">
						</div>							
						<div class="col-6 col-md-2 col-lg-3">
							<label for="checkIn" >GH Rooms</label>
							<input type="int" class="form-control" id="rooms" name="rooms" placeholder="GH Rooms">
						</div>
						<div class="col-6 col-md-2 col-lg-3">
							<label for="checkOut" >GH Price</label>
							<input type="int" class="form-control" id="price" name="price" placeholder="GH Price">
						</div>
						<div class="col-6 col-md-2 col-lg-3">
							<label for="checkOut" >GH Location</label>
							<input type="int" class="form-control" id="location" name="location" placeholder="GH Price">
						</div>
						
						<div class="col-6 col-md-2">
							<label for="adults">Adult</label>
							<select name="adults" id="adults" class="form-control">
								<option value="01">01</option>
								<option value="02">02</option>
								<option value="03">03</option>
								<option value="04">04</option>
								<option value="05">05</option>
								<option value="06">06</option>
							</select>
						</div>
						<div class="col-4 col-md-2 col-lg-1">
							<label for="children">Children</label>
							<select name="children" id="children" class="form-control">
								<option value="01">01</option>
								<option value="02">02</option>
								<option value="03">03</option>
								<option value="04">04</option>
								<option value="05">05</option>
								<option value="06">06</option>
								</select>
						</div>
						<div class="col-12 col-md-3">
							<button type="submit" class="form-control btn roberto-btn w-100">Check Availability</button>
						</div>
					</div>
				</form>