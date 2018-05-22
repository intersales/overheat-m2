interSales Overheat M2
===================
Track your Magento store with Overheat heatmap tracking.

Extension Website: https://www.intersales.de/magento-extensions/overheat.html
Extension Documentation: https://www.intersales.de/fileadmin/usr/website/magento-extensions/overheat-m2-doku_de.pdf

Overheat Website: https://overheat.io/

Requirements
------------
- Magento >= 2.0
- PHP >= 7.0

Installation
------------

### Via composer (recommended)

Please go to the Magento2 root directory and run the following commands in the shell:

```
composer config repositories.intersales_overheat vcs git@github.com:intersales/overheat.git
composer require magento2-modules/overheat
bin/magento module:enable InterSales_Overheat
bin/magento setup:upgrade
```

### Manually

Please create the directory *app/code/InterSales/Overheat* and copy the files from this repository to the created directory. Then run the following commands in the shell:

```
bin/magento module:enable InterSales_Overheat
bin/magento setup:upgrade
```
Usage
-------

- Create an Overheat account: https://app.overheat.it
- In Overheat backend select Installation
- Copy the Tracking-ID
- Open configuration of overheat extension in Magento backend at System > Configuration > interSales Modules > Overheat
- Add the tracking code and click "validate code"

Do not forget to add the privacy policy text and the optout url to your privacy declaration. Your Overheat account provides the necessary information.

Support
-------
If you have any issues with this extension, open an issue on GitHub (see URL above)


Contribution
------------
Any contributions are highly appreciated. The best way to contribute code is to open a
[pull request on GitHub](https://help.github.com/articles/using-pull-requests).


Developer
---------
InterSales Team
* Website: [https://www.intersales.de](http://www.intersales.de)
* Twitter: [@intersales](https://twitter.com/intersales)


Copyright
---------
(c) 2014 - 2018 interSales AG Internet Commerce, Köln