<?php
/**
 * V2AvailablePropertySuburbsTest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Advertising Integration API
 *
 * The 'Advertising' integration focuses on allowing 3rd party systems and customized websites to sync available properties from Palace to display up-to-date advertising on a company's website.<BR><BR>The 'Advertising Integration' area does NOT require an upgrade from a 'Standard' API account to a 'Premium' API Account. There is a NO cost involved in using these contracts unless you are a 3rd Party solution provider wanting to integrate at a partner level.<BR><BR>The following is a list of contracts to integrate 'Available Properties' into a public website.  The first contract /v2AvailableProperties/JSON provides comprehensive array of currrent available properties with details.<BR><BR>  Every time the call is made to this contract it provides the current list at the time of the call.  If a property is no longer showing in the latest call that existed in previous calls you can use the /v2PreviousAvailableProperty/JSON/ contract to get information regarding the leased or withdrawn status and comments of the properties.<BR><BR> You can get a list of related images to a Property in Base64 encoded string (/v2AvailablePropertyImages/JSON) or a URL (/v2AvailablePropertyImagesURL/JSON/) directly to the JPG file.  Use the Base64 encoded option to download the images to your website<BR><BR> (NOTE: Do not use this contract to render images per request as the resulting request will be too slow to handle this).<BR><BR>  You can use the URL requests to link directly to your site.
 *
 * OpenAPI spec version: 2.0.0
 * Contact: development@getpalace.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.19
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Please update the test case below to test the model.
 */

namespace Swagger\Client;

/**
 * V2AvailablePropertySuburbsTest Class Doc Comment
 *
 * @category    Class
 * @description V2AvailablePropertySuburbs
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class V2AvailablePropertySuburbsTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test "V2AvailablePropertySuburbs"
     */
    public function testV2AvailablePropertySuburbs()
    {
    }

    /**
     * Test attribute "property_suburb_code"
     */
    public function testPropertyPropertySuburbCode()
    {
    }

    /**
     * Test attribute "property_suburb_district_or_postcode"
     */
    public function testPropertyPropertySuburbDistrictOrPostcode()
    {
    }

    /**
     * Test attribute "property_suburb_name"
     */
    public function testPropertyPropertySuburbName()
    {
    }

    /**
     * Test attribute "property_suburb_region_or_state"
     */
    public function testPropertyPropertySuburbRegionOrState()
    {
    }

    /**
     * Test attribute "property_suburb_type"
     */
    public function testPropertyPropertySuburbType()
    {
    }
}
