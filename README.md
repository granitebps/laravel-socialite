# Laravel Socialite Auth Scafolding

This is a Laravel Socialite Auth Scafolding with so much social media oauth. This application using [Laravel Socialite](https://laravel.com/docs/6.x/socialite) and [Socialite Provider](https://socialiteproviders.netlify.com/) List of social media and link how to get and setup key, secret, and callback

-   [Facebook](https://developers.facebook.com/).
-   [Github](https://github.com/settings/developers).
-   [Google](https://console.developers.google.com/)
-   [Twitter](https://developer.twitter.com/).
-   [LinkedIn](https://www.linkedin.com/developers/).
-   [Line](https://developers.line.biz/).
-   [Gitlab](https://gitlab.com/profile/applications).
-   [Bitbucket](https://bitbucket.org/).
-   [DigitalOcean](https://www.digitalocean.com/).
-   [Discord](https://discordapp.com/developers/applications/).
-   [Dropbox](https://www.dropbox.com/developers/).
-   And many more...

Still want to add more social media on that list.

## How To Use

-   Put all of your Client ID, Client Key, and Redirect URL to .env file
-   If you want to not use one or more of the social media, you can discard the button from login.blade.php and register.blade.php file
-   If you want COMPLETELY to not use one or more of the social media, you must also remove the social media socialite package in composer.json file, and remove the social media provider in EventServiceProvider.php file
