# Math Club
This is the repository for Texas A&M's Math Club.
At the moment the site is hosted [here](https://peaceful-atoll-84937.herokuapp.com/) but it will be moved in the future.

---

## Instructions
If you are a future webmaster, and don't know any PHP or HTML, fear not.
I have tried to make the website fairly easy to update.
All information that is likely to change is stored 
in `resources/config.xml`.

### Calendar
The calendar is found [here](https://calendar.google.com/calendar/embed?src=4kl90qkd5vdkrr2pm2f0np8tk0%40group.calendar.google.com&ctz=America/Chicago).
It should be shared, along with the [math contest blog](http://mathclubtamu.blogspot.com/), with the other officers.
However, since your title is also Communications Officer, you are responsible for updating events and informing others.

### Bi-Weekly Math Contest
For the Bi-weekly Math Contest, I plan on posting the problems [here](http://mathclubtamu.blogspot.com/),
and the website will update itself automatically whenever a new post is made.

### Version Control
If you aren't familiar with [git](https://git-scm.com/), skip this.
The git repository for this website is [here](https://bitbucket.org/tamumathclub/website/overview).

### Dependencies
I did my best to use no external dependancies or external libraries,
since I don't know what the TAMU math department servers support.
The website does use the [Google Calendar API](https://developers.google.com/google-apps/calendar/v3/reference/events/list#parameters),
but doesn't use any client libraries for the previously mentioned reason 
(and because they all have little to no documentation).
Instead, it uses http GET requests to pull information from the google calendar.

### Summary

### Further Questions
If you have any questions, feel free to shoot me an email at [matt.gaikema@tamu.edu](mailto:matt.gaikema@tamu.edu).

---

## Development Resources
These are various resources I found useful while developing the website.

### PHP
* [Symphony docs](https://symfony.com/pdf/Symfony_components_3.0.pdf?v=4)
* [newline](http://stackoverflow.com/a/20749472/5415895)
* [routing](https://github.com/klein/klein.php)
* [Debugging 500 pages](http://stackoverflow.com/questions/17693391/500-internal-server-error-for-php-file-not-for-html)

### Bootstrap
* [CSS](http://getbootstrap.com/css/)

### Compression
* http://php.net/manual/en/function.ob-gzhandler.php
* https://varvy.com/pagespeed/enable-compression.html

### Password storage
* [Config file](http://stackoverflow.com/a/15089031/5415895)
* [dotenv](https://github.com/vlucas/phpdotenv)

### Timing functions
* [Log file](http://stackoverflow.com/a/865669/5415895)

### Misc.
* https://developers.google.com/speed/libraries/#top_of_page
* http://brandguide.tamu.edu/colors.html