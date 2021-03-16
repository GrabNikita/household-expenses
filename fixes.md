### 

- Ошибка с текстом
```
file_put_contents(/var/www/html/storage/framework/sessions/7bZOounFVo5UqYcA7yc4xhiKHmfs6hKd4lZhqe8M): Failed to open stream: Permission denied
```
лечится так 
```bash
php artisan config:cache
```
