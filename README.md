Google Adsense Ad Tracker
=========================

Purpose
-------
Inserts Google Adsense tracking code for an ad.
https://www.google.com/adsense/

Configuration
-------------
You must first create an account on Google Analytics
https://www.google.com/adsense/
Once you have created the account, you must obtain the following configuration information:
* Tracking id for the client from the configuration menu for your website. They consist normally of a set of numbers and letters (like XX-YYY-ZZZZZ).
* Tracking id for the advertising slot from the ads configuration menu for your website. They consist normally of a set of numbers and letters (like XXXXX).
* Width of the ad slot
* Height of the ad slot

Usage
-----
	$googleAdSenseAd = new GoogleAdSenseAd();
	$googleAdSenseAd->setAdClient("XX-YYY-ZZZZZ");
	$googleAdSenseAd->setAdSlot("XXXXX");
	$googleAdSenseAd->setWidth(123);
	$googleAdSenseAd->setHeight(123);
	$googleAdSenseAd->render();

Copyright
---------
Creative Commons CC-BY-SA License (http://creativecommons.org/licenses/by-sa/3.0/)

Copyright (c) 2012-3 Diaz-Caneja Consultores

Contact
--------
Gerardo Colorado Diaz-Caneja   gcdiazcaneja@diaz-caneja-consultores.com

Github: https://github.com/gerardocdc/google-adsense-ad-tracker (feel free to contribute)