<?php
include('brad30func.php');
?>
1.完全隨機:<?php
echo createTWIdByRandom();
?>
<hr/>
2.女生:<?php echo createTWIdByGender(false);
?>
<hr/>
3.男生:<?php echo createTWIdByGender(true);
?>
<hr/>
4.彰化(N):<?php echo createTWIdByArea('N');
?>
<hr/>
5.嘉義(Q)/女生:<?php echo createTWIdByBoth(false,'Q');