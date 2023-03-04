<div class="content">
	<div class="content-top">
		<div class="container">
			<?php echo $this->element('breadcrumbs') ?>
			<h1 class="title">
				Онлайн тест Teens
			</h1>

		</div>
	</div>
	<div class="section tests teen-test" data-name="Teen">
		<div class="container">
			<!-- <div class="test-ul">
				<div class="test-ul__item test-ul__item--active test-ul__item--grammar"><span>Grammar</span></div>
				<div class="test-ul__item test-ul__item--reading"><span>Reading</span></div>

				<div class="test-ul__item test-ul__item--listening"><span>Listening</span></div>

				<div class="test-ul__item test-ul__item--writing"><span>Writing</span></div>
				<div class="test-ul__item test-ul__item--speaking"><span>Speaking</span></div>
			</div> -->
			<nav class="page-header-nav">
				<ul>
					<li class="tab-sec active"><a href="javascript:;">Grammar</a></li>
					<li class="tab-sec"><a href="javascript:;">Reading</a></li>
					<li class="tab-sec"><a href="javascript:;">Listening</a></li>
					<li class="tab-sec"><a href="javascript:;">Writing</a></li>
					<li class="tab-sec"><a href="javascript:;">Speaking</a></li>
				</ul>
			</nav>
			<div class="test-slider teen_test_slider">
				<div class="test-part js-test-part test-part--active test-part--grammar tab-items active">
					<!-- <span class="test-part__heading">Section Grammar</span> -->
					<h2 class="title-sec" data-sec="grammar">Section Grammar</h2>
					<div class="tests-row">
						<div class="test-row__inner test-row">
							<div class="question">
								<span class="question__heading">1. She _____ American. </span>
								<div class="question-row">
									<input id="q1a1" name="q1" class="question-row__input" type="radio">
									<label for="q1a1" class="question-row__text">are</label>
								</div>
								<div class="question-row">
									<input id="q1a2" name="q1" class="question-row__input" type="radio">
									<label for="q1a2" class="question-row__text">is</label>
								</div>
								<div class="question-row">
									<input id="q1a3" name="q1" class="question-row__input" type="radio">
									<label for="q1a3" class="question-row__text">am</label>
								</div>
								<!-- <div class="question-row">
									<input id="q1a4" name="q1" class="question-row__input" type="radio">
									<label for="q1a4" class="question-row__text">-</label>
								</div> -->
							</div>
							<div class="question">
								<span class="question__heading">2. ______ they doctors? </span>
								<div class="question-row">
									<input id="q2a1" name="q2" class="question-row__input" type="radio">
									<label for="q2a1" class="question-row__text">Am</label>
								</div>
								<div class="question-row">
									<input id="q2a2" name="q2" class="question-row__input" type="radio">
									<label for="q2a2" class="question-row__text">Are</label>
								</div>
								<div class="question-row">
									<input id="q2a3" name="q2" class="question-row__input" type="radio">
									<label for="q2a3" class="question-row__text">Is</label>
								</div>
								<!-- <div class="question-row">
									<input id="q2a4" name="q2" class="question-row__input" type="radio">
									<label for="q2a4" class="question-row__text">Was</label>
								</div> -->
							</div>
							<div class="question">
								<span class="question__heading">3. Jane ______ TV every evening.</span>
								<div class="question-row">
									<input id="q3a1" name="q3" class="question-row__input" type="radio">
									<label for="q3a1" class="question-row__text">watch</label>
								</div>
								<div class="question-row">
									<input id="q3a2" name="q3" class="question-row__input" type="radio">
									<label for="q3a2" class="question-row__text">watches</label>
								</div>
								<div class="question-row">
									<input id="q3a3" name="q3" class="question-row__input" type="radio">
									<label for="q3a3" class="question-row__text">watching</label>
								</div>
								<!-- <div class="question-row">
									<input id="q3a4" name="q3" class="question-row__input" type="radio">
									<label for="q3a4" class="question-row__text">aren't</label>
								</div> -->
							</div>
							<div class="question">
								<span class="question__heading">4. I never play computer games. I ______ them.</span>
								<div class="question-row">
									<input id="q4a1" name="q4" class="question-row__input" type="radio">
									<label for="q4a1" class="question-row__text">doesn’t like</label>
								</div>
								<div class="question-row">
									<input id="q4a2" name="q4" class="question-row__input" type="radio">
									<label for="q4a2" class="question-row__text">don’t like</label>
								</div>
								<div class="question-row">
									<input id="q4a3" name="q4" class="question-row__input" type="radio">
									<label for="q4a3" class="question-row__text">’m not liking</label>
								</div>
								<!-- <div class="question-row">
									<input id="q4a4" name="q4" class="question-row__input" type="radio">
									<label for="q4a4" class="question-row__text">is have</label>
								</div> -->
							</div>
							<div class="question">
								<span class="question__heading">5. I like swimming. But today I _______ tennis.</span>
								<div class="question-row">
									<input id="q5a1" name="q5" class="question-row__input" type="radio">
									<label for="q5a1" class="question-row__text">’m playing</label>
								</div>
								<div class="question-row">
									<input id="q5a2" name="q5" class="question-row__input" type="radio">
									<label for="q5a2" class="question-row__text">play</label>
								</div>
								<div class="question-row">
									<input id="q5a3" name="q5" class="question-row__input" type="radio">
									<label for="q5a3" class="question-row__text">playing</label>
								</div>
								<!-- <div class="question-row">
									<input id="q5a4" name="q5" class="question-row__input" type="radio">
									<label for="q5a4" class="question-row__text">hasn't got</label>
								</div> -->
							</div>
							<div class="question">
								<span class="question__heading">6. A: What do you want for lunch? 
								B: I _____ have chicken and some salad.</span>
								<div class="question-row">
									<input id="q6a1" name="q6" class="question-row__input" type="radio">
									<label for="q6a1" class="question-row__text">am</label>
								</div>
								<div class="question-row">
									<input id="q6a2" name="q6" class="question-row__input" type="radio">
									<label for="q6a2" class="question-row__text">will</label>
								</div>
								<div class="question-row">
									<input id="q6a3" name="q6" class="question-row__input" type="radio">
									<label for="q6a3" class="question-row__text">am going</label>
								</div>
								<!-- <div class="question-row">
									<input id="q6a4" name="q6" class="question-row__input" type="radio">
									<label for="q6a4" class="question-row__text">got</label>
								</div> -->
							</div>
							<div class="question">
								<span class="question__heading">7. There isn’t _____ cheese in my sandwich.</span>
								<div class="question-row">
									<input id="q7a1" name="q7" class="question-row__input" type="radio">
									<label for="q7a1" class="question-row__text">much</label>
								</div>
								<div class="question-row">
									<input id="q7a2" name="q7" class="question-row__input" type="radio">
									<label for="q7a2" class="question-row__text">many</label>
								</div>
								<div class="question-row">
									<input id="q7a3" name="q7" class="question-row__input" type="radio">
									<label for="q7a3" class="question-row__text">few</label>
								</div>
								<!-- <div class="question-row">
									<input id="q7a4" name="q7" class="question-row__input" type="radio">
									<label for="q7a4" class="question-row__text">gets up</label>
								</div> -->
							</div>
							<div class="question">
								<span class="question__heading">8. I _____ Claire an email yesterday afternoon.</span>
								<div class="question-row">
									<input id="q8a1" name="q8" class="question-row__input" type="radio">
									<label for="q8a1" class="question-row__text">sent</label>
								</div>
								<div class="question-row">
									<input id="q8a2" name="q8" class="question-row__input" type="radio">
									<label for="q8a2" class="question-row__text">send</label>
								</div>
								<div class="question-row">
									<input id="q8a3" name="q8" class="question-row__input" type="radio">
									<label for="q8a3" class="question-row__text">sended</label>
								</div>
								<!-- <div class="question-row">
									<input id="q8a4" name="q8" class="question-row__input" type="radio">
									<label for="q8a4" class="question-row__text">don't liking</label>
								</div> -->
							</div>
							<div class="question">
								<span class="question__heading">9. The boys _______ football last Sunday.</span>
								<div class="question-row">
									<input id="q9a1" name="q9" class="question-row__input" type="radio">
									<label for="q9a1" class="question-row__text">didn’t play</label>
								</div>
								<div class="question-row">
									<input id="q9a2" name="q9" class="question-row__input" type="radio">
									<label for="q9a2" class="question-row__text">wasn’t play</label>
								</div>
								<div class="question-row">
									<input id="q9a3" name="q9" class="question-row__input" type="radio">
									<label for="q9a3" class="question-row__text">didn’t played</label>
								</div>
								<!-- <div class="question-row">
									<input id="q9a4" name="q9" class="question-row__input" type="radio">
									<label for="q9a4" class="question-row__text">Have</label>
								</div> -->
							</div>
							<div class="question">
								<span class="question__heading">10. I ______ at 10:45 am last Wednesday.</span>
								<div class="question-row">
									<input id="q10a1" name="q10" class="question-row__input" type="radio">
									<label for="q10a1" class="question-row__text">was clean</label>
								</div>
								<div class="question-row">
									<input id="q10a2" name="q10" class="question-row__input" type="radio">
									<label for="q10a2" class="question-row__text">was cleaning</label>
								</div>
								<div class="question-row">
									<input id="q10a3" name="q10" class="question-row__input" type="radio">
									<label for="q10a3" class="question-row__text">clean</label>
								</div>
								<!-- <div class="question-row">
									<input id="q10a4" name="q10" class="question-row__input" type="radio">
									<label for="q10a4" class="question-row__text">have watching</label>
								</div> -->
							</div>
							<div class="question">
								<span class="question__heading">11. Helen ________ her breakfast.</span>
								<div class="question-row">
									<input id="q11a1" name="q11" class="question-row__input" type="radio">
									<label for="q11a1" class="question-row__text">have already had</label>
								</div>
								<div class="question-row">
									<input id="q11a2" name="q11" class="question-row__input" type="radio">
									<label for="q11a2" class="question-row__text">did already have</label>
								</div>
								<div class="question-row">
									<input id="q11a3" name="q11" class="question-row__input" type="radio">
									<label for="q11a3" class="question-row__text">has already had</label>
								</div>
								<!-- <div class="question-row">
									<input id="q11a4" name="q11" class="question-row__input" type="radio">
									<label for="q11a4" class="question-row__text">play</label>
								</div> -->
							</div>
							<div class="question">
								<span class="question__heading">12. _________ an elephant?</span>
								<div class="question-row">
									<input id="q12a1" name="q12" class="question-row__input" type="radio">
									<label for="q12a1" class="question-row__text">did you ever see</label>
								</div>
								<div class="question-row">
									<input id="q12a2" name="q12" class="question-row__input" type="radio">
									<label for="q12a2" class="question-row__text">will ever you see</label>
								</div>
								<div class="question-row">
									<input id="q12a3" name="q12" class="question-row__input" type="radio">
									<label for="q12a3" class="question-row__text">have you ever seen</label>
								</div>
								<!-- <div class="question-row">
									<input id="q12a4" name="q12" class="question-row__input" type="radio">
									<label for="q12a4" class="question-row__text">flying</label>
								</div> -->
							</div>
							<div class="question">
								<span class="question__heading">13. _____ I use your pencil?</span>
								<div class="question-row">
									<input id="q13a1" name="q13" class="question-row__input" type="radio">
									<label for="q13a1" class="question-row__text">can’t</label>
								</div>
								<div class="question-row">
									<input id="q13a2" name="q13" class="question-row__input" type="radio">
									<label for="q13a2" class="question-row__text">can</label>
								</div>
								<div class="question-row">
									<input id="q13a3" name="q13" class="question-row__input" type="radio">
									<label for="q13a3" class="question-row__text">must</label>
								</div>
								<!-- <div class="question-row">
									<input id="q13a4" name="q13" class="question-row__input" type="radio">
									<label for="q13a4" class="question-row__text">have</label>
								</div> -->
							</div>
							<div class="question">
								<span class="question__heading">14. She _________ speak Spanish when she was fifteen.</span>
								<div class="question-row">
									<input id="q14a1" name="q14" class="question-row__input" type="radio">
									<label for="q14a1" class="question-row__text">can</label>
								</div>
								<div class="question-row">
									<input id="q14a2" name="q14" class="question-row__input" type="radio">
									<label for="q14a2" class="question-row__text">could</label>
								</div>
								<div class="question-row">
									<input id="q14a3" name="q14" class="question-row__input" type="radio">
									<label for="q14a3" class="question-row__text">can’t</label>
								</div>
								<!-- <div class="question-row">
									<input id="q14a4" name="q14" class="question-row__input" type="radio">
									<label for="q14a4" class="question-row__text">Shall</label>
								</div> -->
							</div>
							<div class="question">
								<span class="question__heading">15. You _________ clean the floor today. I did it yesterday.</span>
								<div class="question-row">
									<input id="q15a1" name="q15" class="question-row__input" type="radio">
									<label for="q15a1" class="question-row__text">don’t have to</label>
								</div>
								<div class="question-row">
									<input id="q15a2" name="q15" class="question-row__input" type="radio">
									<label for="q15a2" class="question-row__text">mustn’t</label>
								</div>
								<div class="question-row">
									<input id="q15a3" name="q15" class="question-row__input" type="radio">
									<label for="q15a3" class="question-row__text">couldn’t</label>
								</div>
								<!-- <div class="question-row">
									<input id="q15a4" name="q15" class="question-row__input" type="radio">
									<label for="q15a4" class="question-row__text">Us</label>
								</div> -->
							</div>
							<div class="question">
								<span class="question__heading">16. My sister is ____ than me</span>
								<div class="question-row">
									<input id="q16a1" name="q16" class="question-row__input" type="radio">
									<label for="q16a1" class="question-row__text">her</label>
								</div>
								<div class="question-row">
									<input id="q16a2" name="q16" class="question-row__input" type="radio">
									<label for="q16a2" class="question-row__text">she</label>
								</div>
								<div class="question-row">
									<input id="q16a3" name="q16" class="question-row__input" type="radio">
									<label for="q16a3" class="question-row__text">hers</label>
								</div>
								<!-- <div class="question-row">
									<input id="q16a4" name="q16" class="question-row__input" type="radio">
									<label for="q16a4" class="question-row__text">shes</label>
								</div> -->
							</div>
							<div class="question">
								<span class="question__heading">17. It is _______ interesting book I have ever read.</span>
								<div class="question-row">
									<input id="q17a1" name="q17" class="question-row__input" type="radio">
									<label for="q17a1" class="question-row__text">these</label>
								</div>
								<div class="question-row">
									<input id="q17a2" name="q17" class="question-row__input" type="radio">
									<label for="q17a2" class="question-row__text">this</label>
								</div>
								<div class="question-row">
									<input id="q17a3" name="q17" class="question-row__input" type="radio">
									<label for="q17a3" class="question-row__text">those</label>
								</div>
								<!-- <div class="question-row">
									<input id="q17a4" name="q17" class="question-row__input" type="radio">
									<label for="q17a4" class="question-row__text">they</label>
								</div> -->
							</div>
							<div class="question">
								<span class="question__heading">18. The ring ____ given to me as a gift yesterday.</span>
								<div class="question-row">
									<input id="q18a1" name="q18" class="question-row__input" type="radio">
									<label for="q18a1" class="question-row__text">that</label>
								</div>
								<div class="question-row">
									<input id="q18a2" name="q18" class="question-row__input" type="radio">
									<label for="q18a2" class="question-row__text">these</label>
								</div>
								<div class="question-row">
									<input id="q18a3" name="q18" class="question-row__input" type="radio">
									<label for="q18a3" class="question-row__text">those</label>
								</div>
								<!-- <div class="question-row">
									<input id="q18a4" name="q18" class="question-row__input" type="radio">
									<label for="q18a4" class="question-row__text">she</label>
								</div> -->
							</div>
							<div class="question">
								<span class="question__heading">19. If the dog _____ barking, the neighbours ____ complain.</span>
								<div class="question-row">
									<input id="q19a1" name="q19" class="question-row__input" type="radio">
									<label for="q19a1" class="question-row__text">any</label>
								</div>
								<div class="question-row">
									<input id="q19a2" name="q19" class="question-row__input" type="radio">
									<label for="q19a2" class="question-row__text">a</label>
								</div>
								<div class="question-row">
									<input id="q19a3" name="q19" class="question-row__input" type="radio">
									<label for="q19a3" class="question-row__text">some</label>
								</div>
								<!-- <div class="question-row">
									<input id="q19a4" name="q19" class="question-row__input" type="radio">
									<label for="q19a4" class="question-row__text">they</label>
								</div> -->
							</div>
							<div class="question">
								<span class="question__heading">20. I ______ a new car, if I _____ money.</span>
								<div class="question-row">
									<input id="q20a1" name="q20" class="question-row__input" type="radio">
									<label for="q20a1" class="question-row__text">many</label>
								</div>
								<div class="question-row">
									<input id="q20a2" name="q20" class="question-row__input" type="radio">
									<label for="q20a2" class="question-row__text">some</label>
								</div>
								<div class="question-row">
									<input id="q20a3" name="q20" class="question-row__input" type="radio">
									<label for="q20a3" class="question-row__text">a</label>
								</div>
								<!-- <div class="question-row">
									<input id="q20a4" name="q20" class="question-row__input" type="radio">
									<label for="q20a4" class="question-row__text">much</label>
								</div> -->
							</div>
							<!-- <div class="question">
								<span class="question__heading">21. Claire _____ Canada last year. </span>
								<div class="question-row">
									<input id="q21a1" name="q21" class="question-row__input" type="radio">
									<label for="q21a1" class="question-row__text">visit</label>
								</div>
								<div class="question-row">
									<input id="q21a2" name="q21" class="question-row__input" type="radio">
									<label for="q21a2" class="question-row__text">visits</label>
								</div>
								<div class="question-row">
									<input id="q21a3" name="q21" class="question-row__input" type="radio">
									<label for="q21a3" class="question-row__text">visiting</label>
								</div>
								<div class="question-row">
									<input id="q21a4" name="q21" class="question-row__input" type="radio">
									<label for="q21a4" class="question-row__text">visited</label>
								</div>
							</div>
							<div class="question">
								<span class="question__heading">22. The boys _____ shopping last week.</span>
								<div class="question-row">
									<input id="q22a1" name="q22" class="question-row__input" type="radio">
									<label for="q22a1" class="question-row__text">not did go</label>
								</div>
								<div class="question-row">
									<input id="q22a2" name="q22" class="question-row__input" type="radio">
									<label for="q22a2" class="question-row__text">wasn't go</label>
								</div>
								<div class="question-row">
									<input id="q22a3" name="q22" class="question-row__input" type="radio">
									<label for="q22a3" class="question-row__text">didn't go</label>
								</div>
								<div class="question-row">
									<input id="q22a4" name="q22" class="question-row__input" type="radio">
									<label for="q22a4" class="question-row__text">didn't went</label>
								</div>
							</div>
							<div class="question">
								<span class="question__heading">23. I _____ at 10.45 am last Wednesday.</span>
								<div class="question-row">
									<input id="q23a1" name="q23" class="question-row__input" type="radio">
									<label for="q23a1" class="question-row__text">was clean</label>
								</div>
								<div class="question-row">
									<input id="q23a2" name="q23" class="question-row__input" type="radio">
									<label for="q23a2" class="question-row__text">clean</label>
								</div>
								<div class="question-row">
									<input id="q23a3" name="q23" class="question-row__input" type="radio">
									<label for="q23a3" class="question-row__text">was cleaning</label>
								</div>
								<div class="question-row">
									<input id="q23a4" name="q23" class="question-row__input" type="radio">
									<label for="q23a4" class="question-row__text">cleaning</label>
								</div>
							</div>
							<div class="question">
								<span class="question__heading">24. Mom _____ dinner, when I came home.</span>
								<div class="question-row">
									<input id="q24a1" name="q24" class="question-row__input" type="radio">
									<label for="q24a1" class="question-row__text">was cook</label>
								</div>
								<div class="question-row">
									<input id="q24a2" name="q24" class="question-row__input" type="radio">
									<label for="q24a2" class="question-row__text">was cooking</label>
								</div>
								<div class="question-row">
									<input id="q24a3" name="q24" class="question-row__input" type="radio">
									<label for="q24a3" class="question-row__text">was cooked</label>
								</div>
								<div class="question-row">
									<input id="q24a4" name="q24" class="question-row__input" type="radio">
									<label for="q24a4" class="question-row__text">cooking</label>
								</div>
							</div>
							<div class="question">
								<span class="question__heading">25. Helen _____ a lot of weight. She's very slim now. </span>
								<div class="question-row">
									<input id="q25a1" name="q25" class="question-row__input" type="radio">
									<label for="q25a1" class="question-row__text">have lost</label>
								</div>
								<div class="question-row">
									<input id="q25a2" name="q25" class="question-row__input" type="radio">
									<label for="q25a2" class="question-row__text">has lost</label>
								</div>
								<div class="question-row">
									<input id="q25a3" name="q25" class="question-row__input" type="radio">
									<label for="q25a3" class="question-row__text">lost</label>
								</div>
								<div class="question-row">
									<input id="q25a4" name="q25" class="question-row__input" type="radio">
									<label for="q25a4" class="question-row__text">have lose</label>
								</div>
							</div>
							<div class="question">
								<span class="question__heading">26. _____ ridden a horse?</span>
								<div class="question-row">
									<input id="q26a1" name="q26" class="question-row__input" type="radio">
									<label for="q26a1" class="question-row__text">Did you ever</label>
								</div>
								<div class="question-row">
									<input id="q26a2" name="q26" class="question-row__input" type="radio">
									<label for="q26a2" class="question-row__text">Will you aver</label>
								</div>
								<div class="question-row">
									<input id="q26a3" name="q26" class="question-row__input" type="radio">
									<label for="q26a3" class="question-row__text">Do you ever</label>
								</div>
								<div class="question-row">
									<input id="q26a4" name="q26" class="question-row__input" type="radio">
									<label for="q26a4" class="question-row__text">Have you ever</label>
								</div>
							</div>
							<div class="question">
								<span class="question__heading">27. _____ I use your pencil?</span>
								<div class="question-row">
									<input id="q27a1" name="q27" class="question-row__input" type="radio">
									<label for="q27a1" class="question-row__text">Can't</label>
								</div>
								<div class="question-row">
									<input id="q27a2" name="q27" class="question-row__input" type="radio">
									<label for="q27a2" class="question-row__text">Must</label>
								</div>
								<div class="question-row">
									<input id="q27a3" name="q27" class="question-row__input" type="radio">
									<label for="q27a3" class="question-row__text">Can</label>
								</div>
								<div class="question-row">
									<input id="q27a4" name="q27" class="question-row__input" type="radio">
									<label for="q27a4" class="question-row__text">Am</label>
								</div>
							</div>
							<div class="question">
								<span class="question__heading">28. Katherine is three years old. She _____ write yet. </span>
								<div class="question-row">
									<input id="q28a1" name="q28" class="question-row__input" type="radio">
									<label for="q28a1" class="question-row__text">can't</label>
								</div>
								<div class="question-row">
									<input id="q28a2" name="q28" class="question-row__input" type="radio">
									<label for="q28a2" class="question-row__text">can</label>
								</div>
								<div class="question-row">
									<input id="q28a3" name="q28" class="question-row__input" type="radio">
									<label for="q28a3" class="question-row__text">couldn't</label>
								</div>
								<div class="question-row">
									<input id="q28a4" name="q28" class="question-row__input" type="radio">
									<label for="q28a4" class="question-row__text">could</label>
								</div>
							</div>
							<div class="question">
								<span class="question__heading">29. She _____ play chess when she was 10. </span>
								<div class="question-row">
									<input id="q29a1" name="q29" class="question-row__input" type="radio">
									<label for="q29a1" class="question-row__text">can</label>
								</div>
								<div class="question-row">
									<input id="q29a2" name="q29" class="question-row__input" type="radio">
									<label for="q29a2" class="question-row__text">could</label>
								</div>
								<div class="question-row">
									<input id="q29a3" name="q29" class="question-row__input" type="radio">
									<label for="q29a3" class="question-row__text">can't</label>
								</div>
								<div class="question-row">
									<input id="q29a4" name="q29" class="question-row__input" type="radio">
									<label for="q29a4" class="question-row__text">was</label>
								</div>
							</div>
							<div class="question">
								<span class="question__heading">30. They're ill. They _____ go out today. </span>
								<div class="question-row">
									<input id="q30a1" name="q30" class="question-row__input" type="radio">
									<label for="q30a1" class="question-row__text">could</label>
								</div>
								<div class="question-row">
									<input id="q30a2" name="q30" class="question-row__input" type="radio">
									<label for="q30a2" class="question-row__text">mustn't to</label>
								</div>
								<div class="question-row">
									<input id="q30a3" name="q30" class="question-row__input" type="radio">
									<label for="q30a3" class="question-row__text">can</label>
								</div>
								<div class="question-row">
									<input id="q30a4" name="q30" class="question-row__input" type="radio">
									<label for="q30a4" class="question-row__text">can't</label>
								</div>
							</div>
							<div class="question">
								<span class="question__heading">31. You _____ pay for tickets. Entrance is free. </span>
								<div class="question-row">
									<input id="q31a1" name="q31" class="question-row__input" type="radio">
									<label for="q31a1" class="question-row__text">don't have to</label>
								</div>
								<div class="question-row">
									<input id="q31a2" name="q31" class="question-row__input" type="radio">
									<label for="q31a2" class="question-row__text">can't</label>
								</div>
								<div class="question-row">
									<input id="q31a3" name="q31" class="question-row__input" type="radio">
									<label for="q31a3" class="question-row__text">couldn't</label>
								</div>
								<div class="question-row">
									<input id="q31a4" name="q31" class="question-row__input" type="radio">
									<label for="q31a4" class="question-row__text">didn't</label>
								</div>
							</div>
							<div class="question">
								<span class="question__heading">32. She behaves very _____. </span>
								<div class="question-row">
									<input id="q32a1" name="q32" class="question-row__input" type="radio">
									<label for="q32a1" class="question-row__text">good</label>
								</div>
								<div class="question-row">
									<input id="q32a2" name="q32" class="question-row__input" type="radio">
									<label for="q32a2" class="question-row__text">goodly</label>
								</div>
								<div class="question-row">
									<input id="q32a3" name="q32" class="question-row__input" type="radio">
									<label for="q32a3" class="question-row__text">well</label>
								</div>
								<div class="question-row">
									<input id="q32a4" name="q32" class="question-row__input" type="radio">
									<label for="q32a4" class="question-row__text">better</label>
								</div>
							</div>
							<div class="question">
								<span class="question__heading">33. Mark loves driving his _____ new sports car. </span>
								<div class="question-row">
									<input id="q33a1" name="q33" class="question-row__input" type="radio">
									<label for="q33a1" class="question-row__text">expensively</label>
								</div>
								<div class="question-row">
									<input id="q33a2" name="q33" class="question-row__input" type="radio">
									<label for="q33a2" class="question-row__text">expense</label>
								</div>
								<div class="question-row">
									<input id="q33a3" name="q33" class="question-row__input" type="radio">
									<label for="q33a3" class="question-row__text">more expensive</label>
								</div>
								<div class="question-row">
									<input id="q33a4" name="q33" class="question-row__input" type="radio">
									<label for="q33a4" class="question-row__text">expensive</label>
								</div>
							</div>
							<div class="question">
								<span class="question__heading">34. Elephants are _____ than monkeys. </span>
								<div class="question-row">
									<input id="q34a1" name="q34" class="question-row__input" type="radio">
									<label for="q34a1" class="question-row__text">biger</label>
								</div>
								<div class="question-row">
									<input id="q34a2" name="q34" class="question-row__input" type="radio">
									<label for="q34a2" class="question-row__text">big</label>
								</div>
								<div class="question-row">
									<input id="q34a3" name="q34" class="question-row__input" type="radio">
									<label for="q34a3" class="question-row__text">bigger</label>
								</div>
								<div class="question-row">
									<input id="q34a4" name="q34" class="question-row__input" type="radio">
									<label for="q34a4" class="question-row__text">biggest</label>
								</div>
							</div>
							<div class="question">
								<span class="question__heading">35. It is _____ expensive car in the world.</span>
								<div class="question-row">
									<input id="q35a1" name="q35" class="question-row__input" type="radio">
									<label for="q35a1" class="question-row__text">the most</label>
								</div>
								<div class="question-row">
									<input id="q35a2" name="q35" class="question-row__input" type="radio">
									<label for="q35a2" class="question-row__text">the more</label>
								</div>
								<div class="question-row">
									<input id="q35a3" name="q35" class="question-row__input" type="radio">
									<label for="q35a3" class="question-row__text">more</label>
								</div>
								<div class="question-row">
									<input id="q35a4" name="q35" class="question-row__input" type="radio">
									<label for="q35a4" class="question-row__text">most</label>
								</div>
							</div>
							<div class="question">
								<span class="question__heading">36. Paper _____ made of wood.</span>
								<div class="question-row">
									<input id="q36a1" name="q36" class="question-row__input" type="radio">
									<label for="q36a1" class="question-row__text">are</label>
								</div>
								<div class="question-row">
									<input id="q36a2" name="q36" class="question-row__input" type="radio">
									<label for="q36a2" class="question-row__text">were</label>
								</div>
								<div class="question-row">
									<input id="q36a3" name="q36" class="question-row__input" type="radio">
									<label for="q36a3" class="question-row__text">have</label>
								</div>
								<div class="question-row">
									<input id="q36a4" name="q36" class="question-row__input" type="radio">
									<label for="q36a4" class="question-row__text">is</label>
								</div>
							</div>
							<div class="question">
								<span class="question__heading">37. The ring _____ to me as a gift yesterday.</span>
								<div class="question-row">
									<input id="q37a1" name="q37" class="question-row__input" type="radio">
									<label for="q37a1" class="question-row__text">is given</label>
								</div>
								<div class="question-row">
									<input id="q37a2" name="q37" class="question-row__input" type="radio">
									<label for="q37a2" class="question-row__text">were given</label>
								</div>
								<div class="question-row">
									<input id="q37a3" name="q37" class="question-row__input" type="radio">
									<label for="q37a3" class="question-row__text">was give</label>
								</div>
								<div class="question-row">
									<input id="q37a4" name="q37" class="question-row__input" type="radio">
									<label for="q37a4" class="question-row__text">was given</label>
								</div>
							</div>
							<div class="question">
								<span class="question__heading">38. If it _____, I _____ at home.</span>
								<div class="question-row">
									<input id="q38a1" name="q38" class="question-row__input" type="radio">
									<label for="q38a1" class="question-row__text">rains, stays</label>
								</div>
								<div class="question-row">
									<input id="q38a2" name="q38" class="question-row__input" type="radio">
									<label for="q38a2" class="question-row__text">rain, will stay</label>
								</div>
								<div class="question-row">
									<input id="q38a3" name="q38" class="question-row__input" type="radio">
									<label for="q38a3" class="question-row__text">rains, will stay</label>
								</div>
								<div class="question-row">
									<input id="q38a4" name="q38" class="question-row__input" type="radio">
									<label for="q38a4" class="question-row__text">rain, stay</label>
								</div>
							</div>
							<div class="question">
								<span class="question__heading">39. If I _____ the lottery, I _____ a new car.</span>
								<div class="question-row">
									<input id="q39a1" name="q39" class="question-row__input" type="radio">
									<label for="q39a1" class="question-row__text">won, buy</label>
								</div>
								<div class="question-row">
									<input id="q39a2" name="q39" class="question-row__input" type="radio">
									<label for="q39a2" class="question-row__text">won, would buy</label>
								</div>
								<div class="question-row">
									<input id="q39a3" name="q39" class="question-row__input" type="radio">
									<label for="q39a3" class="question-row__text">won, would bought</label>
								</div>
								<div class="question-row">
									<input id="q39a4" name="q39" class="question-row__input" type="radio">
									<label for="q39a4" class="question-row__text">won, bought</label>
								</div>
							</div>
							<div class="question">
								<span class="question__heading">40. We visited the house _____ our father was born.</span>
								<div class="question-row">
									<input id="q40a1" name="q40" class="question-row__input" type="radio">
									<label for="q40a1" class="question-row__text">when</label>
								</div>
								<div class="question-row">
									<input id="q40a2" name="q40" class="question-row__input" type="radio">
									<label for="q40a2" class="question-row__text">who</label>
								</div>
								<div class="question-row">
									<input id="q40a3" name="q40" class="question-row__input" type="radio">
									<label for="q40a3" class="question-row__text">which</label>
								</div>
								<div class="question-row">
									<input id="q40a4" name="q40" class="question-row__input" type="radio">
									<label for="q40a4" class="question-row__text">where</label>
								</div>
							</div> -->
						</div>
					</div>
					<div class="test-row">
						<div class="test-row__inner">
						</div>
					</div>

					<!-- <div class="test_row">
						<p class="question__heading">Match the opposite words</p>
						<div class="test_table opposite_words">
							<table>
								<tbody>
									<tr>
										<td>&nbsp;</td>
										<td>worst</td>
										<td>lazy</td>
										<td>tall</td>
										<td>fat</td>
										<td>fast</td>
										<td>boring</td>
										<td>old</td>
										<td>wrong</td>
										<td>serious</td>
									</tr>
									<tr>
										<td>slow</td>
										<td><input class="input-checkbox input-checkbox--grammar" type="checkbox" id="word_c1_r1" name="row_1" data-name="slow - worst"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="checkbox" id="word_c2_r1" name="row_1" data-name="slow - lazy"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="checkbox" id="word_c3_r1" name="row_1" data-name="slow - tall"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="checkbox" id="word_c4_r1" name="row_1" data-name="slow - fat"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="checkbox" id="word_c5_r1" name="row_1" data-name="slow - fast"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="checkbox" id="word_c6_r1" name="row_1" data-name="slow - boring"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="checkbox" id="word_c7_r1" name="row_1" data-name="slow - old"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="checkbox" id="word_c8_r1" name="row_1" data-name="slow - wrong"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="checkbox" id="word_c9_r1" name="row_1" data-name="slow - serious"></td>
									</tr>
									<tr>
										<td>right</td>
										<td><input class="input-checkbox input-checkbox--grammar" type="checkbox" id="word_c1_r2" name="row_2" data-name="right - worst"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="checkbox" id="word_c2_r2" name="row_2" data-name="right - lazy"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="checkbox" id="word_c3_r2" name="row_2" data-name="right - tall"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="checkbox" id="word_c4_r2" name="row_2" data-name="right - fat"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="checkbox" id="word_c5_r2" name="row_2" data-name="right - fast"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="checkbox" id="word_c6_r2" name="row_2" data-name="right - boring"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="checkbox" id="word_c7_r2" name="row_2" data-name="right - old"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="checkbox" id="word_c8_r2" name="row_2" data-name="right - wrong"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="checkbox" id="word_c9_r2" name="row_2" data-name="right - serious"></td>
									</tr>
									<tr>
										<td>straight</td>
										<td><input class="input-checkbox input-checkbox--grammar" type="checkbox" id="word_c1_r3" name="row_3" data-name="straight - worst"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="checkbox" id="word_c2_r3" name="row_3" data-name="straight - lazy"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="checkbox" id="word_c3_r3" name="row_3" data-name="straight - tall"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="checkbox" id="word_c4_r3" name="row_3" data-name="straight - fat"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="checkbox" id="word_c5_r3" name="row_3" data-name="straight - fast"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="checkbox" id="word_c6_r3" name="row_3" data-name="straight - boring"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="checkbox" id="word_c7_r3" name="row_3" data-name="straight - old"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="checkbox" id="word_c8_r3" name="row_3" data-name="straight - wrong"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="checkbox" id="word_c9_r3" name="row_3" data-name="straight - serious"></td>
									</tr>
									<tr>
										<td>best</td>
										<td><input class="input-checkbox input-checkbox--grammar" type="checkbox" id="word_c1_r4" name="row_4" data-name="best - worst"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="checkbox" id="word_c2_r4" name="row_4" data-name="best - lazy"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="checkbox" id="word_c3_r4" name="row_4" data-name="best - tall"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="checkbox" id="word_c4_r4" name="row_4" data-name="best - fat"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="checkbox" id="word_c5_r4" name="row_4" data-name="best - fast"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="checkbox" id="word_c6_r4" name="row_4" data-name="best - boring"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="checkbox" id="word_c7_r4" name="row_4" data-name="best - old"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="checkbox" id="word_c8_r4" name="row_4" data-name="best - wrong"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="checkbox" id="word_c9_r4" name="row_4" data-name="best - serious"></td>
									</tr>
									<tr>
										<td>hard-working</td>
										<td><input class="input-checkbox input-checkbox--grammar" type="checkbox" id="word_c1_r5" name="row_5" data-name="hard-working - worst"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="checkbox" id="word_c2_r5" name="row_5" data-name="hard-working - lazy"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="checkbox" id="word_c3_r5" name="row_5" data-name="hard-working - tall"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="checkbox" id="word_c4_r5" name="row_5" data-name="hard-working - fat"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="checkbox" id="word_c5_r5" name="row_5" data-name="hard-working - fast"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="checkbox" id="word_c6_r5" name="row_5" data-name="hard-working - boring"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="checkbox" id="word_c7_r5" name="row_5" data-name="hard-working - old"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="checkbox" id="word_c8_r5" name="row_5" data-name="hard-working - wrong"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="checkbox" id="word_c9_r5" name="row_5" data-name="hard-working - serious"></td>
									</tr>
									<tr>
										<td>short</td>
										<td><input class="input-checkbox input-checkbox--grammar" type="checkbox" id="word_c1_r6" name="row_6" data-name="short - worst"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="checkbox" id="word_c2_r6" name="row_6" data-name="short - lazy"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="checkbox" id="word_c3_r6" name="row_6" data-name="short - tall"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="checkbox" id="word_c4_r6" name="row_6" data-name="short - fat"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="checkbox" id="word_c5_r6" name="row_6" data-name="short - fast"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="checkbox" id="word_c6_r6" name="row_6" data-name="short - boring"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="checkbox" id="word_c7_r6" name="row_6" data-name="short - old"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="checkbox" id="word_c8_r6" name="row_6" data-name="short - wrong"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="checkbox" id="word_c9_r6" name="row_6" data-name="short - serious"></td>
									</tr>
									<tr>
										<td>funny</td>
										<td><input class="input-checkbox input-checkbox--grammar" type="checkbox" id="word_c1_r7" name="row_7" data-name="funny - worst"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="checkbox" id="word_c2_r7" name="row_7" data-name="funny - lazy"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="checkbox" id="word_c3_r7" name="row_7" data-name="funny - tall"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="checkbox" id="word_c4_r7" name="row_7" data-name="funny - fat"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="checkbox" id="word_c5_r7" name="row_7" data-name="funny - fast"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="checkbox" id="word_c6_r7" name="row_7" data-name="funny - boring"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="checkbox" id="word_c7_r7" name="row_7" data-name="funny - old"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="checkbox" id="word_c8_r7" name="row_7" data-name="funny - wrong"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="checkbox" id="word_c9_r7" name="row_7" data-name="funny - serious"></td>
									</tr>
									<tr>
										<td>slim</td>
										<td><input class="input-checkbox input-checkbox--grammar" type="checkbox" id="word_c1_r8" name="row_8" data-name="slim - worst"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="checkbox" id="word_c2_r8" name="row_8" data-name="slim - lazy"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="checkbox" id="word_c3_r8" name="row_8" data-name="slim - tall"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="checkbox" id="word_c4_r8" name="row_8" data-name="slim - fat"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="checkbox" id="word_c5_r8" name="row_8" data-name="slim - fast"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="checkbox" id="word_c6_r8" name="row_8" data-name="slim - boring"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="checkbox" id="word_c7_r8" name="row_8" data-name="slim - old"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="checkbox" id="word_c8_r8" name="row_8" data-name="slim - wrong"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="checkbox" id="word_c9_r8" name="row_8" data-name="slim - serious"></td>
									</tr>
									<tr>
										<td>young</td>
										<td><input class="input-checkbox input-checkbox--grammar" type="checkbox" id="word_c1_r9" name="row_9" data-name="young - worst"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="checkbox" id="word_c2_r9" name="row_9" data-name="young - lazy"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="checkbox" id="word_c3_r9" name="row_9" data-name="young - tall"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="checkbox" id="word_c4_r9" name="row_9" data-name="young - fat"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="checkbox" id="word_c5_r9" name="row_9" data-name="young - fast"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="checkbox" id="word_c6_r9" name="row_9" data-name="young - boring"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="checkbox" id="word_c7_r9" name="row_9" data-name="young - old"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="checkbox" id="word_c8_r9" name="row_9" data-name="young - wrong"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="checkbox" id="word_c9_r9" name="row_9" data-name="young - serious"></td>
									</tr>
									<tr>
										<td>interesting</td>
										<td><input class="input-checkbox input-checkbox--grammar" type="checkbox" id="word_c1_r10" name="row_10" data-name="interesting - worst"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="checkbox" id="word_c2_r10" name="row_10" data-name="interesting - lazy"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="checkbox" id="word_c3_r10" name="row_10" data-name="interesting - tall"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="checkbox" id="word_c4_r10" name="row_10" data-name="interesting - fat"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="checkbox" id="word_c5_r10" name="row_10" data-name="interesting - fast"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="checkbox" id="word_c6_r10" name="row_10" data-name="interesting - boring"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="checkbox" id="word_c7_r10" name="row_10" data-name="interesting - old"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="checkbox" id="word_c8_r10" name="row_10" data-name="interesting - wrong"></td>
										<td><input class="input-checkbox input-checkbox--grammar" type="checkbox" id="word_c9_r10" name="row_10" data-name="interesting - serious"></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div> -->
					<div class="submit submit--grammar btn">Далее</div>
				</div>


				<div class="test-part js-test-part test-part--reading tab-items">
					<!-- <span class="test-part__heading">Section Reading</span> -->
					<h2 class="title-sec" data-sec="reading">Section Reading</h2>
					<div class="test-section">
						<!-- <span class="test-section__heading">1.	Read about this piece of England in China and answer the given questions.</span> -->
						<p>Katy is going to go with her Aunt Emma to her office today.
						Katy is asking Emma some questions about her work. What
						does Emma say?</p>
						<p>Read the conversation and choose the best answer. Write a
						letter (A-H) for each answer</p>
						<p>You do not need to use all the letters. There is one example</p>
					</div>
					<div class="tests-row">
						<div class="test-row__inner test-row">

							<div class="question">
								<span class="question__heading">Katy: Emma, is it time to go to your office?</span>
								<span class="question__heading">Emma: ...........................</span>	
								<!-- <select name="r1a1" id="r1">
									<option>A. Sometimes i sit at my desk and sometimes i go out.</option>
									<option>B. Yes, everyone did this time.</option>
									<option>C. Ok, but only when i am in a meeting.</option>
									<option>D. No, there aren't many cofes near the office</option>
									<option>E. Yes it is. I don't want to be late</option>
									<option>F. Sometimes i sit at my desk and sometimes i go out.</option>
									<option>G. I take the bus if it's raining.</option>
									<option>H. Only a few. It's a small business.</option>
								</select> -->
								<div class="question-row">
									<input id="r1a1" name="r1" class="question-row__input" type="radio">
									<label for="r1a1" class="question-row__text">A. Sometimes i sit at my desk and sometimes i go out.</label>
								</div>
								<div class="question-row">
									<input id="r1a2" name="r1" class="question-row__input" type="radio">
									<label for="r1a2" class="question-row__text">B. Yes, everyone did this time.</label>
								</div>
								<div class="question-row">
									<input id="r1a3" name="r1" class="question-row__input" type="radio">
									<label for="r1a3" class="question-row__text">C. Ok, but only when i am in a meeting.</label>
								</div>
								<div class="question-row">
									<input id="r1a4" name="r1" class="question-row__input" type="radio">
									<label for="r1a4" class="question-row__text">D. No, there aren't many cofes near the office</label>
								</div>
								<div class="question-row">
									<input id="r1a5" name="r1" class="question-row__input" type="radio">
									<label for="r1a5" class="question-row__text">E. Yes it is. I don't want to be late</label>
								</div>
								<div class="question-row">
									<input id="r1a6" name="r1" class="question-row__input" type="radio">
									<label for="r1a6" class="question-row__text">F. Sometimes i sit at my desk and sometimes i go out.</label>
								</div>
								<div class="question-row">
									<input id="r1a7" name="r1" class="question-row__input" type="radio">
									<label for="r1a7" class="question-row__text">G. I take the bus if it's raining.</label>
								</div>
								<div class="question-row">
									<input id="r1a8" name="r1" class="question-row__input" type="radio">
									<label for="r1a8" class="question-row__text">H. Only a few. It's a small business.</label>
								</div>
								<!-- <div class="question-row">
									<input id="q1a4" name="q1" class="question-row__input" type="radio">
									<label for="q1a4" class="question-row__text">-</label>
								</div> -->
							</div>
							</div>
							<div class="question">
								<span class="question__heading">Katy: Do you always walk to work?</span>
								<span class="question__heading">Emma: ...........................</span>	
								<!-- <select name="r2a1" id="r2">
									<option>A. Sometimes i sit at my desk and sometimes i go out.</option>
									<option>B. Yes, everyone did this time.</option>
									<option>C. Ok, but only when i am in a meeting.</option>
									<option>D. No, there aren't many cofes near the office</option>
									<option>E. Yes it is. I don't want to be late</option>
									<option>F. Sometimes i sit at my desk and sometimes i go out.</option>
									<option>G. I take the bus if it's raining.</option>
									<option>H. Only a few. It's a small business.</option>
								</select> -->
								<div class="question-row">
									<input id="r2a1" name="r2" class="question-row__input" type="radio">
									<label for="r2a1" class="question-row__text">A. Sometimes i sit at my desk and sometimes i go out.</label>
								</div>
								<div class="question-row">
									<input id="r2a2" name="r2" class="question-row__input" type="radio">
									<label for="r2a2" class="question-row__text">B. Yes, everyone did this time.</label>
								</div>
								<div class="question-row">
									<input id="r2a3" name="r2" class="question-row__input" type="radio">
									<label for="r2a3" class="question-row__text">C. Ok, but only when i am in a meeting.</label>
								</div>
								<div class="question-row">
									<input id="r2a4" name="r2" class="question-row__input" type="radio">
									<label for="r2a4" class="question-row__text">D. No, there aren't many cofes near the office</label>
								</div>
								<div class="question-row">
									<input id="r2a5" name="r2" class="question-row__input" type="radio">
									<label for="r2a5" class="question-row__text">E. Yes it is. I don't want to be late</label>
								</div>
								<div class="question-row">
									<input id="r2a6" name="r2" class="question-row__input" type="radio">
									<label for="r2a6" class="question-row__text">F. Sometimes i sit at my desk and sometimes i go out.</label>
								</div>
								<div class="question-row">
									<input id="r2a7" name="r2" class="question-row__input" type="radio">
									<label for="r2a7" class="question-row__text">G. I take the bus if it's raining.</label>
								</div>
								<div class="question-row">
									<input id="r2a8" name="r2" class="question-row__input" type="radio">
									<label for="r2a8" class="question-row__text">H. Only a few. It's a small business.</label>
								</div>
							</div>
							<div class="question">
								<span class="question__heading">Katy: How many people work there?</span>
								<span class="question__heading">Emma: ...........................</span>	
								<!-- <select name="r3a1" id="r3">
									<option>A. Sometimes i sit at my desk and sometimes i go out.</option>
									<option>B. Yes, everyone did this time.</option>
									<option>C. Ok, but only when i am in a meeting.</option>
									<option>D. No, there aren't many cofes near the office</option>
									<option>E. Yes it is. I don't want to be late</option>
									<option>F. Sometimes i sit at my desk and sometimes i go out.</option>
									<option>G. I take the bus if it's raining.</option>
									<option>H. Only a few. It's a small business.</option>
								</select> -->
								<div class="question-row">
									<input id="r3a1" name="r3" class="question-row__input" type="radio">
									<label for="r3a1" class="question-row__text">A. Sometimes i sit at my desk and sometimes i go out.</label>
								</div>
								<div class="question-row">
									<input id="r3a2" name="r3" class="question-row__input" type="radio">
									<label for="r3a2" class="question-row__text">B. Yes, everyone did this time.</label>
								</div>
								<div class="question-row">
									<input id="r3a3" name="r3" class="question-row__input" type="radio">
									<label for="r3a3" class="question-row__text">C. Ok, but only when i am in a meeting.</label>
								</div>
								<div class="question-row">
									<input id="r3a4" name="r3" class="question-row__input" type="radio">
									<label for="r3a4" class="question-row__text">D. No, there aren't many cofes near the office</label>
								</div>
								<div class="question-row">
									<input id="r3a5" name="r3" class="question-row__input" type="radio">
									<label for="r3a5" class="question-row__text">E. Yes it is. I don't want to be late</label>
								</div>
								<div class="question-row">
									<input id="r3a6" name="r3" class="question-row__input" type="radio">
									<label for="r3a6" class="question-row__text">F. Sometimes i sit at my desk and sometimes i go out.</label>
								</div>
								<div class="question-row">
									<input id="r3a7" name="r3" class="question-row__input" type="radio">
									<label for="r3a7" class="question-row__text">G. I take the bus if it's raining.</label>
								</div>
								<div class="question-row">
									<input id="r3a8" name="r3" class="question-row__input" type="radio">
									<label for="r3a8" class="question-row__text">H. Only a few. It's a small business.</label>
								</div>
							</div>
							<div class="question">
								<span class="question__heading">Katy: Where do you eat your lunch?</span>
								<span class="question__heading">Emma: ...........................</span>	
								<!-- <select name="r4a1" id="r4">
									<option>A. Sometimes i sit at my desk and sometimes i go out.</option>
									<option>B. Yes, everyone did this time.</option>
									<option>C. Ok, but only when i am in a meeting.</option>
									<option>D. No, there aren't many cofes near the office</option>
									<option>E. Yes it is. I don't want to be late</option>
									<option>F. Sometimes i sit at my desk and sometimes i go out.</option>
									<option>G. I take the bus if it's raining.</option>
									<option>H. Only a few. It's a small business.</option>
								</select> -->
								<div class="question-row">
									<input id="r4a1" name="r4" class="question-row__input" type="radio">
									<label for="r4a1" class="question-row__text">A. Sometimes i sit at my desk and sometimes i go out.</label>
								</div>
								<div class="question-row">
									<input id="r4a2" name="r4" class="question-row__input" type="radio">
									<label for="r4a2" class="question-row__text">B. Yes, everyone did this time.</label>
								</div>
								<div class="question-row">
									<input id="r4a3" name="r4" class="question-row__input" type="radio">
									<label for="r4a3" class="question-row__text">C. Ok, but only when i am in a meeting.</label>
								</div>
								<div class="question-row">
									<input id="r4a4" name="r4" class="question-row__input" type="radio">
									<label for="r4a4" class="question-row__text">D. No, there aren't many cofes near the office</label>
								</div>
								<div class="question-row">
									<input id="r4a5" name="r4" class="question-row__input" type="radio">
									<label for="r4a5" class="question-row__text">E. Yes it is. I don't want to be late</label>
								</div>
								<div class="question-row">
									<input id="r4a6" name="r4" class="question-row__input" type="radio">
									<label for="r4a6" class="question-row__text">F. Sometimes i sit at my desk and sometimes i go out.</label>
								</div>
								<div class="question-row">
									<input id="r4a7" name="r4" class="question-row__input" type="radio">
									<label for="r4a7" class="question-row__text">G. I take the bus if it's raining.</label>
								</div>
								<div class="question-row">
									<input id="r4a8" name="r4" class="question-row__input" type="radio">
									<label for="r4a8" class="question-row__text">H. Only a few. It's a small business.</label>
								</div>
							</div>
							<div class="question">
								<span class="question__heading">Katy: Can i play on the computer in your office?</span>
								<span class="question__heading">Emma: ...........................</span>	
								<!-- <select name="r5a1" id="r5">
									<option>A. Sometimes i sit at my desk and sometimes i go out.</option>
									<option>B. Yes, everyone did this time.</option>
									<option>C. Ok, but only when i am in a meeting.</option>
									<option>D. No, there aren't many cofes near the office</option>
									<option>E. Yes it is. I don't want to be late</option>
									<option>F. Sometimes i sit at my desk and sometimes i go out.</option>
									<option>G. I take the bus if it's raining.</option>
									<option>H. Only a few. It's a small business.</option>
								</select> -->
								<div class="question-row">
									<input id="r5a1" name="r5" class="question-row__input" type="radio">
									<label for="r5a1" class="question-row__text">A. Sometimes i sit at my desk and sometimes i go out.</label>
								</div>
								<div class="question-row">
									<input id="r5a2" name="r5" class="question-row__input" type="radio">
									<label for="r5a2" class="question-row__text">B. Yes, everyone did this time.</label>
								</div>
								<div class="question-row">
									<input id="r5a3" name="r5" class="question-row__input" type="radio">
									<label for="r5a3" class="question-row__text">C. Ok, but only when i am in a meeting.</label>
								</div>
								<div class="question-row">
									<input id="r5a4" name="r5" class="question-row__input" type="radio">
									<label for="r5a4" class="question-row__text">D. No, there aren't many cofes near the office</label>
								</div>
								<div class="question-row">
									<input id="r5a5" name="r5" class="question-row__input" type="radio">
									<label for="r5a5" class="question-row__text">E. Yes it is. I don't want to be late</label>
								</div>
								<div class="question-row">
									<input id="r5a6" name="r5" class="question-row__input" type="radio">
									<label for="r5a6" class="question-row__text">F. Sometimes i sit at my desk and sometimes i go out.</label>
								</div>
								<div class="question-row">
									<input id="r5a7" name="r5" class="question-row__input" type="radio">
									<label for="r5a7" class="question-row__text">G. I take the bus if it's raining.</label>
								</div>
								<div class="question-row">
									<input id="r5a8" name="r5" class="question-row__input" type="radio">
									<label for="r5a8" class="question-row__text">H. Only a few. It's a small business.</label>
								</div>
							</div>
							<div class="question">
								<span class="question__heading">Katy: What time do you come home?</span>
								<span class="question__heading">Emma: ...........................</span>	
								<!-- <select name="r6a1" id="r6">
									<option>A. Sometimes i sit at my desk and sometimes i go out.</option>
									<option>B. Yes, everyone did this time.</option>
									<option>C. Ok, but only when i am in a meeting.</option>
									<option>D. No, there aren't many cofes near the office</option>
									<option>E. Yes it is. I don't want to be late</option>
									<option>F. Sometimes i sit at my desk and sometimes i go out.</option>
									<option>G. I take the bus if it's raining.</option>
									<option>H. Only a few. It's a small business.</option>
								</select> -->
								<div class="question-row">
									<input id="r6a1" name="r6" class="question-row__input" type="radio">
									<label for="r6a1" class="question-row__text">A. Sometimes i sit at my desk and sometimes i go out.</label>
								</div>
								<div class="question-row">
									<input id="r6a2" name="r6" class="question-row__input" type="radio">
									<label for="r6a2" class="question-row__text">B. Yes, everyone did this time.</label>
								</div>
								<div class="question-row">
									<input id="r6a3" name="r6" class="question-row__input" type="radio">
									<label for="r6a3" class="question-row__text">C. Ok, but only when i am in a meeting.</label>
								</div>
								<div class="question-row">
									<input id="r6a4" name="r6" class="question-row__input" type="radio">
									<label for="r6a4" class="question-row__text">D. No, there aren't many cofes near the office</label>
								</div>
								<div class="question-row">
									<input id="r6a5" name="r6" class="question-row__input" type="radio">
									<label for="r6a5" class="question-row__text">E. Yes it is. I don't want to be late</label>
								</div>
								<div class="question-row">
									<input id="r6a6" name="r6" class="question-row__input" type="radio">
									<label for="r6a6" class="question-row__text">F. Sometimes i sit at my desk and sometimes i go out.</label>
								</div>
								<div class="question-row">
									<input id="r6a7" name="r6" class="question-row__input" type="radio">
									<label for="r6a7" class="question-row__text">G. I take the bus if it's raining.</label>
								</div>
								<div class="question-row">
									<input id="r6a8" name="r6" class="question-row__input" type="radio">
									<label for="r6a8" class="question-row__text">H. Only a few. It's a small business.</label>
								</div>
							</div>
							<!-- <div class="question">
								<span class="question__heading">1. Her working day starts late.</span>
								<div class="question-row">
									<input id="r1a1" name="r1" class="question-row__input" type="radio">
									<label for="r1a1" class="question-row__text">True</label>
								</div>
								<div class="question-row">
									<input id="r1a2" name="r1" class="question-row__input" type="radio">
									<label for="r1a2" class="question-row__text">False</label>
								</div>
							</div>
							<div class="question">
								<span class="question__heading">2. She's a television journalist.</span>
								<div class="question-row">
									<input id="r2a1" name="r2" class="question-row__input" type="radio">
									<label for="r2a1" class="question-row__text">True</label>
								</div>
								<div class="question-row">
									<input id="r2a2" name="r2" class="question-row__input" type="radio">
									<label for="r2a2" class="question-row__text">False</label>
								</div>
							</div>
							<div class="question">
								<span class="question__heading">3. She doesn't drive her car to work.</span>
								<div class="question-row">
									<input id="r3a1" name="r3" class="question-row__input" type="radio">
									<label for="r3a1" class="question-row__text">True</label>
								</div>
								<div class="question-row">
									<input id="r3a2" name="r3" class="question-row__input" type="radio">
									<label for="r3a2" class="question-row__text">False</label>
								</div>
							</div>
							<div class="question">
								<span class="question__heading">4. She goes home after the program finishes.</span>
								<div class="question-row">
									<input id="r4a1" name="r4" class="question-row__input" type="radio">
									<label for="r4a1" class="question-row__text">True</label>
								</div>
								<div class="question-row">
									<input id="r4a2" name="r4" class="question-row__input" type="radio">
									<label for="r4a2" class="question-row__text">False</label>
								</div>
							</div>
							<div class="question">
								<span class="question__heading">5. She likes everything about her job.</span>
								<div class="question-row">
									<input id="r5a1" name="r5" class="question-row__input" type="radio">
									<label for="r5a1" class="question-row__text">True</label>
								</div>
								<div class="question-row">
									<input id="r5a2" name="r5" class="question-row__input" type="radio">
									<label for="r5a2" class="question-row__text">False</label>
								</div>
							</div> -->
						</div>
					</div>
					<!-- <div class="test-section">
						<div class="test-section__inner">
							<div class="question question_text">
								<span class="question__heading">6. How long does "Good morning Britain" last?</span>
								<div class="question-row">
									<textarea id="r6a1" name="r6" class="question_textarea"></textarea>
								</div>
							</div>
							<div class="question question_text">
								<span class="question__heading">7. What time does Cynthia get up during the week?</span>
								<div class="question-row">
									<textarea id="r7a1" name="r7" class="question_textarea"></textarea>
								</div>
							</div>
							<div class="question question_text">
								<span class="question__heading">8. What time does Cynthia leave the studio?</span>
								<div class="question-row">
									<textarea id="r8a1" name="r8" class="question_textarea"></textarea>
								</div>
							</div>
							<div class="question question_text">
								<span class="question__heading">9. Who helps her with the housework and the ironing?</span>
								<div class="question-row">
									<textarea id="r9a1" name="r9" class="question_textarea"></textarea>
								</div>
							</div>
							<div class="question question_text">
								<span class="question__heading">10. What time does her husband get home?</span>
								<div class="question-row">
									<textarea id="r10a1" name="r10" class="question_textarea"></textarea>
								</div>
							</div>
							<br>	
						</div>
					</div> -->
					<div class="submit submit--reading btn">Далее</div>
				</div>

				<div class="test-part js-test-part test-part--listening tab-items">
					<!-- <span class="test-part__heading">Section Listening</span> -->
					<h2 class="title-sec" data-sec="listening">Section Listening</h2>
					<div class="test-section">
						<!-- <span class="test-section__heading">Watch the documentary "A haunted castle" about the four ghosts of Portchester Castle.</span> -->
						<br><br>
						<p>
							<audio src="/files/audio/teens_listening-1.mp3" controls=""></audio>
							<!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/8PQfW2P0bTA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
						</p>
					</div>
					<div class="tests-row">
						<div class="test-row__inner test-row">
							<div class="question-row question_img">
								<span class="question__heading">1. Which museum is Jack’s grandma going to work in?</span>
								<div class="question-row">
									<input id="l1a1" name="l1" class="question-row__input" type="radio">
									<label for="l1a1" class="question-row__text question_a_img">
										<span>A</span>
										<img src="/img/test/teens/teens-1.jpg" alt="">
									</label>
								</div>
								<div class="question-row">
									<input id="l1a2" name="l1" class="question-row__input" type="radio">
									<label for="l1a2" class="question-row__text question_a_img">
										<span>B</span>
										<img src="/img/test/teens/teens-2.jpg" alt="">
									</label>
								</div>
								<div class="question-row">
									<input id="l1a3" name="l1" class="question-row__input" type="radio">
									<label for="l1a3" class="question-row__text question_a_img">
										<span>C</span>
										<img src="/img/test/teens/teens-3.jpg" alt="">
									</label>
								</div>
							</div>
							<div class="question-row question_img">
								<span class="question__heading">2. What does Jack enjoy doing most in museums?</span>
								<div class="question-row">
									<input id="l2a1" name="l2" class="question-row__input" type="radio">
									<label for="l2a1" class="question-row__text question_a_img">
										<span>A</span>
										<img src="/img/test/teens/teens-4.jpg" alt="">
									</label>
								</div>
								<div class="question-row">
									<input id="l2a2" name="l2" class="question-row__input" type="radio">
									<label for="l2a2" class="question-row__text question_a_img">
										<span>B</span>
										<img src="/img/test/teens/teens-5.jpg" alt="">
									</label>
								</div>
								<div class="question-row">
									<input id="l2a3" name="l2" class="question-row__input" type="radio">
									<label for="l2a3" class="question-row__text question_a_img">
										<span>C</span>
										<img src="/img/test/teens/teens-6.jpg" alt="">
									</label>
								</div>
							</div>
							<div class="question-row question_img">
								<span class="question__heading">3. What is the most interesting thing in the museum?</span>
								<div class="question-row">
									<input id="l3a1" name="l3" class="question-row__input" type="radio">
									<label for="l3a1" class="question-row__text question_a_img">
										<span>A</span>
										<img src="/img/test/teens/teens-7.jpg" alt="">
									</label>
								</div>
								<div class="question-row">
									<input id="l3a2" name="l3" class="question-row__input" type="radio">
									<label for="l3a2" class="question-row__text question_a_img">
										<span>B</span>
										<img src="/img/test/teens/teens-8.jpg" alt="">
									</label>
								</div>
								<div class="question-row">
									<input id="l3a3" name="l3" class="question-row__input" type="radio">
									<label for="l3a3" class="question-row__text question_a_img">
										<span>C</span>
										<img src="/img/test/teens/teens-9.jpg" alt="">
									</label>
								</div>
							</div>
							<div class="question-row question_img">
								<span class="question__heading">4. What is Jack’s grandma going to do in the museum?</span>
								<div class="question-row">
									<input id="l4a1" name="l4" class="question-row__input" type="radio">
									<label for="l4a1" class="question-row__text question_a_img">
										<span>A</span>
										<img src="/img/test/teens/teens-10.jpg" alt="">
									</label>
								</div>
								<div class="question-row">
									<input id="l4a2" name="l4" class="question-row__input" type="radio">
									<label for="l4a2" class="question-row__text question_a_img">
										<span>B</span>
										<img src="/img/test/teens/teens-11.jpg" alt="">
									</label>
								</div>
								<div class="question-row">
									<input id="l4a3" name="l4" class="question-row__input" type="radio">
									<label for="l4a3" class="question-row__text question_a_img">
										<span>C</span>
										<img src="/img/test/teens/teens-12.jpg" alt="">
									</label>
								</div>
							</div>
							<div class="question-row question_img">
								<span class="question__heading">5. How will Jack’s grandma get to work?</span>
								<div class="question-row">
									<input id="l5a1" name="l5" class="question-row__input" type="radio">
									<label for="l5a1" class="question-row__text question_a_img">
										<span>A</span>
										<img src="/img/test/teens/teens-13.jpg" alt="">
									</label>
								</div>
								<div class="question-row">
									<input id="l5a2" name="l5" class="question-row__input" type="radio">
									<label for="l5a2" class="question-row__text question_a_img">
										<span>B</span>
										<img src="/img/test/teens/teens-14.jpg" alt="">
									</label>
								</div>
								<div class="question-row">
									<input id="l5a3" name="l5" class="question-row__input" type="radio">
									<label for="l5a3" class="question-row__text question_a_img">
										<span>C</span>
										<img src="/img/test/teens/teens-15.jpg" alt="">
									</label>
								</div>
							</div>
							<!-- <div class="question">
								<span class="question__heading">4. Elephants don't have eyelashes. </span>
								<div class="question-row">
									<input id="l4a1" name="l4" class="question-row__input" type="radio">
									<label for="l4a1" class="question-row__text">True</label>
								</div>
								<div class="question-row">
									<input id="l4a2" name="l4" class="question-row__input" type="radio">
									<label for="l4a2" class="question-row__text">False</label>
								</div>
							</div>
							<div class="question">
								<span class="question__heading">5. Adult elephants can't jump! </span>
								<div class="question-row">
									<input id="l5a1" name="l5" class="question-row__input" type="radio">
									<label for="l5a1" class="question-row__text">True</label>
								</div>
								<div class="question-row">
									<input id="l5a2" name="l5" class="question-row__input" type="radio">
									<label for="l5a2" class="question-row__text">False</label>
								</div>
							</div>
							<div class="question">
								<span class="question__heading">6. The trunk of an elephant has more muscles than the whole human body put together. </span>
								<div class="question-row">
									<input id="l6a1" name="l6" class="question-row__input" type="radio">
									<label for="l6a1" class="question-row__text">True</label>
								</div>
								<div class="question-row">
									<input id="l6a2" name="l6" class="question-row__input" type="radio">
									<label for="l6a2" class="question-row__text">False</label>
								</div>
							</div>
							<div class="question">
								<span class="question__heading">7. Elephants use sand or mud to stop getting sunburnt. </span>
								<div class="question-row">
									<input id="l7a1" name="l7" class="question-row__input" type="radio">
									<label for="l7a1" class="question-row__text">True</label>
								</div>
								<div class="question-row">
									<input id="l7a2" name="l7" class="question-row__input" type="radio">
									<label for="l7a2" class="question-row__text">False</label>
								</div>
							</div>
							<div class="question">
								<span class="question__heading">8. A female elephant is pregnant for more than two years.</span>
								<div class="question-row">
									<input id="l8a1" name="l8" class="question-row__input" type="radio">
									<label for="l8a1" class="question-row__text">True</label>
								</div>
								<div class="question-row">
									<input id="l8a2" name="l8" class="question-row__input" type="radio">
									<label for="l8a2" class="question-row__text">False</label>
								</div>
							</div> -->
						</div>
					</div>
					<!-- <p><b>Ответьте на вопросы ЗАГЛАВНЫМИ БУКВАМИ </b></p>
					<div class="tests-row">
						<div class="test-row__inner test-row">

							<div class="question question_text">
								<span class="question__heading">9. There are two types of elephants, _____ and Asian.</span>
								<div class="question-row">
									<textarea id="l9a1" name="l9" class="question_textarea js-textarea"></textarea>
								</div>
							</div>
							<div class="question question_text">
								<span class="question__heading">10. A newborn elephant weighs more than _____ pounds. </span>
								<div class="question-row">
									<textarea id="l10a1" name="l10" class="question_textarea js-textarea"></textarea>
								</div>
							</div>
							<div class="question question_text">
								<span class="question__heading">11. The African elephant is the world's largest _____ animal.</span>
								<div class="question-row">
									<textarea id="l11a1" name="l11" class="question_textarea js-textarea"></textarea>
								</div>
							</div>
							<div class="question question_text">
								<span class="question__heading">12. Elephants don't like _____. </span>
								<div class="question-row">
									<textarea id="l12a1" name="l12" class="question_textarea js-textarea"></textarea>
								</div>
							</div>
						</div>
					</div> -->
					<div class="submit submit--listening btn">Далее</div>
				</div>
				<div class="test-part js-test-part test-part--writing tab-items">
					<!-- <span class="test-part__heading">Section Writing</span> -->
					<h2 class="title-sec" data-sec="writing">Section Writing</h2>
					<div class="test-section">
						<!-- <span class="test-section__heading">1.	Read about this piece of England in China and answer the given questions.</span> -->
						<!-- <p>About my family</p>
						<p>&nbsp;</p>
						<p>From: kellycali@ainrofilac.eg</p>
						<p>To: yoko@idkwyl.ptm</p>
						<p>Subject: My family</p>
						<p>&nbsp;</p>
						<p>Dear Yoko</p>
						<p>Let me tell you about my family. I live with my mum, my dad and my big sister. We live in California. My mum’s name is Carmen. She’s Mexican and she speaks English and Spanish. She’s a Spanish teacher. She’s short and slim, she’s got long, brown hair and brown eyes. My dad’s name is David. He’s American. He’s tall and a little fat! He’s got short brown hair and blue eyes. He works in a bank. My sister Shania is 14 and she loves listening to music. She listens to music all the time! She’s got long brown hair and green eyes, like me. I’ve got long hair too. We’ve got a pet dog, Brandy. He’s black and white and very friendly.</p>
						<p>Write soon and tell me about your family.</p>
						<p>Love</p>
						<p>Kelly</p> -->
					</div>
					<br>
					<div class="writing-part">
						<div class="question question_img">
							<div class="question-row">
								<label for="l5a3" class="question-row__text question_a_img">
									<img src="/img/test/teens/teens-16.jpg" alt="">
								</label>
								<label for="l5a3" class="question-row__text question_a_img">
									<img src="/img/test/teens/teens-17.jpg" alt="">
								</label>
								<label for="l5a3" class="question-row__text question_a_img">
									<img src="/img/test/teens/teens-18.jpg" alt="">
								</label>
							</div>
						</div>
						<!-- <span class="writing-part__heading">Answer the questions below:</span><br><br> -->
						<div class="write-row">
							<span class="write-row__heading">Read the email and write about your family.</span><br>
							<textarea name="tx1_wr" class="write-row__textarea write-row__textarea--1 js-textarea"></textarea>
						</div>
					</div>
					<div class="submit submit--writing btn">Далее</div>
				</div>
				<div class="test-part test-part--speaking tab-items">
					<!-- <span class="test-part__heading">Заполните форму чтобы записаться на speaking</span> -->
					<h2 class="title-sec">Заполните форму чтобы записаться на speaking</h2>
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
							<?php $r1 = rand(1, 10);
							$r2 = rand(1, 10); ?>
							<!-- <input name="data[r1]" value="<?= $r1 ?>"  type="hidden">
                        <input name="data[r2]" value="<?= $r2 ?>"  type="hidden"> -->
							<div class="g-recaptcha" data-sitekey="6LffIpccAAAAAJfPSByDZuJgvbBuEcUIQRaZo3fy" style="margin-bottom: 20px;"></div>

							<input name="url" value="<?php echo Router::url(null, true) ?>" type="hidden">
							<!-- <div class="section-row">
							<div class="section-row__inner">
								  <input class="section-row__input"  name="data[robot]" placeholder="Сколько будет <?= $r1 ?> + <?= $r2 ?>?" type="text" required>	
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

		</div>


	</div>
	<div class="test_error_msg test_error">Ответьте на все вопросы, чтобы перейти дальше</div>
	<div class="test_error_msg form_error">Ответьте на все вопросы, чтобы отправить заявку</div>
	<div class="test_error_msg checkBox_error">Нужно выбрать хотя бы 1 вариант из каждой строки</div>
</div>
</div>
</div>