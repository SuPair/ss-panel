# ss-panel

Let's talk about cat.  Base on [LightFish](https://github.com/OzCat/LightFish)

[![Join the chat at https://gitter.im/orvice/ss-panel](https://badges.gitter.im/Join%20Chat.svg)](https://gitter.im/orvice/ss-panel?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)

[Releases](https://plus.google.com/communities/112308980947577664041) |[Follow on Trello](https://trello.com/b/dr62AtYI/ss-panel) | [Google+](https://plus.google.com/communities/112308980947577664041)

## About

v3未完成，请查看[v2](https://github.com/orvice/ss-panel/tree/v2)

Please visit [releases pages](https://github.com/orvice/ss-panel/releases) to download ss-panel.

[中文安装教程](https://github.com/orvice/ss-panel/wiki/v3-Install)

## Requirements

* PHP 5.5 or newer
* Web server with URL rewriting
* MySQL


## Install

### Step 0

```
git clone https://github.com/orvice/ss-panel.git
```

### Step 1

```
$ curl -sS https://getcomposer.org/installer | php
$ php composer.phar  install
```

### Step 2

```
cp config-sample config
```

Then edit config file under config dir.

### Step 3

Import the sql to you mysql database.

### Step 4

Nginx Config example:

if you download ss-panel on path /home/www/ss-panel


```
root /home/www/ss-panel/public;

location / {
    try_files $uri $uri/ /index.php$is_args$args;
}
    
```    