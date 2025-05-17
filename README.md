<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development/)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
# popechati

# Atomic Design: Принципы организации компонентов

## Введение

В этом проекте используется методология Atomic Design для построения UI из переиспользуемых компонентов. Это позволяет поддерживать порядок, масштабируемость и удобство сопровождения кода.

## Уровни компонентов

1. **Атомы (atoms)**
   - Неделимые базовые элементы интерфейса: кнопки, иконки, поля ввода, заголовки, текстовые элементы и т.д.
   - Не зависят от других компонентов.
   - Примеры: `AButton.vue`, `AInput.vue`, `AccordionToggleIcon.vue`.

2. **Молекулы (molecules)**
   - Простые составные компоненты, состоящие из атомов.
   - Могут содержать логику взаимодействия между атомами.
   - Примеры: `MapButtons.vue`, `AccordionQuestion.vue`, `AccordionAnswer.vue`.

3. **Организмы (organisms)**
   - Сложные составные компоненты, состоящие из атомов и молекул.
   - Формируют значимые части интерфейса: секции, формы, карточки, хедеры, футеры.
   - Примеры: `FaqAccordion.vue`, `YandexMap.vue`, `ContactDetails.vue`.

4. **Шаблоны (templates)**
   - Макеты страниц, собирающие организмы, молекулы и атомы в единую структуру.
   - Не содержат бизнес-логики, только структуру.
   - Примеры: `ContactInfo.vue`, `Home.vue`.

## Структура каталогов

```
Components/
├── atoms/
│   ├── AccordionHeader.vue
│   ├── AccordionToggleIcon.vue
│   └── ...
├── molecules/
│   ├── MapButtons.vue
│   ├── AccordionQuestion.vue
│   ├── AccordionAnswer.vue
│   ├── AccordionItem.vue
│   └── ...
├── organisms/
│   ├── FaqAccordion.vue
│   ├── YandexMap.vue
│   ├── ContactDetails.vue
│   └── ...
└── templates/
    ├── ContactInfo.vue
    └── ...
```

## Соглашения

- **Импорт компонентов**: Каждый уровень может импортировать только компоненты своего уровня и ниже (например, молекулы могут импортировать атомы, но не организмы).
- **Именование**: Используйте осмысленные имена, отражающие назначение компонента. Можно использовать префиксы `A`, `M`, `O`, `T` для атомов, молекул, организмов и шаблонов соответственно.
- **Документирование**: Для каждого компонента рекомендуется указывать описание, props и события в JSDoc-комментариях.

## Пример иерархии для FAQ

```
FaqAccordion (organism)
├── AccordionHeader (atom)
└── AccordionItem (molecule)
    ├── AccordionQuestion (molecule)
    │   └── AccordionToggleIcon (atom)
    └── AccordionAnswer (molecule)
```

## Рекомендации

- Разделяйте компоненты по функциональным папкам внутри каждого уровня, если их становится много.
- Используйте индексные файлы для удобного импорта.
- Поддерживайте единый стиль кода и следите за зависимостями между уровнями.

---



**Atomic Design** помогает строить масштабируемые и поддерживаемые интерфейсы, облегчает командную работу и ускоряет разработку новых фич. 

Структурирование компонентов по методологии Atomic Design

1. Организация файловой структуры
Предлагаю следующую структуру каталогов:
```text
resources/js/Components/
├── atoms/           # Базовые неделимые компоненты
│   ├── buttons/     # Кнопки
│   ├── icons/       # Иконки
│   ├── inputs/      # Поля ввода
│   ├── typography/  # Текстовые элементы
│   └── ...
├── molecules/       # Простые составные компоненты
│   ├── forms/       # Элементы форм
│   ├── navigation/  # Элементы навигации
│   ├── cards/       # Карточки
│   ├── accordion/   # Аккордеоны
│   └── ...
├── organisms/       # Сложные составные компоненты
│   ├── headers/     # Шапки
│   ├── footers/     # Подвалы
│   ├── sections/    # Секции страниц
│   └── ...
└── templates/       # Шаблоны страниц
    ├── home/        # Компоненты для главной страницы
    ├── catalog/     # Компоненты для каталога
    └── ...
```
2. Соглашения об именовании
Для повышения понятности и поддержания порядка предлагаю следующие соглашения:
Префиксы по типу компонента:
Атомы: A (например, AButton.vue, AInput.vue)
Молекулы: M (например, MSearchForm.vue, MNavItem.vue)
Организмы: O (например, OHeader.vue, OFooter.vue)
Шаблоны: T (например, TContactPage.vue)
Группировка по функциональности:
Для атомов: AButton, AButtonPrimary, AButtonSecondary
Для молекул: MFormField, MFormSelect, MFormCheckbox
3. Документирование компонентов
Для каждого компонента рекомендую создать документацию:
```vue
<script setup lang="ts">
/**
 * @component AButton
 * @description Базовая кнопка с возможностью настройки стилей
 * @props {string} variant - Вариант кнопки (primary, secondary, outline)
 * @props {string} size - Размер кнопки (sm, md, lg)
 * @emits {click} - Событие клика по кнопке
 */
defineProps<{
  variant: 'primary' | 'secondary' | 'outline';
  size: 'sm' | 'md' | 'lg';
}>();

defineEmits<{
  (e: 'click', event: MouseEvent): void;
}>();
</script>
```

