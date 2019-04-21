<h3>Example-6(Strict typing)</h3>
				<?php
					declare(strict_types=1);

					function sum(int $a, int $b) {
					    return $a + $b;
					}

					var_dump(sum(1, 2));
					var_dump(sum(1, 2));
					?>
				<?php
declare(strict_types=1);

function sum(int $a, int $b) {
    return $a + $b;
}

try {
    var_dump(sum(1, 2));
    var_dump(sum(1, 2));
} catch (TypeError $e) {
    echo 'Error: '.$e->getMessage();
}
?>
