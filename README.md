# TikTok-API

```php
   <?php
    require_once 'tiktok.php';
    if (isset($_GET['url'])) {
        $url = $_GET['url'];
        header("content-type: application/json");
        $tiktok = new TikTok($url);
        echo json_encode($tiktok->getLinks(), JSON_PRETTY_PRINT);
    } else {
        echo json_encode(['result' => false, 'developer' => 'Jakhongir Ganiev', 'message' => "Use 'url' request to download"], JSON_PRETTY_PRINT);
    }
```
