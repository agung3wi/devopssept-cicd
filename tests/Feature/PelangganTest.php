<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\Pelanggan;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;


class PelangganTest extends TestCase
{
    use DatabaseTransactions;
    /**
     * A basic feature test create data masuk.
     *
     * @return void
     */
    public function test_create_data_masuk()
    {
        $countAwal = Pelanggan::count(); // Menghitung jumlah data awal
        $response = $this->postJson('/api/pelanggan', [
            "nama" => "Jono",
            "kelamin" => "L",
            "phone" => "087123456789",
            "alamat" => "Semarang"
        ]);
        $countAkhir = Pelanggan::count(); // Menghitung jumlah data akhir (setelah penambahan data)
        $this->assertTrue($countAkhir == $countAwal + 1);
    }

    public function test_create_data_valid()
    {
        $response = $this->postJson('/api/pelanggan', [
            "nama" => "Joni",
            "kelamin" => "L",
            "phone" => "087123456789",
            "alamat" => "Semarang"
        ]);

        $pelanggan = Pelanggan::find($response["id"]);
        
        $response
            ->assertJson([
                'nama' => "Joni",
            ]);
        
        $this->assertEquals($pelanggan->nama, "Joni");
        $this->assertEquals($pelanggan->kelamin, "L");
    }
}
