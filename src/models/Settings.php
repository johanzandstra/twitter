<?php
/**
 * @link      https://dukt.net/craft/twitter/
 * @copyright Copyright (c) 2017, Dukt
 * @license   https://dukt.net/craft/twitter/docs/license
 */

namespace dukt\twitter\models;

use craft\base\Model;

/**
 * Settings model class.
 *
 * @author Dukt <support@dukt.net>
 * @since  3.0
 */
class Settings extends Model
{
    // Properties
    // =========================================================================

    /**
     * @var string The amount of time cache should last
     *
     * @see http://www.php.net/manual/en/dateinterval.construct.php
     */
    public $cacheDuration = 'PT10M';

    /**
     * @var bool Whether request to APIs should be cached or not
     */
    public $enableCache = true;

    /**
     * @var string|null OAuth token.
     */
    public $token;

    /**
     * @var string|null OAuth token secret.
     */
    public $tokenSecret;

    /**
     * @var string|null OAuth consumer key.
     */
    public $oauthConsumerKey;


    /**
     * @var string|null OAuth consumer secret.
     */
    public $oauthConsumerSecret;

    // Public Methods
    // =========================================================================

    /**
     * @return array
     */
    public function rules()
    {
        return [
            [['token', 'tokenSecret'], 'string'],
        ];
    }
}
