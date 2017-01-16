**Morphy** is a phpMorphy binding to Yii.

### Options
* dictsPath
* storage

### How to install dicts
1. Go to http://phpmorphy.sourceforge.net/dokuwiki/download
2. Copy download link. For example, it is http://sourceforge.net/projects/phpmorphy/files/phpmorphy-dictionaries/0.3.x/ru_RU/morphy-0.3.x-ru_RU-nojo-utf8.zip/download
3. Run

```
wget --content-disposition http://sourceforge.net/projects/phpmorphy/files/phpmorphy-dictionaries/0.3.x/ru_RU/morphy-0.3.x-ru_RU-nojo-utf8.zip/download
unzip -d protected/extensions/Morphy/dicts/ morphy-0.3.x-ru_RU-nojo-utf8.zip
rm morphy-0.3.x-ru_RU-nojo-utf8.zip
```
