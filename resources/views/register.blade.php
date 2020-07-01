<!DOCTYPE html>
<html>
<head>
<title>Register Form</title>
</head>
<body>

<h1>Buat Account Baru!</h1>
<h3>Sign Up Form</h3>
<form action="{{ url('/welcome') }}" method="POST">
{{ csrf_field() }}
	<label for="fname">First name:</label><br>
  	<input type="text" id="fname" name="fname"><br>
  	<label for="lname">Last name:</label><br>
  	<input type="text" id="lname" name="lname">
<p>Gender:</p>
  <input type="radio" id="male" name="gender" value="male">
  <label for="male">Male</label><br>
  <input type="radio" id="female" name="gender" value="female">
  <label for="female">Female</label><br>
  <input type="radio" id="other" name="gender" value="other">
  <label for="other">Other</label>
<p>Nationality:</p>
<select id="Nationality" name="national">
  <option value="Indonesian">Indonesian</option>
  <option value="Amerika Serikat">Amerika Serikat</option>
  <option value="Belanda">Belanda</option>
  <option value="Singapure">Singapure</option>
</select>
<p>Language Spoken:</p>
  <input type="checkbox" id="vehicle1" name="vehicle1" value="Indonesia">
  <label for="vehicle1"> Bahasa Indonesia</label><br>
  <input type="checkbox" id="vehicle2" name="vehicle2" value="English">
  <label for="vehicle2"> English</label><br>
  <input type="checkbox" id="vehicle3" name="vehicle3" value="Other">
  <label for="vehicle3"> Other</label>
<p>Bio:</p>
<textarea rows="10" cols="25" name="comment" form="usrform"></textarea><br>
<input type="submit" name="submit" value="Sign Up">
</form>

</body>
</html>