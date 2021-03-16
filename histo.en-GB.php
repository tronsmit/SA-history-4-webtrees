<?php
// File: /data/histo.xx.php (where xx is a language code such as "fr" or "en-GB")
// Note: the use of dashes instead on underlines in language specifiers is required from Webtrees v1.7.0 upwards
// Display historical facts on the personal facts tab of the individual page 
// Each line is a GEDCOM record to describe an event.
// Events must contain dates, and will only be shown if the individual was alive on that date.
// Taken from Dennis Pretorius's list on http://mzone.mweb.co.za/residents/k75/timeline.html

if (!defined('WT_WEBTREES')) {
   header('HTTP/1.0 403 Forbidden');
   exit;
}

// Epidemics
$histo[] = "1 EVEN\n2 TYPE Epidemic\n2 DATE 16 MAR 1713\n2 NOTE Smallpox epidemic breaks out at the Cape Colony\n2 SOUR Wikipedia\n3 PAGE http://en.wikipedia.org/wiki/1710s_in_South_Africa";
$histo[] = "1 EVEN\n2 TYPE Epidemic\n2 DATE 1 MAY 1755\n2 NOTE Smallpox epidemic breaks out at Cape Colony. A total of 2,372 people die\n2 SOUR Wikipedia\n3 PAGE http://en.wikipedia.org/wiki/1750s_in_South_Africa";
$histo[] = "1 EVEN\n2 TYPE Epidemic\n2 DATE FROM 1857 TO 1859\n2 NOTE In 1857-1859, there was an extremely severe worldwide outbreak of influenza\n2 SOUR Wikipedia\n3 PAGE http://goo.gl/XVwD6F";
$histo[] = "1 EVEN\n2 TYPE Epidemic\n2 DATE 1 FEB 1901\n2 NOTE Bubonic plague breaks out in Cape Town\n2 SOUR Wikipedia\n3 PAGE http://en.wikipedia.org/wiki/1901_in_South_Africa";
$histo[] = "1 EVEN\n2 TYPE Epidemic\n2 DATE FEB 1904\n2 NOTE Pneumonic plague breaks out in Johannesburg\n2 SOUR Wikipedia\n3 PAGE http://en.wikipedia.org/wiki/1904_in_South_Africa";
$histo[] = "1 EVEN\n2 TYPE Epidemic\n2 DATE 1906\n2 NOTE Tuberculosis reaches epidemic proportions in South Africa\n2 SOUR Wikipedia\n3 PAGE http://en.wikipedia.org/wiki/1906_in_South_Africa";
$histo[] = "1 EVEN\n2 TYPE Epidemic\n2 DATE 1912\n2 NOTE Smallpox outbreaks: The outbreak of smallpox is reported in the Malay Location, Johannesburg and cases of smallpox are discovered in Durban\n2 SOUR Wikipedia\n3 PAGE http://en.wikipedia.org/wiki/1912_in_South_Africa";
$histo[] = "1 EVEN\n2 TYPE Epidemic\n2 DATE 1918\n2 NOTE Spanish flu: An estimated 500,000 people die from the Spanish flu epidemic in South Africa, the fifth hardest hit country in the world\n2 SOUR Wikipedia\n3 PAGE http://en.wikipedia.org/wiki/1918_in_South_Africa";

