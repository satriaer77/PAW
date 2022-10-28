<?php

function checkInput($regexPattern, $inputData, $varCheck)
{
	if ($inputData != "") {
		return preg_match($regexPattern, $inputData);
	} else {
		return $varCheck;
	}
}

function setFieldData($inputData)
{
	if (isset($inputData)) {
		echo $inputData;
	}
}

function setRadioData($inputData, $radioData)
{
	if (isset($inputData) && $inputData == $radioData) {
		echo "checked";
	}
}

$isNameBlank   = false;
$isEmailBlank  = false;
$isGenderBlank = false;

$isNameValid   = true;
$isEmailValid  = true;
$isUrlValid    = true;
$isFormValid   = true;

$showOutput    = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$name     = $_POST["name"];
	$email    = $_POST["email"];
	$website  = $_POST["website"];
	$comment  = $_POST["comment"];
	$gender   = $_POST["gender"];

	if ($name == "") {
		$isNameBlank = true;
	} elseif (!checkInput("/^[a-zA-Z ]*$/", $name, $isNameValid)) {
		$isNameValid = false;
	}

	if ($email == "") {
		$isEmailBlank = true;
	} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$isEmailValid = false;
	}


	if (!checkInput("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website, $isUrlValid)) {
		$isUrlValid = false;
	}

	if ($gender == "") {
		$isGenderBlank = true;
	}


	if (!$isNameBlank && !$isEmailBlank && !$isGenderBlank && $isNameValid && $isEmailValid && $isUrlValid) {
		$showOutput = true;
	}

	#var_dump($_POST);
}

?>

<!DOCTYPE HTML>

<html>

<head>
	<title>Form Input User</title>
	<style>
		.warning-message {
			color: red;
		}

		.input-field {
			padding: 0.5rem 0.2rem;
			margin: 1rem;
		}
	</style>
</head>

<body>
	<div class="form-title">
		<h2>PHP FORM VALIDATE EXAMPLE</h2>
	</div>
	<div class="form-field">
		<span class="warning-message">* required field</span>
		<form action="" method="POST">

			<div class="input-field">
				<label for="name">Name : </label>
				<input type="text" name="name" id="name" value="<?php setFieldData($name); ?>">
				<span class="warning-message">*
					<?php if ($isNameBlank) { ?>
						Name is required
					<?php } ?>
					<?php if (!$isNameValid && !$isNameBlank) { ?>
						Only letters and white space allowed
					<?php } ?>
				</span>
			</div>

			<div class="input-field">
				<label for="email">Email : </label>
				<input type="text" name="email" id="email" value="<?php setFieldData($email); ?>">
				<span class="warning-message">*
					<?php if ($isEmailBlank) { ?>
						Email is required
					<?php } ?>
					<?php if (!$isEmailValid && !$isEmailBlank) { ?>
						Invalid email format
					<?php } ?>
				</span>
			</div>

			<div class="input-field">
				<label for="website">Website : </label>
				<input type="text" name="website" id="website" value="<?php setFieldData($website); ?>">
				<?php if (!$isUrlValid) { ?>
					<span class="warning-message">Invalid URL</span>
				<?php } ?>
			</div>

			<div class="input-field">
				<label for="comment">Comment : </label>
				<textarea name="comment" id="comment"><?php setFieldData($comment); ?></textarea>
			</div>

			<div class="input-field">
				<label for="gender">Gender : </label>
				<input type="radio" name="gender" id="female" value="female" <?php setRadioData($gender, "female"); ?>>
				<label for="female">Female</label>
				<input type="radio" name="gender" id="male" value="male" <?php setRadioData($gender, "male"); ?>>
				<label for="male">Male</label>
				<input type="radio" name="gender" id="other" value="other" <?php setRadioData($gender, "other"); ?>>
				<label for="other">Other</label>
				<span class="warning-message">*
					<?php if ($isGenderBlank) { ?>
						Gender is required
					<?php } ?>
				</span>
			</div>

			<button type="submit">Submit</button>

		</form>
	</div>

	<h2>Your Input :</h2>
	<?php if ($showOutput) { ?>
		<div class="form-output">
			<?php
			echo "$name<br>
			$email<br>
			$website<br>
			$comment<br>
			$gender";
			?>

		</div>
	<?php } ?>


</body>

</html>