<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="pages/sign_in_or_sign_up.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
	</head>
	<body>
		<section class="sign_in_or_sign_up-main-section">
			<div class="main-content">
				<div class="title-text">
					Вхід або реєстрація
				</div>
				<div class="main-form">
					<form action= "?page=landing" method="post">
						<input type="text" required placeholder="Ім’я користувача або пошта" class="name-field" name="userName" value="<?php echo $_SESSION['userName'] ?>">
						<input type="password" required placeholder="Пароль" class="password-field" name="userPassword"  value="<?php echo $_SESSION['userPassword'] ?>">
						<div class="two-options">
							<a href="">Забули пароль?</a>
							<div class="remember-user">
								<input type="checkbox" checked id="checkbox-answer" name="keep_user">
								<label for="checkbox-answer">Запам’ятати мене</label>
							</div>
						</div>
						<button type="submit" class="main-button">
							Увійти
						</button>
					</form>
				</div>
				<div class="social-networks-sign-in">
					<div class="additional-text">
						<hr>
						<div class="whole-text">
							або приєднатися за допомогою
						</div>
						<hr>
					</div>
					<div class="social-networks-choice">
						<ul>
							<li>
								<img src="images/sign_in_or_sign_up/premium-icon-facebook-3128304 1.png">
								<a href="sign_in_or_sign_up.html" class="social-network-name">
									Facebook
								</a>
							</li>
							<li>
								<img src="images/sign_in_or_sign_up/free-icon-search-281764 1.png">
								<a href="sign_in_or_sign_up.html" class="social-network-name">
									<div>G</div>
									<div>oo</div>
									<div>g</div>
									<div>le</div>
								</a>
							</li>
							<li>
								<img src="images/sign_in_or_sign_up/mac-os-logo 1.png">
								<a href="sign_in_or_sign_up.html" class="social-network-name">	
									Apple ID
								</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="block-warning">
					<div class="text-warning">
						Увага! Якщо аккаунт ще не був створений, то вхід перетворюється на звичайну реєстрацію!
					</div>
				</div>
			</div>
		</section>
	</body>
</html>