// Wars
$histo[] = "1 EVEN\n2 TYPE War\n2 DATE 20 DEC 1780\n2 NOTE Britain declares war on the Netherlands. French troops arrive at the Cape Colony to guard it against the English\n2 SOUR Wikipedia\n3 PAGE http://en.wikipedia.org/wiki/1780s_in_South_Africa";
$histo[] = "1 EVEN\n2 TYPE War\n2 DATE 1784\n2 NOTE French troops depart the Cape after the [Treaty of Paris (3 Sep 1783)](http://en.wikipedia.org/wiki/Treaty_of_Paris_(1783)) is signed\n2 SOUR Wikipedia\n3 PAGE http://en.wikipedia.org/wiki/1780s_in_South_Africa";
$histo[] = "1 EVEN\n2 TYPE War\n2 DATE FROM 1789 TO 1799\n2 NOTE French Revolution\n2 SOUR Wikipedia\n3 PAGE http://en.wikipedia.org/wiki/French_Revolution";
$histo[] = "1 EVEN\n2 TYPE War\n2 DATE FROM 18 MAY 1803 TO 20 NOV 1815\n2 NOTE Napoleonic Wars\n2 SOUR Wikipedia\n3 PAGE http://en.wikipedia.org/wiki/Napoleonic_Wars";
$histo[] = "1 EVEN\n2 TYPE War\n2 DATE FROM APR 1861 TO MAY 1865\n2 NOTE American Civil War: In the spring of 1861, tensions between the northern and southern United States over issues including state's right versus federal authority, westward expansion and slavery exploded into the American Civil War\n2 SOUR Wikipedia\n3 PAGE http://goo.gl/ETtxkC";
$histo[] = "1 EVEN\n2 TYPE War\n2 DATE FROM 20 DEC 1880 TO 23 MAR 1881\n2 NOTE First Boer War\n2 SOUR Wikipedia\n3 PAGE http://en.wikipedia.org/wiki/First_Boer_War";
$histo[] = "1 EVEN\n2 TYPE War\n2 DATE FROM 11 OCT 1899 TO 31 MAY 1902\n2 NOTE Second Boer War\n2 SOUR Wikipedia\n3 PAGE http://en.wikipedia.org/wiki/Second_Boer_War";
$histo[] = "1 EVEN\n2 TYPE War\n2 DATE FROM 28 JUL 1914 TO 11 NOV 1918\n2 NOTE World War I\n2 SOUR Wikipedia\n3 PAGE http://en.wikipedia.org/wiki/World_War_I";
$histo[] = "1 EVEN\n2 TYPE War\n2 DATE FROM 1 SEP 1939 TO 2 SEP 1945\n2 NOTE World War II\n2 SOUR Wikipedia\n3 PAGE http://en.wikipedia.org/wiki/World_War_II";

// Towns founded
$histo[] = "1 EVEN\n2 TYPE Town founded\n2 NOTE  Stellenbosch is founded\n2 PLAC Stellenbosch, Western Cape, South Africa\n2 DATE 6 NOV 1679\n2 SOUR Wikipedia\n3 PAGE http://en.wikipedia.org/wiki/1660s_in_South_Africa";
$histo[] = "1 EVEN\n2 TYPE Town founded\n2 DATE 1812\n2 NOTE The settlement of Grahamstown is founded\n2 SOUR Wikipedia\n3 PAGE http://en.wikipedia.org/wiki/1812_in_South_Africa";
$histo[] = "1 EVEN\n2 TYPE Town founded\n2 DATE 27 AUG 1818\n2 NOTE Cradock is founded\n2 SOUR Wikipedia\n3 PAGE http://en.wikipedia.org/wiki/1818_in_South_Africa";
$histo[] = "1 EVEN\n2 TYPE Town founded\n2 DATE 1844\n2 NOTE Settlement of Victoria West is established\n2 SOUR Wikipedia\n3 PAGE http://en.wikipedia.org/wiki/1844_in_South_Africa";

