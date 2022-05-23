<?php

/*
Second Show:
============
s = Seconds, with leading zeros.(ex: 00-59)

Minute Show:
============
i = Minutes, with leading zeros.(ex: 00-59)

Hour Show:
==========
g = Hour, 12-hour, without leading zeros.(ex: 1-12)
h = Hour, 12-hour, with leading zeros.(ex: 01-12) 
G = Hour, 24-hour, without leading zeros.(ex: 0-23)
H = Hour, 24-hour, with leading zeros.(ex: 00-23)

AM/PM Show:
===========
a = Lowercase(am, pm)
A = Uppercase(AM, PM)

Timezone Show:
==============
T = Timezone abbreviation (eg: EST, MDT)
c =	ISO 8601 (eg: 2004-02-12T15:19:21+00:00)
r =	RFC 2822 (eg: Thu, 21 Dec 2000 16:01:07 +0200)
U =	Unix timestamp(seconds since Unix Epoch) (eg: 1455880176)	

Weekday Show (ex: Saturday,Sunday,Monday,Tuesday,Wednesday,Thursday,Friday):
========================================================== 
l = Full name for day of the week.(ex: Sunday – Saturday)
D = Three letter name for day of the week.(ex: Sun - Sat)

Day of Month Show (ex: 01-31):
============================== 
d = The day of the month (Numeric With Zero).(ex: 01-31)
j = The day of the month (Numeric Without Zero).(ex: 1-31)
S = The English suffix for the day of the month.(ex: st)

Month Show (ex: January,February,March,April,May,June,July,August,September,October,November,December):
===============
m = Numeric name with zero for the month.(ex: 01-12)
n = Numeric name without zero for the month.(ex: 1-12)
F = Full name for the month.(ex: January – December)
M = Three letters name for the month.(ex: Jan – Dec)

Year Show:
==========
Y = The year in 4 digits.(ex: 2019)
y = The year's last 2 digits.(ex: 19)
*/

// 01. the_date() function
the_date(
'$format(Second, Minute, Hour, am/pm, Week, Day, Month, Year) = string, optional',
'$before(HTML First Tags) = string, optional',
'$after(HTML Last Tags) = string, optional',
'$echo(Display Show) = bool, optional, true'
);

/*
*** Notes:
==========
01. the_date() function use only one time in post loop.
*/
    
// 02. get_the_date() function
echo get_the_date(
'$format(Second, Minute, Hour, am/pm, Week, Day, Month, Year) = string, optional',
'$post(WP_Post) = int, optional, null'
);

// 03. the_time() function
the_time(
'$format(Second, Minute, Hour, am/pm, Week, Day, Month, Year) = string, optional'
);

// 04. get_the_time() function
echo get_the_time(
'$format(Second, Minute, Hour, am/pm, Week, Day, Month, Year) = string, optional',
'$post(WP_Post) = int, optional, null'
);

// 05. date_i18n() function
date_i18n(
'$format(Second, Minute, Hour, am/pm, Week, Day, Month, Year) = string, required',
'$timestamp_with_offset = int|bool, optional, false',
'$gmt = bool, optional, false'
); 

echo date_i18n(
/* translators: Copyright date format, see https://www.php.net/manual/datetime.format.php */
_x( 'Y', 'copyright date format', 'text-domain' )
);