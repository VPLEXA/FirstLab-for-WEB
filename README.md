# 🚀 Symfony Lab - Лабораторные работы

[![Symfony](https://img.shields.io/badge/Symfony-6.4-000000?style=flat&logo=symfony)](https://symfony.com)
[![PHP](https://img.shields.io/badge/PHP-8.1+-777BB4?style=flat&logo=php)](https://php.net)
[![License](https://img.shields.io/badge/license-MIT-green)](LICENSE)

Проект содержит выполненную лабораторную работу №1 по разработке веб-приложений на фреймворке Symfony 6.4.

## 📋 Содержание

- [О проекте](#о-проекте)
- [Задания](#задания)
- [Технологии](#технологии)
- [Структура проекта](#структура-проекта)
- [Маршруты](#маршруты)
- [Автор](#автор)

## 📖 О проекте

Лабораторная работа №1 по WEB-программированию:
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

### Доступные маршруты

После запуска сервера откройте браузер:

| Маршрут | Описание | Задание |
|---------|----------|---------|
| `/` | Главная страница с навигацией | - |
| `/about` | Информация о студенте | Задание 2 |
| `/not-found` | Страница 404 | Задание 3 |
| `/blog/1` | Страница блога (любой ID) | Задание 4 |
| `/method` | HTTP метод запроса | Задание 5 |

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

## 👤 Автор

- GitHub: [@VPLEXA](https://github.com/VPLEXA)