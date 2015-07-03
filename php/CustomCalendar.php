<?php
/*
 * @Author Flester Iulian
 * @site www.flester.ro
 * @license http://creativecommons.org/licenses/by-nd/3.0/deed.en_US
 * */
Class CustomCalendar {

    public $lunaCurenta;
    public $lunaPrecedenta;
    public $lunaUrmatoare;

    public $primaZiDinCalendar;
    public $ultimaZiDinCalendar;
    public $eLaFinal = false;
    public $eAzi = false;
    public $cursor;
    public $azi;

    public $data;

    public function add($date, $value, $href = "", $type = "text", $title = "", $alt = "", $class = "", $id = "", $target = '_blank') {
        $data = new stdClass();
        $data -> value = $value;
        $data -> href = $href;
        $data -> title = $title;

        $data -> alt = $alt;
        $data -> class = $class;
        $data -> id = $id;

        $data -> type = $type;
        $data -> target = $target;

        $this -> data[(string)$date][] = $data;

    }

    function __construct($fisier = false, $date = null) {

        /* load the items from xml*/
        $this -> data = array();
        if ($fisier === false) {
            $xml = simplexml_load_file($fisier);
            foreach ($xml->children() as $a => $children) {
                $values = $children -> attributes();
                $data = new stdClass();
                $data -> value = (string)$children;
                $data -> href = $values['href'];
                $data -> title = $values['title'];

                $data -> alt = $values['alt'];
                $data -> class = $values['class'];
                $data -> id = $values['id'];

                $data -> type = $values['type'];
                $data -> target = $values['target'];

                $this -> data[(string)$values['date']][] = $data;

            }
        }

        if ($date === null) {

            $this -> lunaCurenta = new DateTime();

        } else {

            $this -> lunaCurenta = new DateTime($date);

        }
		$temp_date = new DateTime(); 
        $this -> azi = $temp_date->sub(new DateInterval('P1D'));
        $this -> lunaUrmatoare = $this -> getLunaUrmatoare();
        $this -> lunaPrecedenta = $this -> getLunaPrecedenta();
        $this -> primaZiDinLuna = new DateTime($this -> lunaCurenta -> format('Y-m-01'));
        $this -> ultimaZiDinCalendar = $this -> getUltimaZiDinCalendar();
        $this -> primaZiDinCalendar = $this -> getPrimaZiDinCalendar();
        $this -> injCode = '';

    }

    public function getCode() {
        $content = '';
        if (isset($this -> data[$this -> cursor -> format('Y-m-d')])) {
            $content = '<div class="sPluginContainer">';
            $data = $this -> data[$this -> cursor -> format('Y-m-d')];
            foreach ($data as $xml) {

                switch($xml->type) {

                    case 'image' :
                        $content .= '<a href="' . $xml -> href . '" target="' . $xml -> target . '">';
                        $content .= '<img src="' . $xml -> value . '"  alt="' . $xml -> alt . '" title="' . $xml -> title . '" class="' . $xml -> class . '"  />';
                        $content .= '</a>';
                        break;
					case 'text2' :
                        $content .= '<p title="'. $xml -> title .'">';
                        $content .= $xml -> value;
                        $content .= '</p>';
                        break;	
                    case 'text' :
                    default :
                        $content .= '<a href="' . $xml -> href . '" target="' . $xml -> target . '" >';
                        $content .= $xml -> value;
                        $content .= '</a>';
                        break;
                }
            }
            $content .= '</div>';
        }

        return $content;

    }

    public function getPrimaZiDinCalendar() {
        $ziPZDL = $this -> primaZiDinLuna -> format('N') - 1;

        $primaZiDinCalendar = clone $this -> primaZiDinLuna;
        if ($ziPZDL > 0) {
            $primaZiDinCalendar -> sub(new DateInterval('P' . $ziPZDL . 'D'));
        }
        return $primaZiDinCalendar;
    }

    public function getUltimaZiDinCalendar() {

        $ultimaZiDinLuna = new DateTime($this -> lunaUrmatoare -> format('Y-m-01'));
        $ultimaZiDinLuna -> sub(new DateInterval('P1D'));
        $nZIle = 7 - $ultimaZiDinLuna -> format('N');

        if ($nZIle > 0) {
            $ultimaZiDinLuna -> add(new DateInterval('P' . $nZIle . 'D'));

        }
        return $ultimaZiDinLuna;
    }

    public function getLunaUrmatoare() {

        $newDate = clone $this -> lunaCurenta;
        $newDate = $newDate -> add(new DateInterval('P1M'));
        return $newDate;
    }

    public function getLunaPrecedenta() {

        $newDate = clone $this -> lunaCurenta;
        $newDate = $newDate -> sub(new DateInterval('P1M'));
        return $newDate;
    }

    public function start() {

        $this -> cursor = clone $this -> primaZiDinCalendar;
    }

    // ia urmatoarea data si vezi daca nu cumva a ajuns la sfarsit
    public function getNextDay() {
        if ($this -> cursor -> format('Y-m-d') == $this -> ultimaZiDinCalendar -> format('Y-m-d')) {

            $this -> eLaFinal = true;
        }

        $this -> cursor -> add(new DateInterval('P1D'));
        if ($this -> cursor ->format('Y-m-d') == $this -> azi -> format('Y-m-d')) {

            $this -> eAzi = true;
        } else {
            $this -> eAzi = false;
        }
        return $this -> cursor;
    }

}
?>
