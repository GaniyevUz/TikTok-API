class TikTok
{
    private $links = [];

    public function __construct($url)
    {
        $get = json_decode(file_get_contents("https://tikdown.org/getAjax?url=" . urlencode($url) . "&_token=t4JdZ9etWtvCbI68c77THtVyYJEtEp4DrGg2Af8W"), true);
        $ex = explode('href="', $get['html']);
        array_push($this->links, explode('" name="download"', $ex[1])[0]);
        array_push($this->links, explode('" name="download"', $ex[2])[0]);
    }

    public function getLinks()
    {
        return ['result' => true, 'developer' => 'Jakhongir Ganiev', 'links' => $this->links];
    }
}
