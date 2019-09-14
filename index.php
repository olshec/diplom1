<?php
session_start();

use Gregwar\Captcha\CaptchaBuilder;

require './vendor/autoload.php';

$captcha = new CaptchaBuilder;
$captcha->build();

$_SESSION['captcha_code'] = $captcha->getPhrase();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="Cache-Control" content="no-store" />

  <title>Landing &mdash; Free One Page Bootstrap 4 Template by uicookies.com</title>
  <meta name="description" content="Free Bootstrap 4 Template by uicookies.com">
  <meta name="keywords"
    content="Помощь диплом, Писать диплом, Диплом тема, Заказать диплом, Диплом заказ, Написать диплом, Заказать написание диплома, Купить диплом, Диплом по программированию">

  <link href="https://fonts.googleapis.com/css?family=Crimson+Text:500,500i,600|Montserrat:200,300,500"
    rel="stylesheet">

  <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.css">
  <link rel="stylesheet" href="assets/fonts/ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="assets/fonts/law-icons/font/flaticon.css">

  <link rel="stylesheet" href="assets/fonts/fontawesome/css/font-awesome.min.css">


  <link rel="stylesheet" href="assets/css/slick.css">
  <link rel="stylesheet" href="assets/css/slick-theme.css">

  <link rel="stylesheet" href="assets/css/helpers.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/landing-2.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script type="text/javascript" src="js/bootstrap-filestyle.min.js"> </script>
</head>

<body data-spy="scroll" data-target="#pb-navbar" data-offset="200">

  <nav class="navbar navbar-expand-lg navbar-dark pb_navbar pb_scrolled-light" id="pb-navbar">
    <div class="container">
<!--       <a class="navbar-brand" href="index.php">Диплом</a> -->
      <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#probootstrap-navbar"
        aria-controls="probootstrap-navbar" aria-expanded="false" aria-label="Toggle navigation">
        <span><i class="ion-navicon"></i></span>
      </button>
      <div class="collapse navbar-collapse" id="probootstrap-navbar">
        <ul class="navbar-nav ml-auto">
          
          <li class="nav-item"><a class="nav-link" href="#section-features">Наши преимущества</a></li>
          <li class="nav-item"><a class="nav-link" href="#section-portfolio">Портфолио</a></li>
          <li class="nav-item"><a class="nav-link" href="#section-pricing">Цены</a></li>
          <li class="nav-item"><a class="nav-link" href="#section-reviews">Отзывы</a></li>
          <li class="nav-item"><a class="nav-link" href="#section-faq">Вопросы и ответы</a></li>
          <li class="nav-item cta-btn ml-xl-2 ml-lg-2 ml-md-0 ml-sm-0 ml-0"><a class="nav-link"
              href="#section-home"><span class="pb_rounded-4 px-4">Заказать</span></a></li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- END nav -->
  
<!-- pb_cover_v3 overflow-hidden cover-bg-indigo cover-bg-opacity text-left pb_gradient_v1 pb_slant-light -->

<!-- pb_xl_py_cover overflow-hidden pb_slant-light pb_gradient_v1 cover-bg-opacity-8 -->
  <section class="pb_cover_v4 overflow-hidden cover-bg-indigo cover-bg-opacity text-left pb_gradient_v1 pb_slant-light"
    id="section-home">
    <div class="container">
      <!-- <br> <br> <br>--> 
      <div class="row align-items-center justify-content-center">
        <div class="col-md-6">
          <h2 class="heading mb-3" style="font-size: 3em;">Заказать дипломную работу</h2>
          <div class="sub-heading">
            <p class="mb-4">Выполнение дипломных работ по программированию, информатике, автоматизированным системам и базам данных.
             <!-- Примеры наших работ вы можете посмотреть на <a href="https://github.com/diplom-website?tab=repositories" target="_blank" style="color: rgb(204, 255, 204); text-decoration: underline;">гитхабе</a>. -->
            </p>
            <p class="mb-5">
            <a class="btn btn-success btn-lg pb_btn-pill smoothscroll" href="#section-pricing"><span
                  class="pb_font-14 text-uppercase pb_letter-spacing-1">Посмотреть цены</span></a>
            </p>
          </div>
        </div>
        <div class="col-md-1">
        </div>
        <div class="col-md-5 relative align-self-center " style="display: block">
        <br> <br> <br> <br>
          <form action="action.php" class="bg-white rounded pb_form_v1" method="post" enctype="multipart/form-data">
            <h3 class="mb-4 mt-0 text-center">Заказать работу</h3>

            <div class="form-group">
              <input type="email" class="form-control pb_height-50 reverse" placeholder="Email" name="email"
              required=""  oninvalid="this.setCustomValidity('Пожалуйста введите email')" oninput="setCustomValidity('')">
            </div>

			<div class="form-group">
              <input type="text" class="form-control pb_height-50 reverse" placeholder="Тема работы" name="work_theme"
              required=""  oninvalid="this.setCustomValidity('Пожалуйста введите тему работы')" oninput="setCustomValidity('')">
            </div>
            
