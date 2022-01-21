<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
$this->title = 'My Yii Application';
?>
<head>
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MB7TCQM');</script>
<!-- End Google Tag Manager -->
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width">

<link rel="stylesheet" href="css/main14.css">
<link rel="stylesheet" href="css/intlTelInput7.css">

<link rel="icon" type="image/png" href="images/favicon/favicon-16x16.png" sizes="16x16">
<link rel="icon" type="image/png" href="images/favicon/favicon-32x32.png" sizes="32x32">
<title>Онлайн тест инвестора Сможете ли Вы стать успешным инвестором?</title>
<!--<script charset="UTF-8" src="https://web.webpushs.com/js/push/38bf0c4e455b74cd5acbeb3ba8566cb4_1.js" async></script>-->

<style>
	.phoneConfirmWrap .intl-tel-input {
		width: 100%;
	}
	.tasks-field-wrap:active{
		background-color: #2e5c8a;
		box-shadow: none;
		color: #fff;
		transition: 0s;
	} 
	.progress {
		margin-bottom: -12px;
		height: 12px;
		/*border-radius: 20px 20px 0 0;*/
		display: block!important;

		background-color: #2e5c8a;
		/*border-top-left-radius: 11px;*/
		margin-bottom: 0px;
		width: 0px;
		transition: .5s;
		position: absolute;
		z-index: 9999;
	}

	.previous_question {
		cursor: pointer;
		transition: .3s;
	}

	#rootwizard {
		position: relative;
		padding-top: 9px;
	}
	.tab-content-wrap {
		background: #fff;
		border-radius: 14px;
		position: relative;
		overflow: hidden;
	}
	

