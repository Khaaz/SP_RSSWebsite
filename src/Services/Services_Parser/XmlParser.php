<?php

namespace Services_Parser;

/**
 * Parse a xml file and return an array of RSS object
 *
 * Class XmlParser
 * @package Services_Parser
 */
class XmlParser {
    private $result;
    private $depth;

    private $curNews;
    private $curAttribute;

    public function __construct() {
        $this->depth = 0;
        $this->result = array();
    }

    public function getResult() {
        return $this->result;
    }

    /**
     * Parse le fichier et met le resultat dans Result
     */
    public function parse($path) {
        ob_start();
        $xml_parser = xml_parser_create();
        xml_set_object($xml_parser, $this);
        xml_set_element_handler($xml_parser, "startElement", "endElement");
        xml_set_character_data_handler($xml_parser, 'characterData');
        if (!($fp = fopen($path, "r"))) {
            die("could not open XML input");
        }

        while ($data = fread($fp, 4096)) {
            if (!xml_parse($xml_parser, $data, feof($fp))) {
                die(sprintf("XML error: %s at line %d",
                    xml_error_string(xml_get_error_code($xml_parser)),
                    xml_get_current_line_number($xml_parser)));
            }
        }

        ob_get_contents();
        ob_end_clean();
        fclose($fp);
        xml_parser_free($xml_parser);
    }

    private function startElement($parser, $name, $attrs) {
        if ($name == 'ITEM') {
            $this->curNews = new NewsParsed();
        }
        $this->curAttribute = $name;

        echo "<p style='color:red'> $name</p>\n";
        $this->depth++;
    }

    private function endElement($parser, $name) {
        $this->depth--;

        if ($name == 'ITEM') {
            $this->result[] = $this->curNews;
            $this->curNews = null;
        }
        $this->curAttribute = null;

        echo "<p style='color:red'> $name</p>\n";

    }

    private function characterData($parser, $data) {
        $data = trim($data);

        if (strlen($data) > 0) {
            if (!$this->curNews) {
                return;
            }
            switch ($this->curAttribute) {
                case 'LINK': {
                    $this->curNews->setUrl($data);
                    $this->curNews->setWebsite($data);
                    break;
                }
                case 'TITLE': {
                    $this->curNews->setTitle($data);
                    break;
                }
                case 'DESCRIPTION': {
                    $this->curNews->setDescription($data);
                    break;
                }
                case 'PUBDATE': {
                    $this->curNews->setDate($data);
                    break;
                }
                default: {
                    null;
                }
            }
        }
    }
}
?>