// Political change
$histo[] = "1 EVEN\n2 TYPE Historical Event\n2 DATE 6 APR 1652\n2 NOTE Jan van Riebeeck arrives at the Cape in the *Drommedaris* and sets up a supply station and fortifications for the Dutch East India Company.\n2 SOUR Wikipedia\n3 PAGE http://en.wikipedia.org/wiki/1650s_in_South_Africa";
$histo[] = "1 EVEN\n2 TYPE Historical Event\n2 DATE JUL 1776\n2 NOTE Americans declare independece\n2 SOUR Wikipedia\n3 PAGE http://en.wikipedia.org/wiki/History_of_the_United_States_(1776%E2%80%9389)";
$histo[] = "1 EVEN\n2 TYPE Historical Event\n2 DATE 5 MAR 1797\n2 NOTE The Cape becomes a British Colony\n2 SOUR Wikipedia\n3 PAGE http://en.wikipedia.org/wiki/1790s_in_South_Africa";
$histo[] = "1 EVEN\n2 TYPE Historical Event\n2 DATE FROM 1852 TO 1902\n2 NOTE The South African Republic (Dutch: *Zuid-Afrikaansche Republiek*, ZAR), often referred to as the Transvaal and sometimes as the Republic of Transvaal, was an independent and internationally recognised country in Southern Africa from 1852 to 1902. \n2 SOUR Wikipedia\n3 PAGE http://en.wikipedia.org/wiki/South_African_Republic";
$histo[] = "1 EVEN\n2 TYPE Historical Event\n2 DATE FROM 1854 TO 1902\n2 NOTE The Orange Free State (Dutch: *Oranje-Vrijstaat*, Afrikaans: *Oranje-Vrystaat*) was an independent *Boer* sovereign republic in southern Africa during the second half of the 19th century, and later a British colony and a province of the Union of South Africa. It is the historical precursor to the present-day Free State province\n2 SOUR Wikipedia\n3 PAGE http://en.wikipedia.org/wiki/Orange_Free_State";
$histo[] = "1 EVEN\n2 TYPE Historical Event\n2 DATE 31 MAY 1910\n2 NOTE Union of South Africa established\n2 SOUR Wikipedia\n3 PAGE http://en.wikipedia.org/wiki/Union_of_South_Africa";
$histo[] = "1 EVEN\n2 TYPE Historical Event\n2 DATE 31 MAY 1961\n2 NOTE South Africa becomes a republic\n2 SOUR Wikipedia\n3 PAGE http://en.wikipedia.org/wiki/1961_in_South_Africa";
$histo[] = "1 EVEN\n2 TYPE Historical Event\n2 PLAC South Africa\n2 DATE 27 APR 1994\n2 NOTE First General Elections\n2 SOUR Wikipedia\n3 PAGE http://en.wikipedia.org/wiki/South_African_general_election,_1994";

// Natural disasters
$histo[] = "1 EVEN\n2 TYPE Natural disaster\n2 DATE 1809\n2 NOTE A severe drought occurs in eastern frontier region\n2 SOUR Wikipedia\n3 PAGE http://en.wikipedia.org/wiki/1809_in_South_Africa";

// Economic Events
$histo[] = "1 EVEN\n2 TYPE Economic Event\n2 DATE 1825\n2 NOTE  Rix dollar Dutch: *Rijsksdaalder* is converted into the British sterling\n2 SOUR Wikipedia\n3 PAGE http://en.wikipedia.org/wiki/1825_in_South_Africa";
$histo[] = "1 EVEN\n2 TYPE Economic Event\n2 NOTE Economic depression\n2 PLAC South Africa\n2 DATE 1865\n2 SOUR Wikipedia\n3 PAGE http://en.wikipedia.org/wiki/1865_in_South_Africa";
$histo[] = "1 EVEN\n2 TYPE Economic Event\n2 PLAC Hopetown, Northern Cape, South Africa\n2 DATE 1867\n2 NOTE The Eureka Diamond was the first diamond discovered in South Africa. It weighed 21.25 carats (4.250 g), and was found by Erasmus Jacobs near Hopetown on the Orange River in 1867. The diamond, cut to a 10.73-carat (2.146 g) cushion-shaped brilliant, is currently on display at the Mine Museum in Kimberley. The discovery of diamonds in South Africa led to the Kimberley Diamond Rush, and marked the beginning of the Mineral Revolution\n2 SOUR Wikipedia\n3 PAGE http://en.wikipedia.org/wiki/Eureka_Diamond";
$histo[] = "1 EVEN\n2 TYPE Economic Event\n2 PLAC Pilgrim's Rest, Mpumulanga, South Africa\n2 DATE SEP 1873\n2 NOTE Pilgrim's rest declared a gold field\n2 SOUR Wikipedia\n3 PAGE http://en.wikipedia.org/wiki/Pilgrim%27s_Rest,_Mpumalanga";
$histo[] = "1 EVEN\n2 TYPE Economic Event\n2 PLAC Barberton, Mpumulanga, South Africa\n2 DATE 1881\n2 NOTE In 1881 gold in the Barberton area was discovered by Tom McLachlan who found alluvial gold at Jamestown. However due to the location (the hot lowveld region was rife with malaria) no-one wanted to go there until Auguste Roberts (French Bob) discovered gold in Concession Creek in 20 June 1883. This discovery resulted in a gold rush to the area\n2 SOUR Wikipedia\n3 PAGE http://en.wikipedia.org/wiki/Barberton,_Mpumalanga#Gold";
$histo[] = "1 EVEN\n2 TYPE Economic Event\n2 PLAC Langlaagte, Johannesburg, Gauteng, South Africa\n2 DATE 1886\n2 NOTE Discovery of the Main Reef in Witwatersrand. Gold rushes to Pilgrim's Rest and Barberton were precursors to the biggest discovery of all, the Main Reef/Main Reef Leader on Gerhardus Oosthuizen's farm Langlaagte, Portion C, in 1886, the Witwatersrand Gold Rush and the subsequent rapid development of the gold field there, the biggest of them all.\n2 SOUR Wikipedia\n3 PAGE http://en.wikipedia.org/wiki/Mining_industry_of_South_Africa";
$histo[] = "1 EVEN\n2 TYPE Economic Event\n2 DATE OCT 1929\n2 NOTE The Wall Street Crash sets off the Great Depression, the most severe worldwide economic depression in the 20th century\n2 SOUR Wikipedia\n3 PAGE http://goo.gl/MgHbRM";

