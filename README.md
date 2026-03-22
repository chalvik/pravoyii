#  проект Переводчики и их расписание
## Развертывание в локальной среде

Первый запуск:

лонируем репозиторий
```shell
git clone  git@github.com:chalvik/pravoyii.git
```
Переходим в папку с проектом
```shell
cd pravoyii
```
Настраиваем переменные окружения (копируем файл, вносим изменения если требуется)
```shell
cp ./.env.example ./.env
```
Разворачиваем докер
```shell
docker compose up -d --build
```

Устанавливаем пакеты
```shell
docker exec -it pravo-php  composer install
```


Инициализируем yii2
- потребуеться выбрать тип окружения 
  - Development
  - Production
- подтвердить выбор еаписав - yes
```shell
docker exec -it pravo-php php init
```

Миграции:
```shell
docker exec -i pravo-php php yii migrate
```
Для перехода в консоль контейнера используйте
```shell
docker exec -it pravo-php  bash
```

Проект развернут используються адреса
FrontEnd
http://localhost:8088

Backend
http://localhost:8089

порты настраиваються в .env
для применения  изменений в .env
```shell
docker compose down
```
```shell
docker compose up -d
```

Для пересборки контейнеров
```shell
docker compose up -d --build
```