<!--             <div class="form-group"> -->
<!--                 <div class="pb_select-wrap"> -->
<!--                   <select class="form-control pb_height-50 reverse" name="typeSelect" > -->
<!--                     <option value="" selected>Тип работы</option> -->
<!--                     <option value="bachelor">Бакалавр</option> -->
<!--                     <option value="master">Магистратура</option> -->
<!--                   </select> -->
<!--                 </div> -->
<!--               </div> -->

            <div class="form-group">
                <textarea class="form-control pb_height-120 reverse" placeholder="Краткое описание" name="message"
                value="Краткое описание" ></textarea>
              <!-- <input type="text" class="form-control pb_height-50 reverse" placeholder="Краткое описание"> -->
            </div>



     
            <div class="form-group">
              <input type="text" class="form-control pb_height-50 reverse" name="captcha_code" placeholder="Введите код на рисунке" 
               required=""   oninvalid="this.setCustomValidity('Пожалуйста введите код')" oninput="setCustomValidity('')">
            </div>
            <div class="form-group">
              <img src="<?php echo $captcha->inline(); ?>" />
            </div>


            <div class="form-group">
              <input type="submit" class="btn btn-primary btn-lg btn-block pb_btn-pill  btn-shadow-blue"
                value="Отправить">
            </div>
          </form>

        </div>
      </div>
    </div>
  </section>
  <!-- END section -->

  <section class="pb_section bg-light pb_slant-white pb_pb-220" id="section-features">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-md-6 text-center mb-5">
          <h5 class="text-uppercase pb_font-15 mb-2 pb_color-dark-opacity-3 pb_letter-spacing-2">
            <strong>Преимущества</strong></h5>
          <h2>Наши преимущества</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md- col-sm-6">
          <div class="media d-block pb_feature-v1 text-left">
            <div class="pb_icon"><i class="ion-ios-bookmarks-outline pb_icon-gradient"></i></div>
            <div class="media-body">
              <h5 class="mt-0 mb-3 heading">Современный дизайн</h5>
              <p class="text-sans-serif">Приложения разрабатываются с применение современных средств разработки.</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md- col-sm-6">
          <div class="media d-block pb_feature-v1 text-left">
            <div class="pb_icon"><i class="ion-ios-speedometer-outline pb_icon-gradient"></i></div>
            <div class="media-body">
              <h5 class="mt-0 mb-3 heading">Выполнение без задержек</h5>
              <p class="text-sans-serif">Работы выполняются в приватных репозиториях на гитхабе, поэтому вы можете каждый день контролировать ход выполнения работы.</p>
            </div>
          </div>
        </div>


        
        <div class="col-lg-4 col-md- col-sm-6">
          <div class="media d-block pb_feature-v1 text-left">
            <div class="pb_icon"><i class="ion-ios-paperplane-outline pb_icon-gradient"></i></div>
            <div class="media-body">
              <h5 class="mt-0 mb-3 heading">Простой и понятный код</h5>
              <p class="text-sans-serif">В нашем коде разберется даже новичок.</p>
            </div>
          </div>
        </div>
        
        
      </div>
    </div>
  </section>
  <!-- END section -->

  <section class="pb_section pb_slant-light" id="section-portfolio">
    <div class="container">
      <div class="row">
