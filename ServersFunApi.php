<?php
namespace brebvix;

class ServersFunApi
{
    const API_URL = 'https://servers.fun/api/';

    private $_identifier = null;

    /**
     * ServersFunApi constructor.
     * @param $identifier
     */
    public function __construct(string $identifier)
    {
        $this->_identifier = $identifier;
    }

    /**
     * @param $method
     * @param array $params
     * @return bool|mixed
     */
    public function get($method, $params = [])
    {
        $buildUrl = ServersFunApi::API_URL . $method . '/' . $this->_identifier;

        if (!empty($params)) {
            $buildUrl .= '?' . http_build_query($params);
        }

        $data = $this->_callUrl($buildUrl);

        if ($data === false) {
            echo 'Connection error, check you internet';
            return false;
        }

        return json_decode($data, true);
    }

    /**
     * @param $url
     * @return bool|mixed|string
     */
    private function _callUrl(string $url)
    {
        if (function_exists('curl_init')) {
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($curl, CURLOPT_HEADER, false);
            curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
            curl_setopt($curl, CURLOPT_URL, $url);
            curl_setopt($curl, CURLOPT_REFERER, $url);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            $resultData = curl_exec($curl);
            curl_close($curl);
        } else {
            $resultData = file_get_contents($url);
        }

        if (!empty($resultData)) {
            return $resultData;
        } else {
            return false;
        }
    }
}