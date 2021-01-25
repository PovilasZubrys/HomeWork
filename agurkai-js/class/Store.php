<?php
namespace Sodas;

class Store {

    private const PATH = DIR.'/data/';

    private $fileName = 'sodas';
    private $data;

    public function __construct($file)
    {
        $this->fileName = $file;
        if (!file_exists(self::PATH.$this->fileName.'.json')) {
            file_put_contents(self::PATH.$this->fileName.'.json', json_encode(['obj' => [], 'agurku ID' => 0])); // pradinis masyvas
            $this->data = ['obj' => [], 'augalo ID' => 0];
        }
        else {
            $this->data = file_get_contents(self::PATH.$this->fileName.'.json'); // nuskaitom faila
            $this->data = json_decode($this->data, 1); // paverciam masyvu
        }
    }

    public function __destruct()
    {
        file_put_contents(self::PATH.$this->fileName.'.json', json_encode($this->data)); // viska vel uzsaugom faile
    }

    public function getData()
    {
        return $this->data;
    }

    public function setData($data)
    {
        $this->data = $data;
    }

    public function getNewId()
    {
        $id = $this->data['agurku ID'];
        $this->data['agurku ID']++;
        return $id;
    }

    public function save($augalas, $key) {
        $augalas = serialize($augalas);
        $this->data['obj'][$key] = $augalas;
    }

    public function addNew($obj)
    {
        $this->data['obj'][] = serialize($obj);
    }

    public function getAll()
    {
        $all = [];
        foreach($this->data['obj'] as $obj) {
            $all[] = unserialize($obj);
        }
        return $all;
    }


    public function remove($id)
    {
        foreach($this->data['obj'] as $index => $obj) {
            $obj = unserialize($obj);
            if ($obj->id == $id) {
                unset($this->data['obj'][$index]);
            }
        }
    }

    public function grow() {
        foreach ($this->data['obj'] as $key => $augalas) {
            $augalas = unserialize($augalas);
            $augalas->auginti($_POST['kiekis'][$augalas->id]);
            self::save($augalas, $key);
        }
    }

    public function skinti() {
        foreach ($this->data['obj'] as $key => $augalas) {

            $augalas = unserialize($augalas);

            if($_POST['skinti'] == $augalas->id){

                $kiek = (int) $_POST['skinam'][$augalas->id];
                if($augalas->count < $kiek || $kiek < 0) {
                    $_SESSION['err'] = 'Blogas skaičius!';
                    break;
                }
                $augalas->count -= $kiek;
                self::save($augalas, $key);
            }
        }
    }
    public function skintiVisus() {
        foreach ($this->data['obj'] as $key => $augalas) {
            $augalas = unserialize($augalas);
            if($_POST['skintiVisus'] == $augalas->id){
                $augalas->nuskintiVisus();
                self::save($augalas, $key);
            }
        }
    }

    public function skintiDerliu() {
        foreach  ($this->data['obj'] as $key => $augalas) {
            $augalas = unserialize($augalas);
            $augalas->nuskintiVisus();
            self::save($augalas, $key);
        }
    }
}