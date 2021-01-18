<?php
namespace Plants;
use Garden\Darzas;

abstract class Augalai implements Darzas {

    public function skintiDerliu($visasDerlius) { // <<< $visiAgurkai = $this->data['obj']
        foreach ($visasDerlius as $key => $agurkas) {
            $agurkas = unserialize($agurkas);
            $agurkas->nuskintiVisus();
            $agurkas = serialize($agurkas);
            $visasDerlius[$key] = $agurkas;
        }
    return $visasDerlius;
    }

    public function nuskintiVisus() {
        $this->count = 0;
    }

    public function auginti($kiek) {
        $this->count = $this->count + $kiek;
    }
}