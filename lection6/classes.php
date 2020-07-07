<?php
class TextFile
{
    public $path;
    //свойство объекта для хранения данных
    protected $data;

    //В конструктор передается путь до файла с данными гостевой книги,
    // в нём же происходит чтение данных из ней
    // (используйте защищенное свойство объекта для хранения данных)
    public function __construct($path)
    {
        $this->path = $path;
        //file читает содержимое файла и помещает его в массив
        $this->data = file($path);
    }

    //Метод getData() возвращает массив записей гостевой книги
    public function getData()
    {
        return $this->data;
    }

    //Метод append($text) добавляет новую запись к массиву записей
    public function append($text)
    {
        $this->data[] = $text . PHP_EOL;
    }

    //Метод save() сохраняет массив в файл
    public function save()
    {
        file_put_contents($this->path, $this->data);
    }
}

class GuestBook extends TextFile
{
}

class Uploader
{
    public $name;

    //В конструктор передается имя поля формы, от которого мы ожидаем загрузку файла
    public function __construct($name)
    {
        $this->name = $name;
    }

    //Метод isUploaded() проверяет - был ли загружен файл от данного имени поля
    public function isUploaded()
    {
        //передаваемый параметр - имя загруженного файла
        return is_uploaded_file($_FILES[$this->name]['tmp_name']);
    }

    //Метод upload() осуществляет перенос файла (если он был загружен!)
    // из временного места в постоянное
    public function upload()
    {
        //filename - путь к загруженному файлу,
        // destination - путь, по которому необходимо переместить файл
        return move_uploaded_file($_FILES[$this->name]['tmp_name'],
            __DIR__ . '/images/' . $_FILES[$this->name]['name']);
    }

    //метод getFileType возвращает тип загруженного файла
    public function getFileType()
    {
        return $_FILES[$this->name]['type'];
    }
}