<!--         <div class="col-lg-4 mb-5"> -->
<!--           <img src="assets/images/phone_3.png" alt="Image placeholder" class="img-fluid"> -->
<!--         </div> -->
        <div class="col-lg-12 pl-md-5 pl-sm-0">
          <div class="row">
            <div class="col">
              <h2>Портфолио</h2>
              <p class="pb_font-20">
				Примеры выполнения типовых проектов вы можете посмотреть на <a href="https://github.com/diplom-website?tab=repositories" target="_blank">гитхабе</a>.
			    Эти приложения являются демонстрационным примером выполнения типовых заданий, работы клиентов мы никогда не показываем.
			  </p>
            </div>
          </div>
          <div class="row">
            <div class="col-lg">

              <div class="media pb_feature-v2 text-left mb-1 mt-5">
<!--                 <div class="pb_icon d-flex mr-3 align-self-start pb_w-15"><i -->
<!--                     class="ion-ios-bookmarks-outline pb_icon-gradient"></i></div> -->
                <div class="media-body">
                  <h3 class="mt-2 mb-2 heading">PHP</h3>
                  <p class="text-sans-serif pb_font-16">Информационная система складского учета в магазин компьютерной техники. Стек: PHP, YII, MariaDB.</p>
                </div>
              </div>

              <div class="media pb_feature-v2 text-left mb-1 mt-5">
<!--                 <div class="pb_icon d-flex mr-3 align-self-start pb_w-15"><i -->
<!--                     class="ion-ios-infinite-outline pb_icon-gradient"></i></div> -->
                <div class="media-body">
                  <h3 class="mt-2 mb-2 heading">C++</h3>
                  <p class="text-sans-serif pb_font-16">Поиск простых чисел Вольстенхольма, 
								Вифериха и поиск суперпростых чисел на бесконечном множестве чисел.
								Для решения данных задач была использована библиотека GMP. </p>
                </div>
              </div>

            </div>
            <div class="col-lg">

              <div class="media pb_feature-v2 text-left mb-1 mt-5">
<!--                 <div class="pb_icon d-flex mr-3 align-self-start pb_w-15"><i -->
<!--                     class="ion-ios-speedometer-outline pb_icon-gradient"></i></div> -->
                <div class="media-body">
                  <h3 class="mt-2 mb-2 heading">C#</h3>
                  <p class="text-sans-serif pb_font-16">Система учета аренды объектов недвижимости. Стек: C#, Windows Forms, MySQL.</p>
                </div>
              </div>

              <div class="media pb_feature-v2 text-left mb-1 mt-5">
