<h2>Create a news item</h2>

<?php echo validation_errors(); ?>

<?php echo form_open('news/create') ?>

	<label for="title">Title</label>
	<input type="input" name="title" /><br />

	<label for="text">Text</label>
	<textarea name="text"></textarea><br />

	<input type="submit" name="submit" value="Create news item" />

</form>


<?php if (! defined('BASEPATH')) exit('No direct script access allowd!');

class Register extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		session_start();

		// Get the userId
		$userId = 1;

		// Connect to MySql database
		$this->load->database();

		// Query for all projects associated with userId
		$query = 'SELECT project, etc...
		FROM users
		WHERE '
	}

}


?>