</style>
</head>
<body>
	<!-- <script>
		function sleep(ms) {
			ms += new Date().getTime();
			while (new Date() < ms){

			}
		}
	</script> -->
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MB7TCQM"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->



		<div id="preloader">  
			<div id="floatingCirclesG">
				<div class="f_circleG" id="frotateG_01"></div>
				<div class="f_circleG" id="frotateG_02"></div>
				<div class="f_circleG" id="frotateG_03"></div>
				<div class="f_circleG" id="frotateG_04"></div>
				<div class="f_circleG" id="frotateG_05"></div>
				<div class="f_circleG" id="frotateG_06"></div>
				<div class="f_circleG" id="frotateG_07"></div>
				<div class="f_circleG" id="frotateG_08"></div>
			</div>
		</div>




		<div class="popup-ver">

			<div class="popup-ver-in">
				<div class="popup-close">x</div>
				<div class="popup-ver-header">Подтверждение</div>

				<div class="popup-ver-cont">
					<div class="popup-container">
						<form  class="popup-form">
							<p class="popup-form-title">На Ваш телефон <span id="currPhone"></span> был отправлен код подтверждения</p>
							<input type="text" id="sms-code" name="code" placeholder="Введите код из смс">
							<span id="codeError">Неверный код</span>
							<span id="errorLead">Ошибка:такой e-mail уже существует введите другой</span>
							<div class="popup-wrap-but">
								<button type="button" id="res">узнать результаты</button>
								<button type="button" id="change-number">изменить номер</button>
							</div>
							<div class="phone phoneConfirmWrap">
								<span>Введите правильный номер телефона</span>
								<div class="phone-wrap">
									<!-- <input class="codePhone" type="text" > -->
									<input name="phoneConfirm" id="phoneConfirm" class="form-field phoneConfirm" type="text"  placeholder="Номер телефона" >
								</div>
								<button type="button" id="submit-number">ок</button>
							</div>

						</form>
					</div>
				</div>
			</div>
		</div>

		<main class="hero">
			<h2 class="hero-title-top">
				онлайн-тест
			</h2>
			<div class="container" id="container-task">

				<div class="hero__wrap-item">
					<p class="hero-item">

						<span>10</span> вопросов
					</p>
					<p class="hero-item">
						<span>2</span> минуты
					</p>
				</div>
				<h1 class="hero-title">Готовы ли Вы <br> стать  инвестором?</h1>


				<p class="hero-subtitle">Итак, вы приняли решение попробовать себя в роли инвестора. Наш тест, состоящий из 10 вопросов, даст понимание, сможете вы зарабатывать деньги инвестированием или вам стоит на время оставить эту затею. Если вы получите отрицательные результаты, мы вышлем вам образовательные ссылки, которые помогут вам развить свои навыки. Не забудьте повторить тест, когда закончите обучение!</p>



				<div class="tab-content-wrap">
	<!-- <div id="bar" class="progress">
						<div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>
					</div> -->
					<div  class="progress">
						<div class="progress-bar"></div>
					</div>
					<div id="rootwizard">
						<div class="navbar">
							<div class="navbar-inner">
								<div class="container" >
									<ul>
										<li><a href="index.html#tab1" data-toggle="tab">First</a></li>
										<li><a href="index.html#tab2" data-toggle="tab">Second</a></li>
										<li><a href="index.html#tab3" data-toggle="tab">Third</a></li>
										<li><a href="index.html#tab4" data-toggle="tab">Forth</a></li>
										<li><a href="index.html#tab5" data-toggle="tab">Fifth</a></li>
										<li><a href="index.html#tab6" data-toggle="tab">Sixth</a></li>
										<li><a href="index.html#tab7" data-toggle="tab">Seventh</a></li>
										<li><a href="index.html#tab8" data-toggle="tab">eight</a></li>
										<li><a href="index.html#tab9" data-toggle="tab">nine</a></li>
										<li><a href="index.html#tab10" data-toggle="tab">ten</a></li>

									</ul>
								</div>
							</div>
						</div>


						<!-- <div id="bar" class="progress">
						<div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>
					</div> -->
					<div class="tab-content">

						<div class="tab-pane" id="tab1">
							<div class="tasks">
								<p class="tasks-number">
									Вопрос №1
								</p>
								<div class="tasks-field-container">
									<h2 class="tasks-title">Есть ли у Вас опыт инвестирования?
									</h2>

									<div class="row">

										<div class="col-xs-12 col-sm-6 wizard">

											<div class="tasks-field-wrap" id="q1">	
												Нет опыта вообще
											</div>

										</div>
										<div class="col-xs-12 col-sm-6 wizard">

											<div class="tasks-field-wrap" id="q2">	
												Больше года

											</div>

										</div>
									</div>
								</div>
								<div class="tasks-field-container">
									<div class="row">

										<div class="col-xs-12 col-sm-6 wizard">

											<div class="tasks-field-wrap" id="q3">	
												Меньше одного года
											</div>

										</div>
										<div class="col-xs-12 col-sm-6 wizard">

											<div class="tasks-field-wrap" id="q4">	
												Я опытный инвестор
											</div>

										</div>
									</div>
									<ul class="pager wizard">
										<span class="error-task">Пожалуйста, выберите вариант ответа!</span>
										
									</ul>
								</div>

							</div>
						</div>

						<div class="tab-pane" id="tab2">

							<div class="tasks">
								<p class="tasks-number">
									Вопрос №2
								</p>
								<h2 class="tasks-title">Какова основная цель Ваших инвестиций?
								</h2>
								<div class="tasks-field-container">
									<div class="row">

										<div class="col-xs-12 col-sm-6 wizard">

											<div class="tasks-field-wrap" id="q5">	
												Защита сбережений от инфляции
											</div>

										</div>
										<div class="col-xs-12 col-sm-6 wizard">

											<div class="tasks-field-wrap" id="q6">	
												Инвестирование Это мое хобби
											</div>

										</div>
									</div>
								</div>
								<div class="tasks-field-container">
									<div class="row">

										<div class="col-xs-12 col-sm-6 wizard">

											<div class="tasks-field-wrap" id="q7">	
												Сохранение капитала

											</div>

										</div>
										<div class="col-xs-12 col-sm-6 wizard">

											<div class="tasks-field-wrap" id="q8">	
												Заработать как можно больше

											</div>

										</div>
									</div>
									<ul class="pager ">
										<span class="error-task">Пожалуйста, выберите вариант ответа!</span>
										<li class="previous">
											<a class="pager-link">
												<i class="fa fa-arrow-left"></i>
												Назад

											</a>
										</li>
										
									</ul>
								</div>
							</div>
						</div>
						<div class="tab-pane" id="tab3">
							<div class="tasks">
								<p class="tasks-number">
									Вопрос №3
								</p>
								<h2 class="tasks-title">Сколько времени вы планируете уделять на инвестирование?
								</h2>
								<div class="tasks-field-container">
									<div class="row">

										<div class="col-xs-12 col-sm-6 wizard">

											<div class="tasks-field-wrap dif" id="q9">	
												Один день в неделю
											</div>

										</div>
										<div class="col-xs-12 col-sm-6 wizard">

											<div class="tasks-field-wrap" id="q10">	
												Час каждый день
											</div>

										</div>
									</div>
								</div>
								<div class="tasks-field-container">
									<div class="row">

										<div class="col-xs-12 col-sm-6 wizard">

											<div class="tasks-field-wrap" id="q11">	
												Полноценный рабочий день

											</div>

										</div>
										<div class="col-xs-12 col-sm-6 wizard">

											<div class="tasks-field-wrap" id="q12">	
												У меня нет свободного времени
											</div>

										</div>
									</div>
									<ul class="pager ">
										<span class="error-task">Пожалуйста, выберите вариант ответа!</span>
										<li class="previous">
											<a class="pager-link">
												<i class="fa fa-arrow-left"></i>
												Назад

											</a>
										</li>
								<!-- 	<li class="next"><a class="pager-link">Следующий 
										<i class="fa fa-arrow-right"></i>
									</a>
								</li> -->
							</ul>
						</div>
					</div>
				</div>
				<div class="tab-pane" id="tab4">
					<div class="tasks">
						<p class="tasks-number">
							Вопрос №4
						</p>
						<h2 class="tasks-title">За какой период вы хотите окупить свои инвестиции?
						</h2>
						<div class="tasks-field-container">
							<div class="row">

								<div class="col-xs-12 col-sm-6 wizard">
									
									<div class="tasks-field-wrap" id="q13">	
										Через 1 месяц
									</div>

								</div>
								<div class="col-xs-12 col-sm-6 wizard">

									<div class="tasks-field-wrap dif" id="q14">	
										Через 3 месяца
									</div>

								</div>
							</div>
						</div>
						<div class="tasks-field-container">
							<div class="row">

								<div class="col-xs-12 col-sm-6 wizard">

									<div class="tasks-field-wrap dif" id="q15">	
										Через 6 месяцев
									</div>

								</div>
								<div class="col-xs-12 col-sm-6 wizard">

									<div class="tasks-field-wrap" id="q16">	
										После 1 года

									</div>

								</div>
							</div>
							<ul class="pager ">
								<span class="error-task">Пожалуйста, выберите вариант ответа!</span>
								<li class="previous">
									<a class="pager-link">
										<i class="fa fa-arrow-left"></i>
										Назад

									</a>
								</li>
								<!-- <li class="next"><a class="pager-link">Следующий 
									<i class="fa fa-arrow-right"></i>
								</a>
							</li> -->
						</ul>
					</div>
				</div>
			</div>
			<div class="tab-pane" id="tab5">
				<div class="tasks">
					<p class="tasks-number">
						Вопрос №5
					</p>
					<h2 class="tasks-title">Как вы принимаете инвестиционные решения?
					</h2>
					<div class="tasks-field-container">
						<div class="row">

							<div class="col-xs-12 col-sm-6 wizard">
								
								<div class="tasks-field-wrap" id="q17">	
									Максимум информации и анализа
								</div>

							</div>
							<div class="col-xs-12 col-sm-6 wizard">

								<div class="tasks-field-wrap" id="q18">	
									Посоветуюсь с экспертами
								</div>

							</div>
						</div>
					</div>
					<div class="tasks-field-container">
						<div class="row">

							<div class="col-xs-12 col-sm-6 wizard">

								<div class="tasks-field-wrap" id="q19">	
									У меня есть своё чёткое мнение
								</div>

							</div>
							<div class="col-xs-12 col-sm-6 wizard">

								<div class="tasks-field-wrap" id="q20">	
									Я склонен к спонтанным решениям
								</div>

							</div>
						</div>
						<ul class="pager ">
							<span class="error-task">Пожалуйста, выберите вариант ответа!</span>
							<li class="previous">
								<a class="pager-link">
									<i class="fa fa-arrow-left"></i>
									Назад

								</a>
							</li>
							<!-- <li class="next"><a class="pager-link">Следующий 
								<i class="fa fa-arrow-right"></i>
							</a>
						</li> -->
					</ul>
				</div>
			</div>
		</div>
		<div class="tab-pane" id="tab6">
			<div class="tasks">
				<p class="tasks-number">
					Вопрос №6
				</p>
				<h2 class="tasks-title">При любых инвестициях бывают взлеты и падения стоимости активов. Что вы об этом думаете?
				</h2>
				<div class="tasks-field-container">
					<div class="row">

						<div class="col-xs-12 col-sm-6 wizard">
							
							<div class="tasks-field-wrap" id="q21">	
								Это меня останавливает, когда я думаю об инвестициях
							</div>
							
						</div>
						<div class="col-xs-12 col-sm-6 wizard">

							<div class="tasks-field-wrap" id="q22">	
								Меня это беспокоит, но я понимаю, что такое финансовый рынок
							</div>

						</div>
					</div>
				</div>
				<div class="tasks-field-container">
					<div class="row">

						<div class="col-xs-12 col-sm-6 wizard">

							<div class="tasks-field-wrap dif" id="q23">	
								Так устроен рынок, я не нервничаю
							</div>

						</div>
						<div class="col-xs-12 col-sm-6 wizard">

							<div class="tasks-field-wrap" id="q24">	
								Так устроен рынок, я не нервничаю

							</div>

						</div>
					</div>
					<ul class="pager ">
						<span class="error-task">Пожалуйста, выберите вариант ответа!</span>
						<li class="previous">
							<a class="pager-link">
								<i class="fa fa-arrow-left"></i>
								Назад

							</a>
						</li>
						<!-- <li class="next"><a class="pager-link">Следующий 
							<i class="fa fa-arrow-right"></i>
						</a>
					</li> -->
				</ul>
			</div>
		</div>
	</div>
	<div class="tab-pane" id="tab7">
		<div class="tasks">
			<p class="tasks-number">
				Вопрос №7
			</p>
			<h2 class="tasks-title">Какой размер дохода вы ожидаете от своих инвестиций?
			</h2>
			<div class="tasks-field-container">
				<div class="row">

					<div class="col-xs-12 col-sm-6 wizard">
						
						<div class="tasks-field-wrap dif" id="q25">	
							От 5-7% в месяц
						</div>
						
					</div>
					<div class="col-xs-12 col-sm-6 wizard">

						<div class="tasks-field-wrap dif" id="q26">	
							От 10-20% в месяц
						</div>

					</div>
				</div>
			</div>
			<div class="tasks-field-container">
				<div class="row">

					<div class="col-xs-12 col-sm-6 wizard">

						<div class="tasks-field-wrap" id="q27">	
							До 40% в месяц
						</div>

					</div>
					<div class="col-xs-12 col-sm-6 wizard">

						<div class="tasks-field-wrap" id="q28">	
							Более 100% годовых
						</div>

					</div>
				</div>
				<ul class="pager ">
					<span class="error-task">Пожалуйста, выберите вариант ответа!</span>
					<li class="previous">
						<a class="pager-link">
							<i class="fa fa-arrow-left"></i>
							Назад

						</a>
					</li>
					<!-- <li class="next"><a class="pager-link">Следующий 
						<i class="fa fa-arrow-right"></i>
					</a>
				</li> -->
			</ul>
		</div>
	</div>
