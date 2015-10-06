<form action="php/contact.php" method="post">

	<div class='name-phone-holder'>
		<div class='name-holder'>
			<label for="name">Name:</label><br />
			<input type="text" id="name" name='contact_name' maxlength='35'/>
		</div>
		<div class='phone-holder'>
			<label for='phoneno'>Phone No:</label><br />
			<input type='text' id='phoneno' name='contact_phoneno' maxlength='15'/>
		</div>
	</div>
	<div class='email-holder'>
		<label for='email'>Email:</label><br />
		<input type='text' id='email' name='contact_email' maxlength='65'/>
	</div>
	<div class='message-holder'>
		<label for='message'>Message:</label><br />
		<textarea id='message' name='contact_message' maxlength='1200'></textarea>
	</div>
	<div class='submit-holder'>
		<p class='send-away'>Send Away! </p>
		<!--<input type='submit' value='send darling' />-->
	</div>

</form>