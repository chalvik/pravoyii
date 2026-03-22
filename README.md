#  проект Переводчики и их расписание
## Развертывание в локальной среде

Первый запуск:

```shell
git clone  git@github.com:chalvik/pravoyii.git
```
Переходим в папку с пректом
```shell
cd pravoyii
```
Настраиваем переменные окрущения (копируем файл, вносим изменения если требуется)
```shell
cp ./.env.example ./.env
```
Разворачиваем докер
```shell
docker compose up -d --build
```

Инициализируем yii2
- потребуеться выбрать тип окружения 
  - Development
  - Production
- подтвердить выбор еаписав - yes
```shell
docker exec -it pravo-php init
```

Миграции:
```shell
docker exec -i pravo-php php yii migrate
```