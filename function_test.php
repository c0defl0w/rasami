<?php 

			function warning($navn){
				// echo "Navnet: ".  $navn . " er ikke velkommen her. Find nærmeste udgang omgående.";
				$output = "Navnet: ".  $navn . " er ikke velkommen her. Find nærmeste udgang omgående.";

				return $output;

			}


			function Change_index($array){
				if (!is_array($array)) {
					$output = "Dit argument er ikke et array, prøv igen";
				}
				else{
					foreach ($array as $key => $person) {

						// if ($person == "Per") {
						// 	return warning($person);
						// }

						$key++;
					
						$output[ $key ] = $person;

					}

				}
				return $output;
			}

			$test = "String";

			$navne = array("Jens", "Hans", "Ole", "Per", "Jannik");

			$navne = Change_index($navne);

			// echo $navne;

				echo '<pre>Indholdet af $navne<br/>';
			
				print_r($navne);
			
				echo '</pre>';

			// foreach ($navne as $navn) {
			// 	echo $navn . "<br>";
			// }

				
?>

<!-- <p>avnet:</p> -->