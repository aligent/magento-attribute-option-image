# Add images/icons to attribute options of your Magento products

![Attribute Option Image](http://i.imgur.com/VB2W5.jpg)

## Features

* Associate image/icon to attribute options
* Specify relative/external url or pick an image from Magento Media Gallery

## Installation

### Magento CE 1.5.x, 1.6.x

Install with [modgit](https://github.com/jreinke/modgit):

    $ cd /path/to/magento
    $ modgit init
    $ modgit clone attr-opt-img https://github.com/jreinke/magento-attribute-option-image.git

or download package manually:

* Download latest version [here](https://github.com/jreinke/magento-attribute-option-image/downloads)
* Unzip in Magento root folder
* Clean cache

## Usage

1. Go to *Catalog > Attributes > Manage Attributes*, choose an attribute with options and associate an image/icon to each option
2. In frontend templates, retrieve image src like this `Mage::helper('attributeoptionimage')->getAttributeOptionImage($optionId);` where `$optionId` could be something like `$product->getColor()`

## Full overview

I wrote an article on my blog for full extension overview, [click here](http://www.johannreinke.com/en/2012/02/05/magento-add-images-to-product-attribute-options/).
