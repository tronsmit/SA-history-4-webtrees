<?php

/**
 * webtrees: online genealogy
 * Copyright (C) 2021 webtrees development team
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <https://www.gnu.org/licenses/>.
 */

declare(strict_types=1);

namespace Fisharebest\Webtrees\Module;

use Illuminate\Support\Collection;

/**
 * Class SAHistory
 *
 */
return new class extends AbstractModule implements ModuleCustomInterface, ModuleHistoricEventsInterface {
    use ModuleCustomTrait;
    use ModuleHistoricEventsTrait;

    /**
     * How should this module be identified in the control panel, etc.?
     *
     * @return string
     */
    public function title(): string
    {
        return 'SA History';
    }

    /**
     * Should this module be enabled when it is first installed?
     *
     * @return bool
     */
    public function isEnabledByDefault(): bool
    {
        return false;
    }

    /**
     * The person or organisation who created this module.
     *
     * @return string
     */
    public function customModuleAuthorName(): string
    {
        return 'Chris Theron';
    }

    /**
     * Where to get support for this module.  Perhaps a github repository?
     *
     * @return string
     */
    public function customModuleSupportUrl(): string
    {
        return 'https://github.com/tronsmit/SA-history-4-webtrees/issues';
    }

    /**
     * The version of this module.
     *
     * @return string  e.g. '1.2.3'
     */
    public function customModuleVersion(): string
    {
        return '2.2.0';
    }

    /**
     * A URL that will provide the latest version of this module.
     *
     * @return string
     */
    public function customModuleLatestVersionUrl(): string
    {
        return 'https://raw.githubusercontent.com/tronsmit/SA-history-4-webtrees/main/latest-version.txt';
    }

    /**
     * All events provided by this module.
     *
     * Using inline SOUR and inline NOTE tags,
     * mindful of display restrictions in webtrees
     * from p39 in GEDCOM 5.5.1
     * n SOUR <SOURCE_DESCRIPTION> 1..248
     *
     * @return Collection<string>
     */
    public function historicEventsAll($language_tag): Collection
    {
        switch ($language_tag) {
            case 'af':
                return new Collection([
                    // Epidemics
                    "1 EVEN Pokke\n2 TYPE Epidemie\n2 DATE 16 MAR 1713\n2 NOTE Pokke-epidemie breek uit in die Kaapkolonie. \n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/1710s_in_South_Africa)",
                    "1 EVEN Pokke\n2 TYPE Epidemie\n2 DATE 1 MAY 1755\n2 NOTE Pokke-epidemie breek uit in die Kaapkolonie. 'n Totaal van 2,372 mense sterf. \n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/1750s_in_South_Africa)",
                    "1 EVEN Griep\n2 TYPE Epidemie\n2 DATE FROM 1857 TO 1859\n2 NOTE In 1857-1859 was daar 'n uiters ernstige wêreldwye uitbraak van griep. \n2 SOUR [Wikipedia](https://goo.gl/XVwD6F)",
                    "1 EVEN Buboniese pes\n2 TYPE Epidemie\n2 DATE 1 FEB 1901\n2 NOTE Buboniese pes breek uit in Kaapstad. \n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/1901_in_South_Africa)",
                    "1 EVEN Longpes\n2 TYPE Epidemie\n2 DATE FEB 1904\n2 NOTE Longpes breek uit in Johannesburg. \n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/1904_in_South_Africa)",
                    "1 EVEN Tuberkulose\n2 TYPE Epidemie\n2 DATE 1906\n2 NOTE Tuberkulose bereik epidemiese proporsies in Suid-Afrika. \n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/1906_in_South_Africa)",
                    "1 EVEN Pokke\n2 TYPE Epidemie\n2 DATE 1912\n2 NOTE Pokke-uitbrake: Die uitbraak van pokke word aangemeld in die Maleise Woonbuurt, Johannesburg en gevalle van pokke word in Durban ontdek. \n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/1912_in_South_Africa)",
                    "1 EVEN Spaanse griep\n2 TYPE Epidemie\n2 DATE 1918\n2 NOTE 'n Geskatte 500,000 mense sterf tydens die Spaanse griep-epidemie in Suid-Afrika, die vyfde ergste getrefde land ter wêreld. \n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/1918_in_South_Africa)",
                    "1 EVEN Eerste Covid-19-geval in SA\n2 TYPE Epidemie\n2 DATE 5 MAR 2020\n2 SOUR [NICD](https://www.nicd.ac.za/first-case-of-covid-19-coronavirus-reported-in-sa/)",
                    // Wars
                    "1 EVEN Brittanje verklaar oorlog teen Nederland\n2 TYPE Oorlog\n2 DATE 20 DEC 1780\n2 NOTE Franse troepe arriveer by die Kaapkolonie om dit teen die Engelse te beskerm.\n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/1780s_in_South_Africa)",
                    "1 EVEN Franse troepe vertrek van die Kaap\n2 TYPE Oorlog\n2 DATE 1784\n2 NOTE Gevolg van die ondertekening van die [Vredesverdrag (3 Sep 1783)](https://en.wikipedia.org/wiki/Treaty_of_Paris_(1783)).\n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/1780s_in_South_Africa)",
                    "1 EVEN Franse Rewolusie\n2 TYPE Oorlog\n2 DATE FROM 1789 TO 1799\n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/French_Revolution)",
                    "1 EVEN Napoleontiese Oorloë\n2 TYPE Oorlog\n2 DATE FROM 18 MAY 1803 TO 20 NOV 1815\n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/Napoleonic_Wars)",
                    "1 EVEN Amerikaanse Burgeroorlog\n2 TYPE Oorlog\n2 DATE FROM APR 1861 TO MAY 1865\n2 NOTE In die lente van 1861 het spanning tussen die noordelike en suidelike Verenigde State oor kwessies soos staatsregte, federale gesag, weswaartse uitbreiding en slawerny ontplof in die Amerikaanse Burgeroorlog.\n2 SOUR [Wikipedia](https://goo.gl/ETtxkC)",
                    "1 EVEN Eerste Vryheidsoorlog\n2 TYPE Oorlog\n2 DATE FROM 20 DEC 1880 TO 23 MAR 1881\n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/First_Boer_War)",
                    "1 EVEN Tweede Vryheidsoorlog\n2 TYPE Oorlog\n2 DATE FROM 11 OCT 1899 TO 31 MAY 1902\n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/Second_Boer_War)",
                    "1 EVEN Eerste Wêreldoorlog\n2 TYPE Oorlog\n2 DATE FROM 28 JUL 1914 TO 11 NOV 1918\n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/World_War_I)",
                    "1 EVEN Tweede Wêreldoorlog\n2 TYPE Oorlog\n2 DATE FROM 1 SEP 1939 TO 2 SEP 1945\n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/World_War_II)",
                    // Towns founded
                    "1 EVEN Stellenbosch word gevestig\n2 TYPE Dorpstigting\n2 PLAC Stellenbosch, Western Cape, South Africa\n2 DATE 6 NOV 1679\n2 NOTE [Wikipedia](https://en.wikipedia.org/wiki/1660s_in_South_Africa)",
                    "1 EVEN Grahamstad word gevestig\n2 TYPE Dorpstigting\n2 DATE 1812\n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/1812_in_South_Africa)",
                    "1 EVEN Cradock word gevestig\n2 TYPE Dorpstigting\n2 DATE 27 AUG 1818\n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/1818_in_South_Africa)",
                    "1 EVEN Victoria-Wes word gevestig\n2 TYPE Dorpstigting\n2 DATE 1844\n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/1844_in_South_Africa)",
                    //  Congregations founded
                    "1 EVEN Eerste NG Kerk gemeente gestig\n2 TYPE Gemeente gestig\n2 DATE 18 AUG 1665\n2 NOTE J. van Arkel word as eerste predikant aangestel. \n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/1660s_in_South_Africa)",
                    // Political change
                    "1 EVEN Jan van Riebeeck arriveer aan die Kaap\n2 TYPE Historiese Gebeurtenis\n2 DATE 6 APR 1652\n2 NOTE Jan van Riebeeck arriveer by die Kaap in die *Drommedaris* en stel 'n voorraadstasie en vestings op vir die Nederlandse Oos-Indiese Kompanjie.\n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/1650s_in_South_Africa)",
                    "1 EVEN Die Kaap word 'n Britse Kolonie\n2 TYPE Historiese Gebeurtenis\n2 DATE 5 MAR 1797\n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/1790s_in_South_Africa)",
                    "1 EVEN Suid-Afrikaanse Republiek\n2 TYPE Historiese Gebeurtenis\n2 DATE FROM 1852 TO 1902\n2 NOTE Die Suid-Afrikaanse Republiek (Nederlands: *Zuid-Afrikaansche Republiek*, ZAR), ook bekend as die Transvaal, was 'n onafhanklike en internasionaal erkende land in Suider-Afrika.\n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/South_African_Republic)",
                    "1 EVEN Oranje-Vrystaat\n2 TYPE Historiese Gebeurtenis\n2 DATE FROM 1854 TO 1902\n2 NOTE Die Oranje-Vrystaat was 'n onafhanklike Boere-republiek in Suid-Afrika. Dit is later 'n Britse kolonie en 'n provinsie van die Unie van Suid-Afrika.\n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/Orange_Free_State)",
                    "1 EVEN Unie van Suid-Afrika\n2 TYPE Historiese Gebeurtenis\n2 DATE 31 MAY 1910\n2 NOTE Die Unie van Suid-Afrika word gestig.\n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/Union_of_South_Africa)",
                    "1 EVEN Republiek van Suid-Afrika\n2 TYPE Historiese Gebeurtenis\n2 DATE 31 MAY 1961\n2 NOTE Suid-Afrika word 'n republiek.\n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/1961_in_South_Africa)",
                    "1 EVEN Eerste algemene verkiesing\n2 TYPE Historiese Gebeurtenis\n2 PLAC South Africa\n2 DATE 27 APR 1994\n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/South_African_general_election,_1994)",
                    "1 EVEN Nelson Mandela word uit die tronk vrygelaat\n2 TYPE Historiese Gebeurtenis\n2 DATE 11 FEB 1990\n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/1990_in_South_Africa)",                
                    // Natuurrampe
                    "1 EVEN Droogte\n2 TYPE Natuurramp\n2 DATE 1809\n2 NOTE 'n Ernstige droogte tref die oostelike grensgebied.\n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/1809_in_South_Africa)",
                    // Economic events
                    "1 EVEN Britse pond word aanvaar\n2 TYPE Ekonomiese Gebeurtenis\n2 DATE 1825\n2 NOTE Die rijksdaalder (Nederlands: *Rijsksdaalder*) word omgeskakel na die Britse pond.\n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/1825_in_South_Africa)",
                    "1 EVEN Ekonomiese depressie\n2 TYPE Ekonomiese Gebeurtenis\n2 PLAC South Africa\n2 DATE 1865\n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/1865_in_South_Africa)",
                    "1 EVEN Diamante ontdek\n2 TYPE Ekonomiese Gebeurtenis\n2 PLAC Hopetown, Northern Cape, South Africa\n2 DATE 1867\n2 NOTE Die Eureka-diamant was die eerste diamant wat in Suid-Afrika ontdek is. Dit het 21,25 karaat geweeg.\n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/Eureka_Diamond)",
                    "1 EVEN Goud ontdek\n2 TYPE Ekonomiese Gebeurtenis\n2 PLAC Pilgrim's Rest, Mpumulanga, South Africa\n2 DATE SEP 1873\n2 NOTE Pilgrim’s Rest word as goudveld verklaar.\n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/Pilgrim%27s_Rest,_Mpumalanga)",
                    "1 EVEN Goud ontdek\n2 TYPE Ekonomiese Gebeurtenis\n2 PLAC Barberton, Mpumulanga, South Africa\n2 DATE 1881\n2 NOTE Goud word ontdek by Jamestown. Dit lei tot 'n goudstormloop.\n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/Barberton,_Mpumalanga#Gold)",
                    "1 EVEN Goud ontdek\n2 TYPE Ekonomiese Gebeurtenis\n2 PLAC Langlaagte, Johannesburg, Gauteng, South Africa\n2 DATE 1886\n2 NOTE Die ontdekking van die Hoofrif lei tot 'n massiewe goudstormloop.\n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/Mining_industry_of_South_Africa)",
                    "1 EVEN Wall Street stort in duie\n2 TYPE Ekonomiese Gebeurtenis\n2 DATE OCT 1929\n2 NOTE Die Wall Street ineenstorting veroorsaak die Groot Depressie.\n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/Wall_Street_Crash_of_1929)",                
                    // Historical events
                    "1 EVEN Bartolomeu Dias vaar om die Kaap\n2 TYPE Historiese Gebeurtenis\n2 DATE 12 MAR 1488\n2 PLAC Mosselbay, Western Cape, South Africa\n2 NOTE Bartolomeu Dias (of Bartholomew Dias) 'n Portugese seevaarder het suid gevaar langs die kus van Suider-Afrika tot by die Oranjerivier, is see toe gewaai en by Mosselbaai en Algoabaai aan land gekom. Hy rig die eerste *padrão* (klipkruis) aan die Suid-Afrikaanse kus op. By die Visrivier het sy manne geweier om verder te gaan. Hy vaar terug om die Kaap die Goeie Hoop, so genoem deur óf Dias óf sy beskermheer, koning Johannes II van Portugal vir die “groot hoop wat dit gegee het om die Indië te ontdek”. \n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/15th_century_in_South_Africa)",
                    "1 EVEN Vasco da Gama vaar om die Kaap\n2 TYPE Historiese Gebeurtenis\n2 DATE FROM 1497 TO 1499\n2 NOTE Vasco da Gama vaar om die Kaap op pad na Indië. 'n Portugese seevaarder, wat land by St. Helenabaai gewaar, die Kaap twee keer verbyvaar, met Kerstyd langs die kus van Natal verbygaan en dit Natal noem, en Arabiese Mosambiek bereik. Hy het 'n roete na Indië ontdek. Sy beskermheer was die opvolger van Johannes II, Manuel die Gelukkige. \n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/15th_century_in_South_Africa)",
                    "1 EVEN Antonio de Saldanha land by Tafelbaai\n2 TYPE Historiese Gebeurtenis\n2 DATE 1503\n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/Ant%C3%B3nio_de_Saldanha)",
                    "1 EVEN Francis Drake vaar om die Kaap\n2 TYPE Historiese Gebeurtenis\n2 DATE 18 JUL 1580\n2 NOTE 'n Engelse admiraal, sir Francis Drake, het om die Kaap op sy reis om die wêreld gevaar. Hy het dit \"'n statigste ding en die mooiste kaap wat ons in die hele omtrek van die aarde gesien het\" genoem. \n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/16th_century_in_South_Africa)",
                    "1 EVEN Nederlandse Oos-Indiese Kompanjie gestig\n2 TYPE Historiese Gebeurtenis\n2 DATE 20 MAR 1602\n2 NOTE Die *Vereenigde Oost-Indische Compagnie* (VOC) of beter bekend as die Nederlandse Oos-Indiese Kompanjie is in Nederland gevestig. \n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/1600s_in_South_Africa)",
                    "1 EVEN Eerste Vrijburgers\n2 TYPE Historiese Gebeurtenis\n2 DATE 1657\n2 PLAC Rondebosch, Western Cape, South Africa\n2 NOTE Die eerste nege mans het grondtoekennings langs die Liesbeeckrivier (nou *Rondebosch*) ontvang. \n2 SOUR [SA Timeline](https://mzone.mweb.co.za/residents/k75/timeline.html)",
                    "1 EVEN Jan van Riebeeck verlaat die Kaap\n2 TYPE Historiese Gebeurtenis\n2 DATE 7 MAY 1662\n2 NOTE Jan van Riebeeck verlaat die Kaap met bevordering tot 'n pos op die Raad van Justisie in Batavia. \n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/1660s_in_South_Africa)",
                    "1 EVEN Franse Hugenote\n2 TYPE Historiese Gebeurtenis\n2 DATE APR 1688\n2 NOTE Franse Hugenote-vlugtelinge arriveer ná die herroeping van die Edik van Nantes. Simon van der Stel, die Goewerneur van die Kaapkolonie vestig die Hugenote-vlugtelinge in die huidige Drakenstein-, Franschhoek- en Wellington-gebiede wat anderkant die Kaapkolonie was en aan die Khoikhoi-mense behoort het. \n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/1680s_in_South_Africa)",
                    "1 EVEN Sensus\n2 TYPE Historiese Gebeurtenis\n2 DATE 1754\n2 NOTE’n Bevolkingtelling in die Kaap toon dat daar 5 510 Europeërs en 6 279 slawe in die Kaapkolonie was. \n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/1750s_in_South_Africa)",
                    "1 EVEN Kolonisering\n2 TYPE Historiese Gebeurtenis\n2 DATE 1780\n2 NOTE Die Visrivier word die oostelike grens van die Kaapkolonie gemaak. \n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/1780s_in_South_Africa)",
                    "1 EVEN Nederlandse Oos-Indiese Kompanjie gaan bankrot\n2 TYPE Historiese Gebeurtenis\n2 DATE 1795\n2 NOTE Die Nederlandse Oos-Indiese Kompanjie is in finansiële puin. 29 Januarie – Boere het die amptenare van die Nederlandse Oos-Indiese Kompanjie geskors en 'n onafhanklike regering by Graaff Reinet gestig. 18 Junie - Swellendam volg Graaff Reinet en verklaar 'n republiek onder Hermanus Steyn. Nederland word deur die Franse onder leiding van Napoléon Bonaparte binnegeval. 'n Republiek word deur Nederlandse revolusionêres verklaar en die Prins van Oranje vlug na Engeland. 16 September – Britse magte onder generaal sir James Henry Craig neem die Kaapkolonie in beslag vir die stadhouer Prins William V van Oranje. Die republieke Graaff Reinet en Swellendam verwerp die Britte en die Britse leër word ingestuur. Die begin van vrye handel is aangekondig. \n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/1790s_in_South_Africa)",
                    "1 EVEN Britse setlaars\n2 TYPE Historiese Gebeurtenis\n2 DATE 1820\n2 NOTE 17 Maart – Die eerste Britse setlaars het met die *Nautilus* en die *Chapman* in Tafelbaai, Kaapstad aangekom. 1 Mei - Die *Albury* bereik Kaapstad en bring setlaars na Albany, Suid-Afrika. Hulle kom op 15 Mei in Algoabaai aan. 2 Mei - *La Belle Alliance* bereik Kaapstad. Sy het Britse setlaars na Algoabaai gebring. 4000 Britse setlaars het in Algoabaai (Port Elizabeth) begin aankom, hulle het hulle in Grahamstad en langs die grens gevestig. \n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/1820_in_South_Africa)",
                    "1 EVEN Groot trek\n2 TYPE Historiese Gebeurtenis\n2 DATE 1835\n2 NOTE *Voortrekkers* begin die Kaapkolonie verlaat. \n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/1835_in_South_Africa)",    
                    // Prime ministers of SA
                    "1 EVEN Louis Botha\n2 TYPE Eerste minister\n2 DATE FROM 31 MAY 1910 TO 27 AUG 1919\n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/Prime_Minister_of_South_Africa)",
                    "1 EVEN Jan Christiaan Smuts\n2 TYPE Eerste minister\n2 DATE FROM 3 SEP 1919 TO 30 JUN 1924\n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/Prime_Minister_of_South_Africa)",
                    "1 EVEN James Barry Munnik Hertzog\n2 TYPE Eerste minister\n2 DATE FROM 30 JUN 1924 TO 5 SEP 1939\n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/Prime_Minister_of_South_Africa)",
                    "1 EVEN Jan Christiaan Smuts\n2 TYPE Eerste minister\n2 DATE FROM 5 SEP 1939 TO 4 JUN 1948\n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/Prime_Minister_of_South_Africa)",
                    "1 EVEN Daniel Francois Malan\n2 TYPE Eerste minister\n2 DATE FROM 4 JUN 1948 TO 30 NOV 1954\n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/Prime_Minister_of_South_Africa)",
                    "1 EVEN Johannes Gerhardus Strijdom\n2 TYPE Eerste minister\n2 DATE FROM 30  NOV 1954 TO 24 AUG 1958\n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/Prime_Minister_of_South_Africa)",
                    "1 EVEN Hendrik Frensch Verwoerd\n2 TYPE Eerste minister\n2 DATE FROM 2 SEP 1958 TO 6 SEP 1966\n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/Prime_Minister_of_South_Africa)",
                    "1 EVEN Balthazar Johannes Vorster\n2 TYPE Eerste minister\n2 DATE FROM 13 SEP 1966 TO 2 OCT 1978\n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/Prime_Minister_of_South_Africa)",
                    "1 EVEN Pieter Willem Botha\n2 TYPE Eerste minister\n2 DATE FROM 9 OCT 1978 TO 14 SEP 1984\n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/Prime_Minister_of_South_Africa)",
                    // Executive presidents pre 1994
                    "1 EVEN Pieter Willem Botha\n2 TYPE Uitvoerende President\n2 DATE FROM 14 SEP 1984 TO 15 AUG 1989\n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/State_President_of_South_Africa#List_of_state_presidents_of_South_Africa)",
                    "1 EVEN Jan Christiaan Heunis\n2 TYPE Uitvoerende President (acting)\n2 DATE FROM 19 JAN 1989 TO 15 MAR 1989\n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/State_President_of_South_Africa#List_of_state_presidents_of_South_Africa)",
                    "1 EVEN Frederik Willem de Klerk\n2 TYPE Uitvoerende President\n2 DATE FROM 15 AUG 1989 TO 10 MAY 1994\n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/State_President_of_South_Africa#List_of_state_presidents_of_South_Africa)",
                    // Presidents post 1994
                    "1 EVEN Nelson Rolihlahla Mandela\n2 TYPE President\n2 DATE FROM 10 MAY 1994 TO 14 JUN 1999\n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/President_of_South_Africa#Presidents_of_South_Africa_(1994%E2%80%93present))",
                    "1 EVEN Thabo Mvuyelwa Mbeki\n2 TYPE President\n2 DATE FROM 14 JUN 1999 TO 24 SEP 2008\n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/President_of_South_Africa#Presidents_of_South_Africa_(1994%E2%80%93present))",
                    "1 EVEN Kgalema Petrus Motlanthe\n2 TYPE President\n2 DATE FROM 25 SEP 2008 TO 9 MAY 2009\n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/President_of_South_Africa#Presidents_of_South_Africa_(1994%E2%80%93present))",
                    "1 EVEN Jacob Gedleyihlekisa Zuma\n2 TYPE President\n2 DATE FROM 9 MAY 2009 TO 14 FEB 2018\n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/President_of_South_Africa#Presidents_of_South_Africa_(1994%E2%80%93present))",
                    "1 EVEN Matamela Cyril* Ramaphosa\n2 TYPE President\n2 DATE FROM 15 FEB 2018\n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/President_of_South_Africa#Presidents_of_South_Africa_(1994%E2%80%93present))",
                ]);
            default:
                return new Collection([
                    // Epidemics
                    "1 EVEN Smallpox\n2 TYPE Epidemic\n2 DATE 16 MAR 1713\n2 NOTE Smallpox epidemic breaks out at the Cape Colony. \n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/1710s_in_South_Africa)",
                    "1 EVEN Smallpox\n2 TYPE Epidemic\n2 DATE 1 MAY 1755\n2 NOTE Smallpox epidemic breaks out at Cape Colony. A total of 2,372 people die. \n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/1750s_in_South_Africa)",
                    "1 EVEN Influenza\n2 TYPE Epidemic\n2 DATE FROM 1857 TO 1859\n2 NOTE In 1857-1859, there was an extremely severe worldwide outbreak of influenza. \n2 SOUR [Wikipedia](https://goo.gl/XVwD6F)",
                    "1 EVEN Bubonic plague\n2 TYPE Epidemic\n2 DATE 1 FEB 1901\n2 NOTE Bubonic plague breaks out in Cape Town. \n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/1901_in_South_Africa)",
                    "1 EVEN Pneumonic plague\n2 TYPE Epidemic\n2 DATE FEB 1904\n2 NOTE Pneumonic plague breaks out in Johannesburg. \n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/1904_in_South_Africa)",
                    "1 EVEN Tuberculosis\n2 TYPE Epidemic\n2 DATE 1906\n2 NOTE Tuberculosis reaches epidemic proportions in South Africa. \n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/1906_in_South_Africa)",
                    "1 EVEN Smallpox\n2 TYPE Epidemic\n2 DATE 1912\n2 NOTE Smallpox outbreaks: The outbreak of smallpox is reported in the Malay Location, Johannesburg and cases of smallpox are discovered in Durban. \n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/1912_in_South_Africa)",
                    "1 EVEN Spanish flu\n2 TYPE Epidemic\n2 DATE 1918\n2 NOTE An estimated 500,000 people die from the Spanish flu epidemic in South Africa, the fifth hardest hit country in the world. \n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/1918_in_South_Africa)",
                    "1 EVEN First covid-19 case in SA\n2 TYPE Epidemic\n2 DATE 5 MAR 2020\n2 SOUR [NICD](https://www.nicd.ac.za/first-case-of-covid-19-coronavirus-reported-in-sa/)",
                    // Wars
                    "1 EVEN Britain declares war on the Netherlands\n2 TYPE War\n2 DATE 20 DEC 1780\n2 NOTE French troops arrive at the Cape Colony to guard it against the English. \n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/1780s_in_South_Africa)",
                    "1 EVEN French troops depart the Cape\n2 TYPE War\n2 DATE 1784\n2 NOTE Consequence of signing the [Treaty of Paris (3 Sep 1783)](https://en.wikipedia.org/wiki/Treaty_of_Paris_(1783)). \n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/1780s_in_South_Africa)",
                    "1 EVEN French Revolution\n2 TYPE War\n2 DATE FROM 1789 TO 1799\n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/French_Revolution)",
                    "1 EVEN Napoleonic Wars\n2 TYPE War\n2 DATE FROM 18 MAY 1803 TO 20 NOV 1815\n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/Napoleonic_Wars)",
                    "1 EVEN American Civil War\n2 TYPE War\n2 DATE FROM APR 1861 TO MAY 1865\n2 NOTE In the spring of 1861, tensions between the northern and southern United States over issues including state's right versus federal authority, westward expansion and slavery exploded into the American Civil War. \n2 SOUR [Wikipedia](https://goo.gl/ETtxkC)",
                    "1 EVEN First Boer War\n2 TYPE War\n2 DATE FROM 20 DEC 1880 TO 23 MAR 1881\n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/First_Boer_War)",
                    "1 EVEN Second Boer War\n2 TYPE War\n2 DATE FROM 11 OCT 1899 TO 31 MAY 1902\n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/Second_Boer_War)",
                    "1 EVEN World War I\n2 TYPE War\n2 DATE FROM 28 JUL 1914 TO 11 NOV 1918\n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/World_War_I)",
                    "1 EVEN World War II\n2 TYPE War\n2 DATE FROM 1 SEP 1939 TO 2 SEP 1945\n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/World_War_II)",
                    // Towns founded
                    "1 EVEN Stellenbosch is founded\n2 TYPE Town founded\n2 PLAC Stellenbosch, Western Cape, South Africa\n2 DATE 6 NOV 1679\n2 NOTE [Wikipedia](https://en.wikipedia.org/wiki/1660s_in_South_Africa)",
                    "1 EVEN The settlement of Grahamstown is founded\n2 TYPE Town founded\n2 DATE 1812\n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/1812_in_South_Africa)",
                    "1 EVEN Cradock is founded\n2 TYPE Town founded\n2 DATE 27 AUG 1818\n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/1818_in_South_Africa)",
                    "1 EVEN Settlement of Victoria West is established\n2 TYPE Town founded\n2 DATE 1844\n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/1844_in_South_Africa)",
                    // Congregations founded
                    "1 EVEN First Dutch Reformed Church congregation founded\n2 TYPE Church founded\n2 DATE 18 AUG 1665\n2 NOTE  J. van Arkel is appointed the first minister. \n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/1660s_in_South_Africa)",
                    // Political change
                    "1 EVEN Jan van Riebeeck arrives at the Cape\n2 TYPE Historical Event\n2 DATE 6 APR 1652\n2 NOTE Jan van Riebeeck arrives at the Cape in the *Drommedaris* and sets up a supply station and fortifications for the Dutch East India Company. \n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/1650s_in_South_Africa)",
                    "1 EVEN The Cape becomes a British Colony\n2 TYPE Historical Event\n2 DATE 5 MAR 1797\n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/1790s_in_South_Africa)",
                    "1 EVEN South African Republic\n2 TYPE Historical Event\n2 DATE FROM 1852 TO 1902\n2 NOTE The South African Republic (Dutch: *Zuid-Afrikaansche Republiek*, ZAR), often referred to as the Transvaal and sometimes as the Republic of Transvaal, was an independent and internationally recognised country in Southern Africa from 1852 to 1902. \n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/South_African_Republic)",
                    "1 EVEN Orange Free State\n2 TYPE Historical Event\n2 DATE FROM 1854 TO 1902\n2 NOTE The Orange Free State (Dutch: *Oranje-Vrijstaat*, Afrikaans: *Oranje-Vrystaat*) was an independent *Boer* sovereign republic in southern Africa during the second half of the 19th century, and later a British colony and a province of the Union of South Africa. It is the historical precursor to the present-day Free State province. \n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/Orange_Free_State)",
                    "1 EVEN Union of South Africa\n2 TYPE Historical Event\n2 DATE 31 MAY 1910\n2 NOTE Union of South Africa established. \n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/Union_of_South_Africa)",
                    "1 EVEN Republic of South Africa\n2 TYPE Historical Event\n2 DATE 31 MAY 1961\n2 NOTE South Africa becomes a republic. \n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/1961_in_South_Africa)",
                    "1 EVEN First General Elections\n2 TYPE Historical Event\n2 PLAC South Africa\n2 DATE 27 APR 1994\n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/South_African_general_election,_1994)",
                    "1 EVEN Nelson Mandela released from prison\n2 TYPE Historical Event\n2 DATE 11 FEB 1990\n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/1990_in_South_Africa)",
                    // Natural disasters
                    "1 EVEN Drought\n2 TYPE Natural disaster\n2 DATE 1809\n2 NOTE A severe drought occurs in the eastern frontier region. \n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/1809_in_South_Africa)",
                    // Economic Events
                    "1 EVEN British sterling adopted\n2 TYPE Economic Event\n2 DATE 1825\n2 NOTE Rix dollar (Dutch: *Rijsksdaalder*) is converted into the British sterling. \n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/1825_in_South_Africa)",
                    "1 EVEN Economic depression\n2 TYPE Economic Event\n2 PLAC South Africa\n2 DATE 1865\n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/1865_in_South_Africa)",
                    "1 EVEN Diamonds discovered\n2 TYPE Economic Event\n2 PLAC Hopetown, Northern Cape, South Africa\n2 DATE 1867\n2 NOTE The Eureka Diamond was the first diamond discovered in South Africa. It weighed 21.25 carats (4.250 g), and was found by Erasmus Jacobs near Hopetown on the Orange River in 1867. The diamond, cut to a 10.73-carat (2.146 g) cushion-shaped brilliant, is currently on display at the Mine Museum in Kimberley. The discovery of diamonds in South Africa led to the Kimberley Diamond Rush, and marked the beginning of the Mineral Revolution. \n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/Eureka_Diamond)",
                    "1 EVEN Gold discovered\n2 PLAC Pilgrim's Rest, Mpumulanga, South Africa\n2 TYPE Economic Event\n2 DATE SEP 1873\n2 NOTE Pilgrim's rest declared a gold field. \n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/Pilgrim%27s_Rest,_Mpumalanga)",
                    "1 EVEN Gold discovered\n2 TYPE Economic Event\n2 PLAC Barberton, Mpumulanga, South Africa\n2 DATE 1881\n2 NOTE In 1881 gold in the Barberton area was discovered by Tom McLachlan who found alluvial gold at Jamestown. However due to the location (the hot lowveld region was rife with malaria) no-one wanted to go there until Auguste Roberts (French Bob) discovered gold in Concession Creek in 20 June 1883. This discovery resulted in a gold rush to the area. \n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/Barberton,_Mpumalanga#Gold)",
                    "1 EVEN Gold discovered\n2 TYPE Economic Event\n2 PLAC Langlaagte, Johannesburg, Gauteng, South Africa\n2 DATE 1886\n2 NOTE Discovery of the Main Reef in Witwatersrand. Gold rushes to Pilgrim's Rest and Barberton were precursors to the biggest discovery of all, the Main Reef/Main Reef Leader on Gerhardus Oosthuizen's farm Langlaagte, Portion C, in 1886, the Witwatersrand Gold Rush and the subsequent rapid development of the gold field there, the biggest of them all. \n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/Mining_industry_of_South_Africa)",
                    "1 EVEN Wall Street Crash\n2 TYPE Economic Event\n2 DATE OCT 1929\n2 NOTE The Wall Street Crash sets off the Great Depression, the most severe worldwide economic depression in the 20th century. \n2 SOUR [Wikipedia](https://goo.gl/MgHbRM)",
                    "1 EVEN Rand adopted\n2 TYPE Economic Event\n2 DATE 14 FEB 1961\n2 PLAC South Africa\n2 NOTE Decimalisation of currency replaces the South African pound with the South African rand. \n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/1961_in_South_Africa)",
                    // Historical events
                    "1 EVEN Bartolomeu Dias rounds the Cape\n2 TYPE Historical Event\n2 DATE 12 MAR 1488\n2 PLAC Mosselbay, Western Cape, South Africa\n2 NOTE Bartolomeu Dias (or Bartholomew Dias) a Portuguese navigator sailed south along the coast of Southern Africa as far as the Orange River, was blown out to sea and made landfall at Mossel Bay and Algoa Bay. He erects the first *padrão* (stone cross) on the South African coast. At the Fish River his men refused to go any further. He returns sailing round the Cape of Good Hope, named by either Dias or his patron, King John II of Portugal for the “great hope it gave of discovering the Indies”. \n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/15th_century_in_South_Africa)",
                    "1 EVEN Vasco da Gama rounds the Cape\n2 TYPE Historical Event\n2 DATE FROM 1497 TO 1499\n2 NOTE Vasco da Gama rounds the Cape on the way to India. A Portuguese navigator, he sighted land at St. Helena Bay, doubled the Cape, passed up the coast of Natal at Christmas time and named it Natal, and reached Arab Mozambique. He had discovered a route to India. His patron was the successor to John II, Manuel the Fortunate. \n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/15th_century_in_South_Africa)",
                    "1 EVEN Antonio de Saldanha lands at Table Bay\n2 TYPE Historical Event\n2 DATE 1503\n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/Ant%C3%B3nio_de_Saldanha)",
                    "1 EVEN Francis Drake rounds the Cape\n2 TYPE Historical Event\n2 DATE 18 JUL 1580\n2 NOTE An English admiral, Sir Francis Drake, rounded the Cape on his voyage round the world. He called it “a most stately thing and the fairest cape we saw in the whole circumference of the earth”. \n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/16th_century_in_South_Africa)",
                    "1 EVEN Dutch East India Company established\n2 TYPE Historical Event\n2 DATE 20 MAR 1602\n2 NOTE The *Vereenigde Oost-Indische Compagnie* (VOC) or better known as the Dutch East India Company is established in the Netherlands. \n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/1600s_in_South_Africa)",
                    "1 EVEN First Freeburghers (Vrijburgers)\n2 TYPE Historical Event\n2 DATE 1657\n2 PLAC Rondebosch, Western Cape, South Africa\n2 NOTE The first nine men received grants of land along the Liesbeeck River (now *Rondebosch*). \n2 SOUR [SA Timeline](https://mzone.mweb.co.za/residents/k75/timeline.html)",
                    "1 EVEN Jan van Riebeeck leaves the Cape\n2 TYPE Historical Event\n2 DATE 7 MAY 1662\n2 NOTE Jan van Riebeeck leaves the Cape on promotion to a position on the Council of Justice in Batavia. \n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/1660s_in_South_Africa)",
                    "1 EVEN French Huguenots\n2 TYPE Historical Event\n2 DATE APR 1688\n2 NOTE French Huguenot refugees arrive after the revocation of the Edict of Nantes. Simon van der Stel, the Governor of the Cape Colony settles the Huguenot refugees in the present day Drakenstein, Franschhoek and Wellington areas which were beyond the Cape Colony and belonged to the Khoikhoi people. \n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/1680s_in_South_Africa)",
                    "1 EVEN Census\n2 TYPE Historical Event\n2 DATE 1754\n2 NOTE A population count in the Cape shows that there were 5,510 Europeans and 6,279 slaves in the Cape Colony. \n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/1750s_in_South_Africa)",
                    "1 EVEN Colonisation\n2 TYPE Historical Event\n2 DATE 1780\n2 NOTE The Fish River is made the eastern boundary of the Cape Colony. \n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/1780s_in_South_Africa)",
                    "1 EVEN Dutch East India Company goes bankrupt\n2 TYPE Historical Event\n2 DATE 1795\n2 NOTE The Dutch East India Company is in financial ruins. 29 January – Farmers expelled the officials of the Dutch East India Company and established an independent government at Graaff Reinet. 18 June - Swellendam follows Graaff Reinet and declares a republic under Hermanus Steyn. The Netherlands is invaded by the French under the leadership of Napoléon Bonaparte. A republic is declared by Dutch revolutionaires and the Prince of Orange flees to England. 16 September – British forces under General Sir James Henry Craig seizes the Cape Colony for the Stadtholder Prince William V of Orange. The republics of Graaff Reinet and Swellendam reject the British and the British army is sent in. The start of free trade was announced. \n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/1790s_in_South_Africa)",
                    "1 EVEN British settlers\n2 TYPE Historical Event\n2 DATE 1820\n2 NOTE 17 March - The first British settlers arrived in Table Bay, Cape Town on the *Nautilus* and the *Chapman*. 1 May - The *Albury* reaches Cape Town bringing settlers to Albany, South Africa. They arrive in Algoa Bay on 15 May. 2 May - *La Belle Alliance* reached Cape Town. She brought British settlers to Algoa Bay. 4000 British settlers started arriving in Algoa Bay (Port Elizabeth), they settled in Grahamstown and along the frontier. \n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/1820_in_South_Africa)",
                    "1 EVEN Great trek\n2 TYPE Historical Event\n2 DATE 1835\n2 NOTE *Voortrekkers* start leaving the Cape Colony. \n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/1835_in_South_Africa)",
                    // Prime ministers of SA
                    "1 EVEN Louis Botha\n2 TYPE Prime minister\n2 DATE FROM 31 MAY 1910 TO 27 AUG 1919\n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/Prime_Minister_of_South_Africa)",
                    "1 EVEN Jan Christiaan Smuts\n2 TYPE Prime minister\n2 DATE FROM 3 SEP 1919 TO 30 JUN 1924\n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/Prime_Minister_of_South_Africa)",
                    "1 EVEN James Barry Munnik Hertzog\n2 TYPE Prime minister\n2 DATE FROM 30 JUN 1924 TO 5 SEP 1939\n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/Prime_Minister_of_South_Africa)",
                    "1 EVEN Jan Christiaan Smuts\n2 TYPE Prime minister\n2 DATE FROM 5 SEP 1939 TO 4 JUN 1948\n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/Prime_Minister_of_South_Africa)",
                    "1 EVEN Daniel Francois Malan\n2 TYPE Prime minister\n2 DATE FROM 4 JUN 1948 TO 30 NOV 1954\n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/Prime_Minister_of_South_Africa)",
                    "1 EVEN Johannes Gerhardus Strijdom\n2 TYPE Prime minister\n2 DATE FROM 30  NOV 1954 TO 24 AUG 1958\n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/Prime_Minister_of_South_Africa)",
                    "1 EVEN Hendrik Frensch Verwoerd\n2 TYPE Prime minister\n2 DATE FROM 2 SEP 1958 TO 6 SEP 1966\n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/Prime_Minister_of_South_Africa)",
                    "1 EVEN Balthazar Johannes Vorster\n2 TYPE Prime minister\n2 DATE FROM 13 SEP 1966 TO 2 OCT 1978\n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/Prime_Minister_of_South_Africa)",
                    "1 EVEN Pieter Willem Botha\n2 TYPE Prime minister\n2 DATE FROM 9 OCT 1978 TO 14 SEP 1984\n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/Prime_Minister_of_South_Africa)",
                    // Executive presidents pre 1994
                    "1 EVEN Pieter Willem Botha\n2 TYPE Executive President\n2 DATE FROM 14 SEP 1984 TO 15 AUG 1989\n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/State_President_of_South_Africa#List_of_state_presidents_of_South_Africa)",
                    "1 EVEN Jan Christiaan Heunis\n2 TYPE Executive President (acting)\n2 DATE FROM 19 JAN 1989 TO 15 MAR 1989\n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/State_President_of_South_Africa#List_of_state_presidents_of_South_Africa)",
                    "1 EVEN Frederik Willem de Klerk\n2 TYPE Executive President\n2 DATE FROM 15 AUG 1989 TO 10 MAY 1994\n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/State_President_of_South_Africa#List_of_state_presidents_of_South_Africa)",
                    // Presidents post 1994
                    "1 EVEN Nelson Rolihlahla Mandela\n2 TYPE President\n2 DATE FROM 10 MAY 1994 TO 14 JUN 1999\n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/President_of_South_Africa#Presidents_of_South_Africa_(1994%E2%80%93present))",
                    "1 EVEN Thabo Mvuyelwa Mbeki\n2 TYPE President\n2 DATE FROM 14 JUN 1999 TO 24 SEP 2008\n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/President_of_South_Africa#Presidents_of_South_Africa_(1994%E2%80%93present))",
                    "1 EVEN Kgalema Petrus Motlanthe\n2 TYPE President\n2 DATE FROM 25 SEP 2008 TO 9 MAY 2009\n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/President_of_South_Africa#Presidents_of_South_Africa_(1994%E2%80%93present))",
                    "1 EVEN Jacob Gedleyihlekisa Zuma\n2 TYPE President\n2 DATE FROM 9 MAY 2009 TO 14 FEB 2018\n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/President_of_South_Africa#Presidents_of_South_Africa_(1994%E2%80%93present))",
                    "1 EVEN Matamela Cyril* Ramaphosa\n2 TYPE President\n2 DATE FROM 15 FEB 2018\n2 SOUR [Wikipedia](https://en.wikipedia.org/wiki/President_of_South_Africa#Presidents_of_South_Africa_(1994%E2%80%93present))",
                ]);
        }
    }
};
