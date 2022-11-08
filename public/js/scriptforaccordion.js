var accordion = (function (element) {
    var _getItem = function (elements, className) { // функция для получения элемента с указанным классом
      var element = undefined;
      elements.forEach(function (item) {
        if (item.classList.contains(className)) {
          element = item;
        }
      });
      return element;
    };
    return function () {
      var _mainElement = {}, // .accordion
        _items = {}, // .accordion-item
        _contents = {}; // .accordion-item-content
      var _actionClick = function (e) {
        if (!e.target.classList.contains('accordion__header')) { // прекращаем выполнение функции если кликнули не по заголовку
          return;
        }
        e.preventDefault(); // отменям стандартное действие
        // получаем необходимые данные
        var header = e.target,
          item = header.parentElement,
          itemActive = _getItem(_items, 'active');
        if (itemActive === undefined) { // добавляем класс show к элементу (в зависимости от выбранного заголовка)
          item.classList.add('active');
        } else {
          // удаляем класс show у ткущего элемента
          itemActive.classList.remove('active');
          // если следующая вкладка не равна активной
          if (itemActive !== item) {
            // добавляем класс show к элементу (в зависимости от выбранного заголовка)
            item.classList.add('active');
          }
        }
      },
      _setupListeners = function () {
        // добавим к элементу аккордиона обработчик события click
        _mainElement.addEventListener('click', _actionClick);
      };
  
      return {
        init: function (element) {
          _mainElement = (typeof element === 'string' ? document.querySelector(element) : element);
          _items = _mainElement.querySelectorAll('.accordion__item');
          _setupListeners();
        }
      }
    }
  })();

  
// инициализируем элемент с id="accordion" как аккордеон
var accordion1 = accordion();
accordion1.init('#accordion');