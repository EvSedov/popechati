# 📚 Навигация по документации проекта

## 🏠 Основные файлы

### Для пользователей

- 📋 **[README.md](README.md)** - Главная страница проекта с обзором возможностей
- 🚀 **[TESTING.md](TESTING.md)** - Быстрое тестирование системы (5 минут)
- 🏆 **[ACHIEVEMENTS.md](ACHIEVEMENTS.md)** - Краткая сводка достижений и статистика

### Для разработчиков

- 📖 **[DEVELOPMENT_LOG.md](DEVELOPMENT_LOG.md)** - Полный журнал разработки с техническими деталями
- 🧪 **[tests/README.md](tests/README.md)** - Документация системы тестирования
- 🔧 **[resources/js/lib/README.md](resources/js/lib/README.md)** - API документация системы ошибок

## 🗂️ Структура проекта

### 📁 Система обработки ошибок

```
resources/js/
├── lib/
│   ├── errorHandler.ts      # 🔧 Основной модуль обработки ошибок
│   ├── validation.ts        # ✅ Система валидации форм
│   └── README.md           # 📚 API документация
├── composables/
│   └── useErrorHandler.ts   # 🎨 Vue composable для компонентов
└── Components/atoms/ui/notification/
    └── NotificationContainer.vue  # 🧩 UI компонент уведомлений
```

### 🧪 Тестирование

```
tests/
├── manual/                  # 🖱️ Ручные тесты
│   ├── test-errors.html     # 🌐 Интерактивная тестовая страница
│   └── test-error-system.js # 💻 Консольные команды для браузера
├── unit/                    # 🔬 Юнит-тесты (35+ тестов)
│   ├── validation.test.ts   # ✅ Тесты валидации
│   └── errorHandler.test.ts # 🔧 Тесты обработки ошибок
├── e2e/                     # 🌐 End-to-end тесты (10+ сценариев)
│   └── order-form.spec.ts   # 📝 Тесты формы заказа
├── vitest.config.ts         # ⚙️ Конфигурация Vitest
├── playwright.config.ts     # ⚙️ Конфигурация Playwright
└── README.md               # 📚 Документация тестирования
```

## 🎯 Быстрые ссылки

### Хочу быстро проверить систему

👉 **[TESTING.md](TESTING.md)** - 5-минутная проверка

### Хочу понять что сделано

👉 **[ACHIEVEMENTS.md](ACHIEVEMENTS.md)** - Краткая сводка

### Хочу изучить техническую реализацию

👉 **[DEVELOPMENT_LOG.md](DEVELOPMENT_LOG.md)** - Подробный журнал

### Хочу запустить тесты

👉 **[tests/README.md](tests/README.md)** - Инструкции по тестированию

### Хочу использовать API в коде

👉 **[resources/js/lib/README.md](resources/js/lib/README.md)** - API документация

## 📊 Статистика документации

- **6 основных файлов** документации
- **18 созданных/обновленных** файлов кода
- **35+ юнит-тестов** с документацией
- **10+ E2E тестов** с описанием
- **4 конфигурационных** файла
- **Полное покрытие** всех компонентов

## 🔍 Поиск по темам

### Обработка ошибок

- [errorHandler.ts](resources/js/lib/errorHandler.ts) - Основной код
- [errorHandler.test.ts](tests/unit/errorHandler.test.ts) - Тесты
- [API документация](resources/js/lib/README.md#errorhandler) - Описание функций

### Валидация форм

- [validation.ts](resources/js/lib/validation.ts) - Основной код
- [validation.test.ts](tests/unit/validation.test.ts) - Тесты
- [OrderModal.vue](resources/js/Components/organisms/OrderModal.vue) - Пример использования

### Уведомления

- [NotificationContainer.vue](resources/js/Components/atoms/ui/notification/NotificationContainer.vue) - UI компонент
- [useErrorHandler.ts](resources/js/composables/useErrorHandler.ts) - Composable
- [Ручные тесты](tests/manual/test-errors.html) - Интерактивная проверка

### Тестирование

- [tests/README.md](tests/README.md) - Полная документация
- [TESTING.md](TESTING.md) - Быстрая проверка
- [Конфигурации](tests/) - vitest.config.ts, playwright.config.ts

---

**💡 Совет**: Начните с [TESTING.md](TESTING.md) для быстрой проверки, затем изучите [ACHIEVEMENTS.md](ACHIEVEMENTS.md) для понимания возможностей.
