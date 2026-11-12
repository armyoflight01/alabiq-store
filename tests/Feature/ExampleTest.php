<?php

namespace Tests\Feature;

use Tests\TestCase;

class ExampleTest extends TestCase
{
    public function test_home_page_renders_alabiq_design(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertSee('AlabIQ');
        $response->assertSee('Popular near you');
    }

    public function test_shop_marketplace_page_renders(): void
    {
        $response = $this->get('/shop');

        $response->assertStatus(200);
        $response->assertSee('Your favorites, delivered fast.');
        $response->assertSee('BLACK PINOY');
        $response->assertSee('CHOWKING');
    }

    public function test_services_page_renders(): void
    {
        $response = $this->get('/services');

        $response->assertStatus(200);
        $response->assertSee('Order food, shop, or book a ride.');
        $response->assertSee('Shop partner stores');
        $response->assertSee('AL WAFA HYPERMARKET');
    }

    public function test_login_and_register_pages_render(): void
    {
        $login = $this->get('/login');
        $login->assertStatus(200);
        $login->assertSee('Welcome back to');
        $login->assertSee('Sign in');

        $register = $this->get('/register');
        $register->assertStatus(200);
        $register->assertSee('Create account');
    }
}