// Historical events
$histo[] = "1 EVEN\n2 TYPE Historical Event\n2 DATE 12 MAR 1488\n2 PLAC Mosselbay, Western Cape, South Africa\n2 NOTE Bartolomeu Dias (or Bartholomew Dias) a Portuguese navigator sailed south along the coast of Southern Africa as far as the Orange River, was blown out to sea and made landfall at Mossel Bay and Algoa Bay. He erects the first *padrão* (stone cross) on the South African coast. At the Fish River his men refused to go any further. He returns sailing round the Cape of Good Hope, named by either Dias or his patron, King John II of Portugal for the “great hope it gave of discovering the Indies”\n2 SOUR Wikipedia\n3 PAGE http://en.wikipedia.org/wiki/15th_century_in_South_Africa";
$histo[] = "1 EVEN\n2 TYPE Historical Event\n2 DATE FROM 1497 TO 1499\n2 NOTE  Vasco da Gama rounds the Cape on the way to India. A Portuguese navigator, he sighted land at St. Helena Bay, doubled the Cape, passed up the coast of Natal at Christmastide and named it, and reached Arab Mozambique. He had discovered a route to India. His patron was the successor to John II, Manuel the Fortunate.\n2 SOUR Wikipedia\n3 PAGE http://en.wikipedia.org/wiki/15th_century_in_South_Africa";
$histo[] = "1 EVEN\n2 TYPE Historical Event\n2 DATE 1503\n2 NOTE Antonio de Saldanha lands at Table Bay\n2 SOUR SA Timeline\n3 PAGE http://mzone.mweb.co.za/residents/k75/timeline.html";
$histo[] = "1 EVEN\n2 TYPE Historical Event\n2 DATE 18 JUL 1580\n2 NOTE An English admiral, Sir Francis Drake, rounded the Cape on his voyage round the world. He called it “a most stately thing and the fairest cape we saw in the whole circumference of the earth”\n2 SOUR Wikipedia\n3 PAGE http://en.wikipedia.org/wiki/16th_century_in_South_Africa";
$histo[] = "1 EVEN\n2 TYPE Historical Event\n2 DATE 20 MAR 1602\n2 NOTE The *Vereenigde Oost-Indische Compagnie* (VOC) or better known as the Dutch East India Company is established in the Netherlands\n2 SOUR Wikipedia\n3 PAGE http://en.wikipedia.org/wiki/1600s_in_South_Africa";
$histo[] = "1 EVEN\n2 TYPE Historical Event\n2 DATE 1657\n2 NOTE First Freeburghers (*Vrijburgers*): The first nine men received grants of land along the Liesbeeck River (now *Rondebosch*)\n2 PLAC Rondebosch, Western Cape, South Africa\n2 SOUR SA Timeline\n3 PAGE http://mzone.mweb.co.za/residents/k75/timeline.html";
$histo[] = "1 EVEN\n2 TYPE Historical Event\n2 DATE 7 MAY 1662\n2 NOTE Jan van Riebeeck leaves the Cape on promotion to a position on the Council of Justice in Batavia\n2 SOUR Wikipedia\n3 PAGE http://en.wikipedia.org/wiki/1660s_in_South_Africa";
$histo[] = "1 EVEN\n2 TYPE Historical Event\n2 DATE 18 AUG 1665\n2 NOTE First Dutch Reformed Church congregation is founded and J. van Arkel is appointed the first minister\n2 SOUR Wikipedia\n3 PAGE http://en.wikipedia.org/wiki/1660s_in_South_Africa";
$histo[] = "1 EVEN\n2 TYPE Historical Event\n2 DATE APR 1688\n2 NOTE French Huguenot refugees arrive after the revocation of the Edict of Nantes. Simon van der Stel, the Governor of the Cape Colony settles the Huguenot refugees in the present day Drakenstein, Franschhoek and Wellington areas which were beyond the Cape Colony and belonged to the Khoikhoi people\n2 SOUR Wikipedia\n3 PAGE http://en.wikipedia.org/wiki/1680s_in_South_Africa";
$histo[] = "1 EVEN\n2 TYPE Historical Event\n2 DATE 1754\n2 NOTE A population count in the Cape shows that there were 5,510 Europeans and 6,279 slaves in the Cape Colony\n2 SOUR Wikipedia\n3 PAGE http://en.wikipedia.org/wiki/1750s_in_South_Africa";
$histo[] = "1 EVEN\n2 TYPE Historical Event\n2 DATE 1780\n2 NOTE The Fish River is made the eastern boundary of the Cape Colony\n2 SOUR Wikipedia\n3 PAGE http://en.wikipedia.org/wiki/1780s_in_South_Africa";
$histo[] = "1 EVEN\n2 TYPE Historical Event\n2 DATE 1795\n2 NOTE The Dutch East India Company is in financial ruins. 29 January – Farmers expelled the officials of the Dutch East India Company and established an independent government at Graaff Reinet. 18 June - Swellendam follows Graaff Reinet and declares a republic under Hermanus Steyn. The Netherlands is invaded by the French under the leadership of Napoléon Bonaparte. A republic is declared by Dutch revolutionaires and the Prince of Orange flees to England. 16 September – British forces under General Sir James Henry Craig seizes the Cape Colony for the Stadtholder Prince William V of Orange. The republics of Graaff Reinet and Swellendam reject the British and the British army is sent in.The start of free trade was announced\n2 SOUR Wikipedia\n3 PAGE http://en.wikipedia.org/wiki/1790s_in_South_Africa";
$histo[] = "1 EVEN\n2 TYPE Historical Event\n2 DATE 1820\n2 NOTE 17 March - The first British settlers arrived in Table Bay, Cape Town on the *Nautilus* and the *Chapman*. 1 May - The *Albury* reaches Cape Town bringing settlers to Albany, South Africa. They arrive in Algoa Bay on 15 May. 2 May - *La Belle Alliance* reached Cape Town. She brought British settlers to Algoa Bay. 4000 British settlers started arriving in Algoa Bay (Port Elizabeth), they settled in Grahamstown and along the frontier\n2 SOUR Wikipedia\n3 PAGE http://en.wikipedia.org/wiki/1820_in_South_Africa";
$histo[] = "1 EVEN\n2 TYPE Historical Event\n2 DATE 1835\n2 NOTE *Voortrekkers* start leaving the Cape Colony\n2 SOUR Wikipedia\n3 PAGE http://en.wikipedia.org/wiki/1835_in_South_Africa";
$histo[] = "1 EVEN\n2 TYPE Historical Event\n2 DATE 14 FEB 1961\n2 PLAC South Africa\n2 NOTE Decimalisation of currency replaces the South African pound with the South African rand\n2 SOUR Wikipedia\n3 PAGE http://en.wikipedia.org/wiki/1961_in_South_Africa";
$histo[] = "1 EVEN\n2 TYPE Historical Event\n2 DATE 11 FEB 1990\n2 NOTE Nelson Mandela released\n2 SOUR Wikipedia\n3 PAGE http://en.wikipedia.org/wiki/1990_in_South_Africa";
?>
