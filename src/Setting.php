<?

namespace Setting;

use GuzzleHttp\Client;

class Setting
{
    private static $URL = 'http://setting.php-weldbook.ru/get/';

    public static function byCode(string $code)
    {
        $client = new Client([
            'base_uri' => static::$URL,
        ]);

        return $client->request('GET', $code);
    }
}
