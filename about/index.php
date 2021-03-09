<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("О ЦЕНТРЕ");
$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH . '/css/about-us.css');
?>


<nav aria-label="breadcrumb">         <!--main page and active -->
		<ol class="breadcrumb">
		  <li class="breadcrumb-item"><a href="../index.html">Главная</a></li>
		  <li class="breadcrumb-item active" aria-current="page">О центре</li>
		</ol>
</nav>

	<div class="about-us-page">        <!--title of page -->
		<div class="about-us-preview">
			<h1>О центре</h1>       <!--text of title -->
			<div class="about-us-underline"></div>
		</div>

		<div class="about-us-img">
			<img src="<?=SITE_TEMPLATE_PATH?>/material/images/ZooFaculty.jpg" alt="" width="536px" height="320px">        <!--img in cntext -->
		</div>
		<div class="about-us-text">
			<p>       <!--paragraph -->
				Центр компетенций повышения производительности труда, конкурентоспособности и цифровизации производства Кубанского государственного аграрного университета имени И. Т. Трубилина создан 
				с целью проведения научно-исследовательских работ и оказанием методических, образовательных и консультационных услуг в применении современных ресурсосберегающих инструментов управления производством, 
				оптимизации производственных и бизнес-процессов, направленных на повышение производительности труда, конкурентоспособности, автоматизации, роботизации производственных процессов хозяйствующих субъектов.
			</p>
			<p> <!--paragraph -->
				Центр компетенций Кубанского государственного аграрного университета имени И. Т. Трубилина в своей деятельности подчиняется проректору по развитию - И. А. Перонко.
			</p>
			<p> <!--paragraph -->
				Центр является центром компетенций в области производственного менеджмента, используя в работе подходы Lean production, 
				теории ограничений систем, концепции «Шесть Сигм», концепции ТРИЗ (теория решения изобретательских задач).
			</p>
			<p>
				Центр обладает своей совокупностью знаний в области управления и новых технологий в сфере повышения производительности труда,
				сотрудничество с которым откроет новые возможности повышения производительности труда и поддержки занятости в агропромышленном комплексе, что позволит выйти на 
				траекторию устойчивого развития науки и бизнеса Краснодарского Края.
			</p>
		</div>

		<hr>

		<div class="accordion" id="accordionExample">      <!--accordion menu -->
			<div class="card">
			  <div class="card-header" id="headingOne">      <!--info about leader of center -->
				<h2 class="mb-0">
				  <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
					<div class="line-name"> 
						<span class="name"> Руководитель центра</span>       <!--role -->
					</div> 
				  </button>
				</h2>
			  </div>
		  
			  <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
				<div class="card-body">
					<img src="<?=SITE_TEMPLATE_PATH?>/material/images/preview/Center_Leader.png" alt="" width="268px" height="268px" class="leader-img">
					<span class="leader-name">Турлий Светлана Ивановна</span>        <!--leader name -->
					<br>
					<span class="leader-role">Кандидат экономических наук, доцент кафедры экономической кибернетики</span>      <!--leader role in uni -->
				</div>
			  </div>
			</div>
		</div>

		<hr>

		<div class="poloz-about-center">
			<img src="<?=SITE_TEMPLATE_PATH?>/material/icon/svg-Pin.svg" alt="" width="30px" height="30px">
			<span class="poloz-about-center-text">Положение о центре</span>       <!--info about center -->
		</div>

		<hr>

		<div class="poloz-about-center">
			<img src="<?=SITE_TEMPLATE_PATH?>/material/icon/svg-Pin.svg" alt="" width="30px" height="30px">
			<span class="poloz-about-center-text">Приказ</span>
		</div>

		<hr>

		<div class="accordion" id="accordionExample">
			<div class="card">
				<div class="card-header" id="headingFour">
					<h2 class="mb-0">
				 	 <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
						<div class="line-name">
							 <span class="name"> Заголовок </span>       <!--some of document -->
						</div> 
					  </button>
					</h2>
				</div>
		  
			  	<div class="poloz-about-center">
					<img src="<?=SITE_TEMPLATE_PATH?>/material/icon/svg-Pin.svg" alt="" width="30px" height="30px">
					<span class="poloz-about-center-text">2018</span>	  <!--some of document -->
				</div>
				<div class="poloz-about-center">
					<img src="<?=SITE_TEMPLATE_PATH?>/material/icon/svg-Pin.svg" alt="" width="30px" height="30px">
					<span class="poloz-about-center-text">2019</span>  <!--some of document -->
				</div>
				<div class="poloz-about-center">
					<img src="<?=SITE_TEMPLATE_PATH?>/material/icon/svg-Pin.svg" alt="" width="30px" height="30px">
					<span class="poloz-about-center-text">2020</span>  <!--some of document -->
				</div>
			</div>
		</div>

		<hr>


		<div class="accordion" id="accordionExample">  <!--what center do every day -->
			<div class="card">
				<div class="card-header" id="headingTwo">
				<h2 class="mb-0">
					<button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
						<div class="line-name">
							 <span class="name"> Задачи центра </span>   <!--what center do every day -->
						</div> 
					</button>
				</h2>
				</div>
				<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
					<div class="card-body">    <!--all task -->
						<span class="task-center">    <!--task -->
							&#8226;	Продвижение новых технологий в сфере повышения производительности труда и организация обменом опытом (лучшими практиками), 
							включая продвижение современных подходов к повышению производительности труда, обмен опытом в области повышения производительности,
							 подготовка и распространение методических материалов, формирование сети партнеров в Краснодарском крае в сфере повышения производительности труда,
							  конкурентоспособности, автоматизации, роботизации производственных процессов
						</span>
						<span class="task-center">    <!--task -->
							&#8226;	Проведение мастер-классов ведущих экспертов в сфере производительности труда, содействие в организации специализированных тренин- гов/образовательных
							 программ в сфере производительности труда, конкурентоспособности, автоматизации, роботизации производственных процессов в АПК и других отраслях
						</span>
						<span class="task-center">    <!--task -->
							&#8226;	Реализация мероприятий по формированию и применению компетенций по приоритетным отраслевым секторам и ключевым темам (например, «бережливое производство», 
							внедрение элементов цифровой экономики, проектное управление), разработка и реализация портфеля тренин- гов/образовательных программ по ключевым темам повышения
							 производительности труда, конкурентоспособности, автоматизации, роботизации производственных процессов
						</span>
						<span class="task-center">    <!--task -->
							&#8226;	Содействие адаптации хозяйствующим субъектам новым производственным системам «Индустрии 4.0» (шестой технологический уклад)
						</span>
						<span class="task-center">    <!--task -->
							&#8226;	Оказание образовательных услуг в области повышения производительности труда, оптимизации процессов и современных производственных систем руководителям и сотрудникам предприятий и организаций
						</span>
						<span class="task-center">    <!--task -->
							&#8226;	Распространение знаний о повышении производительности труда, конкурентоспособности, автоматизации, роботизации производственных процес сов,
							 оптимизации процессов и современных производственных систем (организация и участие в научно-практических конференциях, публикации научно- практических работ и пр.)
						</span>
						<span class="task-center">    <!--task -->
							&#8226;	Разработка методических материалов в области повышения производительности труда, конкурентоспособности, автоматизации, роботизации производственных 
							процессов, оптимизации процессов и современных производственных систем
						</span>
						<span class="task-center">    <!--task -->
							&#8226;	Аудит и консультирование хозяйствующих субъектов и сопровождение проектов внедрения принципов и инструментов повышения производительности труда, 
							конкурентоспособности, автоматизации, роботизации производственных процессов, оптимизации процессов и современных производственных систем
						</span>
						<span class="task-center">    <!--task -->
							&#8226;	Формирование и подтверждение компетенций (сертификация) систем менеджмента, используя в работе подходы Lean production и TOC
						</span>
					</div>
				</div>
			</div>
		</div>

		<hr>

		<div class="accordion" id="accordionExample">   <!--functions of center -->
			<div class="card">
				<div class="card-header" id="headingThree">  <!--functions of center -->
				<h2 class="mb-0">
					<button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
						<div class="line-name">
							 <span class="name"> Функции центра </span>  <!--functions of center -->
						</div> 
					</button>
				</h2>
				</div>
				<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
					<div class="card-body">
						<span class="function-center">  <!--functions -->
							&#8226;	Разработка системы мониторинга и прогнозирования научнотехнологического развития АПК и инновационной деятельности по повышению производительности труда,
							 организация мероприятий по обмену опытом в области повышения производительности, подготовка информационных, аналитических и прогнозных и методических материалов, 
							 и их распространение в Краснодарском крае в сфере повышения производительности труда, конкурентоспособности, автоматизации, роботизации производственных процессов
						</span>
						<span class="function-center">  <!--functions -->
							&#8226;	Организация и проведение мастер-классов ведущих экспертов в сфере производительности труда, поддержка реализации специализированных тре- нингов/образовательных 
							программ в сфере производительности труда, конкурентоспособности, автоматизации, роботизации производственных процессов в АПК и других отраслях
						</span>
						<span class="function-center">  <!--functions -->
							&#8226;	Реализация программ развития компетенций по приоритетным отраслевым секторам и ключевым темам (например, «бережливое производство», внедрение элементов цифровой 
							экономики, проектное управление), разработка и реализация портфеля тренингов/образовательных программ по ключевым темам повышения производительности труда, конкурентоспособности, 
							автоматизации, роботизации производственных процессов
						</span>
						<span class="function-center">  <!--functions -->
							&#8226;	Участие в организации «одного окна» для предприятий - участников региональной программы повышения производительности труда, поддержки занятости и конкурентоспособности,
							 включая их информирование о мерах поддержки в сфере повышения производительности (федеральных и региональных), формирование перечня квалифицированных компаний - провайдеров консультационной поддержки
						</span>
						<span class="function-center">  <!--functions -->
							&#8226;	Участие в разработке и реализации региональной программы повышения производительности труда и конкурентоспособности, мониторинге выполнения мероприятий региональной
							 программы и оценке достижений предприятий - участников региональной программы
						</span>
						<span class="function-center">  <!--functions -->
							&#8226;	Выполнение научных исследований в сфере управления новых производственных систем «Индустрии 4.0» (шестой технологический уклад)
						</span>
						<span class="function-center">  <!--functions -->
							&#8226;	Участие в конкурсах на получение грантов в сфере управления новых производственных систем «Индустрии 4.0» (шестой технологический уклад)
						</span>
						<span class="function-center">  <!--functions -->
							&#8226;	Разработка и издание учебно-методических и методических указаний, учебных пособий, учебников, баз данных, программного обеспечения в области
							 повышения производительности труда, конкурентоспособности, автоматизации, роботизации производственных процессов оптимизации процессов и современных производственных систем
						</span>
						<span class="function-center">  <!--functions -->
							&#8226;	Организация и проведение семинаров, тренингов, курсов повышения квалификации в области повышения производительности труда, конкурентоспособности, 
							автоматизации, роботизации производственных процессов оптимизации процессов и современных производственных систем
						</span>
						<span class="function-center">  <!--functions -->
							&#8226;	Разработка, планирование и сопровождение проектов внедрения принципов и инструментов повышения производительности труда, конкурентоспособности, 
							автоматизации, роботизации производственных процессов оптимизации процессов и современных производственных систем
						</span>
						<span class="function-center">  <!--functions -->
							&#8226;	Оказание услуг по повышению качества работы институтов поддержки занятости
						</span>
					</div>
				</div>
			</div>
		</div>

	</div>


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>