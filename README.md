# 🚀 Symfony Lab - Лабораторные работы

[![Symfony](https://img.shields.io/badge/Symfony-6.4-000000?style=flat&logo=symfony)](https://symfony.com)
[![PHP](https://img.shields.io/badge/PHP-8.1+-777BB4?style=flat&logo=php)](https://php.net)
[![License](https://img.shields.io/badge/license-MIT-green)](LICENSE)

Проект содержит выполненные лабораторные работы по разработке веб-приложений на фреймворке Symfony 6.4.

## 📋 Содержание

- [О проекте](#о-проекте)
- [Задания](#задания)
- [Технологии](#технологии)
- [Установка](#установка)
- [Использование](#использование)
- [Структура проекта](#структура-проекта)
- [Маршруты](#маршруты)
- [Скриншоты](#скриншоты)
- [Автор](#автор)

## 📖 О проекте

Этот проект демонстрирует основные возможности Symfony 6.4:
- Создание контроллеров и маршрутов
- Работа с шаблонизатором Twig
- Обработка HTTP запросов
- Динамические параметры маршрутов
- Работа с объектами Request и Response

## ✅ Задания

### Задание 1: Установка и подготовка окружения
- ✅ Установлен PHP 8.1+
- ✅ Установлен Composer
- ✅ Установлен Symfony CLI
- ✅ Создан проект Symfony 6.4
- ✅ Подключен шаблонизатор Twig
- ✅ Запущен локальный сервер

### Задание 2: Контроллер `/about`
- ✅ Создан контроллер `AboutController`
- ✅ Реализован маршрут `/about`
- ✅ Вывод информации о студенте через Twig
- ✅ Адаптивный дизайн страницы

**Файлы:**
- `src/Controller/AboutController.php`
- `templates/about/index.html.twig`

### Задание 3: Маршрут `/not-found`
- ✅ Создан контроллер `NotFoundController`
- ✅ Реализован маршрут `/not-found`
- ✅ Возврат HTTP кода 404
- ✅ Красивая страница ошибки

**Файлы:**
- `src/Controller/NotFoundController.php`

### Задание 4: Динамический маршрут `/blog/{id}`
- ✅ Создан контроллер `BlogController`
- ✅ Реализован динамический маршрут `/blog/{id}`
- ✅ Вывод "Блог номер {id}" через Twig
- ✅ Навигация между блогами

**Файлы:**
- `src/Controller/BlogController.php`
- `templates/blog/show.html.twig`

### Задание 5: Работа с Request и Response
- ✅ Создан контроллер `MethodController`
- ✅ Реализован маршрут `/method`
- ✅ Получение HTTP метода из Request
- ✅ Возврат информации в Response
- ✅ Поддержка методов: GET, POST, PUT, DELETE, PATCH

**Файлы:**
- `src/Controller/MethodController.php`

## 🛠 Технологии

- **PHP** 8.1+
- **Symfony** 6.4 LTS
- **Twig** 3.x
- **Composer** 2.x
- **Git** для контроля версий

## 📦 Установка

### Предварительные требования

Убедитесь, что установлены:
- PHP 8.1 или выше
- Composer
- Symfony CLI (опционально)
- Git

### Arch Linux

```bash
# Установка зависимостей
sudo pacman -S php php-intl php-gd php-sqlite composer

# Установка Symfony CLI
curl -sS https://get.symfony.com/cli/installer | bash
export PATH="$HOME/.symfony5/bin:$PATH"
```

### Клонирование репозитория

```bash
# Клонирование проекта
git clone https://github.com/ВАШ_USERNAME/FirstLab.git
cd FirstLab

# Установка зависимостей
composer install

# Копирование переменных окружения
cp .env .env.local
```

### Настройка окружения

Отредактируйте `.env.local` если необходимо:

```env
APP_ENV=dev
APP_SECRET=ваш_секретный_ключ
```

## 🚀 Использование

### Запуск сервера

#### Вариант 1: Symfony CLI

```bash
symfony server:start
```

#### Вариант 2: Встроенный PHP сервер

```bash
php -S localhost:8000 -t public/
```

### Доступные маршруты

После запуска сервера откройте браузер:

| Маршрут | Описание | Задание |
|---------|----------|---------|
| `/` | Главная страница с навигацией | - |
| `/about` | Информация о студенте | Задание 2 |
| `/not-found` | Страница 404 | Задание 3 |
| `/blog/1` | Страница блога (любой ID) | Задание 4 |
| `/method` | HTTP метод запроса | Задание 5 |

### Просмотр всех маршрутов

```bash
php bin/console debug:router
```

### Очистка кеша

```bash
php bin/console cache:clear
```

## 📁 Структура проекта

```
FirstLab/
├── config/                 # Конфигурация Symfony
│   ├── packages/
│   ├── routes.yaml
│   └── services.yaml
├── public/                 # Публичная директория
│   └── index.php          # Точка входа
├── src/
│   ├── Controller/        # Контроллеры
│   │   ├── AboutController.php
│   │   ├── BlogController.php
│   │   ├── HomeController.php
│   │   ├── MethodController.php
│   │   └── NotFoundController.php
│   └── Kernel.php
├── templates/             # Twig шаблоны
│   ├── about/
│   │   └── index.html.twig
│   ├── blog/
│   │   └── show.html.twig
│   └── home/
│       └── index.html.twig
├── var/                   # Кеш и логи
├── vendor/                # Зависимости Composer
├── .env                   # Переменные окружения
├── .gitignore
├── composer.json
└── README.md
```

## 🛣 Маршруты

Полный список маршрутов:

```
Name            Method    Path
─────────────────────────────────────────
app_home        ANY       /
app_about       ANY       /about
app_not_found   ANY       /not-found
app_blog        ANY       /blog/{id}
app_method      GET|POST|PUT|DELETE|PATCH  /method
```

## 🧪 Тестирование

### Тестирование маршрута `/method`

#### В браузере
```
http://localhost:8000/method
```
Отобразится: **GET**

#### Через curl

```bash
# GET запрос
curl http://localhost:8000/method

# POST запрос
curl -X POST http://localhost:8000/method

# PUT запрос
curl -X PUT http://localhost:8000/method

# DELETE запрос
curl -X DELETE http://localhost:8000/method

# С параметрами
curl -X POST -d "name=John&age=25" http://localhost:8000/method
```

#### Через HTTPie

```bash
# Установка HTTPie
sudo pacman -S httpie

# Тестирование
http GET localhost:8000/method
http POST localhost:8000/method name=John age=25
```

### Проверка кода ответа 404

```bash
# Проверка через curl
curl -I http://localhost:8000/not-found

# Должен вернуть: HTTP/1.1 404 Not Found
```

## 📸 Скриншоты

### Главная страница
![Home Page](docs/screenshots/home.png)

### Страница "О студенте"
![About Page](docs/screenshots/about.png)

### Страница блога
![Blog Page](docs/screenshots/blog.png)

### HTTP Method
![Method Page](docs/screenshots/method.png)

## 🔧 Решение проблем

### Ошибка: "No route found for GET /"

Убедитесь, что создан `HomeController`:

```bash
php bin/console debug:router | grep app_home
```

### Ошибка: "ext-iconv is missing"

Установите расширение:

```bash
sudo pacman -S php-intl
```

Раскомментируйте в `/etc/php/php.ini`:
```ini
extension=iconv
```

### Ошибка: "annotation_reader service not found"

Удалите устаревший пакет:

```bash
composer remove sensio/framework-extra-bundle
php bin/console cache:clear
```

## 📚 Полезные команды

```bash
# Создание контроллера
php bin/console make:controller

# Просмотр маршрутов
php bin/console debug:router

# Очистка кеша
php bin/console cache:clear

# Проверка конфигурации
php bin/console debug:config

# Список всех команд
php bin/console list
```

## 🤝 Вклад в проект

1. Форкните проект
2. Создайте ветку для новой функции (`git checkout -b feature/AmazingFeature`)
3. Зафиксируйте изменения (`git commit -m 'Add some AmazingFeature'`)
4. Отправьте в ветку (`git push origin feature/AmazingFeature`)
5. Откройте Pull Request

## 📄 Лицензия

Этот проект распространяется под лицензией MIT. См. файл `LICENSE` для подробностей.

## 👤 Автор

**Ваше Имя**

- GitHub: [@ВАШ_USERNAME](https://github.com/ВАШ_USERNAME)
- Email: your.email@example.com

## 🙏 Благодарности

- [Symfony Documentation](https://symfony.com/doc/current/index.html)
- [Twig Documentation](https://twig.symfony.com/)
- [PHP Documentation](https://www.php.net/docs.php)

## 📝 Changelog

### [1.0.0] - 2024-10-22

#### Добавлено
- Контроллер главной страницы с навигацией
- Контроллер "О студенте" с информацией
- Контроллер 404 страницы
- Контроллер динамического блога
- Контроллер для отображения HTTP методов
- Адаптивные Twig шаблоны
- Полная документация

---

⭐ Если проект был полезен, поставьте звезду на GitHub!
