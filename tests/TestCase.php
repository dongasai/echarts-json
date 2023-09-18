<?php

namespace Tests;

use GPBMetadata\Request;
use GuzzleHttp\Exception\ServerException;
use Http\Request\RequestMessage;
use Http\Response\ResponseMessage;
use Http\Response\ResultMessage\ResultCode;
use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Log;
use Monolog\Logger;
use Tests\Helper\HttpClient;

abstract class TestCase extends BaseTestCase
{

    use CreatesApplication;
    static $morenIndex = null;

    public static function setUpBeforeClass(): void
    {
        HttpClient::$morenIndex = static::class;
    }

    /**
     * 验证返回值 是否为成功
     *
     * @param ResponseMessage $response
     * @return void
     */
    static public function assertResultSUCCESS(ResponseMessage $response)
    {
        dump($response->serializeToJsonString());
        if (ResultCode::SUCCESS != $response->getResult()->getCode()) {
            self::getdeug();
        }
        self::assertEquals(ResultCode::SUCCESS, $response->getResult()->getCode());
    }

    static public function assertResultERROR(ResponseMessage $response)
    {
        dump($response->serializeToJsonString());
        if (ResultCode::ERROR != $response->getResult()->getCode()) {
            self::getdeug();
        }
        self::assertEquals(ResultCode::ERROR, $response->getResult()->getCode());
    }


    static public function post1($url, $data, $index)
    {
        $client = self::getHttpClient($index);
        $ur     = Config::get('test.url');
        $res    = $client->request('POST', $ur . $url, [
            'form_params' => $data,
            'http_errors' => false,
            'timeout'=>30,
            'headers'     => [
                'accept-encoding' => 'gzip, deflate',
            ],
        ]);
        if ($res->getStatusCode() != 200) {
            dump($res->getStatusCode());
        }
        $re = $res->getBody()->getContents();
        file_put_contents(BASE_PATH . '/public/testerror.html', $re);

        return $re;
    }

    static public function getdeug()
    {
        $url    = '/debug';
        $client = self::getHttpClient();
        $res    = $client->request('GET', 'http://127.0.0.1' . $url, [
            'http_errors' => false
        ]);


        $re = $res->getBody()->getContents();
        file_put_contents(BASE_PATH . '/public/debug.html', $re);

        return $re;
    }


    /**
     * 获取请求客户端
     *
     * @return \GuzzleHttp\Client
     */
    static public function getHttpClient($index = null)
    {
        if($index === null){
            $index = static::$morenIndex;
        }
        return HttpClient::getHttpClient($index);
    }

    public function get($url, $data = [])
    {
        $client = new \GuzzleHttp\Client();
        try {
            $res = $client->request('GET', 'http://127.0.0.1' . $url, [
                'query'       => $data,
                'http_errors' => false
            ]);

        } catch (ServerException $serverException) {
            Log::debug($serverException->getMessage());
        }

        return $res;
    }


    /**
     * 进行protobuf请求
     *
     * @param RequestMessage $data
     * @return ResponseMessage
     * @throws \Exception
     */
    static public function postProtobuf($data, $index = null)
    {
        $mt = microtime(true);
        $data->setUnid(uniqid());
        dump($data->serializeToJsonString());

        $drequest = [];
        if (PROTBUF_REQUEST_JSON) {
            $drequest = [
                'pjson' => $data->serializeToJsonString()
            ];
        } else {
            $drequest = [
                'pbinb64' => base64_encode($data->serializeToString())
            ];
        }
        $json     = self::post1('/api', $drequest, $index);
        $response = new ResponseMessage();

        if (substr($json, 0, 1) != '{') {
            $response->mergeFromString($json);
        } else {
            $response->mergeFromJsonString($json);
        }
        $time = microtime(true) - $mt;
        echo " request time $time ";
        return $response;
    }

}
