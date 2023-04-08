<li>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  SignUp
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">SignUp Form</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <form>
       		<div class="form-group">
       			<label>Enter Moblie No.</label>
       			<input type="text" name="user" class="form-control">
       		</div>
       		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
 			 Send OTP
			</button>
       		<div class="form-group">
       			<label>Enter OTP</label>
       			<input type="text" name="sendotp" class="form-control">
       		</div>
       		<div class="signup-link">
			Not received your code? <a href="#">Resend Code</a></div>


       </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Next</button>
      </div>
      <div class="signup-link">
			Already have an account? <a href="#">Login Here</a></div>
    </div>
  </div>
</div>