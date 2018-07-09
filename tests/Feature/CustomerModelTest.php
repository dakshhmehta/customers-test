<?php

namespace Tests\Feature;

use App\Models\Customer;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CustomerModelTest extends TestCase
{
	public function test_full_name_returns_first_and_last_name(){
		$customer = new Customer;
		$customer->first_name = 'John';
		$customer->last_name = 'Doe';
	
	    $this->assertEquals('John Doe', $customer->fullName());
	}

	public function test_gender_returns_male(){
		$customer = new Customer;
		$customer->gender = 1;
	
	    $this->assertEquals('Male', $customer->gender());
	}

	public function test_gender_returns_female(){
		$customer = new Customer;
		$customer->gender = 0;
	
	    $this->assertEquals('Female', $customer->gender());
	}
}
