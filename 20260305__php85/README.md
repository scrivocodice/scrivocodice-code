In questi esempi useremo un **PHP 8.5 containerizzato** per eseguire i comandi
come se fosse installato sull’host, montando i volumi. Questo approccio è
standard in ambienti professionali e perfetto per sviluppo locale, build e
scripting.

Posso fare la build usando il comando:

```bash
sh bin/build.sh
```

O posso lanciare direttamente il comando php85

```bash
php85 -v
```
