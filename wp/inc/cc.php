<?php 

		$url = $_SERVER['REQUEST_URI'];
		$url = explode('?', $url);
		$url = $url[0];

		$lang = '';

		if(strpos($url, 'cz')) {
			$lang = 'cz';
		} else if (strpos($url, 'ru')) {
			$lang = 'ru';
		} else {
			$lang = 'ua';
		}

?>

<div class="cc">
    <div class="cc_banner-wrapper">
        <div class="cc_banner cc_container">
            <p class="cc_message">
                <?php 
					switch ($lang) {
					    case 'ru':
					        echo "Этот веб-сайт использует файлы cookie для предоставления услуг и анализа трафика. Используя этот сайт, вы соглашаетесь с этим.";
					        break;
					    case 'ua':
					        echo "Цей веб-сайт використовує файли cookie для надання послуг та аналізу трафіку. Використовуючи цей сайт, ви погоджуєтеся з цим.";
					        break;
					    default:
					       echo "Tento web používá k poskytování služeb a analýze návštěvnosti soubory cookie. Používáním tohoto webu s tím souhlasíte.";
					        break;
					}
				?>
            </p>
            <button type="button" class="cc_btn">
                <?php 
				switch ($lang) {
				    case 'ru':
				        echo "Понятно";
				        break;
				    case 'ua':
				        echo "Зрозуміло";
				        break;
				    default:
				       echo "Rozumím";
				        break;
				}
			?>
            </button>
        </div>
    </div>
</div>