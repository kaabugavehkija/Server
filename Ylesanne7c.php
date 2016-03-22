<?php
include("Ylesanne7c_title.html");
$cramo = array(
	array('eesnimi'=>'Sten', 'perenimi'=>'Sokk', 'positsioon'=>'guard', 'pikkus'=>'180','kaal'=>'80','link'=>'http://www.bckalev.ee/mangijad/sten-sokk/','pilt'=>'http://prime-athlete.com/wp-content/uploads/2013/08/Sten_Sokk_news.jpg','synd'=>'1991'),
	array('eesnimi'=>'Rain', 'perenimi'=>'Veideman', 'positsioon'=>'guard', 'pikkus'=>'192','kaal'=>'95','link'=>'http://www.bckalev.ee/mangijad/rain-veideman-2/','pilt'=>'http://www.bckalev.ee/wp-content/uploads/2013/08/DSC2994.jpg','synd'=>'1991'),
	array('eesnimi'=>'Sten', 'perenimi'=>'Olmre', 'positsioon'=>'guard', 'pikkus'=>'190','kaal'=>'83','link'=>'http://www.bckalev.ee/mangijad/sten-olmre/','pilt'=>'http://www.bckalev.ee/wp-content/uploads/2015/01/olmre_vigastuse_saamise_p2eval-610x408.jpg','synd'=>'1995'),
	array('eesnimi'=>'Janar', 'perenimi'=>'Soo', 'positsioon'=>'guard', 'pikkus'=>'199','kaal'=>'90','link'=>'http://www.bckalev.ee/mangijad/janar-soo/','pilt'=>'http://g3.nh.ee/images/pix/520x360/xr0cq3fHYA0/10jpg-72572877.jpg','synd'=>'1991'),
	array('eesnimi'=>'Martin', 'perenimi'=>'Dorbek', 'positsioon'=>'guard', 'pikkus'=>'194','kaal'=>'84','link'=>'http://www.bckalev.ee/mangijad/martin-dorbek/','pilt'=>'http://www.favslist.com/photos/pages/x1/Martin-Dorbek-1438275466-122460.jpg','synd'=>'1991'),
	array('eesnimi'=>'Gregor', 'perenimi'=>'Arbet', 'positsioon'=>'guard', 'pikkus'=>'195','kaal'=>'98', 'link'=>'http://www.bckalev.ee/mangijad/gregor-arbet-2/','pilt'=>'http://www.eestisport.ee/images/stories/gregor_arbet_b1.jpg','synd'=>'1983')
	);
foreach($cramo as $mangija){
	include("Ylesanne7c.html");
}
?>