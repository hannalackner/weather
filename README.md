# Weather


```php
"namespace Hannalackner\Weather;"
require 'vendor/autoload.php';
```

## Beschreibung

Die Library besteht aus 2 Klassen - day.php und history.php - In der day.php werden die Tage hinzugefügt und in der History.php werden die Daten gespeichert.
Mit der Libary können die Wetterverhältnisse für einen Tag ausgelesen werden.


## How to use:

1. persönliche Benutzereingabe über URL:
schreibe in der Url ' /?year-month-day ' den gewünschten Tag.
dann wird das passende Wetter für diesen Tag ausgegeben.

2. in Index.php
```php
$date = "2024-05-03";
``` 
-> dadurch kann man selbst das Datum auswählen


um ein Wetter für einen Tag zuspeichern ist diese Zeile in der Index.php wichtig!

```php
$history->addDay(new Day("2024-05-04", "sunny"));
```


