# atapi.space
The source code to my website, https://atapi.space/.

# Deploying
- Requires PHP-FPM
- Redirect 404 to `/404.php`
- anything under `.git` is 404'd
- `rewrite /site* {path}/` or equivalent
- (mostly optional) make `/files/` a directory listing

bweh
