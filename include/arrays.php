<?php

$languages = array (
	"du" => 'Deutsch',
	"en" => 'English',
	"nl" => 'Nederlands',
);

class Contrubutors {
	
	function Developers ()
	{
		$developers = array (
			"Benedikt Meurer (benny at xfce.org)",
			"Brian Tarricone (bjt23 at cornell.edu)",
			"Danny Milosavljevic (danny_milo at yahoo.com)",
			"Edscott Wilson Garcia (edscott at imp.mx)",
			"Eduard Roccatello (eduard at xfce.org)",
			"François Le Clainche (fleclainche at wanadoo.fr)",
			"Jasper Huijsmans (jasper at xfce.org)",
			"Jean-François Wauthy (pollux at xfce.org)",
			"Olivier Fourdan (fourdan at xfce.org)",
		);
		
		$list = "<ul>";
		foreach ($developers as $name)
			$list .= '<li>'. $name .'</li>';
		$list .= "</ul>";
		return $list;
	}

	function Translators ()
	{
		$translators = array (
			"[az]"		=> array ("Metin Amiroff (metin at karegen.com)"),
			"[be]"		=> array ("Ales Nyakhaychyk (nab at mail.by)"),
			"[ca]"		=> array ("Pau Rul·lan Ferragut (pau at correu.zigazaga.net)"),
			"[cs]"		=> array ("Alois Nespor (Alois.Nespor at seznam.cz)"),
			"[de]"		=> array ("Moritz Heiber (moe at xfce.org)"),
			"[en_GB]"	=> array ("Dwayne Bailey (dwayne at translate.org.za)"),
			"[es]"		=> array ("Jaime Buffery (nestu at lunar-linux.org)"),
			"[es_MX]"	=> array ("Edscott Wilson Garcia (edscott at imp.mx)"),
			"[et]"		=> array ("Mart Tõnso (Mart.Tonso at ttu.ee)", "Peeter Vois (peeter.vois at proekspert.ee)"),
			"[eu]"		=> array ("Piarres Beobide Egaña (pi at beobide.net)"),
			"[fa]"		=> array ("Abbas Izad (abbasizad at hotmail.com)"),
			"[fi]"		=> array ("Ilkka Ollakka (ilkka.j.ollakka at students.oamk.fi)","Juha Kautto (kautto.juha at kolumbus.fi)"),
			"[fr]"		=> array ("Jean-François Wauthy (pollux at xfce.org)","Mickal Graf (korbinus at linux.se)","Olivier Fourdan (fourdan at xfce.org)"),
			"[gu]"		=> array ("Ankit Patel (ankit at redhat.com)"),
			"[he]"		=> array ("Dotan Kamber (kamberd at yahoo.com)","Jonatan Perry (Jonatan443 at walla.co.il)","Yuval Tanny (tanai at int.gov.il)"),
			"[hi]"		=> array ("Ravi Shrivastava (raviratlami at yahoo.com)"),
			"[hu]"		=> array ("Szervác Attila (sas at 321.hu)"),
			"[it]"		=> array ("Alex Dupre (ale at FreeBSD.org)","Luca Marrocco (buildup at liber.it)"),
			"[ko]"		=> array ("ByungHyun Choi(byunghyun.choi at gmail.com)"),
			"[lt]"		=> array ("Mantas Zapolskas (mantaz at users.sf.net)","Rimas Kudelis (rq at akl.lt)"),
			"[nb_NO]"	=> array ("Eskild Hustvedt (zerodogg at skolelinux.no)"),
			"[nl]"		=> array ("Jasper Huijsmans (jasper at xfce.org)"),
			"[pa]"		=> array ("Amanpreet Singh Alam (aalam at redhat.com)"),
			"[pt_BR]"	=> array ("Felix da Silva Costa (felix at online.eti.br)"),
			"[pt_PT]"	=> array ("Nuno Donato (nunodonato at zmail.pt)"),
			"[ro]"		=> array ("Mişu Moldovan (dumol at go.ro)"),
			"[ru]"		=> array ("Anthony Ivanoff (a-i at bk.ru)","Juraj Brosz (Juraj.Brosz at pobox.sk)"),
			"[ta]"		=> array ("Dinesh Nadarajah (dinesh_list at sbcglobal.net)"),
			"[tr]"		=> array ("Erçin EKER (erc.caldera at gmx.net)"),
			"[uk]"		=> array ("Maxim V. Dziumanenko (mvd at mylinux.com.ua)"),
			"[vi]"		=> array ("Lâm Vĩnh Niên (nienvl at yahoo.ca)"),
			"[zh_CN]"	=> array ("Yongtao Yang (yongtao.yang at telia.com)"),
			"[zh_TW]"	=> array ("Hydonsingore Sie (hydonsingore at mail.educities.edu.tw)"),
		
		);
		
		$list = "<ul>";
		foreach ($translators as $language => $names)
		{
			$list .= '<li>'. $language .'<ul>';
				foreach ($names as $name)
					$list .= '<li>'. $name .'</li>';
			$list .= '</ul></li>';
		}
		$list .= "</ul>";
		return $list;
	}
	
	function Webtranslators ()
	{
		$webtranslators = array (
			"[de]"		=> array ("Andre Lerche (a.lerche at gmx.net)"),
			"[de]"		=> array ("Moritz Heiber (moe at lunar-linux.org)"),
			"[es]"		=> array ("Jaime Buffery (nestu at lunar-linux.org)"),
			"[it]"		=> array ("Sascha Ales (europatriota at hotmail.com)"),
			"[ru]"		=> array ("Anthony Ivanoff (a-i at bk.ru)"),
			"[zh]"		=> array ("Allen Chen (allen_chen at xinhuanet.com)"),
		);
		
		$list = "<ul>";
		foreach ($webtranslators as $language => $names)
		{
			$list .= '<li>'. $language .'<ul>';
				foreach ($names as $name)
					$list .= '<li>'. $name .'</li>';
			$list .= '</ul></li>';
		}
		$list .= "</ul>";
		return $list;
	}

	function Contributors ()
	{
		$contributors = array (
			"Bernhard Walle (bernhard.walle at gmx.de)",
			"Biju Chacko (botsie at myrealbox.com)",
			"Craig Betts (craig.betts at dfrc.nasa.gov)",
			"Ejvend Nielsen (prophet at sphere-x.net)",
			"Erik Touve (etouve at earthlink.net)",
			"Jens Guballa (j.guballa at t-online.de)",
			"Jens Luedicke (jens at irs-net.com)",
			"Joakim Andreasson (joakim.andreasson at gmx.net)",
			"Joe Klemmer (klemmerj at webtrek.com)",
			"Karsten Luetkewitz (phrep at plskthx.org)",
			"Martin Loschwitz (madkiss at debian.org)",
			"Michael Mosier (michael at spyonit.com)",
			"Mickaël Graf (korbinus at xfce.org)",
			"Thomas Leonard (tal00r at ecs.soton.ac.uk)",
			"Tobias Henle (tobias at page23.de)",
			"Xavier Maillard (zedek at gnu-rox.org)",
		);
		
		$list = "<ul>";
		foreach ($contributors as $name)
			$list .= '<li>'. $name .'</li>';
		$list .= "</ul>";
		return $list;
	}
}

?>
