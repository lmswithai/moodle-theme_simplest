<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Theme functions.
 *
 * @package   theme_simplest
 * @copyright 2020, LMSwithAI <contact@lmswithai.com>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();


$string['choosereadme'] = 'Szablon Simplest jest motywem potomnym szablonu Classic.';
$string['pluginname'] = 'Simplest';
$string['region-side-pre'] = 'Lewo';
$string['region-side-post'] = 'Prawo';
$string['configtitle'] = 'Simplest';
$string['madeby'] = 'Stworzone przez';

// Privacy.
$string['privacy:metadata'] = 'Temat Simplest nie przechowuje żadnych personalnych danych.';

// Other settings.
$string['othersettings'] = 'Inne ustawienia';
$string['rawscsspre'] = 'Surowy początkowy SCSS';
$string['rawscsspre_desc'] = 'W tym polu możesz podać inicjujący kod SCSS, zostanie on wstrzyknięty przed wszystkim innym. Przez większość czasu będziesz używać tego ustawienia do definiowania zmiennych.';
$string['rawscss'] = 'Surowy SCSS';
$string['rawscss_desc'] = 'Użyj tego pola, aby podać kod SCSS lub CSS, który zostanie wstrzyknięty na końcu arkusza stylów.';

// Inspirational quotes settings.
$string['inspirationalquotessettings'] = 'Ustawienia inspirujące cytaty';
$string['inspirationalquotesdef'] = 'Każdy, kto pracuje nad sztuczną inteligencją, wie, że komputery pokonają nas we wszystkim.';
$string['inspirationalquotesdesc'] = 'Każdy cytat musi być w nowej lini.<br>Postaraj się, aby cytaty nie były za długi!';
$string['disableinspirationalquotes'] = 'Wyłącz blok cytatów';
$string['disableinspirationalquotesdesc'] = 'Zaznaczenie tego pola wyłączy blok cytatów';
$string['inspirationalquotesduration'] = 'Czas cytatów';
$string['inspirationalquotesdurationdesc'] = 'Czas wyświetlenia cytatu.';

// General settings.
$string['generalsettings'] = 'Ustawienia ogólne';
$string['navbardark'] = 'Użyj ciemnego stylu paska nawigacyjnego';
$string['navbardark_desc'] = 'Zamienia kolory tekstu i tła paska nawigacyjnego u góry strony między ciemnymi a jasnymi.';
$string['backgroundimage'] = 'Grafika tła';
$string['backgroundimage_desc'] = 'Obraz do wyświetlenia jako tło witryny. Przesłany tutaj obraz tła zastąpi obraz tła w plikach predefiniowanych motywów.';
$string['brandcolor'] = 'Kolor marki';
$string['brandcolor_desc'] = 'Kolor akcentu.';

// Preset.
$string['preset'] = 'Style szablonu';
$string['preset_desc'] = 'Wybierz predefiniowane ustawienie, aby zmienić wygląd motywu.';
$string['preset:default'] = 'Domyślny';
$string['preset:easter'] = 'Wielkanoc';
$string['preset:spring'] = 'Wiosna';
$string['preset:mourning'] = 'Żałoba';

// Preset temporary settings.
$string['settingspresettemporary'] = 'Ustawienia stylu tymczasowego:';
$string['limitedbydate'] = 'Włącz ograniczenie daty dla stylu';
$string['limitedbydate_desc'] = 'Włącza dany styl w określonej dacie. Po tym czasie styl powróci do domyślnego.';
$string['startdate'] = 'Start daty';
$string['startdate_desc'] = 'Data kiedy styl będzie włączony.';
$string['enddate'] = 'Zakończenie daty';
$string['enddate_desc'] = 'Data kiedy styl będzie wyłączony. Po tym czasie powróci do standardowego.';
$string['errordate'] = 'Błędna data. Musisz wpisać date zgodnie z formatem YYYY-MM-DD np.2022-03-17.';
$string['errormonth'] = 'Błędna ilość dni. Ten miesiąc w roku {$a->year} ma tylko {$a->days} dni.';
$string['change_style'] = 'Zmień styl szablonu';
$string['presettemporary'] = 'Styl tymaczasowy';
$string['presettemporary_desc'] = 'Wybierz styl jaki ma się ustawić w podanym okresie czasowym.';

// Other settings.
$string['settingsother'] = 'Inne ustawienia:';
$string['redir'] = 'Przekieruj do kursu';
$string['redir_desc'] = 'Przekieruj od razu do kursu jeżeli użytkownik jest zapisany tylko jeden kurs.';
$string['simpleusermenu'] = 'Uproszczenie menu użytkownika';
$string['simpleusermenu_desc'] = 'Ukrywa link do kokpitu i profilu. Dodaje link do zmiany hasła.';