</div>
<div class="tab-pane" id="tab8">
	<div class="tasks">
		<p class="tasks-number">
			Вопрос №8
		</p>
		<h2 class="tasks-title">Мировой финансовый рынок имеет особенность расти и снижаться. Что вы будете делать, если стоимость вашего инвестиционного портфеля снизится на 10%? 
		</h2>
		<div class="tasks-field-container">
			<div class="row">

				<div class="col-xs-12 col-sm-6 wizard">
					
					<div class="tasks-field-wrap" id="q29">	
						Продам всё и положу на депозит
					</div>
					
				</div>
				<div class="col-xs-12 col-sm-6 wizard">

					<div class="tasks-field-wrap" id="q30">	
						Ничего не буду менять
					</div>

				</div>
			</div>
		</div>
		<div class="tasks-field-container">
			<div class="row">

				<div class="col-xs-12 col-sm-6 wizard">

					<div class="tasks-field-wrap" id="q31">	
						Продам часть портфеля
					</div>

				</div>
				<div class="col-xs-12 col-sm-6 wizard">

					<div class="tasks-field-wrap" id="q32">	
						Докуплю ещё
					</div>

				</div>
			</div>
			<ul class="pager ">
				<span class="error-task">Пожалуйста, выберите вариант ответа!</span>
				<li class="previous">
					<a class="pager-link">
						<i class="fa fa-arrow-left"></i>
						Назад

					</a>
				</li>
				<!-- <li class="next"><a class="pager-link">Следующий 
					<i class="fa fa-arrow-right"></i>
				</a>
			</li> -->
		</ul>
	</div>
