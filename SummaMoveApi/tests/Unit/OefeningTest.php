<?php

namespace Tests\Unit;

use Tests\TestCase;

use App\Models\Oefening;

class OefeningTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_create_oefening()
    {
        $oefening = new Oefening();
        $oefening->naam = "test";
        $oefening->beschrijving = "test";
        $oefening->img = "test";
        $oefening->save();

        $this->assertTrue($oefening->exists);
    }

    public function test_delete_oefening()
    {
        $oefening = new Oefening();
        $oefening->naam = "test";
        $oefening->beschrijving = "test";
        $oefening->img = "test";
        $oefening->save();

        $oefening->delete();

        $this->assertFalse($oefening->exists);
    }

    public function test_update_oefening()
    {
        $oefening = new Oefening();
        $oefening->naam = "test";
        $oefening->beschrijving = "test";
        $oefening->img = "test";
        $oefening->save();

        $oefening->naam = "test3";
        $oefening->beschrijving = "test3";
        $oefening->img = "test3";
        $oefening->save();

        $this->assertEquals("test3", $oefening->naam);
        $this->assertEquals("test3", $oefening->beschrijving);
        $this->assertEquals("test3", $oefening->img);
    }
}
