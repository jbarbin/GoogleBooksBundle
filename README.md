# GoogleBooksBundle

A basic Symfony bundle provide a simple way to use Google Books API.

Installation
============

Step 1: Download the Bundle
---------------------------

Open a command console, enter your project directory and execute the
following command to download the latest stable version of this bundle:

```bash
$ composer require jbarbin/googlebooksbundle
```

This command requires you to have Composer installed globally, as explained
in the [installation chapter](https://getcomposer.org/doc/00-intro.md)
of the Composer documentation.

Step 2: Enable the Bundle
-------------------------

Then, enable the bundle by adding it to the list of registered bundles
in the `app/AppKernel.php` file of your project:

```php
<?php
// app/AppKernel.php

// ...
class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            // ...

            new JBarbin\GoogleBooksBundle\JBarbinGoogleBooksBundle(),
        );

        // ...
    }

    // ...
}
```

Step 3: Configure your Google API Key
------------------------------------------------

First at all, you need to create an api key on google developer console on https://console.developers.google.com. You have to activate Google Books API on your project and create an api key.  

```yaml
# app/services.yml


parameters:
    // ...
    jbarbin_googlebooks.google_api_key: AIzaSyB4TlkEGbK6oMyCDCcFTsUs_BtCVhIS4oU

```

Usage
=====

Search books by title or/and author
--------------------------------


```php
// Use statement
use JBarbin\GoogleBooksBundle\GoogleAPI\Query;

// ...

$googleAPI = $this->get('jbarbin_googlebooks_api');
$api_key = $this->container->getParameter('jbarbin_googlebooks.google_api_key');
$query = new Query($api_key);

// Search by title
$query->setTitle('book title');

// Search by author
$query->setTitle('book author');

// Get results
$books = $googleAPI->searchBook($query);


```