</div>
</div>
<div class="tab-pane" id="tab9">
	<div class="tasks">
		<p class="tasks-number">
			Вопрос №9
		</p>
		<h2 class="tasks-title">Готовы ли вы рисковать при инвестировании?
		</h2>
		<div class="tasks-field-container">
			<div class="row">

				<div class="col-xs-12 col-sm-6 wizard">
					
					<div class="tasks-field-wrap" id="q33">	
						Никаких рисков вообще
					</div>
					
				</div>
				<div class="col-xs-12 col-sm-6 wizard">

					<div class="tasks-field-wrap" id="q34">	
						Незначительные риски
					</div>

				</div>
			</div>
		</div>
		<div class="tasks-field-container">
			<div class="row">

				<div class="col-xs-12 col-sm-6 wizard">
					
					<div class="tasks-field-wrap" id="q35">	
						Анализируемые риски
					</div>
					
				</div>
				<div class="col-xs-12 col-sm-6 wizard">

					<div class="tasks-field-wrap" id="q36">	
						Любые риски, чтобы заработать больше
					</div>

				</div>
			</div>
		</div>
		<div class="tasks-field-container">

			<ul class="pager ">
				<span class="error-task">Пожалуйста, выберите вариант ответа!</span>
				<li class="previous">
					<a class="pager-link">
						<i class="fa fa-arrow-left"></i>
						Назад
					</a>
				</li>
			</ul>
		</div>
	</div>
	<!--///////////////////////////////////-->
	
</div>

