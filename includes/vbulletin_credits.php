<?php
/*======================================================================*\
|| #################################################################### ||
|| # vBulletin 4.2.3 - Licence Number NULLED                          # ||
|| # ---------------------------------------------------------------- # ||
|| # Copyright ©2000-2016 vBulletin Solutions Inc. All Rights Reserved. ||
|| # This file may not be redistributed in whole or significant part. # ||
|| # ---------------- VBULLETIN IS NOT FREE SOFTWARE ---------------- # ||
|| # http://www.vbulletin.com | http://www.vbulletin.com/license.html # ||
|| #################################################################### ||
\*======================================================================*/

if (!isset($GLOBALS['vbulletin']->db))
{
	exit;
}

// display the credits table for use in admin/mod control panels

print_form_header('index', 'home');
print_table_header($vbphrase['vbulletin_developers_and_contributors']);
print_column_style_code(array('white-space: nowrap', ''));
print_label_row('<b>' . $vbphrase['software_developed_by'] . '</b>', '
	<a href="http://www.vbulletin.com/" target="vbulletin">vBulletin Solutions, Inc.</a>,
	<a href="http://www.internetbrands.com/" target="vbulletin">Internet Brands, Inc.</a>
', '', 'top', NULL, false);
print_label_row('<b>' . $vbphrase['business_product_development'] . '</b>', '
	<a href="http://www.vbulletin.com/forum/member/303441" target="vbulletin">John McGanty</a>,
	<a href="http://www.vbulletin.com/forum/member/438075" target="vbulletin">Marjo Mercado</a>,
	<a href="http://www.vbulletin.com/forum/member/308512" target="vbulletin">Neal Sainani</a>,
	<a href="http://www.vbulletin.com/forum/member/354774" target="vbulletin">Olga Mandrosov</a>,
	<a href="http://www.vbulletin.com/forum/member/360629" target="vbulletin">Omid Majdi</a>
', '', 'top', NULL, false);
print_label_row('<b>' . $vbphrase['engineering'] . '</b>', '
	<a href="http://www.vbulletin.com/forum/member/216095" target="vbulletin">David Grove</a>,
	<a href="http://www.vbulletin.com/forum/member/250802" target="vbulletin">Edwin Brown</a>,
	<a href="http://www.vbulletin.com/forum/member/364280" target="vbulletin">Jay Quiambao</a>,
	<a href="http://www.vbulletin.com/forum/member/385465" target="vbulletin">Jin-Soo Jo</a>,
	<a href="http://www.vbulletin.com/forum/member/214190" target="vbulletin">Kevin Sours</a>,
	<a href="http://www.vbulletin.com/forum/member/57151" target="vbulletin">Paul Marsden</a>
', '', 'top', NULL, false);
print_label_row('<b>' . $vbphrase['qa'] . '</b>', '
	<a href="http://www.vbulletin.com/forum/member/255358" target="vbulletin">Allen Lin</a>,
	<a href="http://www.vbulletin.com/forum/member/255359" target="vbulletin">Meghan Sensenbach</a>,
	<a href="http://www.vbulletin.com/forum/member/229357" target="vbulletin">Sebastiano Vassellatti</a>,
	<a href="http://www.vbulletin.com/forum/member/38627" target="vbulletin">Yves Rigaud</a>
', '', 'top', NULL, false);

print_label_row('<b>' . $vbphrase['support'] . '</b>', '
	<a href="http://www.vbulletin.com/forum/member/322555" target="vbulletin">Aakif Nazir</a>,
	<a href="http://www.vbulletin.com/forum/member/375569" target="vbulletin">Christine Tran</a>,
	<a href="http://www.vbulletin.com/forum/member/437628" target="vbulletin">D\'Marco Brown</a>,
	<a href="http://www.vbulletin.com/forum/member/129878" target="vbulletin">Dominic Schlatter</a>,
	<a href="http://www.vbulletin.com/forum/member/245" target="vbulletin">George Liu</a>,
	<a href="http://www.vbulletin.com/forum/member/224677" target="vbulletin">Joe DiBiasi</a>,
	<a href="http://www.vbulletin.com/forum/member/57702" target="vbulletin">Lynne Sands</a>,
	<a href="http://www.vbulletin.com/forum/member/42906" target="vbulletin">Mark Bowland</a>,
	<a href="http://www.vbulletin.com/forum/member/868" target="vbulletin">Wayne Luke</a>,
	<a href="http://www.vbulletin.com/forum/member/19405" target="vbulletin">Zachery Woods</a>
', '', 'top', NULL, false);

print_label_row('<b>' . $vbphrase['special_thanks_and_contributions'] . '</b>', '
	<a href="http://www.vbulletin.com/forum/member/46668" target="vbulletin">Ace Shattock</a>,
	<a href="http://www.vbulletin.com/forum/member/226054" target="vbulletin">Adrian Harris</a>,
	<a href="http://www.vbulletin.com/forum/member/231844" target="vbulletin">Adrian Sacchi</a>,
	<a href="http://www.vbulletin.com/forum/member/281183" target="vbulletin">Ahmed</a>,
	<a href="http://www.vbulletin.com/forum/member/284675" target="vbulletin">Ajinkya Apte</a>,
	<a href="http://www.vbulletin.com/forum/member/41804" target="vbulletin">Alex Matthews</a>,
	<a href="http://www.vbulletin.com/forum/member/297460" target="vbulletin">Alan Chiu</a>,
	<a href="http://www.vbulletin.com/forum/member/313947" target="vbulletin">Alan Orduno</a>,
	<a href="http://www.vbulletin.com/forum/member/64720" target="vbulletin">Ali Madkour</a>,
	<a href="http://www.vbulletin.com/forum/member/13094" target="vbulletin">Anders Pettersson</a>,
	<a href="http://www.vbulletin.com/forum/member/42096" target="vbulletin">Andreas Kirbach</a>,
	<a href="http://www.vbulletin.com/forum/member/260819" target="vbulletin">Andrew Elkins</a>,
	<a href="http://www.vbulletin.com/forum/member/419428" target="vbulletin">Andrew Vo</a>,
	<a href="http://www.vbulletin.com/forum/member/42534" target="vbulletin">Andy Huang</a>,
	Aston Jay,
	<a href="http://www.vbulletin.com/forum/member/44710" target="vbulletin">Billy Golightly</a>,
	<a href="http://www.vbulletin.com/forum/member/28047" target="vbulletin">bjornstrom</a>,
	Bob Pankala,
	<a href="http://www.vbulletin.com/forum/member/308514" target="vbulletin">Brad Wright</a>,
	<a href="http://www.vbulletin.com/forum/member/374963" target="vbulletin">Brett Morriss</a>,
	Brian Swearingen,
	<a href="http://www.vbulletin.com/forum/member/9215" target="vbulletin">Brian Gunter</a>,
	<a href="http://www.vbulletin.com/forum/member/30801" target="vbulletin">Carrie Anderson</a>,
	<a href="http://www.vbulletin.com/forum/member/5755" target="vbulletin">Chen Avinadav</a>,
	<a href="http://www.vbulletin.com/forum/member/263569" target="vbulletin">Chevy Revata</a>,
	<a href="http://www.vbulletin.com/forum/member/193838" target="vbulletin">Chris Holland</a>,
	<a href="http://www.vbulletin.com/forum/member/213303" target="vbulletin">Christian Hoffmann</a>,
	<a href="http://www.vbulletin.com/forum/member/66209" target="vbulletin">Christopher Riley</a>,
	<a href="http://www.vbulletin.com/forum/member/48331" target="vbulletin">Colin Frei</a>,
	<a href="http://www.vbulletin.com/forum/member/358136" target="vbulletin">Danco Dimovski</a>,
	<a href="http://www.vbulletin.com/forum/member/25207" target="vbulletin">Daniel Clements</a>,
	<a href="http://www.vbulletin.com/forum/member/218637" target="vbulletin">Darren Gordon</a>,
	<a href="http://www.vbulletin.com/forum/member/443733" target="vbulletin">Daniel Lee</a>,
	<a href="http://www.vbulletin.com/forum/member/215955" target="vbulletin">David Bonilla</a>,
	<a href="http://www.vbulletin.com/forum/member/95219" target="vbulletin">David Webb</a>,
	<a href="http://www.vbulletin.com/forum/member/296606" target="vbulletin">Danny Morlette</a>,
	David Yancy,
	<a href="http://www.vbulletin.com/forum/member/54891" target="vbulletin">Dody</a>,
	<a href="http://www.vbulletin.com/forum/member/43093" target="vbulletin">digitalpoint</a>,
	<a href="http://www.vbulletin.com/forum/member/259494" target="vbulletin">Don Kuramura</a>,
	Don T. Romrell,
	<a href="http://www.vbulletin.com/forum/member/65" target="vbulletin">Doron Rosenberg</a>,
	<a href="http://www.vbulletin.com/forum/member/393668" target="vbulletin">Duane Piosca</a>,
	Elmer Hernandez,
	<a href="http://www.vbulletin.com/forum/member/227265" target="vbulletin">Emon Khan</a>,
	<a href="http://www.vbulletin.com/forum/member/358241" target="vbulletin">Enrique Pascalin</a>,
	<a href="http://www.vbulletin.com/forum/member/297944" target="vbulletin">Eric Johney</a>,
	<a href="http://www.vbulletin.com/forum/member/126937" target="vbulletin">Eric Sizemore (SecondV)</a>,
	<a href="http://www.vbulletin.com/forum/member/224" target="vbulletin">Freddie Bingham</a>,
	<a href="http://www.vbulletin.com/forum/member/290027" target="vbulletin">Fabian Schonholz</a>,
	<a href="http://www.vbulletin.com/forum/member/255355" target="vbulletin">Fei Leung</a>,
	Fernando Munoz,
	<a href="http://www.vbulletin.com/forum/member/323074" target="vbulletin">Fernando Varesi</a>,
	<a href="http://www.vbulletin.com/forum/member/11606" target="vbulletin">Floris Fiedeldij Dop</a>,
	<a href="http://www.vbulletin.com/forum/member/116999" target="vbulletin">Harry Scanlan</a>,
	<a href="http://www.vbulletin.com/forum/member/358734" target="vbulletin">Gary Carroll</a>,
	<a href="http://www.vbulletin.com/forum/member/224340" target="vbulletin">Gavin Robert Clarke</a>,
	<a href="http://www.vbulletin.com/forum/member/151240" target="vbulletin">Geoff Carew</a>,
	<a href="http://www.vbulletin.com/forum/member/49413" target="vbulletin">Giovanni Martinez</a>,
	<a href="http://www.vbulletin.com/forum/member/217716" target="vbulletin">Green Cat</a>,
	<a href="http://www.vbulletin.com/forum/member/326711" target="vbulletin">Glenn Vergara</a>,
	<a href="http://www.vbulletin.com/forum/member/6639" target="vbulletin">Hanafi Jamil</a>,
	<a href="http://www.vbulletin.com/forum/member/168794" target="vbulletin">Hani Saad</a>,
	<a href="http://www.vbulletin.com/forum/member/143597" target="vbulletin">Hanson Wong</a>,
	<a href="http://www.vbulletin.com/forum/member/197965" target="vbulletin">Hartmut Voss</a>,
	<a href="http://www.vbulletin.com/forum/member/134094" target="vbulletin">Ivan Anfimov</a>,
	<a href="http://www.vbulletin.com/forum/member/316570" target="vbulletin">Ivan Milanez</a>,
	Jacquii Cooke,
	<a href="http://www.vbulletin.com/forum/member/2026" target="vbulletin">Jake Bunce</a>,
	Jan Allan Zischke,
	<a href="http://www.vbulletin.com/forum/member/303322" target="vbulletin">Jasper Aguila</a>,
	<a href="http://www.vbulletin.com/forum/member/179020" target="vbulletin">Jaume L&oacute;pez</a>,
	<a href="http://www.vbulletin.com/forum/member/87479" target="vbulletin">Jelle Van Loo</a>,
	<a href="http://www.vbulletin.com/forum/member/234854" target="vbulletin">Jen Rundell</a>,
	<a href="http://www.vbulletin.com/forum/member/60433" target="vbulletin">Jeremy Dentel</a>,
	<a href="http://www.vbulletin.com/forum/member/24628" target="vbulletin">Jerry Hutchings</a>,
	<a href="http://www.vbulletin.com/forum/member/264173" target="vbulletin">Joan Gauna</a>,
	<a href="http://www.vbulletin.com/forum/member/282066" target="vbulletin">Joanna W.H.</a>,
	<a href="http://www.vbulletin.com/forum/member/272640" target="vbulletin">Joe Rosenblum</a>,
	<a href="http://www.vbulletin.com/forum/member/8481" target="vbulletin">Joe Velez</a>,
	Joel Young,
	John Jakubowski,
	<a href="http://www.vbulletin.com/forum/member/1" target="vbulletin">John Percival</a>,
	<a href="http://www.vbulletin.com/forum/member/358788" target="vbulletin">John Yao</a>,
	<a href="http://www.vbulletin.com/forum/member/221809" target="vbulletin">Jonathan Javier Coletta</a>,
	<a href="http://www.vbulletin.com/forum/member/315040" target="vbulletin">Jorge Tiznado</a>,
	<a href="http://www.vbulletin.com/forum/member/43010" target="vbulletin">Joseph DeTomaso</a>,
	<a href="http://www.vbulletin.com/forum/member/257349" target="vbulletin">Justin Turner</a>,
	<a href="http://www.vbulletin.com/forum/member/301796" target="vbulletin">Kay Alley</a>,
	<a href="http://www.vbulletin.com/forum/member/287901" target="vbulletin">Kevin Connery</a>,
	<a href="http://www.vbulletin.com/forum/member/2751" target="vbulletin">Kevin Schumacher</a>,
	Kevin Wilkinson,
	<a href="http://www.vbulletin.com/forum/member/1034" target="vbulletin">Kier Darby</a>,
	Kira Lerner,
	<a href="http://www.vbulletin.com/forum/member/62022" target="vbulletin">Kolby Bothe</a>,
	<a href="http://www.vbulletin.com/forum/member/317761" target="vbulletin">Kyle Furlong</a>,
	<a href="http://www.vbulletin.com/forum/member/196301" target="vbulletin">Kym Farnik</a>,
	<a href="http://www.vbulletin.com/forum/member/344790" target="vbulletin">Lamonda Steele</a>,
	<a href="http://www.vbulletin.com/forum/member/355525" target="vbulletin">Lawrence Cole</a>,
	<a href="http://www.vbulletin.com/forum/member/33824" target="vbulletin">Lisa Swift</a>,
	<a href="http://www.vbulletin.com/forum/member/234985" target="vbulletin">Marco Mamdouh Fahem</a>,
	<a href="http://www.vbulletin.com/forum/member/3226" target="vbulletin">Mark Hennyey</a>,
	<a href="http://www.famfamfam.com/lab/icons/silk/" target="vbulletin">Mark James</a>,
	<a href="http://www.vbulletin.com/forum/member/372545" target="vbulletin">Mark Jean</a>,
	<a href="http://www.vbulletin.com/forum/member/168289" target="vbulletin">Marlena Machol</a>,
	<a href="http://www.vbulletin.com/forum/member/43043" target="vbulletin">Martin Meredith</a>,
	<a href="http://www.vbulletin.com/forum/member/344371" target="vbulletin">Maurice De Stefano</a>,
	<a href="http://www.vbulletin.com/forum/member/375569" target="vbulletin">Matthew Gordon</a>,
	<a href="http://www.vbulletin.com/forum/member/21333" target="vbulletin">Merjawy</a>,
	<a href="http://www.vbulletin.com/forum/member/44899" target="vbulletin">Mert Gokceimam</a>,
	<a href="http://www.vbulletin.com/forum/member/257345" target="vbulletin">Michael Anders</a>,
	<a href="http://www.vbulletin.com/forum/member/48125" target="vbulletin">Michael Biddle</a>,
	<a href="http://www.vbulletin.com/forum/member/113346" target="vbulletin">Michael Fara</a>,
	<a href="http://www.vbulletin.com/forum/member/266078" target="vbulletin">Michael Henretty</a>,
	Michael Kellogg,
	<a href="http://www.vbulletin.com/forum/member/4519" target="vbulletin">Michael \'Mystics\' K&ouml;nig</a>,
	<a href="http://www.vbulletin.com/forum/member/284061" target="vbulletin">Michael Lavaveshkul</a>,
	<a href="http://www.vbulletin.com/forum/member/363620" target="vbulletin">Michael Mendoza</a>,
	<a href="http://www.vbulletin.com/forum/member/233460" target="vbulletin">Michael Miller</a>,
	<a href="http://www.vbulletin.com/forum/member/379277" target="vbulletin">Michael Perez</a>,
	Michael Pierce,
	<a href="http://www.vbulletin.com/forum/member/292167" target="vbulletin">Michlerish</a>,
	<a href="http://www.vbulletin.com/forum/member/374866" target="vbulletin">Miguel Montaño</a>,
	<a href="http://www.vbulletin.com/forum/member/37" target="vbulletin">Mike Sullivan</a>,
	Milad Kawas Cale,
	<a href="http://www.vbulletin.com/forum/member/85376" target="vbulletin">miner</a>,
	Nathan Wingate,
	<a href="http://www.vbulletin.com/forum/member/262703" target="vbulletin">nickadeemus2002</a>,
	Ole Vik,
	<a href="http://www.vbulletin.com/forum/member/314912" target="vbulletin">Oscar Ulloa</a>,
	<a href="http://www.vbulletin.com/forum/member/219" target="vbulletin">Overgrow</a>,
	<a href="http://www.vbulletin.com/forum/member/106836" target="vbulletin">Peggy Lynn Gurney</a>,
	<a href="http://www.vbulletin.com/forum/member/262025" target="vbulletin">Prince Shah</a>,
	<a href="http://www.vbulletin.com/forum/member/260829" target="vbulletin">Pritesh Shah</a>,
	<a href="http://www.vbulletin.com/forum/member/314788" target="vbulletin">Priyanka Porwal</a>,
	<a href="http://www.vbulletin.com/forum/member/166185" target="vbulletin">Pieter Verhaeghe</a>,
	<a href="http://www.vbulletin.com/forum/member/374478" target="vbulletin">Reenan Arbitrario</a>,
	<a href="http://www.vbulletin.com/forum/member/236834" target="vbulletin">Refael Iliaguyev</a>,
	<a href="http://www.vbulletin.com/forum/member/344569" target="vbulletin">Rene Jimenez</a>,
	<a href="http://www.vbulletin.com/forum/member/300526" target="vbulletin">Reshmi Rajesh</a>,
	<a href="http://www.vbulletin.com/forum/member/137708" target="vbulletin">Riasat Al Jamil</a>,
	<a href="http://www.vbulletin.com/forum/member/196301" target="vbulletin">Ricki Kean</a>,
	<a href="http://www.vbulletin.com/forum/member/16131" target="vbulletin">Rob (Boofo) Hindal</a>,
	Robert Beavan White,
	<a href="http://www.vbulletin.com/forum/member/130915" target="vbulletin">Roms</a>,
	<a href="http://www.vbulletin.com/forum/member/304681" target="vbulletin">Ruth Navaneetha</a>,
	<a href="http://www.vbulletin.com/forum/member/39584" target="vbulletin">Ryan Ashbrook</a>,
	<a href="http://www.vbulletin.com/forum/member/96188" target="vbulletin">Ryan Royal</a>,
	Sal Colascione III,
	<a href="http://www.vbulletin.com/forum/member/1814" target="vbulletin">Scott MacVicar</a>,
	<a href="http://www.vbulletin.com/forum/member/626" target="vbulletin">Scott Molinari</a>,
	Scott William,
	<a href="http://www.vbulletin.com/forum/member/1121" target="vbulletin">Scott Zachow</a>,
	Shawn Vowell,
	<a href="http://www.vbulletin.com/forum/member/268290" target="vbulletin">Sophie Xie</a>,
	<a href="http://www.vbulletin.com/forum/member/305211" target="vbulletin">Stefano Acerbetti</a>,
	<a href="http://www.vbulletin.com/forum/member/5374" target="vbulletin">Stephan \'pogo\' Pogodalla</a>,
	<a href="http://www.vbulletin.com/forum/member/656" target="vbulletin">Steve Machol</a>,
	<a href="http://www.vbulletin.com/forum/member/91332" target="vbulletin">Sven "cellarius" Keller</a>,
	<a href="http://www.vbulletin.com/forum/member/301658" target="vbulletin">Tariq Bafageer</a>,
	<a href="http://www.vbulletin.com/forum/member/46384" target="vbulletin">The Vegan Forum</a>,
	<a href="http://www.vbulletin.com/forum/member/61340" target="vbulletin">ThorstenA</a>,
	Tom Murphy,
	Tony Phoenix,
	<a href="http://www.vbulletin.com/forum/member/19738" target="vbulletin">Trevor Hannant</a>,
	<a href="http://www.vikjavev.com/hovudsida/umtestside.ph'.'p" target="vbulletin">Torstein H&oslash;nsi</a>,
	<a href="http://www.vbulletin.com/forum/member/172" target="vbulletin">Troy Roberts</a>,
	<a href="http://www.vbulletin.com/forum/member/262689" target="vbulletin">Tully Rankin</a>,
	Vinayak Gupta,
	<a href="http://www.vbulletin.com/forum/member/23871" target="vbulletin">Xiaoyu Huang</a>,
	<a href="http://www.vbulletin.com/forum/member/229437" target="vbulletin">Yasser Hamde</a>,
	<a href="http://www.vbulletin.com/forum/member/299765" target="vbulletin">Zoltan Szalay</a>,
	<a href="http://www.vbulletin.com/forum/member/303822" target="vbulletin">Zuzanna Grande</a>
	', '', 'top', NULL, false);
print_label_row('<b>' . $vbphrase['copyright_enforcement_by'] . '</b>', '
	<a href="http://www.vbulletin.com/" target="vbulletin">vBulletin Solutions, Inc.</a>
', '', 'top', NULL, false);
print_table_footer();

/*======================================================================*\
|| ####################################################################
|| # Downloaded: By Deutschland from vBulletin.com
|| # CVS: $RCSfile$ - $Revision: 83220 $
|| ####################################################################
\*======================================================================*/
?>
