<?php
ob_clean();

class BypassLinkDuitCc
{
	public function getUrl($url)
	{
		$data = file_get_contents($url);
		preg_match('/<input type="hidden" name="geturl" value="(.*?)">/mi', $data, $matches, PREG_OFFSET_CAPTURE, 0);
		return $matches[1][0];
	}
}

// https://duit.cc/PtWyD

$class = new BypassLinkDuitCc();

echo "\n [?] Enter Link Duit.cc ( ex. https://duit.cc/PtWyD ): ";
$input = trim(fgets(STDIN, 1024));
echo "\n [!] Loading.....";
sleep(5);
echo "\n [!] Prepare to get real link.....";
sleep(5);
echo "\n [!] Please wait, almost to get real link.....";
sleep(3);
$show = $class->getUrl($input);
if ($show != "") {
	echo "\n [+] Success to Bypassed: ".$show."\n\n";
} else {
	echo "\n [-] Can't to Bypassed :( \n\n";
}