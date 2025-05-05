# atapi.space
The source code to my website, https://atapi.space/.

# Deploying
- Requires PHP-FPM
- Redirect 404 to `/404.php`
- anything under `.git` is 403'd
- path_regexp `/[^\/]$|^$/` used to redir to `{path}/`
- common attack vectors redirected to /site/troll.html
- common bot user agents (GPTBot, Facebook, Meta, Google, etc) connections dropped
- make `/files/` a directory listing
