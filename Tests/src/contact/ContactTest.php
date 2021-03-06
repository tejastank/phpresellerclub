<?php

namespace Resellerclub;
use PHPUnit\Framework\TestCase;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2015-10-01 at 00:58:42.
 */
class ContactTest extends TestCase {

  /**
   * @var \Resellerclub\Contact
   */
  protected $object;

  /**
   * Sets up the fixture, for example, opens a network connection.
   * This method is called before a test is executed.
   */
  protected function setUp(): void {
    $mock = $this->getMockBuilder(Contact::class)
      ->disableOriginalConstructor()
      ->setMethods(['callApi'])
      ->getMock();
    $mock->method('callApi')->willReturn(array('success' => TRUE));
    $this->object = $mock;
  }

  /**
   * @covers \Resellerclub\Contact::createContact
   */
  public function testCreateContactCorrect() {
    $contactDetails = array(
      'name' => 'Anish Sheela',
      'company' => 'N/A',
      'email' => 'anishsheela@outlook.com',
      'address-line-1' => '221B Baker St.',
      'city' => 'London',
      'country' => 'IN',
      'zipcode' => '635426',
      'phone-cc' => '91',
      'phone' => '9876543210',
      'customer-id' => '13560700',
      'type' => 'Contact',
    );
    $this->assertArrayHasKey(
      'success',
      $this->object->createContact($contactDetails)
    );
  }

  /**
   * @covers \Resellerclub\Contact::deleteContact
   */
  public function testDeleteContact() {
    $customerId = '46968270';
    $this->assertArrayHasKey(
      'success',
      $this->object->deleteContact($customerId)
    );
  }

  /**
   * @covers \Resellerclub\Contact::deleteContact
   * @expectedException \Resellerclub\InvalidItemException
   */
  public function testDeleteContactWrong() {
    $customerId = '4696';
    $this->object->deleteContact($customerId);
  }

  /**
   * @covers \Resellerclub\Contact::editContact
   */
  public function testEditContact() {
    $contactId = '46968270';
    $contactDetails = array(
      'name' => 'Anish S',
      'company' => 'N/A',
      'email' => 'anishsheela@outlook.com',
      'address-line-1' => '221B Baker St.',
      'city' => 'London',
      'country' => 'IN',
      'zipcode' => '635426',
      'phone-cc' => '91',
      'phone' => '9876543210',
      'customer-id' => '13560700',
      'type' => 'Contact',
    );
    $this->assertArrayHasKey(
      'success',
      $this->object->editContact($contactId, $contactDetails)
    );
  }

  /**
   * @covers \Resellerclub\Contact::getContact
   */
  public function testGetContact() {
    $contactId = '46983302';
    $this->assertArrayHasKey(
      'success',
      $this->object->getContact($contactId)
    );
  }

  /**
   * @covers \Resellerclub\Contact::searchContact
   */
  public function testSearchContact() {
    $customerId = '46983302';
    $contactDetails = array();
    $this->assertArrayHasKey(
      'success',
      $this->object->searchContact($customerId, $contactDetails)
    );
  }

}