4. Создание индексных файлов
Для упрощения импорта компонентов можно создать индексные файлы:
```typescript
// resources/js/Components/atoms/index.ts
export { default as AButton } from './buttons/AButton.vue';
export { default as AInput } from './inputs/AInput.vue';
// ...

// resources/js/Components/molecules/index.ts
export { default as MFormField } from './forms/MFormField.vue';
export { default as MNavItem } from './navigation/MNavItem.vue';
// ...
```

5. Создание каталога компонентов (Design System)
Для наглядного представления всех компонентов и их взаимосвязей рекомендую создать каталог компонентов:
```vue
<!-- resources/js/Pages/DesignSystem.vue -->
<template>
  <div class="design-system">
    <h1>Дизайн-система</h1>
    
    <section>
      <h2>Атомы</h2>
      <div class="component-grid">
        <div class="component-item">
          <AButton variant="primary" size="md">Кнопка</AButton>
          <div class="component-name">AButton (primary)</div>
        </div>
        <!-- Другие атомы -->
      </div>
    </section>
    
    <!-- Секции для молекул, организмов и т.д. -->
  </div>
</template>
```

6. Взаимосвязи между уровнями
Для поддержания четкой иерархии рекомендую следовать таким правилам:
Атомы не должны зависеть от других компонентов
Молекулы могут импортировать только атомы
Организмы могут импортировать атомы и молекулы
Шаблоны могут импортировать компоненты любого уровня
7. Практическое применение для нашего проекта
Давайте реорганизуем наши текущие компоненты аккордеона:6. Взаимосвязи между уровнями
Для поддержания четкой иерархии рекомендую следовать таким правилам:
Атомы не должны зависеть от других компонентов
Молекулы могут импортировать только атомы
Организмы могут импортировать атомы и молекулы
Шаблоны могут импортировать компоненты любого уровня
7. Практическое применение для нашего проекта
Давайте реорганизуем наши текущие компоненты аккордеона:
```text
resources/js/Components/
├── atoms/
│   ├── accordion/
│   │   ├── AAccordionHeader.vue (бывший AccordionHeader)
│   │   └── AAccordionToggleIcon.vue (бывший AccordionToggleIcon)
├── molecules/
│   ├── accordion/
│   │   ├── MAccordionQuestion.vue (бывший AccordionQuestion)
│   │   ├── MAccordionAnswer.vue (бывший AccordionAnswer)
│   │   └── MAccordionItem.vue (бывший AccordionItem)
└── organisms/
    ├── accordion/
    │   └── OFaqAccordion.vue (бывший FaqAccordion)
```

8. Внедрение стайлгайда и линтера
Для поддержания согласованности кода рекомендую настроить линтер с правилами для Atomic Design:
```js
// .eslintrc.js
module.exports = {
  // ...
  rules: {
    // Правило, запрещающее молекулам импортировать организмы и шаблоны
    'no-restricted-imports': [
      'error',
      {
        patterns: [
          {
            group: ['**/organisms/**', '**/templates/**'],
            message: 'Молекулы не могут импортировать организмы или шаблоны.',
          },
        ],
      },
    ],
    // Другие правила...
  },
};
```

9. Визуализация связей между компонентами
Для лучшего понимания зависимостей между компонентами можно создать диаграмму:
```text
OFaqAccordion
├── AAccordionHeader
└── MAccordionItem
    ├── MAccordionQuestion
    │   └── AAccordionToggleIcon
    └── MAccordionAnswer
```

10. Документация по использованию
Создайте README.md файл с описанием принципов организации компонентов:
```markdown
# Atomic Design в нашем проекте

## Уровни компонентов

1. **Атомы** - базовые компоненты (кнопки, иконки, поля ввода)
2. **Молекулы** - простые составные компоненты (формы, навигационные элементы)
3. **Организмы** - сложные составные компоненты (шапка, подвал, секции)
4. **Шаблоны** - макеты страниц

## Правила именования и структурирования

...
```

Такой подход к организации компонентов по методологии Atomic Design обеспечит:
- Ясную и понятную структуру проекта
- Легкую навигацию по компонентам
- Четкое понимание взаимосвязей между компонентами
- Повышенную переиспользуемость компонентов
- Упрощенное поддержание и расширение системы компонентов
Это особенно важно по мере роста проекта, когда количество компонентов может достигать сотен.