<div class="tab-pane" id="tab10">
	<div class="tasks">
		<p class="tasks-number">
			Вопрос №10
		</p>
		<h2 class="tasks-title">Готовы ли вы рисковать при инвестировании?
		</h2>
		<div class="tasks-field-container">
			<div class="row">

				<div class="col-xs-12 col-sm-6 wizard">
					
					<div class="tasks-field-wrap" id="q37">	
						Никаких рисков вообще
					</div>
					
				</div>
				<div class="col-xs-12 col-sm-6 wizard">

					<div class="tasks-field-wrap" id="q38">	
						Незначительные риски
					</div>

				</div>
			</div>
		</div>			
		</div>
		
		<div class="tasks-field-container">

			<ul class="pager ">
				<span class="error-task">Пожалуйста, выберите вариант ответа!</span>
				<li class="previous">
					<a class="pager-link">
						<i class="fa fa-arrow-left"></i>
						Назад
					</a>
				</li>
			</ul>
		</div>
	</div>



</div>


<div class="tab-pane" id="tab11">
	<div class="tasks">
		
		<h2 class="tasks-title">Введите свои учетные данные, чтобы мы могли отправить вам результаты по электронной почте.
		</h2>

		
		
		<div class="tasks-field-container">

			<div class="result-item-wrap">

			</div>
            <?= Html::beginForm('', 'post', ['class'=>'first_form','enctype' => 'multipart/form-data','id'=>'first_form', 'data-form'=>'getClient']) ?>
			
				<div class="row">
					<div class="col-xs-12 col-sm-6">
						<input name="name" class="form-field" type="text" id="name" placeholder="Ваше имя">
					</div>
					<div class="col-xs-12 col-sm-6 phone">

						<input name="phone" class="form-field" type="text" id="phone"  placeholder="Номер телефона" >
					</div>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<input name="email" class="form-field" type="email" id="email" placeholder="Ваш email">
					</div>
				</div>
				<?= Html::submitButton('получить результаты', ['class' => 'form-button']) ?>
				<?= Html::endForm() ?>
				<div class="result-lock">Мы гарантируем безопасность введенной вами информации</div>
				


			</div>

		</div>
	</div>
</div>

</div>

</div>

</div>


<footer class="footer">
	<div class="container">

		<div class="footer-security">
			<p class="footer-bold">Тест инвестора</p>
			<p>Все права защищены</p>
		</div>
		
		
		<div class="footer-copy">

			
			<p>&copy;nvestor-test.com  2022</p>
			
		</div>

		<div class="footer-policy">
			<p>Мы не передаем Ваши данные третьим лицам</p>
			
			<p ><a href="index.html#policy" class="footer__policy-link">Политика конфиденциальности</a></p>
		</div>

	</div>
</footer>

</main>


