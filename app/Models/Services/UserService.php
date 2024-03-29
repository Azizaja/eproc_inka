<?php

namespace App\Models\Services;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserService extends Model
{
    use HasFactory;

    public static function getCurrencyValue($currency)
    {
        // Data JSON yang disediakan
        $jsonData = '{"EXCHANGEMboSet":{"rsStart":0,"rsCount":13,"rsTotal":13,"EXCHANGE":[{"rowstamp":"255832022","CURRENCYCODE":"USD","EXCHANGERATE":1.2568983,"ACTIVEDATE":"2018-01-01T00:00:00+07:00","EXPIREDATE":"2018-01-31T23:45:00+07:00","ENTERDATE":"2017-12-30T08:43:30+07:00","ENTERBY":"ANAS0522","CURRENCYCODETO":"CAD","ORGID":"PE","CHANGEBY":"ANAS0522","CHANGEDATE":"2017-12-30T08:43:58+07:00","EXCHANGEID":8347},{"rowstamp":"255831942","CURRENCYCODE":"USD","EXCHANGERATE":0.9787497,"ACTIVEDATE":"2018-01-01T00:00:00+07:00","EXPIREDATE":"2018-01-31T23:45:00+07:00","ENTERDATE":"2017-12-30T08:42:05+07:00","ENTERBY":"ANAS0522","CURRENCYCODETO":"CHF","ORGID":"PE","CHANGEBY":"ANAS0522","CHANGEDATE":"2017-12-30T08:42:34+07:00","EXCHANGEID":8344},{"rowstamp":"255831952","CURRENCYCODE":"USD","EXCHANGERATE":32.6898948,"ACTIVEDATE":"2018-01-01T00:00:00+07:00","EXPIREDATE":"2018-01-31T23:45:00+07:00","ENTERDATE":"2017-12-30T08:42:35+07:00","ENTERBY":"ANAS0522","CURRENCYCODETO":"THB","ORGID":"PE","CHANGEBY":"ANAS0522","CHANGEDATE":"2017-12-30T08:43:02+07:00","EXCHANGEID":8345},{"rowstamp":"255831417","CURRENCYCODE":"USD","EXCHANGERATE":13548.0,"ACTIVEDATE":"2018-01-01T00:00:00+07:00","EXPIREDATE":"2018-01-31T23:45:00+07:00","ENTERDATE":"2017-12-30T08:29:16+07:00","ENTERBY":"ANAS0522","CURRENCYCODETO":"IDR","ORGID":"PE","CHANGEBY":"ANAS0522","CHANGEDATE":"2017-12-30T08:34:54+07:00","EXCHANGEID":8336},{"rowstamp":"255831646","CURRENCYCODE":"USD","EXCHANGERATE":0.7436597,"ACTIVEDATE":"2018-01-01T00:00:00+07:00","EXPIREDATE":"2018-01-31T23:45:00+07:00","ENTERDATE":"2017-12-30T08:36:08+07:00","ENTERBY":"ANAS0522","CURRENCYCODETO":"GBP","ORGID":"PE","CHANGEBY":"ANAS0522","CHANGEDATE":"2017-12-30T08:38:33+07:00","EXCHANGEID":8337},{"rowstamp":"255831671","CURRENCYCODE":"USD","EXCHANGERATE":1.2832845,"ACTIVEDATE":"2018-01-01T00:00:00+07:00","EXPIREDATE":"2018-01-31T23:45:00+07:00","ENTERDATE":"2017-12-30T08:38:40+07:00","ENTERBY":"ANAS0522","CURRENCYCODETO":"AUD","ORGID":"PE","CHANGEBY":"ANAS0522","CHANGEDATE":"2017-12-30T08:39:13+07:00","EXCHANGEID":8338},{"rowstamp":"255831728","CURRENCYCODE":"USD","EXCHANGERATE":1.3369484,"ACTIVEDATE":"2018-01-01T00:00:00+07:00","EXPIREDATE":"2018-01-31T23:45:00+07:00","ENTERDATE":"2017-12-30T08:39:17+07:00","ENTERBY":"ANAS0522","CURRENCYCODETO":"SGD","ORGID":"PE","CHANGEBY":"ANAS0522","CHANGEDATE":"2017-12-30T08:39:55+07:00","EXCHANGEID":8339},{"rowstamp":"255831795","CURRENCYCODE":"USD","EXCHANGERATE":4.0619912,"ACTIVEDATE":"2018-01-01T00:00:00+07:00","EXPIREDATE":"2018-01-31T23:45:00+07:00","ENTERDATE":"2017-12-30T08:39:57+07:00","ENTERBY":"ANAS0522","CURRENCYCODETO":"MYR","ORGID":"PE","CHANGEBY":"ANAS0522","CHANGEDATE":"2017-12-30T08:40:35+07:00","EXCHANGEID":8340},{"rowstamp":"255831805","CURRENCYCODE":"USD","EXCHANGERATE":7.8182437,"ACTIVEDATE":"2018-01-01T00:00:00+07:00","EXPIREDATE":"2018-01-31T23:45:00+07:00","ENTERDATE":"2017-12-30T08:40:37+07:00","ENTERBY":"ANAS0522","CURRENCYCODETO":"HKD","ORGID":"PE","CHANGEBY":"ANAS0522","CHANGEDATE":"2017-12-30T08:41:02+07:00","EXCHANGEID":8341},{"rowstamp":"255831863","CURRENCYCODE":"USD","EXCHANGERATE":112.6948953,"ACTIVEDATE":"2018-01-01T00:00:00+07:00","EXPIREDATE":"2018-01-31T23:45:00+07:00","ENTERDATE":"2017-12-30T08:41:07+07:00","ENTERBY":"ANAS0522","CURRENCYCODETO":"JPY","ORGID":"PE","CHANGEBY":"ANAS0522","CHANGEDATE":"2017-12-30T08:41:37+07:00","EXCHANGEID":8342},{"rowstamp":"255831873","CURRENCYCODE":"USD","EXCHANGERATE":0.8376606,"ACTIVEDATE":"2018-01-01T00:00:00+07:00","EXPIREDATE":"2018-01-31T23:45:00+07:00","ENTERDATE":"2017-12-30T08:41:39+07:00","ENTERBY":"ANAS0522","CURRENCYCODETO":"EUR","ORGID":"PE","CHANGEBY":"ANAS0522","CHANGEDATE":"2017-12-30T08:42:04+07:00","EXCHANGEID":8343},{"rowstamp":"255832003","CURRENCYCODE":"USD","EXCHANGERATE":1.4093415,"ACTIVEDATE":"2018-01-01T00:00:00+07:00","EXPIREDATE":"2018-01-31T23:45:00+07:00","ENTERDATE":"2017-12-30T08:43:04+07:00","ENTERBY":"ANAS0522","CURRENCYCODETO":"NZD","ORGID":"PE","CHANGEBY":"ANAS0522","CHANGEDATE":"2017-12-30T08:43:29+07:00","EXCHANGEID":8346},{"rowstamp":"255832089","CURRENCYCODE":"USD","EXCHANGERATE":49.97971,"ACTIVEDATE":"2018-01-01T00:00:00+07:00","EXPIREDATE":"2018-01-31T23:45:00+07:00","ENTERDATE":"2017-12-30T08:43:59+07:00","ENTERBY":"ANAS0522","CURRENCYCODETO":"PHP","ORGID":"PE","CHANGEBY":"ANAS0522","CHANGEDATE":"2017-12-30T08:44:59+07:00","EXCHANGEID":8348}]}}';

        // Decode data JSON menjadi array asosiatif
        $data = json_decode($jsonData, true);

        foreach ($data['EXCHANGEMboSet']['EXCHANGE'] as $exchange) {
            if ($exchange['CURRENCYCODETO'] == $currency) {
                return $exchange['EXCHANGERATE'];
            }
        }
        return null;
    }
}
