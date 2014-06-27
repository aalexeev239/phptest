<?php 
	include 'header.php';
 ?>
<div class="container">
    <div class="row">
      <div class="col-xs-12">
				<h1>
					Просто блок
	  		</h1>
	  		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est, blanditiis. Praesentium omnis error totam, obcaecati doloribus laboriosam fugit quas. Labore, quaerat modi ipsa rem consequuntur optio. Repellat commodi natus recusandae.</p>
	  		
				
				<?php

					// if (isset($_GET['whatpage'])) {

					// 	$whatPage = $_GET['wgatpage'];

					// 	switch ($whatPage) {
							
					// 		case 'main':
					// 			require 'main.php';
					// 			break;
							
					// 		case 'contacts':
					// 			require 'contacts.php';
					// 			break;

					// 		case 'about':
					// 			require 'about.php';
					// 			break;								

					// 		default:
					// 			echo '<span class="label label-danger">Неверный запрос, чувак!</span>';
					// 	}

					// } else {
					// 	require 'main.php';
					// }
				?>				

			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<h1>создаем массив</h1>

				<?php 

				$person = [
					[
						'firstname' => 'Финн',
						'lastname' => 'Парнишка',
						'city' => 'Страна Сладостей',
						'email' => 'finn@adventuretime.com',
						'interest' => ['мечи', 'приключения'],
					],
					[
						'firstname' => 'Джейк',
						'lastname' => 'Пес',
						'city' => 'Страна Сладостей',
						'email' => 'finn@adventuretime.com',
						'interest' => ['сон'],
					],
					[
						'firstname' => 'Жевачка',
						'lastname' => 'Принцесса',
						'city' => 'Страна Сладостей',
						'email' => 'bubblegum@adventuretime.com',
						'interest' => ['наука', 'калории'],
					],
					[
						'firstname' => 'Лич',
						'lastname' => 'Злобный',
						'city' => 'Подземелье',
						'email' => 'lich@adventuretime.com',
						'interest' => ['смерть', 'всем', 'людям'],
					],
					[
						'firstname' => 'Пупырка',
						'lastname' => 'Принцесса',
						'city' => 'Страна Сладостей',
						'email' => 'pupirka@adventuretime.com',
						'interest' => ['наука', 'калории'],
					],
				];

				//echo var_dump($person);
				// foreach ($person as $key => $value) {					
				// 	$person[$key]['firstname'] = $value['lastname'];
				// 	$person[$key]['lastname'] = $value['firstname'];
				// }
				//echo '<p>Дамп 2:</p>';
				//echo var_dump($person);

				// foreach ($person as $key => &$value) {	

				// 	$lastname = $value['lastname'];
				// 	$value['lastname'] = $value['firstname'];
				// 	$value['firstname'] = $lastname;
				// }

				//echo '<p>Дамп 3:</p>';
				//echo var_dump($person);

				// echo '<p>Дамп 4:</p>';
				// sort($person);
				// echo var_dump($person);

				$personLength = count($person);
				// echo 'personLength='.$personLength;
				// echo 'personHalf='.$personHalf;
				// echo '<p>Дамп 1 половина:</p>';
				// echo var_dump(array_slice($person, 0, $personHalf));
				// echo '<p>Дамп 2 половина:</p>';
				// echo var_dump(array_slice($person, $personHalf));
				$curPage = isset($_GET['page']) ? $_GET['page'] : 1;

				// if (isset($_GET['page'])) {
				// 	$curPage = $_GET['page'];

					if ($curPage <= ceil($personLength/2)){
						echo var_dump(array_slice($person, ($curPage-1)*2, 2));
						echo '<p>Текущая страница: '.$curPage.'</p>';
					} else {
						echo '<span class="label label-warning">Сообщений больше нет</span>';
					}

					for ($i = 1; $i <= ceil($personLength/2); $i++) {
						if ($i == $curPage) {
							echo '<a href="/php-1/index.php?page='.$i.'" class="btn btn-success">page'.$i.'</a>';
						} else {
							echo '<a href="/php-1/index.php?page='.$i.'" class="btn btn-default">page'.$i.'</a>';
						}
					}
				// } else {
				// 	echo '<span class="label label-danger">Введити page в запрос, чувак!</span>';
				// }

				?>


			</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				 <?php 
				//echo var_dump($person);
				//
					echo 'До сортировки:<br>';

					foreach ($person as $key => $value) {
						echo $value['lastname'].' '.$value['firstname'].'<br>';
					}

					function personSort($a, $b){
					 	return strcmp($a['lastname'], $b['lastname']);
					}

					usort ($person, "personSort");
					
					echo '<br>После сортировки:<br>';				
					foreach ($person as $key => $value) {
						echo $value['lastname'].' '.$value['firstname'].'<br>';
					}
				?>

			</div>
		</div>
<?php 
	include 'footer.php';
?>