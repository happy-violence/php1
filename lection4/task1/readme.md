**Работа с файлами на сервере. Загрузка от клиента.**
=================================

Делаем гостевую книгу. Алгоритм:
- [x] Создайте текстовый файл, в котором будут находиться записи гостевой. Одна строка - одна запись. Заполните файл 2-3 записями.
- [x] Напишите функцию, которая будет читать этот файл и возвращать массив записей гостевой книги.
- [x] Сделайте страницу, где гостевая книга будет отображаться. Используйте функцию из пункта 2.
- [x] В конце страницы сделайте форму для добавления новой записи в гостевую книгу.
- [x] Скрипт-обработчик, приняв данные из формы пункта 4, должен получить массив уже имеющихся записей гостевой, добавить к этому массиву новый элемент (текст из формы) и записать полученный массив в тот же файл, разделяя элементы символом переноса строки.
- [x] После окончания своей работы скрипт из пункта 5 должен перенаправить клиента на главную страницу гостевой книги.