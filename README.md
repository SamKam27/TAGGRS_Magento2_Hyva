# Taggrs GTM DataLayer for Magento 2 with Hyvä theme
This extension collect eccommerce data from Magento 2 and pushes it to the Google Tag Manager DataLayer.

## Installation
Set your Magento store to maintenance mode.
```bash
bin/magento maintenance:enable
```
Install the extension via composer.
```bash
composer require taggrs/magento2-hyva-data-layer
```
Enable module and perform database upgrade.
```bash
bin/magento setup:upgrage
```
Perform dependency-injection compilation.
```bash
bin/magento setup:di:compile
```
Deploy static content.
```bash
bin/magento setup:static-content:deploy
```
Disable maintenance mode.
```bash
bin/magento maintenance:disable
```

This extension needs no separate configuration from the Taggrs_DataLayer extension. Please refer to the docs of the original extension. 

https://github.com/TAGGRS/TAGGRS_Magento2/blob/main/README.md
