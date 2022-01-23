<div class="container">
	<div class="app front">
		<div class="header">
			<span class="info">Login</span>
			<div class="prompt">
				<span class="ask">Don't have account?</span>
				<button class="btn signup">sign up</button>
			</div>
		</div>
		<div class="main">
			<div class="user_field">
				<div class="direct login">
					<div class="icon">
						<i class="fab fa-google"></i>
					</div>
					<div class="icon">
						<i class="fab fa-discord"></i>
					</div>
					<div class="icon">
						<i class="fab fa-github"></i>
					</div>
				</div>
				<span class="option_text">or use your account instead</span>
				<form class="_details" action="logac.php" method="post">
					<div class="textbox">
						<input name="uname" type="text">
						<span class="input_detail">Username or Email</span>
					</div>
					<div class="textbox">
						<input name="pass" type="password">
						<span class="input_detail">Password</span>
					</div>
				</form>
			</div>
			<button class="btn login">Login</button>
		</div>
	</div>


	<div class="app back">
		<div class="header">
			<span class="info">Sign Up</span>
			<div class="prompt">
				<span class="ask">Have an account?</span>
				<button class="btn login">login</button>
			</div>
		</div>
		<div class="main">
			<div class="user_field">
				<div class="direct login">
					<div class="icon">
						<i class="fab fa-google"></i>
					</div>
					<div class="icon">
						<i class="fab fa-discord"></i>
					</div>
					<div class="icon">
						<i class="fab fa-github"></i>
					</div>
				</div>
				<span class="option_text">or use your account instead</span>
				<form class="_details" action="signac.php" method="post">
					<div class="textbox">
						<input name="uname" type="text">
						<span class="input_detail">Username</span>
					</div>
					<div class="textbox">
						<input name="email" type="email">
						<span class="input_detail">Email</span>
					</div>
					<div class="textbox">
						<input name="pass" type="password">
						<span class="input_detail">Password</span>
					</div>
					<div class="textbox">
						<input name="cpass" type="password">
						<span class="input_detail">Password</span>
					</div>
				</form>
			</div>
			<button class="btn login">sign up</button>
		</div>
	</div>
</div>

<script type="text/javascript">

console.clear();

var signupBtn = document.querySelector('.app.front .btn.signup');
var loginBtn = document.querySelector('.app.back .btn.login');
var loginForm = document.querySelector('.app.front');
var signupForm = document.querySelector('.app.back');
var container = document.querySelector('.container');

signupBtn.addEventListener('click', () => {
	container.classList.toggle('active');
});
loginBtn.addEventListener('click', () => {
	container.classList.toggle('active');
});


</script>

