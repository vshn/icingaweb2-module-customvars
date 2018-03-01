<?php
namespace Icinga\Module\Customvars\ProvidedHook\Monitoring;

use Icinga\Module\Customvars\Web\Widget\Graphs;
use Icinga\Module\Monitoring\Hook\DetailviewExtensionHook;
use Icinga\Module\Monitoring\Object\MonitoredObject;

class DetailviewExtension extends DetailviewExtensionHook
{
    public function getHtmlForObject(MonitoredObject $object)
    {
	if ($object->getType() == "host") {
            $customvars = $object->__get("customvars");
            if (array_key_exists("icingaweb_customvars", $customvars)) {
	        $html = "<h2>Host variables</h2>\n";
		$html .= "<table class=\"name-value-table\">\n";
		foreach(explode(",", $customvars["icingaweb_customvars"]) as $customvar) {
                    $value = array_key_exists($customvar, $customvars) ? $customvars[$customvar] : "";
                    $html .= "<tr><th>".$customvar."</th><td>".$value."</td></tr>\n";
		}
		$html .= "</table>\n";
	        return $html;
            }
	}
	return "";
    }
}
