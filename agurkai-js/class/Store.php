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
            file_put_contents(self::PATH.$this->fileName.'.json', json_encode(['augalas' => [], 'augalasID' => 0])); // pradinis masyvas
            $this->data = ['augalas' => [], 'augalasID' => 0];
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
        $id = $this->data['augalasID'];
        $this->data['augalasID']++;
        return $id;
    }

    public function save($augalas, $key) {
        $augalas = serialize($augalas);
        $this->data['augalas'][$key] = $augalas;
    }

    public function addAgurkas(Agurkas $agurkasObj) {
        $this->data['augalas'][] = serialize($agurkasObj);
    }

    public function addPomidoras(Pomidoras $pomidorasObj) {
        $this->data['augalas'][] = serialize($pomidorasObj);
    }

    public function getAll()
    {
        $all = [];
        foreach($this->data['augalas'] as $obj) {
            $all[] = unserialize($obj);
        }
        return $all;
    }


    public function remove($id)
    {
        foreach($this->data['augalas'] as $index => $obj) {
            $obj = unserialize($obj);
            if ($obj->id == $id) {
                unset($this->data['augalas'][$index]);
            }
        }
    }

    public function grow() {
        foreach ($this->data['augalas'] as $key => $augalas) {
            $augalas = unserialize($augalas);
            $augalas->auginti($_POST['kiekis'][$augalas->id]);
            self::save($augalas, $key);
        }
    }

    public function skinti() {
        foreach ($this->data['augalas'] as $key => $augalas) {

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
        foreach ($this->data['augalas'] as $key => $augalas) {
            $augalas = unserialize($augalas);
            if($_POST['skintiVisus'] == $augalas->id){
                $augalas->nuskintiVisus();
                self::save($augalas, $key);
            }
        }
    }

    public function skintiDerliu() {
        foreach  ($this->data['augalas'] as $key => $augalas) {
            $augalas = unserialize($augalas);
            $augalas->nuskintiVisus();
            self::save($augalas, $key);
        }
    }
}