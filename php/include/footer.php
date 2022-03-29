<div class="info">
    <h1><?php include 'php/date.php'; ?></h1>
    <p>
        <?php if ($day == 1) {echo '<u>';} else {echo '';} ?>Maandag: 10:00 - 18:00<?php if ($day == 1) {echo '</u>';} else {echo '';} ?><br />
        <?php if ($day == 2) {echo '<u>';} else {echo '';} ?>Dinsdag: 10:00 - 18:00<?php if ($day == 2) {echo '</u>';} else {echo '';} ?><br />
        <?php if ($day == 3) {echo '<u>';} else {echo '';} ?>Woensdag: 10:00 - 18:00<?php if ($day == 3) {echo '</u>';} else {echo '';} ?><br />
        <?php if ($day == 4) {echo '<u>';} else {echo '';} ?>Donderdag: 10:00 - 18:00<?php if ($day == 4) {echo '</u>';} else {echo '';} ?><br />
        <?php if ($day == 5) {echo '<u>';} else {echo '';} ?>Vrijdag: 10:00 - 18:00<?php if ($day == 5) {echo '</u>';} else {echo '';} ?><br />
        <?php if ($day == 6) {echo '<u>';} else {echo '';} ?>Zaterdag: 12:00 - 17:00<?php if ($day == 6) {echo '</u>';} else {echo '';} ?><br />
        <?php if ($day == 7) {echo '<u>';} else {echo '';} ?>Zondag: Gesloten<?php if ($day == 7) {echo '</u>';} else {echo '';} ?>
    </p>
</div>