# Дополнительные команды для миграций
___
## Доступные команды

* [перезапуск последней миграции](#migrate-restart)

____
<a name="migrate-restart"></a>
### Перезапуск последней миграции

```sh
php artisan migrate:restart
```
Аналогичено последовательному вызову 
```sh
php artisan migrate:rollback
php artisan migrate
```
