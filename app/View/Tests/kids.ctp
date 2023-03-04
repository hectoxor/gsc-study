<div class="content">
	<!-- <div class="head-second-page" style="background-image: url(/img/language_program_head.png);">
		<div class="container">
			<ul class="breadcrumbs">
				<li><a href="/">Главная</a></li>
				<li><span>Пройти онлайн тест</span></li>
			</ul>
			<?php //echo $this->element('breadcrumbs') ?>
			<div class="second-page-title">
				Онлайн тест Kids
			</div>
		</div>
	</div> -->
	<div class="content-top">
		<div class="container">
			<?php echo $this->element('breadcrumbs') ?>
			<h1 class="title">
				Онлайн тест Kids
			</h1>
		
		</div>
	</div>
	<div class="section kids-test" data-name="Kids">
		<div class="container">
			<!-- <div class="test-ul">
				<div class="test-ul__item test-ul__item--active test-ul__item--kids"><span>Test fo kids</span></div>
				<div class="test-ul__item test-ul__item--speaking"><span>Results</span></div>
			</div> -->
			<nav class="page-header-nav">
				<ul>
					<li class="tab-sec active"><a href="javascript:;">Reading and writing</a></li>
					<li class="tab-sec"><a href="javascript:;">Listening</a></li>
					<li class="tab-sec"><a href="javascript:;">Results</a></li>
				</ul>
			</nav>
			<div class="test-slider kids_test_slider">
				<div class="test-part js-test-part test-part--grammar test-part--active test-part--kids tab-items active">
					<!-- <span class="test-part__heading">Section Grammar</span> -->
					<h2 class="title-sec" data-sec="grammar">Section Grammar</h2>
					
					<!-- <div class="test_row">
						<p class="question__heading">1. Match numbers with the words. </p>
						<div class="test_table opposite_words">

							<table>
								<tbody>
									<tr>
										<td>&nbsp;</td>
										<td>seven</td>
										<td>four</td>
										<td>nine</td>
										<td>two</td>
										<td>ten</td>
										<td>one</td>
										<td>six</td>
										<td>five</td>
										<td>three</td>
										<td>eight</td>
									</tr>
									<tr>
										<td>1</td>
										<td><input class="input-checkbox input-checkbox--grammar" type="radio" id="word_c1_r1" name="row_1" data-name="1 - seven"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="radio" id="word_c2_r1" name="row_1" data-name="1 - four"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="radio" id="word_c3_r1" name="row_1" data-name="1 - nine"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="radio" id="word_c4_r1" name="row_1" data-name="1 - two"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="radio" id="word_c5_r1" name="row_1" data-name="1 - ten"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="radio" id="word_c6_r1" name="row_1" data-name="1 - one"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="radio" id="word_c7_r1" name="row_1" data-name="1 - six"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="radio" id="word_c8_r1" name="row_1" data-name="1 - five"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="radio" id="word_c9_r1" name="row_1" data-name="1 - three"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="radio" id="word_c9_r1" name="row_1" data-name="1 - eight"></td>
									</tr>
									<tr>
										<td>2</td>
										<td><input class="input-checkbox input-checkbox--grammar" type="radio" id="word_c1_r2" name="row_2" data-name="2 - seven"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="radio" id="word_c2_r2" name="row_2" data-name="2 - four"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="radio" id="word_c3_r2" name="row_2" data-name="2 - nine"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="radio" id="word_c4_r2" name="row_2" data-name="2 - two"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="radio" id="word_c5_r2" name="row_2" data-name="2 - ten"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="radio" id="word_c6_r2" name="row_2" data-name="2 - one"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="radio" id="word_c7_r2" name="row_2" data-name="2 - six"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="radio" id="word_c8_r2" name="row_2" data-name="2 - five"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="radio" id="word_c9_r2" name="row_2" data-name="2 - three"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="radio" id="word_c9_r2" name="row_2" data-name="2 - eight"></td>
									</tr>
									<tr>
										<td>3</td>
										<td><input class="input-checkbox input-checkbox--grammar" type="radio" id="word_c1_r3" name="row_3" data-name="3 - seven"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="radio" id="word_c2_r3" name="row_3" data-name="3 - four"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="radio" id="word_c3_r3" name="row_3" data-name="3 - nine"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="radio" id="word_c4_r3" name="row_3" data-name="3 - two"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="radio" id="word_c5_r3" name="row_3" data-name="3 - ten"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="radio" id="word_c6_r3" name="row_3" data-name="3 - one"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="radio" id="word_c7_r3" name="row_3" data-name="3 - six"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="radio" id="word_c8_r3" name="row_3" data-name="3 - five"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="radio" id="word_c9_r3" name="row_3" data-name="3 - three"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="radio" id="word_c9_r3" name="row_3" data-name="3 - eight"></td>
									</tr>
									<tr>
										<td>4</td>
										<td><input class="input-checkbox input-checkbox--grammar" type="radio" id="word_c1_r4" name="row_4" data-name="4 - seven"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="radio" id="word_c2_r4" name="row_4" data-name="4 - four"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="radio" id="word_c3_r4" name="row_4" data-name="4 - nine"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="radio" id="word_c4_r4" name="row_4" data-name="4 - two"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="radio" id="word_c5_r4" name="row_4" data-name="4 - ten"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="radio" id="word_c6_r4" name="row_4" data-name="4 - one"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="radio" id="word_c7_r4" name="row_4" data-name="4 - six"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="radio" id="word_c8_r4" name="row_4" data-name="4 - five"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="radio" id="word_c9_r4" name="row_4" data-name="4 - three"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="radio" id="word_c9_r4" name="row_4" data-name="4 - eight"></td>
									</tr>
									<tr>
										<td>5</td>
										<td><input class="input-checkbox input-checkbox--grammar" type="radio" id="word_c1_r5" name="row_5" data-name="5 - seven"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="radio" id="word_c2_r5" name="row_5" data-name="5 - four"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="radio" id="word_c3_r5" name="row_5" data-name="5 - nine"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="radio" id="word_c4_r5" name="row_5" data-name="5 - two"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="radio" id="word_c5_r5" name="row_5" data-name="5 - ten"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="radio" id="word_c6_r5" name="row_5" data-name="5 - one"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="radio" id="word_c7_r5" name="row_5" data-name="5 - six"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="radio" id="word_c8_r5" name="row_5" data-name="5 - five"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="radio" id="word_c9_r5" name="row_5" data-name="5 - three"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="radio" id="word_c9_r5" name="row_5" data-name="5 - eight"></td>
									</tr>
									<tr>
										<td>6</td>
										<td><input class="input-checkbox input-checkbox--grammar" type="radio" id="word_c1_r6" name="row_6" data-name="6 - seven"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="radio" id="word_c2_r6" name="row_6" data-name="6 - four"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="radio" id="word_c3_r6" name="row_6" data-name="6 - nine"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="radio" id="word_c4_r6" name="row_6" data-name="6 - two"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="radio" id="word_c5_r6" name="row_6" data-name="6 - ten"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="radio" id="word_c6_r6" name="row_6" data-name="6 - one"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="radio" id="word_c7_r6" name="row_6" data-name="6 - six"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="radio" id="word_c8_r6" name="row_6" data-name="6 - five"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="radio" id="word_c9_r6" name="row_6" data-name="6 - three"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="radio" id="word_c9_r6" name="row_6" data-name="6 - eight"></td>
									</tr>
									<tr>
										<td>7</td>
										<td><input class="input-checkbox input-checkbox--grammar" type="radio" id="word_c1_r7" name="row_7" data-name="7 - seven"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="radio" id="word_c2_r7" name="row_7" data-name="7 - four"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="radio" id="word_c3_r7" name="row_7" data-name="7 - nine"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="radio" id="word_c4_r7" name="row_7" data-name="7 - two"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="radio" id="word_c5_r7" name="row_7" data-name="7 - ten"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="radio" id="word_c6_r7" name="row_7" data-name="7 - one"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="radio" id="word_c7_r7" name="row_7" data-name="7 - six"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="radio" id="word_c8_r7" name="row_7" data-name="7 - five"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="radio" id="word_c9_r7" name="row_7" data-name="7 - three"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="radio" id="word_c9_r7" name="row_7" data-name="7 - eight"></td>
									</tr>
									<tr>
										<td>8</td>
										<td><input class="input-checkbox input-checkbox--grammar" type="radio" id="word_c1_r8" name="row_8" data-name="8 - seven"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="radio" id="word_c2_r8" name="row_8" data-name="8 - four"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="radio" id="word_c3_r8" name="row_8" data-name="8 - nine"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="radio" id="word_c4_r8" name="row_8" data-name="8 - two"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="radio" id="word_c5_r8" name="row_8" data-name="8 - ten"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="radio" id="word_c6_r8" name="row_8" data-name="8 - one"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="radio" id="word_c7_r8" name="row_8" data-name="8 - six"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="radio" id="word_c8_r8" name="row_8" data-name="8 - five"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="radio" id="word_c9_r8" name="row_8" data-name="8 - three"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="radio" id="word_c9_r8" name="row_8" data-name="8 - eight"></td>
									</tr>
									<tr>
										<td>9</td>
										<td><input class="input-checkbox input-checkbox--grammar" type="radio" id="word_c1_r9" name="row_9" data-name="9 - seven"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="radio" id="word_c2_r9" name="row_9" data-name="9 - four"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="radio" id="word_c3_r9" name="row_9" data-name="9 - nine"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="radio" id="word_c4_r9" name="row_9" data-name="9 - two"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="radio" id="word_c5_r9" name="row_9" data-name="9 - ten"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="radio" id="word_c6_r9" name="row_9" data-name="9 - one"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="radio" id="word_c7_r9" name="row_9" data-name="9 - six"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="radio" id="word_c8_r9" name="row_9" data-name="9 - five"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="radio" id="word_c9_r9" name="row_9" data-name="9 - three"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="radio" id="word_c9_r9" name="row_9" data-name="9 - eight"></td>
									</tr>
									<tr>
										<td>10</td>
										<td><input class="input-checkbox input-checkbox--grammar" type="radio" id="word_c1_r10" name="row_10" data-name="10 - seven"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="radio" id="word_c2_r10" name="row_10" data-name="10 - four"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="radio" id="word_c3_r10" name="row_10" data-name="10 - nine"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="radio" id="word_c4_r10" name="row_10" data-name="10 - two"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="radio" id="word_c5_r10" name="row_10" data-name="10 - ten"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="radio" id="word_c6_r10" name="row_10" data-name="10 - one"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="radio" id="word_c7_r10" name="row_10" data-name="10 - six"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="radio" id="word_c8_r10" name="row_10" data-name="10 - five"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="radio" id="word_c9_r10" name="row_10" data-name="10 - three"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="radio" id="word_c9_r10" name="row_10" data-name="10 - eight"></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div> -->

					<div class="test-row kids_test_row">
						<div class="test-row__inner">
							<div class="question question_img">
								<p class="question__heading">1. Match numbers with the words. </p>
								<div class="question__row">
									<span class="question__heading">This is a helicopter</span>	
									<label class="question-row__text question_a_img">
										<img src="/img/test/kids/part1-1.jpg" alt="">
									</label>
									<!-- <select name="l1a1" id="l1" class="question_sel">
										<option>True</option>
										<option>False</option>
									</select> -->
									<div class="question-row">
										<input id="g1a1" name="g1" class="question-row__input" type="radio">
										<label for="g1a1" class="question-row__text">True</label>
									</div>
									<div class="question-row">
										<input id="g1a2" name="g1" class="question-row__input" type="radio">
										<label for="g1a2" class="question-row__text">False</label>
									</div>
								</div>
								<div class="question__row">
									<span class="question__heading">This is a clock.</span>	
									<label class="question-row__text question_a_img">
										<img src="/img/test/kids/part1-2.jpg" alt="">
									</label>
									<!-- <select name="l1a1" id="l1" class="question_sel">
										<option>True</option>
										<option>False</option>
									</select> -->
									<div class="question-row">
										<input id="g2a1" name="g2" class="question-row__input" type="radio">
										<label for="g2a1" class="question-row__text">True</label>
									</div>
									<div class="question-row">
										<input id="g2a2" name="g2" class="question-row__input" type="radio">
										<label for="g2a2" class="question-row__text">False</label>
									</div>
								</div>
								<div class="question__row">
									<span class="question__heading">These are shells.</span>	
									<label class="question-row__text question_a_img">
										<img src="/img/test/kids/part1-3.jpg" alt="">
									</label>
									<!-- <select name="l1a1" id="l1" class="question_sel">
										<option>True</option>
										<option>False</option>
									</select> -->
									<div class="question-row">
										<input id="g3a1" name="g3" class="question-row__input" type="radio">
										<label for="g3a1" class="question-row__text">True</label>
									</div>
									<div class="question-row">
										<input id="g3a2" name="g3" class="question-row__input" type="radio">
										<label for="g3a2" class="question-row__text">False</label>
									</div>
								</div>	
								<div class="question__row">
									<span class="question__heading">This is a sock.</span>	
									<label class="question-row__text question_a_img">
										<img src="/img/test/kids/part1-4.jpg" alt="">
									</label>
									<!-- <select name="l1a1" id="l1" class="question_sel">
										<option>True</option>
										<option>False</option>
									</select> -->
									<div class="question-row">
										<input id="g4a1" name="g4" class="question-row__input" type="radio">
										<label for="g4a1" class="question-row__text">True</label>
									</div>
									<div class="question-row">
										<input id="g4a2" name="g4" class="question-row__input" type="radio">
										<label for="g4a2" class="question-row__text">False</label>
									</div>
								</div>
								<div class="question__row">
									<span class="question__heading">These are chairs.</span>	
									<label class="question-row__text question_a_img">
										<img src="/img/test/kids/part1-5.jpg" alt="">
									</label>
									<!-- <select name="l1a1" id="l1" class="question_sel">
										<option>True</option>
										<option>False</option>
									</select> -->
									<div class="question-row">
										<input id="g5a1" name="g5" class="question-row__input" type="radio">
										<label for="g5a1" class="question-row__text">True</label>
									</div>
									<div class="question-row">
										<input id="g5a2" name="g5" class="question-row__input" type="radio">
										<label for="g5a2" class="question-row__text">False</label>
									</div>
								</div>
							</div>
							<!-- <div class="question question_img">
								<span class="question__heading">3. eyes</span>
								<div class="question-row">
									<input id="q3a1" name="q3" class="question-row__input" type="radio">	
									<label for="q3a1" class="question-row__text question_a_img">
										<span>a</span>
										<img src="/img/test/kids/2_a.png" alt="">
									</label>
								</div>
								<div class="question-row">
									<input id="q3a2" name="q3" class="question-row__input" type="radio">	
									<label for="q3a2" class="question-row__text question_a_img">
										<span>b</span>
										<img src="/img/test/kids/2_b.jpg" alt="">
									</label>
								</div>	
								<div class="question-row">
									<input id="q3a3" name="q3" class="question-row__input" type="radio">	
									<label for="q3a3" class="question-row__text question_a_img">
										<span>c</span>
										<img src="/img/test/kids/2_c.png" alt="">
									</label>
								</div>
							</div>
							<div class="question question_img">
								<span class="question__heading">4. socks</span>
								<div class="question-row">
									<input id="q4a1" name="q4" class="question-row__input" type="radio">	
									<label for="q4a1" class="question-row__text question_a_img">
										<span>a</span>
										<img src="/img/test/kids/3_a.png" alt="">
									</label>
								</div>
								<div class="question-row">
									<input id="q4a2" name="q4" class="question-row__input" type="radio">	
									<label for="q4a2" class="question-row__text question_a_img">
										<span>b</span>
										<img src="/img/test/kids/3_b.png" alt="">
									</label>
								</div>	
								<div class="question-row">
									<input id="q4a3" name="q4" class="question-row__input" type="radio">	
									<label for="q4a3" class="question-row__text question_a_img">
										<span>c</span>
										<img src="/img/test/kids/3_c.png" alt="">
									</label>
								</div>
							</div>
							<div class="question question_img">
								<span class="question__heading">5. bicycle</span>
								<div class="question-row">
									<input id="q5a1" name="q5" class="question-row__input" type="radio">	
									<label for="q5a1" class="question-row__text question_a_img">
										<span>a</span>
										<img src="/img/test/kids/4_a.png" alt="">
									</label>
								</div>
								<div class="question-row">
									<input id="q5a2" name="q5" class="question-row__input" type="radio">	
									<label for="q5a2" class="question-row__text question_a_img">
										<span>b</span>
										<img src="/img/test/kids/4_b.png" alt="">
									</label>
								</div>	
								<div class="question-row">
									<input id="q5a3" name="q5" class="question-row__input" type="radio">	
									<label for="q5a3" class="question-row__text question_a_img">
										<span>c</span>
										<img src="/img/test/kids/4_c.jpg" alt="">
									</label>
								</div>
							</div>
							<div class="question question_img">
								<span class="question__heading">6. bedroom</span>
								<div class="question-row">
									<input id="q6a1" name="q6" class="question-row__input" type="radio">	
									<label for="q6a1" class="question-row__text question_a_img">
										<span>a</span>
										<img src="/img/test/kids/5_a.jpg" alt="">
									</label>
								</div>
								<div class="question-row">
									<input id="q6a2" name="q6" class="question-row__input" type="radio">	
									<label for="q6a2" class="question-row__text question_a_img">
										<span>b</span>
										<img src="/img/test/kids/5_b.png" alt="">
									</label>
								</div>	
								<div class="question-row">
									<input id="q6a3" name="q6" class="question-row__input" type="radio">	
									<label for="q6a3" class="question-row__text question_a_img">
										<span>c</span>
										<img src="/img/test/kids/5_c.png" alt="">
									</label>
								</div>
							</div>
							<div class="question question_img">
								<span class="question__heading">7. snow</span>
								<div class="question-row">
									<input id="q7a1" name="q7" class="question-row__input" type="radio">	
									<label for="q7a1" class="question-row__text question_a_img">
										<span>a</span>
										<img src="/img/test/kids/6_a.png" alt="">
									</label>
								</div>
								<div class="question-row">
									<input id="q7a2" name="q7" class="question-row__input" type="radio">	
									<label for="q7a2" class="question-row__text question_a_img">
										<span>b</span>
										<img src="/img/test/kids/6_b.jpg" alt="">
									</label>
								</div>	
								<div class="question-row">
									<input id="q7a3" name="q7" class="question-row__input" type="radio">	
									<label for="q7a3" class="question-row__text question_a_img">
										<span>c</span>
										<img src="/img/test/kids/6_c.png" alt="">
									</label>
								</div>
							</div>
							<div class="question question_img">
								<span class="question__heading">8. It can swim and jump</span>
								<div class="question-row">
									<input id="q8a1" name="q8" class="question-row__input" type="radio">	
									<label for="q8a1" class="question-row__text question_a_img">
										<span>a</span>
										<img src="/img/test/kids/7_a.png" alt="">
									</label>
								</div>
								<div class="question-row">
									<input id="q8a2" name="q8" class="question-row__input" type="radio">	
									<label for="q8a2" class="question-row__text question_a_img">
										<span>b</span>
										<img src="/img/test/kids/7_b.png" alt="">
									</label>
								</div>	
								<div class="question-row">
									<input id="q8a3" name="q8" class="question-row__input" type="radio">	
									<label for="q8a3" class="question-row__text question_a_img">
										<span>c</span>
										<img src="/img/test/kids/7_c.png" alt="">
									</label>
								</div>
							</div>
							<div class="question question_img">
								<span class="question__heading">9. fifty</span>
								<div class="question-row">
									<input id="q9a1" name="q9" class="question-row__input" type="radio">	
									<label for="q9a1" class="question-row__text question_a_img">
										<span>a</span>
										<img src="/img/test/kids/8_a.png" alt="">
									</label>
								</div>
								<div class="question-row">
									<input id="q9a2" name="q9" class="question-row__input" type="radio">	
									<label for="q9a2" class="question-row__text question_a_img">
										<span>b</span>
										<img src="/img/test/kids/8_b.png" alt="">
									</label>
								</div>	
								<div class="question-row">
									<input id="q9a3" name="q9" class="question-row__input" type="radio">	
									<label for="q9a3" class="question-row__text question_a_img">
										<span>c</span>
										<img src="/img/test/kids/8_c.jpeg" alt="">
									</label>
								</div>
							</div>
							<div class="question question_img">
								<span class="question__heading">10. grandparents</span>
								<div class="question-row">
									<input id="q10a1" name="q10" class="question-row__input" type="radio">	
									<label for="q10a1" class="question-row__text question_a_img">
										<span>a</span>
										<img src="/img/test/kids/9_a.png" alt="">
									</label>
								</div>
								<div class="question-row">
									<input id="q10a2" name="q10" class="question-row__input" type="radio">	
									<label for="q10a2" class="question-row__text question_a_img">
										<span>b</span>
										<img src="/img/test/kids/9_b.png" alt="">
									</label>
								</div>	
								<div class="question-row">
									<input id="q10a3" name="q10" class="question-row__input" type="radio">	
									<label for="q10a3" class="question-row__text question_a_img">
										<span>c</span>
										<img src="/img/test/kids/9_c.png" alt="">
									</label>
								</div>
							</div>
							<div class="question question_img">
								<span class="question__heading">11. cheese</span>
								<div class="question-row">
									<input id="q11a1" name="q11" class="question-row__input" type="radio">	
									<label for="q11a1" class="question-row__text question_a_img">
										<span>a</span>
										<img src="/img/test/kids/10_a.jpg" alt="">
									</label>
								</div>
								<div class="question-row">
									<input id="q11a2" name="q11" class="question-row__input" type="radio">	
									<label for="q11a2" class="question-row__text question_a_img">
										<span>b</span>
										<img src="/img/test/kids/10_b.png" alt="">
									</label>
								</div>	
								<div class="question-row">
									<input id="q11a3" name="q11" class="question-row__input" type="radio">	
									<label for="q11a3" class="question-row__text question_a_img">
										<span>c</span>
										<img src="/img/test/kids/10_c.png" alt="">
									</label>
								</div>
							</div> -->

							<!-- <div class="question question_select">
								<span class="question__heading">12. Match pictures with words</span>
								<div class="question_head_img">
									<img src="/img/test/kids/11.png" alt="">
								</div>
								<div class="question-row">
									<select id="r12a1" class="question_sel" name="r12">
										<option selected="" disabled="" value="">Choose option</option>
										<option value="he">He</option>
										<option value="she">She</option>
										<option value="it">It</option>
									</select>
								</div>
							</div>
							<div class="question question_select">
								<span class="question__heading">13. Match pictures with words</span>
								<div class="question_head_img">
									<img src="/img/test/kids/12.png" alt="">
								</div>
								<div class="question-row">
									<select id="r13a1" class="question_sel" name="r13">
										<option selected="" disabled="" value="">Choose option</option>
										<option value="i">I</option>
										<option value="you">You</option>
										<option value="we">We</option>
									</select>
								</div>
							</div>
							<div class="question question_select">
								<span class="question__heading">14. Match pictures with words</span>
								<div class="question_head_img">
									<img src="/img/test/kids/13.png" alt="">
								</div>
								<div class="question-row">
									<select id="r14a1" class="question_sel" name="r14">
										<option selected="" disabled="" value="">Choose option</option>
										<option value="she">she</option>
										<option value="he">he</option>
										<option value="they">they</option>
									</select>
								</div>
							</div>
							<div class="question question_select">
								<span class="question__heading">15. Match pictures with words</span>
								<div class="question_head_img">
									<img src="/img/test/kids/14.png" alt="">
								</div>
								<div class="question-row">
									<select id="r15a1" class="question_sel" name="r15">
										<option selected="" disabled="" value="">Choose option</option>
										<option value="I">I</option>
										<option value="we">we</option>
										<option value="she">she</option>
									</select>
								</div>
							</div>
							<div class="question question_select">
								<span class="question__heading">16. Match pictures with words</span>
								<div class="question_head_img">
									<img src="/img/test/kids/15.png" alt="">
								</div>
								<div class="question-row">
									<select id="r16a1" class="question_sel" name="r16">
										<option selected="" disabled="" value="">Choose option</option>
										<option value="It">It</option>
										<option value="they">they</option>
										<option value="I">I</option>
									</select>
								</div>
							</div>
							<div class="question question_select">
								<span class="question__heading">17. Match pictures with words</span>
								<div class="question_head_img">
									<img src="/img/test/kids/16.png" alt="">
								</div>
								<div class="question-row">
									<select id="r17a1" class="question_sel" name="r17">
										<option selected="" disabled="" value="">Choose option</option>
										<option value="she">she</option>
										<option value="I">I</option>
										<option value="we">we</option>
									</select>
								</div>
							</div>
							<div class="question question_select">
								<span class="question__heading">18. Match pictures with words</span>
								<div class="question_head_img">
									<img src="/img/test/kids/17.png" alt="">
								</div>
								<div class="question-row">
									<select id="r18a1" class="question_sel" name="r18">
										<option selected="" disabled="" value="">Choose option</option>
										<option value="she">she</option>
										<option value="he">he</option>
										<option value="It">It</option>
									</select>
								</div>
							</div>

							<div class="question">
								<span class="question__heading">19.	My name is Bob. _____ am 7 years old.</span>
								<div class="question-row">
									<input id="q19a1" name="q19" class="question-row__input" type="radio">	
									<label for="q19a1" class="question-row__text">He</label>
								</div>
								<div class="question-row">
									<input id="q19a2" name="q19" class="question-row__input" type="radio">	
									<label for="q19a2" class="question-row__text">I</label>
								</div>	
								<div class="question-row">
									<input id="q19a3" name="q19" class="question-row__input" type="radio">	
									<label for="q19a3" class="question-row__text">You</label>
								</div>				
							</div>
							<div class="question">
								<span class="question__heading">20.	This is my friend Patrick. He _____10 years old.</span>
								<div class="question-row">
									<input id="q20a1" name="q20" class="question-row__input" type="radio">	
									<label for="q20a1" class="question-row__text">is</label>
								</div>
								<div class="question-row">
									<input id="q20a2" name="q20" class="question-row__input" type="radio">	
									<label for="q20a2" class="question-row__text">are</label>
								</div>	
								<div class="question-row">
									<input id="q20a3" name="q20" class="question-row__input" type="radio">	
									<label for="q20a3" class="question-row__text">am</label>
								</div>				
							</div>
							<div class="question">
								<span class="question__heading">21.	 _____ are you? I'm fine, thank you. </span>
								<div class="question-row">
									<input id="q21a1" name="q21" class="question-row__input" type="radio">	
									<label for="q21a1" class="question-row__text">When</label>
								</div>
								<div class="question-row">
									<input id="q21a2" name="q21" class="question-row__input" type="radio">	
									<label for="q21a2" class="question-row__text">How old</label>
								</div>	
								<div class="question-row">
									<input id="q21a3" name="q21" class="question-row__input" type="radio">	
									<label for="q21a3" class="question-row__text">How</label>
								</div>				
							</div>
							<div class="question">
								<span class="question__heading">22. It's _____ elephant. </span>
								<div class="question-row">
									<input id="q22a1" name="q22" class="question-row__input" type="radio">	
									<label for="q22a1" class="question-row__text">a</label>
								</div>
								<div class="question-row">
									<input id="q22a2" name="q22" class="question-row__input" type="radio">	
									<label for="q22a2" class="question-row__text">an</label>
								</div>
							</div>
							<div class="question">
								<span class="question__heading">23. Tigers _____ fly.</span>
								<div class="question-row">
									<input id="q23a1" name="q23" class="question-row__input" type="radio">	
									<label for="q23a1" class="question-row__text">can</label>
								</div>
								<div class="question-row">
									<input id="q23a2" name="q23" class="question-row__input" type="radio">	
									<label for="q23a2" class="question-row__text">can't</label>
								</div>
							</div>
							<div class="question">
								<span class="question__heading">24. I _____ a dog.</span>
								<div class="question-row">
									<input id="q24a1" name="q24" class="question-row__input" type="radio">	
									<label for="q24a1" class="question-row__text">haven't</label>
								</div>
								<div class="question-row">
									<input id="q24a2" name="q24" class="question-row__input" type="radio">	
									<label for="q24a2" class="question-row__text">have</label>
								</div>
								<div class="question-row">
									<input id="q24a3" name="q24" class="question-row__input" type="radio">	
									<label for="q24a3" class="question-row__text">has</label>
								</div>
							</div>
							<div class="question">
								<span class="question__heading">25. Nick _____ in New York.</span>
								<div class="question-row">
									<input id="q25a1" name="q25" class="question-row__input" type="radio">	
									<label for="q25a1" class="question-row__text">live</label>
								</div>
								<div class="question-row">
									<input id="q25a2" name="q25" class="question-row__input" type="radio">	
									<label for="q25a2" class="question-row__text">living</label>
								</div>
								<div class="question-row">
									<input id="q25a3" name="q25" class="question-row__input" type="radio">	
									<label for="q25a3" class="question-row__text">lives</label>
								</div>
							</div> -->
						</div>
					</div>
					
					<div class="test-row kids_test_row_text">
						<div class="test-row__inner">
							<p class="question__heading">2. Look and read. Write YES or NO.</p>
							<img class="img-part3" src="/img/test/kids/part3.jpg" alt="" width="100%">
							<br><br>
							<div class="question question_text">
								<span class="question__heading">1. This is a helicopter. _____________</span>	
								<!-- <select name="l1a1" id="l1" class="question_sel">
									<option>YES</option>
									<option>NO</option>
								</select> -->
								<div class="question-row">
									<input id="g6a1" name="g6" class="question-row__input" type="radio">
									<label for="g6a1" class="question-row__text">YES</label>
								</div>
								<div class="question-row">
									<input id="g6a2" name="g6" class="question-row__input" type="radio">
									<label for="g6a2" class="question-row__text">NO</label>
								</div>
							</div>
							<div class="question question_text">
								<span class="question__heading">2. The man is playing the guitar. _____________</span>	
								<!-- <select name="l1a1" id="l1" class="question_sel">
									<option>YES</option>
									<option>NO</option>
								</select> -->
								<div class="question-row">
									<input id="g7a1" name="g7" class="question-row__input" type="radio">
									<label for="g7a1" class="question-row__text">YES</label>
								</div>
								<div class="question-row">
									<input id="g7a2" name="g7" class="question-row__input" type="radio">
									<label for="g7a2" class="question-row__text">NO</label>
								</div>
							</div>
							<div class="question question_text">
								<span class="question__heading">3. There is a lamp on the bookcase. _____________</span>	
								<!-- <select name="l1a1" id="l1" class="question_sel">
									<option>YES</option>
									<option>NO</option>
								</select> -->
								<div class="question-row">
									<input id="g8a1" name="g8" class="question-row__input" type="radio">
									<label for="g8a1" class="question-row__text">YES</label>
								</div>
								<div class="question-row">
									<input id="g8a2" name="g8" class="question-row__input" type="radio">
									<label for="g8a2" class="question-row__text">NO</label>
								</div>
							</div>
							<div class="question question_text">
								<span class="question__heading">4. Children are singing. _____________</span>	
								<!-- <select name="l1a1" id="l1" class="question_sel">
									<option>YES</option>
									<option>NO</option>
								</select> -->
								<div class="question-row">
									<input id="g9a1" name="g9" class="question-row__input" type="radio">
									<label for="g9a1" class="question-row__text">YES</label>
								</div>
								<div class="question-row">
									<input id="g9a2" name="g9" class="question-row__input" type="radio">
									<label for="g9a2" class="question-row__text">NO</label>
								</div>
							</div>
							<div class="question question_text">
								<span class="question__heading">5. The cat is eating. _____________</span>	
								<!-- <select name="l1a1" id="l1" class="question_sel">
									<option>YES</option>
									<option>NO</option>
								</select> -->
								<div class="question-row">
									<input id="g10a1" name="g10" class="question-row__input" type="radio">
									<label for="g10a1" class="question-row__text">YES</label>
								</div>
								<div class="question-row">
									<input id="g10a2" name="g10" class="question-row__input" type="radio">
									<label for="g10a2" class="question-row__text">NO</label>
								</div>
							</div>

							<p class="question__heading">3. Look at the pictures. Look at the letters. Write the words.</p>
							<div class="question">
								<label class="question-row__text">1.</label>
								<!-- <input value="snake" class="question_input" type="text"> -->
								<label class="question-row__text question_a_img">
									<img src="/img/test/kids/part4.jpg" alt="">
								</label>
								<textarea name="tx1_wr" class="write-row__textarea write-row__textarea--1 js-textarea kids-area"></textarea>
							</div>
							<div class="question">
								<label class="question-row__text">2.</label>
								<!-- <input class="question_input" type="text"> -->
								<br>
								<label class="question-row__text question_a_img">
									<img src="/img/test/kids/part4-1.jpg" alt="">
								</label>
								<textarea name="tx2_wr" class="write-row__textarea write-row__textarea--1 js-textarea kids-area"></textarea>
							</div>
							<div class="question">
								<label class="question-row__text">3.</label>
								<!-- <input class="question_input" type="text"> -->
								<br>
								<label class="question-row__text question_a_img">
									<img src="/img/test/kids/part4-2.jpg" alt="">
								</label>
								<textarea name="tx3_wr" class="write-row__textarea write-row__textarea--1 js-textarea kids-area"></textarea>
							</div>
							<div class="question">
								<label class="question-row__text">4.</label>
								<!-- <input class="question_input" type="text"> -->
								<label class="question-row__text question_a_img">
									<img src="/img/test/kids/part4-3.jpg" alt="">
								</label>
								<textarea name="tx4_wr" class="write-row__textarea write-row__textarea--1 js-textarea kids-area"></textarea>
							</div>
							<div class="question">
								<label class="question-row__text">5.</label>
								<!-- <input class="question_input" type="text"> -->
								<br>
								<label class="question-row__text question_a_img">
									<img src="/img/test/kids/part4-4.jpg" alt="">
								</label>
								<textarea name="tx5_wr" class="write-row__textarea write-row__textarea--1 js-textarea kids-area"></textarea>
							</div>
							<div class="question">
								<label class="question-row__text">6.</label>
								<!-- <input class="question_input" type="text"> -->
								<br>
								<label class="question-row__text question_a_img">
									<img src="/img/test/kids/part4-5.jpg" alt="">
								</label>
								<textarea name="tx6_wr" class="write-row__textarea write-row__textarea--1 js-textarea kids-area"></textarea>
							</div>

							<p class="question__heading">3. Read this. Choose a word from the box. Write the correct word next to numbers 1-5. There is one example.</p>
							<div class="question question_text">
								<label class="question-row__text question_a_img">
									<img  src="/img/test/kids/part5-2.jpg" alt="">
								</label>
								<p>Lots of lizards are very small <textarea name="tx7_wr" class="write-row__textarea write-row__textarea--1 js-textarea kids-area-r"></textarea>
								but some are really big.</p>
								<p>Many lizards are green, grey or yellow. Some like eating (1) <textarea name="tx8_wr" class="write-row__textarea write-row__textarea--1 js-textarea kids-area-r"></textarea> and some like eating fruit.</p>
								<p>A lizard can run on its four (2) <textarea name="tx9_wr" class="write-row__textarea write-row__textarea--1 js-textarea kids-area-r"></textarea> and it has a long</p>
								<p>Many lizards live in (4) <textarea name="tx10_wr" class="write-row__textarea write-row__textarea--1 js-textarea kids-area-r"></textarea> but, at the beach, you can find some</p>
								<p>Lizards on the (5) <textarea name="tx11_wr" class="write-row__textarea write-row__textarea--1 js-textarea kids-area-r"></textarea>. Lizards love sleeping in the sun!</p>
								<br>
								<img class="img-part5" src="/img/test/kids/part5-1.jpg" alt="" width="100%">
							</div>




							<!-- <div class="question_head_img">
								<img src="/img/test/kids/word_0.png" alt="">
							</div> -->
							<!-- <p>have breakfast</p>
							<p><b>Ответьте на вопросы ЗАГЛАВНЫМИ БУКВАМИ</b></p>
							<br>
							<div class="question question_text">
								<span class="question__heading">1. What's the word?</span>
								<div class="question_head_img">
									<img src="/img/test/kids/word_1.jpg" alt="">
								</div>
								<div class="question-row">
									<textarea id="k1a1" name="k1" class="question_textarea js-textarea"></textarea>
								</div>
							</div>
							<div class="question question_text">
								<span class="question__heading">2. What's the word?</span>
								<div class="question_head_img">
									<img src="/img/test/kids/word_2.png" alt="">
								</div>
								<div class="question-row">
									<textarea id="k2a1" name="k2" class="question_textarea js-textarea"></textarea>
								</div>
							</div>
							<div class="question question_text">
								<span class="question__heading">3. What's the word?</span>
								<div class="question_head_img">
									<img src="/img/test/kids/word_3.png" alt="">
								</div>
								<div class="question-row">
									<textarea id="k3a1" name="k3" class="question_textarea js-textarea"></textarea>
								</div>
							</div>
							<div class="question question_text">
								<span class="question__heading">4. What's the word?</span>
								<div class="question_head_img">
									<img src="/img/test/kids/word_4.jpg" alt="">
								</div>
								<div class="question-row">
									<textarea id="k4a1" name="k4" class="question_textarea js-textarea"></textarea>
								</div>
							</div>
							<div class="question question_text">
								<span class="question__heading">5. What's the word?</span>
								<div class="question_head_img">
									<img src="/img/test/kids/word_5.png" alt="">
								</div>
								<div class="question-row">
									<textarea id="k5a1" name="k5" class="question_textarea js-textarea"></textarea>
								</div>
							</div>
							<div class="question question_text">
								<span class="question__heading">6. What's the word?</span>
								<div class="question_head_img">
									<img src="/img/test/kids/word_6.png" alt="">
								</div>
								<div class="question-row">
									<textarea id="k6a1" name="k6" class="question_textarea js-textarea"></textarea>
								</div>
							</div>
							<div class="question question_text">
								<span class="question__heading">7. What's the word?</span>
								<div class="question_head_img">
									<img src="/img/test/kids/word_7.png" alt="">
								</div>
								<div class="question-row">
									<textarea id="k7a1" name="k7" class="question_textarea js-textarea"></textarea>
								</div>
							</div> -->

							<!-- <p class="question__heading">Put the words in the correct order</p>
							<p><b>Ответьте на вопросы ЗАГЛАВНЫМИ БУКВАМИ</b></p><br>

							<div class="question question_text">
								<span class="question__heading">8. have / breakfast / I</span>
								<div class="question-row">
									<textarea id="k8a1" name="k8" class="question_textarea js-textarea"></textarea>
								</div>
							</div>
							<div class="question question_text">
								<span class="question__heading">9. watch / I / television </span>
								<div class="question-row">
									<textarea id="k9a1" name="k9" class="question_textarea js-textarea"></textarea>
								</div>
							</div>
							<div class="question question_text">
								<span class="question__heading">10. lunch / have / I </span>
								<div class="question-row">
									<textarea id="k10a1" name="k10" class="question_textarea js-textarea"></textarea>
								</div>
							</div>
							<div class="question question_text">
								<span class="question__heading">11. sleep / I / to / go </span>
								<div class="question-row">
									<textarea id="k11a1" name="k11" class="question_textarea js-textarea"></textarea>
								</div>
							</div>
							<div class="question question_text">
								<span class="question__heading">12. in / garden / play / I / the</span>
								<div class="question-row">
									<textarea id="k12a1" name="k12" class="question_textarea js-textarea"></textarea>
								</div>
							</div>
							<div class="question question_text">
								<span class="question__heading">13. I / dinner / have</span>
								<div class="question-row">
									<textarea id="k13a1" name="k13" class="question_textarea js-textarea"></textarea>
								</div>
							</div>
							<div class="question question_text">
								<span class="question__heading">14. go / a / I / for / walk</span>
								<div class="question-row">
									<textarea id="k14a1" name="k14" class="question_textarea js-textarea"></textarea>
								</div>
							</div> -->
						</div>
					</div>
					<div class="submit submit--kids btn">Далее</div>
				</div>	


				<div class="test-part js-test-part test-part--listening tab-items">
					<!-- <span class="test-part__heading">Section Listening</span> -->
					<h2 class="title-sec" data-sec="listening">Section Listening</h2>
					<div class="test-section">
						<!-- <span class="test-section__heading">Watch the documentary "A haunted castle" about the four ghosts of Portchester Castle.</span> -->
						<br><br>
						<p>
							<audio src="/files/audio/kids_listening.mp3" controls=""></audio>
							<!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/8PQfW2P0bTA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
						</p>
					</div>
					<div class="tests-row">
						<div class="test-row__inner test-row">
							<div class="question question_img">
								<span class="question__heading">1. What are Mrs.Good’s class doing this afternoon?</span>
								<div class="question-row">
									<input id="l1a1" name="l1" class="question-row__input" type="radio">
									<label for="l1a1" class="question-row__text question_a_img">
										<span>A</span>
										<img src="/img/test/kids/part2-1.jpg" alt="">
									</label>
								</div>
								<div class="question-row">
									<input id="l1a2" name="l1" class="question-row__input" type="radio">
									<label for="l1a2" class="question-row__text question_a_img">
										<span>B</span>
										<img src="/img/test/kids/part2-2.jpg" alt="">
									</label>
								</div>
								<div class="question-row">
									<input id="l1a3" name="l1" class="question-row__input" type="radio">
									<label for="l1a3" class="question-row__text question_a_img">
										<span>C</span>
										<img src="/img/test/kids/part2-3.jpg" alt="">
									</label>
								</div>
							</div>
							<div class="question question_img">
								<span class="question__heading">2. What is Mum’s favourite fruit?</span>
								<div class="question-row">
									<input id="l2a1" name="l2" class="question-row__input" type="radio">
									<label for="l2a1" class="question-row__text question_a_img">
										<span>A</span>
										<img src="/img/test/kids/part2-4.jpg" alt="">
									</label>
								</div>
								<div class="question-row">
									<input id="l2a2" name="l2" class="question-row__input" type="radio">
									<label for="l2a2" class="question-row__text question_a_img">
										<span>B</span>
										<img src="/img/test/kids/part2-5.jpg" alt="">
									</label>
								</div>
								<div class="question-row">
									<input id="l2a3" name="l2" class="question-row__input" type="radio">
									<label for="l2a3" class="question-row__text question_a_img">
										<span>C</span>
										<img src="/img/test/kids/part2-6.jpg" alt="">
									</label>
								</div>
							</div>
							<div class="question question_img">
								<span class="question__heading">3. Which dog is Anna’s?</span>
								<div class="question-row">
									<input id="l3a1" name="l3" class="question-row__input" type="radio">
									<label for="l3a1" class="question-row__text question_a_img">
										<span>A</span>
										<img src="/img/test/kids/part2-7.jpg" alt="">
									</label>
								</div>
								<div class="question-row">
									<input id="l3a2" name="l3" class="question-row__input" type="radio">
									<label for="l3a2" class="question-row__text question_a_img">
										<span>B</span>
										<img src="/img/test/kids/part2-8.jpg" alt="">
									</label>
								</div>
								<div class="question-row">
									<input id="l3a3" name="l3" class="question-row__input" type="radio">
									<label for="l3a3" class="question-row__text question_a_img">
										<span>C</span>
										<img src="/img/test/kids/part2-9.jpg" alt="">
									</label>
								</div>
							</div>
						</div>
					</div>
					<div class="submit submit--listening btn">Далее</div>
				</div>


				<div class="test-part test-part--speaking tab-items">
					<!-- <span class="test-part__heading" style="text-align: center;">Заполните форму чтобы узнать результаты </span> -->
					<h2 class="title-sec">Заполните форму чтобы узнать результаты </h2>
					<form action="/requests/test" method="POST" class="formTest">					
						<div class="section-form">
							<div class="section-row">
								<div class="section-row__inner">
									<input required class="section-row__input" placeholder="Имя" type="text" name="data[name]">
								</div>
							</div>
							<div class="section-row">
								<div class="section-row__inner">
									<input required class="section-row__input" placeholder="Почта" type="email" name="data[email]">
								</div>	
							</div>	
							<div class="section-row">
								<div class="section-row__inner">
									<input required class="section-row__input" placeholder="Телефон" type="tel" name="data[phone]">
								</div>
							</div>
							<div class="section-row">
								<div class="section-row__inner select_section">
									<select class="section-row__select section-row__input" name="data[city]">
										<option value="Астана">Астана</option>
										<option value="Алматы">Алматы</option>
										<option value="Актау">Актау</option>
										<option value="Павлодар">Павлодар</option>
										<option value="Другой город">Другой город</option>
									</select>
								</div>	
							</div>	
							<div class="section-row">
								<div class="section-row__inner">
									<span class="section-row__heading">Дата рождения:</span>
									<input class="section-row__input" placeholder="Выберите Дату" type="date" id="datepicker" name="data[date]" required>
								</div>
								<!-- <div class="g-recaptcha" data-sitekey="6Lf-GWgUAAAAAONaK9a4BLwByqdhJ0fg-HdqVHQa"></div> -->
							</div>	
							<div class="section-row">
								<div class="section-row__inner">
									<input required class="section-row__input" placeholder="Откуда вы узнали о нас" type="text" name="data[question_about]">
								</div>
							</div>
							<div class="section-row">
								<div class="section-row__inner">
									<input required class="section-row__input" placeholder="В какое время вам удобно заниматься" type="text" name="data[question_time]">
								</div>
							</div>
							<?php $r1 = rand(1,10); $r2 = rand(1,10);?>
	                        <!-- <input name="data[r1]" value="<?=$r1?>"  type="hidden">
	                        <input name="data[r2]" value="<?=$r2?>"  type="hidden"> -->

	                        <div class="g-recaptcha" data-sitekey="6LffIpccAAAAAJfPSByDZuJgvbBuEcUIQRaZo3fy" style="margin-bottom: 20px;"></div>
	                        
							<input name="url" value="<?php echo Router::url(null, true) ?>" type="hidden">
	                        <!-- <div class="section-row">
								<div class="section-row__inner">
									  <input class="section-row__input"  name="data[robot]" placeholder="Сколько будет <?=$r1?> + <?=$r2?>?" type="text" required>	
								</div>
							</div> -->
							<textarea style="display:none" class="result-textarea" name="data[senddata]"></textarea>
							<div class="section-row">
								<div class="section-row__inner">
									<button type="text" class="section-row__button btn">Отправить</button>
								</div>	
							</div>																												
						</div>
					</form>
					<div class="result-div"></div>
				</div>																				
			</div>
			<div class="test_error_msg test_error">Ответьте на все вопросы, чтобы перейти дальше</div>
			<div class="test_error_msg form_error">Ответьте на все вопросы, чтобы отправить заявку</div>
			<div class="test_error_msg checkBox_error">Нужно выбрать хотя бы 1 вариант из каждой строки</div>
		</div>		
	</div>												
</div>