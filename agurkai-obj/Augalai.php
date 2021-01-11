<?php
class Augalai {

    public static function skintiDerliu($visasDerlius) { // <<< $visiAgurkai = $_SESSION['obj]
        foreach ($visasDerlius as $key => $agurkas) {
            $agurkas = unserialize($agurkas);
            $agurkas->skintiVisus();
            $agurkas = serialize($agurkas);
            $visasDerlius[$key] = $agurkas;
        }
    return $visasDerlius;
    }
    public function skintiVisus() {
        $this->count = 0;
    }
}