<!--                 <div class="pb_icon d-flex mr-3 align-self-start pb_w-15"><i -->
<!--                     class="ion-ios-color-filter-outline  pb_icon-gradient"></i></div> -->
                <div class="media-body">
                  <h3 class="mt-2 mb-2 heading">PHP</h3>
                  <p class="text-sans-serif pb_font-16">Интернет магазин электроники на OpenCart.</p>
                </div>
              </div>

            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
  <!-- END section -->
  
  


  <section class="pb_section bg-light pb_slant-white pb_pb-220" id="section-pricing">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-md-6 text-center mb-5">
          <h5 class="text-uppercase pb_font-15 mb-2 pb_color-dark-opacity-3 pb_letter-spacing-2">
            <strong>Цены</strong></h5>
          <h2>Выберите тип своей работы</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md">
          <div class="pb_pricing_v1 p-5 border text-center bg-white">
            <h3>Бакалаврская работа</h3>
            <span class="price"><sup>Р</sup>16 000</span>
            <p class="pb_font-15">Бакалаврские работы от 16 000. Точную цену уточняйте.</p>
            <p class="mb-0"><a href="#" role="button" class="btn btn-primary btn-shadow-blue">Заказать</a></p>
          </div>
        </div>
        <div class="col-md">
          <div class="pb_pricing_v1 p-5 border border-primary text-center bg-white">
            <h3>Магистерская диссертация</h3>
            <span class="price"><sup>Р</sup>20 000</span>
            <p class="pb_font-15">Магистерские диссертации от 20 000. Точную цену уточняйте.</p>
            <p class="mb-0"><a href="#" role="button" class="btn btn-primary btn-shadow-blue">Заказать</a></p>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- ENDs ection -->
   
  
  	<section class="pb_section pb_slant-light " id="section-reviews">
		<div class="container">
			<div class="row justify-content-center mb-1">
				<div class="col-md-6 text-center mb-5">
					<h5
						class="text-uppercase pb_font-15 mb-2 pb_color-dark-opacity-3 pb_letter-spacing-2">
						<strong>Отзывы</strong>
					</h5>
					<h2>Отзывы наших клиентов</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md">
					<div class="pb_slide_testimonial_sync_v1">
						<div class="pb_slider_content js-pb_slider_content2">
							<div>
								<div
									class="media d-block text-center testimonial_v1 pb_quote_v2">
									<div class="media-body">
										<div class="quote">&ldquo;</div>
										<blockquote class="mb-5">Заказывал разработать информационную
											систему учета клиентов для автосервиса. Стек: PHP, Laravel,
											MySQL. Сдал на отлично, спасибо!</blockquote>
										<p>
											<i class="ion-ios-star text-warning"></i> <i
												class="ion-ios-star text-warning"></i> <i
												class="ion-ios-star text-warning"></i> <i
												class="ion-ios-star text-warning"></i> <i
												class="ion-ios-star text-warning"></i>
										</p>
										<h3 class="heading">Борис Николаевич</h3>
										<span class="subheading">brsnikol@gmail.com</span>

									</div>
								</div>
							</div>
							<div>
								<div
									class="media d-block text-center testimonial_v1 pb_quote_v2">
									<div class="media-body">
										<div class="quote">&ldquo;</div>
										<blockquote class="mb-5">Разработанная система на 100% устроила моего научного руководителя, даже не потребовались ни какие доработки, все сдано с первого раза!</blockquote>
										<p>
											<i class="ion-ios-star text-warning"></i> <i
												class="ion-ios-star text-warning"></i> <i
												class="ion-ios-star text-warning"></i> <i
												class="ion-ios-star text-warning"></i> <i
												class="ion-ios-star text-warning"></i>
										</p>
										<h3 class="heading">Виктор Александрович</h3>
										<span class="subheading">vikberner@gmail.com</span>
									</div>
								</div>
							</div>
							<div>
								<div
									class="media d-block text-center testimonial_v1 pb_quote_v2">
									<div class="media-body">
										<div class="quote">&ldquo;</div>
										<blockquote class="mb-5">Спасибо за выполнение сложной работы в такой короткий срок!</blockquote>
										<p>
											<i class="ion-ios-star text-warning"></i> <i
												class="ion-ios-star text-warning"></i> <i
												class="ion-ios-star text-warning"></i> <i
												class="ion-ios-star text-warning"></i> <i
												class="ion-ios-star-half text-warning"></i>
										</p>
										<h3 class="heading">Антон Егорьевич</h3>
										<span class="subheading">antonsahmatov1990@gmail.com</span>
									</div>
								</div>
							</div>
							
						</div>

						<div class="row">
							<div class="col-md-6 mx-auto">
								<div class="pb_slider_nav js-pb_slider_nav2">
									<div class="author">
										<img class="img-fluid rounded-circle"
											src="assets/images/person_1.jpg"
											alt="Generic placeholder image">
									</div>
									<div class="author">
										<img class="img-fluid rounded-circle"
											src="assets/images/person_5.jpg"
											alt="Generic placeholder image">
									</div>
									<div class="author">
										<img class="img-fluid rounded-circle"
											src="assets/images/person_2.jpg"
											alt="Generic placeholder image">
									</div>
