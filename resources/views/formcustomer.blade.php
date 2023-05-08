<h1>Create a New Customer</h1>
	<form action="{{URL::to('/saveform')}}" method="post">
    <!-- aravel's default security settings require that a CSRF token be included with all form submissions as a way to protect against cross-site request forgery attacks. -->
        @csrf
        <label for="inputedname">Name:</label>
		<input type="text" id="name" name="inputedname" required>

		<label for="inputedemail">Email:</label>
		<input type="email" id="email" name="inputedemail" required>

		<input type="submit" value="Submit">
	</form>