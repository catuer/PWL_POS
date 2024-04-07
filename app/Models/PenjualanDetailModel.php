<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PenjualanDetailModel extends Model
{
    use HasFactory;
    protected $table = 't_penjualan_detail';
    protected $primaryKey = 'detail_id';
    protected $fillable = [
        'penjualan_id',
        'barang_id',
        'harga',
        'jumlah',
    ];

    /**
     * Relasi Many to One dengan PenjualanModel
     */
    public function penjualan() {
        return $this->belongsTo(PenjualanModel::class, 'penjualan_id', 'penjualan_id');
    }
    /**
     * Relasi Many to One dengan BarangModel
     */
    public function barang() {
        return $this->belongsTo(BarangModel::class, 'barang_id', 'barang_id');
    }
}