<div class="policy">
	<div class="policy-in">
		<div class="policy-header">
			<a href="index.html#" class="close-link-policy">x</a>
			<h3 class="policy-title">
				Политика конфиденциальности
			</h3>
			<p>nvestor-test.com</p>
		</div>
		<div class="policy-content">


			<p class="policy-text">
				Ваша конфиденциальность очень важна для нас. Мы хотим, чтобы Ваша работа в Интернет по возможности была максимально приятной и полезной, и Вы совершенно спокойно использовали широчайший спектр информации, инструментов и возможностей, которые предлагает Интернет.
			</p>
			<p class="policy-text">
				Мы создали Политику конфиденциальности, чтобы продемонстрировать свою верность принципам конфиденциальности и безопасности. В Политике конфиденциальности описано, как компания investor-test.top» (далее по тексту «Компания» или «наша Компания») собирает информацию ото всех конечных пользователей своих Интернет-услуг (далее по тексту «Услуг»), включая людей, имеющих доступ к некоторым нашим услугам без регистрационной записи (далее по тексту «Гостей»), а также клиентов, которые купили Продукты и/или вносят ежемесячную оплату за услуги, чтобы подписаться на Услугу (далее по тексту «Члены»). Политика также включает объяснение о том, что мы делаем с собранной информацией, и какие возможности по сбору и использованию такой информации есть у Гостей и Членов. Мы просим Вас тщательно ознакомиться с Политикой конфиденциальности.
			</p>
			<h2 class="policy-content-title">
				Личная информация, которую собирает наша компания, и пути ее использования
			</h2>
			<h3 class="policy-content-subtitle">
				Введение
			</h3>
			<p class="policy-text">
				Компания может попросить предоставить определенную личную информацию при подписке на наши Продукты или Услуги, в частности, имя, адрес, номер телефона, информацию для выставления счетов (например, номер кредитной карточки (конечно, без указания срока годности карты и защитного кода)) и тип персонального компьютера и название установленной на нём операционной системы, которые будут использоваться для доступа к Услугам. Личная информация Членов, собранная при регистрации (или в любое другое время) преимущественно используется для подготовки Продуктов или Услуг в соответствии с Вашими потребностями. Ваша информация не будет передана или продана третьим сторонам. Однако мы можем частично раскрывать личную информацию в особых случаях, описанных в нижеприведенном разделе «Разглашение».
			</p>
			<h3 class="policy-content-subtitle">
				Разглашение
			</h3>
			<p class="policy-text">
				Мы оставляем за собой право раскрывать информацию Членов и Гостей следующим третьим сторонам в следующих ситуациях:
			</p>
			<p class="policy-text">
				Компаниям, работающим от нашего лица: Мы сотрудничаем с другими компаниями, выполняющими от нашего лица функции бизнес поддержки, в связи с чем Ваша личная информация может быть частично раскрыта. Мы требуем, чтобы такие компании использовали информацию только в целях предоставления услуг по договору; им запрещается передавать данную информацию другим сторонам в ситуациях, отличных от случаев, когда это вызвано необходимостью предоставления оговоренных услуг. Примеры функций бизнес поддержки: выполнение заказов, реализация заявок, выдача и доставка призов и бонусов, проведение опросов среди клиентов и управление информационными системами. Мы также раскрываем обобщенную неперсонифицированную информацию при выборе поставщиков услуг. <br>
				Дочерним и совместным предприятиям: Под дочерним или совместным предприятием понимается организация, не менее 50% долевого участия которой принадлежит Компании. При передаче Вашей информации партнеру по дочернему или совместному предприятию наша Компания требует не разглашать данную информацию другим сторонам в маркетинговых целях и не использовать Вашу информацию каким-либо путем, противоречащим Вашему выбору. Если Вы указали, что не хотите получать от нашей Компании какие-либо маркетинговые материалы, то мы не будем передавать Вашу информацию своим партнерам по дочерним и совместным предприятиям для маркетинговых целей.
				На совместно позиционируемых или партнерских страницах: Наша Компания может делиться информацией с компаниями-партнерами, вместе с которыми реализует специальные предложения и мероприятия по продвижению услуги (или товара) на совместно позиционируемых страницах нашего сайта. При запросе анкетных данных на таких страницах Вы получите предупреждение о передаче информации. Партнер использует любую предоставленную Вами информацию согласно собственному положению о конфиденциальности, с которым Вы можете ознакомиться на сайте соответствующего партнера перед предоставлением информации о себе. <br>
				При передаче контроля над предприятием: Наша Компания оставляет за собой право передавать Ваши анкетные данные в связи с полной или частичной продажей или трансфертом нашего предприятия или его активов. При продаже или трансферте бизнеса наша Компания предоставит Вам возможность отказаться от передачи информации о себе. В некоторых случаях это может означать, что новая организация не сможет далее предоставлять Вам услуги или продукты, ранее предоставляемые нашей Компанией.
				Правоохранительным органам: Наша Компания может без Вашего на то согласия раскрывать персональную информацию третьим сторонам по любой из следующих причин: во избежание нарушений закона, нормативных правовых актов или постановлений суда; участие в правительственных расследованиях; помощь в предотвращении мошенничества; а также укрепление или защита прав Компании или ее дочерних предприятий. <br>
				С Вашего согласия: Во всех остальных случаях перед передачей информации о Вас третьим сторонам наша Компания обязуется получить Ваше явное согласие. Например, наша Компания может реализовывать совместное предложение или конкурс с третьей стороной, тогда мы попросим у Вас разрешение на совместное использование Вашей личной информации с третьей стороной.
			</p>
			<h3 class="policy-content-subtitle">
				Интернет-покупки
			</h3>
			<p class="policy-text">
				При заказе услуг или продуктов непосредственно в нашей Компании предоставленная Вами персональная информация используется для обработки данного заказа. Мы не передаем эту информацию сторонним организациям за исключением случаев, когда это необходимо для выполнения такого заказа.
			</p>
			<p class="policy-text">
				При подаче заказа через другие компании, которые могут давать ссылки на наш сайт, например, предлагая подарок через Интернет, который напрямую отправляется получателю, Вас могут попросить предоставить информацию о получателе, в частности, имя, адрес и номер телефона. Наша компания никак не контролирует пути использования третьими сторонами персональной информации, предоставленной Вами при размещении таких заказов. Пожалуйста, в таких случаях будьте осторожны.
			</p>
			<p class="policy-text">
				Рекомендуем ознакомиться с Политикой конфиденциальности и Условиями пользования любых других компаний, на чьи веб-сайты можно перейти с нашего сайта
			</p>
			<h3 class="policy-content-subtitle">
				Размещение информации в интернете
			</h3>
			<p class="policy-text">
				Наша компания может размещать информацию в Интернет. В таких случаях мы предоставляем своим исполнителям сгруппированную и неперсонифицированную информацию о своих Гостях и Членах, собранную при регистрации, а также с помощью Интернет-опросов и мероприятий по продвижению.
			</p>
			<p class="policy-text">
				Кроме того, в некоторых случаях мы используем эту сгруппированную и неперсонифицированную информацию для целевого информирования и совместных предприятий. Например, исполнитель или совместное предприятие говорит, до какой аудитории нужно достучаться, и предоставляет соответствующую ей рекомендации. Позднее на основании собранной и сгруппированной неперсонифицированной информации мы размещаем или рассылаем информацию целевой аудитории. Наша компания не раскрывает таким подрядчикам или совместным предприятиям персональную информацию о своих Гостях и Членах. Информация о том, как отказаться от Интернет-информирования нашей Компании, включается непосредственно в информационные материалы.
			</p>
			<h3 class="policy-content-subtitle">
				Ответы на электронные запросы
			</h3>
			<p class="policy-text">
				Когда Гости или Члены отправляют нашей компании электронные запросы, для ответа на них используется электронный адрес, с которого пришел запрос. Наша компания не использует обратные адреса в каких-либо других целях и не передает их каким-либо третьим сторонам.
			</p>
			<h3 class="policy-content-subtitle">
				Добровольные опросы клиентов
			</h3>
			<p class="policy-text">
				Мы периодически проводим как коммерческие, так и частные опросы среди пользователей. Мы рекомендуем своим клиентам участвовать в этих опросах, поскольку они дают нам важную информацию, с помощью которой мы можем улучшить различные свои продукты и услуги, а также усовершенствовать пути их предоставления. Ваша личная информация и ответы останутся строго конфиденциальными даже при проведении опроса третьей стороной. Участие в наших клиентских опросах необязательно. Информация о том, как отказаться от участия в опросе, включается в сообщения об опросах.
			</p>
			<p class="policy-text">
				Мы можем взять информацию, полученную от отдельных лиц, участвующих в наших клиентских опросах и объединить (сгруппировать) с ответами других наших клиентов для создания более широких и обобщенных ответов на вопросы опроса (в частности, пол, возраст, местожительства, увлечения, образование, место работы, сектор промышленности и др. демографическая информация). После этого сгруппированная информация используется для улучшения качества предоставляемых Вам услуг и разработки новых услуг и продуктов. Такая сгруппированная и неперсонифицированная информация может передаваться третьим сторонам.
			</p>
			<h3 class="policy-content-subtitle">
				Автоматический сбор информации
			</h3>
			<p class="policy-text">
				Cookies: Для сбора информации наша Компания может пользоваться маркерами Cookies; это маленькие информационные файлы, которые сохраняются Вашим браузером на жестком диске Вашего компьютера по запросу веб-сайта. Маркеры Cookies нашей Компании не содержат какой-либо персональной информации и преимущественно используются следующим образом:
			</p>
			<ul class="policy-list">
				<li class="policy-text">для отслеживания временной информации. Например, маркеры Cookies позволяют нам отслеживать, какие картинки Вы загружаете и скачиваете;</li>
				<li class="policy-text">чтобы регистрировать Вас в специальных программах. Cookies позволяют нам запоминать Вас при входе в зоны нашего сайта, для которых необходимо быть Членом;</li>
				<li class="policy-text">чтобы запомнить Ваши предпочтения относительно страны и языка;</li>
				<li class="policy-text">чтобы помочь нам понять масштабы своей аудитории и распределение трафика;</li>
				<li class="policy-text">для сбора и записи информации о том, что Вы просмотрели на нашем сайте и что просмотрели в нашем электронном письме;</li>
				<li class="policy-text">для управления и информацией сайта и ее презентации, а также чтобы понять, какие изображения могут отображаться на Вашем компьютере; </li>
				<li class="policy-text">для того, чтобы подавать Вам информацию в соответствии с Вашими интересами.</li>
			</ul>
			<p class="policy-text">
				Веб-маяки: Мы также можем размещать на своем веб-сайте, в Интернет-рекламе с участием третьих сторон и своих электронных письмах небольшие «следящие изображения» или «маяки». Такие маяки применяются вместе с маркерами Cookies для сбора неличной информации об использовании нашего сайта, в том числе, включая время и дату посещения, просмотренные страницы, страницу перехода, тип браузера (например, Internet Explorer, Firefox, Chrome, Opera, Safari), тип операционной системы (например, Windows, Linux или MacOS), а также имя домена провайдера Интернет-услуг посетителя (например, AOL, УкрТелеком или других). Мы собираем такую информацию о посещениях сайта тысячами и анализируем в целом. Данная информация важна, в частности, для определения эффективности нашей Интернент-рекламы, например, баннеров и выбора места для будущей рекламы на других веб-ресурсах.
			</p>
			<p class="policy-text">
				Отключение Cookies и маяков: Если сбор такой информации через маркеры Cookies и маяки Вам неприятен, рекомендуем отключить эти функции в настройках своего браузера, но, пожалуйста, помните, что это ограничит эффективность и функциональность веб-сайта нашей Компании. О том, как отключить поддержку cookie и маяков, как правило, говорится в инструкции к браузеру.
			</p>
			<h3 class="policy-content-subtitle">
				Информационная защита детей
			</h3>
			<p class="policy-text">
				Защита детей от Интернет-информации особенно важна, дети младше 13 лет находятся под защитой специального закона. По этой причине наша Компания намеренно не позволяет детям до 13 лет становиться зарегистрированными членами наших сайтов или приобретать товары и услуги на наших сайтах без подтвержденного разрешения от родителей. Наша компания намеренно не собирает и не запрашивает личную информацию у детей до 13 лет без явного на то согласия их родителей.
			</p>
			<p class="policy-text">
				Если мы когда-либо включим детей до 13 лет в число целевой аудитории нашего сайта, то эти специальные страницы будут выделены отдельно и будут содержать развернутое уведомление о конфиденциальности, в соответствии с положениями Акта о защите частной жизни ребенка в Интернете (COPPA); мы также обеспечим механизмы получения разрешения родителей, их доступ к информации и дадим родителям возможность требовать удаления личной информации своих детей.
			</p>
			<p class="policy-text">
				Наша Компания приветствует родителей и попечителей, которые проводят время в сети вместе со своими детьми и принимают участие в их интерактивных занятиях и увлечениях.
			</p>
			<h3 class="policy-content-subtitle">
				Общественные форумы
			</h3>
			<p class="policy-text">
				Определенная часть нашего сайта может давать доступ к общественным услугам, в частности, доскам обсуждения, онлайн-конференциям, чатам, комментариям в различных социальных сетях и мероприятиям в режиме реального времени. Пользуясь такими услугами, пожалуйста, будьте осторожны, когда публикуете информацию о себе. Учтите, что личная информация, раскрытая на таких сайтах, например, Ваше имя, имя пользователя, адрес электронной почты и т.п., может собираться и использоваться для несанкционированных рассылок. Такие услуги открыты для общественного пользования, и то, что Вы публикуете там, может просматривать любой – информация незащищена. Мы не в состоянии контролировать комментарии, которые Вы можете получить, участвуя в таких услугах. Комментарии других людей могут показаться Вам оскорбительными, опасными или некорректными.
			</p>
			<h3 class="policy-content-subtitle">
				Приверженность нашей компании принципам конфиденциальности
			</h3>
			<p class="policy-text">
				Для защиты Вашей личной информации мы используем разнообразные административные, управленческие и технические меры безопасности. Наша Компания придерживается различных международных стандартов контроля, направленных на операции с личной информацией, которые включают определенные меры контроля по защите информации, собранной в Интернет. Наших сотрудников обучают понимать и выполнять эти меры контроля, они ознакомлены с нашим Уведомлением о конфиденциальности, нормами и инструкциями. Тем не менее, несмотря на то, что мы стремимся обезопасить Вашу личную информацию, Вы тоже должны принимать меры, чтобы защитить ее. Мы настоятельно рекомендуем Вам принимать все возможные меры предосторожности во время пребывания в Интернете.
			</p>
			<p class="policy-text">
				Организованные нами услуги и веб-сайты предусматривают меры по защите от утечки, несанкционированного использования и изменения информации, которую мы контролируем. Несмотря на то, что мы делаем все возможное, чтобы обеспечить целостность и безопасность своей сети и систем, мы не можем гарантировать, что наши меры безопасности предотвратят незаконный доступ к этой информации хакеров сторонних организаций.
			</p>
			<h3 class="policy-content-subtitle">
				Куда направлять вопросы о нашей Политике конфиденциальности
			</h3>
			<p class="policy-text">
				Если у Вас возникли вопросы относительно данной Политики конфиденциальности или описанных выше практических методик, с нами можно связаться с помощью контактной информации нашего сайта.
			</p>
			<h3 class="policy-content-subtitle">
				Изменения настоящей Политики
			</h3>
			<p class="policy-text">
				Наша Компания оставляет за собой право в любое время и любым образом редактировать, дополнять или изменять настоящую политику, Правила пользования и Договор об оказании услуг, а также другие политики и договоры нашей Компании, обновив при этом настоящую страницу.
			</p>
			<button class="policy-close" type="button">закрыть</button>
		</div>
	</div>
</div>
<input type="hidden" id="stage" value="1">


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/3.3.4/jquery.inputmask.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.18.0/jquery.validate.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap-wizard/1.2/jquery.bootstrap.wizard.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>

<script src="js/intlTelInput1.js"></script>

<script src="js/main43.js"></script>
<script src="js/form53.js@v1"></script>



</body>