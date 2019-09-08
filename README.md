# Trmsbs  
tiramisubs scraper  
![](https://img.shields.io/badge/codename-tiramisu-ff69b4) ![](https://img.shields.io/github/last-commit/sinkaroid/trmsbs) ![](https://img.shields.io/badge/php-%3E%3D5.3.9-blue.svg) ![](https://img.shields.io/pypi/pyversions/3)  

**latestcontent:**
```sh
$ cd cons;ls
$ chmod +x trmsbs.py #if necessary
$ ./trmsbs.py
```  
**deploy+params argument:**
```php
$bc = basename(__FILE__);
print "/$bc?page={1..99}"; 
```  
- `/$bc?home` main  
- `/$bc?page={1..99}` page  
- `/$bc?search=$argv[0]` query  

## Discord
integerate this repo to hookbot  
![](https://1.bp.blogspot.com/-7yKAX1JOhtE/XXV7F2PUeBI/AAAAAAAAJro/pt2r3NgRBhUonB4H-nbXpS85jldPPs5kACLcBGAs/s1600/Screenshot_130.png)

```
$ cd trmsbs/feed
$ code index.php #vscode
```  
```php
function sed($t)
{
    $sed = $t;
    $sed = str_replace('https://trmsbs.sinkaroid.org/application/controllers/get.php?anti=', 'yoursite',    
	$sed);
    return $sed;
} # if necessary or u can use your own rss fetcher
```  

## License
[MIT](https://choosealicense.com/licenses/mit/)