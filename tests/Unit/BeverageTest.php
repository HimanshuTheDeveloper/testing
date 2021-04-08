<?php

namespace Tests\Unit;

use App\Exceptions\MinorCannotBuyParticularBeverageException;
use App\Models\Beverage;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
// use PHPUnit\Framework\TestCase;
use Tests\TestCase;

class BeverageTest extends TestCase
{
    use DatabaseMigrations;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_beverage_has_name()
    {
        $beverage = Beverage::factory()->make();
        $name = $beverage->name;
        $this->assertNotEmpty($name);
    }
   
    public function test_beverage_has_type()
    {
        $beverage = Beverage::factory()->make();
        $type = $beverage->type;
        $this->assertNotEmpty($type);
    }


    public function test_a_minor_user_can_not_buy_particular_beverage()
    {
        $beverage = Beverage::factory()->make([
            'type' => 'tea'
        ]); 
        $user = User::factory()->make([
            'age' => '17'
        ]); 

        $this->actingAs($user);
        
        $this->expectException(MinorCannotBuyParticularBeverageException::class);
        $beverage->buy();
    }
}
