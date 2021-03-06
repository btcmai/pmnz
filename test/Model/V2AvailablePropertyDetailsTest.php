<?php
/**
 * V2AvailablePropertyDetailsTest
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
 * V2AvailablePropertyDetailsTest Class Doc Comment
 *
 * @category    Class
 * @description V2AvailablePropertyDetails
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class V2AvailablePropertyDetailsTest extends \PHPUnit_Framework_TestCase
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
     * Test "V2AvailablePropertyDetails"
     */
    public function testV2AvailablePropertyDetails()
    {
    }

    /**
     * Test attribute "property_address1"
     */
    public function testPropertyPropertyAddress1()
    {
    }

    /**
     * Test attribute "property_address2"
     */
    public function testPropertyPropertyAddress2()
    {
    }

    /**
     * Test attribute "property_address3"
     */
    public function testPropertyPropertyAddress3()
    {
    }

    /**
     * Test attribute "property_address4"
     */
    public function testPropertyPropertyAddress4()
    {
    }

    /**
     * Test attribute "property_agent"
     */
    public function testPropertyPropertyAgent()
    {
    }

    /**
     * Test attribute "property_change_code"
     */
    public function testPropertyPropertyChangeCode()
    {
    }

    /**
     * Test attribute "property_code"
     */
    public function testPropertyPropertyCode()
    {
    }

    /**
     * Test attribute "property_code_global"
     */
    public function testPropertyPropertyCodeGlobal()
    {
    }

    /**
     * Test attribute "property_custom_list"
     */
    public function testPropertyPropertyCustomList()
    {
    }

    /**
     * Test attribute "property_date_available"
     */
    public function testPropertyPropertyDateAvailable()
    {
    }

    /**
     * Test attribute "property_features"
     */
    public function testPropertyPropertyFeatures()
    {
    }

    /**
     * Test attribute "property_grid"
     */
    public function testPropertyPropertyGrid()
    {
    }

    /**
     * Test attribute "property_management_type"
     */
    public function testPropertyPropertyManagementType()
    {
    }

    /**
     * Test attribute "property_name"
     */
    public function testPropertyPropertyName()
    {
    }

    /**
     * Test attribute "property_owner_code"
     */
    public function testPropertyPropertyOwnerCode()
    {
    }

    /**
     * Test attribute "property_rent_amount"
     */
    public function testPropertyPropertyRentAmount()
    {
    }

    /**
     * Test attribute "property_rental_period"
     */
    public function testPropertyPropertyRentalPeriod()
    {
    }

    /**
     * Test attribute "property_sort_code"
     */
    public function testPropertyPropertySortCode()
    {
    }

    /**
     * Test attribute "property_status"
     */
    public function testPropertyPropertyStatus()
    {
    }

    /**
     * Test attribute "property_suburb"
     */
    public function testPropertyPropertySuburb()
    {
    }

    /**
     * Test attribute "property_unit"
     */
    public function testPropertyPropertyUnit()
    {
    }
}
