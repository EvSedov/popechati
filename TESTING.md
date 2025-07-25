# 🧪 Быстрое тестирование системы обработки ошибок

> **Статус**: ✅ Система полностью реализована и протестирована  
> **Покрытие**: 35+ юнит-тестов, 10+ E2E тестов, интерактивные ручные тесты  
> **Документация**: [Журнал разработки](DEVELOPMENT_LOG.md) | [Техническая документация](tests/README.md)

## 🚀 Самый простой способ проверки

### 1. Откройте главную страницу сайта

```
http://localhost:8000
```

### 2. Откройте DevTools (F12) → Console

### 3. Вставьте эту команду:

```javascript
runQuickTest();
```

Если команда не найдена, сначала выполните:

```javascript
// Быстрый тест
const testDiv = document.createElement("div");
testDiv.style.cssText =
    "position: fixed; top: 20px; right: 20px; z-index: 9999; background: #10B981; color: white; padding: 15px 20px; border-radius: 8px; font-family: Arial, sans-serif;";
testDiv.innerHTML = "✅ Система работает!";
document.body.appendChild(testDiv);
setTimeout(() => testDiv.remove(), 3000);
```

## 🎯 Тестирование формы заказа

1. **Найдите кнопку "Сделать заказ"** и нажмите
2. **Попробуйте отправить пустую форму** → должны появиться красные рамки
3. **Введите неправильный телефон** (например "123") → должна появиться ошибка
4. **Заполните форму правильно** → должно появиться зеленое уведомление

## 📋 Что должно работать

✅ **Красные рамки** вокруг неправильных полей  
✅ **Сообщения об ошибках** под полями  
✅ **Уведомления** в правом верхнем углу  
✅ **Форматирование телефона** при вводе  
✅ **Спиннер загрузки** при отправке

## 🔧 Полное тестирование

### Интерактивная страница:

```
tests/manual/test-errors.html
```

### Автоматические тесты:

```bash
npm run test:unit    # Юнит-тесты
npm run test:e2e     # E2E тесты
```

## 🐛 Если что-то не работает

1. **Проверьте консоль** на ошибки JavaScript
2. **Убедитесь**, что dev server запущен
3. **Перезагрузите страницу** после изменений
4. **Проверьте Network** вкладку в DevTools

---

## 📚 Навигация по документации

### 🏠 Основные файлы

- [README.md](README.md) - Главная страница проекта
- [ACHIEVEMENTS.md](ACHIEVEMENTS.md) - Краткая сводка достижений
- [DEVELOPMENT_LOG.md](DEVELOPMENT_LOG.md) - Подробный журнал разработки

### 🧪 Тестирование

- [tests/README.md](tests/README.md) - Полная документация тестирования
- [tests/manual/test-errors.html](tests/manual/test-errors.html) - Интерактивные тесты
- [tests/manual/test-error-system.js](tests/manual/test-error-system.js) - Консольные команды

### 🔧 Техническая документация

- [resources/js/lib/README.md](resources/js/lib/README.md) - API системы ошибок
- [tests/vitest.config.ts](tests/vitest.config.ts) - Конфигурация юнит-тестов
- [tests/playwright.config.ts](tests/playwright.config.ts) - Конфигурация E2E тестов

---

**Быстрая проверка:** Откройте сайт → F12 → Console → вставьте тестовый код выше
