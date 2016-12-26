<head>
    {head}
</head>
<?php echo form_open(); ?>
<body>
	<div class="container">
		<form class="form-signin">
		  <h2 class="form-signin-heading">Register Here</h2>
		  <div class="form-group">
		    <label>Company Name: </label>
		    <input type="text" class="form-control" id="companyname" placeholder="Company Name">
		  </div>
		  <div class="form-group">
		    <label>Type of Company: </label>
		    <input type="text" class="form-control" id="companytype" placeholder="Company Type">
		  </div>
		  <div class="form-group">
		    <label>Address: </label>
		    <input type="text" class="form-control" id="companyaddress" placeholder="Complete Address">
		  </div>
		  <div class="form-group">
		    <label>Contact Number: </label>
		    <input type="text" class="form-control" id="companycontact" placeholder="Contact Number">
		  </div>
		  <div class="form-group">
		    <label>Email Address</label>
		    <input type="email" class="form-control" id="companyemail" placeholder="(ex. company@gmail.com)">
		  </div>
		  <div class="form-group">
		    <label>Owner / Founder: </label>
		    <input type="text" class="form-control" id="companyfounder" placeholder="Complete Name">
		  </div>
		  <div class="form-group">
		    <label>Year of Establishment: </label>
		    <input type="text" class="form-control" id="companyyear" placeholder="(ex. 1990)">
		  </div>
		  <div class="form-group">
		    <label>Human Resource Department's Contact Person: </label>
		    <input type="text" class="form-control" id="hrname" placeholder="Complete Name">
		  </div>
		  <div class="form-group">
		    <label>Department's Contact Number: </label>
		    <input type="text" class="form-control" id="hrcontact" placeholder="HR Department's Contact Number">
		  </div>
		  <div class="form-group">
		    <label>Department's E-mail Address: </label>
		    <input type="email" class="form-control" id="hremail" placeholder="(ex. hrdepartment@gmail.com)">
		  </div>
		  <div class="form-group">
		    <label>Job Position's in the company: </label>
		    <input type="text" class="form-control" id="positions" placeholder="(ex.Encoder)">
		  </div>
		  <!-- <div class="form-group">
		    <label for="exampleInputPassword1">Password</label>
		    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
		  </div>
		  <div class="form-group">
		    <label for="exampleInputFile">File input</label>
		    <input type="file" id="exampleInputFile">
		    <p class="help-block">Example block-level help text here.</p>
		  </div>
		  <div class="checkbox">
		    <label>
		      <input type="checkbox"> Check me out
		    </label>
		  </div> -->
		  <button type="submit" class="btn btn-lg btn-primary">Submit</button>
		</form>
	</div>
</body>
<!-- <div class="input-group">
  <span class="input-group-addon" id="basic-addon1">@</span>
  <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
</div>

<div class="input-group">
  <input type="text" class="form-control" placeholder="Recipient's username" aria-describedby="basic-addon2">
  <span class="input-group-addon" id="basic-addon2">@example.com</span>
</div> -->
<!-- <div>
	<input type="text" name="username">
</div>
<input type="password" name="password">
<button type="submit" name="submit">Login</button> -->

<?php echo form_close(); ?>