<!-- 									<div class="author"> -->
<!-- 										<img class="img-fluid rounded-circle" -->
<!-- 											src="assets/images/person_6.jpg" -->
<!-- 											alt="Generic placeholder image"> -->
<!-- 									</div> -->
								</div>
							</div>
						</div>

					</div>
					<!-- END sync_v1 -->
				</div>
			</div>
		</div>
	</section>
	<!-- END section -->
  
  
  <section class="pb_section bg-light pb_slant-light " id="section-faq">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-md-6 text-center mb-5">
          <h5 class="text-uppercase pb_font-15 mb-2 pb_color-dark-opacity-3 pb_letter-spacing-2"><strong>ЧАВО</strong>
          </h5>
          <h2>Часто задаваемые вопросы</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md">
          <div id="pb_faq" class="pb_accordion" data-children=".item">
            <div class="item">
              <a data-toggle="collapse" data-parent="#pb_faq" href="#pb_faq1" aria-expanded="false"
                aria-controls="pb_faq1" class="pb_font-22 py-4">Сколько времени вам поднадобится на выполнение работы?</a>
              <div id="pb_faq1" class="collapse " role="tabpanel">
                <div class="py-3">
                  <p>Сроки написания каждой работы обговариваются индивидуально.</p>
                  <p>Обычно на написание бакалаврской работы требуется от двух до трех недель, магистерской &mdash; от двух до четырех недель.</p>
                </div>
              </div>
            </div>
            <div class="item">
              <a data-toggle="collapse" data-parent="#pb_faq" href="#pb_faq2" aria-expanded="false"
                aria-controls="pb_faq2" class="pb_font-22 py-4">Какие технологии вы используете?</a>
              <div id="pb_faq2" class="collapse" role="tabpanel">
                <div class="py-3">
                  <p>Мы делаем десктопные приложения на C# (Windows Forms, WPF, UWP) и веб-сайты на PHP. Базы данных: PostgreSQL, MySQL, MariaDB, Redis, MS SQL Server. Но можем обсудить и другие технологии.
                  В случае разработки веб-сайта мы можем бесплатно разместить ваш сайт на своем хостинге, подключить домен и почтовый сервер.
                  </p>
                </div>
              </div>
            </div>
            <div class="item">
              <a data-toggle="collapse" data-parent="#pb_faq" href="#pb_faq3" aria-expanded="false"
                aria-controls="pb_faq3" class="pb_font-22 py-4">Смогу ли я заказать доработку в случае необходимости?</a>
              <div id="pb_faq3" class="collapse" role="tabpanel">
                <div class="py-3">
                  <p>Да. Все доработки в рамках задания и мелкие поправки проводятся бесплатно. При необходимости внесения существенных изменений не обговоренных заранее, цена за работу будет пересмотренна.</p>
                </div>
              </div>
            </div>
            <div class="item">
              <a data-toggle="collapse" data-parent="#pb_faq" href="#pb_faq4" aria-expanded="false"
                aria-controls="pb_faq4" class="pb_font-22 py-4">Я получу уникальную работу?</a>
              <div id="pb_faq4" class="collapse" role="tabpanel">
                <div class="py-3">
                  <p>Все наши работы являются оригинальными и пишутся только для одного клиента. Перепродажами работ мы не занимаемся.
                  Уникальность работы составляет не менее 70%, проверяется по системам антиплагиата antiplagiat.ru и etxt.ru. При необходимости мы можем проверить и по другим системам.
                  </p>
                </div>
              </div>
            </div>

            <div class="item">
              <a data-toggle="collapse" data-parent="#pb_faq" href="#pb_faq5" aria-expanded="false"
                aria-controls="pb_faq5" class="pb_font-22 py-4">Какие у меня гарантии?</a>
              <div id="pb_faq5" class="collapse" role="tabpanel">
                <div class="py-3">
                  <p>Оплата может производиться по частям. Работы выполняются в приватных репозиториях на гитхабе, 
                  поэтому вы можете каждый день видеть прогесс написания вашей работы.
                   </p>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>

  
  
  
  
  

	<section
		class="pb_xl_py_cover overflow-hidden pb_slant-light pb_gradient_v1 cover-bg-opacity-8"
		style="background-image: url(assets/images/1900x1200_img_5.jpg)" >
		<div class="container">
			<div class="row align-items-center justify-content-center">
				<div class="col-md-5 justify-content-center">
					<h2 class="heading mb-5 pb_font-40">Мы выполнили более 300
						дипломных проектов</h2>
					<div class="sub-heading">
						<p class="mb-4">
							Примеры выполнения типовых проектов вы можете посмотреть на <a
								href="https://github.com/diplom-website?tab=repositories"
								target="_blank">гитхабе</a>.
							<!--             Эти приложения являются демонстрационным примером выполнения типовых заданий, работы клиентов мы никогда не показываем.</p> -->
					
					</div>
				</div>
				<div class="col-md-1"></div>
				<div class="col-md-5">

				
					<form action="action.php" class="bg-white rounded pb_form_v1"
						method="post" enctype="multipart/form-data">
						<h3 class="mb-4 mt-0 text-center">Заказать работу</h3>

						<div class="form-group">
							<input type="email" class="form-control pb_height-50 reverse"
								placeholder="Email" name="email" required=""
								oninvalid="this.setCustomValidity('Пожалуйста введите email')"
								oninput="setCustomValidity('')">
						</div>
						<div class="form-group">
							<input type="text" class="form-control pb_height-50 reverse"
								placeholder="Тема работы" name="work_theme" required=""
								oninvalid="this.setCustomValidity('Пожалуйста введите тему работы')"
								oninput="setCustomValidity('')">
						</div>


						<div class="form-group">
							<textarea class="form-control pb_height-120 reverse"
								placeholder="Краткое описание" name="message"
								value="Краткое описание"></textarea>
							<!-- <input type="text" class="form-control pb_height-50 reverse" placeholder="Краткое описание"> -->
						</div>




						<div class="form-group">
							<input type="text" class="form-control pb_height-50 reverse"
								name="captcha_code" placeholder="Введите код на рисунке"
								required=""
								oninvalid="this.setCustomValidity('Пожалуйста введите код')"
								oninput="setCustomValidity('')">
						</div>
						<div class="form-group">
							<img src="<?php echo $captcha->inline(); ?>" />
						</div>


						<div class="form-group">
							<input type="submit"
								class="btn btn-primary btn-lg btn-block pb_btn-pill  btn-shadow-blue"
								value="Отправить">
						</div>
					</form>


				</div>
			</div>
		</div>
	</section>
	<!-- END section -->

	<footer class="pb_footer bg-light" role="contentinfo">
		<div class="container">
			<div class="row text-center">
				<div class="col">
					<ul class="list-inline">
						<li class="list-inline-item"><a href="#" class="p-2"><i
								class="fa fa-facebook"></i></a></li>
						<li class="list-inline-item"><a href="#" class="p-2"><i
								class="fa fa-twitter"></i></a></li>
						<li class="list-inline-item"><a href="#" class="p-2"><i
								class="fa fa-linkedin"></i></a></li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col text-center">
					<p class="pb_font-14">
						&copy; 2019. Все права защищены. <br>
					</p>
				</div>
			</div>
		</div>
	</footer>
  

  <!-- loader -->
  <div id="pb_loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
        stroke="#1d82ff" /></svg></div>



  <script src="assets/js/jquery.min.js"></script>

  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/slick.min.js"></script>
  <script src="assets/js/jquery.mb.YTPlayer.min.js"></script>

  <script src="assets/js/jquery.waypoints.min.js"></script>
  <script src="assets/js/jquery.easing.1.3.js"></script>

  <script src="assets/js/main.js"></script>


  <script>

// 	heightFull = 1000;
// 	heightMobile1 = 1300;
// 	heightMobile2 = 1500;
	
//     function setHeight() {
//       if ($(window).width() <= 800) {
//     	  if ($(window).width() <= 376) {
//     	         $("#section-home").css({ "height": heightMobile2 });
//     	        }
//     	  else
//         	$("#section-home").css({ "height": heightMobile1 });
//       }
//       else {
//         $("#section-home").css({ "height": heightFull });
//       }
//     }
    

//     $(document).ready(function () {
//       //console.log( "ready!" );
//       setHeight();

//       $('#inputGroupFile01').inputFileText({
//         text: 'Select File'
//       });

//       $(".pb_slant-light:after").css(
//           "z-index", "-10"
//         );
//         $(".pb_slant-white:after").css(
//           "z-index", "-10"
//         );

//     });

//     $(window).resize(function () {
//       setHeight();
//     });


//     $(function () {
//       //Maps your button click event to the File Upload click event
//       $("#nameFile").click(function () {

//         $("#file1").trigger('click');
//       });


//     })

//     document.getElementById('file1').onchange =
//       function () {
//         $('#nameFile').val(this.value);
//       }

  </script>

</body>

</html>
