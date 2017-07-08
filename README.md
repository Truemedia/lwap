# LWAP (Laravel website as package) #
## Source code from tutorial series by Wade Penistone ##

This is the source code built alongside a video series covering this practice of building websites:

https://www.youtube.com/playlist?list=PL16aYxMS6PIIjJsD4kWWUV4U_CGpSjUEd

### Installation ###

Add the following to the 'repositories' inside your `composer.json` located in the root folder of a Laravel instance (Create repositiories as key if it does not exist with value set as square brackets)

```
{
    "type": "vcs",
    "url": "git@github.com:Truemedia/lwap.git"
}
```

Then run the following command/s in your VM inside the root directory of the site

    composer require truemedia/lwap:dev-master --prefer-source

#### Then... (Only for Laravel < 5.5) ####

Add the following line to `config/app.php` inside the 'providers' array to use the service provider

	Truemedia\Lwap\LwapServiceProvider::class,

Update composer

	composer update

Alter webpack.mix.js (root directory)

    From: mix.js('resources/assets/js/app.js', 'public/js')

    To: mix.js('vendor/truemedia/lwap/src/resources/assets/js/app.js', 'public/js')

### Usage ###

To be updated

### Tests ###

To be updated

### Tools ###

To be updated

### Credits ###

Wade Penistone (@Truemedia) - 2017
