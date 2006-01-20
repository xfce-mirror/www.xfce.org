<?php

$languages = array (
	"du" => 'Deutsch',
	"en" => 'English',
	"nl" => 'Nederlands',
);

class Contributors {
	
	function Developers ()
	{
		$developers = array (
			"Benedikt Meurer" => "benny at xfce.org",
			"Brian Tarricone" => "bjt23 at cornell.edu",
			"Danny Milosavljevic" => "danny_milo at yahoo.com",
			"Edscott Wilson Garcia" => "edscott at imp.mx",
			"Eduard Roccatello" => "eduard at xfce.org",
			"François Le Clainche" => "fleclainche at wanadoo.fr",
			"Jasper Huijsmans" => "jasper at xfce.org",
			"Jean-François Wauthy" => "pollux at xfce.org",
			"Olivier Fourdan" => "fourdan at xfce.org",
		);
		
		ksort ($developers);
		$list = "<blockquote>";
		foreach ($developers as $name => $email)
			$list .= '<a href="#" title="'. $email .'">'. $name .'</a>, ';
		$list .= "</blockquote>";
		return $list;
	}

	function Translators ()
	{
		$translators = array (
			"Metin Amiroff [az]" => "metin at karegen.com",
			"Ales Nyakhaychyk [be]" => "nab at mail.by",
			"Pau Rul·lan Ferragut [ca]" => "pau at correu.zigazaga.net",
			"Alois Nespor [cs]" => "Alois.Nespor at seznam.cz",
			"Moritz Heiber [de]" => "moe at xfce.org",
			"Dwayne Bailey [en_GB]" => "dwayne at translate.org.za",
			"Jaime Buffery [es]" => "nestu at lunar-linux.org",
			"Edscott Wilson Garcia [es_MX]" => "edscott at imp.mx",
			"Mart Tõnso [et]" => "Mart.Tonso at ttu.ee)", 
			"Peeter Vois [et]" => "peeter.vois at proekspert.ee",
			"Piarres Beobide Egaña [eu]" => "pi at beobide.net",
			"Abbas Izad [fa]" => "abbasizad at hotmail.com",
			"Ilkka Ollakka [fi]" => "ilkka.j.ollakka at students.oamk.fi",
			"Juha Kautto [fi]" => "kautto.juha at kolumbus.fi",
			"Jean-François Wauthy [fr]" => "pollux at xfce.org",
			"Mickal Graf [fr]" => "korbinus at linux.se",
			"Olivier Fourdan [fr]" => "fourdan at xfce.org",
			"Ankit Patel [gu]" => "ankit at redhat.com",
			"Dotan Kamber [he]" => "kamberd at yahoo.com",
			"Jonatan Perry [he]" => "Jonatan443 at walla.co.il",
			"Yuval Tanny [he]" => "tanai at int.gov.il",
			"Ravi Shrivastava [hi]" => "raviratlami at yahoo.com",
			"Szervác Attila [hu]" => "sas at 321.hu",
			"Alex Dupre [it]" => "ale at FreeBSD.org",
			"Luca Marrocco [it]" => "buildup at liber.it",
			"ByungHyun Choi [ko]" => "byunghyun.choi at gmail.com",
			"Mantas Zapolskas [lt]" => "mantaz at users.sf.net",
			"Rimas Kudelis [lt]" => "rq at akl.lt",
			"Eskild Hustvedt [nb_NO]" => "zerodogg at skolelinux.no",
			"Jasper Huijsmans [nl]" => "jasper at xfce.org",
			"Amanpreet Singh Alam [pa]" => "aalam at redhat.com",
			"Felix da Silva Costa [pt_BR]" => "felix at online.eti.br",
			"Nuno Donato [pt_PT]" => "nunodonato at zmail.pt",
			"Mişu Moldovan [ro]" => "dumol at go.ro",
			"Anthony Ivanoff [ru]" => "a-i at bk.ru)",
			"Juraj Brosz [ru]" => "Juraj.Brosz at pobox.sk",
			"Dinesh Nadarajah [ta]" => "dinesh_list at sbcglobal.net",
			"Erçin EKER [tr]" => "erc.caldera at gmx.net",
			"Maxim V. Dziumanenko [uk]" => "mvd at mylinux.com.ua",
			"Lâm Vĩnh Niên [vi]" => "nienvl at yahoo.ca",
			"Yongtao Yang [zh_CN]" => "yongtao.yang at telia.com",
			"Hydonsingore Sie [zh_TW]" => "hydonsingore at mail.educities.edu.tw",
		);
		
		ksort ($translators);
		$list = "<blockquote>";
		foreach ($translators as $name => $email)
			$list .= '<a href="#" title="'. $email .'">'. $name .'</a>, ';
		$list .= "</blockquote>";
		return $list;
	}
	
	function Webtranslators ()
	{
		$webtranslators = array (
			"Andre Lerche [de]" => "a.lerche at gmx.net",
			"Moritz Heiber [de]" => "moe at lunar-linux.org",
			"Jaime Buffery [es]" => "nestu at lunar-linux.org",
			"Sascha Ales [it]" => "europatriota at hotmail.com",
			"Anthony Ivanoff [ru]" => "a-i at bk.ru",
			"Allen Chen [zh]" => "allen_chen at xinhuanet.com",
		);
		
		ksort ($webtranslators);
		$list = "<blockquote>";
		foreach ($webtranslators as $name => $email)
			$list .= '<a href="#" title="'. $email .'">'. $name .'</a>, ';
		$list .= "</blockquote>";
		return $list;
	}

	function Contributors ()
	{
		$contributors = array (
			"Bernhard Walle" => "bernhard.walle at gmx.de",
			"Biju Chacko" => "botsie at myrealbox.com",
			"Craig Betts" => "craig.betts at dfrc.nasa.gov",
			"Ejvend Nielsen" => "prophet at sphere-x.net",
			"Erik Touve" => "etouve at earthlink.net",
			"Jens Guballa" => "j.guballa at t-online.de",
			"Jens Luedicke" => "jens at irs-net.com",
			"Joakim Andreasson" => "joakim.andreasson at gmx.net",
			"Joe Klemmer" => "klemmerj at webtrek.com",
			"Karsten Luetkewitz" => "phrep at plskthx.org",
			"Martin Loschwitz" => "madkiss at debian.org",
			"Michael Mosier" => "michael at spyonit.com",
			"Mickaël Graf" => "korbinus at xfce.org",
			"Thomas Leonard" => "tal00r at ecs.soton.ac.uk",
			"Tobias Henle" => "tobias at page23.de",
			"Xavier Maillard" => "zedek at gnu-rox.org",
		);
		
		ksort ($contributors);
		$list = "<blockquote>";
		foreach ($contributors as $name => $email)
			$list .= '<a href="#" title="'. $email .'">'. $name .'</a>, ';
		$list .= "</blockquote>";
		return $list;
	}
}

?>
